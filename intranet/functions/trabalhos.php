<?php

//session_start();

class Trabalho
{
    // function Inserir($db, $email, $senha)
    // {
    //     $sql = "SELECT * FROM `usuarios` WHERE `email` = '$email'";
    //     $result = $db->query($sql);
    //     if (mysqli_num_rows($result) > 0) {
    //         while ($row = $result->fetch_assoc()) {
    //             if (password_verify($senha, $row['senha'])) {
    //                 $_SESSION['logado'] = true;
    //                 $_SESSION['id'] = $row['id'];
    //                 $dados = '';
    //             } else {
    //                 $_SESSION['logado'] = false;
    //                 $dados['dados']['mensagem'] = "Senha incorreta";
    //             }
    //         }
    //     } else {
    //         $_SESSION['logado'] = false;
    //         $dados['dados']['mensagem'] = "Ocorreu um erro, tente novamente mais tarde.";
    //     }
    //     return $dados;
    // }

    function getTrabalho($db)
    {
        $dados['id'] = array();
        $dados['titulo'] = array();
        $dados['descricao'] = array();
        $dados['curso'] = array();
        $dados['orientador'] = array();
        $dados['data_publicacao'] = array();
        $dados['arquivo'] = array();
        $sql = "SELECT * FROM `trabalhos` ORDER BY `id`";
        $result = $db->query($sql);
        if (mysqli_num_rows($result) > 0) {
            while($row = $result->fetch_assoc()) {
                array_push($dados['id'], $row['id']);
                array_push($dados['titulo'], $row['titulo']);
                array_push($dados['descricao'], $row['descricao']);
                array_push($dados['curso'], $row['curso']);
                array_push($dados['orientador'], $row['orientador']);
                array_push($dados['data_publicacao'], $row['data_publicacao']);
                array_push($dados['arquivo'], $row['arquivo']);
            }
        } else {
            $dados['mensagem'] = "Ocorreu um erro, tente novamente mais tarde.";
        }
        return $dados;
    }
}
