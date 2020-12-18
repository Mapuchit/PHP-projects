<?php


// Task #1
echo "Task #1:
Write code that prints the numbers from 1 to 100 (inclusive), except for these cases:
- If a number is a multiple of 3, write \"Fizz\" (divisible by 3).
- If a number is a multiple of 5, write \"Buzz\" (divisible by 5).
- If a number is a multiple of both 3 and 5, write \"FizzBuzz\" (divisible by 15).
\n\n";


// Solution #1
echo "Solution #1: 'while' loop\n\n";
// use a while loop to count from 1 to 100 and print the numbers

$counter = 1;

while ($counter <= 100) {

  // need to check for numbers divisible by 15 first
  // if you check first for divisible by 3, you will print "Fizz" and skip past the elseif check for 15
  if ($counter % 15 === 0) {
    echo "FizzBuzz";
  } elseif ($counter % 3 === 0) {
    echo "Fizz";
  } elseif ($counter % 5 === 0) {
    echo "Buzz";
  } else {
    // we only print the number if none of the other conditions are met
    echo $counter;
  }
  echo "\n";
  $counter++;
}


echo "\n\n\n";

// Solution #2
echo "Solution #2: 'for' and 'foreach' loops with an array\n\n";
// use a for and a foreach loop
// instead of printing the statements at each step, we will queue them up into an array and print them all out at the end

$output = [];

// a for loop that counts from 1 to 100
for ($i = 1; $i <= 100; $i++) {

  // determine what to add to the output at each iteration
  if ($i % 15 === 0) {
    array_push($output, "FizzBuzz");
  } elseif ($i % 3 === 0) {
    array_push($output, "Fizz");
  } elseif ($i % 5 === 0) {
    array_push($output, "Buzz");
  } else {
    // we only print the number if none of the other conditions are met
    array_push($output, $i);
  }
}

// use a foreach loop to iterate through the array and print out the statements
foreach ($output as $value) {
  echo $value . "\n";
}


echo "\n\n\n";

// Task #2
echo "Task #2: 
Avoid printing anything when a number is divisible by 3 (\"Fizz\").\n\n";

// having the output stored in an array is nice since we can re-print the same output but add new conditions
foreach ($output as $value) {
  if ($value === "Fizz") {
    continue;
  }
  echo $value . "\n";
}


echo "\n\n\n";

// Task #3
echo "Task #3: 
Stop printing values after the first \"FizzBuzz\".\n\n";

foreach ($output as $value) {
  if ($value === "Fizz") {
    continue;
  } elseif ($value === "FizzBuzz") {
    echo $value;
    break;
  }
  echo $value . "\n";
}
