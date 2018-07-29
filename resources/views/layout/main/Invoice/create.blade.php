<div class="modal fade" id="create-invoice" style="display: none;">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Tambah Invoice</h4>
              </div>
              <div class="modal-body">
                <div class="form-group">
                <div class="row">
                  <div class="col-xs-6">
                    <select name="ci_nama_perusahaan" class="form-control">
                      <option selected disabled>Pilih Perusahaan</option>
                      <option value="id">PT Golden Aruan Indonesia</option>
                      <option value="id">PT Laros Petroluem</option>
                    </select>
                  </div>
                  <div class="col-xs-6">
                    <select name="ci_no_po" class="form-control">
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
                    <input type="text" class="form-control" placeholder="Nomer Invoice">
                  </div>
                  <div class="col-xs-6">
                    <input type="date" class="form-control" placeholder="Tanggal Invoice">
                  </div>
                </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <a href="/po/edit" type="button" id="edit-po" data-id="1" class="btn btn-primary" >Tambah Invoice</a>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>