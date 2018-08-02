<div class="modal fade" id="create-edit-faktur" style="display: none;">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Tambah Faktur Pajak</h4>
              </div>
              <form id="post-update-invoice">
              <div class="modal-body">
                  <div class="form-group">
                    <div class="row">
                      <div class="col-xs-6">
                        <select name="cef_nama_perusahaan" id="cef_nama_perusahaan" class="form-control">
                          <option selected disabled>Pilih Perusahaan</option>
                          <option value="id">PT Golden Aruan Indonesia</option>
                          <option value="id">PT Laros Petroluem</option>
                        </select>
                      </div>
                      <div class="col-xs-6">
                        <select name="cef_no_po" class="form-control">
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
                      <input type="text" class="form-control" name="cef_nomer_faktur" placeholder="Nomer dan Kode Seri">
                    </div>
                    <div class="col-xs-6">
                      <input type="text" class="form-control" name="cef_npwp" placeholder="NPWP">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-xs-6">
                      <input type="date" class="form-control" name="cef_tanggal_faktur" >
                    </div>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    <button type="submit" id="btn-post-update" data-id="1" class="btn btn-primary" >Tambah Faktur</button>
              </div>
              </form>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
</div>