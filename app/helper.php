<?php

use Carbon\Carbon;

function greetings($name = 'Shahin')
{
    return "Hello {$name}";
}

function sendSuccessResponse($result, $message, $code = 200)
{
    $response = [
        'success' => true,
        'code' => $code,
        'message' => $message,
        'data' => $result,
    ];


    return response()->json($response, $code);
}


function sendErrorResponse($error, $errorMessages = [], $code = 404)
{
    $response = [
        'success' => false,
        'code' => $code,
        'message' => $error,
    ];

    if (!empty($errorMessages)) {
        $response['data'] = $errorMessages;
    }
    return response()->json($response, $code);
}

/**
 * take two date return bool
 * first perimeter is new date
 * second perimeter is old date
 * return bool value if difference between more than 90 dayss
 */

function canDonateBlood($new,$old)
{
    if(is_null($old)){
        $old = 0;
    }
    $diff = Carbon::parse($new)->diffInDays($old);

    return $diff >= 90 ? true : false;
}



function difference_two_date($new,$old):int
{
    if(is_null($old)){
        $old = 0;
    }

    $diff = Carbon::parse($new)->diffInDays($old);
    return $diff;
}
