<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class EmailSender implements SenderInterfce {
    protected string $first;
    protected string $last;
    protected string $email;
    protected string $phone;
    protected string $message;

    public function __construct(string $first, string $last, string $email, string $phone, string $message){
        $this->first = $first;
        $this->last = $last;
        $this->email = $email;
        $this->phone = $phone;
        $this->message = $message;
    }

    public function send(): bool {
        
        try {
            $mail = new PHPMailer(true);
            $mail->isSMTP();
            $mail->Host = MAIL_HOST;
            $mail->SMTPAuth = true;
            $mail->Username = MAIL_USER;
            $mail->Password = MAIL_PASS;
            $mail->SMTPSecure = MAIL_SMTP_SECURE;
            $mail->Port = MAIL_PORT;

            $mail->setFrom(MAIL_FROM, MAIL_FROM_NAME);
            $mail->addAddress(MAIL_USER);
            $mail->addReplyTo($this->email, $this->first . ' ' . $this->last);
            $mail->isHTML(true);
            $mail->CharSet = 'UTF-8';
            $mail->Encoding = 'base64';
            $mail->Subject = 'نموذج تواصل من الموقع: ' . ($this->first . ' ' . $this->last);
            $body = "<p><strong>Name:</strong> " . htmlspecialchars($this->first . ' ' . $this->last) . "</p>";
            $body .= "<p><strong>Email:</strong> " . htmlspecialchars($this->email) . "</p>";
            $body .= "<p><strong>Phone:</strong> " . htmlspecialchars($this->phone) . "</p>";
            $body .= "<p><strong>Message:</strong><br>" . nl2br(htmlspecialchars($this->message)) . "</p>";
            $mail->Body = $body;

            $mail->send();
            $_SESSION['mail_status'] = 'تم ارسال الرسالة بنجاح. شكرا.';
            return true;
        } catch (Exception $e) {
            $_SESSION['mail_status'] = 'خطأ أثناء الإرسال: ';
            return false;
        }
    }
}