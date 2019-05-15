@extends('template.template-tabel')

@section('title')
Tampil Data Customer
@endsection

@section('konten')

  <div class="float-right text-center">
    <br>
              <button type="button" data-toggle="modal" data-target="#modalTambahCustomer" class="btn btn-primary">Tambah Customer</button>
                <!-- Modal-->
                <div id="modalTambahCustomer" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
                  <div role="document" class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h4 id="exampleModalLabel" class="modal-title">Tambah Kategori Aktivitas</h4>
                        <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                      </div>
                      <div class="modal-body">
                        <p>Masukkan kategori aktivitas dan deskripsi kategori</p>
                        <form method="post" action="{{ route('customer.input')}}" enctype="multipart/form-data">
                          <div class="form-group">
                            <label>Nama Kategori</label>
                            <input type="text" name="nama-kategori" required placeholder="Nama Kategori" class="form-control">
                          </div>
                          <div class="form-group">
                            <label>Deskripsi</label>
                            <textarea class="form-control" name="deskripsi-kategori" required placeholder="Deskripsi Kategori" rows="5"></textarea>
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
              </div>
<div class="table-responsive">
  <table class="table table-stripped">
    <tr>
      <th>FirstName</th>
      <th>Mobile</th>
      <th>Email</th>
      <th>City</th>
    </tr>
    @foreach($data as $customer)
    <tr>
      <td>{{ $customer->FirstName }}</td>
      <td>{{ $customer->Mobile }}</td>
      <td>{{ $customer->Email }}</td>
      <td>{{ $customer->City }}</td>
    </tr>
    @endforeach
  </table>
</div>

@endsection
