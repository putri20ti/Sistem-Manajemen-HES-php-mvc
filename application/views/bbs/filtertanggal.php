<div class="content-page">
<div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
               <div class="card">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">Data Observasi</h4>
                     </div>
                  </div>
                  <div class="card-body"> 
                    <a type="button" class="btn btn-secondary" href="index">Kembali</a> 
                     <hr>
                     <!-- Modal -->
                     <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                           <div class="modal-content">
                              <div class="modal-header">
                                 <h5 class="modal-title" id="exampleModalLabel">Filter Data</h5>
                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    
                                
                                 </button>
                              </div>
                              <div class="modal-body">
                                <div class="card-box">
                              <form action="<?= base_url();?>bbs/filtertanggal" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="berakhir">Tanggal Awal</label>
                            <input type="date" class="form-control" name="tgl_awal" id="tgl_awal" aria-describedby="berakhir" >
                                <?= form_error('tgl_awal', '<small class="text-danger">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="berakhir">Tanggal Berakhir</label>
                            <input type="date" class="form-control" name="tgl_akhir" id="tgl_akhir" aria-describedby="berakhir">
                                <?= form_error('tgl_akhir', '<small class="text-danger">', '</small>'); ?>
                        </div>
</div>
                              </div>
                              <div class="modal-footer">
                                 <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                 <button type="submit" class="btn btn-primary">Simpan</button>
                              </div>
                              </form>
                           </div>
                        </div>
                     </div>
                  <div class="card-body">
                     <div class="table-responsive">
                     <?= $this->session->flashdata('message');?>
                        <table id="datatable" class="table data-tables table-striped">
                           <thead>
                              <tr class="ligth">
                              <th>No</th>
                                 <th>Tanggal</th>
                                 <th>Nama Observer</th>
                                 <th>Lokasi Observasi</th>
                                 <th>Jumlah yang diobservasi</th>
                                 <th>Organisasi yang diobservasi</th>
                                 <th>Perusahaan Kontraktor</th>
                                 <th>Aksi</th>
                              </tr>
                           </thead>
                           <tbody>
                              <?php $no = 1; ?>
                              <?php foreach ($observasi as $us) : ?>
                              <tr>
                              <td><?= $no++; ?></td>
                                 <td> <?= $us['tanggal']; ?></td>
                                 <td> <?= $us['id_karyawan']; ?></td>
                                 <td> <?= $us['lokasi_observasi']; ?></td>
                                 <td> <?= $us['jumlah_observasi']; ?></td>
                                 <td> <?= $us['organisasi_observasi']; ?></td>
                                 <td> <?= $us['perusahaan_kontraktor']; ?></td>
                                 <td>
                                 <div class="d-flex align-items-center list-action">
                                    <a class="badge bg-success mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Detail"
                                        href="<?= base_url('Bbs/detail/') . $us['id_karyawan']; ?>"> <i class="ri-pencil-line mr-0"></i></a>
                                    <a class="badge bg-warning mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"
                                        href="<?= base_url('Bbs/hapus/') . $us['id_karyawan']; ?>"> <i class="ri-delete-bin-line mr-0"></i></a>
                              </tr>
                              <?php endforeach; ?>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      </div>
    </div>0