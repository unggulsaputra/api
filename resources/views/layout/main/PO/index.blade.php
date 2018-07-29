@extends('layout.blank')
@section('content')
<div class="col-xs-12">
<div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Purchase Order</h3>

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
                  <th>Nama Perusahaan</th>
                  <th>Nomer PO</th>
                  <th>Tanggal PO</th>
                  <th>Status Pembayaran</th>
                  <th>Estimasi Pembayaran</th>
                  <th>Action</th>
                </tr>
                <tr>
                  <td>PT. Golden Aruan Indonesia</td>
                  <td>123.456.789</td>
                  <td>11-7-2014</td>
                  <td>
                    <span class="label label-info">Kredit</span>
                    <span class="label label-danger">Belum Lunas</span>
                  </td>
                  <td>2 Bulan</td>
                  <td>
                    <button type="button" class="btn btn-sm btn-info" id="detail" data-toggle="modal" data-target="#detail-po">Detail</button>
                    <button type="button" class="btn btn-sm btn-danger" id="hapus"><i class="fa fa-trash"></i> Hapus</button>
                  </td>
                </tr>
                <tr>
                  <td>PT. Golden Aruan Indonesia</td>
                  <td>123.456.789</td>
                  <td>11-7-2014</td>
                  <td>
                    <span class="label label-info">Kredit</span>
                    <span class="label label-success">Lunas</span>
                  </td>
                  <td>2 Bulan</td>
                  <td>
                    <button type="button" class="btn btn-sm btn-info" id="detail" data-toggle="modal" data-target="#detail-po">Detail</button>
                    <button type="button" class="btn btn-sm btn-danger" id="hapus"><i class="fa fa-trash"></i> Hapus</button>
                  </td>
                </tr>
                <tr>
                  <td>PT. Golden Aruan Indonesia</td>
                  <td>123.456.789</td>
                  <td>11-7-2014</td>
                  <td>
                    <span class="label label-primary">Cash</span>
                    <span class="label label-danger">Belum Lunas</span>
                  </td>
                  <td>2 Hari</td>
                  <td>
                    <button type="button" class="btn btn-sm btn-info" id="detail" data-toggle="modal" data-target="#detail-po">Detail</button>
                    <button type="button" class="btn btn-sm btn-danger" id="hapus"><i class="fa fa-trash"></i> Hapus</button>
                  </td>
                </tr>
                <tr>
                  <td>PT. Golden Aruan Indonesia</td>
                  <td>123.456.789</td>
                  <td>11-7-2014</td>
                  <td>
                    <span class="label label-primary">Cash</span>
                    <span class="label label-success">Lunas</span>
                  </td>
                  <td>2 Hari</td>
                  <td>
                    <button type="button" class="btn btn-sm btn-info" id="detail" data-toggle="modal" data-target="#detail-po">Detail</button>
                    <button type="button" class="btn btn-sm btn-danger" id="hapus"><i class="fa fa-trash"></i> Hapus</button>
                  </td>
                </tr>
              </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
</div>

@include('layout.main.po.detail')
@stop

@section('javascript')
<script type="text/javascript" src="/js/po.js"></script>
@stop