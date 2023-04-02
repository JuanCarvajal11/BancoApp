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
        include_once('insertarDatos.php');
        $nrocuenta = $_POST['nrocuenta'];
        $pass = $_POST['pss'];
        $balance = $_POST['balance'];

        if(strlen($nrocuenta) == 10 && is_numeric($pass)){
            $newbalance = New balance();
            $newbalance->entradaDatos($nrocuenta,$pass,$balance);
            $newbalance->enviarBD();
            
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