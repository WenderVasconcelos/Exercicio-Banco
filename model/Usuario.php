<?php
/*2*/
class Usuario {
    private $login;
    private $senha;
    private $tipo;
    
    public function __get($name) {
        return $this->$name;
    }

    public function __set($name, $value) {
        $this->$name=$value;
    }

    public function __toString() {
        return  "Login: ".$this->login.
                "<br/>Senha: ".$this->senha.
                "<br/>Tipo Usuario: ".$this->tipo;
    }

}
