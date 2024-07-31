<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

class EmailSender {
    private $mail;

    public function __construct($host, $username, $password, $port = 587, $encryption = PHPMailer::ENCRYPTION_STARTTLS) {
        $this->mail = new PHPMailer(true);

        // ตั้งค่าการเชื่อมต่อกับ SMTP
        $this->mail->isSMTP();
        $this->mail->Host = $host;
        $this->mail->SMTPAuth = true;
        $this->mail->Username = $username;
        $this->mail->Password = $password;
        $this->mail->SMTPSecure = $encryption;
        $this->mail->Port = $port;
    }

    public function sendEmail($from, $fromName, $to, $toName, $subject, $body, $altBody = '') {
        try {
            // ตั้งค่าผู้ส่งและผู้รับ
            $this->mail->setFrom($from, $fromName);
            $this->mail->addAddress($to, $toName);

            // ตั้งค่าหัวเรื่องและเนื้อหาของอีเมล
            $this->mail->isHTML(true);
            $this->mail->Subject = $subject;
            $this->mail->Body    = $body;
            $this->mail->AltBody = $altBody;

            $this->mail->send();
            return 'Email has been sent';
        } catch (Exception $e) {
            return "Message could not be sent. Mailer Error: {$this->mail->ErrorInfo}";
        }
    }
}
?>
