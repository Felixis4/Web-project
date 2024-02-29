@extends('myapp')
@section('content')
<div class="container py-2 m-2 align-items-center" style="width: 100px;background: #000;border-radius: 10px;float:left;">
    <a href="/" class="btn btn-danger btn-sm">Back</a>
</div>
<br><br>
<div class="container col-md-5 col-md-offset-3 p-4 mt-4 " style="background: #000;border-radius: 10px;float: centers;">
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
<div class="container col-md-5 col-md-offset-3 p-4 mt-4 " style="background: #000;border-radius: 10px;float: centers;">
    <div style="color: #fff;">
        waiting for file...
    </div>
</div>
@endsection