<!--4-->
<?php
include_once'../conexao/ConectaBanco.php';
class UsuarioManipula {
    private $conecta=null;
    
    
    function __construct() {
        $this->conecta = ConectaBanco::getInstancia();
    }
    
    public function cadastrarUsuario($u){
        try{//prepare utilizado para linhas que modificam dados no BD
            $stat = $this->conecta->prepare(
                    "insert into usuario "
                    . "(id_usuario,login,senha,tipo)"
                    . " values(null,?,?,?)");
                    /* bindValue evita SQLInjection(HACK)que é a invasao 
                     * do sistema e manipulação de dados no banco a 
                     * partir do próprio sistema, cada número de indice
                     * equivale a um ponto de interrogação na linha no SQL*/ 
                    $stat->bindValue(1,$u->login);
                    $stat->bindValue(2,$u->senha);
                    $stat->bindValue(3,$u->tipo);
                    $stat->execute();
                    $this->conecta=null;
                    
        } catch (PDOException $e) {
            echo "Erro ao cadastrar";
        }
    }
    function buscarUsuario(){
        try{//faz a busca no BD
            $stat= $this->conecta->query("select * from usuario");
            //compara classe com coluna no banco e recupera dado
            $array=$stat->fetchALL(PDO::FETCH_CLASS,"Usuario");
            $this->conecta=null;
            //retorna dados
            return $array;
        } catch (Exception $e) {
            echo 'Erro ao Buscar';
        }
    }
}
