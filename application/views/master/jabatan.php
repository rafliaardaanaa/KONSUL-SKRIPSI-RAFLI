                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <section class="content-header">
                        <!-- NOTIF FLASH DISINI-->
                        <?php if ($this->session->flashdata()) : ?>
                            <!-- right column -->
                            <div class="col-md-12">
                                <div class="alert alert-success alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                    <h5><i class="icon fas fa-check"></i> Notifkasi!</h5>
                                    Data berhasil <?= $this->session->flashdata('flashdata'); ?>
                                </div>
                            </div>
                            <!--/.col (right) -->
                        <?php endif; ?>
                    </section>
                    <!-- Page Heading -->
                    <div class="card mb-4">
                        <div class="card-header">
                            <?= $judul; ?>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <a href="<?= base_url('master/tambah_jabatan') ?>"><button type="button" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Data</button></a>
                            </div>
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Urutan</th>
                                        <th>Nama Jabatan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($masterjabatan as $jb) : ?>
                                        <tr>
                                            <td><?= $jb['urutan']; ?></td>
                                            <td><?= $jb['nama_jabatan']; ?></td>
                                            <td>
                                                <a href="<?= base_url(); ?>master/detail_jabatan/<?= $jb['id_jabatan']; ?>"><button type="button" class="btn btn-success btn-sm"><i class="fa fa-info"></i> Detail</button></a>
                                                <a href="<?= base_url(); ?>master/ubah_jabatan/<?= $jb['id_jabatan']; ?>"><button type="button" class="btn btn-primary btn-sm"><i class=" fa fa-edit"></i> Ubah</button></a>
                                                <a href="<?= base_url(); ?>master/hapus_jabatan/<?= $jb['id_jabatan']; ?>"><button type="button" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin ingin menghapus data ini');"><i class="fa fa-trash"></i> Hapus</button></a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Urutan</th>
                                        <th>Nama Jabatan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->