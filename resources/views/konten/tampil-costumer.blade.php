@extends('template.template-tabel')

@section('title')
Tampil Data Customer
@endsection

@section('konten')
<div class="col-lg-10 offset-1">
    <div class="float-right text-center">
      <br>
                <button type="button" data-toggle="modal" data-target="#modalTambahCustomer" class="btn btn-primary">Tambah Customer</button>
                  <!-- Modal-->
                  <div id="modalTambahCustomer" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
                    <div role="document" class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 id="exampleModalLabel" class="modal-title">Tambah Data Customer</h4>
                          <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                        </div>
                        <div class="modal-body">
                          <p>Masukkan data Customer sesuai dengan form yang tersedia</p>
                          <form method="post" action="{{ route('customer.input')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                              <!-- <label>First Name</label> -->
                              <input type="text" name="FirstName" required placeholder="First Name" class="form-control">
                            </div>
                            <div class="form-group">
                              <!-- <label>Last Name</label> -->
                              <input type="text" name="LastName" required placeholder="Last Name" class="form-control">
                            </div>
                            <div class="form-group">
                              <!-- <label>Email</label> -->
                              <input type="email" name="Email" required placeholder="Email" class="form-control">
                            </div>
                            <div class="form-group">
                              <!-- <label>Mobile</label> -->
                              <input type="number" name="Mobile" required placeholder="Mobile" class="form-control">
                            </div>
                            <div class="form-group">
                              <!-- <label>HTel</label> -->
                              <input type="number" name="HTel" required placeholder="HTel" class="form-control">
                            </div>
                            <div class="form-group">
                              <!-- <label>City</label> -->
                              <input type="text" name="City" required placeholder="City" class="form-control">
                            </div>
                            <div class="form-group">
                              <!-- <label>Address 1</label> -->
                              <input type="text" name="AddressLine1" required placeholder="Address 1" class="form-control">
                            </div>
                            <div class="form-group">
                              <!-- <label>State</label> -->
                              <input type="text" name="State" required placeholder="State" class="form-control">
                            </div>
                            <div class="form-group">
                              <!-- <label>Post Code</label> -->
                              <input type="text" name="PostCode" required placeholder="Post Code" class="form-control">
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
        <th>FirstName</th>
        <th>Mobile</th>
        <th>Email</th>
        <th>City</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
      @foreach($data as $customer)
      <tr>
        <td>{{ $customer->FirstName }}</td>
        <td>{{ $customer->Mobile }}</td>
        <td>{{ $customer->Email }}</td>
        <td>{{ $customer->City }}</td>
        <td>
          <button type="button" data-toggle="modal" data-target="#modalEditCustomer{{$customer->CustomerId}}" class="btn btn-success">Edit</button>
          <!-- Modal-->
          <div id="modalEditCustomer{{$customer->CustomerId}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
            <div role="document" class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 id="exampleModalLabel" class="modal-title">Edit Data Customer</h4>
                  <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                  <p>Masukkan data Customer sesuai dengan form yang tersedia</p>
                  <form method="post" action="{{ route('customer.edit',$customer->CustomerId)}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <!-- <label>First Name</label> -->
                      <input type="text" name="FirstName" required placeholder="First Name" class="form-control" value="{{$customer->FirstName}}">
                    </div>
                    <div class="form-group">
                      <!-- <label>Last Name</label> -->
                      <input type="text" name="LastName" required placeholder="Last Name" class="form-control" value="{{$customer->LastName}}">
                    </div>
                    <div class="form-group">
                      <!-- <label>Email</label> -->
                      <input type="email" name="Email" required placeholder="Email" class="form-control" value="{{$customer->Email}}">
                    </div>
                    <div class="form-group">
                      <!-- <label>Mobile</label> -->
                      <input type="number" name="Mobile" required placeholder="Mobile" class="form-control" value="{{$customer->Mobile}}">
                    </div>
                    <div class="form-group">
                      <!-- <label>HTel</label> -->
                      <input type="number" name="HTel" required placeholder="HTel" class="form-control" value="{{$customer->HTel}}">
                    </div>
                    <div class="form-group">
                      <!-- <label>City</label> -->
                      <input type="text" name="City" required placeholder="City" class="form-control" value="{{$customer->City}}">
                    </div>
                    <div class="form-group">
                      <!-- <label>Address 1</label> -->
                      <input type="text" name="AddressLine1" required placeholder="Address 1" class="form-control" value="{{$customer->AddressLine1}}">
                    </div>
                    <div class="form-group">
                      <!-- <label>State</label> -->
                      <input type="text" name="State" required placeholder="State" class="form-control" value="{{$customer->State}}">
                    </div>
                    <div class="form-group">
                      <!-- <label>Post Code</label> -->
                      <input type="text" name="PostCode" required placeholder="Post Code" class="form-control" value="{{$customer->PostCode}}">
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
        </td>
        <td>
          <a href="{{route('customer.delete',$customer->CustomerId)}}" class="btn btn-danger">Hapus</a>
        </td>
      </tr>
      @endforeach
    </table>
  </div>
</div>

@endsection
