<div class='widget gallery'>
  <h2 class="center"><a href="<?= site_url('first/gallery'); ?>"><span>Galeri Foto</span></a></h2>
  <div class='widget-content'>
    <ul class="slider">
      <?php foreach ($w_gal as $data) : ?>
        <?php if (is_file(LOKASI_GALERI . "sedang_" . $data['gambar'])) : ?>
          <li>
            <a href='<?= site_url("first/sub_gallery/$data[id]"); ?>' title="<?= "Album : $data[nama]" ?>">
              <img src="<?= AmbilGaleri($data['gambar'], 'kecil') ?>" alt="<?= "Album : $data[nama]" ?>">
            </a>
          </li>
        <?php endif; ?>
      <?php endforeach; ?>
    </ul>
  </div>
</div>
<script>
  $(document).ready(function() {
    $(".gallery .widget-content .slider").lightSlider({
      item: 4,
      autoWidth: true,
      slideMove: 1,
      slideMargin: 1,
      speed: 400,
      auto: true,
      loop: true,
      slideEndAnimation: true,
      pause: 2000,
      controls: false,
      pager: false,
      responsive: [{
        breakpoint: 1170,
        settings: {
          item: 3,
        }
      }, {
        breakpoint: 840,
        settings: {
          item: 2,
        }
      }, {
        breakpoint: 600,
        settings: {
          item: 1,
        }
      }],
    });

  });
</script>