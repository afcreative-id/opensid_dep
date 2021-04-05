<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Api extends CI_Controller {

  public function get_penduduk($nik = 0) {
    if ($nik != 0) {
      ini_set('display_errors', 1);
      ini_set('display_startup_errors', 1);
      error_reporting(E_ALL);

      $data = array(
        "nik" => $nik,
        "user_id" => "diskominfo",
        "option" => "NIK",
        "password" => "KY734srt",
        "instansi" => "DISKOMINFO",
        "ip_address" => "localhost",
        "ip_user" => "localhost",
      );

      $data_string = json_encode($data);
      $url = "http://103.212.211.148:33321/dukcapil/get_json/DISKOMINFO/GET_PENDUDUK";
      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_POST, 1);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      curl_setopt($ch, CURLOPT_VERBOSE, 0);
      curl_setopt($ch, CURLOPT_TIMEOUT, 120);
      curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json',
        'Content-Length: ' . strlen($data_string)
      ));
      $hasil = curl_exec($ch);
      curl_close($ch);

      print($hasil);
    } else {
      print("null");
    }
  }
}
