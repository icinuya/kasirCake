<div class="col-md-12">
            <div class="card card-primary ">
              <div class="card-header">
                <h3 class="card-title"><?= $subjudul ?></h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-toggle="modal" data-target="#Tambah-Data"><i class="fa fa-plus"></i> Tambah Data
</button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <?php
                if (session()->getFlashdata('pesan')){
                    echo ' <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fa fa-check"></i>';
                    echo session()->getFlashdata('pesan');
                    echo '</h5></div>';
                }
?>
              <table class="table table-bordered">
                <thead>
                <tr class="text-center">
                    <th width="50px">No</th>
                    <th>Satuan</th>
                    <th width="100px">Aksi</th>
                </tr>  
                </thead>
                <tbody>
                <?php $no = 1;
                 foreach ($satuan as $key => $value) { ?>
                   <tr>
                <td><?=$no++ ?></td>
                <td><?=$value['nama_satuan'] ?></td>
                <td>
                    <button class="btn btn-warning btn-sm btn-flat"  data-toggle="modal" data-target="#edit-Data<?= $value['id_satuan'] ?>"><i class="ti ti-pencil"></i></button>
                    <button class="btn btn-danger btn-sm btn-flat"  data-toggle="modal" data-target="#delete-Data<?= $value['id_satuan'] ?>"><i class="fa fa-trash"></i></button>
                </td>
                   </tr>
                <?php }?>
                </tbody>
               </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
         <!--Modall Tambah Data-->
          <div class="modal fade" id="Tambah-Data">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Tambah Data <?= $subjudul?></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <?php echo form_open('Satuan/InsertData')?>
            <div class="modal-body">

            <div class="form-group">
                <label for="">Nama Satuan</label>
            <input name="nama_satuan" class="form-control" placeholder="satuan" required>
                 </div>

                </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary btn-fla">Save</button>
            </div>
            <?php echo form_close() ?>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->

      <?php foreach ($satuan as $key => $value) { ?>
        <!--Modall Edit Data-->
        <div class="modal fade" id="edit-Data<?= $value['id_satuan'] ?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Edit Data <?= $subjudul?></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <?php echo form_open('Satuan/UpdateData/'. $value['id_satuan'])?>
            <div class="modal-body">

            <div class="form-group">
                <label for="">Nama Satuan</label>
            <input name="nama_satuan" value="<?= $value['nama_satuan']?>" class="form-control" placeholder="satuan" required>
                 </div>

                </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-warning btn-fla">Save</button>
            </div>
            <?php echo form_close() ?>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
    <?php } ?>


       <!--Modall Hapus Data-->
    <?php foreach ($satuan as $key => $value) { ?>
  <div class="modal fade" id="delete-Data<?= $value['id_satuan'] ?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Delete Data <?= $subjudul?></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
           
            <div class="modal-body">
            Apakah Anda Yakin Hapus <b><?= $value['nama_satuan']?></b>..?
             </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
              <a href="<?= base_url('Satuan/DeleteData/'. $value['id_satuan'])?>" class="btn btn-danger btn-fla">Delete</button></a>
          </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
    <?php } ?>