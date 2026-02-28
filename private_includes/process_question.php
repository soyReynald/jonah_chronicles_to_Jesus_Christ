<?php
include_once("conexion.php");

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $question = $_POST['question'];
    $verse_in_to_the_question = $_POST['verse_in_to_the_question'];
    $question_answer = $_POST['question_answer'];

    if (empty($question)) 
    {
        echo "Please enter a question";
    } elseif(empty($verse_in_to_the_question))
    {
        echo "Please enter a valid verse";
    } elseif(empty($question_answer))
    {
        echo "Please enter a question verse";
    } else {
        echo "The question is: $question and is valid; The answer inserted is: $question_answer";
    }

    if(!empty($question)) {
        /*
        // Process to insert a question
        //* todo: From the documentation, take the username and password to enter to the system trough the POST slight side.
        ## Animal's procedural correct timing TODO: 9-13 days.

        // In faith trough grace, in order knowing that we are saved not on means of our own works (Ephesians - WORDS of Jesus Christ of Nazareth taken by someone else).
        $sql = "INSERT INTO ..";
        $result = $conn->query($sql);

        if(mysqli_num_rows($result) > 0){
            // printf("Select returned %d rows.\n", mysqli_num_rows($result_test));
            header("Location: ../index.php"); // Do not shot the door in my face. — Jesus Christ of Nazareth.
        }
        */           
    }
  }
?>