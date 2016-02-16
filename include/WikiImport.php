<?php

class WikiImport
{
  const SUFFIX = "?action=content&mimetype=text/html";
  const PREFIX = "https://wiki.dsv.su.se/dmc/Status/";

  private $cu = null;

  public function __construct() {
    $this->cu = curl_init();
    
    curl_setopt($this->cu, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($this->cu, CURLOPT_MAXREDIRS, 1);
    curl_setopt($this->cu, CURLOPT_RETURNTRANSFER, true);
  }

  public function getPage($page) {
    curl_setopt($this->cu, CURLOPT_URL, self::PREFIX.rawurlencode($page).self::SUFFIX);
    return curl_exec($this->cu);
  }
}
