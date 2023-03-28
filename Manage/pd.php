<?php 
    $sql = "INSERT INTO tbl_products(product_title, product_description, product_price, product_image_name, product_rating, category_for ) VALUE(?,?,?,?,?,?)";
    $sq  = $db->prepare($sql);
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
    
        

            
            // $active = $_POST['active'];
            
    
           if($sq->execute(array($title, $description, $price, $image, $rating, $category))){
           header('Location: pd.php');
           
           }
           }
           
    
        
?>