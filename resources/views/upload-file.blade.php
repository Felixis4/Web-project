@extends('myapp')
@section('content')
@section('title', 'Upload File')
<div id="back-button" class="container py-2 m-2 align-items-center">
    <a href="/" class="btn btn-danger btn-sm">Back</a>
</div>
<br><br>
<div id="file-container" class="container col-md-5 col-md-offset-3 p-4 mt-4">
    <div class="form-floating mb-3">
        @csrf
        @if (session('success'))
            <h6 class="alert alert-success">{{ session('success') }}</h6>
        @endif

        <form  method="POST" action="{{ route("upload") }}" enctype="multipart/form-data" >
            <div class="my-3">
                <input class="form-control mb-2" name="file" type="file" id="formFile">
            
                <input type="submit" value="Update file" class="btn btn-primary my-2" />
            </div>
        </form>
    </div>
</div>
@endsection