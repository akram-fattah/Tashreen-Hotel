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
                try {
                    $mail = new PHPMailer(true);
                    if (defined('DEVMODE') && DEVMODE) {
                        $mail->Debugoutput = 'html';
                    }
                    $mail->isSMTP();
                    $mail->Host = MAIL_HOST;
                    $mail->SMTPAuth = true;
                    $mail->Username = MAIL_USER;
                    $mail->Password = MAIL_PASS;
                    $mail->SMTPSecure = MAIL_SMTP_SECURE;
                    $mail->Port = MAIL_PORT;

                    $mail->setFrom(MAIL_FROM, MAIL_FROM_NAME);
                    $mail->addAddress(MAIL_USER);
                    $mail->addReplyTo($email, $first . ' ' . $last);
                    $mail->isHTML(true);
                    $mail->CharSet = 'UTF-8';
                    $mail->Encoding = 'base64';
                    $mail->Subject = 'نموذج تواصل من الموقع: ' . ($first . ' ' . $last);
                    $body = "<p><strong>Name:</strong> " . htmlspecialchars($first . ' ' . $last) . "</p>";
                    $body .= "<p><strong>Email:</strong> " . htmlspecialchars($email) . "</p>";
                    $body .= "<p><strong>Phone:</strong> " . htmlspecialchars($phone) . "</p>";
                    $body .= "<p><strong>Message:</strong><br>" . nl2br(htmlspecialchars($message)) . "</p>";
                    $mail->Body = $body;

                    $mail->send();
                    $_SESSION['mail_status'] = 'تم ارسال الرسالة بنجاح. شكرا.';
                } catch (Exception $e) {
                    //$err = $e->getMessage();
                    $errInfo = isset($mail) ? $mail->ErrorInfo : '';
                    $_SESSION['mail_status'] = 'خطأ أثناء الإرسال: ' . ($errInfo ?: 'حدث خطأ غير متوقع.');
                }

                function escapeMarkdownV2($text) {
                $specialChars = '_*[]()~`>#+-=|{}.!';
                $escaped = '';
                for ($i = 0; $i < mb_strlen($text); $i++) {
                    $char = mb_substr($text, $i, 1);
                    if (strpos($specialChars, $char) !== false) {
                        $escaped .= '\\' . $char;
                    } else {
                        $escaped .= $char;
                    }
                }
                return $escaped;
            }


                $messageLines = explode("\n", $message);
                $quotedMessage = '';
                $first = escapeMarkdownV2($first);
                $last = escapeMarkdownV2($last);
                $email = escapeMarkdownV2($email);
                $phone = escapeMarkdownV2($phone);

                $quotedMessage = '';
                foreach (explode("\n", $message) as $line) {
                    $quotedMessage .= '> ' . escapeMarkdownV2($line) . "\n";
                }

                $telegramMessage = "📩 رسالة جديدة من النموذج\n\n*Taghreen Hotel*\n\n*الاسم:* *$first $last*\n*الإيميل:* $email\n*الهاتف:* $phone\n*الرسالة:*\n$quotedMessage";

                $data = json_encode([
                    'chat_id' => '5198984934',
                    'text' => $telegramMessage,
                    'parse_mode' => 'MarkdownV2'
                ], JSON_UNESCAPED_UNICODE);

                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, "https://api.telegram.org/bot/sendMessage");
                curl_setopt($ch, CURLOPT_POST, true);
                curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
                curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $response = curl_exec($ch);
                curl_close($ch);

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

