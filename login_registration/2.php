<?php
  class WebDeveloper {
    private $username;
    private $email;
    private $phoneno;
    private $passwrd;
    private $conps;
    function  __construct($username,$email,$phoneno,$passwrd,$conps) {
      $this->username = $username;
      $this->email = $email;
      $this->phoneno = $phoneno;
      $this->passwrd = $passwrd;
      $this->conps = $conps;
    }
    public function getName() {
      return $this->username;
    }
    public function getemail() {
      return $this->email;
    }
    public function getphoneno() {
      return $this->phoneno;
    }

 public function getps() {
      return $this->passwrd;
    }

 public function getconps() {
      return $this->conps;
    }
}
 



?>