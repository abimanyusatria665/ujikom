@extends('layouts.layout')
@section('content')
    <div class="container my-5">
      <h1>Student's Data</h1>
      <table class="table table-striped table-hover">
        <tr>
          <th>No</th>
          <th>FullName</th>
          <th>Gender</th>
          <th>Major</th>
          <th>From Middleschool</th>
        </tr>
        @php
             $i= 1
        @endphp
        @foreach ($student as $element)
            <tr>
              <td>{{ $i++ }}</td>
              <td>{{ $element->full_name }}</td>
              <td>{{ $element->gender }}</td>
              <td>{{ $element->major }}</td>
              <td>{{ $element->from_middle_school }}</td>
            </tr>
        @endforeach
      </table>
    </div>
@endsection




