<div class='widget selfservice'>
  <?php if (!isset($_SESSION['mandiri']) or $_SESSION['mandiri'] <> 1) : ?>
    <?php if ($_SESSION['mandiri_wait'] == 1) : ?>
      <h2><span>Layanan Mandiri</span></h2>
      <div class='widget-content'>
        <small>Silakan datang atau hubungi operator <?php echo $this->setting->sebutan_desa ?> untuk mendapatkan kode PIN anda.</small>
        <h4>Gagal 3 kali, silakan coba kembali dalam <?php echo waktu_ind((time() - $_SESSION['mandiri_timeout']) * (-1)); ?> detik lagi</h4>
        <div class="note">Login Gagal. Username atau Password yang anda masukkan salah!</div>
      </div>
    <?php else : ?>
      <h2><span>Layanan Mandiri</span></h2>
      <div class='widget-content'>
        <small>Silakan datang atau hubungi operator <?php echo $this->setting->sebutan_desa ?> untuk mendapatkan kode PIN anda.</small>
        <form class="login" action="<?php echo site_url('auth') ?>" method="post">
          <div class="nik">
            <input name="nik" type="text" placeholder="NIK" style="margin-left:0px" value="" required>
          </div>
          <div class="pin">
            <input name="pin" type="password" placeholder="PIN" style="margin-left:0px" value="" required>
          </div>
          <button type="submit" id="but" style="margin-left:0px">Masuk</button>
          <?php if ($_SESSION['mandiri_try'] and isset($_SESSION['mandiri']) and $_SESSION['mandiri'] == -1) { ?>
            <div class="note">Kesempatan mencoba <?php echo ($_SESSION['mandiri_try'] - 1); ?> kali lagi.</div>
          <?php } ?>
          <?php if (isset($_SESSION['mandiri']) and $_SESSION['mandiri'] == -1) { ?>
            <div class="note">Login Gagal. Username atau Password yang Anda masukkan salah!</div>
          <?php } ?>
        </form>
      </div>
    <?php endif; ?>
  <?php else : ?>
    <?php if (isset($_SESSION['lg']) and $_SESSION['lg'] == 1) : ?>
      <h2><span>Layanan Mandiri</span></h2>
      <div class='widget-content'>
        <h3>Masukkan PIN Baru</h3>
        <small>Untuk keamanan silahkan ubah kode PIN Anda.</small>
        <form class="resetpin" action="<?php echo site_url('ganti') ?>" method="post">
          <div class="pin1">
            <input name="pin1" type="password" placeholder="PIN" value="" style="margin-left:0px">
          </div>
          <div class="pin2">
            <input name="pin2" type="password" placeholder="Ulangi PIN" value="" style="margin-left:0px">
          </div>
          <button type="submit" id="but" style="margin-left:0px">Ganti</button>
        </form>
        <?php if ($flash_message) : ?>
          <div class="notif"><?php echo $flash_message ?></div>
          <script type="text/javascript">
            $('document').ready(function() {
              $('.notif').delay(4000).fadeOut();
            });
          </script>
        <?php endif; ?>
        <div class="note">Silahkan coba login kembali setelah PIN baru disimpan.</div>
      </div>
    <?php elseif (isset($_SESSION['lg']) and $_SESSION['lg'] == 2) : ?>
      <h2><span>Layanan Mandiri</span></h2>
      <div class='widget-content'>
        <small>PIN Baru berhasil Disimpan!</small>
        <div class="note">Silahkan muat ulang halaman ini.</div>
      </div>
      <?php unset($_SESSION['lg']); ?>
    <?php else : ?>
      <h2><span>Layanan Mandiri</span></h2>
      <div class='widget-content'>
        <h3 class="name"><?php echo $_SESSION['nama']; ?></h3>
        <table class="uid-info">
          <tr>
            <td>NIK</td>
            <td>:</td>
            <td><?php echo $_SESSION['nik']; ?></td>
          </tr>
          <tr>
            <td>No. KK</td>
            <td>:</td>
            <td><?php echo $_SESSION['no_kk']; ?></td>
          </tr>
        </table>
        <div class="optionmenu">
          <a href="<?php echo site_url(); ?>mandiri_web/mandiri/1/1" class="">Profil</a>
          <a href="<?php echo site_url(); ?>mandiri_web/mandiri/1/2" class="">Layanan</a>
          <a href="<?php echo site_url(); ?>mandiri_web/mandiri/1/3" class="">Lapor</a>
          <a href="<?php echo site_url(); ?>mandiri_web/mandiri/1/4" class="">Bantuan</a>
          <a href="<?php echo site_url(); ?>logout" class="">Keluar</a>
        </div>
      </div>
    <?php endif; ?>
  <?php endif; ?>
</div>