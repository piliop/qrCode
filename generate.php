<?php 

require "vendor/autoload.php";

use Endroid\QrCode\QrCode;

$qrCode = new QrCode($_POST['url']);
$qrCode->setSize(800);
$qrCode->setMargin(10);
$qrCode->setWriterByName('png');
$qrCode->setEncoding('UTF-8');

header('Content-Type: '.$qrCode->getContentType());
echo $qrCode->writeString();

?>