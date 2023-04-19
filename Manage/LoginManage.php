<?php
include('../Components/connect.php');
session_start();

if (isset($_POST['sign_submit'])) {
    $signUsername = $_POST['sign_username'];
    $signEmail = $_POST['sign_email'];
    $signPassword = $_POST['sign_password'];
    $signImage = $_POST['sign_image'];
  
    $select = "SELECT * FROM tbl_admin WHERE admin_email = :email AND admin_password = :password";
    $result = $db->prepare($select);
    $result->bindParam(':email', $signEmail);
    $result->bindParam(':password', $signPassword);
  
    $result->execute();
  
    if ($result->rowCount() > 0) {
      $row = $result->fetch();
      $username = $row['admin_username'];
      $email = $row['admin_email'];
      $image = $row['admin_image'];
      
  
      $_SESSION['A_username'] = $row['admin_username'];
      $_SESSION['A_email'] = $row['admin_email'];
      $_SESSION['A_image'] = $row['admin_image'];
  
      header('Location: Dashboard.php');
    } else {
      echo "admin does not exist!!";
    }
  }
?>
<?php 
$sql = "INSERT INTO tbl_admin(admin_username, admin_email, admin_image, admin_password) VALUE (?,?,?,?)";
$sq = $db->prepare($sql);
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

    $sq->execute(array($username, $userEmail, $userImage, $password ));
        header('Location: AdminAcc.php');

}

?>