<?php

class TelegramSender implements SenderInterfce{

    protected string $chat_id;
    protected string $first;
    protected string $last;
    protected string $email;
    protected string $phone;
    protected string $message;

    public function __construct(
        string $chat_id,
        string $first,
        string $last,
        string $email,
        string $phone,
        string $message,

    ){
        $this->chat_id = $chat_id;
        $this->first = $first;
        $this->last = $last;
        $this->email = $email;
        $this->phone = $phone;
        $this->message = $message;
    }
    
    public function escapeMarkdownV2($text) {
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

    public function send(): bool{
        $messageLines = explode("\n", $this->message);
        $quotedMessage = '';
        $first = $this->escapeMarkdownV2($this->first);
        $last = $this->escapeMarkdownV2($this->last);
        $email = $this->escapeMarkdownV2($this->email);
        $phone = $this->escapeMarkdownV2($this->phone);

        $quotedMessage = '';
        foreach (explode("\n", $this->message) as $line) {
            $quotedMessage .= '> ' . $this->escapeMarkdownV2($line) . "\n";
        }

        $telegramMessage = "📩 رسالة جديدة من النموذج\n\n*Taghreen Hotel*\n\n*الاسم:* *$first $last*\n*الإيميل:* $email\n*الهاتف:* $phone\n*الرسالة:*\n$quotedMessage";

        $data = json_encode([
            'chat_id' => $this->chat_id,
            'text' => $telegramMessage,
            'parse_mode' => 'MarkdownV2'
        ], JSON_UNESCAPED_UNICODE);

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://api.telegram.org/bot8085717684:AAFJXr7pvzNdv8QFLlkpZ2LIBFLyFH8gNiA/sendMessage");
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        if($response === false){
            $result = json_decode($response, true);
            if (!isset($result['ok']) || $result['ok'] !== true) {
                return false;
            }
            return false;
        }
        curl_close($ch);
        return true;
    }
}