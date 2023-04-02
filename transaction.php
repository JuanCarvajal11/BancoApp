<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>| Transaction |</title>
</head>
<body class="min-h-[100vh] flex justify-center items-center">
    <!-- New User Form -->
    <main class="w-[380px] h-[600px] bg-black/50 rounded-[10px] text-white/100 shadow-2xl border-1 border-black shadow-black mr-[50px]">
        <header class="flex gap-3 justify-center items-center pb-5 mt-16 text-">
            <h1 class="text-3xl font-bold">Transaction</h1>
        </header>
    <div>
        <form action="db/Transaction/procesarTransaction.php" method="post" class="w-[380px] h-[400px] rounded-[10px] text-white/100 flex flex-col items-center">
            <input type="number" name="cuenta1" id="InputName" placeholder="Numero de cuenta de envio" class="w-[300px] h-[40px] text-black rounded-lg"><br>
            <input type="password" name="contra" id="InputName" placeholder="Contraseña" class="w-[300px] h-[40px] text-black rounded-lg"><br>
            <input type="number" name="cuenta2" id="InputName" placeholder="Numero de cuenta recibe" class="w-[300px] h-[40px] text-black rounded-lg"><br>
            <input type="number" name="valor" id="InputLastname" placeholder="Monto a enviar" class="w-[300px] h-[40px] text-black rounded-lg"><br>
            
            <br>
            <input type="submit" name="submit" class="bg-gray-600 w-[300px] h-[50px] font-ldbo text-center" value="Enviar"></input><br>
        </form>
        <button  class="bg-gray-600 w-[100px] h-[30px] font-ldbo text-center ml-[40px]" onclick="location.href='index.php'">Go Back</button> <br>
        
    </div>
    </main>
    <script src="assets/js/talwind-3.2.4.js"></script>
    <script src="https://kit.fontawesome.com/c2181e6c4d.js" crossorigin="anonymous"></script>
</body>

</html>
