<?php if ($headline) : ?>
  <div id="headline">
    <div class="wrapper-hl">
      <h3><a href="<?= site_url('first/artikel/' . $headline['thn'] . '/' . $headline['bln'] . '/' . $headline['hri'] . '/' . $headline['slug']); ?>" title="Baca <?= $headline['judul']; ?>"><?= $headline['judul']; ?></a></h3>
    </div>
  </div>
<?php endif; ?>