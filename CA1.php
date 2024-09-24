<?php

function calculateBill($dataUsage) {
    $bill = 0.0;

    if ($dataUsage <= 50) {
        $bill = $dataUsage * 10;
    } elseif ($dataUsage <= 100) {
        $bill = 50 * 10 + ($dataUsage - 50) * 8;
    } else {
        $bill = 50 * 10 + 50 * 8 + ($dataUsage - 100) * 5;
    }

    return $bill;
}

$dataUsage = array("30", "70", "120");
$bills = array();
$totalBill = 0;

foreach ($dataUsage as $usage) {
    $bill = calculateBill($usage);
    $bills[] = $bill;
    $totalBill += $bill;  
}

print_r($dataUsage);


echo "<br><br>";
echo "Total Bill: $" . $totalBill . "\n";

?>
