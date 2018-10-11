<!--3-->
<?php
//PDO é a classe pai que auxilia com a conexão com BD
class ConectaBanco extends PDO{
    //construtor da classe chama o construtor da classe pai
    private static $instancia=null;
    function ConectaBanco($dsn,$usuario,$senha){
        //parent é como se fosse o this pra chamar uma infomação da classe pai
        //invoca a classe pai com os parâmetros que ela solicita
        parent::__construct($dsn,$usuario,$senha);
    }
    static function getInstancia(){
        try{//self é como se fosse o this
            //só que para chamr o método ou variavel
            //estática da propria classe
            self::$instancia=new ConectaBanco(
                    "mysql:dbname=aulabanco;"
                    ."host=localhost",
                    "root",
                    "");
            echo 'Conectado com Sucesso!';
        } catch(Exception $e) {//tratamento de erro
            echo "Erro ao conectar";
        }
        return self::$instancia;
    }
}