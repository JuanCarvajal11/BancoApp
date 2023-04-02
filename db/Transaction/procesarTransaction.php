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
        include_once('insertarTransaction.php');
        $nrocuenta1 = $_POST['cuenta1'];
        $pass = $_POST['contra'];
        $nrocuenta2 = $_POST['cuenta2'];
        $balance = $_POST['valor'];

        if(strlen($nrocuenta1) == 10 && is_numeric($pass) && strlen($nrocuenta2) == 10){
            $newTransaction = new transaction();
            $newTransaction->entradaDatos($nrocuenta1,$pass,$nrocuenta2,$balance);
            $newTransaction->enviarBD();
            
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