<?php
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App{
/**
 * App\User
 *
 * @property int $id
 * @property string $email
 * @property string $provider
 * @property string $provider_id
 * @property string $name
 * @property int|null $gender
 * @property string|null $birthday
 * @property string|null $about
 * @property string|null $address1
 * @property string|null $address2
 * @property string|null $city
 * @property string|null $state
 * @property string|null $country
 * @property string|null $postal_code
 * @property string|null $twitter
 * @property string|null $facebook
 * @property string|null $twitch
 * @property string|null $google
 * @property string|null $youtube
 * @property string|null $steam
 * @property string|null $website
 * @property string|null $alias
 * @property string $avatar
 * @property string|null $remember_token
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read \Illuminate\Database\Eloquent\Collection|\HttpOz\Roles\Models\Role[] $roles
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereAbout($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereAddress1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereAddress2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereAlias($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereAvatar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereBirthday($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereFacebook($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereGender($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereGoogle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User wherePostalCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereProvider($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereProviderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereSteam($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereTwitch($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereTwitter($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereWebsite($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereYoutube($value)
 */
	class User extends \Eloquent {}
}

namespace App{
/**
 * App\Setting
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property string|null $logo
 * @property string|null $favicon
 * @property int $isLive
 * @property string $timezone
 * @property string|null $google_analytics_id
 * @property string|null $mlg
 * @property string|null $twitch
 * @property string|null $twitter
 * @property string|null $facebook
 * @property string|null $google
 * @property string|null $instagram
 * @property string|null $youtube
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Setting whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Setting whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Setting whereFacebook($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Setting whereFavicon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Setting whereGoogle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Setting whereGoogleAnalyticsId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Setting whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Setting whereInstagram($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Setting whereIsLive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Setting whereLogo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Setting whereMlg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Setting whereTimezone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Setting whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Setting whereTwitch($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Setting whereTwitter($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Setting whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Setting whereYoutube($value)
 */
	class Setting extends \Eloquent {}
}

