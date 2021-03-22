<header itemscope='itemscope' itemtype='https://schema.org/WPHeader'>
  <section id="head-info">
    <div class="wrapper">
      <script>
        <?php if (!empty($data_config['lat']) && !empty($data_config['lng'])) : ?>
          var co_lat = <?= $data_config['lat']; ?>;
          var co_lng = <?= $data_config['lng']; ?>;
        <?php else : ?>
          var co_lat = 0;
          var co_lng = 0;
        <?php endif; ?>
        var param_token = '0365b3fafdbf706a82e7ac1667683306';
        var param_unit = 'metric';
        var param_lang = 'id'
        var api_owm = 'http://api.openweathermap.org/data/2.5/weather?lat=' + co_lat + '&lon=' + co_lng + '&appid=' + param_token + '&units=' + param_unit + '&lang=' + param_lang;

        $.getJSON(api_owm, function(data) {
          var data_loc = `${data.name}`
          var data_weather = `${data.weather[0]['description']}`
          var data_temp = `${data.main['temp']}`
          var data_temp_min = `${data.main['temp_min']}`
          var data_temp_max = `${data.main['temp_max']}`
          var data_wind_speed = `${data.wind['speed']}`
          var data = data_loc + " - " + data_weather + " " + Math.round(data_temp * 10) / 10 + "&#xB0;C / &#x25B4; " + data_temp_min + "&#xB0;C / &#x25BE; " + data_temp_max + "&#xB0;C";
          $(".info-list ul li .place").html(data);
        });
      </script>

      <div class="info-list">
        <ul>
          <li>
            <i class="fa">&#xf073;</i>
            <a href="#" title="Tanggal dan Waktu hari ini">
              <script>
                document.write("" + " " + dayName[now.getDay()] + "," + " " + now.getDate() + " " + monName[now.getMonth()] + " " + now.getFullYear());
              </script>
            </a>
          </li>
          <?php if (!empty($data_config['lat']) && !empty($data_config['lng'])) : ?>
            <li>
              <i class="fa">&#xf0c2;</i>
              <a href="#" title="Prediksi cuaca hari ini"><span class="place"></span></a>
            </li>
          <?php endif; ?>
          <?php foreach ($teks_berjalan as $teks) : ?>
            <li>
              <i class='fa'>&#xf0f3;</i>
              <a href="<?= site_url('first/artikel/' . $teks['tautan']); ?>" target="_blank"><?= $teks['teks'] ?></a>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
  </section>

  <nav id="head-nav">
    <div id='head-title'>
      <div class='logo'>
        <a href='<?= site_url('first'); ?>'><img src='<?= gambar_desa($desa['logo']); ?>' alt='Sistem Informasi <?= ucwords($this->setting->sebutan_desa) . ' ' . ucwords($desa['nama_desa']); ?>' /></a>
      </div>
      <div class="title">
        <a href='<?= site_url('first'); ?>'>
          <h1><span><?= $this->setting->website_title; ?></span> <?= ucwords($this->setting->sebutan_desa) . ' ' . ucwords($desa['nama_desa']); ?></h1>
        </a>
        <div class="description">
          <?= $desa['alamat_kantor'] . ', Kodepos ' . $desa['kode_pos']; ?>
        </div>
      </div>
    </div>

    <div id='menu-btn'></div>
    <ul>
      <?php foreach ($menu_atas as $data) : ?>
        <?php if (count($data['submenu']) > 0) : ?>
          <li>
            <a href="#" itemprop="url"><span itemprop="name"><?= $data['nama']; ?> <i class='fa'>&#xf107;</i></span></a>
            <ul>
              <?php foreach ($data['submenu'] as $submenu) : ?>
                <li><a href="<?= $submenu['link']; ?>" itemprop="url"><span itemprop="name"><?= $submenu['nama']; ?></span></a></li>
              <?php endforeach; ?>
            </ul>
          </li>
        <?php else : ?>
          <li><a href="<?= $data['link']; ?>"><span itemprop="name"><?= $data['nama']; ?></span></a></li>
        <?php endif; ?>
      <?php endforeach; ?>
      <li class="search-btn"><a href='#search-bar' title='Klik untuk mencari'><i class='fa'>&#xf002;</i></a></li>
    </ul>

    <div id="search-btn">
      <a href='#search-bar' title='Klik untuk mencari'><i class='fa'>&#xf002;</i></a>
    </div>

    <div id='search-bar'>
      <form action='<?= site_url('first'); ?>' method='get'>
        <input class='close' type='button' value='&#xf060;' />
        <input type='search' name='cari' placeholder='Cari artikel disini' value="<?= html_escape($_GET['cari']); ?>" required='required' />
      </form>
    </div>
  </nav>

  <scrollbar-top max='1' value='0'>
    <div class='scrollbar-color'><span class='scrollbar'></span></div>
  </scrollbar-top>
</header>