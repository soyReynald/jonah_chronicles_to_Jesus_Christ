<!DOCTYPE html>
<html version="5" lang="en">

<head>
    <title>Registration</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="dits/public/tailwindcss-3.4.17.min.js"></script>
</head>

<body>
    <main>
        <!-- This template was taken from internet basic common templates -->
        <!-- In this case: Copy and pasting -->
        <form action="private_includes/process_register.php" method="post">
            <!--
                This example requires updating your template:

                ```
                <html class="h-full bg-black-900">
                <body class="h-full">
                ```
            -->
            <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
                <div class="sm:mx-auto sm:w-full sm:max-w-sm">
                    <img src="img/logo_login_.jpg" class="mt-10 ml-auto mr-auto" width="75" height="75">
                    <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight">Welcome to Jonah Chronicles
                    </h2>
                </div>

                <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
                        <div>
                            <label for="username" class="block text-m font-medium text-black-100">User name</label>
                            <div class="mt-2">
                                <input type="text" placeholder="user_sample" name="uname" required>
                            </div>
                        </div>

                        <div>
                            <label for="username" class="block text-m font-medium text-black-100">Email
                                address</label>
                            <div class="mt-2">
                                <input type="text" placeholder="sample@sample.com" name="email" required>
                            </div>
                        </div>

                        <div>
                            <label for="username" class="block text-m font-medium text-black-100">Complete name</label>
                            <div class="mt-2">
                                <input type="text" placeholder="Sample" name="cname" required>
                            </div>
                        </div>

                        <div>
                            <div class="flex items-center justify-between">
                                <label for="password" class="block text-m font-medium text-black-100">Password</label>
                                <div class="text-sm">
                                    <a href="#" class="font-semibold text-indigo-400 hover:text-indigo-300">Forgot
                                        password?</a>
                                </div>
                            </div>
                            <div class="mt-2">
                                <input type="password" placeholder="******" name="psw" required>
                            </div>
                        </div>

                        <div>
                            <br/>
                            <input type="submit" name="submitted_btn_" class="flex w-full justify-center rounded-md bg-indigo-500 px-3 py-1.5 text-sm/6 font-semibold text-white hover:bg-indigo-400 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500" value="Register" />
                        </div>
                </div>
            </div>
        </form>
    </main>
</body>

</html>