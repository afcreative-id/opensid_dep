<?php
if ($w_cos) {
  foreach ($w_cos as $data) {
    if ($data["jenis_widget"] == 1) {
      // Widget System
      if ($data["isi"] == "layanan_mandiri.php") {
        include($this->theme_folder . '/' . $this->theme . '/widgets/' . trim($data['isi']));
      }
      if ($data["isi"] == "aparatur_desa.php") {
        include($this->theme_folder . '/' . $this->theme . '/widgets/' . trim($data['isi']));
      }
      if ($data["isi"] == "agenda.php") {
        include($this->theme_folder . '/' . $this->theme . '/widgets/' . trim($data['isi']));
      }
      if ($data["isi"] == "menu_kategori.php") {
        include($this->theme_folder . '/' . $this->theme . '/widgets/' . trim($data['isi']));
      }
      if ($data["isi"] == "arsip_artikel.php") {
        include($this->theme_folder . '/' . $this->theme . '/widgets/' . trim($data['isi']));
      }
    }
  }
}
