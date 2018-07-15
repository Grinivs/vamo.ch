@extends('layouts/layoutindex')
@section('content')
<form method="post" action="/data">
  {{ csrf_field() }}
  <input type="text"  name="eingabe">
  <input type="submit" value="Absenden">
</form>

@endsection
