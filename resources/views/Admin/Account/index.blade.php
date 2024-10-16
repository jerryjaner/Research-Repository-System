@extends('layouts.admin')

@section('title')
    Profile Account
@endsection

@section('content')

<div class="toolbar py-5 py-lg-15" id="kt_toolbar">
    <div id="kt_toolbar_container" class="container-xxl d-flex flex-stack flex-wrap">
        <div class="page-title d-flex flex-column">
            <h1 class="text-white fw-bold fs-2qx my-1 me-5">Manage Account</h1>
        </div>
        <div class="d-flex align-items-center flex-wrap py-2">
            <a href="{{route('research-databank.index')}}" class="btn btn-sm btn-info my-2">
                <i class="fa-duotone fa-solid fa-arrow-left"></i>Back to home
            </a>
        </div>
    </div>
</div>

<div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
    <div class="content flex-row-fluid" id="kt_content">
        <div class="card">
            <form id="profile-form" class="form" action="{{ route('profile-account.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body p-9">
                    <h4 class="mb-6">Profile Information</h4>
                    <div class="row mb-6 justify-content-center">
                        <div class="col-lg-8">
                            <div class="avatar-upload">
                                <div class="avatar-edit">
                                    <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" name="image_upload"/>
                                    <label for="imageUpload"></label>
                                </div>
                                <div class="avatar-preview">
                                    <div id="imagePreview" style="background-image: url('{{ asset('storage/profile-picture/images/' . Auth::user()->profile_picture) }}')"></div>
                                </div>
                                <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
                                @error('profile_picture')
                                    <span class="text-danger mt-1">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row mb-6">
                        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Full Name</label>
                        <div class="col-lg-8">
                            <input type="text" name="name" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="Full Name" value="{{ Auth::user()->name }}" />
                            @error('name')
                                <span class="text-danger mt-1">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-6">
                        <label class="col-lg-4 col-form-label fw-semibold fs-6"><span class="required">Email Address</span></label>
                        <div class="col-lg-8">
                            <input type="email" name="email" class="form-control form-control-lg form-control-solid" placeholder="Email" value="{{ Auth::user()->email }}" />
                            @error('email')
                                <span class="text-danger mt-1">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-6">
                        <label class="col-lg-4 col-form-label fw-semibold fs-6"><span class="required">New Password</span></label>
                        <div class="col-lg-8 position-relative">
                            <input type="password" name="password" id="password" class="form-control form-control-lg form-control-solid" placeholder="New Password" />
                            <i class="toggle-password fas fa-eye" id="togglePassword" style="cursor: pointer; position: absolute; right: 20px; top: 15px;"></i>
                            @error('password')
                                <span class="text-danger mt-1">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-6">
                        <label class="col-lg-4 col-form-label fw-semibold fs-6"><span class="required">Confirm Password</span></label>
                        <div class="col-lg-8 position-relative">
                            <input type="password" name="password_confirmation" id="confirmPassword" class="form-control form-control-lg form-control-solid" placeholder="Confirm New Password" />
                            <i class="toggle-password fas fa-eye" id="toggleConfirmPassword" style="cursor: pointer; position: absolute; right: 20px; top: 15px;"></i>
                            @error('password_confirmation')
                                <span class="text-danger mt-1">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="card-footer d-flex justify-content-end py-6 px-9">
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
