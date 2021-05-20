<?= $this->include('/layout/components/userheader'); ?>
<?= $this->include('/layout/components/usertopbar'); ?>

    <?= $this->renderSection('konten') ?>

<!-- footer -->
<footer id="foot" style="z-index:1" class="position-relative p-5 bg-dark text-light">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <img src="/assets/svg/mountaincolor.png " class="w-50" alt="" srcset="">
            </div>
            <div class="col-md-3">
                <h3>Contact Us</h3>
                <div class="garis bg-light mb-4"></div>
                <div class="my-3">
                    <i class="bi bi-whatsapp"></i> Whatsapp <br>
                    <strong>+62 823 3951 3607</strong>
                </div>
                <div  class="my-3">
                    <i class="bi bi-facebook"></i> Facebook <br>
                    <strong>Rinjani Code</strong>
                </div>
                <div  class="my-3">
                    <i class="bi bi-twitter"></i> Twitter <br>
                    <strong>@rinjani.code</strong>
                </div>
                <div  class="my-3">
                    <i class="bi bi-instagram"></i> Instagram <br>
                    <strong>@rinjani_code</strong>
                </div>
            </div>
            <div class="col-md-3">
                <h3>LInk Alternate</h3>
                <div class="garis bg-light"></div>
                <div  class="my-3"><strong>Project</strong></div>
                <div  class="my-3"><strong>About Us</strong></div>
                <div  class="my-3"><strong>Freelancer</strong></div>
                <div  class="my-3"><strong>Freelancer</strong></div>
            </div>
        </div>
    </div>
</footer>
<?= $this->include('/layout/components/userfooter'); ?>