<?= $this->extend("/layout/templates/admintemplate") ?>

<?= $this->section('content') ;?>
<form action="/admin/controlproject/simpanproject/<?= $edit>0 ? $project['idProject'] : '' ;?>" method="post" enctype="multipart/form-data">
    <section class="section">
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body p-0">
                        <label for="logo" class="form-label logoLabel d-none"></label>
                        <div class="fileUpload">
                            <input class="upload" style="height:100%" type="file" onchange="preview()" id="logo" name="thumbnail">
                            <img src="/assets/img/project_thumbnail/<?= $edit>0 ? $project['thumbnailProject'] : 'project.jpg' ;?>" class="img-preview img-fluid" style="width:100%;min-height:100%" alt="Logo">
                            <span></span>
                        </div>
                        <div class="p-3 mt-3">
                            <label for=""><strong>Kategory</strong></label><br>
                            <small>contoh Penulisan Kategori: <br> #program #micro_controller</small>
                            <textarea name="kategoryProject" id="" class="form-control"><?= $edit>0 ? $project['isiProject'] : old('kategoryProject') ;?></textarea>
                        </div>
                    </div>
                </div>                
            </div>
            <div class="col-md-9">

                <div class="card">
                    <div class="card-body"> 
                        <h4 class="card-title">Judul Project</h4>
                        <input  value="<?= $edit>0 ? $project['judulProject'] : old('judulProject') ;?>" name="judulProject" type="text" class="p-2 form-control">
                        <h4 class="card-title mt-4">Deskripsi Project</h4>
                        <div >
                            <textarea  id="ckeditor" name="isiProject" rows="5"><?= $edit>0 ? $project['isiProject'] : old('isiProject') ;?></textarea>
                        </div>
                    </div>
                    <div class="px-4 pb-4">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="/admin/project" class="ml-4"> Batal</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</form>
<script>
    CKEDITOR.replace('isiProject');
</script>
<?= $this->endSection() ;?>