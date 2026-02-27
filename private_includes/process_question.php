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
  }
?>