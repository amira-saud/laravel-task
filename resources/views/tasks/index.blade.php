@extends('layouts.app')
@section('content')



    <h1>Posts Data</h1>
        <table class="table table-striped">
        <th><strong>ID</strong></th>
        <th><strong> Task </strong></th>

        @foreach ($tasks as $task)
        <tr>
<td> {{ $task->id }} </td>
<td> {{ $task->name}} </td>



@endforeach

    
@endsection