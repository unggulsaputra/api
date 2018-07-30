<div class="modal fade" id="detail-po" style="display: none;">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Detail PO</h4>
              </div>
              <div class="modal-body">
                <div class="row" style="padding: 0px 70px 20px 20px;">
                  <div class="col-sm-6">
                    <h3>PT. Golden Aruan Indonesia</h3>
                    <h4>
                      Jl. Pos Pengumben Komp. Pertambangan 2 No.3
                      RT.06 RW.05 Kel. Sukabumi Selatan Kec. Kebon Jeruk Jakarta Barat 
                      11560
                    </h4>
                  </div>
                  <div class="col-sm-6 text-right" style="margin-top: 20px;">
                    <h4>No PO : 123.456.789</h4>
                    <b>No Telp : 123.456.789</b>
                    <br><b>Fax : 123.456.789</b>
                    <br><b>NPWP : 123.456.789</b>
                  </div>
                </div>
                <div class="row" style="padding: 0px 70px 20px 20px;">
                  <div class="col-sm-6" style="margin-top: 20px;">
                    <b>Alamat Pengiriman</b>
                    <h3>PT. Golden Aruan Indonesia</h3>
                    <h4>
                      Jl. Pos Pengumben Komp. Pertambangan 2 No.3
                      RT.06 RW.05 Kel. Sukabumi Selatan Kec. Kebon Jeruk Jakarta Barat 
                      11560
                    </h4>
                  </div>
                  <div class="col-sm-6 text-right" style="margin-top: 70px;">
                      <b>Tanggal PO : 12-Dec-2018</b>
                      <br><b>Lama Pembayaran : 2 bulan</b>
                      <br><b>Tanggal Penyerahan Barang : 16-Dec-2018</b>
                      <br><b>Perkiraan Tanggal di bayar : 12-Dec-2018</b>
                      <br><b>Status : <span style="color: red">Belum Lunas</span></b>
                  </div>
                </div>

                <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data yang dipesan</h3>

            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody>
                  <tr>
                    <th>No</th>
                    <th>Barang</th>
                    <th>Satuan</th>
                    <th>Harga</th>
                    <th>Jumlah</th>
                    <th>SubTotal</th>
                    <th>Total Tax 10%</th>
                  </tr>
                  <tr id="detail-po-edit">
                    <td>1</td>
                    <td>Solar Industri</td>
                    <td>Liter</td>
                    <td>Rp 9.000</td>
                    <td>5000</td>
                    <td>Rp 45.000.000</td>
                    <td>Rp 49.500.000</td>
                  </tr>
                  <tr id="detail-po-edit">
                    <td>2</td>
                    <td>Kontainer</td>
                    <td>Buah</td>
                    <td>Rp 47.000.000</td>
                    <td>2</td>
                    <td>Rp 94.000.000</td>
                    <td>Rp 103.400.000</td>
                  </tr>
                  <tr>
                    <td colspan="6"><b>Total</b></td>
                    <td><b>Rp 152.900.000</b></td>
                  </tr>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success" id="lunas">Lunas</button>
                <a href="/po/edit" type="button" id="edit-po" data-id="1" class="btn btn-primary" >Edit</a>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>