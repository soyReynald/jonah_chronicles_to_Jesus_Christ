<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jonah Cronicles - project with Jesus Christ of Nazareth</title>
    <style type="text/css">
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
    </style>
</head>
<body>
    
    <head>
        <h1>Jonah Chronicles - Jesus Christ's oriented Quiz trivia</h1>
    </head>
    <main>
        <form action="private_includes/process_question.php" method="post">
            <label for="question">Name
                <input type="text" name="question_#_" id="question_input" value="Was Joshua friend or servant of Moses?">
                <!-- The question should contain the verse with the possible answer -->
            </label>
            <br/>
            <label for="verse">
                <textarea name="verse_in_to_the_question" id="qinq_verse" cols="70" rows="13">Take heart, do not seek for your left or right; Keep your way straight. (Joshua 1:9; Holy Scriptures).
                </textarea>
            </label>
            <label for="question" id="question_answer">Answer
                <textarea name="verse_in_to_the_question" id="question_answer" cols="70" rows="13"></textarea>
                <!-- The question should contain the verse with the possible answer -->
                <!-- Thank you because you listen to us Jesus Christ of Nazareth ... PsD: "reynald manuel rodriguez ramirez"-->
            </label>
            <br/>
            <input type="submit" name="sent_form" value="Send response" class="sent_btn_tag"/>
        </form>
    </main>

    <script type="text/javascript">
        var question_answer = document.getElementById("question_answer");
        var qinq_verse = document.getElementById("qinq_verse");

        function generate_verse (question) {

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