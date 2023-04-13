
<?php 
     include('../Components/AdminNavigation.php');
    include('../Components/connect.php');
     $sql = $db->prepare("SELECT * FROM tbl_category");
     $sql->execute();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
    <title>Admin Dashboard</title>
    
</head>
<body class="dark:bg-gray-900">

    <div class=" w-screen h-screen dark:bg-gray-900">
        <div class=" pl-20 grid grid-cols-2 md:grid-cols-2 gap-4 pt-4 pb-4">
        <?php 
            while ($data = $sql->fetch(PDO::FETCH_ASSOC)){
                extract($data);
        ?>
<div class="w-auto h-auto ">
<div class="flex flex-col w-[100%] h-80  items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
    <img class="object-cover w-64 rounded-lg h-64   ml-4 " src="../assets/<?php echo $cat_image_name ?>" alt="">
    <div class="flex flex-col justify-between p-4 leading-normal">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><?php echo $cat_title ?></h5>
        <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-green-300"><?php echo "No.".$category_id ?></h5>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
        <div class="">
        <button type="submit" name="Edit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Edit</button>
        <button type="submit" name="Delete" class="ml-4 text-white bg-red-500 hover:bg-red-600 focus:ring-4 focus:outline-none focus:bg-red-600 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-500 dark:hover:bg-red-600 dark:focus:ring-red-600">Delete</button>

    </div>
    </div>
    
</div>


</div>

<?php } ?>
<form action="addCategory.php" method="POST">
<div class="flex w-80 justify-center ml-32 items-center bg-white border border-gray-200 rounded-lg shadow  hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
    <button type="submit" name="add_category"><img src="../assets/plus.png" alt="" class="w-64"></button>
</div>
</form>
</div>

</div>

<script src="https://cdn.tailwindcss.com"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

<script>
    
</script>
</body>
</html>
<?php 
  
?>

