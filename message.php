<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Message</title>

   <script src="https://cdn.tailwindcss.com"></script>
   <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
   <link href="plugins/bootstrap-5.1.3/css/bootstrap.min.css" rel="stylesheet" />
   <link rel="stylesheet" href="css/employee.css" />
</head>

<body>
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
                     <span class="ml-1 text-sm font-medium text-gray-400 md:ml-2 dark:text-gray-500">Message</span>
                  </div>
               </li>
            </ol>
         </nav>

         <div class="container mx-auto">
            <div class="min-w-full border rounded lg:grid lg:grid-cols-3">
               <div class="border-r border-gray-300 lg:col-span-1">
                  <div class="mx-3 my-3">
                     <div class="relative text-gray-600">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-2">
                           <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                              stroke-width="2" viewBox="0 0 24 24" class="w-6 h-6 text-gray-300">
                              <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                           </svg>
                        </span>
                        <input type="search" class="block w-full py-2 pl-10 bg-gray-100 rounded outline-none"
                           name="search" placeholder="Search" required />
                     </div>
                  </div>

                  <ul class="overflow-auto h-[32rem]">
                     <h2 class="my-2 mb-2 ml-2 text-lg text-gray-600">Chats</h2>
                     <li>
                        <a
                           class="flex items-center px-3 py-2 text-sm transition duration-150 ease-in-out border-b border-gray-300 cursor-pointer hover:bg-gray-100 focus:outline-none">
                           <img class="object-cover w-10 h-10 rounded-full"
                              src="https://cdn.pixabay.com/photo/2018/09/12/12/14/man-3672010__340.jpg"
                              alt="username" />
                           <div class="w-full pb-2">
                              <div class="flex justify-between">
                                 <span class="block ml-2 font-semibold text-gray-600">Jhon Don</span>
                                 <span class="block ml-2 text-sm text-gray-600">25 minutes</span>
                              </div>
                              <span class="block ml-2 text-sm text-gray-600">bye</span>
                           </div>
                        </a>
                        <a
                           class="flex items-center px-3 py-2 text-sm transition duration-150 ease-in-out bg-gray-100 border-b border-gray-300 cursor-pointer focus:outline-none">
                           <img class="object-cover w-10 h-10 rounded-full"
                              src="https://cdn.pixabay.com/photo/2016/06/15/15/25/loudspeaker-1459128__340.png"
                              alt="username" />
                           <div class="w-full pb-2">
                              <div class="flex justify-between">
                                 <span class="block ml-2 font-semibold text-gray-600">Same</span>
                                 <span class="block ml-2 text-sm text-gray-600">50 minutes</span>
                              </div>
                              <span class="block ml-2 text-sm text-gray-600">Good night</span>
                           </div>
                        </a>
                        <a
                           class="flex items-center px-3 py-2 text-sm transition duration-150 ease-in-out border-b border-gray-300 cursor-pointer hover:bg-gray-100 focus:outline-none">
                           <img class="object-cover w-10 h-10 rounded-full"
                              src="https://cdn.pixabay.com/photo/2018/01/15/07/51/woman-3083383__340.jpg"
                              alt="username" />
                           <div class="w-full pb-2">
                              <div class="flex justify-between">
                                 <span class="block ml-2 font-semibold text-gray-600">Emma</span>
                                 <span class="block ml-2 text-sm text-gray-600">6 hour</span>
                              </div>
                              <span class="block ml-2 text-sm text-gray-600">Good Morning</span>
                           </div>
                        </a>
                     </li>
                  </ul>
               </div>
               <div class="hidden lg:col-span-2 lg:block">
                  <div class="w-full">
                     <div class="relative flex items-center p-3 border-b border-gray-300">
                        <img class="object-cover w-10 h-10 rounded-full"
                           src="https://cdn.pixabay.com/photo/2018/01/15/07/51/woman-3083383__340.jpg" alt="username" />
                        <span class="block ml-2 font-bold text-gray-600">Emma</span>

                     </div>
                     <div class="relative w-full p-6 overflow-y-auto h-[40rem]">
                        <ul class="space-y-2">
                           <li class="flex justify-start">
                              <div class="relative max-w-xl px-4 py-2 text-gray-700 rounded shadow">
                                 <span class="block">Hi</span>
                              </div>
                           </li>
                           <li class="flex justify-end">
                              <div class="relative max-w-xl px-4 py-2 text-gray-700 bg-gray-100 rounded shadow">
                                 <span class="block">Hiiii</span>
                              </div>
                           </li>
                           <li class="flex justify-end">
                              <div class="relative max-w-xl px-4 py-2 text-gray-700 bg-gray-100 rounded shadow">
                                 <span class="block">how are you?</span>
                              </div>
                           </li>
                           <li class="flex justify-start">
                              <div class="relative max-w-xl px-4 py-2 text-gray-700 rounded shadow">
                                 <span class="block">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                 </span>
                              </div>
                           </li>
                        </ul>
                     </div>

                     <div class="flex items-center justify-between w-full p-3 border-t border-gray-300">

                        <button>
                           <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-500" fill="none"
                              viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                 d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" />
                           </svg>
                        </button>

                        <input type="text" placeholder="Message"
                           class="block w-full py-2 pl-4 mx-3 bg-gray-100 rounded-full outline-none focus:text-gray-700"
                           name="message" required />

                        <button type="submit">
                           <svg class="w-5 h-5 text-gray-500 origin-center transform rotate-90"
                              xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                              <path
                                 d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z" />
                           </svg>
                        </button>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://unpkg.com/flowbite@1.3.4/dist/flowbite.js"></script>
<script src="https://unpkg.com/flowbite@1.3.4/dist/datepicker.js"></script>

</html>