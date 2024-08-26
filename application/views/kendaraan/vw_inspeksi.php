<div class="content-page">
     <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="d-flex flex-wrap align-items-center justify-content-between mb-4">
                    <div>
                        <h4 class="mb-3">Data Inspeksi Kendaraan</h4>
                        <p class="mb-0">Lakukan inspeksi harian, mingguan dan bulanan. Isi kolom dengan checklist jika kondisi
                            item berfungsi dengan baik. </p>
                    </div>
        </div>  
                  <div class="card-body">
                     <div class="table-responsive">
                        <table id="datatable" class="table data-tables table-striped">
                           <thead>
                              <tr class="ligth">
                                 <th>Nomor Plat</th>
                                 <th>Tipe Kendaraan</th>
                                 <th>Perusahaan</th>
                                 <th>Bulan</th>
                                 <th>Lokasi</th>
                                 <th>Aksi</th>
                              </tr>
                           </thead>
                           <tbody>
                              <?php $i = 1; ?>
                              <?php foreach ($inspeksi as $us) : ?>
                              <tr>
                                 <td> <?= $us['no_plat']; ?></td>
                                 <td> <?= $us['tipe_kendaraan']; ?></td>
                                 <td> <?= $us['perusahaan']; ?></td>
                                 <td> <?= $us['bulan']; ?></td>
                                 <td> <?= $us['lokasi']; ?></td>
                                 <td>
                                 <div class="d-flex align-items-center list-action">
                                 <a class="badge badge-info mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Detail"
                                        href="<?= base_url('Inspeksi/detail/') . $us['id_inspeksi']; ?>"><i class="ri-eye-line mr-0"></i></a>
                                 <a class="badge bg-success mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"
                                        href="<?= base_url('Inspeksi/edit/') . $us['id_inspeksi']; ?>"> <i class="ri-pencil-line mr-0"></i></a>
                                    <a class="badge bg-warning mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"
                                        href="<?= base_url('Inspeksi/hapus/') . $us['id_inspeksi']; ?>"> <i class="ri-delete-bin-line mr-0"></i></a>
                              </tr>
                              <?php $i++; ?>
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
    </div>