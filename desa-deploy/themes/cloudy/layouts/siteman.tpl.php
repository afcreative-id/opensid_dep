<!DOCTYPE html>
<html>

<head>
  <title>
    <?= $this->setting->login_title
      . ' ' . ucwords($this->setting->sebutan_desa)
      . (($header['nama_desa']) ? ' ' . $header['nama_desa'] : '')
      . get_dynamic_title_page_from_path();
    ?>
  </title>
  <meta charset="UTF-8" />
  <meta content="IE=Edge" http-equiv="X-UA-Compatible" />
  <meta content="width=device-width,initial-scale=1" name="viewport" />
  <meta content="website" property="og:type" />
  <meta content="<?= ucwords($this->setting->sebutan_desa) . ' ' . ($header['nama_desa']); ?>" property="og:site_name" />
  <meta content="OpenSID,opensid,sid,SID,SID CRI,SID-CRI,Sistem Informasi Desa,<?= ucwords($this->setting->sebutan_desa) . ' ' . ucwords($header['nama_desa']); ?>,<?= ucwords($this->setting->sebutan_kecamatan) . ' ' . ucwords($header['nama_kecamatan']); ?>,<?= ucwords($this->setting->sebutan_kabupaten) . ' ' . ucwords($header['nama_kabupaten']); ?>" name="keywords" />
  <meta content="<?= ucwords($this->setting->sebutan_desa) . ' ' . ($header['nama_desa']) . ' ' . ucwords($this->setting->sebutan_kabupaten_singkat) . ' ' . ucwords($header['nama_kabupaten']); ?>" property="og:title" />
  <meta content="<?= $header["alamat_kantor"] . ', ' . ucwords($this->setting->sebutan_desa) . ' ' . ucwords($header['nama_desa']) . ', ' . ucwords($this->setting->sebutan_kecamatan) . ' ' . ucwords($header['nama_kecamatan']) . ', ' . ucwords($this->setting->sebutan_kabupaten) . ' ' . ucwords($header['nama_kabupaten']); ?>" name="description" />
  <meta content="<?= $header["alamat_kantor"] . ', ' . ucwords($this->setting->sebutan_desa) . ' ' . ucwords($header['nama_desa']) . ', ' . ucwords($this->setting->sebutan_kecamatan) . ' ' . ucwords($header['nama_kecamatan']) . ', ' . ucwords($this->setting->sebutan_kabupaten) . ' ' . ucwords($header['nama_kabupaten']); ?>" property="og:description" />
  <meta content="<?= ucwords($this->setting->sebutan_desa) . ' ' . ($header['nama_desa']) . ' ' . ucwords($this->setting->sebutan_kabupaten_singkat) . ' ' . ucwords($header['nama_kabupaten']); ?>" property="article:author" />
  <meta content="<?= $this->setting->login_title . ' | ' . ucwords($this->setting->sebutan_desa) . ' ' . ($header['nama_desa']) . ' ' . ucwords($this->setting->sebutan_kabupaten_singkat) . ' ' . ucwords($header['nama_kabupaten']); ?>" property="article:publisher" />
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
  <script src="<?= base_url($this->theme_folder . '/' . $this->theme . '/js/jquery/3.4.1/jquery.min.js'); ?>"></script>
  <script src="<?= base_url($this->theme_folder . '/' . $this->theme . '/js/jquery-migrate/3.1.0/jquery-migrate.min.js'); ?>"></script>
  <link href="<?= base_url($this->theme_folder . '/' . $this->theme . '/css/reset.css'); ?>" rel="stylesheet" />
  <link href="<?= base_url($this->theme_folder . '/' . $this->theme . '/css/main.css'); ?>" rel="stylesheet" />
  <link href="<?= base_url($this->theme_folder . '/' . $this->theme . '/css/responsive.css'); ?>" rel="stylesheet" />
  <?php $this->load->view('head_tags_front') ?>
</head>

