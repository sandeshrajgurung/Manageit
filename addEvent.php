<?php  include('leaveController.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Event</title>

    

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="plugins/bootstrap-5.1.3/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="css/employee.css" />
</head>

<body>

<body>
<?php if (isset($_SESSION['message'])): ?>
	<div class="msg">
		<?php 
			echo $_SESSION['message']; 
			unset($_SESSION['message']);
		?>
	</div>
<?php endif ?>

    <nav class="navbar navbar-expand-lg py-3 navbar-dark bg-gradient-to-r from-orange-400 to-yellow-400 shadow-sm">
        <div class="container">
            <a href="unfinished.php" class="navbar-brand">
                <!-- Logo Image -->
                <img src="https://bootstrapious.com/i/snippets/sn-nav-logo/logo.png" width="30" alt=""
                    class="d-inline-block align-middle mr-2">
                <!-- Logo Text -->
                <span class="text-uppercase font-weight-bold">Manageit</span>
            </a>
    </nav>
    <!--Side bar-->
    <div class="flex">
        <div class="flex flex-col w-64 h-screen  overflow-y-auto border-r">
            <div class="flex flex-col justify-between mt-6">
            <aside>
                    <div class="px-3 py-2 overflow-y-auto rounded ">
                        <ul class="space-y-2 sidebar">
                            <li>
                                <a href="unfinished.php" class="dark:text-white hover:bg-orange-400 ">
                                    <i class="material-icons " style="color:#F29D38">dashboard</i>
                                    <span class="ml-3">Dashboard</span>
                                </a>
                            </li>
                            <li>
                                <button type="button"
                                    class="flex items-center p-2 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-orange-400 dark:text-white "
                                    aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                                    <i class="material-icons" style="color:#F29D38">corporate_fare</i>
                                    <span class="flex-1 ml-3 text-left whitespace-nowrap"
                                        sidebar-toggle-item>Organization</span>
                                    <i class="material-icons" style="color:#F29D38">keyboard_arrow_down</i>
                                </button>
                                <ul id="dropdown-example" class="hidden py-2 space-y-2 ">
                                    <li>
                                        <a href="employee.php"
                                            class="flex items-center p-2 pl-11 w-full  text-xs font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-orange-400 dark:text-white ">Employee</a>
                                    </li>
                                    <li>
                                        <a href="unfinished.php"
                                            class="flex items-center p-2 pl-11 w-full text-xs font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-orange-400 dark:text-white ">Department</a>
                                    </li>
                                    <li>
                                        <a href="unfinished.php"
                                            class="flex items-center p-2 pl-11 w-full text-xs font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-orange-400 dark:text-white ">Designation</a>
                                    </li>
                                    <li>
                                        <a href="unfinished.php"
                                            class="flex items-center p-2 pl-11 w-full text-xs font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-orange-400 dark:text-white ">New
                                            Hire</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="unfinished.php" class="dark:text-white hover:bg-orange-400 ">
                                    <i class="material-icons" style="color:#F29D38">credit_card</i>
                                    <span class="flex-1 ml-3 whitespace-nowrap">Payroll</span>

                                </a>
                            </li>
                            <li>
                                <a href="unfinished.php" class="dark:text-white hover:bg-orange-400 ">
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
                                <a href="unfinished.php"
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
                            <span class="ml-1 text-sm font-medium text-gray-400 md:ml-2 dark:text-gray-500">leave
                                Form</span>
                        </div>
                    </li>
                </ol>
            </nav>
            <!-- Form -->
            <form class="w-full  my-5 bg-white p-2 " id="event" name="event" action="leaveController.php" method="POST">
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-first-name">
                            Event Name
                        </label>
                        <div class="relative">
                        <input type="text" name="eventName" id="eventName"
                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>
                    </div>
                    
                </div>
                <div class="flex flex-wrap -mx-3 mb-2">
                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-city">
                            From
                        </label>
                        <div class="relative">
                            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                <svg class="w-5 h-5 text-orange-400 dark:text-gray-400" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <input datepicker datepicker-orientation="bottom right" type="text" id="startdate" name="eventFrom"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Select date">
                        </div>
                    </div>
                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-state">
                            To
                        </label>
                        <div class="relative">
                            <div class="relative">
                                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                    <svg class="w-5 h-5 text-orange-400 dark:text-gray-400" fill="currentColor"
                                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <input type="text" id="enddate" name="eventTo"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Select date">
                            </div>
                        </div>
                    </div>
                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            >
                            Location
                        </label>
                        <div class="relative">
                        <input type="text" name="location" id="first-name"
                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Description</label>
                        <textarea class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0
                                         focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="reason" name="description"
                                rows="3" placeholder="Your message"></textarea>

                    </div>
                    <div class="px-4 py-3 text-right sm:px-6">
                                        <button type="submit" name="add"
                                            class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-orange-400 hover:bg-orange-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Add</button>
                    </div>
                </div>

            </form>

        </div>

</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
<script src="https://unpkg.com/flowbite@1.3.4/dist/flowbite.js"></script>
<!-- <script src="https://unpkg.com/flowbite@1.3.4/dist/datepicker.js"></script> -->
<script>
$(document).ready(function() {
    $( "#startdate,#enddate" ).datepicker({
        changeMonth: true,
        changeYear: true,
        firstDay: 1,
        dateFormat: 'yy/mm/dd',
    })

    $( "#startdate" ).datepicker({ dateFormat: 'yy-mm-dd' });
    $( "#enddate" ).datepicker({ dateFormat: 'yy-mm-dd' });

    $('input#enddate').change(function() {
        var start = $('#startdate').datepicker('getDate');
        var end   = $('#enddate').datepicker('getDate');

        if (start && end) {
            var days = (end - start)/1000/60/60/24;
            $('#days').val(days + 1);
        }
    });
});     
</script>

</html>