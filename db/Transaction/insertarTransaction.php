<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function denegar() {
        Swal.fire({
            icon: 'error',
            title: 'Lo siento...',
            text: 'Esta accion no se puede realizar',
            showConfirmButton: false
        })
    }

    function redireccionar() {
        setTimeout("window.location='../../index.php';", 3000);
    }

    function comprobar() {
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-center',
            showConfirmButton: false,
            timer: 3000,
            color: '#000000',
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        })

        Toast.fire({
            icon: 'success',
            title: 'Acaba de realizar una transferencia '
        })
    }


</script>
<?php 
    class transaction {

        protected $nrocuenta1 = "";
        protected $pass = "";
        protected $nrocuenta2 = "";
        protected $balance =  "";
        private $siExisten = "";
        private $siExisten2 = "";
        private $subirDatos = "";
        private $subirDatos2 = "";
        private $ejecutar = "";
        private $ejecutar2 = "";

        function entradaDatos($cuenta1,$contra,$cuenta2,$balance){
            $this->nrocuenta1 = $cuenta1;
            $this->pass = $contra;
            $this->nrocuenta2 = $cuenta2;
            $this->balance = $balance;
        }

        function enviarBD(){

            include_once('../conexion.php');

            $this->siExisten = mysqli_query($conexionbd, "SELECT * FROM users WHERE nrocuenta = '$this->nrocuenta1' AND contraseña = '$this->pass' AND valorencuenta >= '$this->balance' ");
            $this->siExisten2 = mysqli_query($conexionbd, "SELECT * FROM users WHERE nrocuenta = '$this->nrocuenta2' ");

            if(mysqli_num_rows($this->siExisten) > 0 && mysqli_num_rows($this->siExisten2) > 0 ){

                $this->subirDatos = "UPDATE users SET valorencuenta = valorencuenta - '$this->balance'  WHERE nrocuenta = '$this->nrocuenta1' and contraseña = '$this->pass'";
                $this->subirDatos2= "UPDATE users SET valorencuenta = valorencuenta + '$this->balance' WHERE nrocuenta = '$this->nrocuenta2'";

                $this->ejecutar = mysqli_query($conexionbd, $this->subirDatos);
                $this->ejecutar2 = mysqli_query($conexionbd, $this->subirDatos2);
                echo "<font color=\"white\">b</font>";
                echo "<script>";
                echo "comprobar();";
                echo "</script>";
                echo "<script>";
                echo "redireccionar();";
                echo "</script>";
            }else{
                echo "<font color=\"white\">b</font>";
                echo "<script>";
                echo "denegar();";
                echo "</script>";
                echo "<script>";
                echo "redireccionar();";
                echo "</script>";
            }
        }

    }

?>