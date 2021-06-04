<?= $this->extend('/layout/templates/usertemplate') ?>
<?= $this->section('konten') ;?>

<section class="position-relative overflow-hidden my-5 py-5">
    <div style="display:none" class="share position-absolute position-fixed top-50 translate-middle-y">
        <div class="fs-1 bg-warning rounded-circle ms-4 text-center mb-2" data-bs-toggle="tooltip" data-bs-placement="right" title="Order Project">
            <a href="#order" data-bs-toggle="modal"><i class="bi bi-bullseye"></i></a>
        </div>
        
        <div class=" fs-1 rounded-circle ms-4 text-center">
            <a href=""><i class="bi bi-whatsapp"></i></a>
        </div>
        <div  class=" fs-1 rounded-circle ms-4 text-center">
            <a href="http://www.facebook.com/sharer.php?u="><i class="bi bi-facebook"></i></a>
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
                            <img src="/assets/img/project_thumbnail/<?= $project['thumbnailProject'] ?>" class="position-absolute" alt="Thumbnail Project">
                        </div>
                    </div>
                    <div class="card-body konten">
                        <div class="px-4">
                            <span class="text-dark">
                                <i class="bi bi-person-fill"></i>
                                <strong> <?= $project['username'] ?> . </strong>
                                <i class="text-secondary"><?= $project['tglUpdateProject'] ?></i>
                            </span><br><br>

                            <h3><strong><?= $project['judulProject'] ?></strong></h3><br>
                           
                            <small class=" p-2 text-secondary me-3"> <?= $project['kategoryProject'] ?></small>
                            <hr>
                            <p>
                               <?= $project['isiProject'] ?>
                            </p>

                           
                        </div>
                    </div>
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
                        Project Populer
                    </div>
                    <div class="card-body">
                        <?php foreach($projectlain as $prolain): ?>
                        <div class="border mb-2">
                            <div class="row justify-content-center ps-2">
                                <div class="col-4 position-relative overflow-hidden">
                                    <img style="min-width:100%;height:100%"  src="/assets/img/project_thumbnail/<?= $prolain['thumbnailProject']?>" class="position-absolute top-50 start-50 translate-middle w-100" alt="artikel">
                                </div>
                                <div class="col-8 p-0">
                                    <div class="p-2">
                                        <h6 class="card-title">
                                            <a href="/project/<?= $prolain['slugProject']?>"><?= $prolain['judulProject']?></a>
                                        </h6>
                                        <p class="card-text"><small class="text-muted"><?= $prolain['tglPublishProject']?></small></p>
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


<!-- Modal -->
<!-- <div class="" id="order" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true"> -->
<div class="modal fade" id="order" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body">
        <a style="z-index:1" href="" class="  position-absolute top-0 end-0 mt-3 me-4 close" data-bs-dismiss="modal"> <i class="bi bi-x-circle-fill"></i></a>

        <div class="row">
            <div class="col-3">
                <img src="/assets/img/avatar/<?= $project['avatar'] ?>" class="w-100" alt="">
            </div>
            <div class="col-9 position-relative">
                <div class="top-50 translate-middle-y position-absolute">
                    <strong><?= strtoupper($project['username']) ?></strong><br>
                    <span class="text-mutted text-secondary"><i>Memeber at RinjaniDEV</i></span>
                </div>
            </div>
        </div>
        <hr>
        
        <div class="p-3 text-center mb-3">
            Halo Tuan, Apakah Anda Tertarik dengan  Project Saya.?
            <strong>Slahkan di cek</strong><br><br>
            <a href="/demo/<?= $project['idProject'] ?>" class="btn btn-primary btn-sm">Demo</a>
            <a href="/demo/<?= $project['idProject'] ?>" class="btn btn-success btn-sm">Hubungi Saya</a>
        </div>
        <div class="p-3">
        </div>
      </div>
    </div>
  </div>
</div>

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