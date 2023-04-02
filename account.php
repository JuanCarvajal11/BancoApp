<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>| Login |</title>
</head>
<body class="min-h-[100vh] flex justify-center items-center">
    <!-- New User Form -->
    <main class="w-[380px] h-[500px] bg-black/50 rounded-[10px] text-white/100 shadow-2xl border-1 border-black shadow-black mr-[50px]">
        <header class="flex gap-3 justify-center items-center pb-5 mt-16 text-">
            <h1 class="text-3xl font-bold">Insert balance</h1>
        </header>
    <div>
        <form action="db/balance/procesarDatos.php" method="post" class="w-[380px] h-[300px] rounded-[10px] text-white/100 flex flex-col items-center">
            <input type="number" maxlength="10" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"  name="nrocuenta" id="InputNrocuenta" placeholder="Account Number" class="w-[300px] h-[40px] text-black rounded-lg"><br>
            <input type="password" name="pss" id="InputPassword" placeholder="Password(Only Numbers)" maxlength="4" class="w-[300px] h-[40px] text-black rounded-lg" maxlength="4" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" ><br>
            <input type="number" name="balance" id="InputNrocuenta" placeholder="Insert Balance" class="w-[300px] h-[40px] text-black rounded-lg"><br>
            <br>
            <input type="submit" name="submit" class="bg-gray-600 w-[300px] h-[50px] font-ldbo text-center" value="Enviar"></input><br>
        </form>
        <button name="newuser" id="InputUser" value="NewUser" class="bg-gray-600 w-[100px] h-[30px] font-ldbo text-center ml-[40px] " onclick="location.href='index.php'">Go Back</button> <br>
        
    </div>
    </main>
    <script src="assets/js/talwind-3.2.4.js"></script>
    <script src="https://kit.fontawesome.com/c2181e6c4d.js" crossorigin="anonymous"></script>
</body>

</html>
