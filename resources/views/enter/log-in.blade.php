@extends('myapp')

@section('content')
<div class="container py-2 m-2 align-items-center" style="width: 100px;background: #000;border-radius: 10px;float:left;">
    <a href="/" class="btn btn-danger btn-sm">Back</a>
</div>
<br><br>
<div class="container col-md-5 col-md-offset-3 p-4 mt-4" style="background: #000;border-radius: 10px;float: centers;">
    <div class="form-floating mb-3">
        <form  method="POST" action="{{route('accounts')}}">
            @csrf

            <div class="mb-3 col">
            @error('username')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            @if (session('success'))
                    <h6 class="alert alert-success">{{ session('success') }}</h6>
            @endif
            
                <div class="form-floating mb-3">
                    <input type="email" class="form-control mb-3" name="email" id="floatingInput" placeholder="">
                    <label for="floatingInput">Email address</label>
                </div>
                <div class="form-floating">
                    <input type="username" class="form-control mb-3" name="username" id="floatingInput" placeholder="">
                    <label for="floatinInput">Username</label>
                </div>


                <input type="submit" value="Create User" class="btn btn-primary" />
            </div>
        </form>
</div>
@endsection
@yield('log-in')