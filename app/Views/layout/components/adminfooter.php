

</div>
            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-left">
                        <p>2020 &copy; Voler</p>
                    </div>
                    <div class="float-right">
                        <p>Crafted with <span class='text-danger'><i data-feather="heart"></i></span> by <a href="http://ahmadsaugi.com">Ahmad Saugi</a></p>
                    </div>
                </div>
            </footer>
        </div>
    </div>

        <!-- Modal -->
    <div class="alert modal fade" id="deleted" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-body py-4">
                    <div class="text-center text-success" ><i style="font-size:50pt;" class="bi bi-emoji-wink-fill"></i></div>
                    <p class="text-center"> <?= session()->getFlashData('deleted') ?></p>
                </div>
            </div>
        </div>
    </div>
        <!-- Modal -->
    <div class="alert modal fade" id="saved" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-body py-4">
                    <div class="text-center text-primary" ><i style="font-size:50pt;" class="bi bi-emoji-sunglasses-fill"></i></div>
                    <p class="text-center"> <?= session()->getFlashData('saved') ?></p>
                </div>
            </div>
        </div>
    </div>

    <?php if(session()->get('deleted')) : ?>
        <script type="text/javascript">
            $(window).on('load', function() {
                $('#deleted').modal('show');
            });
        </script>
    <?php endif ?>
    <?php if(session()->get('saved')) : ?>
        <script type="text/javascript">
            $(window).on('load', function() {
                $('#saved').modal('show');
            });
        </script>
    <?php endif ?>

    <script>
        setTimeout(function() {
            $(".alert").modal('hide')
        }, 2500);

    </script>


    <script src="/assets/admin/assets/js/feather-icons/feather.min.js"></script>
    <script src="/assets/admin/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="/assets/admin/assets/js/app.js"></script>
    
    <script src="/assets/admin/assets/vendors/chartjs/Chart.min.js"></script>
    <script src="/assets/admin/assets/vendors/apexcharts/apexcharts.min.js"></script>
    <script src="/assets/admin/assets/js/pages/dashboard.js"></script>

    <script src="/assets/admin/assets/vendors/quill/quill.min.js"></script>
    <script src="/assets/admin/assets/js/pages/form-editor.js"></script>

    <script src="/assets/admin/assets/js/main.js"></script>
    <script>
        function preview(){
                const logo = document.querySelector('#logo');
                const label = document.querySelector('.logoLabel');
                const prev = document.querySelector('.img-preview');

                label.textContent = logo.files[0].name;

                const filePhoto = new FileReader(); 
                filePhoto.readAsDataURL(logo.files[0]);

                filePhoto.onload = function(e){
                    prev.src = e.target.result;
                }
      };
    </script>
</body>
</html>
