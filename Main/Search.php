<?php 
include('./Navigation.php');
include('../Components/connect.php');
try{
if(isset($_POST['search'])){
    $input = $_POST['search'];
    $sql = $db->prepare("SELECT * FROM tbl_products WHERE product_title LIKE :input");
    $input = $input . '%';
    $sql->bindValue(':input', $input, PDO::PARAM_STR);
    $sql->execute();
    
    $count = $sql->rowCount();
    if($count == 0){
        echo "<p class='pt-32'>Not Found</p>";
    }

   
}}
catch (PDOException $e) {
    echo $e->getMessage();
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
<div class="w-screen h-screen dark:bg-gray-900">
<div class="pt-32 pl-16 grid grid-cols-1 lg:grid-cols-3  gap-4 mb-4">
<?php while($data = $sql->fetch(PDO::FETCH_ASSOC)){
        extract($data); ?>
<form method="POST" action="./manageCart.php" enctype="multipart/form-data">
    <div class=" w-[80%] max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
   
     
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
            <input type="hidden" name="product_qty" value="<?php echo $product_qty ?>">
            
            <a href="./details.php?product_id=<?php echo $product_id ?>" class="text-white bg-yellow-300 hover:bg-yellow-400 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-yellow-300 dark:hover:bg-yellow-400 dark:focus:ring-yellow-400">Details</a>
            <button type="submit" name="add_to_cart" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add to card</button>

        </div>
    </div>
</div>

</form>
<?php } ?>
</div>
</div>

   
</body>
</html>