@extends('layouts/layoutMaster')

@section('title', 'Team Members Management')

@section('vendor-style')
  <link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css')}}">
  <link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css')}}">
  <link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css')}}">
  <link rel="stylesheet" href="{{asset('assets/vendor/libs/select2/select2.css')}}" />
  <link rel="stylesheet" href="{{asset('assets/vendor/libs/@form-validation/umd/styles/index.min.css')}}" />
  <link rel="stylesheet" href="{{asset('assets/vendor/libs/animate-css/animate.css')}}" />
  <link rel="stylesheet" href="{{asset('assets/vendor/libs/sweetalert2/sweetalert2.css')}}" />
@endsection

@section('vendor-script')
  <script src="{{asset('assets/vendor/libs/moment/moment.js')}}"></script>
  <script src="{{asset('assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js')}}"></script>
  <script src="{{asset('assets/vendor/libs/select2/select2.js')}}"></script>
  <script src="{{asset('assets/vendor/libs/@form-validation/umd/bundle/popular.min.js')}}"></script>
  <script src="{{asset('assets/vendor/libs/@form-validation/umd/plugin-bootstrap5/index.min.js')}}"></script>
  <script src="{{asset('assets/vendor/libs/@form-validation/umd/plugin-auto-focus/index.min.js')}}"></script>
  <script src="{{asset('assets/vendor/libs/cleavejs/cleave.js')}}"></script>
  <script src="{{asset('assets/vendor/libs/cleavejs/cleave-phone.js')}}"></script>
  <script src="{{asset('assets/vendor/libs/sweetalert2/sweetalert2.js')}}"></script>
@endsection

@section('page-script')
  <script src="{{asset('js/team-management.js')}}"></script>
@endsection

@section('content')

  <!-- Team Members List Table -->
  <div class="card">
    <div class="card-header">
      <h5 class="card-title mb-0">Manage Team Members</h5>
    </div>
    <div class="card-datatable table-responsive">
      <table class="datatables-team-members table">
        <thead class="border-top">
        <tr>
          <th></th>
          <th>Id</th>
          <th>Name</th>
          <th>Designation</th>
          <th>Image</th>
          <th>LinkedIn URL</th>
          <th>Quote</th>
          <th>Actions</th>
        </tr>
        </thead>
      </table>
    </div>
    <!-- Offcanvas to add new team member -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasAddTeamMember" aria-labelledby="offcanvasAddTeamMemberLabel">
      <div class="offcanvas-header">
        <h5 id="offcanvasAddTeamMemberLabel" class="offcanvas-title">Add Team Member</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body mx-0 flex-grow-0">
        <form class="add-new-team-member pt-0" id="addNewTeamMemberForm">
          <input type="hidden" name="id" id="team_member_id">
          <div class="mb-3">
            <label class="form-label" for="add-team-member-name">Name</label>
            <input type="text" class="form-control" id="add-team-member-name" placeholder="Name" name="name"/>
          </div>
          <div class="mb-3">
            <label class="form-label" for="add-team-member-name">Designation</label>
            <input type="text" class="form-control" id="add-team-member-designation" placeholder="Designation" name="designation"/>
          </div>
          <div class="mb-3">
            <label class="form-label" for="add-team-member-name">Image</label>
            <input type="file" class="form-control" id="add-team-member-image" placeholder="Image" name="image"/>
          </div>
          <div class="mb-3">
            <label class="form-label" for="add-team-member-name">LinkedIn URL</label>
            <input type="text" class="form-control" id="add-team-member-linkedin_url" placeholder="url" name="linkedin_url"/>
          </div>
          <div class="mb-3">
            <label class="form-label" for="add-team-member-name">Quote</label>
            <input type="text" class="form-control" id="add-team-member-quote" placeholder="Quote" name="quote"/>
          </div>
          <!-- Add other form fields here -->
          <button type="submit" class="btn btn-primary me-sm-3 me-1 data-submit">Submit</button>
          <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="offcanvas">Cancel</button>
        </form>
      </div>
    </div>
  </div>
@endsection
