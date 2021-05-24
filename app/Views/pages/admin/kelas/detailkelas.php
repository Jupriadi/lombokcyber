<?= $this->extend("/layout/templates/admintemplate") ?>

<?= $this->section('content') ;?>
<script>
    $("#kelas").addClass("active");
</script>

<div class="mb-3">
    <button data-toggle="modal" data-target="#tambahmateri" class="btn btn-primary"><i class="bi bi-plus-circle-fill"></i> Tambah Materi</button>
    <button data-toggle="modal" data-target="#confirmhapus" class="hapuskelas btn btn-danger" data-id="<?= $kelas['idKelas'] ?>"><i class="bi bi-trash2-fill"></i> Hapus Kelas</button>
</div>
<div class="row">
    <div class="col-md-7 accordion" id="accordionExample" >
        
        <?php if ($materi == null): ?>
            <div class="text-center">
                <img src="/assets/img/empty.gif" style="width:150px" alt="">
                <h3>Tidak Ada Materi untuk Ditampilkan</h3>
            </div>
        <?php endif; ?>

        <?php foreach($materi as $mat): ?>
            <div class="bg-white shadow-sm p-3 border-bottom rounded position-relative"  >
                <div class="row">
                    <div class="col-10" data-toggle="collapse" data-target="#coll-phpp<?= $mat['idMateri'] ?>" >
                        <strong><?= $mat['judulMateri'] ?></strong>
                    </div>
                    <div class="col-2">
                        <span class="position-absolute mr-3 end-0">
                            <a href="#confirmhapus" data-id="<?= $mat['idMateri'] ?>" data-toggle="modal" class="hapusmateri"><i class="bi bi-trash2-fill"></i></a>
                            <a href="#tambahmodul"><i class="bi bi-pencil-square"></i></a>

                            <a href="#tambahmodul" data-toggle="modal" data-judul="<?= $mat['judulMateri'] ?>" data-id="<?= $mat['idMateri'] ?>" class="tambahmodul">
                                <i class="bi bi-plus-circle"></i>
                                
                            </a>

                        </span>
                    </div>
                </div>
                <div id="coll-phpp<?= $mat['idMateri'] ?>" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div >
                        Some placeholder content for the first accordion panel. This panel is shown by default, thanks to the <code>.show</code> class.
                    </div>
                </div>

            </div>
        <?php endforeach ?>
    </div>

    <div class="col-md-4">
        <div class="card mt-4 mt-md-0">
            <div class="card-header">
                <div class="thumbnail-box">
                    <img src="/assets/img/kelas_thumbnail/<?= $kelas['thumbnailKelas'] ?>" alt="" srcset="">
                </div>
            </div>
            <div class="card-body">

                <h6>Biaya</h6>
                <h3 class="text-warning">
                    <?php if($kelas['biaya']<1): ?>
                        Free
                    <?php else : ?>
                        Rp. <?= number_format($kelas['biaya']) ?>
                    <?php endif; ?>
                </h3>
                <hr>
                <div class="row">
                    <div class="col-3">
                        <div style="width:60px;height:60px" class="bg-secondary rounded-circle overflow-hidden">
                            <img class="w-100" src="/assets/img/avatar/<?= $kelas['avatar'] ?>" alt="">
                        </div>
                    </div>
                    <div class="col">
                        <strong>
                            <?= $kelas['username'] ?>
                        </strong><br>
                        <i>
                            <?=
                                $kelas['posisi']." at ".$kelas['komunitas'] 
                            ?>
                        </i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Modal tambah materi-->
<div class="modal fade" id="tambahmateri" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h3 class="py-4">
                     Materi Baru
                </h3>
                <form action="/admin/controlmateri/tambahmateri" method="post">
                    <input type="hidden" name="idKelas" value="<?= $kelas['idKelas'] ?>">
                    <div class="form-group">
                        <label for="">Judul Materi</label>
                        <input type="text" name="judulMateri" class="form-control">
                    </div>
                    <div class="form-group">
                        <button type="submit"  class="btn btn-primary"><i class="bi bi-save"></i> Simpan</button>
                        <a href="" class="ml-3" data-dismiss="modal">Batal </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- tambah modul  -->
<div class="modal fade" id="tambahmodul" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <form action="/admin/controlmateri/simpanmodul" method="post">
                    <input type="hidden" name="idMateri" id="idMateri">
                    <div class="container-fluid">
                        <h3 class="text-center">Modul Baru</h3>

                        <h6 class="text-center" id="judulmateri"></h6>
                        <hr>

                    </div>
                    <div class="form-group">
                        <label for="">Judul Modul</label>
                        <input type="text" name="judulModul" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="">Isi Modul</label>
                        <textarea name="isiModul" id=""  class="ckeditor"></textarea>
                    </div>
                    
                    <div class="form-group">
                        <label for="">Link Embeded Video</label>
                        <input  name="video"  type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <button type="submit"class="btn btn-success"> <i class="bi bi-save"></i> Simpan</button>
                        <a href=""  class="ml-3">Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    $('#exampleModal').on('show.bs.modal', event => {
        var button = $(event.relatedTarget);
        var modal = $(this);
        // Use above variables to manipulate the DOM
        
    });

$(".tambahmodul").click(function(){
    const id = $(this).data('id');
    const judul = $(this).data('judul');
    $("#judulmateri").html(judul)
    $("#idMateri").val(id);
});

$(".hapuskelas").click(function(){
    const id = $(this).data('id');
    $('#hapus').attr('href','controlkelas/hapus/'+id);
    $('.text').html('Apakah Anda Yaking Akan Menghapus Kelas Bersama Semua Materi.?')
    // alert(id);
})

$(".hapusmateri").click(function(){
    const id = $(this).data('id');
    $('#hapus').attr('href','controlmateri/hapus/'+id);
    
    $('.text').html('<strong>Semua Modul Dalam Materi Ini Akan Ikut Terhapus</strong><br/>Apakah Anda Yakin Akan Menghapus Materi.?')
    // alert(id);
})

</script>
<?= $this->endSection() ;?>
