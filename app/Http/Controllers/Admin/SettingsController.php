<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Setting;

class SettingsController extends Controller
{
    public function index()
    {

        $settings = Setting::findOrNew(1);
        $settings->save();

        return view('admin.settings.index')->with('settings', $settings);
    }

    public function update(Request $request)
    {
        //Todo Validation

        $settings = Setting::findOrFail(1);

        //Update the user.
        $settings->update([
            'title'               => $request->input('title'),
            'description'         => $request->input('description'),
            'logo'                => $request->input('logo'),
            'favicon'             => $request->input('favicon'),
            'isLive'              => $request->input('isLive')[0],
            'timezone'            => $request->input('timezone'),
            'google_analytics_id' => $request->input('analytics'),
            'mlg'                 => $request->input('mlg'),
            'twitch'              => $request->input('twitch'),
            'twitter'             => $request->input('twitter'),
            'facebook'            => $request->input('facebook'),
            'google'              => $request->input('google'),
            'instagram'           => $request->input('instagram'),
            'youtube'             => $request->input('youtube')
        ]);

        flash()->success('Updated!', 'Settings have been updated');

        return redirect()->route('admin.settings');
    }
}
