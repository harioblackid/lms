<div class="row">
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
            <div class="inner">
                <h3><?= $this->db->get_where('siswa', ['status' => 1])->num_rows() ?></h3>

                <p>JUMLAH SISWA</p>
            </div>
            <div class="icon">
                <i class="fas fa-users"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
            <div class="inner">
                <h3><?= $this->db->get('guru')->num_rows() ?></h3>
                <p>DATA GURU</p>
            </div>
            <div class="icon">
                <i class="fas fa-user"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-warning">
            <div class="inner">
                <h3><?= $this->db->get('kelas')->num_rows() ?></h3>

                <p>JUMLAH ROMBEL</p>
            </div>
            <div class="icon">
                <i class="fas fa-home    "></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-danger">
            <div class="inner">
                <h3><?= $this->db->get('jurusan')->num_rows() ?></h3>

                <p>DATA JURUSAN</p>
            </div>
            <div class="icon">
                <i class="fas fa-toolbox    "></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header ui-sortable-handle" style="cursor: move;">
                <h3 class="card-title">
                    <i class="fas fa-chart-pie mr-1"></i>
                    Pengumuman
                </h3>
                <div class="card-tools">

                </div>
            </div><!-- /.card-header -->
            <div class="card-body">
                <!-- Timelime example  -->
                <div class="row">
                    <div class="col-md-12">
                        <!-- The time line -->
                        <div class="timeline">
                            <!-- timeline time label -->
                            <!-- <div class="time-label">
                                <span class="bg-red">10 Feb. 2014</span>
                            </div> -->
                            <!-- /.timeline-label -->
                            <!-- timeline item -->
                            <?php foreach ($info as $info) : ?>
                                <div>
                                    <i class="fas fa-envelope bg-blue"></i>
                                    <div class="timeline-item">
                                        <span class="time"><i class="fas fa-clock"></i> <?= $info['date'] ?></span>
                                        <h3 class="timeline-header"><a href="#"><?= $info['judul'] ?></a></h3>

                                        <div class="timeline-body">
                                            <?= $info['text'] ?>
                                        </div>
                                        <!-- <div class="timeline-footer">
                                            <a class="btn btn-primary btn-sm">Read more</a>
                                            <a class="btn btn-danger btn-sm">Delete</a>
                                        </div> -->
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <!-- /.col -->
                </div>
            </div>
            <!-- /.timeline -->
        </div><!-- /.card-body -->
    </div>
</div>
</div>