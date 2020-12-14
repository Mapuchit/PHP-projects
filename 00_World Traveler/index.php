<?php
  
// Calculate Our Expected Amount of USD

// Create variables to hold the amount of each foreign currency we’ll be exchanging

$riel = 2103942;
$kyat = 19092;
$krones = 109;
$lek = 9094;

// Use echo to print how much of each currency we started out with

echo "After my travels I had $riel riel, $kyat kyat, $krones krones, and $lek lek left to exchange back to USD.";

// Look up the exchange rate for each of those currencies 
// (from XE.com on 09/12/2020)

$riel_to_USD = 0.000246769;
$kyat_to_USD = 0.000760940;
$krones_to_USD = 0.113912;
$lek_to_USD = 0.00978137;

// For each currency, calculate the amount of USD it will be exchanged for and use echo to print this to the terminal

$USD_from_riel = $riel * $riel_to_USD;
$USD_from_kyat = $kyat * $kyat_to_USD;
$USD_from_krones = $krones * $krones_to_USD;
$USD_from_lek = $lek * $lek_to_USD;

echo "\nMy $riel riel were exchanged for $USD_from_riel USD.";
echo "\nMy $kyat kyat were exchanged for $USD_from_kyat USD.";
echo "\nMy $krones krones were exchanged for $USD_from_krones USD.";
echo "\nMy $lek lek were exchanged for $USD_from_lek USD.";

// The currency exchange business takes a flat $1 fee per conversion
// Calculate our final amount of USD and use echo to print it to the terminal
// We round only the final amount

$final_amount = round($USD_from_riel + $USD_from_kyat + $USD_from_krones + $USD_from_lek - 4, 2);
echo "\nAfter deducting the transactions fees, I'll be recieving $final_amount USD.";

// 631.08 USD