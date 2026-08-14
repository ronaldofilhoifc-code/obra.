<?php
    //classe que vai manipular o banco de dados
    //classe genérica que serve pra manipular tudo; extends:herança

    require_once("Conexao.class.php");

    class Entity extends Conexao{

        //Listar
        public function list($table)
        {
            $pdo = parent::getInstance();
            $sql = "SELECT * FROM $table ORDER BY id ASC";

            $statement = $pdo->query($sql);
            $statement->execute(); //-> : acessar um método ou uma propriedade

            return $statement->fetchAll(); //transforma a tabela do banco em um vetor 
        }

        //Listar
        public function listEmprestadoLivro($table,$titulo)
        {
            $pdo = parent::getInstance();
            $sql = "SELECT * FROM $table where titulo='$titulo'  and status='Emprestado' ORDER BY id ASC";

            $statement = $pdo->query($sql);
            $statement->execute(); //-> : acessar um método ou uma propriedade

            return $statement->fetchAll(); //transforma a tabela do banco em um vetor 
        }


        //INSERT
        public function insert($table,$data)
        {
            $pdo = parent::getInstance();
            $fields = implode(", ",array_keys($data));
            $values = ":".implode(", :",array_keys($data));

            $sql="INSERT INTO $table($fields) VALUES ($values)";
            $statement = $pdo->prepare($sql);

            foreach($data as $key => $value){
                $statement->bindValue(":$key",$value,PDO::PARAM_STR);
            }

            $statement->execute();

        }



        public function delete($table,$id)
        {
            $pdo = parent::getInstance();
            $sql = "DELETE FROM $table WHERE id = :id";
            $statement = $pdo->prepare($sql);
            $statement->bindValue(":id",$id);
            $statement->execute();
        }

        public function getInfo($table,$id)
        {
            $pdo = parent::getInstance();
            $sql = "SELECT * FROM $table WHERE id = :id";
            $statement = $pdo->prepare($sql);
            $statement->bindValue(":id",$id);
            $statement->execute();

            return $statement->fetchAll();
        }

        public function getInfoTitulo($table,$titulo)
        {
            $pdo = parent::getInstance();
            $sql = "SELECT * FROM $table WHERE titulo = :titulo";
            $statement = $pdo->prepare($sql);
            $statement->bindValue(":titulo",$titulo);
            $statement->execute();

            return $statement->fetchAll();
        }

        public function get($table)
        {
            $pdo = parent::getInstance();
            $sql = "SELECT * FROM $table";
            $statement = $pdo->prepare($sql);
            $statement->execute();

            return $statement->fetchAll();
        }

        public function update($table,$data,$id)
        {
            $pdo = parent::getInstance();
            $new_values = "";
            foreach($data as $key => $value)
            {
                $new_values .= "$key=:$key, ";
            }
            $new_values = substr($new_values,0,-2);
            $sql = "UPDATE $table SET $new_values WHERE id = :id";
            $statement = $pdo->prepare($sql);
            foreach($data as $key => $value)
            {
                $statement->bindValue(":$key",$value,PDO::PARAM_STR);
            }
            $statement->bindValue(":id",$id);
            $statement->execute();
        }


        public function autocomplete($table,$texto)
        {
            $pdo = parent::getInstance();
            $sql = "SELECT * FROM $table WHERE titulo LIKE '%$texto%'";
           
            $statement = $pdo->query($sql);
            $statement->execute();

            while($row = $statement->fetch()) {
               $return_arr[] =  $row['titulo'];
           }

            // return $return_arr;
        }

        public function login($tabela, $tipoDeLogin, $credencial, $senha)
        {
            $pdo = parent::getInstance();
            $sql = "SELECT * FROM $tabela WHERE $tipoDeLogin = '$credencial' and senha = '$senha';";
           
            $statement = $pdo->prepare($sql);
            $statement->execute();

            while($row = $statement->fetchAll()) {
               $return_arr[] =  $row;
           }

            return $return_arr;
        }

        public function loginPrincipal($email,$senha)
        {
            $pdo = parent::getInstance();
            $sql = "SELECT * FROM usuario WHERE email = '$email' and senha = '$senha';";
           
            $statement = $pdo->prepare($sql);
            $statement->execute();
            return $statement;
        }

    
    }

?>