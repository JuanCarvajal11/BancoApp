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
            title: 'Acaba de registrar un nuevo balance '
        })
    }


</script>
<?php 
    class balance {

        protected $nrocuenta = "";
        protected $pass = "";
        protected $balance =  "";
        private $siExisten = "";
        private $subirDatos = "";
        private $ejecutar = "";
        function entradaDatos($cuenta,$contra,$balance){
            $this->nrocuenta = $cuenta;
            $this->pass = $contra;
            $this->balance = $balance;

        }

        function enviarBD(){

            include_once('../conexion.php');

            $this->siExisten = mysqli_query($conexionbd, "SELECT * FROM users WHERE nrocuenta = '$this->nrocuenta' and contraseña = '$this->pass'");

            if(mysqli_num_rows($this->siExisten) > 0){

                $this->subirDatos = "UPDATE users SET valorencuenta = valorencuenta + '$this->balance'  WHERE nrocuenta = '$this->nrocuenta' and contraseña = '$this->pass'";
                $this->ejecutar = mysqli_query($conexionbd, $this->subirDatos);
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