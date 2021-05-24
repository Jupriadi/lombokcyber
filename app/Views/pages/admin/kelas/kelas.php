<?= $this->extend("/layout/templates/admintemplate") ?>

<?= $this->section('content') ;?>
<script>
    $("#kelas").addClass("active");
</script>

<div class="py-3">
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
                <a href="#formkelas" data-toggle="modal" class="btn btn-primary"><i class="bi bi-plus-circle-fill"></i> Tambah Kelas</a>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <?php if($kelas==null): ?>
            <div class="text-center mt-5 py-5 bg-white">
                <img src="/assets/img/empty.gif" style="width:150px" alt="">
                <h3>Tidak Ada Kelas untuk Ditampilkan</h3>
            </div>
        <?php endif ?>
        <?php 
            foreach($kelas as $kel): 
        ?>
        <div class="col-md-3 mt-3">
            <div style="height:90%" class="card border shd rounded rounded-3">
                <div class="thumbnail-box p-3 rounded-3">
                    <img src="/assets/img/kelas_thumbnail/<?= $kel['thumbnailKelas'] ?>"  alt="...">
                   
                </div>
                <div class="card-body">
                    <a href="/admin/kelas/<?= $kel['idKelas'] ?>" class="text-dark">
                        <div class="mb-3">
                            <?= $kel['namaKelas'] ?>
                        </div>
                    </a>
                    <div class="text-success">
                        <strong class="me-3">10 Modul</strong>
                        <span class="text-secondary">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star"></i>
                            <i class="bi bi-star"></i>
                        </span>
                        <div class="">
                            <small class="text-secondary">
                                <i class="bi bi-person-fill"></i>
                                <?= $kel['username'] ?>
                            </small> 
                        </div>
                    </div>
                </div>
                <div  class="pr-3 pb-2 text-right">
                    <a href="#formkelas" data-toggle="modal" class="editkelas p-1"  data-id="<?= $kel['idKelas'] ?>">
                        <i class="bi bi-pencil-square"></i>
                    </a>
                    <a href="#confirmhapus" class="hapus" data-id="<?= $kel['idKelas'] ?>" data-toggle="modal">
                        <i class="bi bi-trash"></i>
                    </a>
                </div>
            </div>
        </div>
        <?php 
            endforeach; 
        ?>
    </div>

    <div class="py-5">
        <?= $pager->links() ?>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="formkelas" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="py-3">
                    <h3 class="text-center">Form Kelas</h3>
                </div>
                <div class="container-fluid">
                    <form action="/admin/controlkelas/simpankelas" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-7">
                           <div class="form-group">
                               <label for="">Nama Kelas</label>
                               <input name="namaKelas" type="text" class="form-control">
                           </div>
                           <div class="form-group">
                               <label for="">Tingkatan Kelas</label>
                               <select class="form-select" name="levelKelas" id="">
                                   <option value="pemula">-- Pilih Tingkatan</option>
                                   <option value="beginer">beginer</option>
                                   <option value="advance">advance</option>
                                   <option value="expert">expert</option>
                               </select>
                           </div>
                           <div class="form-group">
                               <label for="">Tentang Kelas</label>
                               <textarea name="tentangKelas" rows="4" class="form-control"></textarea>
                           </div>
                           <div class="form-group">
                               <label for="">Mentor Kelas</label>
                               <?php if(user()->status == "admin") : ?>
                                    <select class="form-select" name="mentor" id="">
                                        <option value="-">-- Pilih Mentor</option>
                                        <?php foreach($members as $mentor): ?>
                                            <option value="<?= $mentor['id'] ?>"><?= $mentor['username'] ?></option>
                                        <?php endforeach ?>
                                    </select>
                               <?php else: ?>
                                    <input type="text" value="<?= user()->username." - ".user()->email ?>" class="form-control rounded-pill" readonly>
                                    <input name="mentor" value="<?= user()->id ?>" type="hidden">
                               <?php endif; ?>
                           </div>
                        </div>
                        <div class="col-md-5">
                            <div class="logo-box mx-auto" >
                                <label for="logo" class="form-label logoLabel d-none"></label>
                                <div class="fileUpload" width="80%;overflow:hidden;">
                                    <input class="upload" style="height:100%" type="file" onchange="preview()" id="logo" name="logo">
                                    <img src="/assets/img/kelas_thumbnail/kelas.jpg" class="img-thumbnail img-preview img-fluid" style="width:100%" alt="Logo">
                                    <span></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Biaya</label>
                                <input type="number" class="form-control" name="biaya" placeholder="Rp.300.000" id="">
                            </div>
                            <div class="mt-4">
                                <button class="btn btn-primary" type="submit" >Simpan</button>
                                <a href="" class="ml-3" data-dismiss="modal">Batal</a>
                            </div>
                        </div>
                   </div>
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
$(".hapus").click(function(){
    const id = $(this).data('id');
    $('#hapus').attr('href','controlkelas/hapus/'+id);
    $('.text').html('Apakah Anda Yaking Akan Menghapus Kelas Bersama Semua Materi.?')
    // alert(id);
})

$(".editkelas").click(function(){
    const id = $(this).data('id');
    alert(id);
})

</script>
<?= $this->endSection() ;?>
