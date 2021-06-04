<?= $this->extend('/layout/templates/usertemplate') ?>
<?= $this->section('konten') ;?>

<?= $this->include('/layout/components/modal.php') ?>
<section class="hg-80 hero text-light shadow-lg">
    <div class="container hg-100  position-relative ">
        <div class="row hg-100">
            <div class="col-md-6">
                <div class="text-box position-absolute p-5 top-50 translate-middle-y text-center text-md-start">
                    <span class="fs-1"><?= $profil['namaOrganisasi'] ?></span><br>
                    
                        <?= $profil['selogan'] ?>
                    <br>
                    <?php if(logged_in()==TRUE): ?>
                        <a href="/memberarea" class="btn btn-lg btn-outline-light mt-5" >
                            Member Area <i class="bi bi-arrow-right-circle-fill"></i>
                        </a>
                    <?php else: ?>
                        <button  class="btn btn-lg btn-outline-light mt-5" data-bs-toggle="modal" data-bs-target="#daftar">
                            Daftar Sekarang <i class="bi bi-arrow-right-circle-fill"></i>
                        </button>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-md-6 text-center d-none d-md-block position-relative">
               <img src="/assets/img/<?= $profil['logo'] ?>" class="w-50 position-absolute start-50  top-50 translate-middle mt-3 " alt="Ilustrasi Rinjani Dev" srcset="">
            </div>
        </div>
    </div>  
</section>

<div >
    <div class="container text-center">
        <div class="row justify-content-center">
            <!-- <div class="col-md-3 col-6 py-5">
                <h3 class="text-purple">459</h3>
                Freelancer
            </div> -->
            <div class="col-md-3 col-6 py-5">
                <h3 class="text-purple"><?= $jumArtikel ?></h3>
                Artikel
            </div>
            <div class="col-md-3 col-6 py-5">
                <h3 class="text-purple"><?= $jumProject ?></h3>
                Project
            </div>
            <div class="col-md-3 col-6 py-5">
                <h3 class="text-purple"><?= $jumKelas ?></h3>
                Kelas Belajar
            </div>
        </div>
    </div>
</div>


<!-- section artikel -->
<section class="container">
    <div class="text-center">
        <h2>Artikel dan Trik</h2>
        <div class="garis bg-success mx-auto"></div>
    </div>
    <div class="row py-5">
        <div class="col-md-4">
            <div class="card shd rounded rounded-3 h-100">
                <div class="card-image position-relative m-3 rounded-3">
                    <img src="/assets/img/artikel_thumbnail/<?= $randomArtikel['thumbnailArtikel'] ?>" class="position-absolute top-50 start-50 translate-middle" alt="...">
                </div>
                <div class="card-body">
                    <a href="/baca/<?= $randomArtikel['slugArtikel'] ?>">
                        <h6 class="card-title"><?= $randomArtikel['judulArtikel'] ?></h6>
                    </a>
                    <p class="card-text text-secondary"><?= substr($randomArtikel['isiArtikel'], 0,70) ?>..... </p>
                     
                </div>
            </div>
        </div>
        <div class="col-md-4 py-3 py-md-0">
            <div class="card shd h-100">
                <div class="card-header">
                    Artikel Populer
                </div>
                <div class="card-body">
                    <?php foreach($artikelPopuler as $populer): ?>
                    <div class="border mb-2">
                        <div class="row justify-content-center ps-2">
                            <div class="col-4 position-relative overflow-hidden">
                                <img style="min-height:100%"  src="/assets/img/artikel_thumbnail/<?= $populer['thumbnailArtikel'] ?>" class="position-absolute top-50 start-50 translate-middle w-100" alt="artikel">
                            </div>
                            <div class="col-8 p-0">
                                <div class="p-2">
                                    <a href="/baca/<?= $populer['slugArtikel'] ?>">
                                        <h6 class="card-title"><?= $populer['judulArtikel'] ?></h6>
                                    </a>
                                    <p class="card-text"><small class="text-muted"><i class="bi bi-calendar-fill"></i> <?= $populer['tglPublishArtikel'] ?></small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>                
                </div>
            </div>
        </div>
        <div class="col-md-4 py-3 py-md-0">
            <div class="card shd h-100">
                <div class="card-header">
                    Artikel Terbaru
                </div>
                <div class="card-body">
                    <?php foreach($artikelTerbaru as $baru): ?>
                    <div class="border mb-2">
                        <div class="row justify-content-center ps-2">
                            <div class="col-4 position-relative overflow-hidden">
                                <img style="min-height:100%"  src="/assets/img/artikel_thumbnail/artikel.jpg" class="position-absolute top-50 start-50 translate-middle w-100" alt="artikel">
                            </div>
                            <div class="col-8 p-0">
                                <div class="p-2">
                                    
                                    <a href="/baca/<?= $baru['slugArtikel'] ?>">
                                        <h6 class="card-title"><?= $baru['judulArtikel'] ?></h6>
                                    </a>
                                    <p class="card-text"><small class="text-muted"><i class="bi bi-calendar-fill"></i> <?= $populer['tglPublishArtikel'] ?></small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>                
                </div>
            </div>
        </div>
    </div>
