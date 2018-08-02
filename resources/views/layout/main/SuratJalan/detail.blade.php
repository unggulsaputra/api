<div class="modal fade" id="create-invoice" style="display: none;">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Detail Surat Jalan</h4>
              </div>
              <form id="post-invoice">
              <div class="modal-body">
                  <div class="form-group">
                    <div class="row">
                      <div class="col-xs-6">
                        <select name="csj_nama_perusahaan" class="form-control">
                          <option selected disabled>Pilih Perusahaan</option>
                          <option value="id">PT Golden Aruan Indonesia</option>
                          <option value="id">PT Laros Petroluem</option>
                        </select>
                      </div>
                      <div class="col-xs-6">
                        <select name="csj_no_po" class="form-control">
                          <option selected disabled>Pilih No PO</option>
                          <option value="id">123.456.789</option>
                          <option value="id">987.654.321</option>
                        </select>
                      </div>
                    </div>
                  </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-xs-6">
                      <input type="text" name="csj_nomer_sj" class="form-control" placeholder="Nomer Surat Jalan">
                    </div>
                    <div class="col-xs-6">
                      <input type="date" name="csj_tanggal_sj" class="form-control" placeholder="Tanggal Surat Jalan">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-xs-6">
                      <input type="text" name="csj_driver" class="form-control" placeholder="Driver">
                    </div>
                    <div class="col-xs-6">
                      <input type="text" name="csj_trucking" class="form-control" placeholder="Plat Nomer">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-xs-4">
                      <select class="form-control" name="csj_barang">
                        <option selected disabled>Pilih Barang</option>
                        <option value="Solar Industri">Solar Industri</option>
                        <option value="Kontainer">Kontainer</option>
                      </select>
                    </div>
                    <div class="col-xs-4">
                      <input type="text" name="csj_satuan" class="form-control" placeholder="Satuan">
                    </div>
                    <div class="col-xs-4">
                      <input type="text" name="csj_jumlah" class="form-control" placeholder="jumlah">
                    </div>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    <a href="#" type="button" id="edit-po" data-id="1" class="btn btn-primary" >Tambah Surat Jalan</a>
              </div>
              </form>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
</div>