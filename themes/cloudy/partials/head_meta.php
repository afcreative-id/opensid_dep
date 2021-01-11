<?php if (isset($_GET['cari'])) : ?>
  <title>Pencarian | <?= $this->setting->website_title . ' ' . ucwords($this->setting->sebutan_desa) . ' ' . ($desa['nama_desa']) . ' ' . ucwords($this->setting->sebutan_kabupaten_singkat) . ' ' . ucwords($desa['nama_kabupaten']); ?></title>
<?php else : ?>
  <title>
    <?php if ($title) : ?>
      <?= $title; ?>
    <?php else : ?>
      <?= ' ' . $this->setting->website_title
        . ' ' . ucwords($this->setting->sebutan_desa)
        . (($desa['nama_desa']) ? ' ' . $desa['nama_desa'] : '')
        . get_dynamic_title_page_from_path()
      ?>
    <?php endif ?>
  </title>
<?php endif; ?>

<meta charset="UTF-8" />
<meta content="IE=Edge" http-equiv="X-UA-Compatible" />
<meta content="width=device-width,initial-scale=1" name="viewport" />
<meta content="website" property="og:type" />
<meta content="<?= ucwords($this->setting->sebutan_desa) . ' ' . ($desa['nama_desa']); ?>" property="og:site_name" />
<meta content="OpenSID,opensid,sid,SID,SID CRI,SID-CRI,Sistem Informasi Desa,<?= ucwords($this->setting->sebutan_desa) . ' ' . ucwords($desa['nama_desa']); ?>,<?= ucwords($this->setting->sebutan_kecamatan) . ' ' . ucwords($desa['nama_kecamatan']); ?>,<?= ucwords($this->setting->sebutan_kabupaten) . ' ' . ucwords($desa['nama_kabupaten']); ?>" name="keywords" />
<meta content="<?= ucwords($this->setting->sebutan_desa) . ' ' . ($desa['nama_desa']) . ' ' . ucwords($this->setting->sebutan_kabupaten_singkat) . ' ' . ucwords($desa['nama_kabupaten']); ?>" property="og:title" />
<meta content="<?= $desa["alamat_kantor"] . ', ' . ucwords($this->setting->sebutan_desa) . ' ' . ucwords($desa['nama_desa']) . ', ' . ucwords($this->setting->sebutan_kecamatan) . ' ' . ucwords($desa['nama_kecamatan']) . ', ' . ucwords($this->setting->sebutan_kabupaten) . ' ' . ucwords($desa['nama_kabupaten']); ?>" name="description" />
<meta content="<?= $desa["alamat_kantor"] . ', ' . ucwords($this->setting->sebutan_desa) . ' ' . ucwords($desa['nama_desa']) . ', ' . ucwords($this->setting->sebutan_kecamatan) . ' ' . ucwords($desa['nama_kecamatan']) . ', ' . ucwords($this->setting->sebutan_kabupaten) . ' ' . ucwords($desa['nama_kabupaten']); ?>" property="og:description" />

<?php if ($single_artikel['owner']) : ?>
  <meta content="<?= $single_artikel['owner']; ?>" property="article:author" />
<?php else : ?>
  <meta content="<?= ucwords($this->setting->sebutan_desa) . ' ' . ($desa['nama_desa']) . ' ' . ucwords($this->setting->sebutan_kabupaten_singkat) . ' ' . ucwords($desa['nama_kabupaten']); ?>" property="article:author" />
<?php endif; ?>

<meta content="Website Resmi <?= ucwords($this->setting->sebutan_desa) . ' ' . ($desa['nama_desa']) . ' ' . ucwords($this->setting->sebutan_kabupaten_singkat) . ' ' . ucwords($desa['nama_kabupaten']); ?>" property="article:publisher" />
<meta content="id_ID" property="og:locale" />
<meta content="Indonesia" name="geo.placename" />
<meta content="id" name="geo.country" />
<meta content="#222" name="msapplication-navbutton-color" />
<meta content="#222" name="apple-mobile-web-app-status-bar-style" />
<meta content="#222" name="theme-color" />
<?php if (is_file(LOKASI_LOGO_DESA . "favicon.ico")) : ?>
  <link href="<?= base_url(LOKASI_LOGO_DESA . 'favicon.ico'); ?>" rel="icon" type="image/x-icon" />
<?php else : ?>
  <link href="<?= base_url('favicon.ico'); ?>" rel="icon" type="image/x-icon" />
<?php endif; ?>