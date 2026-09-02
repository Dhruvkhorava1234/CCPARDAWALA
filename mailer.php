<?php
/**
 * Standalone SMTP Mailer for CC Pardawala
 * Uses direct SSL socket connection to smtp.mail.yahoo.com:465
 */

class SimpleSMTP {
    private $host = 'ssl://smtp.mail.yahoo.com';
    private $port = 465;
    private $timeout = 15;
    private $user = 'curtaincraft@yahoo.com';
    private $pass = 'idasdonwsrnnadhc'; // Yahoo App Password without spaces

    private function getResponse($socket) {
        $response = '';
        while ($line = fgets($socket, 515)) {
            $response .= $line;
            if (substr($line, 3, 1) == ' ') break;
        }
        return $response;
    }

    public function sendMail($to, $toName, $fromEmail, $fromName, $subject, $htmlBody) {
        $context = stream_context_create([
            'ssl' => [
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            ]
        ]);

        $socket = @stream_socket_client($this->host . ':' . $this->port, $errno, $errstr, $this->timeout, STREAM_CLIENT_CONNECT, $context);
        if (!$socket) {
            return ['success' => false, 'error' => "Connection failed: $errstr ($errno)"];
        }

        $res = $this->getResponse($socket);
        if (substr($res, 0, 3) != '220') {
            fclose($socket);
            return ['success' => false, 'error' => "Server not ready: $res"];
        }

        // EHLO
        fputs($socket, "EHLO localhost\r\n");
        $res = $this->getResponse($socket);

        // AUTH LOGIN
        fputs($socket, "AUTH LOGIN\r\n");
        $res = $this->getResponse($socket);
        if (substr($res, 0, 3) != '334') {
            fclose($socket);
            return ['success' => false, 'error' => "AUTH LOGIN failed: $res"];
        }

        // Username
        fputs($socket, base64_encode($this->user) . "\r\n");
        $res = $this->getResponse($socket);
        if (substr($res, 0, 3) != '334') {
            fclose($socket);
            return ['success' => false, 'error' => "Username rejected: $res"];
        }

        // Password
        fputs($socket, base64_encode($this->pass) . "\r\n");
        $res = $this->getResponse($socket);
        if (substr($res, 0, 3) != '235') {
            fclose($socket);
            return ['success' => false, 'error' => "Authentication failed: $res"];
        }

        // MAIL FROM
        fputs($socket, "MAIL FROM: <{$this->user}>\r\n");
        $res = $this->getResponse($socket);
        if (substr($res, 0, 3) != '250') {
            fclose($socket);
            return ['success' => false, 'error' => "MAIL FROM failed: $res"];
        }

        // RCPT TO
        fputs($socket, "RCPT TO: <{$to}>\r\n");
        $res = $this->getResponse($socket);
        if (substr($res, 0, 3) != '250') {
            fclose($socket);
            return ['success' => false, 'error' => "RCPT TO failed: $res"];
        }

        // DATA
        fputs($socket, "DATA\r\n");
        $res = $this->getResponse($socket);
        if (substr($res, 0, 3) != '354') {
            fclose($socket);
            return ['success' => false, 'error' => "DATA failed: $res"];
        }

        // Headers & Content
        $headers = "MIME-Version: 1.0\r\n";
        $headers .= "From: \"CC Pardawala Website\" <{$this->user}>\r\n";
        $headers .= "To: {$toName} <{$to}>\r\n";
        $headers .= "Subject: =?UTF-8?B?" . base64_encode($subject) . "?=\r\n";
        $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
        $headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";

        $message = $headers . "\r\n" . $htmlBody . "\r\n.\r\n";
        fputs($socket, $message);
        $res = $this->getResponse($socket);

        // QUIT
        fputs($socket, "QUIT\r\n");
        fclose($socket);

        if (substr($res, 0, 3) == '250') {
            return ['success' => true];
        } else {
            return ['success' => false, 'error' => "Send failed: $res"];
        }
    }
}
