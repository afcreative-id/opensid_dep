<footer id='foot' itemscope='itemscope' itemtype='https://schema.org/WPFooter' role='contentinfo'>
  <div class='wrapper'>
    <div class='foot-widget' role='contentinfo'>
      <div class="widget statistic">
        <h2><span>Ringkasan Statistik</span></h2>
        <div class='widget-content'>
          <?php $this->load->view($folder_themes . '/widgets/statistik.php'); ?>
          <?php $this->load->view($folder_themes . '/widgets/statistik_pengunjung.php'); ?>
        </div>
      </div>
      <div class="widget links">
        <h2><span>Situs Terkait</span></h2>
        <div class='widget-content'>
          <ul>
            <li><a href="//www.cirebonkab.go.id" title="Pemerintah Kabupaten Cirebon">Pemerintah Kabupaten Cirebon</a></li>
            <li><a href="//diskominfo.cirebonkab.go.id" title="DISKOMINFO Kabupaten Cirebon">DISKOMINFO Kabupaten Cirebon</a></li>
          </ul>
        </div>
      </div>
      <?php
      if ($w_cos) {
        foreach ($w_cos as $data) {
          if ($data["jenis_widget"] == 1) {
            if ($data["isi"] == "peta_lokasi_kantor.php" && $data["enabled"] == 1) {
              include($this->theme_folder . '/' . $this->theme . '/widgets/' . trim($data['isi']));
            }
          }
        }
      }
      ?>
      <div class='clear'></div>
    </div>
    <div class='foot-credit' role='contentinfo'>
      <div class='credit-l'>
        Copyright &copy; <script>
          document.write(now.getFullYear());
        </script> &middot; <a href='<?= site_url('first'); ?>'><?= ucwords($this->setting->sebutan_desa) . ' ' . ucwords($desa['nama_desa']) . ' - ' . ucwords($this->setting->sebutan_kecamatan_singkat) . ' ' . ucwords($desa['nama_kecamatan']) . ' - ' . ucwords($this->setting->sebutan_kabupaten_singkat) . ' ' . ucwords($desa['nama_kabupaten']); ?></a>
      </div>
      <div class='credit-r'>
        <span>Dikembangkan Dengan <a href="https://github.com/OpenSID/OpenSID" rel="nofollow" target="_blank" title="OpenSID <?= AmbilVersi(); ?>">OpenSID <?= AmbilVersi(); ?></a> - </span>
        <ul class="credit-link">
          <li><a id="foot-disclaimer" title="Pernyataan">Pernyataan</a></li>
          <li><a id="foot-admin" href="<?= site_url('siteman'); ?>" title="Admin">Admin</a></li>
        </ul>
      </div>
      <div class='clear'></div>

    </div>
  </div>
</footer>