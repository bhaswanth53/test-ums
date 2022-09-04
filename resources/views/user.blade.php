@extends('layouts.app')

@section('content')

    <div class="uk-container">
        <div>
            <form method="POST" action="{{ route('add-task', ['id' => $user->id]) }}">
                @csrf
                <div class="uk-card uk-card-default uk-width-1-2@m uk-margin-auto">
                    <div class="uk-card-body uk-padding-small">
                        <table class="uk-table">
                            <tr>
                                <td colspan="2">
                                    <h4 class="uk-margin-remove">Add Task</h4>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="text" class="uk-input" name="task" />
                                </td>
                                <td>
                                    <button type="submit" class="uk-button uk-button-primary">Add</button>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </form>
        </div>

        <div class="uk-width-1-2@m uk-margin-auto uk-margin-top">
            <h4>Tasks :</h4>
            @if($user->tasks->count() > 0)
                <ul class="uk-list task-list">
                    @foreach ($user->tasks as $task)
                        <li class="{{ $task->status }}">
                            <table class="uk-table uk-table-middle">
                                <tr>
                                    <td>{{ $task->task }}</td>
                                    <td>
                                        <form action="{{ route('update-task', ['id' => $task->id]) }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="status" value="{{ $task->status }}" />
                                            <button type="submit" class="task-status {{ $task->status }}">{{ ucfirst($task->status) }}</button>
                                        </form>
                                    </td>
                                </tr>
                            </table>
                        </li>
                    @endforeach
                </ul>
            @endif
        </div>
    </div>

@endsection