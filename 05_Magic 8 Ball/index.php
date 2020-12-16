<?php

function magic8Ball() {
  // prompt the player to enter a yes or no question they want to have answered
  echo "Ask anything and the Magic 8 Ball will answer! \nPlease type a question that can be answered with \"yes\" or \"no\".\n";
  $question = readline(">> ");
  // state the received question
  echo "So, your question is: ${question}... \nI understand why this weighs heavy on you... \nI have consulted the spirit world. Here is your answer:\n";

  // determine the "magic" answer with a random number

  // generate a random integer between 0 and 19 (inclusive)
  $rand_num = rand(0, 19);
  // print the random number for debugging purposes
  // echo $rand_num . "\n";

  // the conditional logic

  // print the response associtated with the random
  switch($rand_num) {
    case 0:
      echo "It is certain.";
      break;
    case 1:
      echo "It is decidedly so.";
      break;
    case 2:
      echo "Without a doubt.";
      break;
    case 3:
      echo "Yes - definitely.";
      break;
    case 4:
      echo "You may rely on it.";
      break;
    case 5:
      echo "As I see it, yes.";
      break;
    case 6:
      echo "Most likely.";
      break;
    case 7:
      echo "Outlook good.";
      break;
    case 8:
      echo "Yes.";
      break;
    case 9:
      echo "Signs point to yes.";
      break;
    case 10:
      echo "Reply hazy, try again.";
      break;
    case 11:
      echo "Ask again later.";
      break;
    case 12:
      echo "Better not tell you now.";
      break;
    case 13:
      echo "Cannot predict now.";
      break;
    case 14:
      echo "Concentrate and ask again.";
      break;
    case 15:
      echo "Don't count on it.";
      break;
    case 16:
      echo "My reply is no.";
      break;
    case 17:
      echo "My sources say no.";
      break;
    case 18:
      echo "Outlook not so good.";
      break;
    case 19:
      echo "Very doubtful.";
      break;
  }

  echo "\n\n";
};


//// invoke the function to play the game
magic8Ball();
magic8Ball();
magic8Ball();