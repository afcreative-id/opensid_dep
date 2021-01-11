<div id="social">
  <h2>Sosial Media</h2>
  <p>Ikuti seluruh media sosial yang tersedia pada <?= ucwords($this->setting->sebutan_desa) . ' ' . ucwords($desa['nama_desa']); ?> sehingga Kamu mendapatkan informasi dengan mudah, cepat dan terpercaya.</p>
  <div class="content">
    <ul>
      <?php foreach ($sosmed as $data) : ?>
        <?php if (!empty($data["link"])) : ?>
          <li><a class="social-<?= str_replace('.png', '', $data['gambar']); ?>" href="<?= $data['link']; ?>" title="<?= $data['nama'] . ' ' . ucwords($this->setting->sebutan_desa) . ' ' . ucwords($desa['nama_desa']); ?>"><i class="fa"></i></a></li>
        <?php endif; ?>
      <?php endforeach; ?>
      <div class="clear"></div>
    </ul>
  </div>
</div>