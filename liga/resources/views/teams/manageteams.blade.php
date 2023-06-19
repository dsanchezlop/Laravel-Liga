@extends('layout')

@section('topmenu')
    @parent
    <h1>Manage Teams</h1>
@endsection

@section('content')
    @if (empty($teams))
        <p>There are no teams!</p>
    @else
        @if (!empty($message))
            <p class="errorMessage">{{ $message }}</p>
        @endif
        <div class="container">
            <a href="/addteam" class="btn btn-primary">Add Team</a>
            <br>
            <br>
            <p>Number of Teams: {{ $teams->count() }}</p>
            <table class="table">
                <thead>
                    <tr>
                        <th>Team Name</th>
                        <th>Team Coach</th>
                        <th>Category</th>
                        <th>
                            <!-- Modify Team -->
                        </th>
                        <th>
                            <!-- Delete Team -->
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($teams as $team)
                        <tr>
                            <td>{{ $team->name }}</td>
                            <td>{{ $team->coach }}</td>
                            <td>{{ $team->category }}</td>
                            <td><a href="/team/{{ $team->id }}/edit">Modify</a></td>
                            {{-- <td>
                                <form method="post" action="/team/{{ $team->id }}/delete">
                                    <button type="submit" class="btn btn-primary" onclick="return confirm('Are you sure you want to delete this team?')">Delete</button>
                                </form>
                            </td> --}}
                            <td><a href="/team/{{ $team->id }}/delete"
                                    onclick="return confirm('Are you sure you want to delete this team?')">Delete</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
@endsection
