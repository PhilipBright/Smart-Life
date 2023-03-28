
<html>
  <head>
    <title>Cart</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center border rounded bg-light my-5">
          <h1>My Cart</h1>
        </div>
<!--         table -->

        <div class="col-lg-9">
          <table class="table">
            <thead class="text-center">
              <tr>
                <th scope="col">Serial No.</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Quantity</th>
                <th scope="col">Total</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody class="text-center">
              <?php 
                  if(isset($_SESSION['cart'])){
                    foreach($_SESSION['cart'] as $key => $value) {
                        $key = $key+1;
                    }
                  }
              ?>
                <tr>
                  <td><?php echo $key; ?></td>
                  <td><?php echo $value['name']; ?></td>
                  <td><?php echo $value['price']; ?></td>
                  <td><?php echo $value['qunatity']; ?></td>
                  <td></td>
                  <td>
                    <form action="manageCart.php" method="POST">
                      <input type="text" name="remove">
                        <input type="hidden" name="name">
                    </form>
                  </td>

                </tr>
            </tbody>
          </table>
        </div>
<!--         box -->
        <div class="col-lg-3">
          <div class="border bg-light rounded text-center p-4">
            <h4>Total</h4>
            <h5 id="gtotal"></h5>
            <form>
              <a href="#" class="btn btn-outline-info">Checkout</a>
            </form>
          </div>
        </div>
      </div>
    </div>

    
  </body>
</html>