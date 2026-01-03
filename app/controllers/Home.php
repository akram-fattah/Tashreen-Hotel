<?php
require_once __DIR__ . '/../models/Rooms.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Home extends Controller {
    public function index() {
        // Handle contact form submission
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $first = clear_inputes($_POST['first_name'] ?? '');
            $last = clear_inputes($_POST['last_name'] ?? '');
            $email = clear_inputes($_POST['email'] ?? '');
            $phone = clear_inputes($_POST['phone'] ?? '');
            $message = clear_inputes($_POST['message'] ?? '');

            if (empty($email) || empty($message)) {
                $_SESSION['mail_status'] = 'الرجاء ادخال البريد والرسالة.';
            } else {
                $emailSend = new EmailSender(
                    $first,
                    $last,
                    $email,
                    $phone,
                    $message
                );
                $emailSend->send();
                $telegramSend = new TelegramSender(
                    '5198984934',
                    $first,
                    $last,
                    $email,
                    $phone,
                    $message
                );
                $telegramSend->send();
            }

            header('Location: ' . $_SERVER['REQUEST_URI'] . '#sendMail');
            exit;
        }

        $model = new Rooms();
        $res =  $model->rooms();
        $photos = $model->getAllPhotos();
        $customersVoice = $model->customersVoice();

        $this->view('home', [
            'res' => $res,
            'photos' => $photos,
            'customersVoice' => $customersVoice
        ]);
    }
}

