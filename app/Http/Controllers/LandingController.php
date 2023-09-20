<?php

namespace App\Http\Controllers;

use App\Models\SiteSettings;
use App\Models\TeamMember;
use Illuminate\Http\Request;

class LandingController extends Controller
{
  public function index()
  {
    $settings = SiteSettings::first();
    return view('landing.landing', compact('settings'));
  }

  public function aboutUs()
  {
    $settings = SiteSettings::first();
    $members = TeamMember::query()->get();
    return view('landing.about-us', compact('members', 'settings'));
  }

  public function bookDemo()
  {
    return view('landing.book-demo');
  }
}
