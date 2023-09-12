<?php

namespace App\Http\Controllers;

use App\Models\TeamMember;
use Illuminate\Http\Request;

class LandingController extends Controller
{
  public function index()
  {
    return view('landing.landing');
  }

  public function aboutUs()
  {
    $members = TeamMember::query()->get();
    return view('landing.about-us', compact('members'));
  }

  public function bookDemo()
  {
    return view('landing.book-demo');
  }
}
