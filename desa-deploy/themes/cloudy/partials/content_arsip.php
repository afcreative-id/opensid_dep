<div id='post'>
  <div class="breadcrumbs" itemscope="itemscope" itemtype="https://schema.org/BreadcrumbList">
    <span itemprop="itemListElement" itemscope="itemscope" itemtype="https://schema.org/ListItem">
      <a href="<?= site_url('first'); ?>" itemprop="item" title="Beranda">
        <span itemprop="name">Beranda</span>
        <meta content="1" itemprop="position">
      </a>
    </span>
    <i class="fa">&#xf105;</i>
    <span>Arsip Konten Situs Web <?= $desa["nama_desa"] ?></span>
  </div>

  <article class="item" itemscope='itemscope' itemtype='https://schema.org/BlogPosting'>
    <div class="head">
      <h2>Arsip Konten Situs Web <?= $desa["nama_desa"] ?></h2>
    </div>
    <div class="body">
      <?php if (count($farsip) > 0) : ?>
        <div class="tbl-model-a">
          <table class="model-a">
            <thead>
              <tr>
                <th width="3%"><b>No.</b></th>
                <th width="20%"><b>Tanggal Artikel</b></th>
                <th>Judul Artikel</th>
                <th width="20%"><b>Penulis</b></th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($farsip as $data) : ?>
                <tr>
                  <td style="text-align:center;"><?= $data["no"] ?></td>
                  <td><?= tgl_indo($data["tgl_upload"]) ?></td>
                  <td><a href="<?= site_url('first/artikel/' . $data[id]) ?>"><?= $data["judul"] ?></a></td>
                  <td><?= $data["owner"] ?></td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        <?php else : ?>
          Belum ada arsip konten web.
        <?php endif; ?>
        <?php if (count($farsip) > 0) : ?>
          <div class="paginate">
            <ul>
              <?php if ($paging->prev) : ?>
                <li><a class="prev" href="<?= site_url("first/arsip/$paging->prev") ?>" title="Halaman Sebelumnya"><i class="fa">&#xf104;</i></a></li>
              <?php endif; ?>
              <?php for ($i = $paging->start_link; $i <= $paging->end_link; $i++) : ?>
                <?php if ($p != $i) : ?>
                  <li><a href="<?= site_url('first/arsip/' . $i) ?>" title="<?= 'Halaman ' . $i ?>"><?= $i ?></a></li>
                <?php else : ?>
                  <li><a class="active" href="#"><?= $i ?></a></li>
                <?php endif; ?>
              <?php endfor; ?>
              <?php if ($paging->next) : ?>
                <li><a class="next" href="<?= site_url("first/arsip/$paging->next") ?>" title="Halaman Selanjutnya"><i class="fa">&#xf105;</i></a></li>
              <?php endif; ?>
            </ul>
          </div>
        <?php endif; ?>
        </div>
    </div>
  </article>
</div>