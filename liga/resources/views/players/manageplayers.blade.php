@extends('layout')

@section('topmenu')
    @parent
    <h1>Manage Players</h1>
@endsection

@section('content')
    @if (empty($players))
        <p>There are no players!</p>
    @else
        @if (!empty($message))
            <p class="errorMessage">{{ $message }}</p>
        @endif
        <div class="container">
            <a href="/addplayer" class="btn btn-primary">Add Player</a>
            <br>
            <br>
            <p>Number of Players: {{ $players->count() }}</p>
            <table class="table">
                <thead>
                    <tr>
                        <th>Player Name</th>
                        <th>Player Surname</th>
                        <th>Year of birth</th>
                        <th>
                            <!-- Modify Player Team -->
                        </th>
                        <th>
                            <!-- Delete Player -->
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($players as $player)
                        <tr>
                            <td>{{ $player->name }}</td>
                            <td>{{ $player->surname }}</td>
                            <td>{{ $player->yearOfBirth }}</td>
                            <td>Change Team</td>
                            {{-- <td>
                                <form method="post" action="/team/{{ $team->id }}/delete">
                                    <button type="submit" class="btn btn-primary" onclick="return confirm('Are you sure you want to delete this team?')">Delete</button>
                                </form>
                            </td> --}}
                            <td><a href="/player/{{ $player->id }}/delete"
                                    onclick="return confirm('Are you sure you want to delete this player?')">Delete</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
@endsection
