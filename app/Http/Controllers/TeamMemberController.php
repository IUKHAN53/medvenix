<?php

namespace App\Http\Controllers;

use App\Models\TeamMember;
use App\Models\User;
use Illuminate\Http\Request;

class TeamMemberController extends Controller
{
  public function list()
  {
    return view('teams.team-management');
  }

  public function index(Request $request)
  {
    $columns = [
      1 => 'id',
      2 => 'name',
      3 => 'designation',
      4 => 'image',
      5 => 'linkedin_url',
      6 => 'quote',
    ];

    $totalData = TeamMember::count();
    $totalFiltered = $totalData;

    $limit = $request->input('length');
    $start = $request->input('start');
    $order = $columns[$request->input('order.0.column')];
    $dir = $request->input('order.0.dir');

    if (empty($request->input('search.value'))) {
      $teamMembers = TeamMember::offset($start)
        ->limit($limit)
        ->orderBy($order, $dir)
        ->get();
    } else {
      $search = $request->input('search.value');
      $teamMembers = TeamMember::where('id', 'LIKE', "%{$search}%")
        ->orWhere('name', 'LIKE', "%{$search}%")
        ->orWhere('designation', 'LIKE', "%{$search}%")
        ->offset($start)
        ->limit($limit)
        ->orderBy($order, $dir)
        ->get();

      $totalFiltered = TeamMember::where('id', 'LIKE', "%{$search}%")
        ->orWhere('name', 'LIKE', "%{$search}%")
        ->orWhere('designation', 'LIKE', "%{$search}%")
        ->count();
    }

    $data = [];
    if (!empty($teamMembers)) {
      foreach ($teamMembers as $member) {
        $nestedData['id'] = $member->id;
        $nestedData['name'] = $member->name;
        $nestedData['designation'] = $member->designation;
        $nestedData['image'] = $member->image;
        $nestedData['linkedin_url'] = $member->linkedin_url;
        $nestedData['quote'] = $member->quote;
        $data[] = $nestedData;
      }
    }

    return response()->json([
      'draw' => intval($request->input('draw')),
      'recordsTotal' => intval($totalData),
      'recordsFiltered' => intval($totalFiltered),
      'data' => $data,
    ]);
  }

  public function create()
  {
    return view('team_members.create');
  }

  public function store(Request $request)
  {
    $memberID = $request->id;

    // Handle the image upload
    if ($request->hasFile('image')) {
      $image = $request->file('image');
      $imageName = 'team-member-'.time() . '.' . $image->getClientOriginalExtension();
      $image->move(public_path('images'), $imageName);
    } else {
      $imageName = null;
    }

    $data = [
      'name' => $request->name,
      'designation' => $request->designation,
      'linkedin_url' => $request->linkedin_url,
      'quote' => $request->quote,
    ];

    if ($imageName) {
      $data['image'] = $imageName;
    }

    if ($memberID) {
      // Update the record
      $teamMember = TeamMember::updateOrCreate(
        ['id' => $memberID],
        $data
      );
      return response()->json('Updated');
    } else {
      // Create a new record
      $teamMember = TeamMember::create($data);
      return response()->json('Created');
    }
  }

  public function edit($id)
  {
    $teamMember = TeamMember::findOrFail($id);
    return response()->json($teamMember);
  }

  public function update(Request $request, $id)
  {
    $teamMember = TeamMember::findOrFail($id);
    $teamMember->update($request->all());

    return redirect()->route('team_members.index')->with('success', 'Team member updated successfully.');
  }

  public function destroy($id)
  {
    $teamMember = TeamMember::findOrFail($id);
    $teamMember->delete();

    return response()->json(['success' => 'Member deleted successfully.']);
  }
}
