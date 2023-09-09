<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

      // Initialize an empty array to store the data
      $registeredUsersData = [];

// Define the date range for which you want to get the data
      $start_date = Carbon::now()->subMonths(12); // Last 12 months
      $end_date = Carbon::now();

// Query and aggregate by month
      $users = User::select(DB::raw('count(id) as count'), DB::raw('MONTH(created_at) as month'), DB::raw('YEAR(created_at) as year'))
        ->whereBetween('created_at', [$start_date, $end_date])
        ->groupBy(DB::raw('MONTH(created_at)'), DB::raw('YEAR(created_at)'))
        ->orderBy(DB::raw('YEAR(created_at)'), 'ASC')
        ->orderBy(DB::raw('MONTH(created_at)'), 'ASC')
        ->get();

// Format the data
      foreach ($users as $user) {
        $date = Carbon::create($user->year, $user->month, 1)->format('M y');
        $registeredUsersData[$date] = $user->count;
      }
      $dates = array_keys($registeredUsersData);
      $counts = array_values($registeredUsersData);

      $seriesData = [
        'name' => 'Registered Users',
        'data' => $counts,
      ];

      return view('dashboard', [
        'totalUser' => $userCount,
        'verified' => $verified,
        'notVerified' => $notVerified,
        'userDuplicates' => $userDuplicates,
        'seriesData' => $seriesData,
        'dates' => $dates,
      ]);
    }
}
