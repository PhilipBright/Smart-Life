<?php
    session_start();
    // if($_REQUEST['POST']){
    //     echo "YES";
    // }
    if(isset($_POST['add_to_cart'])){
        // echo $_POST['product_id'];
        // echo $_POST['product_name'];
        // echo $_POST['product_price'];
        // echo $_POST['product_image'];
        // echo $_POST['product_description'];
        // echo $_POST['product_rating'];
        // echo $_POST['product_cat'];
        if(!isset($_SESSION['U_username'])){
            echo"<script>
            alert('Please Login to go shopping!!');
            window.location.href = 'Shop.php';
        </script>";
        }
         else if(isset($_SESSION['cart'])){
            $sameitem = array_column($_SESSION['cart'], "name");
            if(in_array($_POST['product_name'],$sameitem)){
                echo "
                <script>
                    alert('item already added');
                    window.location.href = 'Shop.php';
                </script>
            ";
            // echo "item added";
            }
            else{
                $count = count($_SESSION['cart']);
                $_SESSION['cart'][$count] = array("id"=>$_POST['product_id'] ,"name" => $_POST['product_name'],
                "price" => $_POST['product_price'], "image" => $_POST['product_image'] ,
                 "description" => $_POST['product_description'] , "rating" => $_POST['product_rating'],
                 "category" => $_POST['product_cat']  , "Quantity"=>1);
            echo "
                <script>
                    alert('item added');
                    window.location.href = 'Shop.php';
                </script>
            ";
            // echo $_SESSION['cart'];
            // echo $count;
            
            }
        }
        else{
            $_SESSION['cart'][0] = array("id"=>$_POST['product_id'] ,"name" => $_POST['product_name'],
             "price" => $_POST['product_price'], "image" => $_POST['product_image'] ,
              "description" => $_POST['product_description'] , "rating" => $_POST['product_rating'],
              "category" => $_POST['product_cat']  , "Quantity"=>1);
            echo "
                <script>
                    alert('item added');
                    window.location.href = 'Shop.php';
                </script>
            ";
            // echo $_SESSION['cart'];
             
        }
    }
?>