<?php

// Move the cupboard
  
function moveCupboard() {

    global $is_hungry, $wearing_contacts, $wearing_glasses, $needs_to_pee, $location, $moved_cupboard;

  // Decide if the player is prepared to move the cupboard, there are 4 conditions
	$ready_to_work = !$is_hungry && $wearing_contacts && !$wearing_glasses && !$needs_to_pee;

  if ($location !== "kitchen") {
    // wrong location
    echo "You don't see a cupboard here!\n";
  } elseif ($moved_cupboard) {
    // cupboard already moved
    echo "You've already moved the cupboard!\n";
  } elseif (!$ready_to_work) {
    // not ready to work yet
    echo "You're not ready to work! You need to be properly fed, have an empty bladder, and have corrected vision (without dealing with those pesky glasses). Without these things, there's no point in even trying to move the cupboard.\n";
  } else {
    // all is ready to move cupboard
    echo "You move the cupboard aside. You have revealed a safe crudely fit into the wall behind where the cupboard used to be.\n";
    $moved_cupboard = TRUE;
  }
  
}