<?php 

    include '../Components/connect.php';
    if(isset($_GET['Pdelete'])){
        $pid = $_GET['Pdelete'];
        $sql = $db->prepare("DELETE FROM tbl_products WHERE product_id = :pid");    
        $sql->bindParam(":pid", $pid);
        $sql->execute();
    
        header('Location: products.php');
    }
 ?>

 <?php
 if(isset($_GET['uid'])){
  $uid = $_GET['uid'];
  $sql = $db->prepare("DELETE FROM tbl_users WHERE user_id ='$uid'");    
  $sql->execute();

  header('Location: manageUsers.php');} ?>

  <?php
    if(isset($_GET['Pupdate'])){
        $pid = $_GET['Pupdate'];
        $sql = $db->prepare("SELECT * FROM tbl_products WHERE product_id = '$pid' ");    
        $sql->execute();
        $data = $sql->fetch(PDO::FETCH_ASSOC);
        extract($data);
        
      
      if(isset($_POST['submit'])){
        if (isset($_FILES['image'])) {
            $error = array();
    
           $filenames = $_FILES['image']['name']; //logo.jpg
            $filsize  = $_FILES['image']['size']; //2345678 bytes
            $filetype = $_FILES['image']['type']; //logo/jpg
            $filetmp  = $_FILES['image']['tmp_name']; //astadf
    
            $file_ex = explode("/", $filetype);
            $filex = strtolower(end($file_ex));
    
            $extension = array("jpg", "png", "jpeg", "gif", "jif", "webp", "jfif");
    
            if (in_array($filex, $extension) == FALSE) {
                $error[] = "File type mharr ny tal";
            } elseif ($filsize > 2097152) {
                $error[] = "Taw taw kyee";
            } elseif (empty($error) == TRUE) {
                move_uploaded_file($filetmp, "../assets/" . $filenames);
            }
        }
        $title = $_POST['product_name'];
        $description = $_POST['product_description'];
        $price = $_POST['product_price'];
        $image = $filenames;
        $rating = $_POST["rating"];
        $category = $_POST["category"];
        $qty = $_POST["product_quantity"];
        
      
        $Usql = "UPDATE tbl_products SET 
          product_title = ?,
          product_description = ?,
          product_price = ?,
          product_image_name = ?,
          product_rating = ?,
          category_for = ?,
          product_qty = ?,
          initial_qty = ?
          WHERE product_id = '$pid'";
        
        $stmt = $db->prepare($Usql);
        $stmt->execute([$title, $description, $price, $image, $rating, $category, $qty, $qty]);
        header('Location: products.php');
       
      }
      
      
      
  ?>
         <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.css"  rel="stylesheet" />

    <title>Document</title>
</head>
<body class="dark:bg-gray-900">
    

         <div id="authentication-modal" tabindex="-1" aria-hidden="true" class="flex justify-center items-center z-50 w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
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
                    <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Update Product</h3>
                    <form class="space-y-6" method="POST" enctype="multipart/form-data">
                        <div>
                            <label for="Product Name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Name</label>
                            <input type="text" value="<?php echo $product_title ?>" name="product_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                        </div>
                        <div>
                            <label for="Product Description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                            <input type="text" value="<?php echo $product_description ?>" name="product_description" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required></input>
                        </div>
                        <div>
                            <label for="Product Price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Price</label>
                            <input type="number" value="<?php echo $product_price ?>" name="product_price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="$$$" required>
                        </div>
                        <div>
                            <label for="Product Quantity" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Quantity</label>
                            <input type="number" value="<?php echo $product_qty ?>" name="product_quantity" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                        </div>
                        <div>

                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Upload file</label>
                    <input type="file" name="image"  class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" >

                        </div>
                        <div class="flex justify-between">
                            <!-- Dropdown menu -->
                            
                                    <div class="flex flex-col h-full">
                                        
                                            <div class=" flex">
                                        <label class=" px-2 mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Rating</label>
                                        </div>
                                        <div>
                                         <select name="rating"  class="w-[5rem] h-[10%] flex justify-end text-gray-600 hover:bg-[#38A169] focus:ring-2 focus:outline-none focus:ring-[#38A169] font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center bg-[#68D391] dark:hover:bg-[#38A169] dark:focus:ring-[#38A169]">
                                         
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
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>

    </body>
</html>
   <?php
}
      
      ?>

    <?php
        if(isset($_GET['Cdelete'])){
            $cid = $_GET['Cdelete'];
            $sql = $db->prepare("DELETE FROM tbl_category WHERE category_id = :cid");    
            $sql->bindParam(":cid", $cid);
            $sql->execute();
            header('Location: category.php');} 
    ?>

    <?php
        if(isset($_GET['Cupdate'])){
            $cid = $_GET['Cupdate'];
            $sql = $db->prepare("SELECT * FROM tbl_category WHERE category_id = '$cid' ");    
            $sql->execute();
            $data = $sql->fetch(PDO::FETCH_ASSOC);
            extract($data);
            
                if(isset($_POST['submit'])){
                    if (isset($_FILES['image'])) {
                        
                        $error = array();
                
                        $filename = $_FILES['image']['name']; //logo.jpg
                        $filsize  = $_FILES['image']['size']; //2345678 bytes
                        $filetype = $_FILES['image']['type']; //logo/jpg
                        $filetmp  = $_FILES['image']['tmp_name']; //astadf
                
                        $file_ex = explode("/", $filetype);
                        $filex = strtolower(end($file_ex));
                
                        $extension = array("jpg", "png", "jpeg", "gif", "jif", "webp", "jfif");
                
                        if (in_array($filex, $extension) == FALSE) {
                            $error[] = "File type mharr ny tal";
                        } elseif ($filsize > 2097152) {
                            $error[] = "Taw taw kyee";
                        } elseif (empty($erorr) == TRUE) {
                            move_uploaded_file($filetmp, "../assets/" . $filename);
                        }
                    }
               
                   $title = $_POST['title'];
                   $description = $_POST['description'];
                  $image = $filename;

                  $Usql = "UPDATE tbl_category SET 
                  cat_title = ?,
                  cat_description = ?,
                  cat_image_name = ?
                  WHERE category_id = '$cid'";
                
                $stmt = $db->prepare($Usql);
                $stmt->execute([$title, $description, $image]);
                }
                
            ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.css"  rel="stylesheet" />

    <title>Document</title>
</head>
<body class="dark:bg-gray-900">
            <div id="defaultModal" tabindex="-1" aria-hidden="true" class=" flex justify-center items-center z-50  w-full mt-24 p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                   Adding Category
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="defaultModal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-6 space-y-6">

<form method="POST" enctype="multipart/form-data" >
  <div class="mb-6">
    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category Name</label>
    <input name="title" type="text" value="<?php echo $cat_title ?>" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
  </div>
  <div class="mb-6">
    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
    <input name="description" type="text" value="<?php echo $cat_description ?>" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
  </div>
  <div class="mb-6">
   
<label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="user_avatar">Upload file</label>
<input value="<?php echo $cat_image_name ?>" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" name="image" type="file">
</div>
  <div class="text-end">
  <button type="submit" name="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add Category</button>
  </div>
</form>
            </div>
            <!-- Modal footer -->
           
        </div>
    </div>
</div>
<script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>

    </body>
</html>
<?php 
        }
    ?>
