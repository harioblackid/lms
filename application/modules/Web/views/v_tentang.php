<main id="main">

<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs" data-aos="fade-in">
  <div class="container">
    <h2>Tentang <?= setting()->aplikasi; ?></h2>
    <p>Inovasi dan kreasi untuk tetap terus belajar walaupun situasi yang tidak mendukung. </p>
  </div>
</div><!-- End Breadcrumbs -->


    <!-- ======= Cource Details Section ======= -->
    <section id="course-details" class="course-details">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-8">
            <img src="<?= base_url('assets/web/'); ?>/img/course-details4.jpg" class="img-fluid" alt="">
            <h3>Sebuah inovasi akan muncul disaat masalah melanda.</h3>
            <p>
              Kondisi pandemi saat ini yang sedang kita hadapi mewajibkan berjaga jarak, seperti kutipan pada laman covid19.go.id dengan statement Apa yang bisa Anda lakukan? “Utamanya, tetap di rumah dan hanya keluar bila memang benar-benar perlu”. Dengan demikian segala bentuk kegiatan yang bersifat kerumumnan tidak diperbolehkan, kebijakan tersebut sangat menghambat Kegiatan Belajar Mengajar.
            </p>
            <p>
            Pada era modern ini, seiring berjalannya waktu perkembangan teknologi informasi semakin pesat dan memberikan banyak kemudahan secara langsung berdampak pada kegiatan manusia. Dalam keadaan seperti ini, banyak kegiatan yang biasanya dilakukan secara normal harus dilakukan dengan cara yang berbeda agar tetap dapat dilaksanakan. Salah satunya, dalam bidang pendidikan agar tetap dapat melakukan Kegiatan Belajar-Mengajar di era New Normal yang harus dilakukan secara Online. <br>
            </p>
            
            <p>
              Saat ini, sudah banyak aplikasi E-Learning yang dapat diakses oleh siswa untuk melakukan kegiatan pembelajaran, salah satunya Google Classroom, Admodo, dan lain-lain. Namun, kekurangan pada aplikasi tersebut diatas tidak dapat memantau kehadiran siswa pada saat Kegiatan Belajar-Mengajar. 
            </p>
          </div>
          <div class="col-lg-4">
            <div class="section-title">
              <h2>Masalah tanpa LMS</h2>
            </div>
            <div class="course-info">
              <h5>Kehadiran siswa tidak terpantau</h5>
            </div>

            <div class="course-info">
              <h5>Administrasi Lebih Rumit</h5>
            </div>

            <div class="course-info">
              <h5>Kinerja Guru tidak terpantau</h5>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End Cource Details Section -->

    
    <!-- ======= Cource Details Tabs Section ======= -->
    <section id="cource-details-tabs" class="cource-details-tabs">
      
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Mengapa</h2>
          <p><?= setting()->aplikasi; ?></p>
        </div>
        <div class="row">
          <div class="col-lg-3">
          
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-toggle="tab" href="#tab-1">Up to date</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tab-2">Kurikulum 2013</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tab-3">Attendance Monitor</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tab-4">User Friendly</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-9 mt-4 mt-lg-0">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Dikembangkan dengan teknologi terbaru</h3>
                    <p class="font-italic">Learning Management System dikembangkan HTML 5, Bootstrap 4, PHP 7, jQuery 1.8</p>
                    <p>
                      Mengutamakan responsibility dan tampilan kenyamanan untuk pengguna sehingga dapat mudah digunakan. 
                      Pengembangan sistem dilengkapi berbagai plug-in JS salah satunya adalah SweetAlert dan ToastJS.
                      Peran Bootstrap 4 adalah untuk mempermudah Design Web yang responsif.
                    </p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="<?= base_url('assets/web/img/'); ?>up-to-date.png" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-2">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Alur Sistem disesuaikan dengan Struktur Kurikulum 2013</h3>
                    <p class="font-italic">Memungkinkan Administrasi sekolah dapat dijalankan sesuai aturan.</p>
                    <p>
                      Dengan disesuaikannya alur sistem <?= setting()->aplikasi; ?> dengan Administrasi sekolah akan mempermudah Kepala Sekolah untuk memantau seluruh kegiatan KBM. 
                    </p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="<?= base_url('assets/web/img/'); ?>kurikulum.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-3">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Monitoring Kehadiran Siswa</h3>
                    <p class="font-italic">
                      Laporan kehadiran dapat buat dengan <?= setting()->aplikasi; ?>
                    </p>
                    <p>
                      Setiap Siswa atau Guru yang tidak melaksanakan tugasnya dapat terpantau, baik harian maupun bulanan.
                    </p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="<?= base_url('assets/web/img/'); ?>report.png" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-4">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Bootstrap 4 dan jQuery</h3> 
                    <p class="font-italic"><?= setting()->aplikasi; ?> dapat di akses pada berbagai Platform</p>
                    <p>
                      Dengan tampilan yang responsif memudahkan pengguna untuk mengakses sistem pada Multiplatform, tidak harus menggunakan PC sehingga jangkauan pengguna dapat ditingkatkan.
                    </p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="<?= base_url('assets/web/img/'); ?>frontend.png" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-5">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Est eveniet ipsam sindera pad rone matrelat sando reda</h3>
                    <p class="font-italic">Omnis blanditiis saepe eos autem qui sunt debitis porro quia.</p>
                    <p>Exercitationem nostrum omnis. Ut reiciendis repudiandae minus. Omnis recusandae ut non quam ut quod eius qui. Ipsum quia odit vero atque qui quibusdam amet. Occaecati sed est sint aut vitae molestiae voluptate vel</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/course-details-tab-5.png" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Cource Details Tabs Section -->
</main><!-- End #main -->