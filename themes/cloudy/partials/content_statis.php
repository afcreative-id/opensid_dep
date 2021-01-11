<div id='post'>
  <div class="breadcrumbs" itemscope="itemscope" itemtype="https://schema.org/BreadcrumbList">
    <span itemprop="itemListElement" itemscope="itemscope" itemtype="https://schema.org/ListItem">
      <a href="<?= site_url('first'); ?>" itemprop="item" title="Beranda">
        <span itemprop="name">Beranda</span>
        <meta content="1" itemprop="position">
      </a>
    </span>
    <i class="fa">&#xf105;</i>
    <span><?= $heading; ?></span>
  </div>

  <article class="item" itemscope='itemscope' itemtype='https://schema.org/BlogPosting'>
    <div class="head">
      <h2><?= $heading; ?></h2>
    </div>
    <div class="body">
      <?php $slug = end(explode("/", $halaman_statis)); ?>
      <?php if ($slug == "informasi_publik") : ?>
        <?php $this->load->view($folder_themes . '/partials/content_statis_informasi_publik.php'); ?>
      <?php elseif ($slug == "peraturan_desa") : ?>
        <?php $this->load->view($folder_themes . '/partials/content_statis_peraturan_desa.php'); ?>
      <?php elseif ($slug == "peta") : ?>
        <?php $this->load->view($folder_themes . '/partials/content_statis_peta.php'); ?>
      <?php endif; ?>
    </div>
  </article>
</div>