<?php
    if(isset($_GET['Aupdate'])){
        $cid = $_GET['Aupdate'];
        $sql = $db->prepare("SELECT * FROM tbl_admin WHERE admin_id = '$cid' ");    
            $sql->execute();
            $data = $sql->fetch(PDO::FETCH_ASSOC);
            extract($data);
if(isset($_POST['submit'])){
    if (isset($_FILES['userImage'])) {
        $error = array();

       $filenames = $_FILES['userImage']['name']; //logo.jpg
        $filsize  = $_FILES['userImage']['size']; //2345678 bytes
        $filetype = $_FILES['userImage']['type']; //logo/jpg
        $filetmp  = $_FILES['userImage']['tmp_name']; //astadf

        $file_ex = explode("/", $filetype);
        $filex = strtolower(end($file_ex));

        $extension = array("jpg", "png", "jpeg", "gif", "jif", "webp", "jfif");

        if (in_array($filex, $extension) == FALSE) {
            $error[] = "File type mharr ny tal";
        } elseif ($filsize > 2097152) {
            $error[] = "Taw taw kyee";
        } elseif (empty($error) == TRUE) {
            move_uploaded_file($filetmp, "../assets/" . $filenames);
        }
    }
    $username = $_POST['username'];
    $password = $_POST['password'];
  $userImage = $filenames;
     $userEmail = $_POST['email'];

     $Usql = "UPDATE tbl_admin SET 
                  admin_username = ?,
                  admin_email = ?,
                  admin_image = ?,
                  admin_password = ?
                  WHERE admin_id = '$cid'";
                
                $stmt = $db->prepare($Usql);
                $stmt->execute([$username, $userImage, $password, $userEmail]);
        header('Location: AdminAcc.php');

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.css"  rel="stylesheet" />

</head>
<body class="dark:bg-gray-900">
    

<div id="addUser-modal" tabindex="-1" aria-hidden="true" class="mt-16 flex justify-center items-center z-50  w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
    <div class="relative w-full h-full max-w-md md:h-auto">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="addUser-modal">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="px-6 py-6 lg:px-8">
                <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Add New User</h3>
                <form class="space-y-6"  method="POST" enctype="multipart/form-data">
                <div>
                        <label for="username" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username</label>
                        <input type="username" name="username" id="username" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                    </div>
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                        <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="name@company.com" required>
                    </div>
                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                        <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                    </div>
                    <div class="pb-5">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Upload profile</label>
                        <input type="file" name="userImage" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" >
                            </div>
                    <div class="flex justify-end">
                    <button type="submit" name="submit" class="w-fit  text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add User</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> 
<script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>

</body>
</html>
<?php 
    }
?>
<?php
        if(isset($_GET['Adelete'])){
            $cid = $_GET['Adelete'];
            $sql = $db->prepare("DELETE FROM tbl_admin WHERE admin_id = :cid");    
            $sql->bindParam(":cid", $cid);
            $sql->execute();
            header('Location: AdminAcc.php');} 
    ?>
    <?php
        if(isset($_GET['Udelete'])){
            $cid = $_GET['Udelete'];
            $sql = $db->prepare("DELETE FROM tbl_users WHERE user_id = :cid");    
            $sql->bindParam(":cid", $cid);
            $sql->execute();
            header('Location: AddUser.php');} 
    ?>
    <?php
    if(isset($_GET['Uupdate'])){
        $cid = $_GET['Uupdate'];
        $sql = $db->prepare("SELECT * FROM tbl_users WHERE user_id = '$cid' ");    
            $sql->execute();
            $data = $sql->fetch(PDO::FETCH_ASSOC);
            extract($data);
if(isset($_POST['submit'])){
    if (isset($_FILES['userImage'])) {
        $error = array();

       $filenames = $_FILES['userImage']['name']; //logo.jpg
        $filsize  = $_FILES['userImage']['size']; //2345678 bytes
        $filetype = $_FILES['userImage']['type']; //logo/jpg
        $filetmp  = $_FILES['userImage']['tmp_name']; //astadf

        $file_ex = explode("/", $filetype);
        $filex = strtolower(end($file_ex));

        $extension = array("jpg", "png", "jpeg", "gif", "jif", "webp", "jfif");

        if (in_array($filex, $extension) == FALSE) {
            $error[] = "File type mharr ny tal";
        } elseif ($filsize > 2097152) {
            $error[] = "Taw taw kyee";
        } elseif (empty($error) == TRUE) {
            move_uploaded_file($filetmp, "../assets/" . $filenames);
        }
    }
    $username = $_POST['username'];
    $password = $_POST['password'];
  $userImage = $filenames;
     $userEmail = $_POST['email'];

     $Usql = "UPDATE tbl_users SET 
                  user_image = ?,
                  username  = ?,
                  password = ?,
                  user_email = ?
                  
                  WHERE user_id = '$cid'";
                
                $stmt = $db->prepare($Usql);
                $stmt->execute([$userImage, $username,  $password, $userEmail]);
        header('Location: addUser.php');

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.css"  rel="stylesheet" />

</head>
<body class="dark:bg-gray-900">
    

<div id="addUser-modal" tabindex="-1" aria-hidden="true" class="mt-16 flex justify-center items-center z-50  w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
    <div class="relative w-full h-full max-w-md md:h-auto">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="addUser-modal">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="px-6 py-6 lg:px-8">
                <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Add New User</h3>
                <form class="space-y-6"  method="POST" enctype="multipart/form-data">
                <div>
                        <label for="username" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username</label>
                        <input type="username" name="username" id="username" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                    </div>
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                        <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="name@company.com" required>
                    </div>
                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                        <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                    </div>
                    <div class="pb-5">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Upload profile</label>
                        <input type="file" name="userImage" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" >
                            </div>
                    <div class="flex justify-end">
                    <button type="submit" name="submit" class="w-fit  text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add User</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> 
<script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>

</body>
</html>
<?php 
    }
?>