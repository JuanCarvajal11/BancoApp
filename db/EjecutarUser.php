<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function denegar() {
        Swal.fire({
            icon: 'error',
            title: 'Lo siento...',
            text: 'Algun valor no coincide con lo pedido',
            showConfirmButton: false
        })
    }

    function redireccionar() {
        setTimeout("window.location='../index.php';", 3000);
    }
    
</script>
<?php

if(isset($_POST['submit'])){
        include_once('user.php');
        $name = $_POST['name'];
        $lastname = $_POST['lastname'];
        $nrocuenta = $_POST['nrocuenta'];
        $pass = $_POST['pss'];

        if(strlen($nrocuenta) == 10 && is_numeric($pass)){
            $newuser = New Loguin();
            $newuser->entradaDatos($name,$lastname,$nrocuenta,$pass);
            $newuser->castrar();
            $newuser->CreateUser();
        }else{
            echo "<font color=\"white\">b</font>";
            echo "<script>";
            echo "denegar();";
            echo "</script>";
            echo "<script>";
            echo "redevolver();";
            echo "</script>";
            exit();
        }
    }