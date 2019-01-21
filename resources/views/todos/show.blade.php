@extends('layouts.app')

@section('content')

<a href="/" class="btn btn-secondary mb-3">Go Back</a>
<h1>
    <a href="todo/{{$todo->id}}">
        {{$todo->text}}

    </a>
</h1>
<div class="badge badge-danger p-2">{{$todo->due}}</div>
<hr>
<p>{{$todo->body}}</p>

<br>
<br>

<a href="/todo/{{$todo->id}}/edit" class="btn btn-light">Edit</a>

@endsection
