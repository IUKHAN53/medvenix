<?php

namespace App\Http\Controllers;

use App\Models\SiteSettings;
use App\Models\TeamMember;
use App\Models\User;
use Illuminate\Http\Request;

class SiteSettingsController extends Controller
{
  public function index(Request $request)
  {
    $settings = SiteSettings::first();
    return view('settings.index', compact('settings'));
  }

  public function store(Request $request)
  {
    // Validate the request data
    $request->validate([
      'home_video' => 'nullable|mimes:mp4,mkv,avi|max:30480', // 20MB
      'about_video' => 'nullable|mimes:mp4,mkv,avi|max:30480', // 20MB
      'youtube_link' => 'nullable|url',
      'linkedin_link' => 'nullable|url',
      'twitter_link' => 'nullable|url',
      'privacy_link' => 'nullable|url',
      'tos_link' => 'nullable|url',
      'cookie_policy_link' => 'nullable|url',
      'eula_link' => 'nullable|url',
    ]);

    // Handle file uploads (if any)
    if ($request->hasFile('home_video')) {
      $homeVideoPath = $request->file('home_video')->store('videos', 'public');
    }

    if ($request->hasFile('about_video')) {
      $aboutVideoPath = $request->file('about_video')->store('videos', 'public');
    }

    // Save the data to the database
    $settings = SiteSettings::first();
    $settings->home_video = $homeVideoPath ?? null;
    $settings->about_video = $aboutVideoPath ?? null;
    $settings->youtube_link = $request->youtube_link;
    $settings->linkedin_link = $request->linkedin_link;
    $settings->twitter_link = $request->twitter_link;
    $settings->privacy_link = $request->privacy_link;
    $settings->tos_link = $request->tos_link;
    $settings->cookie_policy_link = $request->cookie_policy_link;
    $settings->eula_link = $request->eula_link;
    $settings->save();

    // Redirect back with a success message
    return redirect()->back()->with('success', 'Settings updated successfully.');
  }
}
