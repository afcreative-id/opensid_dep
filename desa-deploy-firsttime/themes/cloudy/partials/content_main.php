<?php $this->load->view($folder_themes . '/widgets/slider.php'); ?>

<?php $title = (!empty($judul_kategori)) ? $judul_kategori : "Artikel Terkini"; ?>
<?php if (is_array($title)) : ?>
  <?php foreach ($title as $item) : ?>
    <?php $title = $item ?>
  <?php endforeach; ?>
<?php endif; ?>

<?php if (!empty($judul_kategori)) : ?>
  <h4 class="title-tag"><?= $title; ?></h4>
<?php endif; ?>

<div id='post'>
  <?php if ($artikel) : ?>
    <?php
    $total_artikel = 0;
    foreach ($artikel as $data) :
      $total_artikel++;
    ?>
      <article class="index" itemscope='itemscope' itemtype='https://schema.org/BlogPosting'>
        <div class='post-body' itemprop='articleBody'>
          <a class='post-thumbnail' href='<?= site_url('first/artikel/' . $data['thn'] . '/' . $data['bln'] . '/' . $data['hri'] . '/' . $data['slug']); ?>' title='<?= $data["judul"]; ?>'>
            <?php if ($data['gambar'] != '') : ?>
              <?php if (is_file(LOKASI_FOTO_ARTIKEL . "kecil_" . $data['gambar'])) : ?>
                <img src="<?= AmbilFotoArtikel($data['gambar'], 'kecil'); ?>" alt="<?= $data["judul"]; ?>" title="<?= $data["judul"]; ?>">
              <?php else : ?>
                <img src="<?= base_url($this->theme_folder . '/' . $this->theme . '/images/thumbnail-unavailable.jpg'); ?>" alt="<?= $data["judul"]; ?>" title="<?= $data["judul"]; ?>">
              <?php endif; ?>
            <?php else : ?>
              <img src="<?= base_url($this->theme_folder . '/' . $this->theme . '/images/thumbnail-blank.jpg'); ?>" alt="<?= $data["judul"]; ?>" title="<?= $data["judul"]; ?>">
            <?php endif; ?>
          </a>
          <div class='post-meta'>
            <span class='post-date' itemprop='dateModified'>
              <i class='fa'>&#xf133;</i><?= tgl_indo($data['tgl_upload']); ?>
            </span>
            <span class='post-publisher' itemprop='author'>
              <i class='fa'>&#xf2c0;</i><?= $data['owner']; ?>
            </span>
            <?php if ($data['kategori'] != '') : ?>
              <span class='post-category' itemprop='author'>
                <i class='fa'>&#xf02b;</i><?= $data['kategori']; ?>
              </span>
            <?php else : ?>
              <span class='post-category' itemprop='author'>
                <i class='fa'>&#xf02b;</i>Halaman
              </span>
            <?php endif; ?>
          </div>
          <h2 class='post-title' itemprop='name headline' title='<?= $data["judul"]; ?>'><a href='<?= site_url('first/artikel/' . $data['thn'] . '/' . $data['bln'] . '/' . $data['hri'] . '/' . $data['slug']); ?>' title='<?= $data["judul"]; ?>'><?= $data["judul"]; ?></a></h2>
          <div class="post-snippet"><span><?= potong_teks($data['isi'], 350); ?></span></div>
        </div>
      </article>
    <?php endforeach; ?>
    <div class='clear'></div>
  <?php else : ?>
    <article class="index" itemscope='itemscope' itemtype='https://schema.org/BlogPosting'>
      <div class='post-body' itemprop='articleBody'>
        <p>Maaf, sesuatu yang Anda cari tidak ditemukan pada situs ini. Pastikan kata atau kalimat yang Anda tulis sudah benar dan carilah konten yang relevan atau sesuai. Jika tetap tidak ditemukan, mungkin situs ini tidak membuat konten atau artikel tersebut.</p>
      </div>
      <a class="home-btn" href="<?= site_url('first'); ?>" title="Beranda">Beranda</a>
    </article>
  <?php endif; ?>
</div>


<?php
$total_artikel = 0;
foreach ($artikel as $data) :
  $total_artikel++;
endforeach;
?>
<?php if ($total_artikel >= $this->setting->web_artikel_per_page) : ?>
  <div id='paginator'>
    <?php if ($artikel) : ?>
      <?php if ($paging->prev != 0) : ?>
        <span class='newer'>
          <a href='<?= site_url("first/" . $paging_page . "/$paging->prev" . $paging->suffix); ?>' title='Artikel Terbaru'><i class='fa'>&#xf104;</i></a>
        </span>
      <?php endif; ?>
      <?php if ($paging->next != 0) : ?>
        <span class='older'>
          <a href='<?= site_url("first/" . $paging_page . "/$paging->next" . $paging->suffix); ?>' title='Artikel Terlama'><i class='fa'>&#xf105;</i></a>
        </span>
      <?php endif; ?>
    <?php endif; ?>
  </div>
  <div class='clear'></div>
<?php endif; ?>