@extends('template.template-tabel')

@section('title')
Dashboard
@endsection

@section('konten')
<div class="row col-lg-4 offset-4">
  <a href="{{route('customer.tampil')}}" class="btn btn-danger">Customer</a>
  <a href="{{route('computer.tampil')}}" class="btn btn-success">Computer</a>

</div>
@endsection
