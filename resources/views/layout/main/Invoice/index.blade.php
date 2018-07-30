@extends('layout.blank')
@section('content')
<div class="col-xs-12">
<div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Invoice</h3>
              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
              <button class="btn btn-sm btn-info btn-block" id="tambah_invoice" data-toggle="modal" data-target="#create-invoice">Tambah Invoice</button>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody>
                <tr>
                  <th>No</th>
                  <th>Nama Perusahaan</th>
                  <th>Nomer Invoice</th>
                  <th>Tanggal Invoice</th>
                </tr>
                <tr>
                  <td>1</td>
                  <td id="di_nama_perusahaan">PT. Golden Aruan Indonesia</td>
                  <td id="di_inomer_invoice">123.456.789</td>
                  <td id="di_itanggal_invoice">29-07-2018</td>
                  <td>
                    <a href="/invoice/detail" type="button" class="btn btn-sm btn-info" id="invoice-detail">Detail</a>
                    <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#edit-invoice" id="invoice-edit">Edit</button>
                    <button type="button" class="btn btn-sm btn-danger" id="hapus"><i class="fa fa-trash"></i> Hapus</button>
                  </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td id="inama_perusahaan">PT. Golden Aruan Indonesia</td>
                  <td id="inomer_invoice">123.456.789</td>
                  <td id="itanggal_invoice">29-07-2018</td>
                  <td>
                    <button type="button" class="btn btn-sm btn-info" id="invoice-detail">Detail</button>
                    <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#edit-invoice" id="invoice-edit">Edit</button>
                    <button type="button" class="btn btn-sm btn-danger" id="hapus"><i class="fa fa-trash"></i> Hapus</button>
                  </td>
                </tr>
              </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
</div>
@include('layout.main.invoice.create');
@stop
@section('javascript')
<script type="text/javascript" src="/js/invoice.js"></script>
@stop