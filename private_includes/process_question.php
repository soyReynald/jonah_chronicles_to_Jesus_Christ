<?php
include_once("conexion.php");
    ## Animal's procedural updated at: 7/5/2026.

  if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["sent_form"])) {
    $question = $conn->real_escape_string($_POST['question']);
    $verse_in_to_the_question = $conn->real_escape_string($_POST['verse_in_to_the_question']);
    $question_answer = $conn->real_escape_string($_POST['question_answer']);

    if (empty($question)) 
    {
        echo "Please enter a question";
    } elseif(empty($verse_in_to_the_question))
    {
        echo "Please enter a valid verse";
    } elseif(empty($question_answer))
    {
        echo "Please insert an answer...";
    } else {
        echo "The question is: $question and is valid; The answer inserted is: $question_answer";
    }

    if(!empty($question) && isset($question) && isset($question_answer)) {
        
        // Process to insert a question
        //* todo: From the documentation, take the username and password to enter to the system trough the POST slight side.
        
        /*
        - id
        - question
        - verse_in_to_the_question
        - question_answer
        - id_admin_user

        */

        // In faith trough grace, in order knowing that we are saved not on means of our own works (Ephesians - WORDS of Jesus Christ of Nazareth taken by someone else).
        $sql = "INSERT INTO games_question_ (question, verse_in_to_the_question, question_answer) VALUES ('{$question}', '{$verse_in_to_the_question}', '{$question_answer}')";

        if ($conn->multi_query($sql) === TRUE) {
            header("Location: ../index.php?answer='{$question_answer}'");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }     
    }
  }
?>