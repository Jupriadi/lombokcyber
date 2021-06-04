<?= $this->extend('/layout/templates/usertemplate') ?>
<?= $this->section('konten') ;?>
<!-- section artikel -->
<section class="container mt-5 pt-5">
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

    <div class="mt-4 mb-5">
        <div class="row">
            <?php foreach($artikel as $art): ?>
            <div class="col-md-4 mt-3">
                <div class="card shd rounded rounded-3 h-100">
                    <div class="card-image position-relative m-3 rounded-3">
                        <img src="/assets/img/artikel_thumbnail/<?= $art['thumbnailArtikel'] ?>" class="position-absolute top-50 start-50 translate-middle" alt="...">
                    </div>
                    <div class="card-body">
                        <a href="/baca/<?= $art['slugArtikel'] ?>">
                            <h6 class="card-title"><?= $art['judulArtikel'] ?></h6>
                        </a>
                        <p class="card-text text-secondary"><?= substr($art['isiArtikel'], 0,70) ?>..... </p>
                        
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <div class="py-5">
            <?= $pager->links() ?>
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