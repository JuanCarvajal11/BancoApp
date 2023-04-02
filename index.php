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
    <main class="w-[380px] h-[400px] bg-black/50 rounded-[10px] text-white/100 shadow-2xl border-1 border-black shadow-black">
        <header class="flex gap-3 justify-center items-center pb-5 mt-16 text-">
            <h1 class="text-3xl font-bold">ACCIONES</h1>
        </header>
    <div class="w-[380px] h-[300px] rounded-[10px] text-white/100 flex flex-col items-center">
            <button name="newuser" id="InputUser" value="NewUser" class="bg-gray-600 w-[300px] h-[50px] font-ldbo text-center" onclick="location.href='newUser.php'">NewUser</button> <br>
            <button name="transaction" id="InputTransaction" value="NewUser" class="bg-gray-600 w-[300px] h-[50px] font-ldbo text-center" onclick="location.href='account.php'">Accounts</button> <br>
            <button name="newuser" id="InputUser" value="NewUser" class="bg-gray-600 w-[300px] h-[50px] font-ldbo text-center" onclick="location.href='transaction.php'">Transaction</button> <br>
    </div>
    </main>
    <script src="assets/js/talwind-3.2.4.js"></script>
    <script src="https://kit.fontawesome.com/c2181e6c4d.js" crossorigin="anonymous"></script>
</body>

</html>
