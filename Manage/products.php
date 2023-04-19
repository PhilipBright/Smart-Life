<?php
include('../Components/connect.php');
include('../Components/AdminNavigation.php');
$sql = $db->prepare("SELECT * FROM tbl_products");
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

    <section class="w-screen h-screen bg-gray-50 dark:bg-gray-900 py-3 sm:py-5">
        <div class="px-4 mx-auto max-w-screen-2xl lg:px-12">
            <div class="relative overflow-hidden bg-white shadow-md dark:bg-gray-800 sm:rounded-lg">
                <div class="flex flex-col px-4 py-3 space-y-3 lg:flex-row lg:items-center lg:justify-between lg:space-y-0 lg:space-x-4">
                    <div class="flex items-center flex-2 space-x-4">
                        <h5>
                        <?php 
    $sql = $db->prepare("SELECT * FROM tbl_products");
    $sql->execute();
    $num_products = $sql->rowCount();
    
 ?>
                            <span class="text-gray-500">All Products:</span>
                            <span class="dark:text-white"><?php echo $num_products ?></span>
                        </h5>
                        

                    </div>

                    <div class="flex flex-col flex-shrink-0 space-y-3 md:flex-row md:items-center lg:justify-end md:space-y-0 md:space-x-3">
                        <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" type="button" class="flex items-center justify-center px-4 py-2 text-sm font-medium text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">
                            <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path clip-rule="evenodd" fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                            </svg>
                            Add new product
                        </button>
                        
                   

                    </div>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-2 py-3">Product ID</th>
                                <th scope="col" class="px-4 py-3">Image</th>
                                <th scope="col" class="pl-12 py-3">Name</th>
                                <th scope="col" class="px-2 py-3">Category</th>
                                <th scope="col" class="px-8 py-3">Description</th>

                                <th scope="col" class="px-8 py-3">Rating</th>
                                <th scope="col" class="px-8 py-3">Stock Qty</th>

                                <th scope="col" class="px-4 py-3">Price</th>
                                <th scope="col" class="px-4 py-3">Update</th>
                                <th scope="col" class="px-4 py-3">Delete</th>
                            </tr>
                        </thead>
                        <?php
                                                while ($data = $sql->fetch(PDO::FETCH_ASSOC)){
                                                    extract($data);
                                                
                                            ?>
                        <tbody>
                            <tr class="border-b dark:border-gray-600 hover:bg-gray-100 dark:hover:bg-gray-700">
                                <td class="px-4 py-2">
                                    <span class="bg-primary-100 text-primary-800 text-xs font-medium px-2 py-0.5 rounded dark:bg-primary-900 dark:text-primary-300"><?php echo $product_id;?></span>
                                </td>
                                <th scope="row" class="flex items-center px-4 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <img src="../assets/<?php echo $product_image_name ?>" alt="" class="w-auto h-8 mr-3">

                                </th>

                                <th class="px-4 py-2">
                                    <span class="bg-primary-100 text-primary-800 text-xs font-medium px-2 py-0.5 rounded dark:bg-primary-900 dark:text-primary-300"><?php echo $product_title ?></span>
                                </th>
                                <th class="px-4 py-2">
                                    <span class="bg-primary-100 text-primary-800 text-xs font-medium px-2 py-0.5 rounded dark:bg-primary-900 dark:text-primary-300"><?php echo $category_for ?></span>
                                </th>
                                <th class="px-4 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <div class="w-32 flex items-center truncate">
                                        <?php echo $product_description ?>

                                    </div>
                                </th>

                                <th class="px-4 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <div class="flex items-center">
                                                  
                                    <?php for($i = 1;$i <= $product_rating;$i++){
                                        echo'<svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>';
                                        } ?>
                                        
                                        
                                    </div>
                                </th>
                                <th class="px-12 py-2"><?php echo $product_qty ?></th>

                                <th class="px-4 py-2"><?php echo "$".$product_price ?></th>
                                <th class="px-4 py-3  ">
                                   
                                    <div class=" z-10 w-16 bg-white rounded-lg divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                                        <!-- <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="apple-imac-27-dropdown-button">

                                            <li>
                                                <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit</a>
                                            </li>
                                        </ul> -->
                                        <div class="py-1">
                                        <a href="./Edit.php?Pupdate=<?php echo $product_id?>" class="block py-2 px-4 hover:bg-gray-100 hover:rounded-lg dark:hover:bg-gray-600 dark:hover:text-white">Edit</a>
                                        </div>
                                    </div>
                                </th>
                                <th class="px-4 py-3 ">
                                   
                                    <div  class=" z-10 w-20 bg-white rounded-lg divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                                        
                                        <div class="py-1">
                                        <a href="./Edit.php?Pdelete=<?php echo $product_id?>"  class="block py-2 px-4 text-sm text-gray-700 hover:rounded-lg  hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Delete </a>

                                    </div>
                                    </div>
                                </th>
                            </tr>

                        </tbody>
                        <?php } ?>
                    </table>
                </div>
                <nav class="flex flex-col items-start justify-between p-4 space-y-3 md:flex-row md:items-center md:space-y-0" aria-label="Table navigation"></nav>

            </div>
        </div>
    </section>

    <div>



        <!-- Main modal -->
        <div id="authentication-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
            <div class="relative w-full h-full max-w-md md:h-auto">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="authentication-modal">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                    <div class="px-6 py-6 lg:px-8">
                        <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Add New Product</h3>
                        <form class="space-y-6" method="POST" enctype="multipart/form-data" action="addProduct.php">
                            <div>
                                <label for="Product Name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Name</label>
                                <input type="text" name="product_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                            </div>
                            <div>
                                <label for="Product Description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                                <textarea type="text" name="product_description" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required></textarea>
                            </div>
                            <div>
                                <label for="Product Price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Price</label>
                                <input type="number" name="product_price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="$$$" required>
                            </div>
                            <div>
                                <label for="Product Quantity" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Quantity</label>
                                <input type="number" name="product_quantity" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                            </div>
                            <div>

                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Upload file</label>
                        <input type="file" name="image" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" >

                            </div>
                            <div class="flex justify-between">
                                <!-- Dropdown menu -->
                                
                                        <div class="flex flex-col h-full">
                                            
                                                <div class=" flex">
                                            <label class=" px-2 mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Rating</label>
                                            </div>
                                            <div>
                                             <select name="rating"   class="w-[5rem] h-[10%] flex justify-end text-gray-600 hover:bg-[#38A169] focus:ring-2 focus:outline-none focus:ring-[#38A169] font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center bg-[#68D391] dark:hover:bg-[#38A169] dark:focus:ring-[#38A169]">
                                             
                                            <option id="default-radio-1"  type="radio" value="1"  class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="default-radio-2" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">1</label>

                                            </option>
                                            <option id="default-radio-1" type="radio" value="2"  class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="default-radio-2" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">2</label>

                                            </option>
                                            <option id="default-radio-1" type="radio" value="3"  class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="default-radio-2" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">3</label>

                                            </option>
                                            <option id="default-radio-1" type="radio" value="4"  class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="default-radio-2" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">4</label>

                                            </option>
                                            <option id="default-radio-1" type="radio" value="5"  class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="default-radio-2" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">5</label>

                                            </option>
                                               
                                        </select>  
                                        </div> 
                                        </div>
                                            
                                       
                                      
                                    
                                
                                        <div class=" flex flex-col h-full">
                                        <div class=" flex">
                                            <label class="px-4 mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Category</label>
                                            </div>
                                            <div>
                                             <select name="category"   class="w-32 h-[10%] flex justify-end text-gray-600 hover:bg-[#38A169] focus:ring-2 focus:outline-none focus:ring-[#38A169] font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center bg-[#68D391] dark:hover:bg-[#38A169] dark:focus:ring-[#38A169]">
                                            <?php 
                                                $sql = $db->prepare("SELECT * FROM tbl_category");
                                                $sql->execute();
                                                while ($data = $sql->fetch(PDO::FETCH_ASSOC)){
                                                    extract($data);
                                            ?>
                                            <option id="default-radio-1"  type="radio" value="<?php echo $category_id ?>"  class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="default-radio-2" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"><?php echo $cat_title ?></label>

                                            </option>
                                            <?php } ?>
                                           
                                               
                                        </select>  
                                        
                                         
                                            </div>
                                            </div>
                            </div>
                         

                            <div class="flex justify-end">
                                <button  type="submit" name="submit" class="w-32 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Confirm</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- data-modal-toggle="successModal" -->
            <!-- Success Message -->

<!-- Success modal -->
<!-- Modal toggle -->

<div id="successModal" tabindex="-1" aria-hidden="true" class="test hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
    <div class="relative p-4 w-full max-w-md h-full md:h-auto">
        <!-- Modal content -->
        <div class="relative p-4 text-center bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
            <button type="button" class="text-gray-400 absolute top-2.5 right-2.5 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="successModal">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="w-12 h-12 rounded-full bg-green-100 dark:bg-green-900 p-2 flex items-center justify-center mx-auto mb-3.5">
                <svg aria-hidden="true" class="w-8 h-8 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                <span class="sr-only">Success</span>
            </div>
            <p class="mb-4 text-lg font-semibold text-gray-900 dark:text-white">Successfully removed product.</p>
            <button data-modal-toggle="successModal" type="button" class="py-2 px-3 text-sm font-medium text-center text-white rounded-lg bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 dark:focus:ring-primary-900">
                Continue
            </button>
        </div>
    </div>
</div>
<!-- Main modal -->


    </div>
   
<script>
     
</script>


   

</body>

</html>


