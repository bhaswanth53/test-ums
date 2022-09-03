@extends('layouts.app')

@section('content')

    <div class="uk-container">
        <h2>Create User</h2>
        <form method="POST" action="{{ route('add-user') }}">
            @csrf
            <div class="uk-width-1-2@m">
                <div class="uk-margin">
                    <label class="uk-form-label">Name</label>
                    <input type="text" class="uk-input" name="name" />
                </div>
                <div class="uk-margin">
                    <label class="uk-form-label">Email</label>
                    <input type="email" class="uk-input" name="email" />
                </div>
                <div class="uk-margin">
                    <button type="submit" class="uk-button uk-button-small uk-button-primary">Create</button>
                </div>
            </div>
        </form>
    </div>

@endsection