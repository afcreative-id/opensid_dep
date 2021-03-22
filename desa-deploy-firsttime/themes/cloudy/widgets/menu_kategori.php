<div class='widget category'>
  <h2><span>Kategori Artikel</span></h2>
  <div class='widget-content'>
    <ul>
      <?php foreach ($menu_kiri as $data) { ?>
        <li>
          <a href="<?= site_url() . "artikel/kategori/" . $data['slug'] ?>">
            <?= $data['kategori']; ?>
            <?php if (count($data['submenu']) > 0) echo "<span class='caret'></span>"; ?>
          </a>
          <?php if (count($data['submenu']) > 0) : ?>
            <ul class="submenu">
              <?php foreach ($data['submenu'] as $submenu) : ?>
                <li><a href="<?= site_url() . "artikel/kategori/" . $submenu['slug'] ?>"><?= $submenu['kategori'] ?></a></li>
              <?php endforeach; ?>
            </ul>
          <?php endif; ?>
        </li>
      <?php } ?>
    </ul>
  </div>
</div>