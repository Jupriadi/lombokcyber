<?= $this->extend("/layout/templates/admintemplate") ?>

<?= $this->section('content') ;?>
<script>
    $("#akun").addClass("active");
    $("#akun .submenu").addClass("active");

</script>
<div class="container">

    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h4 class="card-title">Tabel Akun</h4>
            <div class="d-flex ">
                <i data-feather="download"></i>
            </div>
        </div>
        <div class="card-body px-0 pb-0">
            <div class="table-responsive">
                <table class='table mb-0' id="table1">
                    <thead>
                        <tr>
                            <th>Nama Pengguna</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($akun as $ak): ?>
                            <?php $status=$ak['active'] ?>
                            <tr>
                                <td><?= $ak['username'] ?></td>
                                <td><?= $ak['email'] ?></td>
                                <td><?= $ak['status'] ?></td>
                                <td> 
                                    <?php if($status==1): ?>
                                        <span class="badge bg-success">Active</span>
                                    <?php else: ?>
                                        <span class="badge bg-danger">Inactive</span>
                                    <?php endif; ?>
                                </td>
                            </tr>

                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php $this->endSection(); ?>
