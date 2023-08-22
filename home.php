<?php require_once "header.php"; ?>
<!-- component -->
<nav class=" rounded-md w-72 h-screen flex-col  justify-between ">
    <div class=" ">
        <div class="flex  justify-center py-10 shadow-sm pr-4">            
            <div class="pl-10">
                <ul class="space-y-8 pt-10">
                    <li class="flex space-x-4 items-center hover:text-indigo-600 cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17V7m0 10a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2h2a2 2 0 012 2m0 10a2 2 0 002 2h2a2 2 0 002-2M9 7a2 2 0 012-2h2a2 2 0 012 2m0 10V7m0 10a2 2 0 002 2h2a2 2 0 002-2V7a2 2 0 00-2-2h-2a2 2 0 00-2 2" />
                        </svg>
                        <a href="#" class="text-yellow-500">Dashboard</a>
                    </li>
                    <li class="flex space-x-4 items-center hover:text-indigo-600 cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                        <a href="about-axis.php" class="block py-2 pl-3 pr-2 text-yellow-500  rounded-lg md:bg-transparent  md:p-0   md:dark:bg-transparent" aria-current="page">About Axis</a>
                    </li>
                    <!-- <li class="flex space-x-4 items-center hover:text-indigo-600 cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5H6a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2v-1M8 5a2 2 0 002 2h2a2 2 0 002-2M8 5a2 2 0 012-2h2a2 2 0 012 2m0 0h2a2 2 0 012 2v3m2 4H10m0 0l3-3m-3 3l3 3" />
                        </svg>
                        <a href="login.php" class="block py-2 pl-3 pr-4 text-yellow-500 rounded  md:hover:bg-transparent md:border-0  md:p-0 dark:text-white  dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Login</a>
                    </li> -->
                    <li class="flex space-x-4 items-center hover:text-indigo-600 cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                        <a href="menuopen.php" class="block py-2 pl-3 pr-2 text-yellow-500  rounded-lg md:bg-transparent md:p-0  dark:bg-blue-600 md:dark:bg-transparent" aria-current="page">Menu open</a>
                    </li>
                    <li class="flex space-x-4 items-center hover:text-indigo-600 cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4" />
                        </svg>
                        <a href="pricing.php" class="block py-2 pl-3 pr-4 text-yellow-500 md:bg-transparent  md:p-0   md:dark:bg-transparent" aria-current="page">Pricing table</a>
                    </li>
                    <!-- <li class="flex space-x-4 items-center hover:text-indigo-600 cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <a href="signopen.php" class="block py-2 pl-3 pr-4 text-yellow-500 rounded  md:hover:bg-transparent md:border-0  md:p-0 dark:text-white  dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Sign in open</a>
                    </li> -->
                    <li class="flex space-x-4 items-center hover:text-indigo-600 cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                        </svg>
                        <a href="single-blog.php" class="block py-2 pl-3 pr-2 text-yellow-500  rounded-lg md:bg-transparent md:p-0  dark:bg-blue-600 md:dark:bg-transparent" aria-current="page">Single blog</a>
                    </li>

                    
                    <li class="flex space-x-4  items-center hover:text-indigo-600 cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17V7m0 10a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2h2a2 2 0 012 2m0 10a2 2 0 002 2h2a2 2 0 002-2M9 7a2 2 0 012-2h2a2 2 0 012 2m0 10V7m0 10a2 2 0 002 2h2a2 2 0 002-2V7a2 2 0 00-2-2h-2a2 2 0 00-2 2" />
                        </svg>
                        <a href="terms.php" class="block py-2 pl-3 pr-2 text-yellow-500  rounded-lg md:bg-transparent  md:p-0   md:dark:bg-transparent" aria-current="page">Terms</a>
                    </li>


                    <li class="flex space-x-4 items-center hover:text-indigo-600 cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                        <a href="whatsapp_chatbot.php" class="block py-2 pl-3 pr-4 text-yellow-500 md:bg-transparent  md:p-0   md:dark:bg-transparent" aria-current="page">whatsapp chatbot</a>
                    </li>
                    <li class="flex space-x-4 items-center hover:text-indigo-600 cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                        <a href="signin.php" class="block py-2 pl-3 pr-4 text-yellow-500 md:bg-transparent  md:p-0   md:dark:bg-transparent" aria-current="page">example</a>
                    </li>
                    <li class="flex space-x-4 items-center hover:text-indigo-600 cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5H6a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2v-1M8 5a2 2 0 002 2h2a2 2 0 002-2M8 5a2 2 0 012-2h2a2 2 0 012 2m0 0h2a2 2 0 012 2v3m2 4H10m0 0l3-3m-3 3l3 3" />
                        </svg>
                        <a href="axis-features.php" class="block py-2 pl-3 pr-2 text-yellow-500  rounded-lg md:bg-transparent md:p-0  dark:bg-blue-600 md:dark:bg-transparent" aria-current="page">Axis features</a>
                    </li>
                    <li class="flex space-x-4 items-center hover:text-indigo-600 cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                        <a href="blog.php" class="block py-2 pl-3 pr-4 text-yellow-500 md:bg-transparent  md:p-0   md:dark:bg-transparent" aria-current="page">Blog</a>
                    </li>
                    <li class="flex space-x-4 items-center hover:text-indigo-600 cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4" />
                        </svg>
                        <a href="contact-us.php" class="block py-2 pl-3 pr-4 text-yellow-500 rounded  md:hover:bg-transparent md:border-0  md:p-0 dark:text-white  dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Contact us</a>
                    </li>
                    <li class="flex space-x-4 items-center hover:text-indigo-600 cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <a href="cover.php" class="block py-2 pl-3 pr-2 text-yellow-500  rounded-lg md:bg-transparent  md:p-0   md:dark:bg-transparent" aria-current="page">Cover</a>
                    </li>
                    <li class="flex space-x-4 items-center hover:text-indigo-600 cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <a href="home_page.php" class="block py-2 pl-3 pr-2 text-yellow-500  rounded-lg md:bg-transparent  md:p-0   md:dark:bg-transparent" aria-current="page">Home page</a>
                    </li>
                    
                    
                </ul>
            </div>
            
        </div>
        <div class="bg-white flex items-center space-x-4 pl-10 pb-10 ml-10 hover:text-indigo-600 cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                        </svg>
                        <a href="#" class="text-yellow-500">Logout</a>
                    </div>

                    <section class="w-1680 h-screen bg-cover " style="background-image: url('assets/images/axis-images/');">  

        

</nav>
<?php require_once "footer.php"; ?>