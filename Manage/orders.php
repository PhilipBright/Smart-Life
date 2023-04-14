<?php 
   include('../Components/connect.php');
   include('../Components/AdminNavigation.php');

   $sql = $db->prepare("SELECT * FROM tbl_order");
$sql->execute();
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
   

<div class="mt-8 relative overflow-x-auto shadow-md ">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-2 py-3">
                    Order id
                </th>
                <th scope="col" class="px-2 py-3">
                    Customer id
                </th>
                <th scope="col" class="px-6 py-3">
                     Name
                </th>
                <th scope="col" class="px-6 py-3">
                     Email
                </th>
                <th scope="col" class="px-10 py-3">
                     Address
                </th>
                <th scope="col" class="px-6 py-3">
                     Phone
                </th>
                <th scope="col" class="px-6 py-3">
                    Postal Code
                </th>
                
                
                <th scope="col" class="px-6 py-3">
                    Total Price
                </th>
                <th scope="col" class="px-6 py-3">
                    Payment
                </th>
                <th scope="col" class="px-6 py-3">
                    Date
                </th>
                <th scope="col" class="px-6 py-3">
                    Details
                </th>
               
            </tr>
        </thead>
        <?php
        $previous_cus_for = null;
                  while ($data = $sql->fetch(PDO::FETCH_ASSOC)){
                                                    extract($data);
                          if ($cus_for !== $previous_cus_for) {                  
                                            ?>
        <tbody>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    <?php echo $order_id?>
                </th>
                <td class="px-6 py-4">
                <?php echo $cus_for?>
                </td>
                <td class="px-6 py-4">
                <?php echo $customer_name?>
                </td>
                <td class="px-6 py-4">
                <?php echo $customer_email ?>
                </td>
                <td class="px-6 py-4">
                <?php echo $customer_address ?>
                </td>
                <td class="px-6 py-4">
                <?php echo $customer_phone?>
                </td>
                <td class="px-6 py-4">
                <?php echo $postal_code ?>
                </td>
                <td class="px-6 py-4">
                <?php echo $order_total ?>
                </td>
                <td class="px-6 py-4">
                <?php echo $PaymentType ?>
                </td>
                <td class="px-6 py-4">
                <?php echo $order_date?>
                </td>
                <td class="px-6 py-4">
                <a href="orderDetails.php?order_id=<?php echo $order_id; ?>&user_id=<?php echo $cus_for; ?>">View</a>

                </td>
                
            </tr>
            
        </tbody>
        <?php $previous_cus_for = $cus_for; } } ?>
    </table>
</div>


<!-- Main modal -->
<div id="staticModal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-4xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Order Details
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="staticModal">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                </button>
            </div>
            <!-- Modal body -->
                           
<div class="relative overflow-x-auto">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-4 py-3">
                    Order id
                </th>
                <th scope="col" class="px-4 py-3">
                    Customer id
                </th>
                <th scope="col" class="px-6 py-3">
                    Product Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Qty
                </th>
                <th scope="col" class="px-6 py-3">
                    Discount
                </th>
                <th scope="col" class="px-6 py-3">
                    Price
                </th>
            </tr>
        </thead>
        <?php 
        $sql = $db->prepare("SELECT * FROM tbl_order WHERE cus_for = $cus_for");
        $sql->execute();
        while ($data = $sql->fetch(PDO::FETCH_ASSOC)){
                                                    extract($data); ?>
        <tbody>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-4 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    <?php echo $order_id ?>
                </th>
                <td class="px-4 py-4">
                <?php echo $cus_for ?>
                </td>
                <td class="px-6 py-4">
                <?php echo $order_product ?>
                </td>
                <td class="px-6 py-4">
                <?php echo $order_quantity ?>
                </td>
                <td class="px-6 py-4">
                <?php echo $discount ?>
                </td>
                <td class="px-6 py-4">
                <?php echo $order_price ?>
                </td>
            </tr>
            
        </tbody>
        <?php }?>
    </table>
</div>

            <!-- Modal footer -->
            <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                <button data-modal-hide="staticModal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">I accept</button>
                <button data-modal-hide="staticModal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Decline</button>
            </div>
        </div>
    </div>
</div>



</body>

</html>