<?php
require_once('src/mega.class.php');
require_once('src/zipstream.php');

$megafile = new MEGA('https://mega.co.nz/#!yl5EFARS!c6T1en1P8N9GuQzsMy5iCh2U9NEmuqTvSd4KkW42UX4');

#$megafile->download(); // to download
$megafile->download_zip(); // to download as zip. Make sure you have enough space for file in /tmp
?>