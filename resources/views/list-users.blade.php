
@extends('myapp')
@section('content')

<div class="container py-2 m-2 align-items-center" style="width: 100px;background: #000;border-radius: 10px;float:left;">
    <a href="/" class="btn btn-danger btn-sm">Back</a>
</div>
<br><br>
<div class="container col-md-5 col-md-offset-3 p-4 mt-4" style="width: 270px;background: #000;border-radius: 10px;float: centers;">
    @foreach ($accounts as $account)

        <div class="row py-1">
            <div class="col-md-9 d-flex align-items-center">
                <a href="{{ route('accounts-edit', ['id' => $account->id]) }}">{{ $account->username }}</a>
            </div>

            <div class="col-md-3 d-flex justify-content-end">
                <form action="{{ route('accounts-destroy2', [$account->id]) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger btn-sm">Delete</button>
                </form>
            </div>
        </div>

    @endforeach
    </div>
    </div>

@endsection