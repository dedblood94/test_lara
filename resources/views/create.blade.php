@extends('layouts.app')

@section('content')
    <form action="{{route('create')}}" method="post">
        @csrf
        <div>
            <label for="fname">Select fname</label>
            <input type="text" name="fname" id="fname">
        </div>
        <div>
            <label for="pname">Select pname</label>
            <input type="text" name="pname" id="pname">
        </div>
        <div>
            <label for="sname">Select sname</label>
            <input type="text" name="sname" id="sname">
        </div>
        <button type="submit">Create</button>
    </form>
@endsection