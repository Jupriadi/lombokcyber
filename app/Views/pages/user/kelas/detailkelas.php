<?= $this->extend('/layout/templates/usertemplate') ?>
<?= $this->section('konten') ;?>
<section class="min-hg-100 mt-5 pt-5">
    <div class="container hg-100">
        <div class="row">
            <div class="col-md-8">
                <div class="p-4">
                    <h3><?= $kelas['namaKelas'] ?></h3>
                    <br>
                    <div class="my-3">
                        <span class="bg-info py-2 px-3 rounded text-dark"><?= $kelas['levelKelas'] ?></span>
                    </div>
                    <div class="mt-4">
                        <span>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star"></i>
                        </span>
                        <small class="ms-4">
                           50 Ulasan
                        </small>
                        <small class="ms-4">
                           <?= $jumSiswa ?> Pelajar
                        </small>
                    </div>
                    <hr>
                    <div class="mt-4">
                        <h4>Tentang Kelas</h4>
                        <div class="card-body bg-light border">
                            <?= $kelas['tentangKelas'] ?>
                        </div>
                    </div>
                    <hr>

                    <div class="mt-4 " id="materi">
                        <h4>Materi Pembelajaran</h4>
                        
                        <?php if ($materi == null): ?>
                            <div class="text-center bg-white pb-3 text-secondary">
                                <img src="/assets/img/empty.gif" style="width:150px" alt="">
                                <h5>Belum Ada Materi untuk Ditampilkan</h5>
                            </div>
                        <?php endif; ?>
                        
                        <div class="accordion" id="accordionExample">
                            <?php foreach($materi as $mat): ?>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-<?= $mat['idMateri'] ?>" aria-expanded="false" aria-controls="collapseThree">
                                   <?= $mat['judulMateri'] ?>
                                </button>
                                </h2>
                                <div id="acc-<?= $mat['idMateri'] ?>" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <?php for($x=1;$x<=7;$x++): ?>
                                            <ul >
                                                <a href="">
                                                    <li class="submodul position-relative" style="list-style-type:none">
                                                        <?php if($x>4): ?>
                                                            <i class="bi bi-lock-fill"></i>
                                                        <?php else: ?>
                                                            <i class="bi bi-unlock-fill text-success"></i>
                                                        <?php endif; ?>
                                                        <?= $mat['judulMateri'] ?> Sub Modul Ke <?= $x ?>
                                                        <span class="end-0 position-absolute">
                                                            <i class="bi bi-play-btn-fill"></i> 
                                                        </span>
                                                    </li>
                                                </a>
                                            </ul>
                                        <?php endfor; ?>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <hr>
                    <div class="mt-4">
                        <h4>Kesan Alumni</h4>
                        <div class="card-body bg-light border mb-2">
                            <strong class="mb-4"><i class="bi bi-person-fill"></i> Raffan Khaerul</strong><br><br>
                            saya sengang belajar disini
                        </div>
                        <div class="card-body bg-light border mb-2">
                            <strong class="mb-4"><i class="bi bi-person-fill"></i> Ezi Khaerul</strong><br><br>
                            saya sengang belajar disini
                        </div>
                        <div class="card-body bg-light border mb-2">
                            <strong class="mb-4"><i class="bi bi-person-fill"></i> Husnul Fitri</strong><br><br>
                            saya sengang belajar disini
                        </div>
                    </div>


                </div>
            </div>
            <div class="col-md-4 pt-4">
                <div class="card mb-3" style="max-width: 24rem;position:sticky;top:0.25rem">
                  <div class="card-header bd-title">
                    <div class="row mt-2">
                        <div class="col-3">
                            <div style="width:60px;height:60px" class="bg-light me-3 rounded-circle text-center">
                                <img src="/assets/img/avatar/<?= $kelas['avatar'] ?>" class="w-100" alt="" srcset="">
                            </div>
                        </div>
                        <div class="col-9">
                            
                            <span><?= $kelas['username'] ?></span><br>
                            <small class="text-secondary"><?= $kelas['posisi']." at ".$kelas['komunitas'] ?></small>
                        </div>
                    </div>
                  </div>
                  <div class="card-body text-primary">
                    <div class="thumbnail-box">
                        <img src="/assets/img/kelas_thumbnail/<?= $kelas['thumbnailKelas'] ?>" alt="" srcset="" class="w-100">
                    </div>
                    <hr>
                    <h3 class="text-warning">
                        <?php if($kelas['biaya']<1): ?>
                            Free
                        <?php else : ?>
                            Rp. <?= number_format($kelas['biaya']) ?>
                        <?php endif; ?>
                    </h3>
                    <hr>
                    <?php if(logged_in()==true): ?>
                        <button data-bs-toggle="modal" data-bs-target="#ikutikelas" class="btn btn-lg text-light bg-primary form-control">Ikuti Kelas</button>
                    <?php else: ?>
                        
                        <button data-bs-toggle="modal" data-bs-target="#login" class="btn btn-lg text-light bg-primary form-control">Login Untuk Gabung</button>
                    <?php endif; ?>
                  </div>
                </div>
                
            </div>
        </div>
    </div>
</section>

<!-- Modal ikuti-->
<div class="modal fade" id="ikutikelas" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered ">
    <div class="modal-content">
      <div class="modal-body">

        <span>Anda Akan Mengikuti Kelas : <br> <strong><?= $kelas['namaKelas'] ?></strong></span>
        <br>
        <hr>
        lanjutkan pembayaran untuk mulai belajar :
        <div class="row justify-content-center">
            <div class="col-1" >
                
                <input class="mt-4 form-check-input align-middle" type="radio" name="payment" id="ovo">
            </div>
            <div class="col-2">
                <div class="paymentlogo-box">
                    <img class="w-100" src="/assets/img/payment_logo/ovo.jpg" alt="logo ovo" srcset="">
                </div>

            </div>
            <div class="col-7 pt-3">
                <label class="form-check-label" for="ovo">
                    OVO
                </label>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-1" >
                <input class="mt-4 form-check-input align-middle" type="radio" name="payment" id="dana">
            </div>
            <div class="col-2">
                <div class="paymentlogo-box">
                    <img class="w-100" src="/assets/img/payment_logo/dana.jpg" alt="logo ovo" srcset="">
                </div>

            </div>
            <div class="col-7 pt-3">
                <label class="form-check-label" for="dana">
                    Dana
                </label>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-1" >
                <input class="mt-4 form-check-input align-middle" type="radio" name="payment" id="briva">
            </div>
            <div class="col-2">
                <div class="paymentlogo-box">
                    <img class="w-100" src="/assets/img/payment_logo/briva.png" alt="logo ovo" srcset="">
                </div>

            </div>
            <div class="col-7 pt-3">
                <label class="form-check-label" for="briva">
                    BRI Virtual Account
                </label>
            </div>

        </div>
        <hr>
        <div class="container text-center">
            <button class="form-control btn bg-success text-light">Lanjutkan</button>
            <br>
            <a href="" data-bs-dismiss="modal">Batal </a>
        </div>
      </div>
    </div>
  </div>
</div>

<?= $this->include('/layout/components/modal.php') ?>
<?= $this->endSection() ;?>