<body class="siteman" itemscope="itemscope" itemtype="https://schema.org/WebPage">
  <div id='siteman' itemprop='mainContentOfPage' itemscope='itemscope' itemtype='https://schema.org/WebPageElement' role='main'>
    <div id="form-head">
      <a class="form-logo" href="<?= site_url('first'); ?>"><img src="<?= gambar_desa($header['logo']); ?>" alt="<?= $header['nama_desa'] ?>" /></a>
      <div class="form-title">
        <h1><span><?= $this->setting->login_title; ?></span><span><?= ucwords($this->setting->sebutan_desa) ?> <?= $header['nama_desa'] ?></span></h1>
        <h3><span><?= $header['alamat_kantor'] . ', Kodepos ' . $header['kode_pos']; ?></span><span><?= ucwords($this->setting->sebutan_kecamatan_singkat) . ' ' . ucwords($header['nama_kecamatan']) . ' - ' . ucwords($this->setting->sebutan_kabupaten_singkat) . ' ' . ucwords($header['nama_kabupaten']); ?></span></h3>
      </div>
    </div>
    <form id="form-body" action="<?= site_url('siteman/auth') ?>" method="post">
      <?php if ($_SESSION['siteman_wait'] == 1) : ?>
        <div class="form-response">
          <span class="response-block">Gagal 3 kali, silakan coba lagi nanti dalam<br><?= waktu_ind((time() - $_SESSION['siteman_timeout']) * (-1)); ?> kedepan</span>
        </div>
      <?php else : ?>
        <div class="input-form">
          <i class="fa">&#xf007;</i>
          <input name="username" type="text" placeholder="Nama Pengguna" <?php if ($_SESSION['siteman_wait'] == 1) : ?> disabled="disabled" <?php endif; ?> value="" required />
          <div class="clear"></div>
        </div>
        <div class="input-form">
          <i class="fa">&#xf023;</i>
          <input name="password" type="password" placeholder="Kata Sandi" <?php if ($_SESSION['siteman_wait'] == 1) : ?>disabled="disabled" <?php endif; ?> value="" required />
          <div class="clear"></div>
        </div>
        <div class="btn-form">
          <button type="submit">Masuk</button>
        </div>
        <div class="form-response">
          <span class="response-warn">
            <?php if ($_SESSION['siteman'] == -1) : ?>
              Nama Pengguna atau Kata Sandi yang Anda masukkan salah.<br>
              <?php if ($_SESSION['siteman_try']) : ?>
                Kesempatan mencoba <?= ($_SESSION['siteman_try'] - 1); ?> kali lagi.</p>
              <?php endif; ?>
            <?php elseif ($_SESSION['siteman'] == -2) : ?>
              Tidak dapat koneksi internet untuk memproses masuk akses admin.
            <?php endif; ?>
          </span>
        </div>
      <?php endif; ?>
    </form>
    <div id="form-credit">
      <div class='credit-copy'>
        Copyright &copy; <script>
          document.write(now.getFullYear());
        </script> &middot; <a href='<?= site_url('first'); ?>'><?= ucwords($this->setting->sebutan_desa) . ' ' . ucwords($header['nama_desa']) . ' - ' . ucwords($this->setting->sebutan_kecamatan_singkat) . ' ' . ucwords($header['nama_kecamatan']) . ' - ' . ucwords($this->setting->sebutan_kabupaten_singkat) . ' ' . ucwords($header['nama_kabupaten']); ?></a>
      </div>
      <div class='credit-dev'>
        <span>Dikembangkan Dengan <a href="https://github.com/OpenSID/OpenSID" rel="nofollow" target="_blank" title="OpenSID <?= AmbilVersi(); ?>">OpenSID <?= AmbilVersi(); ?></a> - </span>
        <ul class="credit-link">
          <li><a id="foot-disclaimer" title="Pernyataan">Pernyataan</a></li>
        </ul>
      </div>
      <span>
    </div>
  </div>
  <div id='modal-disclaimer' class="modal">
    <div class='modal-content'>
      <a class='modal-close'><i class='fa'><i class='fa'>&#xf057;</i></i></a>
      <div class='modal-text'>
        <h3>Pernyataan</h3>
        <div class='description'>
          <p>Website Sistem Informasi ini dikembangkan dengan <a href="https://github.com/OpenSID/OpenSID" rel="nofollow" target="_blank" title="OpenSID">OpenSID</a> versi <?= AmbilVersi(); ?>. OpenSID adalah Sistem Informasi Desa (SID) yang dibuat terbuka sehingga dapat dikembangkan bersama-sama oleh komunitas peduli SID. <strong>Aplikasi Sistem Informasi Desa (SID)</strong> dibangun dan dikembangkan pada awalnya oleh <strong>COMBINE Resource Institution</strong> sejak tahun 2009. Pemegang hak cipta aslinya adalah <a href="http://lumbungkomunitas.net" rel="nofollow" target="_blank" title="Combine Resource Institution"></a><strong>Combine Resource Institution</strong></a>.</p>
          <p>Sistem ini dikelola dengan merujuk pada lisensi <a href="http://www.gnu.org/licenses/gpl.html" rel="nofollow" target="_blank" title="GNU General Public License Version 3">GNU General Public License Version 3</a>. Versi di Github ini dikembangkan oleh OpenSID sejak Mei 2016, dan bebas untuk dimanfaatkan dan dikembangkan oleh semua desa.</p>
        </div>
      </div>
      <div class='clear'></div>
    </div>
  </div>
  <script>
    //Modal : Disclaimer
    var modal = document.getElementById("modal-disclaimer");
    var btn = document.getElementById("foot-disclaimer");
    var span = document.getElementsByClassName("modal-close")[0];
    btn.onclick = function() {
      modal.style.display = "block";
    }
    span.onclick = function() {
      modal.style.display = "none";
    }
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
  </script>
</body>

</html>