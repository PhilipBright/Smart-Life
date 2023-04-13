<?php 
    include('./Navigation.php');
    // session_start();
    if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $postalcode = $_POST['postalcode'];
    $total = $_POST['total'];
   
    }
    else echo "error"
    
?>

<?php
// use Binance\API;

// require_once __DIR__ . './vendor/autoload.php';


// $api_key = 'FtaiRdZR4CNPnZitlrpLlmvnJp0eceRjoQdrQLkVjQu6pI6AaEwKrvg5iQUoPoQU';
// $secret_key = 'zslTFDkXx5ifPhRW6bIrWXxwcx69wkFnzYNKoWSiBPoMmkGgsphMtWcYjXbZYcoN';

// $binance = new Binance\API($api_key, $secret_key);

// $user_id = $_GET['user_id'];

// $address = $binance->createDepositAddress('BTC', $user_id);

// echo 'Please send your payment to the following address: '.$address['address'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="dark:bg-gray-900">

<!-- Modal toggle -->


<!-- Main modal -->
<div id="defaultModal" tabindex="-1" aria-hidden="true" class="flex justify-center items-center fixed top-0  right-0 z-50  w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
    <div class="relative w-full h-full max-w-2xl md:h-auto">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <h3 class="text-center mb-4 text-lg font-medium leading-none text-gray-900 dark:text-white pt-4">Invoice details</h3>
            <div class="flex flex-col items-start justify-evently p-4 border-b rounded-t dark:border-gray-600">
            
            <ol class="flex items-center w-full mb-4 sm:mb-5 ml-20 ">
    <li class="flex w-full items-center text-blue-600 dark:text-blue-500 after:content-[''] after:w-full after:h-1 after:border-b after:border-blue-100 after:border-4 after:inline-block dark:after:border-blue-800">
        <div class="flex items-center justify-center w-10 h-10 bg-blue-100 border rounded-full lg:h-12 lg:w-12 dark:bg-blue-800 shrink-0">
            <svg aria-hidden="true" class=" w-5 h-5 text-blue-600 lg:w-6 lg:h-6 dark:text-gray-100" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 2a1 1 0 00-1 1v1a1 1 0 002 0V3a1 1 0 00-1-1zM4 4h3a3 3 0 006 0h3a2 2 0 012 2v9a2 2 0 01-2 2H4a2 2 0 01-2-2V6a2 2 0 012-2zm2.5 7a1.5 1.5 0 100-3 1.5 1.5 0 000 3zm2.45 4a2.5 2.5 0 10-4.9 0h4.9zM12 9a1 1 0 100 2h3a1 1 0 100-2h-3zm-1 4a1 1 0 011-1h2a1 1 0 110 2h-2a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
        </div>
    </li>
    <li class="flex w-full items-center text-blue-600 dark:text-blue-500 after:content-[''] after:w-full after:h-1 after:border-b after:border-blue-100 after:border-4 after:inline-block dark:after:border-gray-500">
        <div class="flex items-center justify-center w-10 h-10 bg-blue-100 border rounded-full lg:h-12 lg:w-12 dark:bg-blue-800 shrink-0">
            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 lg:w-6 lg:h-6 dark:text-gray-100" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4z"></path><path fill-rule="evenodd" d="M18 9H2v5a2 2 0 002 2h12a2 2 0 002-2V9zM4 13a1 1 0 011-1h1a1 1 0 110 2H5a1 1 0 01-1-1zm5-1a1 1 0 100 2h1a1 1 0 100-2H9z" clip-rule="evenodd"></path></svg>
        </div>
    </li>
    <li class="flex items-center w-full">
        <div class="flex items-center justify-center w-10 h-10 bg-gray-100 border rounded-full lg:h-12 lg:w-12 dark:bg-gray-700 shrink-0">
            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 lg:w-6 lg:h-6 dark:text-gray-100" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path><path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm9.707 5.707a1 1 0 00-1.414-1.414L9 12.586l-1.293-1.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
        </div>
    </li>
