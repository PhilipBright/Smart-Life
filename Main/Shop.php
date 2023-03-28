<?php 
    include('./Navigation.php');
    
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
    
<button data-drawer-target="cta-button-sidebar" data-drawer-toggle="cta-button-sidebar" aria-controls="cta-button-sidebar" type="button" class="inline-flex items-center p-2 mt-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
   <span class="sr-only">Open sidebar</span>
   <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
      <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
   </svg>
</button>
<div class="pt-[1.5rem] lg:pt-[5rem]">
<aside id="cta-button-sidebar" class="fixed  left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
   <div class=" h-screen px-3 py-[33%]  overflow-y-auto bg-gray-50 dark:bg-gray-800">
      <div class="flex justify-center pb-6 pt-4">
         <img src="../assets/logo.svg" class="rounded-lg w-32" alt="">
      </div>
      <ul class="space-y-2 font-medium">
         <li>
            <a href="#personal" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
               <svg aria-hidden="true" class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M256 384c9.6-31.9 29.5-59.1 49.2-86.2l0 0c5.2-7.1 10.4-14.2 15.4-21.4c19.8-28.5 31.4-63 31.4-100.3C352 78.8 273.2 0 176 0S0 78.8 0 176c0 37.3 11.6 71.9 31.4 100.3c5 7.2 10.2 14.3 15.4 21.4l0 0C66.5 324.9 86.4 352.1 96 384H256zM176 512c44.2 0 80-35.8 80-80V416H96v16c0 44.2 35.8 80 80 80zM96 176c0 8.8-7.2 16-16 16s-16-7.2-16-16c0-61.9 50.1-112 112-112c8.8 0 16 7.2 16 16s-7.2 16-16 16c-44.2 0-80 35.8-80 80z"/></svg>
               <span class="ml-3">Personal Assistant</span>
            </a>
         </li>
         <li>
            <a href="#sport" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
               <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M112 96c0-17.7 14.3-32 32-32h16c17.7 0 32 14.3 32 32V224v64V416c0 17.7-14.3 32-32 32H144c-17.7 0-32-14.3-32-32V384H64c-17.7 0-32-14.3-32-32V288c-17.7 0-32-14.3-32-32s14.3-32 32-32V160c0-17.7 14.3-32 32-32h48V96zm416 0v32h48c17.7 0 32 14.3 32 32v64c17.7 0 32 14.3 32 32s-14.3 32-32 32v64c0 17.7-14.3 32-32 32H528v32c0 17.7-14.3 32-32 32H480c-17.7 0-32-14.3-32-32V288 224 96c0-17.7 14.3-32 32-32h16c17.7 0 32 14.3 32 32zM416 224v64H224V224H416z"/></svg>
               <span class="flex-1 ml-3 whitespace-nowrap">Sport</span>
 
            </a>
         </li>
         <li>
            <a href="#homeEq" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
               <svg  aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M543.8 287.6c17 0 32-14 32-32.1c1-9-3-17-11-24L512 185V64c0-17.7-14.3-32-32-32H448c-17.7 0-32 14.3-32 32v36.7L309.5 7c-6-5-14-7-21-7s-15 1-22 8L10 231.5c-7 7-10 15-10 24c0 18 14 32.1 32 32.1h32v69.7c-.1 .9-.1 1.8-.1 2.8V472c0 22.1 17.9 40 40 40h16c1.2 0 2.4-.1 3.6-.2c1.5 .1 3 .2 4.5 .2H160h24c22.1 0 40-17.9 40-40V448 384c0-17.7 14.3-32 32-32h64c17.7 0 32 14.3 32 32v64 24c0 22.1 17.9 40 40 40h24 32.5c1.4 0 2.8 0 4.2-.1c1.1 .1 2.2 .1 3.3 .1h16c22.1 0 40-17.9 40-40V455.8c.3-2.6 .5-5.3 .5-8.1l-.7-160.2h32z"/></svg>
               <span class="flex-1 ml-3 whitespace-nowrap">Home Equipment</span>
            </a>
         </li>
         <li>
            <a href="#car" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
               <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M135.2 117.4L109.1 192H402.9l-26.1-74.6C372.3 104.6 360.2 96 346.6 96H165.4c-13.6 0-25.7 8.6-30.2 21.4zM39.6 196.8L74.8 96.3C88.3 57.8 124.6 32 165.4 32H346.6c40.8 0 77.1 25.8 90.6 64.3l35.2 100.5c23.2 9.6 39.6 32.5 39.6 59.2V400v48c0 17.7-14.3 32-32 32H448c-17.7 0-32-14.3-32-32V400H96v48c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32V400 256c0-26.7 16.4-49.6 39.6-59.2zM128 288a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zm288 32a32 32 0 1 0 0-64 32 32 0 1 0 0 64z"/></svg>
               <span class="flex-1 ml-3 whitespace-nowrap">Smart Car</span>
            </a>
         </li>
         <li>
            <a href="#health" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
               <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M228.3 469.1L47.6 300.4c-4.2-3.9-8.2-8.1-11.9-12.4h87c22.6 0 43-13.6 51.7-34.5l10.5-25.2 49.3 109.5c3.8 8.5 12.1 14 21.4 14.1s17.8-5 22-13.3L320 253.7l1.7 3.4c9.5 19 28.9 31 50.1 31H476.3c-3.7 4.3-7.7 8.5-11.9 12.4L283.7 469.1c-7.5 7-17.4 10.9-27.7 10.9s-20.2-3.9-27.7-10.9zM503.7 240h-132c-3 0-5.8-1.7-7.2-4.4l-23.2-46.3c-4.1-8.1-12.4-13.3-21.5-13.3s-17.4 5.1-21.5 13.3l-41.4 82.8L205.9 158.2c-3.9-8.7-12.7-14.3-22.2-14.1s-18.1 5.9-21.8 14.8l-31.8 76.3c-1.2 3-4.2 4.9-7.4 4.9H16c-2.6 0-5 .4-7.3 1.1C3 225.2 0 208.2 0 190.9v-5.8c0-69.9 50.5-129.5 119.4-141C165 36.5 211.4 51.4 244 84l12 12 12-12c32.6-32.6 79-47.5 124.6-39.9C461.5 55.6 512 115.2 512 185.1v5.8c0 16.9-2.8 33.5-8.3 49.1z"/></svg>
               <span class="flex-1 ml-3 whitespace-nowrap">Health Care</span>
            </a>
         </li>
         
      </ul>
      <div id="dropdown-cta" class="p-4 mt-6 rounded-lg bg-blue-50 dark:bg-blue-900" role="alert">
         <div class="flex items-center mb-3">
            <span class="bg-orange-100 text-orange-800 text-sm font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-orange-200 dark:text-orange-900">Up to 20% Discount</span>
            <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-blue-50 text-blue-900 rounded-lg focus:ring-2 focus:ring-blue-400 p-1 hover:bg-blue-200 inline-flex h-6 w-6 dark:bg-blue-900 dark:text-blue-400 dark:hover:bg-blue-800" data-dismiss-target="#dropdown-cta" aria-label="Close">
                  <span class="sr-only">Close</span>
                  <svg aria-hidden="true" class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </button>
         </div>
         <p class="mb-3 text-sm text-blue-800 dark:text-blue-400">
         "Shop now and get up to 20% off your purchase with our exclusive discount code!"
         </p>

      </div>
   </div>
