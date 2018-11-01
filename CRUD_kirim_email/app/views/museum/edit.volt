<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md modal-80p">
    <div class="modal-content">
          <!-- Modal Header -->
      <div class="modal-header">
          <h4 class="modal-title" id="myModalLabel">
              Input Dafar Pengunjung Museum
          </h4>
      </div>
          
          <!-- Modal Body -->
      <div class="modal-body">            
        <form class="form-horizontal" method="POST" action="{{ url('museum/create') }}">
          <div class="form-group form-group-sm">
              <!-- left column -->
            <div class="col-sm-12">
              <div class="form-group">
                <label for="new_name" class="col-sm-4 control-label" id="label">Nama</label>
                <div class="col-sm-6">
                  <input type="hidden" class="form-control" name="id" value="{{id}}">
                  <input type="text" class="form-control" name="nama" placeholder="Nama" value="{{ nama }}">
                </div>
              </div>
              <div class="form-group">
                <label for="new_address" class="col-sm-4 control-label" id="label">Alamat</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" name="alamat" placeholder="Alamat" value="{{ alamat }}">
                </div>

              </div>

              <div class="form-group">
                <label for="new_zip" class="col-sm-4 control-label" id="label">Jenis Kunjungan</label>
                <div class="col-sm-3">
                    <select class="form-control" name="jenis">
                      	<option value="" hidden="hidden">** Pilih</option>
                      	<option value="personal">Personal</option>
    					<option value="kelompok">Kelompok</option>
                    </select>
                </div>

                <div class="col-sm-3">
                	<input type="text" class="form-control" name="jumlah" placeholder="jumlah" value="{{ jumlah }}">
                </div>
              </div>

              <div class="form-group">
                  <label for="new_phone" class="col-sm-4 control-label" id="label">No Hp
                  </label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="no_hp" placeholder="No Hp" required="" value="{{ no_hp }}">
                  </div>
              </div>
            </div>
              <!-- right column -->
          </div>
          <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary" >Update</button>
            </div><!-- End Modal Footer -->
        </form>
      </div> <!-- End modal body div -->
    </div> <!-- End modal content div -->
  </div> <!-- End modal dialog div -->
</div> <!-- End modal div -->