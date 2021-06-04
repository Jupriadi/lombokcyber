<?= $this->extend("/layout/templates/admintemplate") ?>

<?= $this->section('content') ;?>
<script>
    $("#artikel").addClass("active");
</script>

<div class="px-4">
    <div class="px-2 py-2 text-right">
        <div class="row">
            <div class="col-6 position-relative">
                <form action="" method="get">
                    <input placeholder="Kata Kunci Pencarian" type="text" class="rounded-pill px-3 py-2 shadow-sm form-control" name="q">
                    <span class="position-absolute top-0 end-0 mt-2 mr-4">
                        <i class="bi bi-search"></i>
                    </span>
                </form>
            </div>
            <div class="col-6">
                <a href="/admin/artikel/formartikel" data-toggle="modal" class="btn btn-primary"><i class="bi bi-plus-circle-fill"></i> Tambah Artikel</a>
            </div>
        </div>
    </div>

    <div class="row">
        <?php if($artikel==null): ?>
            <div class="text-center mt-5 py-5 bg-white">
                <img src="/assets/img/empty.gif" style="width:150px" alt="">
                <h3>Tidak Ada <strong>Artikel</strong> untuk Ditampilkan</h3>
            </div>
        <?php endif ?>
        <?php foreach($artikel as $art): ?>
        <div class="col-md-3 mt-3 mt-md-5">
            <div class="card h-100">
                <div class="thumbnail-box">
                    <img src="/assets/img/artikel_thumbnail/<?= $art['thumbnailArtikel'] ?>" class="h-100" alt="Artikel Thumbnail">
                </div>
                <div class="card-body">
                    <div class="c"><?= $art['judulArtikel'] ?></div>

                    <div class="my-2">
                        <small><i class="bi bi-person-fill"></i> <?= $art['username'] ?></small>
                    </div>
                    <small class="position-absolute bottom-0 mb-2 end-0 mr-3">
                        <a data-id="<?= $art['idArtikel'] ?>" href="#confirmhapus" data-toggle="modal" class="hapusartikel btn bg-warning text-black btn-sm"> <i data-feather="trash"></i> </a>
                        <a href="/admin/artikel/formartikel/<?= $art['idArtikel'] ?>" class="btn btn-primary btn-sm"> <i data-feather="edit"></i> </a>
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
$(".hapusartikel").click(function(){
    const id = $(this).data('id');
    $('#hapus').attr('href','controlartikel/hapus/'+id);
    $('.text').html('Apakah Anda Yakin Akan Menghapus Artikel.?')
})

</script>



<?= $this->endSection() ;?>
