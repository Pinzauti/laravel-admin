<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/admin';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Redirect the user to the OAuth Provider.
     *
     * @param $provider
     * @return Response
     */
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    /**
     * Obtain the user information from provider.  Check if the user already exists in our
     * database by looking up their provider_id in the database.
     * If the user exists, log them in. Otherwise, create a new user then log them in. After that
     * redirect them to the authenticated users homepage.
     *
     * @param $provider
     * @return Response
     */
    public function handleProviderCallback($provider)
    {

        $user = Socialite::driver($provider)->user();

        //Find the user, or create the user if not in database and assign it to a variable
        $authUser = $this->findOrCreateUser($user, $provider);

        //Log the user in
        Auth::login($authUser, true);



        //redirect the user to the page they were trying to access
        return redirect($this->redirectTo);

    }

    /**
     * If a user has registered before using social auth, return the user
     * else, create a new user object.
     * @param  $user Socialite user object
     * @param $provider Social auth provider
     * @return  User
     */
    public function findOrCreateUser($user, $provider)
    {
        $authUser = User::where('provider_id', $user->id)->first();

        //if there is an user in the database, return the user
        if ($authUser) {
            return $authUser;
        }

        //If no user is in the database, create user from oAuth info.
        $newUser = User::create([
            'name'     => $user->getName(),
            'email'    => $user->getEmail(),
            'avatar'    => $user->avatar_original,
            'provider' => $provider,
            'provider_id' => $user->getId()

        ]);

        $this->addUserToRole($newUser, 'user');

        return $newUser;
    }

    /**
     * Add User to given role.
     * @param $user
     * @param string $roleSlug
     */
    public function addUserToRole($user, $roleSlug = "user")
    {
        $role = \HttpOz\Roles\Models\Role::findBySlug($roleSlug);
        $user->attachRole($role);
    }
}
