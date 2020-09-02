<?php

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

require_once 'vendor/autoload.php';

class MailClass {
    public function send($subject, $body, $to, $cc = false, $replyto = false, $attach = false, $from = false) {
        try {
            $mail = new PHPMailer(true);
            //$mail->SMTPDebug = 2;
            $mail->isSMTP();
            $mail->Host = '';
            $mail->Username = '';
            $mail->Password = '';
            $mail->CharSet = 'UTF-8';
            $mail->SMTPAuth = true;
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;

            if ($from) {
                if (is_array($from)) {
                    if (isset($from['email'])) {
                        $mail->setFrom($from['email'], $from['name']);
                    }
                } else {
                    $mail->setFrom($from);
                }
            }

            if (is_array($to)) {
                foreach ($to as $value) {
                    $mail->addAddress($value);
                }
            } else {
                $mail->addAddress($to);
            }

            if ($cc) {
                foreach ($cc as $value) {
                    $mail->addCC($value);
                }
            }

            if ($replyto) {
                $mail->addReplyTo($replyto);
            }

            if ($attach) {
                $mail->AddAttachment($attach);
            }

            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body = $body;
            return $mail->send();
        } catch (Exception $e) {
            return "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
}