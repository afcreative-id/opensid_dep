<div id="post-slider">
  <ul class="slider">
    <?php foreach ($slider_gambar['gambar'] as $gambar) : ?>
      <?php $file_gambar = $slider_gambar['lokasi'] . 'sedang_' . $gambar['gambar']; ?>
      <?php if (is_file($file_gambar)) : ?>
        <li>
          <div class="thumbnail"><img src="<?php echo base_url() . $slider_gambar['lokasi'] . 'sedang_' . $gambar['gambar']; ?>" alt="<?= $gambar['judul']; ?>" title="<?= $gambar['judul']; ?>"></div>
          <div class="title">
            <a href="<?= site_url('artikel/' . buat_slug($gambar)); ?>" title="<?= $gambar['judul']; ?>">
              <h2><?= $gambar['judul']; ?></h2>
            </a>
            <div class="meta"><i class='fa'>&#xf133;</i><?= $gambar['hri'] . '/' . $gambar['bln'] . '/' . $gambar['thn']; ?></div>
          </div>
        </li>
      <?php endif; ?>
    <?php endforeach; ?>
  </ul>
</div>
<script>
  $(document).ready(function() {
    $("#post-slider .slider").lightSlider({
      item: 1,
      slideMove: 1,
      speed: 400,
      auto: true,
      loop: true,
      slideEndAnimation: true,
      pause: 2000,
      controls: false,
    });

  });
</script>