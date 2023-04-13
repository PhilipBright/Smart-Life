<?php   
include('../Components/AdminNavigation.php');
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
<body class="dark:bg-gray-900">




<!-- Main modal -->
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

<form action="category.php" method="POST" enctype="multipart/form-data" >
  <div class="mb-6">
    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category Name</label>
    <input name="title" type="text"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
  </div>
  <div class="mb-6">
    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
    <input name="description" type="text"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
  </div>
  <div class="mb-6">
   
<label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="user_avatar">Upload file</label>
<input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" name="image" type="file">
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
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>
<?php 
        //submit button task
        $sql = "INSERT INTO tbl_category(cat_title, cat_description, cat_image_name) VALUE(?,?,?)";
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
               $description = $_POST['description'];
              $image = $filename;
             
                
                // $active = $_POST['active'];
        
        
            try{
                $sq->execute(array($title, $description, $image));
              
            }
     catch (PDOException$e) {
        echo $e->getMessage();
            }} ?>