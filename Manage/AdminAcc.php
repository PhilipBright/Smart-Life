<?php 
include('../Components/connect.php'); 
include('../Components/AdminNavigation.php');
$sql = $db->prepare("SELECT * FROM tbl_admin");
$sql->execute();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div id="addUser-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
    <div class="relative w-full h-full max-w-md md:h-auto">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="addUser-modal">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="px-6 py-6 lg:px-8">
                <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Add New User</h3>
                <form class="space-y-6" action="LoginManage.php" method="POST" enctype="multipart/form-data">
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

<section class="w-screen h-screen bg-gray-50 dark:bg-gray-900 py-3 sm:py-5">
        <div class="px-4 mx-auto max-w-screen-2xl lg:px-12">
            <div class="relative overflow-hidden bg-white shadow-md dark:bg-gray-800 sm:rounded-lg">
                <div class="flex flex-col px-4 py-3 space-y-3 lg:flex-row lg:items-center lg:justify-between lg:space-y-0 lg:space-x-4">
                    <div class="flex items-center flex-2 space-x-4">
                        <h5>
                        <?php 
    $sql = $db->prepare("SELECT * FROM tbl_admin");
    $sql->execute();
    $num_users = $sql->rowCount();
    
 ?>
                            <span class="text-gray-500">Total Admins:</span>
                            <span class="dark:text-white"><?php echo $num_users ?></span>
                        </h5>
                       

                    </div>

                    <div class="flex flex-col flex-shrink-0 space-y-3 md:flex-row md:items-center lg:justify-end md:space-y-0 md:space-x-3">
                        <button data-modal-target="addUser-modal" data-modal-toggle="addUser-modal" type="button" class="flex items-center justify-center px-4 py-2 text-sm font-medium text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">
                            <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path clip-rule="evenodd" fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                            </svg>
                            Add New User
                        </button>
                       
                       

                    </div>
                </div>
                <div class="overflow-x-auto">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
            <th scope="col" class="pl-8 py-3">User ID</th>
                <th scope="col" class="pl-28 py-3">
                    Profile
                </th>
                <th scope="col" class="pl-28 py-3">
                    Name
                </th>
                <th scope="col" class="pl-36 py-3">
                    Email
                </th>
                <th scope="col" class="pl-8 py-3">
                    Password
                </th>
                <th scope="col" class="pl-8 py-3">
                    Update
                </th>
                <th scope="col" class="pl-8 py-3">
                    Delete
                </th>
            </tr>
        </thead>
        <?php
                 while ($data = $sql->fetch(PDO::FETCH_ASSOC)){
                  extract($data);
                                                
                                            ?>
        <tbody>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
            
            <td class="pl-12 py-2">
                                    <span class="bg-primary-100 text-primary-800 text-xs font-medium px-2 py-0.5 rounded dark:bg-primary-900 dark:text-primary-300"><?php echo $admin_id ?></span>
                                </td>
                <td scope="row" class="ml-28 flex items-center  py-4 text-gray-900 whitespace-nowrap dark:text-white">
                    <img class="w-10 h-10 rounded-full" src="../assets/<?php echo $admin_image ?>" alt="">
                    
                </td>
                <td class="pl-24 py-4">
                <div class="text-base font-bold"><?php echo $admin_username ?></div>
                </td>
                <td class="pl-24 py-4">
                <div class="font-normal text-gray-500"><?php echo $admin_email ?></div>
                </td>
                <td class="pl-8 py-4">
                <div class="font-normal text-gray-500"><?php echo $admin_password ?></div>
                </td>
                <th class="px-4 py-3  ">
                                   
                                    <div class=" z-10 w-16 bg-white rounded-lg divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                                        <!-- <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="apple-imac-27-dropdown-button">

                                            <li>
                                                <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit</a>
                                            </li>
                                        </ul> -->
                                        <div class="py-1">
                                        <a href="./Edit.php?Aupdate=<?php echo $admin_id?>" class="block py-2 px-4 hover:bg-gray-100 hover:rounded-lg dark:hover:bg-gray-600 dark:hover:text-white">Edit</a>
                                        </div>
                                    </div>
                                </th>
                                <th class="px-4 py-3 ">
                                   
                                    <div  class=" z-10 w-20 bg-white rounded-lg divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                                        
                                        <div class="py-1">
                                        <a href="./Edit.php?Adelete=<?php echo $admin_id?>"  class="block py-2 px-4 text-sm text-gray-700 hover:rounded-lg  hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Delete </a>

                                    </div>
                                    </div>
                                </th>
            </tr>
            
        </tbody>
        <?php } ?>
    </table>
                </div>
                <nav class="flex flex-col items-start justify-between p-4 space-y-3 md:flex-row md:items-center md:space-y-0" aria-label="Table navigation"></nav>

            </div>
        </div>
    </section>

<!-- Modal toggle -->


<!-- Main modal -->



</body>
</html>

