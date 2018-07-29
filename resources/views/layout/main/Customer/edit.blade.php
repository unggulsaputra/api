<div class="modal fade" id="edit-customer" style="display: none;">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title">Edit Customer</h4>
              </div>
              <div class="modal-body">
                
            <form id="post-po">
              <div class="row">
                <div class="col-xs-4">
                  <div class="form-group">
                    <label>Nama Perusahaan</label>
                    <input type="text" class="form-control" name="enama_perusahaan" id="enama_perusahaan">
                  </div>
                </div>
                <div class="col-xs-3">
                  <div class="form-group">
                    <label>Telepon Perusahaan</label>
                    <input type="text" class="form-control" name="etelp_perusahaan" id="etelp_perusahaan">
                  </div>
                </div>
                <div class="col-xs-2">
                  <div class="form-group">
                    <label>Fax</label>
                    <input type="text" class="form-control" name="efax" id="efax">
                  </div>
                </div>
                <div class="col-xs-3">
                  <div class="form-group">
                    <label>NPWP</label>
                    <input type="text" class="form-control" name="enpwp" id="enpwp">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-xs-12">
                  <div class="form-group">
                    <label>Alamat Perusahaan</label>
                    <textarea rows="3" name="ealamat_perusahaan" class="form-control" id="ealamat_perusahaan"></textarea>
                  </div>
                </div>
              </div>
              </form>
          </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="customer-update">Update</button>
              </div>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>

