<?php 
include('../Components/connect.php');
    include('../Components/AdminNavigation.php');
?>
<?php
 
 $Bardata = array( 
     array("y" => 3373.64, "label" => "Germany" ),
     array("y" => 2435.94, "label" => "France" ),
     array("y" => 1842.55, "label" => "China" ),
     array("y" => 1828.55, "label" => "Russia" ),
     array("y" => 1039.99, "label" => "Switzerland" ),
     array("y" => 765.215, "label" => "Japan" ),
     array("y" => 612.453, "label" => "Netherlands" )
 );
  
 ?>
 <?php 
    $sql = $db->prepare("SELECT * FROM tbl_products");
    $sql->execute();
    $total_quantity = 0;
    while($data = $sql->fetch(PDO::FETCH_ASSOC)){
        extract($data);
        $total_left += $product_qty;
    }
    
 ?>
 <?php 
    $sql = $db->prepare("SELECT * FROM tbl_products");
    $sql->execute();
    $total_quantity = 0;
    while($data = $sql->fetch(PDO::FETCH_ASSOC)){
        extract($data);
        $total_product += $initial_qty;
    }
    
 ?>
 <?php 
    $sql = $db->prepare("SELECT * FROM tbl_order");
    $sql->execute();
    $total_sale = 0;
    while($data = $sql->fetch(PDO::FETCH_ASSOC)){
        extract($data);
        $total_sale += $order_quantity;
    }
    
    
 ?>
 <?php 
    // $sql = $db->prepare("SELECT * FROM tbl_products");
    // $sql->execute();
    // $num_products = $sql->rowCount();
    
 ?>
  <?php 
    $sql = $db->prepare("SELECT * FROM tbl_category");
    $sql->execute();
    $num_cat = $sql->rowCount();
    
 ?>
 <?php
    $percentage = ($total_sale/ $total_product) * 100

 ?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
        rel="stylesheet" />
    <title>Document</title>
  
    <script>
window.onload = function() {

 var barchart = new CanvasJS.Chart("barContainer", {
    
     animationEnabled: true,
     theme:"dark2",
     backgroundColor: "#1f2937",
     
     title:{
         text: "Gold Reserves",
        
     },
     axisY: {
         title: "Gold Reserves (in tonnes)"
     },
     data: [{
         type: "column",
         yValueFormatString: "#,##0.## tonnes",
         dataPoints: <?php echo json_encode($Bardata, JSON_NUMERIC_CHECK); ?>
     }]
 });
 barchart.render();
  
 }
</script>

</head>
<body class="dark:bg-gray-900">
<main class="">
                <div class="w-screen h-screen grid mb-4  px-8  dark:bg-gray-900 dark:text-white">

                    <div class="grid grid-cols-12 gap-6">
                        <div class="grid grid-cols-12 col-span-12 gap-6 xxl:col-span-9">
                            <div class="col-span-12 mt-4">
                                <div class="flex items-center h-10 intro-y">
                                    <h2 class="mr-5 text-lg font-medium truncate">Dashboard</h2>
                                </div>
                                <div class="grid grid-cols-12 gap-6 mt-4">
                                    <a class="transform  hover:scale-105 transition duration-300 shadow-xl rounded-lg col-span-12 sm:col-span-6 xl:col-span-3 intro-y dark:bg-gray-800 bg-white"
                                        href="#">
                                        <div class="p-5">
                                            <div class="flex justify-between">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-blue-400"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                                                </svg>
                                                <div
                                                    class="bg-green-500 rounded-full h-6 px-2 flex justify-items-center text-white font-semibold text-sm">
                                                    <span class="flex items-center">30%</span>
                                                </div>
                                            </div>
                                            <div class="ml-2 w-full flex-1">
                                                <div>
                                                    <div class="mt-3 text-3xl font-bold leading-8"><?php echo $total_product  ?></div>

                                                    <div class="mt-1 text-base text-gray-600">Total Products</div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="transform  hover:scale-105 transition duration-300 shadow-xl rounded-lg col-span-12 sm:col-span-6 xl:col-span-3 intro-y dark:bg-gray-800 bg-white"
                                        href="#">
                                        <div class="p-5">
                                            <div class="flex justify-between">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-yellow-400"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                                                </svg>
                                                <div
                                                    class="bg-red-500 rounded-full h-6 px-2 flex justify-items-center text-white font-semibold text-sm">
                                                    <span class="flex items-center">30%</span>
                                                </div>
                                            </div>
                                            <div class="ml-2 w-full flex-1">
                                                <div>
                                                    <div class="mt-3 text-3xl font-bold leading-8"><?php echo $num_cat ?></div>

                                                    <div class="mt-1 text-base text-gray-600">Total Category</div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="transform  hover:scale-105 transition duration-300 shadow-xl rounded-lg col-span-12 sm:col-span-6 xl:col-span-3 intro-y dark:bg-gray-800 bg-white"
                                        href="#">
                                        <div class="p-5">
                                            <div class="flex justify-between">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-pink-600"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z" />
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z" />
                                                </svg>
                                                <div
                                                    class="bg-yellow-500 rounded-full h-6 px-2 flex justify-items-center text-white font-semibold text-sm">
                                                    <span class="flex items-center"><?php echo $percentage."%" ?></span>
</div>
                                            </div>
                                            <div class="ml-2 w-full flex-1">
                                                <div>
                                                    <div class="mt-3 text-3xl font-bold leading-8"><?php echo $total_sale ?></div>

                                                    <div class="mt-1 text-base text-gray-600">Product Sales</div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="transform  hover:scale-105 transition duration-300 shadow-xl rounded-lg col-span-12 sm:col-span-6 xl:col-span-3 intro-y dark:bg-gray-800 bg-white"
                                        href="#">
                                        <div class="p-5">
                                            <div class="flex justify-between">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-green-400"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z" />
                                                </svg>
                                                <div
                                                    class="bg-blue-500 rounded-full h-6 px-2 flex justify-items-center text-white font-semibold text-sm">
                                                    <span class="flex items-center">30%</span>
                                                </div>
                                            </div>
                                            <div class="ml-2 w-full flex-1">
                                                <div>
                                                    <div class="mt-3 text-3xl font-bold leading-8"><?php echo $total_left; ?></div>

                                                    <div class="mt-1 text-base text-gray-600">Stock Left</div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-span-12 mt-5">
                                <div class="grid gap-2 grid-cols-1 lg:grid-cols-2 ">
                                   
                                </div>
                            </div>
                          
                        </div>
                    </div>
                    <div class="w-[50%] dark:bg-gray-800 rounded-lg">
                    <div class="m-8" id="barContainer" style="height: 370px; width: 90%; border-radius:10px;"></div>
                    </div>
                    </div>
                    
                </div>
            </main>

            
            <script src="https://cdn.tailwindcss.com"></script>
            <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
            <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
           
</body>
</html>
