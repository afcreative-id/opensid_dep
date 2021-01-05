<div id='post'>
  <div class="breadcrumbs" itemscope="itemscope" itemtype="https://schema.org/BreadcrumbList">
    <span itemprop="itemListElement" itemscope="itemscope" itemtype="https://schema.org/ListItem">
      <a href="<?= site_url('first'); ?>" itemprop="item" title="Beranda">
        <span itemprop="name">Beranda</span>
        <meta content="1" itemprop="position">
      </a>
    </span>
    <?php if ($single_artikel['kategori'] != '') : ?>
      <i class="fa">&#xf105;</i>
      <span itemprop="itemListElement" itemscope="itemscope" itemtype="https://schema.org/ListItem">
        <a href="<?= site_url('first/kategori/' . $single_artikel['id_kategori']); ?>" itemprop="item" title="<?= $single_artikel['kategori']; ?>">
          <span itemprop="name"><?= $single_artikel['kategori']; ?></span>
          <meta content="2" itemprop="position">
        </a>
      </span>
    <?php endif; ?>
    <i class="fa">&#xf105;</i>
    <span><?= $single_artikel['judul']; ?></span>
  </div>

  <article class="item" itemscope='itemscope' itemtype='https://schema.org/BlogPosting'>
    <div class="head">
      <h2><?= $single_artikel["judul"]; ?></h2>
      <div class="meta">
        Ditulis oleh <span><?= $single_artikel['owner']; ?></span> pada <span><?= tgl_indo2($single_artikel['tgl_upload']); ?></span>
      </div>
    </div>
    <div class="body">
      <?= $single_artikel["isi"] ?>
      <?php if ($single_artikel['dokumen'] != '' and is_file(LOKASI_DOKUMEN . $single_artikel['dokumen'])) : ?>
        <p>Dokumen Lampiran : <a href="<?= base_url() . LOKASI_DOKUMEN . $single_artikel['dokumen'] ?>" title=""><?= $single_artikel['link_dokumen'] ?></a></p>
        <br />
      <?php endif; ?>
      <?php if ($single_artikel['gambar1'] != '' and is_file(LOKASI_FOTO_ARTIKEL . "sedang_" . $single_artikel['gambar1'])) : ?>
        <div class="sampul2"><a class="group2" href="<?= AmbilFotoArtikel($single_artikel['gambar1'], 'sedang') ?>" title=""><img src="<?= AmbilFotoArtikel($single_artikel['gambar1'], 'sedang') ?>" /></a>
        </div>
      <?php endif; ?>
      <?php if ($single_artikel['gambar2'] != '' and is_file(LOKASI_FOTO_ARTIKEL . "sedang_" . $single_artikel['gambar2'])) : ?>
        <div class="sampul2"><a class="group2" href="<?= AmbilFotoArtikel($single_artikel['gambar2'], 'sedang') ?>" title=""><img src="<?= AmbilFotoArtikel($single_artikel['gambar2'], 'sedang') ?>" /></a>
        </div>
      <?php endif; ?>
      <?php if ($single_artikel['gambar3'] != '' and is_file(LOKASI_FOTO_ARTIKEL . "sedang_" . $single_artikel['gambar3'])) : ?>
        <div class="sampul2"><a class="group2" href="<?= AmbilFotoArtikel($single_artikel['gambar3'], 'sedang') ?>" title=""><img src="<?= AmbilFotoArtikel($single_artikel['gambar3'], 'sedang') ?>" /></a>
        </div>
      <?php endif; ?>
    </div>

    <?php if (trim($single_artikel['kategori']) != '') : ?>
      <div id="label">
        <a href="<?= site_url('first/kategori/' . $single_artikel['id_kategori']) ?>"><?= $single_artikel['kategori'] ?></a>
      </div>
    <?php endif; ?>

    <?php if (isset($single_artikel)) : ?>
      <div id='share'>
        <div class='title'><i class='fa'>&#xf1e0;</i></div>
        <div class='options'>
          <?php
          $site_thumb;
          if (isset($single_artikel)) {
            if ($single_artikel['gambar'] != '') {
              $site_thumb = base_url(LOKASI_FOTO_ARTIKEL . 'sedang_' . $single_artikel['gambar']);
            } else {
              $site_thumb = base_url($this->theme_folder . '/' . $this->theme . '/images/thumbnail-blank.jpg');
            }
          } else {
            $site_thumb = base_url($this->theme_folder . '/' . $this->theme . '/images/thumbnail-blank.jpg');
          }
          ?>
          <a class="fb" href="http://www.facebook.com/sharer.php?u=<?= site_url('artikel/' . buat_slug($single_artikel)) ?>" onclick="window.open(this.href,'popupwindow','scrollbars=yes,width=550,height=520');return false" target="popupwindow" title="Bagikan artikel ini ke akun facebook">
            <i class="fa">&#xf09a;</i>
          </a>
          <a class="tw" href="http://twitter.com/share?url=<?= site_url('artikel/' . buat_slug($single_artikel)) ?>" onclick="window.open(this.href,'popupwindow','scrollbars=yes,width=550,height=520');return false" target="popupwindow" title="Bagikan artikel ini ke akun Twitter">
            <i class="fa">&#xf099;</i>
          </a>
          <a class="wa" href="https://api.whatsapp.com/send?text=<?= site_url('artikel/' . buat_slug($single_artikel)) ?>" onclick="window.open(this.href,'popupwindow','scrollbars=yes,width=550,height=520');return false" target="popupwindow" title="Bagikan artikel ini ke akun Twitter">
            <i class="fa">&#xf232;</i>
          </a>
          <a class="tg" href="https://telegram.me/share/url?url=<?= site_url('artikel/' . buat_slug($single_artikel)) ?>&text=<?= htmlspecialchars($single_artikel["judul"]); ?>" onclick="window.open(this.href,'popupwindow','scrollbars=yes,width=550,height=520');return false" arget="popupwindow" title="Bagikan artikel ini ke akun Twitter">
            <i class="fa">&#xf2c6;</i>
          </a>
          <div class="clear"></div>
        </div>
      </div>
    <?php endif; ?>
  </article>

  <div id="comment">
    <?php if (!empty($komentar)) : ?>
      <?php foreach ($total_komentar as $data) : ?>
        <div id="comment-count">
          <i class='fa'>&#xf0e6;</i><span><?= $data['count']; ?> Komentar</span>
        </div>
      <?php endforeach; ?>

      <div id="comment-thread">
        <div class="list">
          <?php foreach ($komentar as $data) : ?>
            <?php if ($data['status'] == 1) : ?>
              <div class="item">
                <div class="photo">
                  <i class="fa">&#xf007;</i>
                </div>
                <div class="info">
                  <div class="owner">
                    <div class="name"><?= $data['owner']; ?></div>
                    <div class="date"><?= tgl_indo2($data['tgl_upload']); ?></div>
                    <div class="clear"></div>
                  </div>
                  <p><?= $data['komentar'] ?></p>
                </div>
              </div>
            <?php endif; ?>
          <?php endforeach; ?>
        </div>
      </div>
    <?php elseif ($single_artikel['boleh_komentar']) : ?>
      <div id="comment-empty">
        <i class='fa'>&#xf0e6;</i><span>Belum Ada Komentar</span>
      </div>
    <?php endif; ?>

    <div id="comment-policy">
      <div class="title"><span>Kebijakan Berkomentar</span></div>
      <p>
        Silahkan isi semua kolom masukkan pada formulir komentar dibawah.
        Gunakanlah kalimat yang baik dan bijak.
        Jangan melakukan spam komentar atau isi komentar yang sama secara terus-menerus dalam waktu yang singkat.
        Komentar yang sudah Anda tulis akan diterbitkan setelah disetujui oleh Admin.
      </p>
    </div>

    <?php if ($single_artikel['boleh_komentar']) : ?>
      <div id="comment-form">
        <h4><span>Formulir Komentar</span></h4>
        <form name="form" action="<?= site_url('first/add_comment/' . $single_artikel['id']); ?>" method="post" onSubmit="return validasi(this);">
          <div class="owner">
            <input type="text" name="owner" maxlength="30" placeholder="Nama Lengkap" value="<?= !empty($_SESSION['post']['owner']) ? $_SESSION['post']['owner'] : $_SESSION['nama']; ?>" required />
          </div>
          <div class="phone">
            <input type="text" name="no_hp" maxlength="30" placeholder="Nomor HP" value="<?= $_SESSION['post']['no_hp']; ?>" required />
          </div>
          <div class="email">
            <input type="text" name="email" maxlength="30" placeholder="Email" value="<?= $_SESSION['post']['email']; ?>" />
          </div>
          <div class="letter">
            <textarea name="komentar" placeholder="Isi Komentar" required><?= $_SESSION['post']['komentar']; ?></textarea>
          </div>
          <div class="captcha">
            <div class="captcha-l">
              <img id="captcha" src="<?= base_url('securimage/securimage_show.php'); ?>" alt="CAPTCHA Image" />
            </div>
            <div class="captcha-r">
              <div class="description"><span>Isi atau ubah kode captcha</span><a href="#" onclick="document.getElementById('captcha').src = '<?= base_url() . "securimage/securimage_show.php?"; ?>' + Math.random(); return false"><i class="fa">&#xf021;</i></a></div>
              <input type="text" name="captcha_code" maxlength="6" placeholder="Isikan kode di gambar" value="<?= $_SESSION['post']['captcha_code']; ?>" required />
            </div>
            <div class="clear"></div>
          </div>
          <div class="submit">
            <?php $label = !empty($_SESSION['validation_error']) ? 'label-danger' : 'label-info'; ?>
            <?php if ($flash_message) : ?>
              <div class="response">
                <i class='fa'>&#xf05a;</i><span><?= $flash_message ?></span>
              </div>
              <?php unset($_SESSION['validation_error']); ?>
            <?php endif; ?>
            <input type="submit" value="Publikasikan" />
            <div class="clear"></div>
          </div>
        </form>
      </div>
    <?php else : ?>
      <div id="comment-disabled">
        <p>Komentar untuk artikel ini telah ditutup</p>
      </div>
    <?php endif; ?>
  </div>
</div>