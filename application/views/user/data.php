<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><i class="fas fa-fw fa-users-cog"></i> Data User</h1>
</div>
<?= $this->session->flashdata('pesan'); ?>
<div class="card shadow-sm mb-4 border-bottom-info">
    <div class="card-header bg-white py-3">
        <div class="row">
            <div class="col">
                <h4 class="h5 align-middle m-0 font-weight-bold text-dark">
                <i class="fas fa-user"></i> Data Akun Pengguna
                </h4>
            </div>
            <div class="col-auto">
                <a href="<?= base_url('manajemenakun/add') ?>" class="btn btn-sm btn-success btn-icon-split">
                    <span class="icon">
                        <i class="fas fa-fw fa-plus"></i>
                    </span>
                    <span class="text">
                        Tambah Kriteria
                    </span>
                </a>
            </div>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-striped" id="dataTable">
            <thead>
                <tr>
                    <th width="30">No.</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Role</th>
                    <th width="15%">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                if ($users) :
                    foreach ($users as $user) :
                        ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $user['nama']; ?></td>
                            <td><?= $user['username']; ?></td>
                            <td><?= $user['role']; ?></td>
                            <td>
                                <a href="<?= base_url('manajemenakun/edit/') . $user['id_user'] ?>" class="btn btn-circle btn-sm btn-warning" data-toggle="tooltip" title="edit"><i class="fa fa-fw fa-edit"></i></a>
                                <a onclick="return confirm('Yakin ingin menghapus data?')" href="<?= base_url('manajemenakun/delete/') . $user['id_user'] ?>" class="btn btn-circle btn-sm btn-danger" data-toggle="tooltip" title="hapus"><i class="fa fa-fw fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php endforeach;
                    else : ?>
                    <tr>
                        <td colspan="8" class="text-center">Silahkan tambahkan user baru</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>
<script>
$(function (){
  $('[data-toggle="tooltip"]').tooltip()

})

</script>