</aside>

<div class="p-4 sm:ml-64 dark:bg-gray-900">

   <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700">

      <div class="">
         <h1 id="personal" class="text-center pb-4 text-5xl font-bold text-gray-900 dark:text-white">Personal Assistant</h1>
      <div class="grid grid-cols-1 lg:grid-cols-3  gap-4 mb-4">
      <?php
      $sql = $db->prepare("SELECT * FROM tbl_products WHERE category_for = 2");
      $sql->execute();
      while($data = $sql->fetch(PDO::FETCH_ASSOC)){
        extract($data);
    ?>
      <form method="POST" action="./manageCart.php" enctype="multipart/form-data">
    <div class=" w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
   
     
        <img  class="p-4 w-96 h-80" src="../assets/<?php echo $product_image_name ?>" alt="product image"  />
    
    <div class="px-5 pb-5">
        
            <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white"><?php echo $product_title ?></h5>
        <div class="flex items-center mt-2.5 mb-5">
        <?php for($i = 1;$i <= $product_rating;$i++){
                                        echo'<svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>';
                                        } ?>
         <span class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ml-3"><?php echo $category_for ?></span>
    
        </div>
        <div class="flex items-center mt-2.5 mb-5">
        <span class="text-3xl font-bold text-gray-900 dark:text-white"><?php echo "$".$product_price ?></span>

        </div>
        
        <div class="flex items-center justify-between">
            <input type="hidden" name="product_name" value="<?php echo $product_title ?>">
            <input type="hidden" name="product_price" value="<?php echo $product_price ?>">
            <input type="hidden" name="product_description" value="<?php echo $product_description ?>">
            <input type="hidden" name="product_image" value="<?php echo $product_image_name ?>">
            <input type="hidden" name="product_rating" value="<?php echo $product_rating ?>">
            <input type="hidden" name="product_cat" value="<?php echo $category_for ?>">
            <input type="hidden" name="product_id" value="<?php echo $product_id ?>">
            
            <button data-modal-target="defaultModal" data-modal-toggle="defaultModal" type="button" name="details" class="text-white bg-yellow-300 hover:bg-yellow-400 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-yellow-300 dark:hover:bg-yellow-400 dark:focus:ring-yellow-400">Details</button>
            <button type="submit" name="add_to_cart" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add to card</button>

        </div>
    </div>
</div>

</form>

<?php } ?>
     

      </div>
      </div>
      <div class="">
         <h1 id="sport" class="text-center pb-4 text-5xl font-bold text-gray-900 dark:text-white">Sport</h1>
      <div class="grid grid-cols-1 lg:grid-cols-3  gap-4 mb-4">
      <?php
      $sql = $db->prepare("SELECT * FROM tbl_products WHERE category_for = 1");
      $sql->execute();
      while($data = $sql->fetch(PDO::FETCH_ASSOC)){
        extract($data);
    ?>
      <form method="POST" action="./manageCart.php" enctype="multipart/form-data">
    <div class=" w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
   
     
        <img  class="p-4 w-96 h-80" src="../assets/<?php echo $product_image_name ?>" alt="product image"  />
    
    <div class="px-5 pb-5">
        
            <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white"><?php echo $product_title ?></h5>
        <div class="flex items-center mt-2.5 mb-5">
        <?php for($i = 1;$i <= $product_rating;$i++){
                                        echo'<svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>';
                                        } ?>
         <span class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ml-3"><?php echo $category_for ?></span>
    
        </div>
        <div class="flex items-center mt-2.5 mb-5">
        <span class="text-3xl font-bold text-gray-900 dark:text-white"><?php echo "$".$product_price ?></span>

        </div>
        
        <div class="flex items-center justify-between">
            <input type="hidden" name="product_name" value="<?php echo $product_title ?>">
            <input type="hidden" name="product_price" value="<?php echo $product_price ?>">
            <input type="hidden" name="product_description" value="<?php echo $product_description ?>">
            <input type="hidden" name="product_image" value="<?php echo $product_image_name ?>">
            <input type="hidden" name="product_rating" value="<?php echo $product_rating ?>">
            <input type="hidden" name="product_cat" value="<?php echo $category_for ?>">
            <input type="hidden" name="product_id" value="<?php echo $product_id ?>">
            
            <button data-modal-target="defaultModal" data-modal-toggle="defaultModal" type="button" name="details" class="text-white bg-yellow-300 hover:bg-yellow-400 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-yellow-300 dark:hover:bg-yellow-400 dark:focus:ring-yellow-400">Details</button>
            <button type="submit" name="add_to_cart" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add to card</button>

        </div>
    </div>
</div>

</form>

<?php } ?>
     

      </div>
      </div>
      <div class="">
         <h1 id="homeEq" class="text-center pb-4 text-5xl font-bold text-gray-900 dark:text-white">Home Equipment</h1>
      <div class="grid grid-cols-1 lg:grid-cols-3  gap-4 mb-4">
      <?php
      $sql = $db->prepare("SELECT * FROM tbl_products WHERE category_for = 3");
      $sql->execute();
      while($data = $sql->fetch(PDO::FETCH_ASSOC)){
        extract($data);
    ?>
      <form method="POST" action="./manageCart.php" enctype="multipart/form-data">
    <div class=" w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
   
     
        <img  class="p-4 w-96 h-80" src="../assets/<?php echo $product_image_name ?>" alt="product image"  />
    
    <div class="px-5 pb-5">
        
            <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white"><?php echo $product_title ?></h5>
        <div class="flex items-center mt-2.5 mb-5">
        <?php for($i = 1;$i <= $product_rating;$i++){
                                        echo'<svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>';
                                        } ?>
         <span class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ml-3"><?php echo $category_for ?></span>
    
        </div>
        <div class="flex items-center mt-2.5 mb-5">
        <span class="text-3xl font-bold text-gray-900 dark:text-white"><?php echo "$".$product_price ?></span>

        </div>
        
        <div class="flex items-center justify-between">
            <input type="hidden" name="product_name" value="<?php echo $product_title ?>">
            <input type="hidden" name="product_price" value="<?php echo $product_price ?>">
            <input type="hidden" name="product_description" value="<?php echo $product_description ?>">
            <input type="hidden" name="product_image" value="<?php echo $product_image_name ?>">
            <input type="hidden" name="product_rating" value="<?php echo $product_rating ?>">
            <input type="hidden" name="product_cat" value="<?php echo $category_for ?>">
            <input type="hidden" name="product_id" value="<?php echo $product_id ?>">
            
            <button data-modal-target="defaultModal" data-modal-toggle="defaultModal" type="button" name="details" class="text-white bg-yellow-300 hover:bg-yellow-400 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-yellow-300 dark:hover:bg-yellow-400 dark:focus:ring-yellow-400">Details</button>
            <button type="submit" name="add_to_cart" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add to card</button>

        </div>
    </div>
</div>

</form>

<?php } ?>
     

      </div>
      </div>

      <div class="">
         <h1 id="car" class="text-center pb-4 text-5xl font-bold text-gray-900 dark:text-white">Smart Car</h1>
      <div class="grid grid-cols-1 lg:grid-cols-3  gap-4 mb-4">
      <?php
      $sql = $db->prepare("SELECT * FROM tbl_products WHERE category_for = 4");
      $sql->execute();
      while($data = $sql->fetch(PDO::FETCH_ASSOC)){
        extract($data);
    ?>
      <form method="POST" action="./manageCart.php" enctype="multipart/form-data">
    <div class=" w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
   
     
        <img  class="p-4 w-96 h-80" src="../assets/<?php echo $product_image_name ?>" alt="product image"  />
    
    <div class="px-5 pb-5">
        
            <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white"><?php echo $product_title ?></h5>
        <div class="flex items-center mt-2.5 mb-5">
        <?php for($i = 1;$i <= $product_rating;$i++){
                                        echo'<svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>';
                                        } ?>
         <span class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ml-3"><?php echo $category_for ?></span>
    
        </div>
        <div class="flex items-center mt-2.5 mb-5">
        <span class="text-3xl font-bold text-gray-900 dark:text-white"><?php echo "$".$product_price ?></span>

        </div>
        
        <div class="flex items-center justify-between">
            <input type="hidden" name="product_name" value="<?php echo $product_title ?>">
            <input type="hidden" name="product_price" value="<?php echo $product_price ?>">
            <input type="hidden" name="product_description" value="<?php echo $product_description ?>">
            <input type="hidden" name="product_image" value="<?php echo $product_image_name ?>">
            <input type="hidden" name="product_rating" value="<?php echo $product_rating ?>">
            <input type="hidden" name="product_cat" value="<?php echo $category_for ?>">
            <input type="hidden" name="product_id" value="<?php echo $product_id ?>">
            
            <button data-modal-target="defaultModal" data-modal-toggle="defaultModal" type="button" name="details" class="text-white bg-yellow-300 hover:bg-yellow-400 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-yellow-300 dark:hover:bg-yellow-400 dark:focus:ring-yellow-400">Details</button>
            <button type="submit" name="add_to_cart" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add to card</button>

        </div>
    </div>
</div>

</form>

<?php } ?>
     

      </div>
      </div>
      <div class="">
         <h1 id="health" class="text-center pb-4 text-5xl font-bold text-gray-900 dark:text-white">Health Care</h1>
      <div class="grid grid-cols-1 lg:grid-cols-3  gap-4 mb-4">
      <?php
      $sql = $db->prepare("SELECT * FROM tbl_products WHERE category_for = 5");
      $sql->execute();
      while($data = $sql->fetch(PDO::FETCH_ASSOC)){
        extract($data);
    ?>
      <form method="POST" action="./manageCart.php" enctype="multipart/form-data">
    <div class=" w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
   
     
        <img  class="p-4 w-96 h-80" src="../assets/<?php echo $product_image_name ?>" alt="product image"  />
    
    <div class="px-5 pb-5">
        
            <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white"><?php echo $product_title ?></h5>
        <div class="flex items-center mt-2.5 mb-5">
        <?php for($i = 1;$i <= $product_rating;$i++){
                                        echo'<svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>';
                                        } ?>
         <span class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ml-3"><?php echo $category_for ?></span>
    
        </div>
        <div class="flex items-center mt-2.5 mb-5">
        <span class="text-3xl font-bold text-gray-900 dark:text-white"><?php echo "$".$product_price ?></span>

        </div>
        
        <div class="flex items-center justify-between">
            <input type="hidden" name="product_name" value="<?php echo $product_title ?>">
            <input type="hidden" name="product_price" value="<?php echo $product_price ?>">
            <input type="hidden" name="product_description" value="<?php echo $product_description ?>">
            <input type="hidden" name="product_image" value="<?php echo $product_image_name ?>">
            <input type="hidden" name="product_rating" value="<?php echo $product_rating ?>">
            <input type="hidden" name="product_cat" value="<?php echo $category_for ?>">
            <input type="hidden" name="product_id" value="<?php echo $product_id ?>">
            
            <button data-modal-target="defaultModal" data-modal-toggle="defaultModal" type="button" name="details" class="text-white bg-yellow-300 hover:bg-yellow-400 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-yellow-300 dark:hover:bg-yellow-400 dark:focus:ring-yellow-400">Details</button>
            <button type="submit" name="add_to_cart" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add to card</button>

        </div>
    </div>
</div>

</form>

<?php } ?>
     

      </div>
      </div>

    
     
