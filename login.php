<!DOCTYPE html>
<html version="5">

<head>
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <header>
        <h1>Login area</h1>
    </header>
    <main>
        <!-- This template was taken from internet basic common templates -->
         <!-- In this case: Copy and pasting -->
        <form action="process_login.php" method="post">
            <div class="container">
                <label for="uname"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="uname" required>

                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" required>

                <button type="submit">Login</button>
                <label>
                    <!-- TODO: ## Pending -->
                    <input type="checkbox" checked="checked" name="remember"> Remember me
                </label>
            </div>

            <div class="container" style="background-color:#f1f1f1">
                <button type="button" class="cancelbtn">Cancel</button>
            </div>
        </form>
    </main>
</body>

</html>