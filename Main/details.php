<?php
include('./Navigation.php');
            $product_id = $_GET['product_id'];
            $sql = "SELECT * FROM tbl_products WHERE product_id = $product_id";
            $result = $db->prepare($sql);
            $result->execute();
            $row = $result->fetch(PDO::FETCH_ASSOC);
            $product_title = $row['product_title'];
            $product_price = $row['product_price'];
            $product_description = $row['product_description'];
            $product_image = $row['product_image_name'];
            $product_cat = $row['category_for'];
            $product_rating = $row['product_rating'];
            $product_qty = $row['product_qty'];
            
            ?>
<!-- Main modal -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        
    </style>
</head>
<body class="dark:bg-gray-900">
<div  class="flex justify-center items-center w-full h-screen p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] ">
    <div class="relative w-full h-full max-w-2xl md:h-auto">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-start justify-between p-2 border-b rounded-t dark:border-gray-600">
                      
                           
                <a href="./Shop.php" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="defaultModal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Close modal</span>
                </a>
            </div>
            <!-- Modal body -->
            <div class="p-6 flex">
                <div class="w-[45%] flex items-center">
                    <img src="../assets/<?php echo $product_image ?>" alt="" class="w-64 rounded xzoom" xoriginal='../assets/<?php echo $product_image ?>'>
                    
                </div>
                <div class="w-[55%] pl-5">
                <h3 class="text-3xl font-semibold text-gray-900 dark:text-white pb-3">
                           <?php echo $product_title; ?>
                           <span class=" bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ml-3"><?php echo $product_cat ?></span>

                           </h3>
                <p class="text-xl text-base leading-relaxed text-gray-500 dark:text-gray-100 pb-2">
               
                    <?php echo $product_description ?>
                </p>
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white pb-2">
                           <?php echo "$".$product_price; ?>
                           </h3>
                <div class="flex pb-1"><?php for($i = 1;$i <= $product_rating;$i++){
                                        echo'<svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>';
                                        } ?></div>
                 <div>
                <span class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 "><?php echo $product_qty." In Stock" ?></span>
                </div>
                <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400 pt-2">
                    Free Shipping to Every Countries & get 6 months warranty 
                </p>
                <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400 pt-1">
                    Resellers have to buy at least 5 Qty and get 15% discount 
                </p>
                </div>
               
                                    
            </div>
            <!-- Modal footer -->
            <div class="flex justify-end items-center p-4 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                <a href="./Shop.php" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Okay</a>
           
            </div>
        </div>
    </div>
</div>
<script src="./jquery.js"></script>
<script src="./script.js"></script>
<script src="./zoom.js"></script>
</body>
</html>

