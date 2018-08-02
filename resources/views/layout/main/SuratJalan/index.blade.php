@extends('layout.blank')
@section('content-header','Surat Jalan')
@section('content')
<div class="col-xs-12">
<div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Surat Jalan</h3>
              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
              <button class="btn btn-sm btn-info btn-block" id="tambah_invoice" data-toggle="modal" data-target="#create-invoice">Tambah Surat Jalan</button>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody>
                <tr>
                  <th>No</th>
                  <th>Nama Perusahaan</th>
                  <th>Nomer PO</th>
                  <th>Proyek</th>
                  <th>Nomer Surat Jalan</th>
                  <th>Tanggal Surat Jalan</th>
                  <th>Action</th>
                </tr>
                <tr>
                  <td>1</td>
                  <td id="sj_nama_perusahaan">PT. Golden Aruan Indonesia</td>
                  <td id="sj_nomer_po">123.456.789</td>
                  <td id="sj_proyek">AEON SENTUL BOGOR</td>
                  <td id="sj_nomer_sj">123.456.789</td>
                  <td id="sj_tanggal_sj">29-07-2018</td>
                  <td>
                    <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#edit-invoice" id="invoice-edit">Detail</button>
                    <button type="button" class="btn btn-sm btn-danger" id="hapus"><i class="fa fa-trash"></i> Hapus</button>
                  </td>
                </tr>
              </tbody>
              </table>
            </div>
            <!-- /.box-body -->
</div>
</div>
@include('layout.main.SuratJalan.create');
@stop
@section('javascript')
<script type="text/javascript" src="/js/suratJalan.js"></script>
@stop