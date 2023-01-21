<?php
class Goodbye {
  const MESSAGE = "Thank you";
  public function byebye() {
    echo self::MESSAGE;
  }
}

$goodbye = new Goodbye();
$goodbye->byebye();
?>