<?php
    include('../Components/connect.php');
    session_start();


    if(isset($_POST['Csubmit'])){
        
      
     $username = $_POST['username'];
     $email = $_POST['email'];
    $address = $_POST['address'];
     $phone = $_POST['phone'];
     $postalcode = $_POST['postalcode'];
 $payment = $_POST['payment'];
     $totalAmount = $_POST['totalMoney'];
     $current_date = $_POST['date'];
     $itemname = $_POST['itemName'];
     $itemquantity = $_POST['itemqty'];
     $cus_for = $_POST['cus_for'];
     $discount = $_POST['discount'];
      
      
       foreach ($_SESSION['cart'] as $item) {
        $id = $item['id'];
        $itemname = $item['name'];
        $itemquantity = $item['Quantity'];
        $eprice = $item['price']*$item['Quantity'];

        $sql = "INSERT INTO tbl_order(customer_name, customer_address, customer_phone, customer_email, postal_code, 
        order_product, order_quantity, order_price, order_total, order_date, discount, PaymentType, cus_for) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)";
        $sq = $db->prepare($sql);

        try {
            $sq->execute(array($username, $address, $phone, $email, $postalcode, $itemname, $itemquantity, $eprice, $totalAmount, $current_date, $discount, $payment, $cus_for));
            
            // Get the current quantity of the product
        $query = "SELECT product_qty FROM tbl_products WHERE product_id = $id";
        $result = $db->prepare($query);
        $result->execute();
        $row = $result->fetch(PDO::FETCH_ASSOC);
        $quantity = $row['product_qty'];

// Calculate the new quantity after the purchase
        $new_quantity = $quantity - $itemquantity;

// Update the product quantity in the database
        $sql = "UPDATE tbl_products SET product_qty = $new_quantity WHERE product_id = $id";
        $db->prepare($sql)->execute();

           unset($_SESSION['cart']);

           header("Location: Shop.php");
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
        }
?>
