@extends('template.template-tabel')

@section('title')
Tampil Data Computer
@endsection

@section('konten')
<div class="col-lg-10 offset-1">
  <div class="float-right text-center">
    <br>
              <button type="button" data-toggle="modal" data-target="#modalTambahComputer" class="btn btn-primary">Tambah Computer</button>
                <!-- Modal-->
                <div id="modalTambahComputer" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
                  <div role="document" class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h4 id="exampleModalLabel" class="modal-title">Tambah Data Computer</h4>
                        <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                      </div>
                      <div class="modal-body">
                        <p>Masukkan data Computer sesuai dengan form yang tersedia</p>
                        <form method="post" action="{{ route('computer.input')}}" enctype="multipart/form-data">
                          @csrf
                          <div class="form-group">
                            <!-- <label>First Name</label> -->
                            <input type="text" name="SerialNum" required placeholder="Serial Number" class="form-control">
                          </div>
                          <div class="form-group">
                            <!-- <label>Last Name</label> -->
                            <input type="text" name="Model" required placeholder="Model" class="form-control">
                          </div>
                          <div class="form-group">
                            <!-- <label>Email</label> -->
                            <input type="text" name="CustomerId" required placeholder="Customer Id" class="form-control">
                          </div>
                          <br>
                          <div class="form-group float-right">
                            <button type="button" data-dismiss="modal" class="btn btn-secondary">Tutup</button>
                            <input type="submit" name="submit" value="Submit" class="btn btn-primary">
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
                <br>
                <br>
              </div>
<div class="table-responsive">
<table class="table table-stripped">
<tr>
  <th>Serial Number</th>
  <th>Model</th>
  <th>Owner</th>
  <th>Edit</th>
</tr>
@foreach($data['computer'] as $computer)
<tr>
  <td>{{$computer->SerialNum}}</td>
  <td>{{$computer->Model}}</td>
  <td>{{$computer->Customer->FirstName}}</td>
  <td><button type="button" data-toggle="modal" data-target="#modalEditComputer{{$computer->ComputerId}}" class="btn btn-success">Edit</button>
    <!-- Modal-->
    <div id="modalEditComputer{{$computer->ComputerId}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
      <div role="document" class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 id="exampleModalLabel" class="modal-title">Edit Data Computer</h4>
            <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
          </div>
          <div class="modal-body">
            <p>Masukkan data Computer sesuai dengan form yang tersedia</p>
            <form method="post" action="{{ route('computer.edit',$computer->ComputerId)}}" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <!-- <label>First Name</label> -->
                <input type="text" name="SerialNum" required placeholder="Serial Number" class="form-control" value="{{$computer->SerialNum}}">
              </div>
              <div class="form-group">
                <!-- <label>Last Name</label> -->
                <input type="text" name="Model" required placeholder="Model" class="form-control" value="{{$computer->Model}}">
              </div>
              <div class="form-group">
                <!-- <label>Email</label> -->
                <input type="text" name="CustomerId" required placeholder="Customer Id" class="form-control" value="{{$computer->CustomerId}}">
              </div>
              <br>
              <div class="form-group float-right">
                <button type="button" data-dismiss="modal" class="btn btn-secondary">Tutup</button>
                <input type="submit" name="submit" value="Submit" class="btn btn-primary">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div></td>
</tr>
@endforeach
</table>
</div>
</div>
@endsection
