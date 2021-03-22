<div class='widget agenda'>
  <h2><span>Agenda</span></h2>
  <div class='tab-title-agenda'>
    <a href='#tab-content-agenda-1' title='Agenda hari ini'>Hari Ini</a>
    <a href='#tab-content-agenda-2' title='Agenda yang akan datang'>Segera</a>
    <a href='#tab-content-agenda-3' title='Agenda sudah berlalu'>Berlalu</a>
    <div class="clear"></div>
  </div>
  <div class='widget-content'>
    <div class='tab-content-agenda' id='tab-content-agenda-1'>
      <?php if (count($hari_ini) > 0) : ?>
        <div class="list">
          <?php foreach ($hari_ini as $data) : ?>
            <div class="item">
              <div class="title">
                <a href="<?= site_url("artikel/" . buat_slug($data)) ?>" title="Buka untuk melihat isi agenda"><?= $data['judul']; ?></a>
              </div>
              <div class="footer">
                <ul class="meta">
                  <li><i class='fa'>&#xf017;</i>Waktu: <span title="Tanggal dan Waktu"><?= tgl_indo2($data['tgl_agenda']); ?></span></li>
                  <li><i class='fa'>&#xf007;</i>Koordinator: <span title="Koordinator Kegiatan"><?= $data['koordinator_kegiatan']; ?></span></li>
                  <li><i class='fa'>&#xf041;</i>Lokasi: <span title="Lokasi Kegiatan"><?= $data['lokasi_kegiatan']; ?></span></li>
                </ul>
              </div>
              <div class="separator"></div>
            </div>
          <?php endforeach; ?>
        </div>
      <?php else : ?>
        <div class="empty">
          <i class="fa">&#xf273;</i>
        </div>
      <?php endif; ?>
    </div>

    <div class='tab-content-agenda' id='tab-content-agenda-2'>
      <?php if (count($yad) > 0) : ?>
        <div class="list">
          <?php foreach ($yad as $data) : ?>
            <div class="item">
              <div class="title">
                <a href="<?= site_url("artikel/" . buat_slug($data)) ?>" title="Buka untuk melihat isi agenda"><?= $data['judul']; ?></a>
              </div>
              <div class="footer">
                <ul class="meta">
                  <li><i class='fa'>&#xf017;</i>Waktu: <span title="Tanggal dan Waktu"><?= tgl_indo2($data['tgl_agenda']); ?></span></li>
                  <li><i class='fa'>&#xf007;</i>Koordinator: <span title="Koordinator Kegiatan"><?= $data['koordinator_kegiatan']; ?></span></li>
                  <li><i class='fa'>&#xf041;</i>Lokasi: <span title="Lokasi Kegiatan"><?= $data['lokasi_kegiatan']; ?></span></li>
                </ul>
              </div>
              <div class="separator"></div>
            </div>
          <?php endforeach; ?>
        </div>
      <?php else : ?>
        <div class="empty">
          <i class="fa">&#xf273;</i>
        </div>
      <?php endif; ?>
    </div>

    <div class='tab-content-agenda' id='tab-content-agenda-3'>
      <?php if (count($lama) > 0) : ?>
        <div class="list">
          <?php foreach ($lama as $data) : ?>
            <div class="item">
              <div class="title">
                <a href="<?= site_url("artikel/" . buat_slug($data)) ?>" title="Buka untuk melihat isi agenda"><?= $data['judul']; ?></a>
              </div>
              <div class="footer">
                <ul class="meta">
                  <li><i class='fa'>&#xf017;</i>Waktu: <span title="Tanggal dan Waktu"><?= tgl_indo2($data['tgl_agenda']); ?></span></li>
                  <li><i class='fa'>&#xf007;</i>Koordinator: <span title="Koordinator Kegiatan"><?= $data['koordinator_kegiatan']; ?></span></li>
                  <li><i class='fa'>&#xf041;</i>Lokasi: <span title="Lokasi Kegiatan"><?= $data['lokasi_kegiatan']; ?></span></li>
                </ul>
              </div>
              <div class="separator"></div>
            </div>
          <?php endforeach; ?>
        </div>
      <?php else : ?>
        <div class="empty">
          <i class="fa">&#xf273;</i>
        </div>
      <?php endif; ?>
    </div>
  </div>
</div>