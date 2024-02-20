@extends('layouts.app')

@section('content')
<table>
<h1>
    Courses
</h1>

<thead>
    <tr>
        <th>Course Name</th>
        <th>Instructor</th>
    </tr>
</thead>

<tbody>
    @foreach ($courses as $course)
    <tr>
        <td>{{ $course ->title}}</td>
        <td>{{ $course ->instructor}}</td>
    </tr>
        
    @endforeach

</tbody>
</table>
@endsection