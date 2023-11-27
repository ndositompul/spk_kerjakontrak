<nav class="navbar bg-white pt-2 pb-3 fixed-top">
    <div class="container">
        <a class="navbar-brand text-dark" style="font-weight: 800;"> <img src="<?= base_url('assets/')?>img/aij.png" style="width: 50px;" alt=""> Sistem Pendukung Keputusan Untuk Perpanjangan Kontrak Tenaga Kerja Pada PT. Adhya Indo Jaya</a>
    </div>
</nav>
<!-- Outer Row -->
<div class="row justify-content-center pt-lg-5 mt-5">
    <div class="col-xl-10 col-lg-12 col-md-9">
        <div class="card o-hidden border-10 shadow-lg mt-5">
            <div class="card-body bg-light ml-3 mr-2 ">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-6 d-none d-lg-block">
                        <h3 class="text-center">Penerapan Metode VIKOR</h3>
                        <hr class="bg-dark">
                        <h6 class="text-justify">
                        Metode Vikor adalah salah satu metode pengambilan keputusan multi kriteria atau yang lebih dikenal dengan istilah <i>Multi Criteria Decision Making</i>(MCDM).
                        MCDM digunakan untuk menyelesaikan permasalahan dengan kriteria yang bertentangan dan tidak sepadan. Metode ini berfokus pada peringkat dan pemilihan 
                        dari sekumpulan alternatif kriteria yang saling bertentangan untuk dapat mengambil keputusan untuk mencapai keputusan akhir. Metode ini mengambil keputusan
                        dengan solusi mendekati ideal dan setiap alternatif dievaluasi berdasarkan semua kriteria yang telah ditetapkan. Vikor melakukan perangkingan terhadap
                        alternatif dan menentukan solusi yang mendekati solusi kompromi ideal. Metode Vikor sangat berguna pada situasi dimana pengambil keputusan tidak memiliki 
                        kemampuan untuk menentukan pilihan pada saat desain sebuah sistem dimulai <i>(Betrik J Hutapea, dkk; 2018)</i>.
                        </h6>
                    </div>
                    <div class="col-lg-6">
                        <div class="p-3 mt-5 pt-2">
                            <div class="text-center mb-4">
                               <h3> <strong class="text-dark">Silahkan Login</strong></h3>
                            </div>
                            <?= $this->session->flashdata('pesan'); ?>
                            <?= form_open('', ['class' => 'user']); ?>
                            <div class="form-group">
                                <input autofocus="autofocus" autocomplete="off" value="<?= set_value('username'); ?>" type="text" name="username" class="form-control form-control-user" placeholder="Masukkan Username">
                                <?= form_error('username', '<small class="text-danger">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" class="form-control form-control-user" placeholder="Masukkan Password">
                                <?= form_error('password', '<small class="text-danger">', '</small>'); ?>
                            </div>
                            <button type="submit" class="btn btn-primary btn-user btn-block"> <i class="fas fa-sign-in-alt"></i> 
                                Login
                            </button>
                            <?= form_close(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>