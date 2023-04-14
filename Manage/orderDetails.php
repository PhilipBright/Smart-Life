<?php 
    include('../Components/connect.php');
    include('../Components/AdminNavigation.php');
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
<div  class="mt-[3rem] flex justify-center items-center z-50  w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-4xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-start justify-start p-4 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Order Details
                </h3>
                
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
        $order_id = $_GET['order_id'];
        $user_id = $_GET['user_id'];
        $sql = $db->prepare("SELECT * FROM tbl_order WHERE cus_for = $user_id");
        $sql->execute();
       
        while ($data = $sql->fetch(PDO::FETCH_ASSOC)){
                                                    extract($data);
                                                    ?>
        <tbody>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-4 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    <?php echo $data['order_id'] ?>
                </th>
                <td class="px-4 py-4">
                <?php echo $data['cus_for']  ?>
                </td>
                <td class="px-6 py-4">
                <?php echo $data['order_product']  ?>
                </td>
                <td class="px-6 py-4">
                <?php echo $data['order_quantity']  ?>
                </td>
                <td class="px-6 py-4">
                <?php echo $data['discount']  ?>
                </td>
                <td class="px-6 py-4">
                <?php echo $data['order_price']  ?>
                </td>
            </tr>
            
        </tbody>
        <?php }?>
    </table>
</div>

            <!-- Modal footer -->
            <div class="flex justify-end items-center p-4 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                <a href="./orders.php"><button type="button" class=" text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Okay</button></a>
            </div>
        </div>
    </div>
</div>
</body>
</html>