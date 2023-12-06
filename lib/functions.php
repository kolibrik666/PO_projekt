<?php
function convertEthToUsd($amountInEth) {
    $exchangeRate = 2252.69;
    $amountInUsd = $amountInEth * $exchangeRate;
    $roundedAmountInUsd = round($amountInUsd, 2);
    return $roundedAmountInUsd;
}

function formatTimeDisplay($datetimeString) {
    $now = new DateTime();
    $targetTime = new DateTime($datetimeString);
    $difference = $now->diff($targetTime);

    $formattedTime = '';

    if ($difference->days > 0) {
        $formattedTime .= $difference->days . 'D ';
    }

    $formattedTime .= sprintf(
        '%02dH %02dM %02dS',
        $difference->h,
        $difference->i,
        $difference->s
    );
    return $formattedTime;
}

?>