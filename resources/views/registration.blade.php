@extends('myapp')
@section('title', 'Registration')
@section('content')
<div class="container py-2 m-2 align-items-center">
      <a href="/" class="btn btn-danger btn-sm">Back</a>
  </div>

  <br><br>
<div class="container-fluid col-5 py-2">
    <div class="mt-5">
        @if ($errors->any())
            <div>
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger">{{$error}}</div>    
                @endforeach
            </div>
        @endif
        @if (session()->has('error'))
            <div class="alert alert-danger">{{session('error')}}</div>    
        @endif
        @if (session()->has('success'))
            <div class="alert alert-success">{{session('success')}}</div>    
        @endif
    </div>
    <form class="form-floating" action="{{ route('postRegistration') }}" method="POST" style="width: 500px;">
        @csrf
        <div class="form-floating mb-3">
            <input type="userName" class="form-control" placeholder="" name="name">
            <label for="floatingInput" class="form-label" >UserName</label>
        </div>
        <div class="form-floating mb-3">
            <input type="email" class="form-control" placeholder="" name="email">
            <label for="floatingInput" class="form-label" >Email address</label>
        </div>
        <div class="form-floating mb-3">
            <input type="password" class="form-control" placeholder="" name="password">
            <label for="floatingInput" class="form-label" >Password</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <h4 id="sub-title" class="text-center py-2">Already have an account?
    <a class="btn btn-link" href="/login" role="button" >Log in</a>
    </h4>
</div>
@endsection