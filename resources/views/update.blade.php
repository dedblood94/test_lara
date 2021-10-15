@extends('layouts.app')

@section('content')
    <form action="{{route('update',$data->id)}}" method="post">
        @csrf
    <div>
        <label for="fname">Select fname</label>
        <input type="text" name="fname" value="{{$data->fname}}" id="fname">
    </div>
        <div>
            <label for="pname">Select pname</label>
            <input type="text" name="pname"value="{{$data->pname}}" id="pname">
        </div>
        <div>
            <label for="sname">Select sname</label>
            <input type="text" name="sname" value="{{$data->sname}}"  id="sname">
        </div>
        <button type="submit">Update</button>
    </form>
@endsection