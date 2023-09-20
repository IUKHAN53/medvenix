@extends('layouts/layoutMaster')

@section('title', 'Site Settings')

@section('vendor-style')
@endsection

@section('vendor-script')
@endsection

@section('page-script')
@endsection

@section('content')

  <div class="row">
    <div class="col-xl">
      <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
          <h5 class="mb-0">Site Settings</h5>
          <small class="text-muted float-end">Manage your site settings here</small>
        </div>
        <div class="card-body">
          <form action="{{ route('save-site-settings') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- Home Video -->
            <div class="mb-3">
              <label class="form-label" for="home_video">Home Video</label>
              <input type="file" class="form-control" id="home_video" name="home_video">
              @error('home_video')
              <div class="text-danger">{{ $message }}</div>
              @enderror
            </div>

            <!-- About Video -->
            <div class="mb-3">
              <label class="form-label" for="about_video">About Video</label>
              <input type="file" class="form-control" id="about_video" name="about_video">
              @error('about_video')
              <div class="text-danger">{{ $message }}</div>
              @enderror
            </div>

            <!-- YouTube Link -->
            <div class="mb-3">
              <label class="form-label" for="youtube_link">YouTube Link</label>
              <input type="url" class="form-control" id="youtube_link" name="youtube_link" placeholder="Enter YouTube Link" value="{{ old('youtube_link', $settings->youtube_link ?? '') }}">
              @error('youtube_link')
              <div class="text-danger">{{ $message }}</div>
              @enderror
            </div>

            <!-- LinkedIn Link -->
            <div class="mb-3">
              <label class="form-label" for="linkedin_link">LinkedIn Link</label>
              <input type="url" class="form-control" id="linkedin_link" name="linkedin_link" placeholder="Enter LinkedIn Link" value="{{ old('linkedin_link', $settings->linkedin_link ?? '') }}">
              @error('linkedin_link')
              <div class="text-danger">{{ $message }}</div>
              @enderror
            </div>

            <!-- Twitter Link -->
            <div class="mb-3">
              <label class="form-label" for="twitter_link">Twitter Link</label>
              <input type="url" class="form-control" id="twitter_link" name="twitter_link" placeholder="Enter Twitter Link" value="{{ old('twitter_link', $settings->twitter_link ?? '') }}">
              @error('twitter_link')
              <div class="text-danger">{{ $message }}</div>
              @enderror
            </div>

            <!-- Privacy Link -->
            <div class="mb-3">
              <label class="form-label" for="privacy_link">Privacy Policy Link</label>
              <input type="url" class="form-control" id="privacy_link" name="privacy_link" placeholder="Enter Privacy Policy Link" value="{{ old('privacy_link', $settings->privacy_link ?? '') }}">
              @error('privacy_link')
              <div class="text-danger">{{ $message }}</div>
              @enderror
            </div>

            <!-- TOS Link -->
            <div class="mb-3">
              <label class="form-label" for="tos_link">Terms of Service Link</label>
              <input type="url" class="form-control" id="tos_link" name="tos_link" placeholder="Enter Terms of Service Link" value="{{ old('tos_link', $settings->tos_link ?? '') }}">
              @error('tos_link')
              <div class="text-danger">{{ $message }}</div>
              @enderror
            </div>

            <!-- Cookie Policy Link -->
            <div class="mb-3">
              <label class="form-label" for="cookie_policy_link">Cookie Policy Link</label>
              <input type="url" class="form-control" id="cookie_policy_link" name="cookie_policy_link" placeholder="Enter Cookie Policy Link" value="{{ old('cookie_policy_link', $settings->cookie_policy_link ?? '') }}">
              @error('cookie_policy_link')
              <div class="text-danger">{{ $message }}</div>
              @enderror
            </div>

            <!-- EULA Link -->
            <div class="mb-3">
              <label class="form-label" for="eula_link">EULA Link</label>
              <input type="url" class="form-control" id="eula_link" name="eula_link" placeholder="Enter EULA Link" value="{{ old('eula_link', $settings->eula_link ?? '') }}">
              @error('eula_link')
              <div class="text-danger">{{ $message }}</div>
              @enderror
            </div>

            <button type="submit" class="btn btn-primary waves-effect waves-light">Save Settings</button>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
