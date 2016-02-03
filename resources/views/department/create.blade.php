@extends('layout.layout')

@section('title')新規作成@endsection

@section('content')
  {!! Form::open(['route' => 'department.store']) !!}
  <ul>
    <li>
      {!! Form::label('name', '部署名:') !!}
      {!! Form::text('name', null) !!}
    </li>
    <li>
      {!! Form::submit('新規作成') !!}
      <a href={{route('department.index')}}>{!! Form::button('戻る') !!}</a>
    </li>
  </ul>
  {!! Form::close() !!}
@endsection