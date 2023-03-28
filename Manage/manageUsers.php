
<?php
    include('../Components/AdminNavigation.php');
      include('../Components/connect.php');
    $sql = $db->prepare("SELECT * FROM tbl_users");
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

<body>

   
    <div class=" flex w-screen h-screen">
      
        <div class=" w-screen mx-[2rem] mt-[1rem] ">
            <div class="main-content">
                <div class="wrapper">
                    <h1 class="text-center">Manage Users</h1><br>
                    <script src="https://cdn.tailwindcss.com"></script>
                    <link rel="stylesheet" href="https://cdn.tailgrids.com/tailgrids-fallback.css" />
                    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

                    <!-- ====== Table Section Start -->
                    <section class="bg-white py-20 lg:py-[120px]">
                        <div class="container">
                            <div class="flex flex-wrap -mx-4">
                                <div class="w-full px-4">
                                    <div class="max-w-full overflow-x-auto">
                                        <table class="table-auto w-full">
                                            <thead>
                                                <tr class="bg-primary text-center">
                                                    <th class="
                           w-1/6
                           min-w-[160px]
                           text-lg
                           font-semibold
                           text-white
                           py-4
                           lg:py-7
                           px-3
                           lg:px-4
                           border-l border-transparent
                           ">
                                                        ID
                                                    </th>
                                                    <th class="
                           w-1/6
                           min-w-[160px]
                           text-lg
                           font-semibold
                           text-white
                           py-4
                           lg:py-7
                           px-3
                           lg:px-4
                           ">
                                                        Full Name
                                                    </th>
                                                    <th class="
                           w-1/6
                           min-w-[160px]
                           text-lg
                           font-semibold
                           text-white
                           py-4
                           lg:py-7
                           px-3
                           lg:px-4
                           ">
                                                        Username
                                                    </th>
                                                    <th class="
                           w-1/6
                           min-w-[160px]
                           text-lg
                           font-semibold
                           text-white
                           py-4
                           lg:py-7
                           px-3
                           lg:px-4
                           ">
                                                        Password
                                                    </th>
                                                    <th class="
                           w-1/6
                           min-w-[160px]
                           text-lg
                           font-semibold
                           text-white
                           py-4
                           lg:py-7
                           px-3
                           lg:px-4
                           ">
                                                        Edit User
                                                    </th>
                                                    <th class="
                           w-1/6
                           min-w-[160px]
                           text-lg
                           font-semibold
                           text-white
                           py-4
                           lg:py-7
                           px-3
                           lg:px-4
                           border-r border-transparent
                           ">
                                                        Delete User
                                                    </th>
                                                </tr>
                                            </thead>
                                            <?php 
                         while ($data = $sql->fetch(PDO::FETCH_ASSOC)){
                            extract($data);
                          
                    ?>
                                            <tbody>
                                                
                   
                                               
                                                <tr>
                                                    <td class="
                           text-center text-dark
                           font-medium
                           text-base
                           py-5
                           px-2
                           bg-[#F3F6FF]
                           border-b border-l border-[#E8E8E8]
                           ">
                                                       <?php echo $user_id ?>
                                                    </td>
                                                    <td class="
                           text-center text-dark
                           font-medium
                           text-base
                           py-5
                           px-2
                           bg-white
                           border-b border-[#E8E8E8]
                           ">
                           <?php echo $full_name ?>
                                                    </td>
                                                    <td class="
                           text-center text-dark
                           font-medium
                           text-base
                           py-5
                           px-2
                           bg-[#F3F6FF]
                           border-b border-[#E8E8E8]
                           ">
                           <?php echo $username ?>
                                                    </td>
                                                    <td class="
                           text-center text-dark
                           font-medium
                           text-base
                           py-5
                           px-2
                           bg-white
                           border-b border-[#E8E8E8]
                           ">
                           <?php echo $password ?>
                                                    </td>
                                                    <td class="
                           text-center 
                           font-medium
                           text-base
                           py-5
                           px-2
                           bg-[#F3F6FF]
                           border-b border-[#E8E8E8]
                           "> <button class="
                              border border-primary
                              py-2
                              px-6
                              text-primary
                              inline-block
                              rounded
                              hover:bg-primary hover:text-white
                              ">
                                                            Edit
                                                        </button>
                                                        
                                                    </td>
                                                    <td class="
                           text-center text-dark
                           font-medium
                           text-base
                           py-5
                           px-2
                           bg-white
                           border-b border-r border-[#E8E8E8]
                           ">
                           
                                                        <button class="
                              border border-primary
                              py-2
                              px-6
                              text-primary
                              inline-block
                              rounded
                              hover:bg-primary hover:text-white
                              "> <a href="./delete.php?uid=<?php echo $user_id ?>">Delete</a>
                                                            
                                                        </button>
                                                    </td>
                                                </tr>
                                               
                                            </tbody>
                                            <?php } ?>
                                        </table>
                                       <a href="./addUser.php"> <button class="
                              border border-primary
                              ml-4
                              mt-3
                              py-2
                              px-6
                              text-primary
                              inline-block
                              rounded
                              hover:bg-primary hover:text-white
                              ">
                                                            Add User
                                                        </button>
                                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>

    </div>

    <script src="https://cdn.tailwindcss.com"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <script>
        function Close() {
            document.querySelector('.side').classList.toggle('ml-[-20rem]');
            document.querySelector('.menu').classList.toggle('hidden');

        }
    </script>
</body>

</html>
