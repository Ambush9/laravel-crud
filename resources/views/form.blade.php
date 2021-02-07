@extends('layout')

@section('title', isset($user) ? 'Update user ' . $user->name : 'Create user')

@section('content')
    <a type="button" class="btn btn-secondary" href="{{ route("users.index")  }}">Back to users</a>
    <form method="POST"
        @if(isset($user))
            action="{{ route('users.update', $user)  }}"
        @else
            action="{{ route('users.create') }}"
        @endif
          class="mt-3">
        @csrf
        @isset($user)
            @method('PUT')
        @endisset
        <div class="row">
            <div class="col">
                <input type="text" name="name"
                       value="{{ isset($user) ? $user->name : null }}"
                       class="form-control"
                       placeholder="Name" aria-label="Name">
            </div>
        </div>

        <div class="row mt-5">
            <div class="col">
                <input type="text"
                       name="email"
                       value="{{ isset($user) ? $user->email : null }}"
                       class="form-control" placeholder="Email" aria-label="Email">
            </div>
        </div>

        <div class="row mt-3">
            <div class="col">
                <button type="submit" class="btn btn-success">Create</button>
            </div>
        </div>
    </form>
@endsection
