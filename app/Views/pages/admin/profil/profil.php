<?= $this->extend("/layout/templates/admintemplate") ?>

<?= $this->section('content') ;?>
<script>
    $("#profil").addClass("active");
</script>
<div class="px-4">
    <?php if($profil==null): ?>
        <div class="alert alert-warning text-dark">
            <h4 class="">Data Profil Organisasi Masih Kosong</h4>
            <hr>
            <p>Jalankan <code>php spark db:seed profil</code> di terminal</p>
        </div>
    <?php else: ?>
    <div class="row">
        <div class="col-12 col-xl-4 px-0 px-md-3">
            <div class="card shadow-sm">
                <div class="card-header">
                    <h4>Logo Organisasi</h4>
                </div>
                <div class="card-body">
                    <div class="logo-box mx-auto" style="width:150px">
                        <img width="100%" src="/assets/img/<?= $profil['logo'] ?>" alt="">
                    </div>
                </div>
            </div>

            <div class="card shadow-sm">
                <div class="card-header">
                    <h4>Kontak Sekolah</h4>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for=""><i class="bi bi-whatsapp"></i> HP / WA</label>
                        <div>
                            <?= $profil['hp'] ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for=""><i class="bi bi-envelope-fill"></i> Email</label>
                        <div>
                        <?= $profil['email'] ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for=""><i class="bi bi-globe"></i> Website</label>
                        <div>
                        <?= $profil['website'] ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-xl-8  px-0 px-md-3">
            <div class="card shadow-sm">
                <div class="card-header mb-3 bg-primary text-white">

                    <span class="fs-5"><strong>Detail Organisasi</strong></span>

                    <a href="/admin/profil/<?= $profil['id'] ?>" class="btn d-none d-md-inline bg-white btn-sm end-0 top-0 mt-3 mr-4 position-absolute rounded-pill">
                        <i class="bi bi-pen"></i> Edit
                    </a>
                </div>
                <div class="card-body  px-0 px-md-4">
                    <div class="container">
                  
                        <div class="row">
                            <div class="col-md-4">
                                Nama Organisasi
                            </div>
                            <div class="col-md-8">
                                : <?= $profil['namaOrganisasi'] ?>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-4">
                                Nama Singkat Organisasi
                            </div>
                            <div class="col-md-8">
                                : <?= $profil['namaSingkat'] ?>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-4">
                                Slogan Organisasi
                            </div>
                            <div class="col-md-8">
                                : <?= $profil['selogan'] ?>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-4">
                                Nomor Akte
                            </div>
                            <div class="col-md-8">
                                : <?= $profil['nomorPengesahan'] ?>
                            </div>
                        </div>
                        <hr>
                        <strong>Alamat Organisasi</strong>
                        <hr>
                        <div class="row">
                            <div class="col-md-4">
                               Provinsi
                            </div>
                            <div class="col-md-8">
                                : <?= $profil['provinsi'] ?>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-4">
                               Kabupaten /Kota
                            </div>
                            <div class="col-md-8">
                                : <?= $profil['kabupaten'] ?>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-4">
                               Kecamatan
                            </div>
                            <div class="col-md-8">
                                : <?= $profil['kecamatan'] ?>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-4">
                               Kelurahan / Desa
                            </div>
                            <div class="col-md-8">
                                : <?= $profil['desa'] ?>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-4">
                               Sekretariat 
                            </div>
                            <div class="col-md-8">
                                : <?= $profil['sekretariat'] ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <?php endif; ?>
</div>

</script>
<?= $this->endSection() ;?>
