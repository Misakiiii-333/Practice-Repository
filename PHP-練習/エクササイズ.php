<?php

abstract class Emailer {
  //プロパティを宣言　protected=アクセス修飾子（そのクラス自身と継承クラスからアクセス可能。つまり非公開ですが、継承は可能）
    protected $sender;
    protected $recipients;
    protected $subject;
    protected $body;

// コンストラクタを使用して送信者と受信者を初期化する
  // 親クラスで定義されているconstructをオーバーライドする
function __construct($sender)
    {
    $this->sender = $sender;
    $this->recipients = array(); 
    }

public function addRecipients($recipient)
    {
    array_push($this->recipients, $recipient); 
    //array_push（追加先の配列,追加先の値）で配列に要素を追加する
    
    }

public function setSubject($subject)
    {
    $this->subject = $subject; 
    //所属を明示する。「自身のクラス」から「自身のクラス、または親クラス」へアクセスしたい場合に「所属クラス」を現す表現が$this
  }

public function setBody($body)
  {
    $this->body = $body;
  }
}

// SendGrid（クラウドメール配信サービスの名前）およびMailChimp用（MailChimp）のsendEmailメソッドの実装

class SendGrid extends Emailer {
    public function sendEmail()
    {
    foreach ($this->recipients as $recipient) {
      //foreach(反復可能なデータ構造 as 要素)

        $result = mail($recipient, $this->subject, $this->body, "From: {$this->sender}\r\n");
        echo "SendGrid successfully sent to {$recipient}\n";
        echo "Sender: $this->sender\n";
        echo "Subject: $this->subject\n";
        echo "Content: $this->body\n";
      }
    }
}

class MailChimp extends Emailer {
    public function sendEmail()
    {
    foreach ($this->recipients as $recipient) {
        $result = mail($recipient, $this->subject, $this->body, "From: {$this->sender}\r\n");
        echo "MailChimp successfully sent to {$recipient}\n";
        echo "Sender: $this->sender\n";
        echo "Subject: $this->subject\n";
        echo "Content: $this->body\n";
        }
    }
}

// SendGrid
$sgEmailer = new SendGrid("youremail@yourdomain.com");
$sgEmailer->addRecipients("emailID@domain.com");
$sgEmailer->setSubject("Just a Test");
$sgEmailer->setBody("Hi Name, How are you?");
$sgEmailer->sendEmail();


// MailChimp
$sgEmailer = new MailChimp("youremail@yourdomain.com");
$sgEmailer->addRecipients("emailID@domain.com");
$sgEmailer->setSubject("Just a Test");
$sgEmailer->setBody("Hi Name, How are you?");
$sgEmailer->sendEmail();

?>
