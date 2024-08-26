<div class="content-page">
<div class="container-fluid">
   <div class="card">
      <div class="card-body">
         <div class="row">
            <div class="col-lg-12">
               <div class="d-flex align-items-center border-bottom justify-content-between mb-4">
                  <div class="form-name">
                     <h3 class="mb-2">Ubah Password</h3>
                  </div>
               </div>
               <?php if ($this->session->flashdata('success')): ?>
    <div class="alert alert-success" role="alert">
        <?= $this->session->flashdata('success'); ?>
    </div>
<?php elseif ($this->session->flashdata('error')): ?>
    <div class="alert alert-danger" role="alert">
        <?= $this->session->flashdata('error'); ?>
    </div>
<?php endif; ?>
               <form action="<?= base_url('profil/update_password'); ?>" method="post">
    <div class="form-group">
        <label for="old_password">Password Lama</label>
        <input type="password" class="form-control" id="old_password" name="old_password" required>
    </div>
    <div class="form-group">
        <label for="new_password">Password Baru</label>
        <input type="password" class="form-control" id="new_password" name="new_password" required>
    </div>
    <div class="form-group">
        <label for="confirm_password">Konfirmasi Password Baru</label>
        <input type="password" class="form-control" id="confirm_password" name="confirm_password" required>
    </div>
    <a href="<?= base_url('profil') ?>" class="btn btn-danger btn-lg mt-3">Cancel</a>

    <button type="submit" class="btn btn-primary btn-lg mt-3">Ubah Password</button>
</form>
            </div>
         </div>
      </div>
   </div>
</div>
</div>