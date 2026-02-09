<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jonah Cronicles - project with Jesus Christ of Nazareth</title>
</head>
<body>
    
    <head>
        <h1>Jonah Chronicles - Jesus Christ's oriented Quiz trivia</h1>
    </head>
    <main>
        <label for="question">Name
            <input type="text" name="">
            <!-- The question should contain the verse with the possible answer -->
        </label>

        <label for="verse">
            <textarea name="verse_in_to_the_question" id="qinq_verse"></textarea>
        </label>
    </main>

    <script type="text/javascript">
        var qinq_verse = document.getElmentById("qinq_verse");

        function generate_verse (question) {

            if (question.indexOf()) { // The indexOf is not exactly the best function

            };

            qinq_verse.innerHTML += `

            `;
        };

        // -> Is necessary to call the function here
        generate_verse();
    </script>
</body>
</html>