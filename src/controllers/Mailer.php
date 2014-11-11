<?php 
namespace Peercode\CoreExtensions;
use Illuminate\Mail\Mailer as OriginalMailer;

class Mailer extends OriginalMailer{
    protected function logMessage($message){
      //$email = '';
      //$body = '';
      //$subject = '';
      
      $email = implode(", ", array_keys((array) $message->getTo()));
      $body = $message->getBody();
      $subject = $message->getSubject();
      $this->logger->info("Pretending to send message to: {$email}\n".
              "subject: ".$subject."\n".
              "body: \n".
              " {$body}");
    }
}