<?php

/*
|--------------------------------------------------------------------------
| Notification Message Tamplate
|--------------------------------------------------------------------------
|
| These are notification templates for different situation
| like action and System.
*/

function message_tmp($params)
{
    return json_encode([
        'title' => $params['title'],
        'date' => date('Y/m/d H:i:s'),
        'body' => $params['message']
    ]);
}

function payout_refund_tmp($params)
{
    return "Payout Account Top-Up Request from ". $params['names']." (".$params['email'].") 
    Country: ".$params['country'].", Vendor ID: ".$params['vendor_id'].", Currency: ".$params['currency'].", Transaction ID: ".$params['tid'] .", Refund Amount: ".$params['currency']." ".$params['amount']." ";
}

function payin_resend_tmp($params)
{
    return "Settlement Account Resend Request from ". $params['names']." (".$params['email'].") 
    Country: ".$params['country'].", Vendor ID: ".$params['vendor_id'].", Currency: ".$params['currency'].", Transaction ID: ".$params['tid'] .", Refund Amount: ".$params['currency']." ".$params['amount']." ";
}