</ol>

<div class="w-[100%] flex justify-center text-center">
<form action="Confirm.php" method="POST">
    
<div class="mt-4 grid gap-4 mb-4">
<div>
<label for="" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white text-start">Choose Payment Type</label>
<select id="type" onchange="Credit()" name="payment" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
  <option selected value="None">None</option>
  <option value="COD">COD</option>
  <option value="Credit" >Credit Card</option>
  <option value="Digital" >Digital Currency</option>
  <option value="Crypto">Crypto Currency</option>
  
</select>
</div>
    
    <div id="Display"></div>
    
              
                              

    </div>
    <input type="hidden" name="username" value="<?php echo $username ?>">
<input type="hidden" name="email" value="<?php echo $email ?>">
<input type="hidden" name="address" value="<?php echo $address ?>">
<input type="hidden" name="phone" value="<?php echo $phone ?>">
<input type="hidden" name="postalcode" value="<?php echo $postalcode ?>">
<input type="hidden" name="total" value="<?php echo $total?>">

    <button id="P_btn" type="submit" name="Psubmit" class="mt-8 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        Next Step
    </button>
</form>
</div>
        </div>
    </div>
</div>

    
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/datepicker.min.js"></script>
<script>
    function Credit() {
        var selected = document.getElementById("type").value;
        if(selected == "Credit"){
            document.querySelector('#P_btn').disabled = false;
        document.getElementById("Display").innerHTML =  `<div class="">
            <label for="Card" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white text-start">Credit Card Number</label>
            <input type="text" name="creditCard"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="**** **** **** ****" required="">
        </div>
        <div class="flex">
        <div class="mr-8">
            <label for="date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white text-start">Expire Date</label>
            <input type="date" name="date" id="date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="MM/YY" required="">
        </div>
        <div class="CVV">
            <label for="CVV" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white text-start">CVV</label>
            <input type="text" name="CVV" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="***" required="">
        </div>  
        </div> `
    }
    else if(selected == "Digital"){
        document.querySelector('#P_btn').disabled = false;
        document.getElementById("Display").innerHTML =  `<div class="flex mt-4">
    <div class="flex items-center ">
    <input type="checkbox" name="dPay" value="Kpay" class="rounded-lg" >
        <img src="../assets/Kpay.svg" alt="" class="w-16 h-16 rounded-lg ml-4" >
    </div>
    <div class="flex items-center ml-16">
    <input type="checkbox" name="dPay" value="Wave" class="rounded-lg" >
        <img src="../assets/wave.png" alt="" class="w-16 h-16 rounded-lg ml-4">
    </div>
    <div class="flex items-center ml-16">
        <input type="checkbox" name="dPay" value="AYA" class="rounded-lg" >
        <img src="../assets/aya.jpeg" alt="" class="w-16 h-16 rounded-lg ml-4">
    </div>
    </div>`;
    }
    else if(selected == "Crypto"){
        document.querySelector('#P_btn').disabled = false;
        document.getElementById("Display").innerHTML =  `<div class="flex mt-4">
    <div class="flex items-center ">
    <input type="checkbox" name="cPay" value="BYBIT" class="rounded-lg" >
        <img src="../assets/bybit.png" alt="" class="w-16 h-16 rounded-lg ml-4" >
    </div>
    <div class="flex items-center ml-16">
    <input type="checkbox" name="cPay" value="Binance" class="rounded-lg" >
        <img src="../assets/binance.png" alt="" class="w-16 h-16 rounded-lg ml-4">
    </div>
    
    </div>`;
    }
    else if(selected == "COD"){
        document.querySelector('#P_btn').disabled = false;
        document.getElementById("Display").innerHTML = " ";
    }
    else if(selected == "None"){
        
        document.querySelector('#P_btn').disabled = true;
    document.getElementById("Display").innerHTML = " ";
    
    }

    }
</script>


</body>
</html>