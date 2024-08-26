<div class="content-page">
<div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
               <div class="card">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">Data Inspeksi Harian</h4>
                     </div>
                     
        <a href="<?= base_url() ?>InspeksiHarian/tambah" class="btn btn-primary add-list"><i class="las la-plus mr-3"></i>Tambah Data</a>
                  </div>
                  <div class="card-body">
                     <div class="table-responsive">
                     <?= $this->session->flashdata('message');?>
                        <table id="datatable" class="table data-tables table-striped">
                        <thead>
                              <tr class="ligth">
                                 <th>Nomor Plat</th>
                                 <th>Tipe Kendaraan</th>
                                 <th>Perusahaan</th>
                                 <th>Lokasi</th>
                                 <th>Tanggal</th>
                                 <th>Aksi</th>
                              </tr>
                           </thead>
                           <tbody>
                              <?php $i = 1; ?>
                              <?php foreach ($inspeksi_harian as $us) : ?>
                              <tr>
                                 <td> <?= $us['no_plat']; ?></td>
                                 <td> <?= $us['tipe_kendaraan']; ?></td>
                                 <td> <?= $us['perusahaan']; ?></td>
                                 <td> <?= $us['lokasi']; ?></td>
                                 <td> <?= $us['tanggal']; ?></td>
                                 <td>
                                 <div class="d-flex align-items-center list-action">
                                 <a class="badge badge-info mr-2" data-toggle="tooltip" data-placement="top" title="Detail" href="<?= base_url('InspeksiDetail/detail/') . $us['id']; ?>"><i class="ri-eye-line mr-0"></i></a>
                                    <a class="badge bg-warning mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"
                                        href="<?= base_url('InspeksiHarian/hapus/') . $us['id']; ?>"> <i class="ri-delete-bin-line mr-0"></i></a>
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