<?= $this->extend("/layout/templates/admintemplate") ?>

<?= $this->section('content') ;?>
<script>
    $("#project").addClass("active");
</script>
<div class="px-4">
    <div class="row">
        <div class="col-7">
            <form action="" method="get" class="position-relative">
                <div class="input-group">
                    <span class="input-group-text" id="basic-addon1">
                        <i data-feather="search"></i>
                    </span>
                    <input type="text" class="form-control p-2" placeholder="Kata Kunci Pencarian" aria-label="Username" aria-describedby="basic-addon1">
                </div>
            </form>
        </div>
        <div class="col-5 justify-content-right text-right">
            <a href="/admin/project/formproject" class="btn btn-primary end-0"><i data-feather="plus-circle"></i> Tambah</a>
        </div>
    </div>
    <div class="row">
        <?php foreach($projects as $pro): ?>
        <div class="col-md-3 mt-3 mt-md-5">
            <div class="card h-100">
                <div class="thumbnail-box">
                    <img src="/assets/img/project_thumbnail/<?= $pro['thumbnailProject'] ?>" class="h-100" alt="Project Thumbnail">
                </div>
                <div class="card-body">
                    <div class="c"><?= $pro['judulProject'] ?></div>
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
