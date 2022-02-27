<?php

class SignupContr {
    private $uid;
    private $pwd;
    private $email;

    public function __construct($pwd, $email){
        $this->pwd = $pwd;
        $this->email = $email;
    }
}
?>