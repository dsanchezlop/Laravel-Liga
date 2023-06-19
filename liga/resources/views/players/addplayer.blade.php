@extends('layout')

@section('topmenu')
    @parent
    <h1>Add Player</h1>
@endsection

@section('content')
    <form method="post" action="/players/addplayer">
        <fieldset>
            @csrf
            <div>
                <label for="id">Id:</label>
                <input type="number" name="id" disabled />
            </div>
            <div>
                <label for="name">Name:</label>
                <input type="text" name="name" />
            </div>
            <div>
                <label for="surname">Surname:</label>
                <input type="text" name="surname" />
            </div>
            <div>
                <label for="yearOfBirth">Year of birth:</label>
                <input type="number" name="yearOfBirth" />
            </div>
            <div>
                <label for="salary">Salary:</label>
                <input type="number" name="salary" />
            </div>
        </fieldset>
        <button type="button" class="btn btn-primary" onclick="window.location.href='/mngplrs'">Go back</button>
        <button type="submit" class="btn btn-primary">Add Player</button>
    </form>
@endsection
