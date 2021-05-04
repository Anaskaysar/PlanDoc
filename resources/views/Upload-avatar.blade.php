@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <div class="card">
            <div class="card-header bg-dark text-light">
                <h4>Image Upload</h4>
            </div>
            <div class="card-body">
                <form action="#" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="image_file">Profile image</label>

                        <div id="image_file" class="custom-file">
                            <input id="image" name="image" type="file" class="custom-file-input @error('image') is-invalid @enderror" required>
                            <label for="image" class="custom-file-label">Image Name</label>

                            @error('image')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="">
                            <button type="submit" class="btn btn-dark">
                                Upload
                            </button>
                            <a href="#" class="btn btn-warning">Cancel</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript">
        $(".custom-file-input").on("change", function() {
            var fileName = $(this).val().split("\\").pop();
            $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        });
    </script>
@endsection
