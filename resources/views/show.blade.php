@extends('layouts.app')
@section('content')
@foreach($data as $el)
    <table>
        <tr>
            <td>{{ $el->id }}</td>
            <td>{{$el->fname}}</td>
            <td>{{$el->sname}}</td>
            <td>{{$el->pname}}</td>
            <td><a href="{{route('update',$el->id)}}"><button>Update</button></a><a href="{{route('delete',$el->id)}}"><button>Delete</button></a></td>
        </tr>
    </table>
@endforeach
@endsection