@extends('layout.blank')
@section('content')
    <section class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
            INVOICE
            <small class="pull-right">Date: 29/07/2018</small>
          </h2>
        </div>
        <!-- /.col -->
      </div>
      <!-- info row -->
      <div class="row invoice-info">
        <div class="col-sm-4 invoice-col">
          From
          <address>
            <strong>PT Golden Aruan Indonesia</strong><br>
            Jl. Pos Pengumben Komplek Pertambangan II/3<br>
            RT.06 RW.05 Kec. Kebon Jeruk Kel. Sukabumi Selatan<br>
            Jakarta Barat 11560<br>
            Phone: 123456789<br>
            Email: goldenaruanindonesia@gmail.com
          </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
          To
          <address>
            <strong>PT Golden Aruan Indonesia</strong><br>
            Jl. Pos Pengumben Komplek Pertambangan II/3<br>
            RT.06 RW.05 Kec. Kebon Jeruk Kel. Sukabumi Selatan<br>
            Jakarta Barat 11560<br>
            Phone: 123456789<br>
            Email: goldenaruanindonesia@gmail.com
          </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
          <b>No Invoice : 123456789</b><br>
          <br>
          <b>Tanggal Invoice :</b> 29 Juli 2018 <br>
          <b>Nomer Izin Usaha :</b> 123456789<br>
          <b>Kode Izin Usaha :</b> 123456789 
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- Table row -->
      <div class="row">
        <div class="col-xs-12 table-responsive">
          <table class="table table-striped">
            <thead>
            <tr>
                    <th>No</th>
                    <th>Barang</th>
                    <th>Satuan</th>
                    <th>Harga</th>
                    <th>Jumlah</th>
                    <th>SubTotal</th>
                  </tr>
            </thead>
            <tbody>
            <tr id="detail-po-edit">
                    <td>1</td>
                    <td>Solar Industri</td>
                    <td>Liter</td>
                    <td>Rp 9.000</td>
                    <td>5000</td>
                    <td>Rp 45.000.000</td>
                  </tr>
                  <tr id="detail-po-edit">
                    <td>2</td>
                    <td>Kontainer</td>
                    <td>Buah</td>
                    <td>Rp 47.000.000</td>
                    <td>2</td>
                    <td>Rp 94.000.000</td>
                  </tr>
            </tbody>
          </table>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <div class="row">
        <!-- accepted payments column -->
        <div class="col-xs-6">
          <p class="lead">Payment Methods:</p>
          <img src="{{asset('AdminLTE/dist/img/credit/visa.png')}}" alt="Visa">
          <img src="{{asset('AdminLTE/dist/img/credit/mastercard.png')}}" alt="Mastercard">
          <img src="{{asset('AdminLTE/dist/img/credit/american-express.png')}}" alt="American Express">
          <img src="{{asset('AdminLTE/dist/img/credit/paypal2.png')}}" alt="Paypal">

          <div class="row">
            <div class="col-xs-6">
              <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
                Rekening : Mandiri<br>
                Nomer Rek : 123.456.789<br>
                Atas Nama : PT Golden Aruan Indonesia
              </p>
            </div>
            <div class="col-xs-6">
              <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
                Rekening : BCA<br>
                Nomer Rek : 123.456.789<br>
                Atas Nama : PT Golden Aruan Indonesia
              </p>
            </div>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-6">
          <p class="lead">Amount Due 2/22/2014</p>

          <div class="table-responsive">
            <table class="table">
              <tr>
                <th style="width:50%">Subtotal:</th>
                <td>Rp 139.000.000</td>
              </tr>
              <tr>
                <th>Pajak(10%)</th>
                <td>Rp 13.900.000</td>
              </tr>
              <tr>
                <th>Biaya Pengiriman:</th>
                <td>Rp 0</td>
              </tr>
              <tr>
                <th>Total:</th>
                <td>Rp 152.900.000</td>
              </tr>
            </table>
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- this row will not appear when printing -->
      <div class="row no-print">
        <div class="col-xs-12">
          <a href="/invoice/print" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Print</a>
          <button type="button" class="btn btn-success pull-right"><i class="fa fa-credit-card"></i> Submit Payment
          </button>
          <button type="button" class="btn btn-primary pull-right" style="margin-right: 5px;">
            <i class="fa fa-download"></i> Generate PDF
          </button>
        </div>
      </div>
    </section>
    <!-- /.content -->
    <div class="clearfix"></div>
@stop