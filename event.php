<?php  include('leaveController.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event</title>

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
            <!-- filter -->
            <button type="button"
                class="flex items-center  px-6 py-2.5  text-base font-normal text-gray-900 rounded-lg transition duration-75 group  "
                aria-controls="filter" data-collapse-toggle="filter">
                <i class="material-icons" style="color:#F29D38">sort</i>
                <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>Filter</span>
            </button>
            <ul id="filter" class="hidden py-2 space-y-2 ">
                <li class="flex items-center p-2 pl-11 w-full  text-xs font-normal text-gray-900 rounded-lg transition duration-75 group ">Previous
                        Month
                    <form action="leaveController.php" id="previous">
                        <input type="hidden"  name="previous" value="previousMonth" >
                    </form>
                </li>
                <li class="flex items-center p-2 pl-11 w-full text-xs font-normal text-gray-900 rounded-lg transition duration-75 group ">This
                        Month
                    <form action="leaveController.php" id="this">
                        <input type="hidden"  name="this" value="thisMonth" >
                        <button type="submit" class="btn btn-primary">This Month</button>
                    </form>
                </li>
                <li class="flex items-center p-2 pl-11 w-full text-xs font-normal text-gray-900 rounded-lg transition duration-75 group">Next
                        Month</a>
                        <form action="leaveController.php" id="next">
                        <input type="hidden"  name="next" value="nextMonth" >
                    </form>
                </li>
            </ul>
            <!-- Events -->
            <div class="flex flex-col md:flex-row ">

                <?php $results = mysqli_query($db, "SELECT * FROM add_event"); ?>
                <h3 class="text-2xl text-gray-700 font-bold mb-6 -ml-3 my-3 mx-2">Upcoming Events</h3>

                <ol class="my-1 mx-2 border-l-2 border-purple-600">
                    <?php while ($row = mysqli_fetch_array($results)) { ?>
                    <li>
                        <div class="md:flex flex-start">
                            <div class="bg-purple-600 w-6 h-6 flex items-center justify-center rounded-full -ml-3">
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" class="text-white w-3 h-3"
                                    role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path fill="currentColor"
                                        d="M0 464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V192H0v272zm64-192c0-8.8 7.2-16 16-16h288c8.8 0 16 7.2 16 16v64c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16v-64zM400 64h-48V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48H160V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48H48C21.5 64 0 85.5 0 112v48h448v-48c0-26.5-21.5-48-48-48z">
                                    </path>
                                </svg>
                            </div>
                            <div class="block p-6 rounded-lg shadow-lg bg-gray-100 max-w-md ml-6 mb-10">
                                <div class="flex justify-between mb-4">
                                    <p class="font-medium text-xl text-purple-600"><?php echo $row['event_name']; ?></p>
                                    <p class=" my-2 font-medium text-xs italic text-purple-600">Posted on:
                                        <?php echo $row['posted_on']; ?></p>
                                </div>
                                <p class="text-gray-700 mb-6"><?php echo $row['event_description']; ?></p>
                                <div class="grid md:grid-cols-1 text-sm">
                                    <div class="grid grid-cols-2">
                                        <div class=" font-semibold  text-sm text-purple-600">Time:</div>
                                        <div class=" font-medium text-sm text-grey">Sandesh</div>
                                    </div>
                                    <div class="grid grid-cols-2">
                                        <div class=" font-semibold  text-sm text-purple-600">Date:</div>
                                        <div class=" font-medium text-sm text-grey">
                                            <?php echo $row['event_from']; ?>-<?php echo $row['event_to']; ?></div>
                                    </div>
                                    <div class="grid grid-cols-2">
                                        <div class=" font-semibold  text-sm text-purple-600">Location:</div>
                                        <div class=" font-medium text-sm text-grey"><?php echo $row['location']; ?>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </li>
                    <?php } ?>
                </ol>


                <div class="w-full md:w-3/5 py-6 text-center ">
                    <img class="w-full md:w-4/5 z-50 ml-20" src="img/event.png" />
                </div>
            </div>


            <button onclick="location.href='addEvent.php'"
                class="bg-orange-400 shadow-sm hover:bg-orange-500 text-white font-bold py-2 px-4 my-4 rounded-full inline-flex items-center">
                <i class="material-icons" style="color:white">add</i> Event
            </button>
            <!--End of Events -->
        </div>




</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
<script src="https://unpkg.com/flowbite@1.3.4/dist/flowbite.js"></script>


</html>