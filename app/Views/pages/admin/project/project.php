<?= $this->extend("/layout/templates/admintemplate") ?>

<?= $this->section('content') ;?>
<script>
    $("#project").addClass("active");
</script>
<div class="px-4">
    <div class="row">
        <div class="col-7 position-relative">
            <form action="" method="get">
                <input placeholder="Kata Kunci Pencarian" type="text" class="rounded-pill px-3 py-2 shadow-sm form-control" name="q">
                <span class="position-absolute top-0 end-0 mt-2 mr-4">
                    <i class="bi bi-search"></i>
                </span>
            </form>
        </div>
        <div class="col-5 justify-content-right text-right">
            <a href="/admin/project/formproject" class="btn btn-primary end-0"><i data-feather="plus-circle"></i> Tambah</a>
        </div>
    </div>
    <div class="row">
        <?php if($projects == null) : ?>
            <div class="text-center mt-5 py-5 bg-white">
                <img src="/assets/img/empty.gif" style="width:150px" alt="">
                <h3>Tidak Ada Project untuk Ditampilkan</h3>
            </div>
        <?php endif; ?>
        <?php foreach($projects as $pro): ?>
        <div class="col-md-3 mt-3 mt-md-5">
            <div class="card h-100">
                <div class="thumbnail-box">
                    <img src="/assets/img/project_thumbnail/<?= $pro['thumbnailProject'] ?>" class="h-100" alt="Project Thumbnail">
                </div>
                <div class="card-body">
                    <div class="fs-1"><?= $pro['judulProject'] ?></div>
                    <div class="my-2">
                        <small><i class="bi bi-person-fill"></i> <?= $pro['username'] ?></small>
                    </div>
                    <small class="position-absolute bottom-0 mb-2 end-0 mr-3">
                        <a data-id="<?= $pro['idProject'] ?>" href="#confirmhapus" data-toggle="modal" class="hapusproject btn bg-warning text-black btn-sm"> <i data-feather="trash"></i> </a>
                        <a href="/admin/project/formproject/<?= $pro['idProject'] ?>" class="btn btn-primary btn-sm"> <i data-feather="edit"></i> </a>
                    </small>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
    <div class="py-5">
        <?= $pager->links() ?>
    </div>
</div>



<script>
$(".hapusproject").click(function(){
    const id = $(this).data('id');
    $('#hapus').attr('href','controlproject/hapus/'+id);
    // alert(id);
})

</script>
<?= $this->endSection() ;?>
