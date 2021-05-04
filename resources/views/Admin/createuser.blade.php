@extends('layouts.app')

@section('content')
    <div class="container pt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header @guest bg-primary @else bg-dark @endguest text-light">
                        <h4>@guest User Refistration @else Create User @endguest</h4>
                    </div>

                    <div class="card-body">
                        <form method="POST" @guest action="{{ route('student.register') }}" @else action="{{ route('admin.student.store') }}" @endguest enctype="multipart/form-data">
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required>

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirm Password</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="study" class="col-md-4 col-form-label text-md-right">Currently Studying</label>

                                <div class="col-md-6">
                                    <select id="study" type="text" class="form-control @error('study') is-invalid @enderror" name="study" required>
                                        <option value="" selected disabled>Please Select...</option>
                                        <option value="High School" @if( old('study') === "High School") selected @endif>High School</option>
                                        <option value="Secondary" @if( old('study') === "Secondary") selected @endif>Secondary</option>
                                        <option value="Higher Secondary" @if( old('study') === "Higher Secondary") selected @endif>Higher Secondary</option>
                                        <option value="Diploma" @if( old('study') === "Diploma") selected @endif>Diploma</option>
                                        <option value="Undergraduate" @if( old('study') === "Undergraduate") selected @endif>Undergraduate</option>
                                        <option value="Graduate" @if( old('study') === "Graduate") selected @endif>Graduate</option>
                                        <option value="Post-Graduate" @if( old('study') === "Post-Graduate") selected @endif>Post-Graduate</option>
                                    </select>

                                    @error('study')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="institution" class="col-md-4 col-form-label text-md-right">Institution</label>

                                <div class="col-md-6">
                                    <input id="institution" type="text" class="form-control @error('institution') is-invalid @enderror" name="institution" value="{{ old('institution') }}" required>

                                    @error('institution')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div id="degree" class="form-group row">
                                <label for="specialization" class="col-md-4 col-form-label text-md-right">Specialization</label>

                                <div class="col-md-6">
                                    <input id="specialization" type="text" class="form-control @error('specialization') is-invalid @enderror" name="specialization" value="{{ old('specialization') }}">

                                    @error('specialization')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="interests" class="col-md-4 col-form-label text-md-right">Interest</label>

                                <div class="col-md-6">
                                    <input id="interests" type="text" class="form-control @error('interests') is-invalid @enderror" name="interests">

                                    @error('interests')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="phone" class="col-md-4 col-form-label text-md-right">Phone</label>

                                <div class="col-md-6">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">+880</div>
                                        </div>
                                        <input id="phone" type="tel" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}">

                                        @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="address" class="col-md-4 col-form-label text-md-right">Address</label>

                                <div class="col-md-6">
                                    <textarea id="address" class="form-control @error('address') is-invalid @enderror" name="address">{{ old('address') }}</textarea>

                                    @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn @guest btn-primary @else btn-dark @endguest">
                                        Submit
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>

    </script>
    <script type="text/javascript">
        $(function() {
            $('#degree').hide();

            $('#study').change(function (){
                var study = $(this).val();

                switch (study){
                    case "Diploma":
                    case "Undergraduate":
                    case "Graduate":
                    case "Post-Graduate":
                        $('#degree').show();
                        break;
                    default:
                        $('#degree').hide();
                }
            });
        });
    </script>
@endsection
