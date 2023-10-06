@extends('backend.master')
@section('content')
<div class="card w-100 bg-light-info overflow-hidden shadow-none">
    <div class="card-body position-relative">
      <div class="row">
        <div class="col-sm-7">
          <div class="d-flex align-items-center mb-7">
            <div class="rounded-circle overflow-hidden me-6">
              <img src="{{ asset('asset/backend')}}/images/profile/user-1.jpg" alt="" width="40" height="40">
            </div>
            <h5 class="fw-semibold mb-0 fs-5">Welcome back!</h5>
          </div>

        </div>
        <div class="col-sm-5">
          <div class="welcome-bg-img mb-n7 text-end">
            <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/backgrounds/welcome-bg.svg" alt="" class="img-fluid">
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
