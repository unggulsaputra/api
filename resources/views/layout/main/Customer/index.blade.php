@extends('layout.blank')
@section('content-header','Customer')
@section('content')
<div class="col-xs-12">
<div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Customer</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody>
                <tr>
                  <th>No</th>
                  <th>Nama Perusahaan</th>
                  <th>Alamat Perusahaan</th>
                  <th>Telepon</th>
                  <th>Fax</th>
                  <th>NPWP</th>
                  <th>Action</th>
                </tr>
                <tr>
                  <td>1</td>
                  <td id="nama_perusahaan">PT. Golden Aruan Indonesia</td>
                  <td style="width: 350px" id="alamat_perusahaan"> Jl. Pos Pengumben Komp. Pertambangan 2 No.3
                      RT.06 RW.05 Kel. Sukabumi Selatan Kec. Kebon Jeruk Jakarta Barat 
                      11560
                  </td>
                  <td id="telp_perusahaan">021-5323147</td>
                  <td id="fax">123-456-789</td>
                  <td id="npwp">123.456.789</td>
                  <td>
                    <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#edit-customer" id="customer-edit">Edit</button>
                    <button type="button" class="btn btn-sm btn-danger" id="hapus"><i class="fa fa-trash"></i> Hapus</button>
                  </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td id="nama_perusahaan">PT. Golden Aruan Unggul</td>
                  <td style="width: 350px" id="alamat_perusahaan"> Jl. Pos Pengumben Komp. Pertambangan 2 No.3
                      RT.06 RW.05 Kel. Sukabumi Selatan Kec. Kebon Jeruk Jakarta Barat 
                      11560
                  </td>
                  <td id="telp_perusahaan">021-5323147</td>
                  <td id="fax">123-456-789</td>
                  <td id="npwp">123.456.789</td>
                  <td>
                    <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#edit-customer" id="customer-edit">Edit</button>
                    <button type="button" class="btn btn-sm btn-danger" id="hapus"><i class="fa fa-trash"></i> Hapus</button>
                  </td>
                </tr>
              </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
</div>

@include('layout.main.Customer.edit')
@stop
@section('javascript')
<script type="text/javascript" src="/js/customer.js"></script>
@stop