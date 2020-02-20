@extends('templates.default')

@section('content')
<div class="row">
  <div class="col-lg-6">
    <h1>Добро Пожаловать!</h1>
    <p>- Оставайся на связи с друзьями.</p>
    <img class="phone" src="{{ asset('phone.png') }}" alt="Phone">
  </div>
</div>
@endsection