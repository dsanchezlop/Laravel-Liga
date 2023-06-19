@extends('layout')

@section('topmenu')
    @parent
    <h1>Add Team</h1>
@endsection

@section('content')
    <form method="post" action="/teams/addteam">
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
                <label for="coach">Coach:</label>
                <input type="text" name="coach" />
            </div>
            <div>
                <label for="category">Category:</label>
                <input type="text" name="category" />
            </div>
            <div>
                <label for="budget">Budget:</label>
                <input type="number" name="budget" />
            </div>
        </fieldset>
        <button type="button" class="btn btn-primary" onclick="window.location.href='/mngtms'">Go back</button>
        <button type="submit" class="btn btn-primary">Add team</button>
    </form>
@endsection
