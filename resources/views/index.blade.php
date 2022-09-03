@extends('layouts.app')

@section('content')
    <div class="uk-container">
        <div uk-grid>
            <div class="uk-width-1-2@m">
                <h2>Users</h2>
            </div>
            <div class="uk-width-1-2@m uk-text-right@m">
                <a href="{{ route('create-user') }}">
                    <button class="uk-button uk-button-primary uk-button-small">Create User</button>
                </a>
            </div>
        </div>
        <div class="uk-overflow-auto">
            <table class="uk-table uk-table-divider">
                <thead>
                    <tr>
                        <th>S.No</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                @if($users->count() > 0)
                    <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    <a href="{{ route('view-user', ['id' => $user->id]) }}">
                                        <button class="uk-button uk-button-primary uk-button-small">View</button>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                @endif
            </table>
        </div>
    </div>
@endsection