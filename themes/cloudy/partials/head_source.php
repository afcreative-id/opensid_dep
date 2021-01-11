<link href="<?= base_url($this->theme_folder . '/' . $this->theme . '/vendors/bootstrap/3.3.2/css/bootstrap.min.css'); ?>" rel="stylesheet" />
<link href="<?= base_url($this->theme_folder . '/' . $this->theme . '/css/reset.css'); ?>" rel="stylesheet" />
<link href="<?= base_url($this->theme_folder . '/' . $this->theme . '/css/main.css'); ?>" rel="stylesheet" />
<link href="<?= base_url($this->theme_folder . '/' . $this->theme . '/css/responsive.css'); ?>" rel="stylesheet" />
<link href="<?= base_url($this->theme_folder . '/' . $this->theme . '/vendors/lightslider/css/lightslider.min.css'); ?>" rel="stylesheet" />
<link href="<?= base_url($this->theme_folder . '/' . $this->theme . '/vendors/leaflet/1.6.0/css/leaflet.min.css'); ?>" rel="stylesheet" />
<link href="<?= base_url($this->theme_folder . '/' . $this->theme . '/vendors/datatables/datatables.min.css'); ?>" rel="stylesheet" />
<link href="<?= base_url($this->theme_folder . '/' . $this->theme . '/vendors/datatables/1.10.20/css/jquery.dataTables.min.css'); ?>" rel="stylesheet" />

<script src="<?= base_url('assets/js/highcharts/highcharts.js') ?>"></script>
<script src="<?= base_url('assets/js/highcharts/highcharts-3d.js') ?>"></script>
<script src="<?= base_url('assets/js/highcharts/exporting.js') ?>"></script>
<script src="<?= base_url('assets/js/highcharts/highcharts-more.js') ?>"></script>

<script src="<?= base_url($this->theme_folder . '/' . $this->theme . '/js/jquery/3.4.1/jquery.min.js'); ?>"></script>
<script src="<?= base_url($this->theme_folder . '/' . $this->theme . '/js/jquery-migrate/3.1.0/jquery-migrate.min.js'); ?>"></script>
<script src="<?= base_url($this->theme_folder . '/' . $this->theme . '/vendors/lightslider/js/lightslider.min.js'); ?>"></script>
<script src="<?= base_url($this->theme_folder . '/' . $this->theme . '/vendors/leaflet/1.6.0/js/leaflet.js'); ?>"></script>

<?php $this->load->view('global/validasi_form'); ?>

<script src="<?= base_url($this->theme_folder . '/' . $this->theme . '/js/head_main.js'); ?>"></script>

<script>
  var BASE_URL = "<?= base_url(); ?>";
</script>

<?php $this->load->view('head_tags_front') ?>