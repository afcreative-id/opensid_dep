<div class='widget archive'>
  <h2><span>Arsip Artikel</span></h2>
  <div class='tab-title-archive'>
    <a href='#tab-content-archive-terkini' title='Artikel Terbaru'>Terkini</a>
    <a href='#tab-content-archive-populer' title='Artikel Populer'>Populer</a>
    <a href='#tab-content-archive-acak' title='Artikel Acak'>Acak</a>
    <div class="clear"></div>
  </div>
  <div class='widget-content'>
    <?php foreach (array('terkini' => 'arsip_terkini', 'populer' => 'arsip_populer', 'acak' => 'arsip_acak') as $jenis => $jenis_arsip) : ?>
      <div class='tab-content-archive' id='tab-content-archive-<?= $jenis; ?>'>
        <?php foreach ($$jenis_arsip as $arsip) : ?>
          <div class="post-list">
            <div class="post-thumbnail">
              <?php if (is_file(LOKASI_FOTO_ARTIKEL . "kecil_$arsip[gambar]")) : ?>
                <a href="<?= site_url('artikel/' . buat_slug($arsip)) ?>" title="<?= $arsip['judul']; ?>" alt="<?= $arsip['judul']; ?>">
                  <img src="<?= base_url("desa/upload/artikel/kecil_$arsip[gambar]"); ?>" />
                </a>
              <?php else : ?>
                <a href="<?= site_url('artikel/' . buat_slug($arsip)) ?>" title="<?= $arsip['judul']; ?>" alt="<?= $arsip['judul']; ?>">
                  <img src="<?= base_url($this->theme_folder . '/' . $this->theme . '/images/thumbnail-unavailable.jpg'); ?>" />
                </a>
              <?php endif; ?>
            </div>
            <div class="post-info">
              <div class="info-date">
                <i class='fa'>&#xf133;</i><a href="<?= site_url('artikel/' . buat_slug($arsip)) ?>" title="<?= tgl_indo($arsip['tgl_upload']); ?>"><?= tgl_indo($arsip['tgl_upload']); ?></a>
              </div>
              <div class="info-title">
                <a href="<?= site_url('artikel/' . buat_slug($arsip)) ?>" title="<?= $arsip['judul']; ?>"><?= $arsip['judul']; ?></a>
              </div>
            </div>
            <div class="clear"></div>
          </div>
        <?php endforeach ?>
      </div>
    <?php endforeach; ?>
  </div>
</div>