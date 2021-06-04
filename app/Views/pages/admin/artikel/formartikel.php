<?= $this->extend("/layout/templates/admintemplate") ?>

<?= $this->section('content') ;?>
<form action="/admin/controlartikel/simpanartikel/<?= $edit>0 ? $artikel['idArtikel'] : '' ;?>" method="post" enctype="multipart/form-data">
    <section class="section">
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body p-0">
                        <label for="logo" class="form-label logoLabel d-none"></label>
                        <div class="fileUpload">
                            <input class="upload" style="height:100%" type="file" onchange="preview()" id="logo" name="thumbnail">
                            <img src="/assets/img/artikel_thumbnail/<?= $edit>0 ? $artikel['thumbnailArtikel'] : 'artikel.jpg' ;?>" class="img-preview img-fluid" style="width:100%;min-height:100%" alt="Logo">
                            <span></span>
                        </div>
                        <div class="p-3 mt-3">
                            <label for=""><strong>Kategory</strong></label><br>
                            <small>contoh Penulisan Kategori: <br> #program #micro_controller</small>
                            <textarea name="kategoryArtikel" id="" class="form-control"><?= $edit>0 ? $artikel['kategoryArtikel'] : old('kategoryArtikel') ;?></textarea>
                        </div>
                    </div>
                </div>                
            </div>
            <div class="col-md-9">

                <div class="card">
                    <div class="card-body"> 
                        <h4 class="card-title">Judul Artikel</h4>
                        <input  value="<?= $edit>0 ? $artikel['judulArtikel'] : old('judulArtikel') ;?>" name="judulArtikel" type="text" class="p-2 form-control">
                        <h4 class="card-title mt-4">Isi Artikel</h4>
                        <div >
                            <textarea class="ckeditor"  id="ckeditor" name="isiArtikel" rows="5"><?= $edit>0 ? $artikel['isiArtikel'] : old('isiArtikel') ;?></textarea>
                        </div>
                        <div class="form-group mt-3">
                            <label for="penulis">Penulis Artikel</label>
                            <?php if(user()->status == "admin") : ?>
                                <select class="form-select" name="penulisArtikel" id="">
                                    <option value="-">-- Pilih Penulis</option>
                                    <?php foreach($members as $mentor): ?>
                                        <option value="<?= $mentor['id'] ?>"><?= $mentor['username'] ?></option>
                                    <?php endforeach ?>
                                </select>
                            <?php else: ?>
                                <input type="text" value="<?= user()->username." - ".user()->email ?>" class="form-control rounded-pill" readonly>
                                <input name="penulisArtikel" value="<?= user()->id ?>" type="hidden">
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="px-4 pb-4">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="/admin/artikel" class="ml-4"> Batal</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</form>
<script>
    // CKEDITOR.replace('isiProject');
</script>
<?= $this->endSection() ;?>