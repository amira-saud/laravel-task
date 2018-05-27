@extends('layouts.app')
@section('content')



    <h1>Posts Data</h1>
        <table class="table table-striped">
        <th><strong>id </strong></th>
        <th><strong> task </strong></th>

        @foreach ($tasks as $task)
        <tr>
<td> {{ $task->id }} </td>
<td> {{ $task->name}} </td>



@endforeach

    
@endsection