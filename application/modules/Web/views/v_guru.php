<main id="main" data-aos="fade-in">

<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs">
  <div class="container">
	<h2>Guru</h2>
	<p>Daftar Tenaga Pendidik unggulan <?= setting()->nama_sekolah; ?></p>
  </div>
</div><!-- End Breadcrumbs -->

<!-- ======= Trainers Section ======= -->
<section id="trainers" class="trainers">
  <div class="container" data-aos="fade-up">

	<div class="row" data-aos="zoom-in" data-aos-delay="100">
  <?php $guru = $this->db->get_where('guru', ['status' => 1])->result_array();
    foreach ($guru as $guru) : 
    $mapel = $this->db->get_where('mapel', ['id_mapel' => $guru['mapel']])->row();
    ?>
	  <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
      <div class="member">
        <?php if(empty($guru['foto'])) : ?>
          <img src="<?= base_url('assets/img/no-image.png') ?>" class="img-fluid" alt="">
        <?php else : ?>
          <img src="<?= base_url('assets/img/profil/') . $guru['foto'] ?>" class="img-fluid" alt="">
        <?php endif; ?>
        
        <div class="member-content">
        <h4><?= $guru['nama']; ?></h4>
        <span>
          <?php
            if(empty($mapel->nama_mapel)){
              echo "Mata Pelajaran Belum ditentukan";
            }
            else {
              echo $mapel->nama_mapel;
            }
          ?>
        </span>
        <p>
          <?= $guru['alamat']; ?>
        </p>
        <div class="social">
          <a href=""><i class="icofont-twitter"></i></a>
          <a href=""><i class="icofont-facebook"></i></a>
          <a href=""><i class="icofont-instagram"></i></a>
          <a href=""><i class="icofont-linkedin"></i></a>
        </div>
        </div>
      </div>
	  </div>
    <?php endforeach; ?>
	</div>

  </div>
</section><!-- End Trainers Section -->

</main><!-- End #main -->