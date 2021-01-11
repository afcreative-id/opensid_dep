<?php if ($w_gal != null) : ?>
  <section id="gallery">
    <div class="wrapper">
      <?php $this->load->view($folder_themes . '/widgets/galeri.php'); ?>
    </div>
  </section>
<?php endif; ?>
<section id="map-social" <?php if ($w_gal == null) echo 'style="background:#FFF;"' ?>>
  <div class="wrapper">
    <?php $this->load->view($folder_themes . '/widgets/peta_wilayah_desa.php'); ?>
    <?php $this->load->view($folder_themes . '/widgets/media_sosial.php'); ?>
    <div class="clear"></div>
  </div>
</section>