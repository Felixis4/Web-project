@extends('myapp')

@section('content')

<div class="container col-md-5 col-md-offset-3 p-4 mt-4">
    <div class="row mx-auto">
        <form  method="POST" action="{{ route('accounts-update', ['id' => $accounts->id]) }}">
            @method('PATCH')
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
                    <input type="email" class="form-control mb-3" name="email" id="floatingInput" placeholder="name@example.com" value="{{ $accounts->email }}">
                    <label for="floatingInput">Email address</label>
                </div>
                <div class="form-floating">
                    <input type="username" class="form-control mb-3" name="username" id="floatingInput" placeholder="Username" value="{{ $accounts->username }}">
                    <label for="floatinInput">Username</label>
                </div>
                <input type="submit" value="Edit User" class="btn btn-primary my-2"/>
            </div>
        </form>
    </div>
</div>
@endsection