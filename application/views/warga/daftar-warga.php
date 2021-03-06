<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Daftar Warga</h3>

                        <div class="card-tools">
                            <form action="<?= base_url('Warga/index') ?>" method="POST">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <input type="text" name="keyword" class="form-control float-right" placeholder="Search">

                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th class="text-capitalize">No.</th>
                                    <th class="text-capitalize">nik</th>
                                    <th class="text-capitalize">nama</th>
                                    <th class="text-capitalize">Alamat</th>
                                    <th class="text-capitalize">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 0;
                                foreach ($warga as $w) : $i++ ?>

                                    <tr>
                                        <td><?= $i ?></td>
                                        <td><?= $w['nik'] ?></td>
                                        <td><?= $w['nama'] ?></td>
                                        <td><?= $w['alamat'] ?></td>
                                        <td>
                                            <a href="#">
                                                <i class="fas fa-edit fa-fw"></i>
                                            </a>
                                            <a href="#">
                                                <i class="fas fa-trash fa-fw"></i>
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer clearfix">
                        <ul class="pagination pagination-sm m-0 float-right">
                            <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                        </ul>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
        <!-- /.row -->
    </div>
</section>