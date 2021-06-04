<?= $this->extend('/layout/templates/usertemplate') ?>
<?= $this->section('konten') ;?>

<section class="position-relative overflow-hidden my-5 py-5">
<div class="container py-5">
        <div class="text-center">
            <!-- <h2>Project Baru</h2>
            <span>Berikut Adalah Project Terbaru</span>
            <div class="garis bg-success mx-auto"></div> -->
        </div>

        <!-- list project terbaru -->
        <div class="row mt-5">
            <?php 
                foreach($listproject as $project):
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