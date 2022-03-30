<?php
    //verifica se um dos campos está em branco
    if(empty($_POST['email']) || empty($_POST['senha'])){
        print_r($_POST);
        header('location: index.php');
    } else{
        include('conexao.php');
        $email = isset($_POST['email']) ? $_POST['email'] : null;
        $senha = isset($_POST['senha']) ?  $_POST['senha'] : null;
        $acao = isset($_GET['acao']) ? $_GET['acao'] : null;
    }

    if(isset($acao) && $acao == 'login'){
        $sql = "select * from usuarios where email= ?";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(1, $email);
        $stmt->execute();
        if($stmt->rowCount() == 1){
            $dado = $stmt->fetch();
            if(md5($senha) == $dado['senha']){
                $_SESSION['user'] = $dado['email'];
                $_SESSION['senha'] = $dado['senha'];
                echo'chegou ao fim do senha';
                header('location: main.php');
            }
        } else{
            header('location: index.php');
        }

    } else if( isset($acao) && $acao == 'cadastrar'){
        if( empty($email) || empty($senha)){
            header('location: indexp.php');
        }
        $sql = "select email from usuarios where email = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(1, $email);
        $stmt->execute();
        if($stmt->rowCount() == 0){
            $sql = "insert into usuarios(email, senha) values(?,?)";
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(1, $email);
            $stmt->bindValue(2, md5($senha));
            $stmt->execute();
            header('location: index.php');
        } else{
            echo 'Usuario já existe';
        }
        
    }
