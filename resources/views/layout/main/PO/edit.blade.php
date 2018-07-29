@extends('layout.blank')
@section('content')

<div class="col-lg-10">
<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Edit PO</h3>
            </div>
            <div class="box-body">
            <form id="update-po">
              <div class="row">
                <div class="col-xs-2">
	                <label>Nomer PO</label>
	                <div class="form-group">
	                	<input type="text" class="form-control" id="enomer_po" name="enomer_po" placeholder="Nomer PO">
	                </div>
                </div>
                <div class="col-xs-4">
	                <label>Tanggal PO</label>
	                <div class="form-group">
	                	<input type="date" class="form-control" id="etanggal_po" name="etanggal_po" >
	                </div>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-4">
	                <label>Cara Pembayaran</label>
	                <div class="form-group">
	                	<select name="ecara_pembayaran" id="ecara_pembayaran" class="form-control">
	                		<option disabled selected>Cara Pembayaran</option>
	                		<option value="cash">Cash</option>
	                		<option value="kredit">Kredit</option>
	                	</select>
	                </div>
                </div>
                <div class="col-xs-4">
	                <label>Lama Pembayaran</label><br>
	                <div class="form-group">
	                	<div class="col-xs-6">
	                		<div class="col-xs-8">
	                			<input type="text" class="form-control" id="elama_pembayaran_bulan" name="elama_pembayaran_bulan" placeholder="ex:2">
	                		</div>
	                		<div class="col-xs-4">
	                			Bulan
	                		</div>
	                	</div>
	                	<div class="col-xs-6">
	                		<div class="col-xs-8">
	                			<input type="text" class="form-control" id="elama_pembayaran_hari" name="elama_pembayaran_hari" placeholder="ex:00">
	                		</div>
	                		<div class="col-xs-4">
	                			Hari
	                		</div>
	                	</div>
	                </div>
                </div>
              </div>

              <div class="row">
                <div class="col-xs-8">
	                <label>Tujuan Pengiriman</label>
	                <div class="form-group">
	                	<textarea rows="3" id="etujuan_pengiriman" name="etujuan_pengiriman" class="form-control"></textarea>
	                </div>
                </div>
              </div>
           
           <div id="plus-po">
           	<div class="row">
                <div class="col-xs-4">
	                <label>Jenis Barang</label>
	                <div class="form-group">
	                	<select name="ejenis_barang[]" id="ejenis_barang[]" class="form-control">
	                		<option disabled selected>Pilih Jenis Barang</option>
	                		<option value="Solar Industri">Solar Industri</option>
	                		<option value="Kontainer">Kontainer</option>
	                	</select>
	                </div>
                </div>
                <div class="col-xs-2">
	                <label>Satuan</label>
	                <div class="form-group">
	                	<input type="text" class="form-control" id="esatuan[]" name="esatuan[]" placeholder="liter/buah">
	                </div>
                </div>
                <div class="col-xs-3">
	                <label>Harga Barang</label>
	                <div class="form-group">
	                	<input type="text" class="form-control" id="eharga_barang[]" name="eharga_barang[]" placeholder="Harga Barang">
	                </div>
                </div>
                <div class="col-xs-2">
	                <label>Jumlah Barang</label>
	                <div class="form-group">
	                	<input type="text" class="form-control" id="ejumlah_barang[]" name="ejumlah_barang[]" placeholder="Jumlah Barang">
	                </div>
                </div>
                <div class="col-xs-1">
                	<button type="button" style="margin-top: 25px;" id="tambah" class="btn btn-primary">+</button>
                </div>
              </div>
            </div>
            <div class="col-xs-6">
              <button type="submit" class="btn btn-success btn-sm btn-block">update</button>
            </div>
            <div class="col-xs-6">
              <button type="button" class="btn btn-default btn-sm btn-block">cancel</button>
            </div>
              </form>
            </div>
            <!-- /.box-body -->
          </div>
</div>
@stop
@section('javascript')
<script type="text/javascript" src="/js/po.js"></script>
@stop