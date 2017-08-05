<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\Datatables\Datatables;

class UsersController extends Controller
{
    public function index()
    {
        return view('admin.users.index')->with('users', User::all());
    }

    public function edit(Request $request)
    {
        return view('admin.users.edit', ['user' => User::find($request->id)]);
    }

    public function update($id, Request $request)
    {
        //todo validation
        $user = User::findOrFail($id);
        $gender = $request->input('gender');

        //Update the user.
        $user->update([
            'name'   => $request->input('name'),
            'email'  => $request->input('email'),
            'alias'  => $request->input('alias'),
            'gender' => $gender[0]
        ]);

        flash()->success('Updated!', 'User Details have been updated');

        return redirect()->route('admin.users.edit', $id);
    }


    public function destroy($id)
    {
        User::destroy($id);
    }

    /**
     * Process datatables ajax request.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function userData()
    {
        $users = User::all();

        return Datatables::of($users)
            ->addColumn('action', function ($user) {
                return '<a href="' . route('admin.users.edit', $user->id) . '" class="btn btn-xs btn-primary"><i class="fa fa-edit"></i> Edit</a>
                <button class="btn btn-xs btn-danger delete" data-remote="' . route('admin.users.destroy', $user->id) . '">Delete</button>';
            })
            ->editColumn('created_at', function ($user) {
                return $user->created_at ? with(new Carbon($user->created_at))->format('m/d/Y') : '';
            })
            ->make(TRUE);
    }
}
