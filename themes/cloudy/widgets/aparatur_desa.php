<script src="<?= base_url($this->theme_folder . '/' . $this->theme . '/js/jquery-cycle2/jquery.cycle2.min.js'); ?>" defer async></script>
<script src="<?= base_url($this->theme_folder . '/' . $this->theme . '/js/jquery-cycle2/jquery.cycle2.caption2.min.js'); ?>" defer async></script>
<script src="<?= base_url($this->theme_folder . '/' . $this->theme . '/js/jquery-cycle2/jquery.cycle2.carousel.min.js'); ?>" defer async></script>
<div class='widget apparatus'>
  <h2><span>Aparatur <?= ucwords($this->setting->sebutan_desa) ?></span></h2>
  <div class='widget-content'>
    <div id="staff" class="cycle-slideshow" data-cycle-pause-on-hover="true" data-cycle-fx="scrollHorz" data-cycle-timeout=3500 data-cycle-caption-plugin="caption2" data-cycle-overlay-fx-out="slideUp" data-cycle-overlay-fx-in="slideDown">
      <?php foreach ($aparatur_desa['daftar_perangkat'] as $data) : ?>
        <img class="photo" src="<?= $data['foto'] ?>" data-cycle-title="<div class='name'><?= $data['nama']; ?></div>" data-cycle-desc="<div class='position'><?= $data['jabatan']; ?></div>" title="<?= $data['nama'] . ' sebagai ' . $data['jabatan']; ?>">
      <?php endforeach; ?>

      <?php if ($this->web_widget_model->get_setting('aparatur_desa', 'overlay') == true) : ?>
        <div class="cycle-caption"></div>
        <div class="cycle-overlay"></div>
      <?php else : ?>
        <div class="cycle-caption"></div>
      <?php endif; ?>
    </div>
  </div>
</div>