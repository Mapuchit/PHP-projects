<?php

function generateStory($singular_noun, $verb, $color, $distance_unit) {
  // the last stanza of Robert Frost’s “Stopping by Woods on a Snowy Evening”
  $story = "\nThe ${singular_noun}s are lovely, $color, and deep.\nBut I have promises to keep,\nAnd ${distance_unit}s to go before I $verb,\nAnd ${distance_unit}s to go before I $verb.\n";
  return $story;
};

echo generateStory("dog", "eat", "purple", "centimeter");
echo generateStory("car", "cook", "vermilion", "kilometer");
echo generateStory("empty void", "speak", "beige", "milimeter");

/*
The dogs are lovely, purple, and deep.
But I have promises to keep,
And centimeters to go before I eat,
And centimeters to go before I eat.

The cars are lovely, vermilion, and deep.
But I have promises to keep,
And kilometers to go before I cook,
And kilometers to go before I cook.

The empty voids are lovely, beige, and deep.
But I have promises to keep,
And milimeters to go before I speak,
And milimeters to go before I speak.
*/