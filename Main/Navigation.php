<?php
session_start();
include('../Components/connect.php');
$sql = $db->prepare("SELECT * FROM tbl_users");
$sql->execute();

if (isset($_POST['sign_submit'])) {
  $signUsername = $_POST['sign_username'];
  $signEmail = $_POST['sign_email'];
  $signPassword = $_POST['sign_password'];
  $signImage = $_POST['sign_image'];

  $select = "SELECT * FROM tbl_users WHERE user_email = :email AND password = :password";
  $result = $db->prepare($select);
  $result->bindParam(':email', $signEmail);
  $result->bindParam(':password', $signPassword);

  $result->execute();

  if ($result->rowCount() > 0) {
    $row = $result->fetch();
    $username = $row['username'];
    $email = $row['user_email'];
    $image = $row['user_image'];

    $_SESSION['U_username'] = $row['username'];
    $_SESSION['U_email'] = $row['user_email'];
    $_SESSION['U_image'] = $row['user_image'];

    echo "Welcome";
  } else {
    echo "user does not exist!!";
  }
}

$sql = "INSERT INTO tbl_users(user_image, username, password, user_email) VALUE (?,?,?,?)";
$sq = $db->prepare($sql);
if (isset($_POST['reg_submit'])) {
  if (isset($_FILES['reg_image'])) {
    $error = array();

    $filenames = $_FILES['reg_image']['name']; //logo.jpg
    $filsize  = $_FILES['reg_image']['size']; //2345678 bytes
    $filetype = $_FILES['reg_image']['type']; //logo/jpg
    $filetmp  = $_FILES['reg_image']['tmp_name']; //astadf

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
  $username = $_POST['reg_username'];
  $password = $_POST['reg_password'];
  $userImage = $filenames;
  $userEmail = $_POST['reg_email'];

  $sq->execute(array($userImage, $username, $password, $userEmail));
  echo "data Inserted";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.css" rel="stylesheet" />

  <title>Navigation</title>
  
<style>
  .nav{
    z-index: 999999;
  }
</style>
</head>
<style>
    @import "https://unpkg.com/open-props/easings.min.css";

    .display-none {
      @apply hidden;
    }

    :root {
      --icon-fill: yellow;
      --icon-fill-hover: black;
    }


    .sun-and-moon> :is(.moon, .sun, .sun-beams) {
      transform-origin: center;
    }

    .sun-and-moon> :is(.moon, .sun) {
      fill: var(--icon-fill);
    }

    .theme-toggle:is(:hover, :focus-visible)>.sun-and-moon> :is(.moon, .sun) {
      fill: var(--icon-fill-hover);
    }

    .sun-and-moon>.sun-beams {
      stroke: var(--icon-fill);
      stroke-width: 2px;
    }

    .theme-toggle:is(:hover, :focus-visible) .sun-and-moon>.sun-beams {
      stroke: var(--icon-fill-hover);
    }

    [data-theme="dark"] .sun-and-moon>.sun {
      transform: scale(1.75);
    }

    [data-theme="dark"] .sun-and-moon>.sun-beams {
      opacity: 0;
    }

    [data-theme="dark"] .sun-and-moon>.moon>circle {
      transform: translateX(-7px);
    }

    @supports (cx: 1) {
      [data-theme="dark"] .sun-and-moon>.moon>circle {
        cx: 17;
        transform: translateX(0);
      }
    }

    @media (prefers-reduced-motion: no-preference) {
      .sun-and-moon>.sun {
        transition: transform .5s var(--ease-elastic-3);
      }

      .sun-and-moon>.sun-beams {
        transition: transform .5s var(--ease-elastic-4), opacity .5s var(--ease-3);
      }

      .sun-and-moon .moon>circle {
        transition: transform .25s var(--ease-out-5);
      }

      @supports (cx: 1) {
        .sun-and-moon .moon>circle {
          transition: cx .25s var(--ease-out-5);
        }
      }

      [data-theme="dark"] .sun-and-moon>.sun {
        transition-timing-function: var(--ease-3);
        transition-duration: .25s;
        transform: scale(1.75);
      }

      [data-theme="dark"] .sun-and-moon>.sun-beams {
        transition-duration: .15s;
        transform: rotateZ(-25deg);
      }

      [data-theme="dark"] .sun-and-moon>.moon>circle {
        transition-duration: .5s;
        transition-delay: .25s;
      }
    }
  </style>

<body>

  <nav class="nav fixed w-screen top-0  flex bg-white border-gray-200 px-2 sm:px-4 lg:justify-start py-2.5 dark:bg-gray-900 ">
    <div class="flex items-center w-screen justify-between sm:justify-start  flex-wrap ">
      <a href="./Home.php" class="flex items-center lg:ml-2">
        <img src="../assets/logo.svg" class="h-6 mr-3 sm:h-9 rounded-full" alt="Flowbite Logo" />

      </a>
      <div class="md:w-7/12 flex items-center text-end md:order-2 justify-end lg:relative lg:ml-32">

        <div>
          <form method="GET" class="hidden lg:block pr-5 toggleSidebarMobileSearch ">
            <label for="topbar-search" class="sr-only">Search</label>
            <div class="relative mt-1  lg:w-64">
              <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                <svg class="w-5 h-5 text-gray-500 dark:text-gray-400 " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                </svg>
              </div>
              <input type="text" name="email" id="topbar-search" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Search">
            </div>
          </form>


          <button id="toggleSidebarMobileSearch" type="button" class="search p-2 text-gray-500 mr-4 rounded-lg lg:hidden hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white" onclick="Show()">
            <span class="sr-only">Search</span>
          
            <svg aria-hidden="true" class="w-6 h-6 " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
            </svg>
          </button>

        </div>

        <button type="button" class="flex mr-3 text-sm bg-gray-800 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
          <span class="sr-only">Open user menu</span>
          <?php if (!isset($_SESSION['U_image'])) { ?>
            <img class="w-8 h-8 rounded-full" src="../assets/user.png">
          <?php } else { ?>
            <img class="w-8 h-8 rounded-full" src="../assets/<?php echo $_SESSION['U_image'] ?>">
          <?php } ?>
        </button>
        <div class="ml-6 mt-1">
          <button class="theme-toggle" id="theme-toggle" title="Toggles light & dark" aria-label="auto" aria-live="polite">
            <svg class="sun-and-moon" aria-hidden="true" width="24" height="24" viewBox="0 0 24 24">
              <mask class="moon" id="moon-mask">
                <rect x="0" y="0" width="100%" height="100%" fill="white" />
                <circle cx="24" cy="10" r="6" fill="black" />
              </mask>
              <circle class="sun" cx="12" cy="12" r="6" mask="url(#moon-mask)" fill="currentColor" />
              <g class="sun-beams" stroke="currentColor">
                <line x1="12" y1="1" x2="12" y2="3" />
                <line x1="12" y1="21" x2="12" y2="23" />
                <line x1="4.22" y1="4.22" x2="5.64" y2="5.64" />
                <line x1="18.36" y1="18.36" x2="19.78" y2="19.78" />
                <line x1="1" y1="12" x2="3" y2="12" />
                <line x1="21" y1="12" x2="23" y2="12" />
                <line x1="4.22" y1="19.78" x2="5.64" y2="18.36" />
                <line x1="18.36" y1="5.64" x2="19.78" y2="4.22" />
              </g>
            </svg>
          </button>
          <!-- <button class="w-7 ml-5  ">
  <a href="../Main/Cart.php">
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="text-blue-500 dark:text-white fill-current"><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/></svg>

  </a>
</button> -->

          <button type="button" class="w-auto h-auto  relative inline-flex items-center px-3 py-2.5 text-sm font-medium text-center text-white rounded-lg focus:ring-4 focus:outline-none  ">
            <a href="../Main/Cart.php">
              <img src="../assets/cart.png" alt="" class="w-8 h-8">
            </a>

            <div class="absolute inline-flex items-center justify-center w-6 h-6 text-xs font-bold text-white bg-red-500 border-2 border-white rounded-full -top-2 -right-2 dark:border-gray-900"> <?php 
          if($_SESSION['cart']!=null){
            echo $counter = count($_SESSION['cart']);
          }
          else echo '0'
          //echo $counter = count($_SESSION['cart']);
           ?></div>
          </button>
         

        </div>

        <!-- Dropdown menu -->
        <div class=" z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600" id="user-dropdown">
          <div class="px-4 py-3">
            <span class="block text-sm text-gray-900 dark:text-white"><?php echo $_SESSION['U_username'] ?></span>
            <span class="block text-sm font-medium text-gray-500 truncate dark:text-gray-400"><?php
                                                                                              if (!isset($_SESSION['U_username'])) {
                                                                                                echo "User is not logged in";
                                                                                              } else echo $_SESSION['U_email'] ?></span>
          </div>
          <ul class="py-2" aria-labelledby="user-menu-button">
            <li>
              <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Dashboard</a>
            </li>
            <li>
              <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Settings</a>
            </li>
            <li>
              <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Earnings</a>
            </li>

            <!-- <li>
            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">
              
             
            </a>
          </li> -->
            <?php if (!isset($_SESSION['U_username'])) {
            ?>
              <li>
                <a data-modal-target="account-modal" data-modal-toggle="account-modal" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">
                  Sign in
                </a>
              </li>
            <?php } else { ?>
              <li>
                <a href="./signOut.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">
                  Sign Out
                </a>
              </li>
            <?php
            }
            ?>

          </ul>
        </div>
        <button data-collapse-toggle="mobile-menu-2" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mobile-menu-2" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
          </svg>
        </button>

      </div>
      <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="mobile-menu-2">
        <ul class="flex flex-col p-4 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
          <li>
            <a href="./Home.php" class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700" aria-current="page">Home</a>
          </li>
          <li>
            <a href="./Category.php" class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Category</a>
          </li>
          <li>
            <a href="./Shop.php" class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Shop</a>
          </li>
          <li>
            <a href="#" class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About</a>
          </li>
          <li>
            <a href="#Service" class=" block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Service</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- authentication toggle -->
  <div id="account-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
    <div class="relative w-full h-full max-w-md md:h-auto">

      <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
        <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="account-modal">
          <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
          </svg>
          <span class="sr-only">Close modal</span>
        </button>
        <div class="px-6 py-6 lg:px-8">
          <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Sign in to our platform</h3>
          <form class="space-y-6" method="POST">
            <div>
              <label for="username" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
              <input type="username" name="sign_username" id="signUsername" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="name@company.com" required>
            </div>
            <div>
              <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
              <input type="email" name="sign_email" id="signEmail" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="name@company.com" required>
            </div>
            <div>
              <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your password</label>
              <input type="signPassword" name="sign_password" id="signPassword" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
            </div>
            <div class="flex justify-between">
              <div class="flex items-start">
                <div class="flex items-center h-5">
                  <input id="remember" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-600 dark:border-gray-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" required>
                </div>
                <label for="remember" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Remember me</label>
              </div>
              <a href="#" class="text-sm text-blue-700 hover:underline dark:text-blue-500">Lost Password?</a>
            </div>
            <button type="submit" name="sign_submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Login to your account</button>
            <div class="text-sm font-medium text-gray-500 dark:text-gray-300">
              Not registered? <a data-modal-hide="account-modal" data-modal-target="register-modal" data-modal-toggle="register-modal" class="text-blue-700 hover:underline dark:text-blue-500">Create account</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Registration Modal -->
  <div id="register-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
    <div class="relative w-full h-full max-w-md md:h-auto">

      <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
        <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="register-modal">
          <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
          </svg>
          <span class="sr-only">Close modal</span>
        </button>
        <div class="px-6 py-6 lg:px-8">
          <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Register to our platform</h3>
          <form class="space-y-6" method="POST" enctype="multipart/form-data">
            <div>
              <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username</label>
              <input type="username" name="reg_username" id="reg_username" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
            </div>
            <div>
              <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
              <input type="email" name="reg_email" id="reg_email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="name@company.com" required>
            </div>
            <div>
              <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
              <input type="password" name="reg_password" id="reg_password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
            </div>
            <div class="">
              <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Repeat your Password</label>
              <input type="password" name="reg_rep_password" id="reg_rep_password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
            </div>
            <div class="pb-8">
              <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Upload profile</label>
              <input type="file" name="reg_image" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input">
            </div>

            <button data-modal-target="account-modal" data-modal-toggle="account-modal" type="submit" name="reg_submit" class="w-full  text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Register your account</button>
            <div class="text-sm font-medium text-gray-500 dark:text-gray-300">
              Already have an account? <a class="text-blue-700 hover:underline dark:text-blue-500">Sign in</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  
  <script src="https://cdn.tailwindcss.com"></script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
 

  <script>
    function Show() {
      document.querySelector('.toggleSidebarMobileSearch').classList.toggle('hidden');
      document.querySelector('.search').classList.toggle('hidden');
    }
  </script>
  <script src="../darkLight.js"></script>

</body>

</html>
