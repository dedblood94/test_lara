@extends('layouts.app')

@section('content')
    <form action="{{route('find')}}" method="post">
        @csrf
        <div>
            <label for="fname">Select fname</label>
            <input type="text" name="fname" id="fname">
        </div>
        <button type="submit">Find</button>
    </form>
    @foreach($data as $el)
        <table>
            <tr>
                <td>{{ $el->id }}</td>
                <td>{{$el->fname}}</td>
                <td>{{$el->sname}}</td>
                <td>{{$el->pname}}</td></tr>
        </table>
    @endforeach
@endsection