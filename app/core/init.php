<?php

require 'config.php';
require 'functions.php';
// Composer/PHPMailer autoload (mailer directory renamed from vendor)
require_once __DIR__ . '/../../mailer/autoload.php';
require __DIR__.'/../service/SenderInterfce.php';
require __DIR__.'/../service/EmailSender.php';
require __DIR__.'/../service/TelegramSender.php';
require 'Request.php';
require 'Router.php';
require 'Database.php';
require 'Model.php';
require 'Controller.php';
require 'App.php';