</section>

<!-- kelas section -->
<section id="project">
    <div class="container py-5">
        <div class="text-center">
            <h2>Kelas Belajar Terbaru</h2>
            <span>Berikut Adalah Kelas Belajar Terbaru</span>
            <div class="garis bg-success mx-auto"></div>
        </div>
        
        <!-- list project terbaru -->
        <div class="row mt-5">
            <?php 
                foreach($newkelas as $kelas): 
            ?>
            <div class="col-md-4 mt-3">
                <a href="/kelas/<?= $kelas['slugKelas'] ?>">
                    <div class="card shd rounded rounded-3">
                        <div class="card-image position-relative m-3 rounded-3">
                            <img src="/assets/img/kelas_thumbnail/<?= $kelas['thumbnailKelas'] ?>" class="position-absolute top-50 start-50 translate-middle" alt="...">
                        </div>
                        <div class="card-body">
                            <h6 class="card-title"><?= $kelas['namaKelas'] ?></h6>
                            <div class="text-success">
                                <strong class="me-3">
                                    <i class="bi bi-person-fill"></i> <?= $kelas['username'] ?></strong>
                                <span class="text-secondary">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star"></i>
                                    <i class="bi bi-star"></i>
                                </span>
                            </div>
                            <p class="card-text text-secondary"><?= substr($kelas['tentangKelas'],0,50) ?></p>
                            <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                        </div>
                    </div>
                </a>
            </div>
            <?php 
                endforeach; 
            ?>
        </div>
    </div>
</section>


<!-- project section -->
<section id="project">
    <div class="container py-5">
        <div class="text-center">
            <h2>Project Baru</h2>
            <span>Berikut Adalah Project Terbaru</span>
            <div class="garis bg-success mx-auto"></div>
        </div>

        <!-- list project terbaru -->
        <div class="row mt-5">
            <?php 
                foreach($newproject as $project):
            ?>
            <div class="col-md-4 mt-2">
                <a href="/project/<?= $project['slugProject'] ?>">
                    <div class="card shd rounded rounded-3 hg-100">
                        <div class="card-image position-relative m-3 rounded-3">
                            <img src="/assets/img/project_thumbnail/project.jpg" class="position-absolute top-50 start-50 translate-middle" alt="...">
                        </div>

                        <div class="card-body">
                            <h6 class="card-title"><?= $project['judulProject'] ?></h6>
                            <p class="card-text text-secondary text-muted"><?= substr($project['isiProject'],0,50) ?></p>
                            <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                        </div>

                    </div>
                </a>
            </div>
            <?php 
                endforeach; 
            ?>
        </div>
    </div>
</section>
<script>
    $(".navbar").removeClass("bg-purple");
    $(".navbar").addClass("bg-transparent");
    $( window ).scroll( function () {
       
        if ( $(document).scrollTop() > 50 ) {
           
            $(".navbar").removeClass("bg-transparent");
            $(".navbar").addClass("bg-purple");

        } else {
            $(".navbar").removeClass("bg-purple")
        }
    });
</script>
<?= $this->endSection() ;?>