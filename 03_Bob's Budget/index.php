<?php
  
$annualExpenses = [
    "vacations" => 1000,
    "carRepairs" => 1000,    
];

$monthlyExpenses = [
    "rent" => 1500,
    "utilities" => 200,
    "healthInsurance" => 200
];

$grossSalary = 48150;
$socialSecurity = $grossSalary * .062;

// There is a progressive tax system
// He pays 12% (keeps 88%) on the first 9,700, 22% (keeps 78%) on the next 29,775, and pays 24% (keeps 76%) on the remainder of his salary
$incomeSegments = [[9700, .88], [29775, .78], [8675, .76]];


// Bob wants to know how much of his salary he can plan to save over the course of a year

// Calculate Bob’s annual salary after taxes
$netIncome = 
$incomeSegments[0][0] * $incomeSegments[0][1] + 
$incomeSegments[1][0] * $incomeSegments[1][1] + 
$incomeSegments[2][0] * $incomeSegments[2][1];

// Substract social security tax
$annualIncome = $netIncome - $socialSecurity;

echo "Annual income before deducting annual expenses:\n$annualIncome\n"; // 35368.2

// Substract annual expenses
$annualIncome -= $annualExpenses["vacations"];
$annualIncome -= $annualExpenses["carRepairs"];

echo "\nAnnual income after deducting annual expenses:\n$annualIncome\n";

// Determine monthly income
$monthlyIncome = $annualIncome / 12;

echo "\nMonthly income before deducting monthly expenses:\n$monthlyIncome\n"; 

// Substract monthly expenses
$monthlyIncome -= $monthlyExpenses["rent"];
$monthlyIncome -= $monthlyExpenses["utilities"];
$monthlyIncome -= $monthlyExpenses["healthInsurance"];

echo "\nMonthly income after deducting monthly expenses:\n$monthlyIncome\n"; 

// Determine weekly income
$weeklyIncome = $monthlyIncome / 4.33;
echo "\nWeekly income before deducting weekly expenses:\n$weeklyIncome\n"; 

// Create an array of weekly expenses
$weeklyExpenses = [
  "gas" => 25,
  "food" => 90,
  "entertainment" => 47
];

// Substract weekly expenses
$weeklyIncome -= $weeklyExpenses["gas"];
$weeklyIncome -= $weeklyExpenses["food"];
$weeklyIncome -= $weeklyExpenses["entertainment"];

echo "\nWeekly income after deducting weekly expenses:\n$weeklyIncome\n"; 

// $weeklyIncome is the amount Bob is able to save each week
$yearlySavings = round($weeklyIncome * 52);

echo "\nPotential yearly savings:\n$yearlySavings\n"; 
// 2152