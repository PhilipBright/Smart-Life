<?php 
include('../Components/connect.php');
    include('./Navigation.php');
    session_start();
    if(isset($_SESSION['U_email'])){
        $cusMail = $_SESSION['U_email'];
    };
   
    
   
    if(isset($_POST['Psubmit'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $postalcode = $_POST['postalcode'];
    $paymentType = $_POST['payment'];
    $totalAmount = $_POST['total'];
    
    
    switch($paymentType){
        case 'COD': $payment = 'Cash on Delivery';
        break;
        case 'Credit': $payment = $_POST['creditCard'];
        break;
        case 'Digital': $payment = $_POST['dPay'];
        break;
        case 'Crypto': $payment = $_POST['cPay'];
        break;
    }
   

    }
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
<div id="defaultModal"  class="pt-[8%] pb-[5%] flex justify-center items-center  z-50  w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
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
    <li class="flex w-full items-center text-blue-600 dark:text-blue-500 after:content-[''] after:w-full after:h-1 after:border-b after:border-blue-100 after:border-4 after:inline-block dark:after:border-blue-800">
        <div class="flex items-center justify-center w-10 h-10 bg-blue-100 border rounded-full lg:h-12 lg:w-12 dark:bg-blue-800 shrink-0">
            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 lg:w-6 lg:h-6 dark:text-gray-100" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4z"></path><path fill-rule="evenodd" d="M18 9H2v5a2 2 0 002 2h12a2 2 0 002-2V9zM4 13a1 1 0 011-1h1a1 1 0 110 2H5a1 1 0 01-1-1zm5-1a1 1 0 100 2h1a1 1 0 100-2H9z" clip-rule="evenodd"></path></svg>
        </div>
    </li>
    <li class="flex items-center w-full">
    <div class="flex items-center justify-center w-10 h-10 bg-blue-100 border rounded-full lg:h-12 lg:w-12 dark:bg-blue-800 shrink-0">
            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 lg:w-6 lg:h-6 dark:text-gray-100" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path><path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm9.707 5.707a1 1 0 00-1.414-1.414L9 12.586l-1.293-1.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
        </div>
    </li>
</ol>

<div class="w-[100%] flex justify-center ">
<!-- component -->
<section class="w-[100%] dark:bg-gray-800">
 <div class="max-w-5xl mx-auto  dark:bg-gray-800">
  <article class="overflow-hidden">
   <div class="dark:bg-gray-700 rounded-b-md">
    <div class="p-9">
     <div class="space-y-6 text-gray-200">
      <img class="object-cover w-16 rounded" src="../assets/logo.svg" />

      <p class="text-xl font-extrabold tracking-tight uppercase font-body">
       Smart Life
      </p>
     </div>
    </div>
    <div class="px-9">
     <div class="flex w-full">
        <div>
            
        </div>
      <div class="">
       <div class="text-sm font-normal text-slate-300">
        
        <p ><?php echo $username ?></p>
        <p class="pt-1"><?php echo $cusMail ?></p>
        <p class="pt-1"><?php echo $address ?></p>
        <p class="pt-1"><?php echo $phone ?></p>
        <p class="pt-1"><?php echo $postalcode ?></p>
        <p class="pt-1"><?php echo $paymentType ?></p>
        <p class="pt-1"><?php echo $payment ?></p>
       </div>
      
      </div>
     </div>
    </div>

    <div class="px-9">
     <div class="flex flex-col mx-0 mt-8">
      <table class="min-w-full divide-y divide-slate-100">
       <thead>
        <tr>
         <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-normal text-slate-100 sm:pl-6 md:pl-0">
          Name
         </th>
         <th scope="col" class="hidden py-3.5 px-3 text-right text-sm font-normal text-slate-100 sm:table-cell">
          Quantity
         </th>
         <th scope="col" class="hidden py-3.5 px-3 text-right text-sm font-normal text-slate-100 sm:table-cell">
          Discount
         </th>
         <th scope="col" class="py-3.5 pl-3 pr-4 text-right text-sm font-normal text-slate-100 sm:pr-6 md:pr-0">
          Amount
         </th>
        </tr>
       </thead>
       <tbody>
       <?php 
        if (isset($_SESSION['cart'])){
            echo $current_date = date('Y-m-d');
            foreach ($_SESSION['cart'] as $key => $value) {
               
            ?>
        <tr class="border-b border-slate-200">
         <td class="py-4 pl-4 pr-3 text-sm sm:pl-6 md:pl-0">
          <div class="font-medium text-slate-100"><?php echo $item = $value['name'] ?></div>
          <div class="mt-0.5 text-slate-300 ">
           1 unit at <?php echo $value['price'] ?>
          </div>
         </td>
         <td class="hidden px-3 py-4 text-sm text-right text-slate-300 sm:table-cell">
         <?php echo $qty = $value['Quantity'] ?>
         </td>
         <td class="hidden px-3 py-4 text-sm text-right text-slate-300 sm:table-cell">
          <?php if($value['Quantity']>5){
                 $discount = 0.15;
                 echo "15%";
          } else  $discount = 0.05;
          echo "5%";
          ?>
         </td>
         <td class="py-4 pl-3 pr-4 text-sm text-right text-slate-300 sm:pr-6 md:pr-0">
         <?php $ePrice = $value['price']; echo  "$".$total = $value['price']*$value['Quantity']?>
         </td>
        </tr>
        <?php }} ?>
        

        <!-- Here you can write more products/tasks that you want to charge for-->
       </tbody>
       <tfoot>
        <tr>
         <th scope="row" colspan="3" class="hidden pt-6 pl-6 pr-3 text-sm font-light text-right text-slate-300 sm:table-cell md:pl-0">
          Subtotal
         </th>
         <th scope="row" class="pt-6 pl-4 pr-3 text-sm font-light text-left text-slate-500 sm:hidden">
          Subtotal
         </th>
         <td class="pt-6 pl-3 pr-4 text-sm text-right text-slate-300 sm:pr-6 md:pr-0">
         <?php echo "$".$totalAmount ?>
         </td>
        </tr>
        <tr>
         <th scope="row" colspan="3" class="hidden pt-6 pl-6 pr-3 text-sm font-light text-right text-slate-300 sm:table-cell md:pl-0">
          Discount
         </th>
         <th scope="row" class="pt-6 pl-4 pr-3 text-sm font-light text-left text-slate-300 sm:hidden">
          Discount
         </th>
         <?php 
            $discount_price = $value['price'] - ($discount * $value['price']);  
            $totalDiscount = $totalAmount * $discount;
         ?>
         <td class="pt-6 pl-3 pr-4 text-sm text-right text-slate-300 sm:pr-6 md:pr-0">
          <?php echo "$".$totalDiscount ?>
         </td>
        </tr>
        
        <tr>
         <th scope="row" colspan="3" class="hidden pt-4 pl-6 pr-3 text-xl font-bold text-right text-slate-100 sm:table-cell md:pl-0">
          Total
         </th>
         <th scope="row" class="pt-4 pl-4 pr-3 text-xl font-bold text-left text-slate-700 sm:hidden">
          Total
         </th>
         <td class="pt-4 pl-3 pr-4 text-xl font-bold text-right text-slate-100 sm:pr-6 md:pr-0">
          <?php
            echo "$".$TotalMoney = $totalAmount - $totalDiscount;
            
            
          ?>
         </td>
        </tr>
       </tfoot>
      </table>
     </div>
    </div>

   
   </div>
  </article>
 </div>
</section>
</div>

        </div>
        <form action="ManageConfirm.php" method="POST">
        <input type="hidden" name="username" value="<?php echo $username ?>">
<input type="hidden" name="email" value="<?php echo $cusMail ?>">
<input type="hidden" name="address" value="<?php echo $address ?>">
<input type="hidden" name="phone" value="<?php echo $phone ?>">
<input type="hidden" name="postalcode" value="<?php echo $postalcode ?>">
<input type="hidden" name="payment" value="<?php echo $payment ?>">
<input type="hidden" name="totalMoney" value="<?php echo $TotalMoney ?>">
<input type="hidden" name="itemName" value="<?php echo $item ?>">
<input type="hidden" name="itemqty" value="<?php echo $qty ?>">
<input type="hidden" name="date" value="<?php echo $current_date ?>">
<input type="hidden" name="discount" value="<?php echo $discount ?>">
<?php 
     $sql = $db->prepare("SELECT * FROM tbl_users WHERE user_email = :email");
     $sql->bindValue(':email', $cusMail, PDO::PARAM_STR);
     $sql->execute();
     $data = $sql->fetch(PDO::FETCH_ASSOC);
     extract($data);
     $cus_for = $user_id;

   
?>
<input type="hidden" name="cus_for" value="<?php echo $cus_for ?>">
<div class="w-full flex justify-end">
<button type="submit" name="Csubmit" class=" m-4 mr-4 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
       Confirm
    </button>
    </div>
</form>
    </div>
</div>
</div>

    


</body>
</html>