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
                    <!-- Commentary to notification box -->
                    <div class="mx-auto w-full max-w-4xl">
                        <div class="rounded-lg bg-gray-50 p-4 ring-1 ring-inset ring-gray-200">
                        <div class="flex items-start gap-x-4">
                            <div class="shrink-0">
                            <svg aria-hidden="true" class="size-5 text-gray-500" viewBox="0 0 55 55" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M27.5 5.5C15.3497 5.5 5.5 15.3497 5.5 27.5C5.5 39.6504 15.3497 49.5 27.5 49.5C39.6504 49.5 49.5 39.6504 49.5 27.5C49.5 15.3497 39.6504 5.5 27.5 5.5ZM0 27.5C0 12.3122 12.3122 0 27.5 0C42.6879 0 55 12.3122 55 27.5C55 42.6879 42.6879 55 27.5 55C12.3122 55 0 42.6879 0 27.5ZM24.6131 16.5C24.6131 14.9812 25.8443 13.75 27.3631 13.75H27.6369C29.1557 13.75 30.387 14.9812 30.387 16.5V16.775C30.387 18.2916 29.1591 19.522 27.6425 19.525L27.3686 19.5255C26.6383 19.527 25.9374 19.2379 25.4205 18.722C24.9035 18.2062 24.6131 17.5058 24.6131 16.7755V16.5ZM27.5 22C29.0188 22 30.25 23.2312 30.25 24.75V38.5C30.25 40.0188 29.0188 41.25 27.5 41.25C25.9812 41.25 24.75 40.0188 24.75 38.5V24.75C24.75 23.2312 25.9812 22 27.5 22Z" fill="currentColor"></path>
                            </svg>
                            </div>
                            <div class="flex-1">
                            <h3 class="text-sm font-semibold text-gray-700">Guess user available</h3>
                            <div class="mt-1">
                                <p class="text-sm text-gray-600">
                                    We have an user GUESS available for you to use. BUT you only need the current passwords:
                                </p>
                                <p class="text-sm text-gray-600">
                                    <br/>
                                    Passwrods: ["test123*", "test1234*", "test12345*", "test12346*"].
                                </p>
                            </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of commentary to notification box -->

                        <div class="mt-6">
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