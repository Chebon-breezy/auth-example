@extends('layouts.app')

@section('content')

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
    {{$courses}}

</tbody>
@endsection