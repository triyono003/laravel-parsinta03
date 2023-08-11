


@extends('layouts.main')

@section('container')
  <h1>Halaman user</h1>
  
<div class="list-group">
  @foreach($users as $index=>$user)
  <li class="list-group-item align-items-center">
      {{ $index +1 }}. 
    <a href="/users/{{ $user->username }}">
      {{$user->name }}
    </a>
</li>
  @endforeach
</div>
  
@endsection