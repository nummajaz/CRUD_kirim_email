<style type="text/css">
#label{
   text-align: left;
   float: left;
   padding-left: 50px;
}

</style>
<div class="container-fluid">
	<div class="row">
		<h2 class="page-header">Daftar Pengunjung Museum Indonesia</h2>
	</div>
	
	<div class="row" style="padding-bottom:15px">		
    	<button type="button" class="btn btn-success pull-right" data-toggle="modal" data-target="#newConsigneeModal">
    		<i class="glyphicon glyphicon-plus"></i> Tambah Pengunjung</button>
	</div>
</div>
	
	<div class="row">
	<table id="tblListrik" class="table table-hover table-bordered table-striped table-content">
	<thead>
		<tr>
			<th>No.</th>
			<th class="text-center">Nama</th>
			<th class="text-center">Jenis</th>
			<th class="text-center" width="10%">Jumlah</th>
			<th class="text-center">Alamat</th>
			<th class="text-center">No HP</th>
			<th class="text-center" width="8%">Action</th>
		</tr>
	</thead>

	<tbody>	
	<?php $no = 1; ?>
	<?php foreach ($pengunjung as $data) { ?>
      <tr>
        <td class="text-center"><?= $no ?></td>
        <td><?= $data->nama ?></td>
        <td><?= $data->jenis ?></td>
        <td class="text-center"><?= $data->jumlah ?> orang</td>
        <td><?= $data->alamat ?></td>
        <td><?= $data->no_hp ?></td>
        <td class="text-center">
			<button class="btn btn-success btn-xs" data-toggle="modal" data-target="#edit<?= $data->id ?>"><span class="glyphicon glyphicon-edit"></span></a></button> 
			<a href="museum/delete/<?= $data->id ?>" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span></a> 

			<div class="modal fade" id="edit<?= $data->id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			  <div class="modal-dialog modal-md modal-80p">
			    <div class="modal-content">
			          <!-- Modal Header -->
			      <div class="modal-header">
			          <h4 class="modal-title" id="myModalLabel">
			              Update Daftar Pengunjung Museum
			          </h4>
			      </div>
			          
			          <!-- Modal Body -->
			      <div class="modal-body">            
			        <form class="form-horizontal" method="POST" action="<?= $this->url->get('museum/update') ?>">
			          <div class="form-group form-group-sm">
			              <!-- left column -->
			            <div class="col-sm-12">
			              <div class="form-group">
			                <label for="new_name" class="col-sm-4 control-label" id="label">Nama</label>
			                <div class="col-sm-6">
			                  <input type="hidden" class="form-control" name="id" value="<?= $data->id ?>">
			                  <input type="text" class="form-control" name="nama" placeholder="Nama" value="<?= $data->nama ?>">
			                </div>
			              </div>
			              <div class="form-group">
			                <label for="new_address" class="col-sm-4 control-label" id="label">Alamat</label>
			                <div class="col-sm-6">
			                  <input type="text" class="form-control" name="alamat" placeholder="Alamat" value="<?= $data->alamat ?>">
			                </div>

			              </div>

			              <div class="form-group">
			                <label for="new_zip" class="col-sm-4 control-label" id="label">Jenis Kunjungan</label>
			                <div class="col-sm-3">
			                    <select class="form-control" name="jenis">
			                      	<option value="personal" <?php if ($data->jenis == 'personal') { ?> selected <?php } ?>>Personal</option>
			    					<option value="kelompok" <?php if ($data->jenis == 'kelompok') { ?> selected <?php } ?>>Kelompok</option>
			                    </select>
			                </div>

			                <div class="col-sm-3">
			                	<input type="text" class="form-control" name="jumlah" placeholder="jumlah" value="<?= $data->jumlah ?>">
			                </div>
			              </div>

			              <div class="form-group">
			                  <label for="new_phone" class="col-sm-4 control-label" id="label">No Hp
			                  </label>
			                  <div class="col-sm-6">
			                    <input type="text" class="form-control" name="no_hp" placeholder="No Hp" required="" value="<?= $data->no_hp ?>">
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
        </td>
      </tr>
    <?php $no = $no + 1; ?>  
    <?php } ?>
	</tbody>
	</table>	
	</div>
</div>

<div class="modal fade" id="newConsigneeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md modal-80p">
    <div class="modal-content">
          <!-- Modal Header -->
      <div class="modal-header">
          <h4 class="modal-title" id="myModalLabel">
              Input Daftar Pengunjung Museum
          </h4>
      </div>
          
          <!-- Modal Body -->
      <div class="modal-body">            
        <form class="form-horizontal" method="POST" action="<?= $this->url->get('museum/create') ?>">
          <div class="form-group form-group-sm">
              <!-- left column -->
            <div class="col-sm-12">
              <div class="form-group">
                <label for="new_name" class="col-sm-4 control-label" id="label">Nama</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" name="nama" placeholder="Nama">
                </div>
              </div>
              <div class="form-group">
                <label for="new_address" class="col-sm-4 control-label" id="label">Alamat</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" name="alamat" placeholder="Alamat">
                </div>

              </div>

              <div class="form-group">
                <label for="new_zip" class="col-sm-4 control-label" id="label">Jenis Kunjungan</label>
                <div class="col-sm-3">
                    <select class="form-control" name="jenis" >
                      	<option value="" hidden="hidden">** Pilih</option>
                      	<option value="personal">Personal</option>
    					<option value="kelompok">Kelompok</option>
                    </select>
                </div>

                <div class="col-sm-3">
                	<input type="text" class="form-control" name="jumlah" placeholder="jumlah">
                </div>
              </div>

              <div class="form-group">
                  <label for="new_phone" class="col-sm-4 control-label" id="label">No Hp
                  </label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="no_hp" placeholder="No Hp" required="">
                  </div>
              </div>
            </div>
              <!-- right column -->
          </div>
          <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Simnpan</button>
            </div><!-- End Modal Footer -->
        </form>
      </div> <!-- End modal body div -->
    </div> <!-- End modal content div -->
  </div> <!-- End modal dialog div -->
</div> <!-- End modal div -->

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
        <form class="form-horizontal" method="POST" action="<?= $this->url->get('museum/create') ?>">
          <div class="form-group form-group-sm">
              <!-- left column -->
            <div class="col-sm-12">
              <div class="form-group">
                <label for="new_name" class="col-sm-4 control-label" id="label">Nama</label>
                <div class="col-sm-6">
                  <input type="hidden" class="form-control" name="id" value="<?= $id ?>">
                  <input type="text" class="form-control" name="nama" placeholder="Nama" value="<?= $nama ?>">
                </div>
              </div>
              <div class="form-group">
                <label for="new_address" class="col-sm-4 control-label" id="label">Alamat</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" name="alamat" placeholder="Alamat" value="<?= $alamat ?>">
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
                	<input type="text" class="form-control" name="jumlah" placeholder="jumlah" value="<?= $jumlah ?>">
                </div>
              </div>

              <div class="form-group">
                  <label for="new_phone" class="col-sm-4 control-label" id="label">No Hp
                  </label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="no_hp" placeholder="No Hp" required="" value="<?= $no_hp ?>">
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