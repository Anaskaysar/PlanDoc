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
            <div class="card-header bg-dark text-light">Admin Profile</div>

            <div class="card-body pl-4">
                <h4 class="font-weight-bolder">{{ Auth::user()->name }}</h4>
                <hr>

                <div class="form-group row">
                    <label for="email" class="col-md-5 text-right col-form-label">Email:</label>

                    <div class="col-md-7">
                        <label id="email" type="text" class="form-control-plaintext">{{ Auth::user()->email }}</label>
                    </div>
                </div>

                

                <hr>

                <div class="form-group row mb-0 justify-content-end">
                    <div class="pr-2 pl-2">
                        <a href="#" class="btn btn-dark btn-sm">
                            Edit Profile
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
