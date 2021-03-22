<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html>

<head>
  <?php $this->load->view($folder_themes . '/partials/head_meta.php'); ?>
  <?php $this->load->view($folder_themes . '/partials/head_source.php'); ?>
</head>

<body itemscope="itemscope" itemtype="https://schema.org/WebPage">
  <?php $this->load->view($folder_themes . '/partials/preloader.php'); ?>
  <?php $this->load->view($folder_themes . '/partials/header.php'); ?>

  <section id='body'>
    <?php $this->load->view($folder_themes . '/partials/header_headline.php'); ?>

    <div class='wrapper'>
      <div id='content' itemprop='mainContentOfPage' itemscope='itemscope' itemtype='https://schema.org/WebPageElement' role='main'>
        <?php if ($list_jawab) : ?>
          <div class='box'>
            <?php $this->load->view($folder_themes . '/partials/content_analisis.php'); ?>
          </div>
        <?php else : ?>
          <div class="box box-primary">
            <div class="box-header">
              <h2 class="judul">DAFTAR AGREGASI DATA ANALISIS DESA</h2>
              <h3>Klik untuk melihat lebih detail</h3>
            </div>
            <?php foreach ($list_indikator as $data) : ?>
              <div class="box-header">
                <a href="<?php echo site_url() ?>first/data_analisis/<?php echo $data['id'] ?>/<?php echo $data['subjek_tipe'] ?>/<?php echo $data['id_periode'] ?>">
                  <h4><?php echo $data['indikator'] ?></h4>
                </a>
              </div>
              <div class="box-body" style="font-size:12px;">
                <table>
                  <tr>
                    <td width="100">Pendataan </td>
                    <td width="20"> :</td>
                    <td> <?php echo $data['master'] ?></td>
                  </tr>
                  <tr>
                    <td>Subjek </td>
                    <td> : </td>
                    <td> <?php echo $data['subjek'] ?></td>
                  </tr>
                  <tr>
                    <td>Tahun </td>
                    <td> :</td>
                    <td> <?php echo $data['tahun'] ?></td>
                  </tr>
                </table>
              </div>
            <?php endforeach; ?>
          <?php endif; ?>
          </div>
          <div id='sidebar' itemscope='itemscope' itemtype='https://schema.org/WPSideBar' role='complementary'>
            <?php $this->load->view(Web_Controller::fallback_default($this->theme, '/partials/sidebar.php')); ?>
          </div>
          <div class='clear'></div>
      </div>
  </section>

  <?php $this->load->view($folder_themes . '/partials/footer_top.php'); ?>
  <?php $this->load->view($folder_themes . '/partials/footer_bot.php'); ?>
  <?php $this->load->view($folder_themes . '/partials/overlay.php'); ?>

  <script src="<?= base_url($this->theme_folder . '/' . $this->theme . '/vendors/datatables/datatables.min.js'); ?>"></script>
  <script src="<?= base_url($this->theme_folder . '/' . $this->theme . '/js/foot_main.js'); ?>"></script>
</body>

</html>