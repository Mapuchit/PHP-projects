<?php

// Describe current location
// The description will give them ideas of what they can and should do next

function lookAround() {

  global $location, $wearing_glasses, $wearing_contacts, $moved_cupboard;

	// The player should only be able to see if they’re wearing either contacts or glasses but not both

  if ($wearing_contacts xor $wearing_glasses) {

    // Print a description based on their current location
    switch($location) {

      case "kitchen":
        // They can: make mushroom soup, go to the woods, go to the bathroom
        echo "This kitchen comes with all the tools and ingredients needed to cook mushroom soup--- except the mushrooms!\n\nFrom here, you see the door to the *bathroom* and the backdoor, which leads to the *woods*.\n\n";
        // The game is won by pushing aside the cupboard and searching the safe
        // So if they haven’t done this yet, we’ll want to hint them towards it
        if ($moved_cupboard) {
          echo "The cupboard has been moved aside, and reveals a safe built in to the wall.\n";
        } else {
          echo "Also, there's a conspicuously large cupboard against a peculiarly worn piece of the wall.\n";
        }
        break;

      case "bathroom":
        echo "Normal bathroom. There's a mirror here. You can get back out to the *kitchen*. You sense a magic presence in the toilet, but you decide to ignore it.\n";
        break;

      case "woods":
        echo "These woods aren't actually that terrifying. Unless you're afraid of mushrooms. There's millions of them here!\nYou see the path leading back to your cabin's *kitchen*.\n";
        break;
    }

  } else {
    echo "It's really hard to make out any details...\n";
  }
  
}