
<!-- Modal daftar-->
<div class="modal fade" id="daftar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body p-0 position-relative">
        <a style="z-index:1" href="" class="  position-absolute top-0 end-0 mt-3 me-4 close" data-bs-dismiss="modal"> <i class="bi bi-x-circle-fill"></i></a>
        <div class="row">
            <div class="col-md-6 bg-soft-danger p-0 ">
                <div class="register-svg position-relative hg-100">
                    <svg>
                        <img
                            src="/assets/svg/daftar.svg"
                            alt="triangle with all three sides equal"
                            class="position-absolute top-50 start-50 translate-middle"
                            width="80%"
                        />
                    </svg>    
                </div>
            </div>
            <div class="col-md-6 p-5">
                <h4 class="text-center">RINJANI <strong>DEV</strong></h4>
                <h6 class="text-center">Registration</strong></h6>
                <hr>
                <!-- <div class="garis bg-warning mx-auto"></div> -->
                <?= view('Myth\Auth\Views\_message_block') ?>

                <form action="<?= route_to('register') ?>" method="post">
                    <?= csrf_field() ?>
                    <div class="form-group my-3">
                        <label class="ms-2" for="username">Username</label>
                        <input type="text" name="username" class="form-control rounded-pill  <?php if(session('errors.username')) : ?>is-invalid<?php endif ?>" value="<?= old('username') ?>">
                    </div>
                    <div class="form-group my-3">
                        <label class="ms-2" for="email">Email</label>
                        <input type="text" name="email" class="form-control rounded-pill <?php if(session('errors.email')) : ?>is-invalid<?php endif ?>"  placeholder="ex:rinjani@dev.id" value="<?= old('email') ?>">
                        <small id="emailHelp" class="form-text text-muted"><?=lang('Auth.weNeverShare')?></small>
                    </div>
                    <div class="form-group my-3">
                        <label class="ms-2" for="password">Password</label>
                        <input type="password" name="password" class="form-control rounded-pill  <?php if(session('errors.password')) : ?>is-invalid<?php endif ?>"  autocomplete="off">
                    </div>
                    <div class="form-group my-3">
                        <label class="ms-2" for="pass_confirm">Ulangi Password</label>
                        <input type="password"  name="pass_confirm"  class="form-control rounded-pill  <?php if(session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <button class="btn bg-success text-light form-control" >Daftar</button>
                       
                        <div class="text-center mt-3">
                            <a href="#login" class="tblogin">Login</a>
                        </div>
                    </div>
                </form>
            </div>
            
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="login" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body p-0 position-relative">
        <a style="z-index:1" href="" class="  position-absolute top-0 end-0 mt-3 me-4 close" data-bs-dismiss="modal"> <i class="bi bi-x-circle-fill"></i></a>
        <div class="row">
            <div class="col-md-6 bg-soft-danger p-0 ">
                <div class="register-svg position-relative hg-100">
                    <svg>
                        <img
                            src="/assets/svg/daftar.svg"
                            alt="triangle with all three sides equal"
                            class="position-absolute top-50 start-50 translate-middle"
                            width="80%"
                        />
                    </svg>    
                </div>
            </div>
            <div class="col-md-6 p-5">
                <h4 class="text-center">RINJANI <strong>DEV</strong></h4>
                <h6 class="text-center">Login</strong></h6>
                <hr>
                <!-- <div class="garis bg-warning mx-auto"></div> -->
                <?= view('Myth\Auth\Views\_message_block') ?>

                <form action="<?= route_to('register') ?>" method="post">
                    <?= csrf_field() ?>
                    <div class="form-group my-3">
                        <label class="ms-2" for="email">Email / Username</label>
                        <input type="text" name="email" class="form-control rounded-pill <?php if(session('errors.email')) : ?>is-invalid<?php endif ?>"  placeholder="ex:rinjani@dev.id" value="<?= old('email') ?>">
                        <small id="emailHelp" class="form-text text-muted"><?=lang('Auth.weNeverShare')?></small>
                    </div>
                    <div class="form-group my-3">
                        <label class="ms-2" for="password">Password</label>
                        <input type="password" name="password" class="form-control rounded-pill  <?php if(session('errors.password')) : ?>is-invalid<?php endif ?>"  autocomplete="off">
                    </div>
                    <div class="form-group">
                        <button class="btn bg-success text-light form-control" >Login</button>
                       
                        <div class="text-center mt-3">
                            <a href="">Daftar</a>
                        </div>
                    </div>
                </form>
            </div>
            
        </div>
      </div>
    </div>
  </div>
</div>
<script>

    $(".tblogin").click(function(){
        $('#daftar').modal('hide');
        $('#login').modal('show');
    })
</script>
<?php if(session()->get('errors')) : ?>
    <script type="text/javascript">
        $(window).on('load', function() {
            $('#daftar').modal('show');
        });
    </script>
<?php endif ?>