<?php

//session_start();

class User
{
    function Login($db, $email, $senha)
    {
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $sql = $db->prepare("SELECT * FROM usuarios WHERE email = ?");
        $sql->execute([$email]);
        if($sql->rowCount() == 1){
            $info = $sql->fetch();
            if(password_verify($senha, $info['senha'])){
                $_SESSION['login'] = true; //Se for true então o usuário pode ficar logado.
                $_SESSION['id'] = $info['id']; //Recuperamos o id.
                header("Location: index.php");  //Redirecionamos o usuário para uma página privada que somente usuários logados podem acessar.
                die();
            }else{
                echo 'Usuário ou senha incorretos!';
            }
        }else{
            echo 'Usuário não encontrado.';
        }
    }

    function RegisterAluno($db, $ra, $email, $senha, $curso)
    {
    }

    function RegisterProfessor($db, $email, $password)
    {
    }

    function getUser($db, $id)
    {
        $sql = $db->prepare("SELECT * FROM usuarios WHERE id = ?");
        $sql->execute([$id]);
        if($sql->rowCount() == 1){
            $info = $sql->fetch();
            $dados['user'] = $info['nome'];
            return $dados;
        }else{
            echo 'Usuário não encontrado.';
        }
    }
}
