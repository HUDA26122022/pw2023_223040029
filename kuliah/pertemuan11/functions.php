<?php
define('BASE_URL', '/pw2023_223040029/kuliah/pertemuan11/');

function dd($value)
{
  echo "<pre>";
  die;
  echo "</pre>";
}

function uriIS($uri)
{
  return ($_SERVER["REQUEST_URI"] === BASE_URL) ? 'active' : '';
}
