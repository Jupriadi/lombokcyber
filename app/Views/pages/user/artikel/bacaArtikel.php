<?= $this->extend('/layout/templates/usertemplate') ?>
<?= $this->section('konten') ;?>
<?php 
    $uri = $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
    // dd($uri);
?>
<section class="position-relative overflow-hidden my-5 py-5">
    <div style="display:none" class="share position-absolute position-fixed top-50">
        <div class=" fs-1 rounded-circle ms-4 text-center">
            <a href=""><i class="bi bi-whatsapp"></i></a>
        </div>
        <div  class=" fs-1 rounded-circle ms-4 text-center">
            <a href=""><i class="bi bi-facebook"></i></a>
        </div>
        <div class="fs-1 rounded-circle ms-4 text-center">
            <a href=""><i class="bi bi-twitter"></i></a>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="card shadow-sm">
                    <div class="card-header bg-white">
                        <div class="konten-thumbnail overflow-hidden position-relative">
                            <img src="/assets/img/artikel_thumbnail/<?= $artikel['thumbnailArtikel'] ?>" class="position-absolute" alt="Thumbnail Artikel">
                        </div>
                    </div>
                    <div class="card-body konten">
                        <div class="px-4">
                            <span class="text-dark">
                                <i class="bi bi-person-fill"></i>
                                <strong> <?= $artikel['username'] ?> . </strong>
                                <i class="text-secondary"><?= $artikel['tglUpdateArtikel'] ?></i>
                            </span><br><br>

                            <h3><strong><?= $artikel['judulArtikel'] ?></strong></h3><br>
                           
                            <small class=" p-2 text-secondary me-3"> <?= $artikel['kategoryArtikel'] ?></small>
                            <hr>
                            <p>
                               <?= $artikel['isiArtikel'] ?>
                            </p>

                           
                        </div>
                    </div>
                    <!-- Load Facebook SDK for JavaScript -->
                    <div class="fb-comments" data-href="http://localhost:8080/baca/<?= $artikel['slugArtikel'] ?>" data-width="" data-numposts="5"></div>
                </div>
                <!-- <div class="d-block">
                    <span>Bagikan </span><br>
                    <div>
                        <div style="height:50px;width:50px" class=" fs-1 ms-4 text-center text-success">
                            <a href=""><i class="bi bi-whatsapp"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-twitter"></i></a>
                        </div>
                    </div>
                </div> -->
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm position-sticky"  style="max-width: 24rem;position:sticky;top:0.25rem">
                    <div class="card-header">
                        Artikel Lainnya
                    </div>
                    <div class="card-body">
                        <?php foreach($artikellain as $prolain): ?>
                        <div class="border mb-2">
                            <div class="row justify-content-center ps-2">
                                <div class="col-4 position-relative overflow-hidden">
                                    <img style="min-height:100%"  src="/assets/img/artikel_thumbnail/<?= $prolain['thumbnailArtikel']?>" class="position-absolute top-50 start-50 translate-middle w-100" alt="artikel">
                                </div>
                                <div class="col-8 p-0">
                                    <div class="p-2">
                                        <h6 class="card-title">
                                            <a href="/baca/<?= $prolain['slugArtikel']?>"><?= $prolain['judulArtikel']?></a>
                                        </h6>
                                        <p class="card-text"><small class="text-muted"><?= $prolain['tglPublishArtikel']?></small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>                
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    $( window ).scroll( function () {
       
        if ( ($(document).scrollTop() > 50)) {
            // $(".share").removeClass("d-none");
            // $(".share").addClass("d-block");

            $(".share").fadeIn(2000);
        } else {
            $(".share").fadeOut();
        }

        
    });
</script>
<?= $this->endSection() ;?>