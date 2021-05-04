@extends('layouts.app')

@section('styles')
    <style>
        .bottom{
            padding-top: 50px;
        }
        .container{
            width: 60vh;
        }
    </style>
@endsection


@section('content')
    <div class="container py-4">
        <div class="card">
            <div class="card-header bg-dark text-light">User Profile</div>

            <div class="card-body pl-4">
                <div class="d-flex row">
                    <div class="col-md-4">
                        <img src="{{ asset(Auth::guard('admin')->user()->profile_photo_path) ?? asset('images/No_Image_Available.jpg') }}" alt="" width="75px" height="75px" class="rounded">
                    </div>
                    <div class="text-right bottom col-md-8">
                        <h4 class="font-weight-bolder">{{ Auth::guard('admin')->user()->name }}</h4>
                    </div>
                </div>
                <hr>

                <div class="form-group row">
                    <label for="email" class="col-md-5 text-right col-form-label">Email:</label>

                    <div class="col-md-7">
                        <label id="email" type="text" class="form-control-plaintext">{{ Auth::guard('admin')->user()->email }}</label>
                    </div>
                </div>

        
            
                <hr>

 
                <div class="form-group row mb-0 justify-content-end">
                    <div class="pr-2 pl-2">
                        <a href="#" class="btn btn-dark btn-sm">
                            Edit Profile
                        </a>
                        <a href="{{route('photo.upload.form')}}" class="btn btn-primary btn-sm">
                            Upload Profile Photo
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection




