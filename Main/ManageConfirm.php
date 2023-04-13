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
        $itemname = $item['name'];
        $itemquantity = $item['Quantity'];
        $total = $item['price']*$item['Quantity'];

        $sql = "INSERT INTO tbl_order(customer_name, customer_address, customer_phone, customer_email, 
        order_product, order_quantity, order_total, order_date, discount, PaymentType, cus_for) VALUES (?,?,?,?,?,?,?,?,?,?,?)";
        $sq = $db->prepare($sql);

        try {
            $sq->execute(array($username, $address, $phone, $email, $itemname, $itemquantity, $total, $current_date, $discount, $payment, $cus_for));
            unset($_SESSION['cart']);

           header("Location: Shop.php");
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
        }
?>
