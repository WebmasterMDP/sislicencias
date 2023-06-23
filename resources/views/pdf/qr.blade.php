{!! QrCode::size(250)->generate('www.google.com'); !!}
<?php
use SimpleSoftwareIO\QrCode\Facades\QrCode;
QrCode::generate('Welcome to Makitweb');
