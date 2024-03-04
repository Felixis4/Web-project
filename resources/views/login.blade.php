@extends('myapp')
@section('content')
@section('title', 'Login')
<div class="container py-2 m-2 align-items-center" style="width: 100px;background: #000;border-radius: 10px;float:left;">
      <a href="/" class="btn btn-danger btn-sm">Back</a>
  </div>

  <br><br>
<div class="container col-5 py-2 m">
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
    <form action="{{ route('postLogin') }}" method="POST" style="width: 500px;">
        @csrf
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
    <h4 id="sub-title" class="text-center py-2">Don't have an account?
    <a class="btn btn-link" href="/registration" role="button" >Create account</a>
    </h4>
</div>
@endsection