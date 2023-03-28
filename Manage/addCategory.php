<?php   
    include('../Components/connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class=" flex w-screen h-screen justify-center items-center ">
    


    <div class=" w-96 h-96 border-2 border-blue-500 rounded-3xl bg-gradient-to-r from-purple-500 to-pink-500 ">
    <div class=" flex justify-end p-3 text-3xl">
        <ion-icon name="close-circle-outline"></ion-icon>
</div>
    <div class=" p-4  backdrop-blur-md">
        <h1 class="text-center font-bold text-2xl">Add Category</h1>
        <br>
        <form action="" method="POST" enctype="multipart/form-data"  >
            <table class="tbl-30 w-max">
                <tr>
                    <td class="py-3">Title:</td>
                    <td>
                        <input type="text" name="title" placeholder="Title for the Product" class="border-2 rounded-md  bg-gradient-to-r from-purple-500 to-pink-500 ">
                    </td>
                </tr>

                <tr>
                    <td class="py-3">Select Image: </td>
                    <td>
                        <input type="file" name="image" >
                    </td>
                </tr>

                
                
                <tr >
                    <td colspan="2"  >
                        <input type="submit" name="submit" value="Add Food" class=" btn-secondary border-2 p-1">
                    </td>
                </tr>

            </table>
        </form>

        <?php 
        //submit button task
        $sql = "INSERT INTO tbl_category(cat_title, cat_image_name) VALUE(?,?)";
        $sq  = $db->prepare($sql);
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
              $image = $filename;
               
                
                // $active = $_POST['active'];
        
        
               if($sq->execute(array($title, $image))){
                echo "data inserted";
               
             
        
        
               }
               else echo "null";


            }
        ?>
 
</div>
</div>
<script src="https://cdn.tailwindcss.com"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>