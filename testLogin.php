<?php
    session_start();
    // print_r($_REQUEST);
    if(isset($_POST['submit']) && !empty($_POST['username']) && !empty($_POST['password'])) {
        //acessa
        include_once('conecta.php');
        $username = $_POST['username'];
        $password = $_POST['password'];
        //print_r('username: ' . $username);
        //print_r('password: ' . $password);

        $sql = "SELECT * FROM usuarios WHERE username = '$username' and password = '$password' ";

        $result =$conexao->query($sql);
        // echo "<pre>";
        // print_r($result);
        // echo "</pre>";
        // die();
        $linha = mysqli_fetch_array($result);
      
        
        if(mysqli_num_rows($result) < 1) {
            
            unset($_SESSION['username']);
            unset($_SESSION['password']);
            header('Location: login.php');
        }
        
        else{

         if ($linha['adm']== 1) {
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
            header('Location: sistema.php');
        }
    
        else{

            if ($linha['adm'] == 0){
        //não acessa
        header('Location: pagina-inicial.php');
            }
        }
    }
}
?>