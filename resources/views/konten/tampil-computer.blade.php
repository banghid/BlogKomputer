@extends('template.template-tabel')

@section('title')
Tampil Data Computer
@endsection

@section('konten')
<div class="col-lg-10 offset-1">
<div class="table-responsive">
<table class="table table-stripped">
<tr>
  <th>Serial Number</th>
  <th>Model</th>
  <th>Customer Name</th>
</tr>
@foreach($data as $computer)
<tr>
  <td>{{$computer->SerialNum}}</td>
  <td>{{$computer->Model}}</td>
  <td>{{$computer->Customer->FirstName}}</td>
</tr>
@endforeach
</table>
</div>
</div>
@endsection
