<h4 class="title-tag"><?= 'Arsip Galeri ' . $desa["nama_desa"]; ?></h4>
<div id='post'>
	<?php $i = 1 ?>
	<?php foreach ($gallery as $data) : ?>
		<?php if (is_file(LOKASI_GALERI . "sedang_{$data['gambar']}")) : ?>
			<article class="index" itemscope='itemscope' itemtype='https://schema.org/BlogPosting'>
				<div class='post-body' itemprop='articleBody'>
					<a class='post-thumbnail' href="<?= AmbilGaleri($data['gambar'], 'sedang') ?>" title='<?= $data["judul"]; ?>'>
						<img src="<?= AmbilGaleri($data['gambar'], 'kecil') ?>" alt="<?= $data["judul"]; ?>" title="<?= $data["judul"]; ?>">
					</a>
					<div class='post-meta'>
						<span class='post-date'>Album</span>
					</div>
					<h2 class='post-title' itemprop='name headline' title='<?= $data["judul"]; ?>'>
						<a href="<?= site_url("first/sub_gallery/{$data['id']}") ?>" title="<?= $data['nama'] ?>">
							<?= $data['nama'] ?></a>
					</h2>
					<div class="post-snippet"><span><?= potong_teks($data['isi'], 350); ?></span></div>
				</div>
				<div class="<?php fmod($i, 2) == 0 and print('clearboth') ?>"></div>
			</article>
			<?php $i++ ?>
		<?php endif ?>
	<?php endforeach ?>
</div>
<div id='paginator'>
	<?php if ($paging->prev) : ?>
		<span class='newer'>
			<a href='<?= site_url("first/gallery/{$paging->prev}"); ?>' title='Artikel Terbaru'><i class='fa'>&#xf104;</i></a>
		</span>
	<?php endif; ?>
	<?php if ($paging->next) : ?>
		<span class='older'>
			<a href='<?= site_url("first/gallery/{$paging->next}"); ?>' title='Artikel Terlama'><i class='fa'>&#xf105;</i></a>
		</span>
	<?php endif; ?>
</div>
<div class='clear'></div>