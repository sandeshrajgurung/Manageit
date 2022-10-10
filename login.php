<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    
</head>

<body>
    <div class="flex items-center min-h-screen  " >
        <div class="flex-1 h-full max-w-4xl mx-auto bg-white rounded-lg shadow-xl">
            <div class="flex flex-col md:flex-row ">
                <div class="h-32 md:h-auto md:w-1/2 ">
                    <img class="object-contain w-full h-full rounded-lg" src="img/sign.jpg" alt="img" />
                </div>
                <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
                    <div class="w-full">
                       <button onclick="location.href='index.php'" type="button"
                            class="bg-white rounded-md p-2 ml-80 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                            <span class="sr-only">Close menu</span>

                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                       <form id="user-login" action="./auth/login.php" method="POST">
                        <h1 class="mb-4 text-2xl font-bold text-center text-gray-700">
                            Login 
                        </h1>

                        <div>
                            <label class="block text-sm">
                                Email
                            </label>
                            <input type="email" name="email"
                                class="w-full px-4 py-2 text-sm border rounded-md focus:border-blue-400 focus:outline-none focus:ring-1 focus:ring-blue-600"
                                placeholder="" />
                        </div>
                        <div>
                            <label class="block mt-4 text-sm">
                                Password
                            </label>
                            <input
                                class="w-full px-4 py-2 text-sm border rounded-md focus:border-blue-400 focus:outline-none focus:ring-1 focus:ring-blue-600"
                                placeholder="" type="password" name="password"/>
                        </div>
                        <p class="mt-4">
                            <a class="text-sm text-blue-600 hover:underline" href="./forgot-password.html">
                                Forgot your password?
                            </a>
                        </p>
                        
                        <button
                            class="g-recaptcha block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-blue-600 border border-transparent rounded-lg active:bg-blue-600 hover:bg-blue-700 focus:outline-none focus:shadow-outline-blue"
                            href="#" data-sitekey="6LcZ_xEfAAAAAHd3kdHGp5JCG8Z2oLFvopC1Sq6n" data-callback='onSubmit'
                            data-action='submit'>
                            Log in
                        </button>
                        </form>
                        <p class="mt-4 text-center text-sm text-grey-400">Don't have an account yet? <a href="signup.php" class="text-blue-600">Create account</a></p>
                        <hr class="my-8">
                        <p class="mt-4 text-center text-sm text-pink-400">By creating an accout you agree to our <a href="#" class="text-blue-600">Terms and Condition</a></p>

                        



                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <script>
        function onSubmit(token) {
            document.getElementById("user-login").submit();
        }
    </script>
</body>

</html>