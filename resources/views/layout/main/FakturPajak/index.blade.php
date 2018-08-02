@extends('layout.blank')
@section('content-header','Faktur Pajak')
@section('content')
<div class="col-xs-12">
	<div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Faktur Pajak</h3>
              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
              <button class="btn btn-sm btn-info btn-block" id="create_faktur" data-toggle="modal" data-target="#create-edit-faktur">Tambah Faktur Pajak</button>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody>
                <tr>
                  <th>No</th>
                  <th>Nama Perusahaan</th>
                  <th>Nomer PO</th>
                  <th>Kode dan Nomer Seri</th>
                  <th>NPWP</th>
                  <th>Action</th>
                </tr>
                <tr>
                  <td>1</td>
                  <td id="f_nama_perusahaan">PT. Golden Aruan Indonesia</td>
                  <td id="f_nomer_po">123.456.789</td>
                  <td id="f_kode_nomer_faktur">123.456.789</td>
                  <td id="f_npwp">123.456.789</td>
                  <td>
                    <button class="btn btn-sm btn-primary" id="detail_faktur" data-toggle="modal" data-target="#detail-faktur">Detail</button>
                    <button class="btn btn-sm btn-success" id="edit_faktur" data-toggle="modal" data-target="#create-edit-faktur"><i class="fa fa-edit"></i> Edit</button>
                    <button type="button" class="btn btn-sm btn-danger" id="hapus"><i class="fa fa-trash"></i> Hapus</button>
                  </td>
                </tr>
              </tbody>
              </table>
            </div>
            <!-- /.box-body -->
	</div>
</div>
@include('layout.main.FakturPajak.create-edit')
@include('layout.main.FakturPajak.detail')
@stop
@section('javascript')
<script type="text/javascript" src="/js/fakturPajak.js"></script>
@stop