</div>

</div>

</div>



<?php
// Get the product ID from the POST data
// $product_id = $_POST['product_id'];

// // Get the product details from the database
// $sql = "SELECT * FROM tbl_products WHERE product_id = $product_id";
// $stmt = $db->prepare($sql);
// $stmt->execute([$product_id]);
// $product = $stmt->fetch(PDO::FETCH_ASSOC);

// // Check if product exists
// if (!$product) {
//     echo "Product not found.";
//     exit;
// }

// Output the modal with the product details
?>
  <?php
            $product_id = $_POST['product_id'];
            $sql = "SELECT * FROM tbl_products WHERE product_id = $product_id";
            $result = $db->prepare($sql);
            $result->execute();
            $row = $result->fetch(PDO::FETCH_ASSOC);
            $product_title = $row['product_title'];
            ?>
<!-- Main modal -->
<div id="defaultModal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
    <div class="relative w-full h-full max-w-2xl md:h-auto">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                      
                           <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                           <?php echo "Product title: " . $product_title; ?>
                           </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="defaultModal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-6 space-y-6">
                <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                    With less than a month to go before the European Union enacts new consumer privacy laws for its citizens, companies around the world are updating their terms of service agreements to comply.
                </p>
                <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                    The European Union’s General Data Protection Regulation (G.D.P.R.) goes into effect on May 25 and is meant to ensure a common set of data rights in the European Union. It requires organizations to notify users as soon as possible of high-risk data breaches that could personally affect them.
                </p>
            </div>
            <!-- Modal footer -->
            <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                <button data-modal-hide="defaultModal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">I accept</button>
                <button data-modal-hide="defaultModal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Decline</button>
            </div>
        </div>
    </div>
</div>


</body>
</html>
