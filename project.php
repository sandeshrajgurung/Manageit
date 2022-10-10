<?php

include('leaveController.php');
?>
<?php
include "./session.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="plugins/bootstrap-5.1.3/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="css/employee.css" />

</head>

<body>
<nav
        class="bg-gradient-to-r from-orange-400 to-yellow-400 border-gray-200 px-2 sm:px-4 py-2.5 rounded dark:bg-gray-800">
        <div class="container flex flex-wrap justify-between items-center mx-auto">
            <a href="https://flowbite.com" class="flex items-center">
                <img src="./img/Frame 1.png" class=" h-6 sm:h-9 rounded-full" alt="Flowbite Logo">
                <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Manageit</span>
            </a>
            <div class="flex items-center md:order-2">
                <button type="button"
                    class="flex mr-3 text-sm bg-gray-800 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                    id="user-menu-button" aria-expanded="false" data-dropdown-toggle="dropdown">
                    <span class="sr-only">Open user menu</span>
                    <img class="w-8 h-8 rounded-full" src="<?php echo "img/profile-pic/".$_SESSION['user']['image'] ?>" alt="user photo">
                </button>
                <p class="ml-4 mr-4"><?php echo $_SESSION['user']['username']; ?></p>

                <div class="hidden z-50 my-4 text-base list-none bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600"
                    id="dropdown" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="top"
                    style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate3d(1054.4px, 1016px, 0px);">
                    
                    <ul class="py-1" aria-labelledby="dropdown">
                        <li>
                            <a href="#"
                                class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Dashboard</a>
                        </li>
                        
                        <li>
                            <a href="logout.php"
                                class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign
                                out</a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </nav>


    <!--Side bar-->
    <div class="flex">
        <div class="flex flex-col w-64 h-screen  overflow-y-auto border-r">
            <div class="flex flex-col justify-between mt-6">
                <aside>
                    <div class="px-3 py-2 overflow-y-auto rounded ">
                        <ul class="space-y-2 sidebar">
                            <li>
                                <a href="dashboard.php" class="dark:text-white hover:bg-orange-400 ">
                                    <i class="material-icons " style="color:#F29D38">dashboard</i>
                                    <span class="ml-3">Dashboard</span>
                                </a>
                            </li>
                            <li>
                                <a href="employee.php" class="dark:text-white hover:bg-orange-400 ">
                                    <i class="material-icons" style="color:#F29D38">badge</i>
                                    <span class="flex-1 ml-3 whitespace-nowrap">Employee</span>

                                </a>
                            </li>
                            <li>
                                <a href="payroll.php" class="dark:text-white hover:bg-orange-400 ">
                                    <i class="material-icons" style="color:#F29D38">credit_card</i>
                                    <span class="flex-1 ml-3 whitespace-nowrap">Payroll</span>

                                </a>
                            </li>
                            <li>
                                <a href="project.php" class="dark:text-white hover:bg-orange-400 ">
                                    <i class="material-icons" style="color:#F29D38">assignment</i>
                                    <span class="flex-1 ml-3 whitespace-nowrap">Project</span>
                                </a>
                            </li>
                            <li>
                                <button type="button"
                                    class="flex items-center p-2 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-orange-400 dark:text-white "
                                    aria-controls="leave-dropdown" data-collapse-toggle="leave-dropdown">
                                    <i class="material-icons" style="color:#F29D38">time_to_leave</i>
                                    <span class="flex-1 ml-3 text-left whitespace-nowrap"
                                        sidebar-toggle-item>Leave</span>
                                    <i class="material-icons" style="color:#F29D38">keyboard_arrow_down</i>
                                </button>
                                <ul id="leave-dropdown" class="hidden py-2 space-y-2 ">
                                    <li>
                                        <a href="leave.php"
                                            class="flex items-center p-2 pl-11 w-full  text-xs font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-orange-400 dark:text-white ">Leave
                                            history</a>
                                    </li>
                                    <li>
                                        <a href="request.php"
                                            class="flex items-center p-2 pl-11 w-full text-xs font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-orange-400 dark:text-white ">Request
                                            <span
                                                class="inline-flex justify-center items-center p-3 ml-3 w-3 h-3 text-sm font-medium text-blue-600 bg-orange-200 rounded-full dark:bg-blue-900 dark:text-blue-200">3</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="event.php" class="dark:text-white hover:bg-orange-400 ">
                                    <i class="material-icons" style="color:#F29D38">event</i>
                                    <span class="flex-1 ml-3 whitespace-nowrap">Event</span>
                                </a>
                            </li>

                            <li>
                                <a href="notice.php"
                                    class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg transition duration-75 hover:bg-orange-400  dark:text-white group">
                                    <i class="material-icons" style="color:#F29D38">notifications</i>
                                    <span class="ml-3">Notice</span>
                                </a>
                            </li>
                            <li>
                                <button type="button"
                                    class="flex items-center p-2 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-orange-400 dark:text-white "
                                    aria-controls="asset-dropdown" data-collapse-toggle="asset-dropdown">
                                    <i class="material-icons" style="color:#F29D38">local_atm</i>
                                    <span class="flex-1 ml-3 text-left whitespace-nowrap"
                                        sidebar-toggle-item>Asset</span>
                                    <i class="material-icons" style="color:#F29D38">keyboard_arrow_down</i>
                                </button>
                                <ul id="asset-dropdown" class="hidden py-2 space-y-2 ">
                                    <li>
                                        <a href="asset.php"
                                            class="flex items-center p-2 pl-11 w-full  text-xs font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-orange-400 dark:text-white ">Asset
                                            history</a>
                                    </li>

                                    <li>
                                        <a href="assetForm.php"
                                            class="flex items-center p-2 pl-11 w-full text-xs font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-orange-400 dark:text-white ">Request
                                            <span
                                                class="inline-flex justify-center items-center p-3 ml-3 w-3 h-3 text-sm font-medium text-blue-600 bg-orange-200 rounded-full dark:bg-blue-900 dark:text-blue-200">3</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="unfinished.php" class="dark:text-white hover:bg-orange-400 ">
                                    <i class="material-icons" style="color:#F29D38">description</i>
                                    <span class="flex-1 ml-3 whitespace-nowrap">Files</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="pt-4 mt-4 space-y-2 border-t border-gray-200 dark:border-gray-700 sidebar">
                            <li>
                                <a href="unfinished.php" class="dark:text-white hover:bg-orange-400 active:bg-violet-700 ">
                                    <i class="material-icons" style="color:#F29D38">message</i>
                                    <span class="flex-1 ml-3 whitespace-nowrap">Message</span>
                                    <span
                                        class="inline-flex justify-center items-center p-3 ml-3 w-3 h-3 text-sm font-medium text-blue-600 bg-orange-200 rounded-full dark:bg-blue-900 dark:text-blue-200">3</span>

                                </a>
                            </li>
                            <li>
                                <a href="unfinished.php"
                                    class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg transition duration-75 hover:bg-orange-400  dark:text-white group">
                                    <i class="material-icons" style="color:#F29D38">logout</i>
                                    <span class="ml-3">Log Out</span>
                                </a>
                            </li>

                        </ul>
                    </div>

                </aside>

            </div>
        </div>
        <!--background-->
        <div class="w-full h-auto p-3  overflow-y-auto  bg-gray-100">
            <!--breadcrumbs-->
            <nav class="flex" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3">
                    <li class="inline-flex items-center">
                        <a href="unfinished.php"
                            class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
                            <svg class="mr-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z">
                                </path>
                            </svg>
                            Home
                        </a>
                    </li>
                    <li aria-current="page">
                        <div class="flex items-center">
                            <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="ml-1 text-sm font-medium text-gray-400 md:ml-2 dark:text-gray-500">
                                Events</span>
                        </div>
                    </li>
                </ol>
            </nav>

            <!--project-->
            
            <div class="grid md:grid-cols-3 gap-6 text-center mt-4">
            
                <div>
                    <div class="block rounded-lg shadow-lg bg-white">
                        <div class="overflow-hidden rounded-t-lg h-20" style="background-color: #9d789b;">
                        <p class="text-white mt-3 text-2xl">Project</p>
                    </div>
                        
                        <div class="p-6">
                            <h4 class="text-2xl font-semibold mb-2">5</h4>
                           
                            
                        </div>
                    </div>
                </div>
                <div>
                    <div class="block rounded-lg shadow-lg bg-white">
                        <div class="overflow-hidden rounded-t-lg h-20" style="background-color: #7a81a8;">
                        <p class="text-white mt-3 text-2xl">Working employees
                        </p>
                    </div>
                        
                        <div class="p-6">
                            <h4 class="text-2xl font-semibold mb-2">25</h4>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="block rounded-lg shadow-lg bg-white">
                        <div class="overflow-hidden rounded-t-lg h-20" style="background-color: #6d5b98;">
                        <p class="text-white mt-3 text-2xl">Free employee</p>
                    </div>
                        
                        <div class="p-6">
                            <h4 class="text-2xl font-semibold mb-2">25</h4>
                        </div>
                    </div>
                </div>
                
            </div>
            
            <div class="overflow-hidden mt-4">
            <?php $results = mysqli_query($db, "SELECT * FROM projects"); ?>
            
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-orange-400 ">
                                    <tr class="list_head">
                                        <th scope="col">Project</th>
                                        <th scope="col">Project Manager</th>
                                        <th scope="col">Start Date</th>
                                        <th scope="col" class="relative px-6 py-3">
                                            <span class="sr-only">Edit</span>
                                        </th>
                                        <th scope="col" class="relative px-6 py-3">
                                            <span class="sr-only">Delete</span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                <?php while ($row = mysqli_fetch_array($results)) { ?>
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap"><a href="profile.php">
                                        <?php echo $row['project_name']; ?>
                                            </a>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                        <?php echo $row['project_manager']; ?>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><?php echo $row['start_date']; ?></td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                            <a href="employeeController.php?edit=<?php echo $user->id; ?>"
                                                class="text-indigo-600 hover:text-indigo-900">Edit</a>

                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-left text-sm font-medium">
                                            <a href="employeeController.php?del=<?php echo $user->id; ?>">Delete</a>
                                        </td>
                                        <?php } ?> 
                                    </tr>
                                  
                                      <!-- More project... -->
                                </tbody>
                                
                            </table>
                            <button onclick="location.href='projectForm.php'"
                class="bg-orange-500 hover:bg-orange-600 text-white font-bold py-2 px-4 my-4 rounded-full inline-flex items-center">
                <i class="material-icons" style="color:white">add</i> Project
            </button>
                        </div>

                        <div class="bg-white p-3 shadow-sm rounded-sm">
                            <div class="flex items-center space-x-2 font-semibold text-orange-400 leading-8">
                                <span class="text-orange-400">
                                <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                            </svg>
                                </span>
                                <span class="tracking-wide">Project Details</span>
                            </div>
                            
                            <div class="text-gray-700">
                                
                                <div class="grid md:grid-cols-2 text-sm">
                                    <div class="grid grid-cols-2">
                                        <div class="px-4 py-2 font-semibold">Project Name</div>
                                        <div class="px-4 py-2">Sandesh</div>
                                    </div>
                                    <div class="grid grid-cols-2">
                                        <div class="px-4 py-2 font-semibold">Project Manager</div>
                                        <div class="px-4 py-2">Gurung</div>
                                    </div>
                                    <div class="grid grid-cols-2">
                                        <div class="px-4 py-2 font-semibold">Start Date</div>
                                        <div class="px-4 py-2">Male</div>
                                    </div>
                                    <div class="grid grid-cols-2">
                                        <div class="px-4 py-2 font-semibold">End Date</div>
                                        <div class="px-4 py-2">+977 9865327845</div>
                                    </div>
                                    <div class="grid grid-cols-2">
                                        <div class="px-4 py-2 font-semibold">Members</div>
                                        <div class="px-4 py-2">Kathmandu, Nepal</div>
                                    </div>
                                    <div class="grid grid-cols-2">
                                        <div class="px-4 py-2 font-semibold">Joined at</div>
                                        <div class="px-4 py-2">Kathmandu, Nepal</div>
                                    </div>
                                </div>
                            </div>
                            

                        </div>

        </div>
</body>

</html>