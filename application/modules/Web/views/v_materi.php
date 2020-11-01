<main id="main" data-aos="fade-in">

<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs">
  <div class="container">
    <h2>Materi</h2>
    <p> Daftar materi aktif pada seluruh Mata Pelajaran </p>
  </div>
</div><!-- End Breadcrumbs -->

<!-- ======= Courses Section ======= -->
<section id="courses" class="courses">
  <div class="container" data-aos="fade-up">

    <div class="row" data-aos="zoom-in" data-aos-delay="100">

      <?php $materi = $this->db->get('materi')->result();
        foreach ($materi as $materi) :
            $guru = $this->db->get_where('guru', ['id_guru'=>$materi->id_guru])->row();
            $mapel = $this->db->get_where('mapel', ['id_mapel'=>$materi->id_mapel])->row();
      ?>

      <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
        <div class="course-item">
          <img src="<?= base_url('assets/web/img/course-1.jpg'); ?>" class="img-fluid" alt="...">
          <div class="course-content">
            <div class="d-flex justify-content-between align-items-center mb-3">
              <h4><?= $mapel->nama_mapel; ?> </h4>
              
            </div>

            <h3><?= $materi->materi; ?></h3>
            <p>Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae dolores dolorem tempore.</p>
            <div class="trainer d-flex justify-content-between align-items-center">
              <div class="trainer-profile d-flex align-items-center">
                <img src="<?= base_url('assets/img/profil/').$guru->foto; ?>" class="img-fluid" alt="">
                <span><?= $guru->nama; ?></span>
              </div>
              
            </div>
          </div>
        </div>
      </div> <!-- End Course Item-->
      <?php endforeach; ?>

    </div>

  </div>
</section><!-- End Courses Section -->

</main><!-- End #main -->