<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$config['protocol'] = 'smtp';
$config['smtp_host'] = 'smtp.sendgrid.net';
$config['smtp_port'] = '587'; // 8025, 587 and 25 can also be used. Use Port 465 for SSL.
$config['smtp_crypto'] = 'tls';
$config['smtp_user'] = 'apikey';
$config['smtp_pass'] = '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';
$config['charset'] = 'utf-8';
$config['mailtype'] = 'html';
$config['newline'] = "\r\n";