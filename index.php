<?php 
include_once("private_includes/conexion.php"); 
session_start();

error_reporting(E_ALL);
ini_set('display_errors', '1');

## In quiet and silence you shall find my strenght... 
## & seek first the Kingdom of God and its justice and everything else shall be added unto it.

if(isset($_GET['userLoggedIn'])) { 
    header("Location: index.php");
} else if (isset($_SESSION['complete_name'])) {
    @$name = $_SESSION['complete_name']; 
} else {
    $name = "Guest";
};
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jonah Cronicles - project with Jesus Christ of Nazareth</title>
    <!-- Tailwind CDN Link -->
    <script src="dits/public/tailwindcss-3.4.17.min.js"></script>
    <!-- <script src="dits/public/tailwindcss-3.4.17.js"></script> -->
    <link rel="stylesheet" href="dits/css/own.css">
</head>

<body>

    <header>
        <header class="bg-white">
            <nav aria-label="Global" class="mx-auto flex max-w-7xl items-center justify-between p-2 lg:px-6">
                <div class="flex lg:flex-1">
                    <a href="./index.php" class="-m-1.5 p-1.5">
                        <img src="img/logo_login_.jpg" class="mt-10 ml-auto mr-auto" width="75" height="75">
                    </a>
                </div>
                    <a href="./private_includes/logout.php" class="text-sm/6 font-semibold text-red-900 mr-5">Logout</a>
                    <a href="./registration.php" class="text-sm/6 font-semibold text-gray-900 mr-5">Registration</a>
                    <div class="py-6">
                        <a href="login.php" class="-mx-3 block rounded-lg px-3 py-2.5 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Log in</a>
                    </div>
                    </div>
            </nav>
            <h2 style="margin-left: 2%;">Welcome<?php if(isset($name)): ?>:  <?php endif; ?> <br/><?=  @$name; ?> </h2>
        </header>
    </header>
    <main>
        <form action="private_includes/process_question.php" method="post" class="main_formulary">
            <label for="question">Name:
                <input type="text" readonly name="question" id="question_input" value="Was Joshua friend or servant of Moses?">
                <!-- The question should contain the verse with the possible answer -->
            </label>
            <br />
            <label for="verse">
                <textarea readonly name="verse_in_to_the_question" id="qinq_verse" cols="70" rows="13">
                </textarea>
            </label>
            <label for="question" id="question_answer">Answer:
                <textarea name="question_answer" id="question_answer" cols="70" rows="13"></textarea>
                <!-- The question should contain the verse with the possible answer -->
                <!-- Thank you because you listen to us Jesus Christ of Nazareth ... PsD: "reynald manuel rodriguez ramirez"-->
            </label>
            <br />
            <input type="submit" name="sent_form" value="Send response" class="sent_btn_tag" />
        </form>
    </main>

    <script type="text/javascript">
        var question_answer = document.getElementById("question_answer");
        var qinq_verse = document.getElementById("qinq_verse");

        function generate_verse(question) {

            if (question == "") {
                qinq_verse.value = `Reference verses: Book of Exodus, and Psalm 34:17`;
            } else {
                qinq_verse.value += `Please, insert the verse.`; // The secuence may continue.. [https://www.hearthymn.com/encouraging-bible-verses.html?gad_source=1&gad_campaignid=22975785016&gbraid=0AAAAADG2MaQQGZI31Eyi3Xd2qIOdU7coc&gclid=Cj0KCQiAy6vMBhDCARIsAK8rOgmh6q4YFyXF751-g3GFITxKeiQPlKLbJCUpbxhCN2z7V1CWz5RHlCcaAkVxEALw_wcB]
            }
        };

        // -> Is necessary to call the function here.
        generate_verse("");
    </script>
</body>

</html>