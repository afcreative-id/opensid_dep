<div class="overstat-civil">
  <h3>Jumlah Penduduk<span>
      <?php foreach ($stat_widget as $data) : ?>
        <?php if ($data['jumlah'] != "-" and $data['nama'] != "JUMLAH") : ?>
          <?php if ($data['nama'] == "TOTAL") : ?>
            <?= $data['jumlah']; ?>
          <?php endif; ?>
        <?php endif; ?>
      <?php endforeach; ?>
    </span></h3>
  <table>
    <?php foreach ($stat_widget as $data) : ?>
      <?php if ($data['jumlah'] != "-" and $data['nama'] != "JUMLAH") : ?>
        <?php if ($data['nama'] != "TOTAL") : ?>
          <tr>
            <td><?= ucwords(strtolower($data['nama'])); ?></td>
            <td><?= $data['jumlah']; ?></td>
          </tr>
        <?php endif; ?>
      <?php endif; ?>
    <?php endforeach; ?>
  </table>
</div>