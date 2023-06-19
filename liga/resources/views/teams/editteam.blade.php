@extends('layout')

@section('topmenu')
    @parent
    <h1>Edit Team</h1>
@endsection

@section('content')
    @if (empty($team))
        <p>There is no team!</p>
    @else
        <form method="post" action="/team/{{$team->id}}/update">
            <fieldset>
                @csrf
                <div>
                    <label for="id">Id:</label>
                    <input type="number" name="id" value="{{$team->id}}" disabled />
                </div>
                <div>
                    <label for="name">Name:</label>
                    <input type="text" name="name" value="{{$team->name}}" />
                </div>
                <div>
                    <label for="coach">Coach:</label>
                    <input type="text" name="coach" value="{{$team->coach}}" />
                </div>
                <div>
                    <label for="category">Category:</label>
                    <input type="text" name="category" value="{{$team->category}}" />
                </div>
                <div>
                    <label for="budget">Budget:</label>
                    <input type="number" name="budget" value="{{$team->budget}}" />
                </div>
            </fieldset>
            <button type="button" class="btn btn-primary" onclick="window.location.href='/mngtms'">Go back</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
        </form>
    @endif
@endsection
