<?= $this->extend('/layout/templates/usertemplate') ?>
<?= $this->section('konten') ;?>
<section class="min-hg-100 mt-5 pt-5">
    <div class="container hg-100">
        <div class="row">
            <div class="col-md-8">
                <div class="p-4">
                    <h3>Membangun Learnin Management System (LMS) Berbasis Codeigniter</h3>
                    <p class="text-secondary pt-3"> Belajar Membuta Aplikasi Pelatihan dan Pembelajaran Online dengan menggunakan framework Codeigniter 4</p>
                    <div class="my-3">
                        <span class="bg-info py-2 px-3 rounded text-dark">Pemula</span>
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
                           121 Pelajar
                        </small>
                    </div>
                    <hr>
                    <div class="mt-4">
                        <h4>Tentang Kelas</h4>
                        <div class="card-body bg-light border">
                            Pada kelas ini kita akan membahas sampai tuntas tentang pembuatan sistem pembelajaran online dengan menggunakan codeigniter 4 dan bootstrap 5
                        </div>
                    </div>


                    <div class="mt-4 " id="materi">
                        <h4>Materi Pembelajaran</h4>
                        
                            <div class="accordion" id="accordionExample">
                                <?php for($i=1;$i<=10;$i++): ?>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-<?= $i ?>" aria-expanded="false" aria-controls="collapseThree">
                                        Modul Pembelajara ke <?= $i ?>
                                    </button>
                                    </h2>
                                    <div id="acc-<?= $i ?>" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
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
                                                            Materi ke <?= $i ?> Sub Modul Ke <?= $x ?>
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
                                <?php endfor; ?>

                            </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 pt-4">
                <div class="card mb-3" style="max-width: 24rem;position:sticky;top:0.25rem">
                  <div class="card-header bd-title">
                    <div class="row mt-2">
                        <div class="col-3">
                            <div style="width:60px;height:60px" class="bg-dark me-3 text-secondary rounded-circle text-center">
                            
                            </div>
                        </div>
                        <div class="col-9">
                            
                            <span>Jupriadi</span><br>
                            <small class="text-secondary">NOC At Rinjani Citra Solusi</small>
                        </div>
                    </div>
                  </div>
                  <div class="card-body text-primary">
                    <h5 class="card-title">Primary card title</h5>
                    <p class="card-text" style="">
                        Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consectetur adipisicing elit. At accusamus minus molestias autem? Eaque aut optio sit dolore esse veniam vel, expedita dicta neque corporis et dolor dolorum ut dolores. Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo asperiores maiores iste, eum sequi, dolores, neque voluptatem deserunt voluptatibus aliquam ullam possimus officia ut consequatur exercitationem nesciunt. Impedit, est officiis! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Optio et rem officia debitis obcaecati vero saepe eum veritatis deleniti, perspiciatis, dolores officiis sed ab. Hic porro atque officiis inventore mollitia?
                    
                    </p>
                  </div>
                </div>
                
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ;?>