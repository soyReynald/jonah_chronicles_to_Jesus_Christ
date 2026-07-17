<!DOCTYPE html>
<html version="5" lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <main>
        <!-- This template was taken from internet basic common templates -->
        <!-- In this case: Copy and pasting -->
        <form action="private_includes/process_login.php" method="post" class="space-y-6 user_login_form_">
            <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
                <div class="sm:mx-auto sm:w-full sm:max-w-sm">
                    <img src="img/logo_login_.jpg" class="mt-10 ml-auto mr-auto" width="75" height="75">
                    <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight">Welcome to Jonah Chronicles
                    </h2>
                </div>

                <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
                        <div>
                            <label for="username" class="block text-sm/6 font-medium">Username or Email</label>
                            <div class="mt-2">
                                <input type="text" placeholder="username" name="uname" required>
                            </div>
                        </div>

                        <div>
                            <div class="flex items-center justify-between">
                                <label for="password" class="block text-sm/6 font-medium">Password</label>
                                <div class="text-sm">
                                    <a href="#" class="font-semibold text-indigo-400 hover:text-indigo-300">Forgot
                                        password?</a>
                                </div>
                            </div>
                            <div class="mt-2">
                                <input type="password" placeholder="****" name="psw" required>
                            </div>
                        </div>

                        <div>
                            <button type="submit" name="login"
                                class="flex w-full justify-center rounded-md bg-indigo-500 px-3 py-1.5 text-sm/6 font-semibold text-white hover:bg-indigo-400 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Sign
                                in</button>
                        </div>

                    <a href="registration.php" class="justify-center flex flex-col mt-10 text-center text-sm/6 text-black-400">
                        Register
                    </a>
                </div>
            </div>
        </form>
    </main>
</body>

</html>