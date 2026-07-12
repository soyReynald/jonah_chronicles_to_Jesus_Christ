<?php
include_once("private_includes/conexion.php");
session_start();

error_reporting(E_ALL);
ini_set('display_errors', '1');

## In quiet and silence you shall find my strenght... 
## & seek first the Kingdom of God and its justice and everything else shall be added unto it.

if (isset($_GET['userLoggedIn'])) {
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
    <style>
        #modal_btn {
            z-index: 4000;
            position: absolute;
            color: black;
            background: white;
            border: 1px solid #000;
            border-radius: 5px;
        }

        #default-modal {
            overflow: hidden;
            z-index: 10000;
            position: absolute;
            background: #525252f0;
        }

        #modal-capsule {
            background: white;
        }
    </style>
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
            <h2 style="margin-left: 2%;">Welcome<?php if (isset($name)): ?>: <?php endif; ?> <br /><?= @$name; ?> </h2>
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



    <!-- Modal toggle -->
    <button data-modal-target="default-modal" data-modal-toggle="default-modal" class="text-white bg-brand box-border border border-transparent hover:bg-brand-strong focus:ring-4 focus:ring-brand-medium shadow-xs font-medium leading-5 rounded-base text-sm px-4 py-2.5 focus:outline-none" type="button" id="modal_btn">
        Toggle modal
    </button>

    <!-- Main modal -->
    <div id="default-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div id="modal-capsule" class="relative bg-neutral-primary-soft border border-default rounded-base shadow-sm p-4 md:p-6">
                <!-- Modal header -->
                <div class="flex items-center justify-between border-b border-default pb-4 md:pb-5">
                    <h3 class="text-lg font-medium text-heading">
                        Answer inerted
                    </h3>
                    <button type="button" class="text-body bg-transparent hover:bg-neutral-tertiary hover:text-heading rounded-base text-sm w-9 h-9 ms-auto inline-flex justify-center items-center" data-modal-hide="default-modal">
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18 17.94 6M18 18 6.06 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="space-y-4 md:space-y-6 py-4 md:py-6">
                    <p class="leading-relaxed text-body">
                        <?php echo $_GET['answer'] ?? 'No answer provided.'; ?>
                    </p>
                </div>
                <!-- Modal footer -->
                <div class="flex items-center border-t border-default space-x-4 pt-4 md:pt-5">
                    <button data-modal-hide="default-modal" type="button" class="text-white bg-brand box-border border border-transparent hover:bg-brand-strong focus:ring-4 focus:ring-brand-medium shadow-xs font-medium leading-5 rounded-base text-sm px-4 py-2.5 focus:outline-none">I accept</button>
                    <button data-modal-hide="default-modal" type="button" class="text-body bg-neutral-secondary-medium box-border border border-default-medium hover:bg-neutral-tertiary-medium hover:text-heading focus:ring-4 focus:ring-neutral-tertiary shadow-xs font-medium leading-5 rounded-base text-sm px-4 py-2.5 focus:outline-none">Decline</button>
                </div>
            </div>
        </div>
    </div>


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
    <link href="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.js"></script>
</body>

</html>