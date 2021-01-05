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
				<?php $this->load->view($folder_themes . '/partials/content_sub_gallery.php'); ?>
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