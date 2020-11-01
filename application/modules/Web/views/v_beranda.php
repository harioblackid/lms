 <!-- ======= Hero Section ======= -->
 <section id="hero" class="d-flex justify-content-center align-items-center">
    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
      <h1>Learning Management System,<br>Belajar kapanpun dan dimanapun</h1>
      <h2>Sistem terbaru kami untuk menghadapi situasi yang mengharuskan pelaksanaan Pembelajaran Jarak Jauh (PJJ)</h2>
      <a href="<?= base_url('Login'); ?>" class="btn-get-started">Coba Sekarang</a>
    </div>
  </section><!-- End Hero -->

<main id="main">

<!-- ======= Trainers Section ======= -->
<section id="trainers" class="trainers">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Tim Pengembang</h2>
      <p>Profile Team Rule Breaker</p>
    </div>

    <div class="row" data-aos="zoom-in" data-aos-delay="100">
      <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
        <div class="member">
          <img src="<?= base_url('assets/web'); ?>/img/rey.jpg" class="img-fluid" alt="">
          <div class="member-content">
            <h4>Reyfasha Danendra</h4>
            <span>Web Development</span>
            <p>
              NISN. 001293301211 <br>
              XII RPL 1
            </p>
            <div class="social">
              <a href=""><i class="icofont-facebook"></i></a>
              <a href=""><i class="icofont-instagram"></i></a>
              <a href=""><i class="icofont-linkedin"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
        <div class="member">
          <img src="<?= base_url('assets/web'); ?>/img/susi.jpg" class="img-fluid" alt="">
          <div class="member-content">
            <h4>Susilawati</h4>
            <span>Documentator</span>
            <p>
              NISN. 000234881912 <br>
              XI RPL 2
            </p>
            <div class="social">
              <a href=""><i class="icofont-facebook"></i></a>
              <a href=""><i class="icofont-instagram"></i></a>
              <a href=""><i class="icofont-linkedin"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
        <div class="member">
          <img src="<?= base_url('assets/web'); ?>/img/rohaeni.jpg" class="img-fluid" alt="">
          <div class="member-content">
            <h4>Rohaeni</h4>
            <span>System Analyst</span>
            <p>
              NISN. 000395777182 <br>
              XI RPL Industri
            </p>
            <div class="social">
              <a href=""><i class="icofont-facebook"></i></a>
              <a href=""><i class="icofont-instagram"></i></a>
              <a href=""><i class="icofont-linkedin"></i></a>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>
</section><!-- End Trainers Section -->

<!-- ======= About Section ======= -->
<section id="about" class="about">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Tentang</h2>
      <p><?= setting()->aplikasi; ?></p>
    </div>

    <div class="row">
      <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
        <img src="<?= base_url('assets/web'); ?>/img/about.jpg" class="img-fluid" alt="">
      </div>
      <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
        <h3>Dengan Learning Management System, memungkinkan para siswa dan guru tetap berkegiatan Belajar dan Mengajar</h3>
        <p class="font-italic">
          LMS Laskar merupakan sebuah solusi yang dikembangkan oleh para siswa/i dari SMK PGRI Telagasari untuk memecahkan masalah KBM pada masa New Normal. Salah satu keunggulannya :
        </p>
        <ul>
          <li><i class="icofont-check-circled"></i> Tidak perlu datang ke sekolah</li>
          <li><i class="icofont-check-circled"></i> Belajar bisa dimanapun </li>
          <li><i class="icofont-check-circled"></i> Monitoring kehadiran siswa dapat terpantau</li>
          <li><i class="icofont-check-circled"></i> Administrasi sekolah lebih mudah</li>
        </ul>
        <p>
          Belajar lancar, siswa pun tenang.
        </p>
        <a href="<?= base_url('Web/tentang'); ?>" class="learn-more-btn">Selengkapnya</a>
      </div>
    </div>

  </div>
</section><!-- End About Section -->

<!-- ======= Counts Section ======= -->
<section id="counts" class="counts section-bg">
  <div class="container">

    <div class="row counters">

      <div class="col-lg-4 col-6 text-center">
        <span data-toggle="counter-up"><?= count($siswa); ?></span>
        <p>Siswa</p>
      </div>

      <div class="col-lg-4 col-6 text-center">
        <span data-toggle="counter-up"><?= count($materi); ?></span>
        <p>Materi</p>
      </div>

      <div class="col-lg-4 col-6 text-center">
        <span data-toggle="counter-up"><?= count($guru); ?></span>
        <p>Guru</p>
      </div>

    </div>

  </div>
</section><!-- End Counts Section -->

<!-- ======= Why Us Section ======= -->
<section id="why-us" class="why-us">
  <div class="container" data-aos="fade-up">

    <div class="row">
      <div class="col-lg-4 d-flex align-items-stretch">
        <div class="content">
          <h3>Kenapa harus <?= setting()->nama_sekolah; ?> ?</h3>
          <p>
            Karena kami merupakan salah satu SMK Swasta terfavorit di Keluarga PGRI se-Kabupaten Karawang. Pelayananan terhadap siswa merupakan prioritas utama kami sejak pertama kali di dirikan pada tahun 2000. 
          </p>
          <div class="text-center">
            <a href="<?= base_url('Web/profile'); ?>" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
          </div>
        </div>
      </div>
      <div class="col-lg-8 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
        <div class="icon-boxes d-flex flex-column justify-content-center">
          <div class="row">
            <div class="col-xl-4 d-flex align-items-stretch">
              <div class="icon-box mt-4 mt-xl-0">
                <i class="bx bx-network-chart "></i>
                <h4>Jaringan Mitra Industri</h4>
                <p>Sudah banyak Perusahaan yang bekerja sama dengan <?= setting()->nama_sekolah; ?> </p>
              </div>
            </div>
            <div class="col-xl-4 d-flex align-items-stretch">
              <div class="icon-box mt-4 mt-xl-0">
                <i class="bx bx-buildings"></i>
                <h4>Infrastruktur yang memadai</h4>
                <p>Fasilitas gedung, sarana praktik, serta akses Internet yang dapat menunjang Pembelajaran</p>
              </div>
            </div>
            <div class="col-xl-4 d-flex align-items-stretch">
              <div class="icon-box mt-4 mt-xl-0">
                <i class="bx bxs-graduation"></i>
                <h4>Profesional</h4>
                <p>Pendidik dan Tenaga Pendidik yang ahli pada bidang nya menjadikan SDM sangat berkualitas</p>
              </div>
            </div>
          </div>
        </div><!-- End .content-->
      </div>
    </div>

  </div>
</section><!-- End Why Us Section -->

</main><!-- End #main -->