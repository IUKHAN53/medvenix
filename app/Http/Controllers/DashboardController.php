<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
      $users = User::all();
      $userCount = $users->count();
      $verified = User::whereNotNull('email_verified_at')->get()->count();
      $notVerified = User::whereNull('email_verified_at')->get()->count();
      $usersUnique = $users->unique(['email']);
      $userDuplicates = $users->diff($usersUnique)->count();
      return view('dashboard', [
        'totalUser' => $userCount,
        'verified' => $verified,
        'notVerified' => $notVerified,
        'userDuplicates' => $userDuplicates,
      ]);
    }
}
