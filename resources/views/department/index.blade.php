@extends('layout.layout')

@section('title')部署一覧@endsection

@section('content')
  <table>
    <tr>
      <th>部署名</th>
      <th>作成日</th>
    </tr>
    @foreach($departments as $department)
      <tr>
        <td>{{$department->name}}</td>
        <td>{{$department->created_at->format('Y-m-d')}}</td>
      </tr>
    @endforeach
  </table>

  {!! link_to(route('department.create'), '新規作成') !!}
@endsection