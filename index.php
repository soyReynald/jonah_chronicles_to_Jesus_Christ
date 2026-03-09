<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jonah Cronicles - project with Jesus Christ of Nazareth</title>
    <!-- Tailwind CDN Link -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style type="text/css">
        #qinq_verse, input#question_input, .main_formulary textarea{
            border: 2px solid;
            border-radius: 2px;
        }
        #question_answer {
            margin-top: 10px;
            display: block;
        }

        #question_input {
            margin-top: 10px;
            display: block;
        }

        #question_input {
            width: 400px;
        }

        .main_formulary {
            /* The remaining porcentage is to give space to the page to unroll; Just as the acceleration of a car decreases when the velocity increases. */
            width: 12vw;
            margin: auto;
            padding: 0% 28%;
            margin-bottom: 11px;
            float: left;
            /* This should be sized with viewports to display in different layouts */
        }

        header h1 {
            width: 80vw;
            margin-left: auto;
            margin-right: auto;
        }
        .sent_btn_tag {
            padding: 5%;
            border: 3px;
            border-color: #000;
            border-width: 3px;
            border: 1px solid;
            border-radius: 4px;
        }
    </style>
</head>

<body>

    <header>
        <!-- Include this script tag or install `@tailwindplus/elements` via npm: -->
        <!-- <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script> -->
        <header class="bg-white">
            <nav aria-label="Global" class="mx-auto flex max-w-7xl items-center justify-between p-2 lg:px-6">
                <div class="flex lg:flex-1">
                    <a href="#" class="-m-1.5 p-1.5">
                        <span class="sr-only">Your Company</span>
                        <img src="img/logo_login_.jpg" class="mt-10 ml-auto mr-auto" width="75" height="75">
                    </a>
                </div>
                <!-- desplegable section to the menu
                <div class="flex lg:hidden">
                    <button type="button" command="show-modal" commandfor="mobile-menu" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
                        <span class="sr-only">Open main menu</span>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6">
                            <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>
                <el-popover-group class="hidden lg:flex lg:gap-x-12">

                    <div class="relative">
                        <button popovertarget="desktop-menu-product" class="flex items-center gap-x-1 text-sm/6 font-semibold text-gray-900">
                            Product
                            <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true" class="size-5 flex-none text-gray-400">
                                <path d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" fill-rule="evenodd" />
                            </svg>
                        </button>

                        <el-popover id="desktop-menu-product" anchor="bottom" popover class="w-screen max-w-md overflow-hidden rounded-3xl bg-white shadow-lg outline-1 outline-gray-900/5 transition transition-discrete [--anchor-gap:--spacing(3)] backdrop:bg-transparent open:block data-closed:translate-y-1 data-closed:opacity-0 data-enter:duration-200 data-enter:ease-out data-leave:duration-150 data-leave:ease-in">
                            <div class="p-4">
                                <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm/6 hover:bg-gray-50">
                                    <div class="flex size-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6 text-gray-600 group-hover:text-indigo-600">
                                            <path d="M10.5 6a7.5 7.5 0 1 0 7.5 7.5h-7.5V6Z" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M13.5 10.5H21A7.5 7.5 0 0 0 13.5 3v7.5Z" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                    <div class="flex-auto">
                                        <a href="#" class="block font-semibold text-gray-900">
                                            Analytics
                                            <span class="absolute inset-0"></span>
                                        </a>
                                        <p class="mt-1 text-gray-600">Get a better understanding of your traffic</p>
                                    </div>
                                </div>
                                <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm/6 hover:bg-gray-50">
                                    <div class="flex size-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6 text-gray-600 group-hover:text-indigo-600">
                                            <path d="M15.042 21.672 13.684 16.6m0 0-2.51 2.225.569-9.47 5.227 7.917-3.286-.672ZM12 2.25V4.5m5.834.166-1.591 1.591M20.25 10.5H18M7.757 14.743l-1.59 1.59M6 10.5H3.75m4.007-4.243-1.59-1.59" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                    <div class="flex-auto">
                                        <a href="#" class="block font-semibold text-gray-900">
                                            Engagement
                                            <span class="absolute inset-0"></span>
                                        </a>
                                        <p class="mt-1 text-gray-600">Speak directly to your customers</p>
                                    </div>
                                </div>
                                <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm/6 hover:bg-gray-50">
                                    <div class="flex size-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6 text-gray-600 group-hover:text-indigo-600">
                                            <path d="M7.864 4.243A7.5 7.5 0 0 1 19.5 10.5c0 2.92-.556 5.709-1.568 8.268M5.742 6.364A7.465 7.465 0 0 0 4.5 10.5a7.464 7.464 0 0 1-1.15 3.993m1.989 3.559A11.209 11.209 0 0 0 8.25 10.5a3.75 3.75 0 1 1 7.5 0c0 .527-.021 1.049-.064 1.565M12 10.5a14.94 14.94 0 0 1-3.6 9.75m6.633-4.596a18.666 18.666 0 0 1-2.485 5.33" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                    <div class="flex-auto">
                                        <a href="#" class="block font-semibold text-gray-900">
                                            Security
                                            <span class="absolute inset-0"></span>
                                        </a>
                                        <p class="mt-1 text-gray-600">Your customers’ data will be safe and secure</p>
                                    </div>
                                </div>
                                <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm/6 hover:bg-gray-50">
                                    <div class="flex size-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6 text-gray-600 group-hover:text-indigo-600">
                                            <path d="M13.5 16.875h3.375m0 0h3.375m-3.375 0V13.5m0 3.375v3.375M6 10.5h2.25a2.25 2.25 0 0 0 2.25-2.25V6a2.25 2.25 0 0 0-2.25-2.25H6A2.25 2.25 0 0 0 3.75 6v2.25A2.25 2.25 0 0 0 6 10.5Zm0 9.75h2.25A2.25 2.25 0 0 0 10.5 18v-2.25a2.25 2.25 0 0 0-2.25-2.25H6a2.25 2.25 0 0 0-2.25 2.25V18A2.25 2.25 0 0 0 6 20.25Zm9.75-9.75H18a2.25 2.25 0 0 0 2.25-2.25V6A2.25 2.25 0 0 0 18 3.75h-2.25A2.25 2.25 0 0 0 13.5 6v2.25a2.25 2.25 0 0 0 2.25 2.25Z" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                    <div class="flex-auto">
                                        <a href="#" class="block font-semibold text-gray-900">
                                            Integrations
                                            <span class="absolute inset-0"></span>
                                        </a>
                                        <p class="mt-1 text-gray-600">Connect with third-party tools</p>
                                    </div>
                                </div>
                                <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm/6 hover:bg-gray-50">
                                    <div class="flex size-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6 text-gray-600 group-hover:text-indigo-600">
                                            <path d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0 3.181 3.183a8.25 8.25 0 0 0 13.803-3.7M4.031 9.865a8.25 8.25 0 0 1 13.803-3.7l3.181 3.182m0-4.991v4.99" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                    <div class="flex-auto">
                                        <a href="#" class="block font-semibold text-gray-900">
                                            Automations
                                            <span class="absolute inset-0"></span>
                                        </a>
                                        <p class="mt-1 text-gray-600">Build strategic funnels that will convert</p>
                                    </div>
                                </div>
                            </div>
                            <div class="grid grid-cols-2 divide-x divide-gray-900/5 bg-gray-50">
                                <a href="#" class="flex items-center justify-center gap-x-2.5 p-3 text-sm/6 font-semibold text-gray-900 hover:bg-gray-100">
                                    <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true" class="size-5 flex-none text-gray-400">
                                        <path d="M2 10a8 8 0 1 1 16 0 8 8 0 0 1-16 0Zm6.39-2.908a.75.75 0 0 1 .766.027l3.5 2.25a.75.75 0 0 1 0 1.262l-3.5 2.25A.75.75 0 0 1 8 12.25v-4.5a.75.75 0 0 1 .39-.658Z" clip-rule="evenodd" fill-rule="evenodd" />
                                    </svg>
                                    Watch demo
                                </a>
                                <a href="#" class="flex items-center justify-center gap-x-2.5 p-3 text-sm/6 font-semibold text-gray-900 hover:bg-gray-100">
                                    <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true" class="size-5 flex-none text-gray-400">
                                        <path d="M2 3.5A1.5 1.5 0 0 1 3.5 2h1.148a1.5 1.5 0 0 1 1.465 1.175l.716 3.223a1.5 1.5 0 0 1-1.052 1.767l-.933.267c-.41.117-.643.555-.48.95a11.542 11.542 0 0 0 6.254 6.254c.395.163.833-.07.95-.48l.267-.933a1.5 1.5 0 0 1 1.767-1.052l3.223.716A1.5 1.5 0 0 1 18 15.352V16.5a1.5 1.5 0 0 1-1.5 1.5H15c-1.149 0-2.263-.15-3.326-.43A13.022 13.022 0 0 1 2.43 8.326 13.019 13.019 0 0 1 2 5V3.5Z" clip-rule="evenodd" fill-rule="evenodd" />
                                    </svg>
                                    Contact sales
                                </a>
                            </div>
                        </el-popover>
                    </div>
                    <el-popover-group/>-->


                    <a href="#" class="text-sm/6 font-semibold text-gray-900 mr-5">Registration</a>
                    <div class="py-6">
                        <a href="#" class="-mx-3 block rounded-lg px-3 py-2.5 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Log in</a>
                    </div>
                    </div>
                    </dialog>
                    </el-dialog>
                
        </header>
    </header>
    <main>
        <form action="private_includes/process_question.php" method="post" class="main_formulary">
            <label for="question">Name
                <input type="text" name="question" id="question_input" value="Was Joshua friend or servant of Moses?">
                <!-- The question should contain the verse with the possible answer -->
            </label>
            <br />
            <label for="verse">
                <textarea name="verse_in_to_the_question" id="qinq_verse" cols="70" rows="13">Take heart, do not seek for your left or right; Keep your way straight. (Joshua 1:9; Holy Scriptures).
                </textarea>
            </label>
            <label for="question" id="question_answer">Answer
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

        // -> Is necessary to call the function here
        // For I am good to the ungrateful, and to the wicked /.. - Jesus.
        generate_verse("");
    </script>
</body>

</html>