<?php 
  
    include('./Navigation.php');
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
</head>
<body class="dark:bg-gray-900">

<section class="w-screen h-auto bg-gray-50 dark:bg-gray-900 py-2 sm:py-5 mt-16 pr-16 ">
    <div class="flex justify-between">
    <div class="flex items-center pl-8">
        <img src="../assets/thanks.svg" alt="" class="w-[60rem]">
    </div>
    <form action="UserInfo.php" method="POST">
    <div class=" w-64 h-48 dark:bg-gray-800 rounded-lg">

        <h1 class="pt-4 text-center font-semibold text-2xl mt-3 dark:text-white">Total Amount</h1>
        <h1 class="text-center font-semibold text-4xl mt-5 dark:text-white"> <?php $total_price = 0; // initialize total price to 0

if(isset($_SESSION['cart']) && is_array($_SESSION['cart'])) {
  foreach($_SESSION['cart'] as $product) {
    $total_price += $product['price']*$product['Quantity']; 
  }
}  echo "$".$total_price ?>
<input type="hidden" name="totalPrice" value="<?php echo $total_price ?>">
</h1>

        <div class="text-center mt-8">
        <button type="submit" name="checkout" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Check Out</button>

        </div>

    </div>
    </form>
    </div>
</section>

<section class="w-screen h-screen  bg-gray-50 dark:bg-gray-900 py-3 sm:py-5">
  <div class="px-4 mx-auto max-w-screen-2xl lg:px-12">
      <div class="relative overflow-hidden bg-white shadow-md dark:bg-gray-800 sm:rounded-lg">
          <div class="flex flex-col px-4 py-3 space-y-3 lg:flex-row lg:items-center lg:justify-between lg:space-y-0 lg:space-x-4">
              <div class="flex items-center flex-2 space-x-4">
                  <h5>
                      <span class="text-gray-500 ">Total Products:</span>
                      <?php if(!isset($_SESSION['cart'])) { ?>
                      <h1 class="text-xl">You Haven't Ordered Anything Else </h1>
                      <?php } ?>
                      <span class="dark:text-white"><?php  echo $counter = count($_SESSION['cart']); ?></span>
                  </h5>
                  
                  
              </div>
              
              
          </div>
          <div class="overflow-x-auto">
              <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                  <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">

                 

                      <tr>
                      <th scope="col" class="px-2 py-3">No</th>
                           <th scope="col" class="px-2 py-3">Product ID</th>
                          <th scope="col" class="px-4 py-3">Image</th>
                          <th scope="col" class="pl-12 py-3">Name</th>
                          <th scope="col" class="px-2 py-3">Category</th>
                          
                          
                          <th scope="col" class="px-8 py-3">Rating</th>
                          <th scope="col" class="px-8 py-3">Quantity</th>
                          <th scope="col" class="px-4 py-3">Price</th>
                          <th scope="col" class="px-12 py-3">Update</th>
                      </tr>
                  </thead>
                  <tbody>

                  <?php
                       
                        if (isset($_SESSION['cart'])) {
                          
                            foreach ($_SESSION['cart'] as $key => $value) {
                                $counter++;
                                $key = $key + 1;
                        ?>


                      <tr class="border-b dark:border-gray-600 hover:bg-gray-100 dark:hover:bg-gray-700">
                      <td class="px-4 py-2">
                              <span class="bg-primary-100 text-primary-800 text-xs font-medium px-2 py-0.5 rounded dark:bg-primary-900 dark:text-primary-300"><?php echo $key; ?></span>
                          </td>
                      <td class="px-4 py-2">
                              <span class="bg-primary-100 text-primary-800 text-xs font-medium px-2 py-0.5 rounded dark:bg-primary-900 dark:text-primary-300"><?php echo $value['id'] ?></span>
                          </td>
                          <th scope="row" class="flex items-center px-4 py-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                              <img src="../assets/<?php echo $value['image'] ?>" alt="iMac Front Image" class=" w-auto h-8 mr-3">
                              
                          </th>
                          
                          <td class="px-4 py-2">
                              <span class="bg-primary-100 text-primary-800 text-xs font-medium px-2 py-0.5 rounded dark:bg-primary-900 dark:text-primary-300"><?php echo $value['name'] ?></span>
                          </td>
                          <td class="px-4 py-2">
                              <span class="bg-primary-100 text-primary-800 text-xs font-medium py-0.5 rounded dark:bg-primary-900 dark:text-primary-300"><?php echo $value['category'] ?></span>
                          </td>
                          
                          
                          <td class="px-4 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                              <div class="flex items-center">
                              <?php for($i = 1;$i <= $value['rating'];$i++){
                                        echo'<svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>';
                                        } ?>
                              </div>
                          </td>
                          <td class="px-2 py-4">
                            <form action="./manageCart.php" method="POST">
                    <div class="flex items-center space-x-3">
                       <input type="hidden" name="cid" value="<?php $ckey = $key - 1; echo $ckey; ?>">
                        <button name="minus" class="inline-flex items-center p-1 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-full focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700" type="submit">
                            <span class="sr-only">Quantity button</span>
                            <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                        </button>
                        <!-- </input> -->
                        <div>
                            <input type="number" id="first_product" class="bg-gray-50 w-16 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block px-2.5 py-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" value="<?php echo $value['Quantity']; ?>" required>
                        </div>
                        <button name="plus" class="inline-flex items-center p-1 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-full focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700" type="submit">
                            <span class="sr-only">Quantity button</span>
                            <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                        </button>
                          
                       
                    </div>
                   
                    </form>
                   
                </td>
                          <td class="px-4 py-2"><?php echo  "$".$total = $value['price']*$value['Quantity']?></td>
                          <td class="px-8 py-4 ">
                                
                                
                                    <div class="">
                                        <a href="./Delete.php?product_id=<?php echo $value['id']?>"  class="w-20 border rounded-lg block py-2 px-3 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white">Remove</a>
                                    </div>
                               
                            </td>
                      </tr>
                     <?php 
                     }} 
                        ?>
                        
                  </tbody>
              </table>
          </div>
          <nav class="flex flex-col items-start justify-between p-4 space-y-3 md:flex-row md:items-center md:space-y-0" aria-label="Table navigation"></nav>
         
      </div>
  </div>
  
</section>
</body>
</html>
