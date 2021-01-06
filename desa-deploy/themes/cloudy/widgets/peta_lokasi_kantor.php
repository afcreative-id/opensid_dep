<div class='widget villinfo'>
  <h2><span>Info Desa</span></h2>
  <div class='widget-content'>
    <ul>
      <?php if ($desa['alamat_kantor'] != "") : ?>
        <li title="Alamat"><i class='fa'>&#xf279;</i><a href="https://www.google.com/maps/place/<?= $data_config['lat'] . "," . $data_config['lng']; ?>" target="_blank" title="Buka Peta Lengkap"><?= $desa['alamat_kantor'] . " - " . $desa['kode_pos']; ?> <span><?= ucwords($this->setting->sebutan_kecamatan_singkat . " " . $desa['nama_kecamatan']) . ", " . ucwords($this->setting->sebutan_kabupaten_singkat . " " . $desa['nama_kabupaten']); ?></span></li>
      <?php endif; ?>
      <?php if ($desa['telepon'] != "") : ?>
        <li title="Nomor Telepon"><i class='fa'>&#xf098;</i><a href="tel:<?= $desa['telepon']; ?>" target="_blank" title="Nomor Telepon"><?= $desa['telepon']; ?></a></li>
      <?php endif; ?>
      <?php if ($desa['email_desa'] != "") : ?>
        <li title="Email"><i class='fa'>&#xf0e0;</i><a href="mailto:<?= $desa['email_desa']; ?>" target="_blank" title="Alamat Email"><?= $desa['email_desa']; ?></a></li>
      <?php endif; ?>
      <?php if ($desa['website'] != "") : ?>
        <li title="Website"><i class='fa'>&#xf0ac;</i><a href="<?= $desa['website']; ?>" rel="follow" target="_blank" title="Situs Website"><?= str_replace(array('https://', 'http://'), array('', ''), $desa['website']); ?></a></li>
      <?php endif; ?>
    </ul>
  </div>
</div>