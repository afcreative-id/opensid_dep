<div id='post'>
  <div class="breadcrumbs" itemscope="itemscope" itemtype="https://schema.org/BreadcrumbList">
    <span itemprop="itemListElement" itemscope="itemscope" itemtype="https://schema.org/ListItem">
      <a href="<?= site_url('first'); ?>" itemprop="item" title="Beranda">
        <span itemprop="name">Beranda</span>
        <meta content="1" itemprop="position">
      </a>
    </span>
    <i class="fa">&#xf105;</i>
    <span>Data <?= $heading; ?></span>
  </div>
  <article class="item" itemscope='itemscope' itemtype='https://schema.org/BlogPosting'>
    <div class="head">
      <h2>Data <?= $heading; ?></h2>
    </div>
    <div class="body">
      <?php
      if ($tipe == 2) :

      elseif ($tipe == 3) :
        $this->load->view(Web_Controller::fallback_default($this->theme, '/partials/content_stat_wilayah.php'));
      elseif ($tipe == 4) :
        $this->load->view($folder_themes . '/partials/content_stat_dpt.php');
      else :
        $this->load->view($folder_themes . '/partials/content_stat_penduduk_grafik_web.php');
        if (in_array($st, array('bantuan_keluarga', 'bantuan_penduduk'))) :
          if ($this->setting->daftar_penerima_bantuan) :
            $this->load->view($folder_themes . '/partials/content_stat_peserta_bantuan', array('lap' => $st));
          endif;
        endif;
      endif;
      ?>
    </div>
  </article>
</div>