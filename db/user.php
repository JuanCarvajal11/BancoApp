<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script language="JavaScript">
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
            title: 'Usuario Registrado Correctamente'
        })
    }

    function denegar() {
        Swal.fire({
            icon: 'error',
            title: 'Lo siento...',
            text: 'Algun valor no coincide con lo pedido',
            showConfirmButton: false
        })
    }

    function cuentaError() {
        Swal.fire({
            icon: 'error',
            title: 'Lo siento...',
            text: 'Ya existe una cuenta viculada a este numero de tarjeta',
            showConfirmButton: false
        })
    }
</script>
<script language="JavaScript">
    function redireccionar() {
        setTimeout("window.location='../index.php';", 3000);
    }
</script>
<script language="JavaScript">
    function redevolver() {
        setTimeout("window.location = '../newUser.php';", 3000);
    }
</script>
<?php
class Loguin{

    private $name = "";
    private $lastname = "";
    private $nrocuenta ="";
    private $pass = "";
    protected $query = "";
    protected $ejecutar = "";

    private $verificar_correo = "";

    function entradaDatos($nombre,$apellido,$cuenta,$contra){
            $this->name = $nombre;
            $this->lastname = $apellido;
            $this->nrocuenta = $cuenta;
            $this->pass = $contra;
    }

    function castrar(){

        //Limpiar Espacios
        $this->name = trim($this->name);
        $this->lastname = trim($this->lastname);
        $this->pass = trim($this->pass);

        //Limpiar caracteres especiales
        $this->name = preg_replace('([^A-Za-z0-9])', '', $this->name);
        $this->lastname = preg_replace('([^A-Za-z0-9])', '', $this->lastname);
    }
    function CreateUser(){
        include_once('conexion.php');
            // if ($conexionbd) {
            //     echo'Conectado a la base de datos' ;
            // } else {
            //     echo' NO Conectado a la base de datos' ;
            // }

            $this->verificar_correo = mysqli_query($conexionbd, "SELECT * FROM users WHERE nrocuenta ='$this->nrocuenta'");

            if(mysqli_num_rows($this->verificar_correo) > 0 ){
                echo "<font color=\"white\">b</font>";
                echo "<script>";
                echo "cuentaError();";
                echo "</script>";
                echo "<script>";
                echo "redevolver();";
                echo "</script>";
                exit();
            }else{
                $this->query = "INSERT INTO users(firstname,lastname,nrocuenta,contraseña,valorencuenta)
                VALUES('$this->name','$this->lastname','$this->nrocuenta','$this->pass', '0')";


                $this->ejecutar = mysqli_query($conexionbd, $this->query);

                mysqli_close($conexionbd);

                echo "<font color=\"white\">b</font>";
                echo "<script>";
                echo "comprobar();";
                echo "</script>";
                echo "<script>";
                echo "redireccionar();";
                echo "</script>";
                exit();

            }
    }

}