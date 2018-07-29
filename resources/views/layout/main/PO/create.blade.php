@extends('layout.blank')
@section('content')

<div class="col-lg-10">
<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah PO</h3>
            </div>
            <div class="box-body">
            <form id="post-po">
              <div class="row">
                <div class="col-xs-4">
	                <label>Nama Perusahaan</label>
	                <div class="form-group">
	                	<input type="text" class="form-control" id="cnama_perusahaan" name="nama_perusahaan" placeholder="Nama Perusahaan">
	                </div>
                </div>
                <div class="col-xs-2">
	                <label>Telepon Perusahaan</label>
	                <div class="form-group">
	                	<input type="text" class="form-control" id="ctelp_perusahaan" name="telp_perusahaan" placeholder="Telp Perusahaan">
	                </div>
                </div>
                <div class="col-xs-2">
	                <label>Fax</label>
	                <div class="form-group">
	                	<input type="text" class="form-control" id="cfax" name="fax" placeholder="Fax">
	                </div>
                </div>
                <div class="col-xs-2">
	                <label>NPWP</label>
	                <div class="form-group">
	                	<input type="text" class="form-control" id="cnpwp" name="npwp" placeholder="NPWP">
	                </div>
                </div>
                <div class="col-xs-2">
	                <label>Nomer PO</label>
	                <div class="form-group">
	                	<input type="text" class="form-control" id="cnomer_po" name="nomer_po" placeholder="Nomer PO">
	                </div>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-4">
	                <label>Cara Pembayaran</label>
	                <div class="form-group">
	                	<select name="cara_pembayaran" id="ccara_pembayaran" class="form-control">
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
	                			<input type="text" class="form-control" id="clama_pembayaran_bulan" name="lama_pembayaran_bulan" placeholder="ex:2">
	                		</div>
	                		<div class="col-xs-4">
	                			Bulan
	                		</div>
	                	</div>
	                	<div class="col-xs-6">
	                		<div class="col-xs-8">
	                			<input type="text" class="form-control" id="clama_pembayaran_hari" name="lama_pembayaran_hari" placeholder="ex:00">
	                		</div>
	                		<div class="col-xs-4">
	                			Hari
	                		</div>
	                	</div>
	                </div>
                </div>
                <div class="col-xs-4">
	                <label>Tanggal PO</label>
	                <div class="form-group">
	                	<input type="date" class="form-control" id="ctanggal_po" name="tanggal_po" >
	                </div>
                </div>
              </div>

              <div class="row">
                <div class="col-xs-6">
	                <label>Alamat Perusahaan</label>
	                <div class="form-group">
	                	<textarea rows="3" id="calamat_perusahaan" name="alamat_perusahaan" class="form-control"></textarea>
	                </div>
                </div>
                <div class="col-xs-6">
	                <label>Tujuan Pengiriman</label>
	                <div class="form-group">
	                	<textarea rows="3" id="ctujuan_pengiriman" name="tujuan_pengiriman" class="form-control"></textarea>
	                </div>
                </div>
              </div>
           
           <div id="plus-po">
           	<div class="row">
                <div class="col-xs-4">
	                <label>Jenis Barang</label>
	                <div class="form-group">
	                	<select name="jenis_barang[]" id="cjenis_barang[]" class="form-control">
	                		<option disabled selected>Pilih Jenis Barang</option>
	                		<option value="Solar Industri">Solar Industri</option>
	                		<option value="Kontainer">Kontainer</option>
	                	</select>
	                </div>
                </div>
                <div class="col-xs-2">
	                <label>Satuan</label>
	                <div class="form-group">
	                	<input type="text" class="form-control" id="csatuan[]" name="satuan[]" placeholder="liter/buah">
	                </div>
                </div>
                <div class="col-xs-3">
	                <label>Harga Barang</label>
	                <div class="form-group">
	                	<input type="text" class="form-control" id="charga_barang[]" name="harga_barang[]" placeholder="Harga Barang">
	                </div>
                </div>
                <div class="col-xs-2">
	                <label>Jumlah Barang</label>
	                <div class="form-group">
	                	<input type="text" class="form-control" id="cjumlah_barang[]" name="jumlah_barang[]" placeholder="Jumlah Barang">
	                </div>
                </div>
                <div class="col-xs-1">
                	<button type="button" style="margin-top: 25px;" id="tambah" class="btn btn-primary">+</button>
                </div>
              </div>
            </div>
              <button type="submit" class="btn btn-success btn-sm btn-block">Save</button>
              </form>
            </div>
            <!-- /.box-body -->
          </div>
</div>
@stop
@section('javascript')
<script type="text/javascript" src="/js/po.js"></script>
@stop