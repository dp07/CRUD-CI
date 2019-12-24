<div class="container">
    <div class="row mt-5">
        <div class="col-md-6">
        <div class="card text-dark bg-light mb-3" style="max-width: 18rem;">
        <div class="card-header">Detail Data Mahasiswa</div>
        <div class="card-body">
            <h5 class="card-title"><?= $mahasiswa['nama']; ?></h5>
            <p class="card-text"><?= $mahasiswa['nim']; ?></p>
            <p class="card-text"><?= $mahasiswa['email']; ?></p>
            <p class="card-text"><?= $mahasiswa['jurusan']; ?></p>
            <a href="<?= base_url(); ?>mahasiswa" class="btn btn-primary float-right">kembali</a>
        </div>
</div>
        </div>
    </div>
</div>