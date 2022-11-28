<?php

/*
|--------------------------------------------------------------------------
| Email Verification Email Tamplate
|--------------------------------------------------------------------------
|
| These are support methods for processing various tasks during login
|
*/
function emailVerificationTemplate($params)
{
    return '
        <html>
        <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Merchant-registration</title>
        <link rel="stylesheet" href="https://icons.elipa.co/icons.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

        </head>

        <body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" style="background-color: #eee;">

        <br>
        <div style="margin:0 auto !important;padding:20px; max-width: 500px;background-color: #fff;border-radius: 4px;">

        <table border="0" cellpadding="0" cellspacing="0" width="100%">
        <tbody>
        <tr>
        <td bgcolor="#ffffff" align="center">

        <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:500px"
        class="m_-9170412488597135291wrapper">
        <tbody>
        <tr>
        <td align="center" valign="top"
        style="padding:15px 0 10px 0;font-size:11px;font-family:Helvetica,Arial,sans-serif"
        class="m_-9170412488597135291logo">
        <a href="" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://ipayafrica.com&source=gmail&ust=1653726730056000&usg=AOvVaw0n0xFfKcEC9wAqcLdxIz2k">
        <img src="https://ci6.googleusercontent.com/proxy/ilh4VS-d6g4KONR2MI3nr1R9C9KRJHHWSY1MdozNhi2NJWrNgIC8c8v6q8v6WMDRV5c-Dvuk7f-Dck1PDYxROFT8jaU0kaG0AxbGS228mIaDnXAPkCuvA2kA-7nkuBQBs46MqkF7=s0-d-e1-ft#https://api.elasticemail.com/userfile/48a5ba37-750b-46a9-84ba-56d763da15a8/iPay.png" alt="iPay" class="CToWUd">
        </a>
        </td>
        </tr>

        </tbody>
        </table>
        <p style="padding-bottom:20px ;">Email verification</p <table border="0" cellpadding="0"
        cellspacing="0" width="100%" style="max-width:500px"
        class="m_-9170412488597135291responsive-table">
        <tbody>
        <tr>
        <td>

        <table border="0" cellpadding="0" cellspacing="0" width="100%"
        style="max-width:500px;border-bottom:1px dotted #aaa" class="m_-9170412488597135291wrapper">
        <tbody>

        </tbody>
        </table>

        <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:500px"
        class="m_-9170412488597135291responsive-table">
        <tbody>
        <tr>
        <td>


        <table >                                            
        <h4 style="position:relative; margin-top: 5%; font-family:Helvetica,Arial,sans-serif;">
        Hello ' . $params['name'] . ',
        </h4>
        <tbody>
        <tr>

        <td style="font-family:Helvetica,Arial,sans-serif; ">
        <div style="font-family: Roboto;
        font-style: normal;
        font-weight: 300;
        font-size: 14px;
        line-height: 17px;                                                    
        margin-bottom: 5px;                                                    
        letter-spacing: 0.02em;
        color: #1f1f1f">
        <p>
        Thanks for registering for an account with iPay. Before
        we get started, we just need to confirm that this is you. Click below to verify your email address:
        </p>
        </div>
        <div style="width: 100%; text-align: center; " > 
        <button style="background-color: #124AA1;
        cursor: pointer;
        border: none;
        width: 100px;
        height: 40px;
        border-radius: 4px;
        color: white;
        padding: 10px;
        text-align: center;
        text-decoration: none;

        display: inline-block;"><a style="text-decoration: none; color: white;" href="' . env('APP_BASE_URL') . "/auth/verifyEmail?country=" . $params['country'] . "&vc=" . $params['verificationCode'] . '">Verify Email</a>
        </button>     
        </div>
        </td>
        </tr>
        <tr>
        <td        
        style="padding:10px 0 0px 0;font-size:14px;line-height:25px;font-family:Helvetica,Arial,sans-serif;color:#666666;"
        class="m_-9170412488597135291padding-copy">
        </td>
        </tr>
        <tr>
        <td >
        <div>
        <p style="margin-top: 0px;
        line-height: 2px;
        font-family: Roboto">Best Regards</p>

        <p style="margin-top: 0px;
        line-height: 2px;
        font-family: Roboto">iPay Team</p>

        </div>
        </td>
        </tr>
        </tbody>
        </table>

        <table width="100%" border="0" cellspacing="0" cellpadding="0">

        <tbody>

        <tr>

        <th style="padding:10px 0 0px 0;text-align:center;font-size:14px;line-height:25px;font-family:Helvetica,Arial,sans-serif;color:#666666"
        class="m_-9170412488597135291padding-copy">

        </th>
        <th style="padding:10px 0 0px 0;text-align:center;font-size:14px;line-height:25px;font-family:Helvetica,Arial,sans-serif;color:#666666"
        class="m_-9170412488597135291padding-copy">

        </th>
        </tr>
        <tr>

        <th style="padding:0px 0 0px 0px;text-align:center;font-size:14px;line-height:25px;font-family:Helvetica,Arial,sans-serif;color:#666666"
        class="m_-9170412488597135291padding-copy">
        </th>
        <th style="padding:0px 0 0px 0px;text-align:center;font-size:14px;line-height:25px;font-family:Helvetica,Arial,sans-serif;color:#666666"
        class="m_-9170412488597135291padding-copy">
        </th>
        </tr>
        </tbody>
        </table>
        </td>
        </tr>
        <tr>
        <td style="border-top:1px dotted #aaa; text-align:center;" >

        <table cellspacing="0" cellpadding="0"  width="100%" margin-top: 20px;>

        <p style="padding-top: 10;" >
        Sent from
        <a style="text-decoration: none" href="https://www.ipayafrica.com/">iPayafrica.com</a>
        </p>
        <p>
        Need help? Contact our support team on +2547344222 or + 254
        79144 1111
        </p>
        <tbody>
        <tr>
        <td valign="top" style="padding:0"
        class="m_-9170412488597135291mobile-wrapper">
        <br>
        </td>
        </tr>
        </tbody>
        </table>
        </td>
        </tr>
        </tbody>
        </table>
        </td>
        </tr>
        </tbody>
        </table>
        </td>
        </tr>
        </tbody>
        </table>
        </div>
        <table width="100%"  cellspacing="0" cellpadding="0"
        style="max-width:500px;margin: 0 auto;max-width: 500px;" class="m_-9170412488597135291responsive-table">
        <tbody>
        <tr>
        <td 
        style="font-size:12px;line-height:18px;font-family:Helvetica,Arial,sans-serif;color:#666666; background-color: #eee;padding-top: 30px;padding-bottom: 30px;  text-align:center;">
        <p style="line-height: 1px;
        font-size: 13px;
        font-family: Roboto;">
        iPay, FCB Mirub 15th Floor, Lenana Road , Nairobi ,Kenya.
        </p>
        </td>
        </tr>
        </tbody>
        </table>
        </body>
        </html>
    ';

}


/*
|--------------------------------------------------------------------------
| OTP Token Email Template
|--------------------------------------------------------------------------
|
| These are support methods for processing various tasks during login
|
*/

function otpTokenTemplate($params)
{

    return '<html>
        <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Merchant-registration</title>
        <link rel="stylesheet" href="https://icons.elipa.co/icons.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

        </head>

        <body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" style="background-color: #eee;">

        <br>
        <div style="margin:0 auto !important;padding:20px; max-width: 500px;background-color: #fff;border-radius: 4px;">

        <table border="0" cellpadding="0" cellspacing="0" width="100%">
        <tbody>
        <tr>
        <td bgcolor="#ffffff" align="center">

        <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:500px"
        class="m_-9170412488597135291wrapper">
        <tbody>
        <tr>
        <td align="center" valign="top"
        style="padding:15px 0 10px 0;font-size:11px;font-family:Helvetica,Arial,sans-serif"
        class="m_-9170412488597135291logo">
        <a href="" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://ipayafrica.com&source=gmail&ust=1653726730056000&usg=AOvVaw0n0xFfKcEC9wAqcLdxIz2k">
        <img src="https://ci6.googleusercontent.com/proxy/ilh4VS-d6g4KONR2MI3nr1R9C9KRJHHWSY1MdozNhi2NJWrNgIC8c8v6q8v6WMDRV5c-Dvuk7f-Dck1PDYxROFT8jaU0kaG0AxbGS228mIaDnXAPkCuvA2kA-7nkuBQBs46MqkF7=s0-d-e1-ft#https://api.elasticemail.com/userfile/48a5ba37-750b-46a9-84ba-56d763da15a8/iPay.png" alt="iPay" class="CToWUd">
        </a>
        </td>
        </tr>

        </tbody>
        </table>
        <p style="padding-bottom:20px ;">OTP</p <table border="0" cellpadding="0"
        cellspacing="0" width="100%" style="max-width:500px"
        class="m_-9170412488597135291responsive-table">
        <tbody>
        <tr>
        <td>

        <table border="0" cellpadding="0" cellspacing="0" width="100%"
        style="max-width:500px;border-bottom:1px dotted #aaa" class="m_-9170412488597135291wrapper">
        <tbody>

        </tbody>
        </table>

        <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:500px"
        class="m_-9170412488597135291responsive-table">
        <tbody>
        <tr>
        <td>


        <table >                                            
        <h4 style="position:relative; margin-top: 5%; font-family:Helvetica,Arial,sans-serif;">
        Hello ' . $params['name'] . ',
        </h4>
        <tbody>
        <tr>

        <td style="font-family:Helvetica,Arial,sans-serif; ">
        <div style="font-family: Roboto;
        font-style: normal;
        font-weight: 300;
        font-size: 14px;
        line-height: 17px;                                                    
        margin-bottom: 5px;                                                    
        letter-spacing: 0.02em;
        color: #1f1f1f">
        <p>
               <p> We\'ve received your request to access your iPay accout. Use this OTP code to login: <b>' . $params['token'] . '</b></p><br>

               <p>Please note: The OTP expires in 3 minutes after being sent to you.</p>
               </div>
               </td>
               </tr>
               <tr>
               <td        
               style="padding:10px 0 0px 0;font-size:14px;line-height:25px;font-family:Helvetica,Arial,sans-serif;color:#666666;"
               class="m_-9170412488597135291padding-copy">
               </td>
               </tr>
               <tr>
               <td >
               <div>
               <p style="margin-top: 0px;
               line-height: 2px;
               font-family: Roboto">Best Regards</p>
       
               <p style="margin-top: 0px;
               line-height: 2px;
               font-family: Roboto">iPay Team</p>
       
               </div>
               </td>
               </tr>
               </tbody>
               </table>
       
               <table width="100%" border="0" cellspacing="0" cellpadding="0">
               <tbody>
       
               <tr>
       
               <th style="padding:10px 0 0px 0;text-align:center;font-size:14px;line-height:25px;font-family:Helvetica,Arial,sans-serif;color:#666666"
               class="m_-9170412488597135291padding-copy">
       
               </th>
               <th style="padding:10px 0 0px 0;text-align:center;font-size:14px;line-height:25px;font-family:Helvetica,Arial,sans-serif;color:#666666"
               class="m_-9170412488597135291padding-copy">
       
               </th>
               </tr>
               <tr>
       
               <th style="padding:0px 0 0px 0px;text-align:center;font-size:14px;line-height:25px;font-family:Helvetica,Arial,sans-serif;color:#666666"
               class="m_-9170412488597135291padding-copy">
               </th>
               <th style="padding:0px 0 0px 0px;text-align:center;font-size:14px;line-height:25px;font-family:Helvetica,Arial,sans-serif;color:#666666"
               class="m_-9170412488597135291padding-copy">
               </th>
               </tr>
               </tbody>
               </table>
               </td>
               </tr>
               <tr>
               <td style="border-top:1px dotted #aaa; text-align:center;" >
       
               <table cellspacing="0" cellpadding="0"  width="100%" margin-top: 20px;>
       
               <p style="padding-top: 10;" >
               Sent from
               <a style="text-decoration: none" href="https://www.ipayafrica.com/">iPayafrica.com</a>
               </p>
               <p>
               Need help? Contact our support team on +2547344222 or + 254
               79144 1111
               </p>
               <tbody>
               <tr>
               <td valign="top" style="padding:0"
               class="m_-9170412488597135291mobile-wrapper">
               <br>
               </td>
               </tr>
               </tbody>
               </table>
               </td>
               </tr>
               </tbody>
               </table>
               </td>
               </tr>
               </tbody>
               </table>
               </td>
               </tr>
               </tbody>
               </table>
               </div>
               <table width="100%"  cellspacing="0" cellpadding="0"
               style="max-width:500px;margin: 0 auto;max-width: 500px;" class="m_-9170412488597135291responsive-table">
               <tbody>
               <tr>
               <td 
               style="font-size:12px;line-height:18px;font-family:Helvetica,Arial,sans-serif;color:#666666; background-color: #eee;padding-top: 30px;padding-bottom: 30px;  text-align:center;">
               <p style="line-height: 1px;
               font-size: 13px;
               font-family: Roboto;">
               iPay, FCB Mihrab 15th Floor, Lenana Road, Nairobi, Kenya.
               </p>
               </td>
               </tr>
               </tbody>
               </table>
               </body>
    </html>';

}

/*
|--------------------------------------------------------------------------
| Password Reset Email Template
|--------------------------------------------------------------------------
|
| These are support methods for processing various tasks during login
|
*/

function passwordResetTemplate($params): string
{
    return '<html>
        <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Merchant-registration</title>
        <link rel="stylesheet" href="https://icons.elipa.co/icons.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

        </head>

        <body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" style="background-color: #eee;">

        <br>
        <div style="margin:0 auto !important;padding:20px; max-width: 500px;background-color: #fff;border-radius: 4px;">

        <table border="0" cellpadding="0" cellspacing="0" width="100%">
        <tbody>
        <tr>
        <td bgcolor="#ffffff" align="center">

        <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:500px"
        class="m_-9170412488597135291wrapper">
        <tbody>
        <tr>
        <td align="center" valign="top"
        style="padding:15px 0 10px 0;font-size:11px;font-family:Helvetica,Arial,sans-serif"
        class="m_-9170412488597135291logo">
        <a href="" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://ipayafrica.com&source=gmail&ust=1653726730056000&usg=AOvVaw0n0xFfKcEC9wAqcLdxIz2k">
        <img src="https://ci6.googleusercontent.com/proxy/ilh4VS-d6g4KONR2MI3nr1R9C9KRJHHWSY1MdozNhi2NJWrNgIC8c8v6q8v6WMDRV5c-Dvuk7f-Dck1PDYxROFT8jaU0kaG0AxbGS228mIaDnXAPkCuvA2kA-7nkuBQBs46MqkF7=s0-d-e1-ft#https://api.elasticemail.com/userfile/48a5ba37-750b-46a9-84ba-56d763da15a8/iPay.png" alt="iPay" class="CToWUd">
        </a>
        </td>
        </tr>

        </tbody>
        </table>
        <p style="padding-bottom:20px ;">Password Reset</p <table border="0" cellpadding="0"
        cellspacing="0" width="100%" style="max-width:500px"
        class="m_-9170412488597135291responsive-table">
        <tbody>
        <tr>
        <td>

        <table border="0" cellpadding="0" cellspacing="0" width="100%"
        style="max-width:500px;border-bottom:1px dotted #aaa" class="m_-9170412488597135291wrapper">
        <tbody>

        </tbody>
        </table>

        <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:500px"
        class="m_-9170412488597135291responsive-table">
        <tbody>
        <tr>
        <td>


        <table >                                            
        <h4 style="position:relative; margin-top: 5%; font-family:Helvetica,Arial,sans-serif;">
        Hello ' . $params['name'] . ',
        </h4>
        <tbody>
        <tr>

        <td style="font-family:Helvetica,Arial,sans-serif; ">
        <div style="font-family: Roboto;
        font-style: normal;
        font-weight: 300;
        font-size: 14px;
        line-height: 17px;                                                    
        margin-bottom: 5px;                                                    
        letter-spacing: 0.02em;
        color: #1f1f1f">
        <p>
           <br>
           
           <p>
               A Password Reset request has been made. If you DON\'T recognize this action then DON\'T proceed
               and report this to info@ipayafrica.com
           </p>

           </div>
           <div style="width: 100%; text-align: center; " > 
           <button style="background-color: #124AA1;
           cursor: pointer;
           border: none;
           width: 100px;
           height: 40px;
           border-radius: 4px;
           color: white;
           padding: 10px;
           text-align: center;
           text-decoration: none;
   
           display: inline-block;"><a style="text-decoration: none; color: white;" href="' . env('APP_BASE_URL') . "/auth/resetPassword?country=" . $params['country'] . "&token=" . $params['token'] . '">Reset Password</a>
           </button>     
           </div>
           </td>
           </tr>
           <tr>
           <td        
           style="padding:10px 0 0px 0;font-size:14px;line-height:25px;font-family:Helvetica,Arial,sans-serif;color:#666666;"
           class="m_-9170412488597135291padding-copy">
           </td>
           </tr>
           <tr>
           <td >
           <div>
           <p style="margin-top: 0px;
           line-height: 2px;
           font-family: Roboto">Best Regards</p>
   
           <p style="margin-top: 0px;
           line-height: 2px;
           font-family: Roboto">iPay Team</p>
   
           </div>
           </td>
           </tr>
           </tbody>
           </table>
   
           <table width="100%" border="0" cellspacing="0" cellpadding="0">
           <tbody>
   
           <tr>
   
           <th style="padding:10px 0 0px 0;text-align:center;font-size:14px;line-height:25px;font-family:Helvetica,Arial,sans-serif;color:#666666"
           class="m_-9170412488597135291padding-copy">
   
           </th>
           <th style="padding:10px 0 0px 0;text-align:center;font-size:14px;line-height:25px;font-family:Helvetica,Arial,sans-serif;color:#666666"
           class="m_-9170412488597135291padding-copy">
   
           </th>
           </tr>
           <tr>
   
           <th style="padding:0px 0 0px 0px;text-align:center;font-size:14px;line-height:25px;font-family:Helvetica,Arial,sans-serif;color:#666666"
           class="m_-9170412488597135291padding-copy">
           </th>
           <th style="padding:0px 0 0px 0px;text-align:center;font-size:14px;line-height:25px;font-family:Helvetica,Arial,sans-serif;color:#666666"
           class="m_-9170412488597135291padding-copy">
           </th>
           </tr>
           </tbody>
           </table>
           </td>
           </tr>
           <tr>
           <td style="border-top:1px dotted #aaa; text-align:center;" >
   
           <table cellspacing="0" cellpadding="0"  width="100%" margin-top: 20px;>
   
           <p style="padding-top: 10;" >
           Sent from
           <a style="text-decoration: none" href="https://www.ipayafrica.com/">iPayafrica.com</a>
           </p>
           <p>
           Need help? Contact our support team on +2547344222 or + 254
           79144 1111
           </p>
           <tbody>
           <tr>
           <td valign="top" style="padding:0"
           class="m_-9170412488597135291mobile-wrapper">
           <br>
           </td>
           </tr>
           </tbody>
           </table>
           </td>
           </tr>
           </tbody>
           </table>
           </td>
           </tr>
           </tbody>
           </table>
           </td>
           </tr>
           </tbody>
           </table>
           </div>
           <table width="100%"  cellspacing="0" cellpadding="0"
           style="max-width:500px;margin: 0 auto;max-width: 500px;" class="m_-9170412488597135291responsive-table">
           <tbody>
           <tr>
           <td 
           style="font-size:12px;line-height:18px;font-family:Helvetica,Arial,sans-serif;color:#666666; background-color: #eee;padding-top: 30px;padding-bottom: 30px;  text-align:center;">
           <p style="
           font-size: 13px;
           font-family: Roboto;">
           iPay, FCB Mihrab 15th Floor, Lenana Road, Nairobi, Kenya.
           </p>
           </td>
           </tr>
           </tbody>
           </table>
           </body>
    </html>';

}

function passwordExpiredTemplate($params): string
{
    return '<html>
        <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Merchant-registration</title>
        <link rel="stylesheet" href="https://icons.elipa.co/icons.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

        </head>

        <body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" style="background-color: #eee;">

        <br>
        <div style="margin:0 auto !important;padding:20px; max-width: 500px;background-color: #fff;border-radius: 4px;">

        <table border="0" cellpadding="0" cellspacing="0" width="100%">
        <tbody>
        <tr>
        <td bgcolor="#ffffff" align="center">

        <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:500px"
        class="m_-9170412488597135291wrapper">
        <tbody>
        <tr>
        <td align="center" valign="top"
        style="padding:15px 0 10px 0;font-size:11px;font-family:Helvetica,Arial,sans-serif"
        class="m_-9170412488597135291logo">
        <a href="" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://ipayafrica.com&source=gmail&ust=1653726730056000&usg=AOvVaw0n0xFfKcEC9wAqcLdxIz2k">
        <img src="https://ci6.googleusercontent.com/proxy/ilh4VS-d6g4KONR2MI3nr1R9C9KRJHHWSY1MdozNhi2NJWrNgIC8c8v6q8v6WMDRV5c-Dvuk7f-Dck1PDYxROFT8jaU0kaG0AxbGS228mIaDnXAPkCuvA2kA-7nkuBQBs46MqkF7=s0-d-e1-ft#https://api.elasticemail.com/userfile/48a5ba37-750b-46a9-84ba-56d763da15a8/iPay.png" alt="iPay" class="CToWUd">
        </a>
        </td>
        </tr>

        </tbody>
        </table>
        <p style="padding-bottom:20px ;">Password Expiry</p <table border="0" cellpadding="0"
        cellspacing="0" width="100%" style="max-width:500px"
        class="m_-9170412488597135291responsive-table">
        <tbody>
        <tr>
        <td>

        <table border="0" cellpadding="0" cellspacing="0" width="100%"
        style="max-width:500px;border-bottom:1px dotted #aaa" class="m_-9170412488597135291wrapper">
        <tbody>

        </tbody>
        </table>

        <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:500px"
        class="m_-9170412488597135291responsive-table">
        <tbody>
        <tr>
        <td>


        <table >                                            
        <h4 style="position:relative; margin-top: 5%; font-family:Helvetica,Arial,sans-serif;">
        Hello ' . $params['name'] . ',
        </h4>
        <tbody>
        <tr>

        <td style="font-family:Helvetica,Arial,sans-serif; ">
        <div style="font-family: Roboto;
        font-style: normal;
        font-weight: 300;
        font-size: 14px;
        line-height: 17px;                                                    
        margin-bottom: 5px;                                                    
        letter-spacing: 0.02em;
        color: #1f1f1f">
        <p>
           <br>
           
           <p>
               A Password Reset is required. If you DON\'T recognize this action then DON\'T proceed
               and report this to info@ipayafrica.com
           </p>

           </div>
           <div style="width: 100%; text-align: center; " > 
           <button style="background-color: #124AA1;
           cursor: pointer;
           border: none;
           width: 100px;
           height: 40px;
           border-radius: 4px;
           color: white;
           padding: 10px;
           text-align: center;
           text-decoration: none;
   
           display: inline-block;"><a style="text-decoration: none; color: white;" href="' . env('APP_BASE_URL') . "/auth/ResetPassword?country=" . $params['country'] . "&token=" . $params['token'] . '">Reset Password</a>
           </button>     
           </div>
           </td>
           </tr>
           <tr>
           <td        
           style="padding:10px 0 0px 0;font-size:14px;line-height:25px;font-family:Helvetica,Arial,sans-serif;color:#666666;"
           class="m_-9170412488597135291padding-copy">
           </td>
           </tr>
           <tr>
           <td >
           <div>
           <p style="margin-top: 0px;
           line-height: 2px;
           font-family: Roboto">Best Regards</p>
   
           <p style="margin-top: 0px;
           line-height: 2px;
           font-family: Roboto">iPay Team</p>
   
           </div>
           </td>
           </tr>
           </tbody>
           </table>
   
           <table width="100%" border="0" cellspacing="0" cellpadding="0">
           <tbody>
   
           <tr>
   
           <th style="padding:10px 0 0px 0;text-align:center;font-size:14px;line-height:25px;font-family:Helvetica,Arial,sans-serif;color:#666666"
           class="m_-9170412488597135291padding-copy">
   
           </th>
           <th style="padding:10px 0 0px 0;text-align:center;font-size:14px;line-height:25px;font-family:Helvetica,Arial,sans-serif;color:#666666"
           class="m_-9170412488597135291padding-copy">
   
           </th>
           </tr>
           <tr>
   
           <th style="padding:0px 0 0px 0px;text-align:center;font-size:14px;line-height:25px;font-family:Helvetica,Arial,sans-serif;color:#666666"
           class="m_-9170412488597135291padding-copy">
           </th>
           <th style="padding:0px 0 0px 0px;text-align:center;font-size:14px;line-height:25px;font-family:Helvetica,Arial,sans-serif;color:#666666"
           class="m_-9170412488597135291padding-copy">
           </th>
           </tr>
           </tbody>
           </table>
           </td>
           </tr>
           <tr>
           <td style="border-top:1px dotted #aaa; text-align:center;" >
   
           <table cellspacing="0" cellpadding="0"  width="100%" margin-top: 20px;>
   
           <p style="padding-top: 10;" >
           Sent from
           <a style="text-decoration: none" href="https://www.ipayafrica.com/">iPayafrica.com</a>
           </p>
           <p>
           Need help? Contact our support team on +2547344222 or + 254
           79144 1111
           </p>
           <tbody>
           <tr>
           <td valign="top" style="padding:0"
           class="m_-9170412488597135291mobile-wrapper">
           <br>
           </td>
           </tr>
           </tbody>
           </table>
           </td>
           </tr>
           </tbody>
           </table>
           </td>
           </tr>
           </tbody>
           </table>
           </td>
           </tr>
           </tbody>
           </table>
           </div>
           <table width="100%"  cellspacing="0" cellpadding="0"
           style="max-width:500px;margin: 0 auto;max-width: 500px;" class="m_-9170412488597135291responsive-table">
           <tbody>
           <tr>
           <td 
           style="font-size:12px;line-height:18px;font-family:Helvetica,Arial,sans-serif;color:#666666; background-color: #eee;padding-top: 30px;padding-bottom: 30px;  text-align:center;">
           <p style="
           font-size: 13px;
           font-family: Roboto;">
           iPay, FCB Mihrab 15th Floor, Lenana Road, Nairobi, Kenya.
           </p>
           </td>
           </tr>
           </tbody>
           </table>
           </body>
    </html>';

}

function passwordChangedSuccessfully()
{
    return '';

}

function genericTemplate($params){
    return '
    <html>
        <head>
            
        </head>
        <body>
           <p>Hello &nbsp;' . $params['name'] . '</p><br>
           
           <p>
               '.$params['purpose'].'
           </p><br />
           <p>
               '.$params['message'].'
           </p><br />
           <p>
               '.$params['type'].'
           </p>
           <button>
                <a style="text-decoration: none; color: white;" href="' . $_ENV['APP_BASE_URL'] . "/auth/resetPassword?country=" . $params['country'] . "&token=" . $params['token'] . '">Reset Password</a>
           </button>
        </body>
    </html>';
}
function firstPasswordResetTemplate($params){
    return '<html>
    <head>
 
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Merchant-registration</title>
    <link rel="stylesheet" href="https://icons.elipa.co/icons.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    </head>

    <body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" style="background-color: #eee;">

    <br>
    <div style="margin:0 auto !important;padding:20px; max-width: 500px;background-color: #fff;border-radius: 4px;">

        <table border="0" cellpadding="0" cellspacing="0" width="100%">
            <tbody>
                <tr>
                    <td bgcolor="#ffffff" align="center">

                        <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:500px"
                            class="m_-9170412488597135291wrapper">
                            <tbody>
                                <tr>
                                    <td align="center" valign="top"
                                        style="padding:15px 0 10px 0;font-size:11px;font-family:Helvetica,Arial,sans-serif"
                                        class="m_-9170412488597135291logo">
                                        <a href="" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://ipayafrica.com&source=gmail&ust=1653726730056000&usg=AOvVaw0n0xFfKcEC9wAqcLdxIz2k">
                                            <img src="https://ci6.googleusercontent.com/proxy/ilh4VS-d6g4KONR2MI3nr1R9C9KRJHHWSY1MdozNhi2NJWrNgIC8c8v6q8v6WMDRV5c-Dvuk7f-Dck1PDYxROFT8jaU0kaG0AxbGS228mIaDnXAPkCuvA2kA-7nkuBQBs46MqkF7=s0-d-e1-ft#https://api.elasticemail.com/userfile/48a5ba37-750b-46a9-84ba-56d763da15a8/iPay.png" alt="iPay" class="CToWUd">
                                        </a>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                        <p style="padding-bottom:20px ;">First Time Login</p <table border="0" cellpadding="0"
                            cellspacing="0" width="100%" style="max-width:500px"
                            class="m_-9170412488597135291responsive-table">
            <tbody>
                <tr>
                    <td>
                        <table border="0" cellpadding="0" cellspacing="0" width="100%"
                            style="max-width:500px;border-bottom:1px dotted #aaa" class="m_-9170412488597135291wrapper">
                            <tbody>
                            </tbody>
                        </table>
                        <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:500px"
                            class="m_-9170412488597135291responsive-table">
                            <tbody>
                                <tr>
                                    <td>
                                        <table >                                            
                                            <h4 style="position:relative; margin-top: 5%; font-family:Helvetica,Arial,sans-serif;">
                                                Hello ' . $params['name'] . ',
                                            </h4>
                                            <tbody>
                                                <tr>
                                                
                                                 <td style="font-family:Helvetica,Arial,sans-serif; ">
                                                  <div style="font-family: Roboto;
                                                    font-style: normal;
                                                    font-weight: 300;
                                                    font-size: 14px;
                                                    line-height: 17px;                                                    
                                                    margin-bottom: 5px;                                                    
                                                    letter-spacing: 0.02em;
                                                    color: #1f1f1f">
       
                                                <p>
                                                    A new account has been made for you and a password reset is required. If you DON\'T recognize this action then DON\'T proceed
                                                    and report this to info@ipayafrica.com
                                                </p>
                                                <p>Your temporary password is: <b>'.$params['password'].'</b></p>
                                                </div>
        
                                                    
                                                <div style="width: 100%; text-align: center; " > 
                                                  <button style="background-color: #124AA1;
                                                      cursor: pointer;
                                                      border: none;
                                                      width: 100px;
                                                      height: 40px;
                                                      border-radius: 4px;
                                                      color: white;
                                                      padding: 10px;
                                                      text-align: center;
                                                      text-decoration: none;
                                                      
                                                      display: inline-block;"><a style="text-decoration: none; color: white;" href="' . env('APP_BASE_URL') . "/auth/changePassword?country=" . $params['country'] . "&vc=" . $params['token'] . '">Reset Password</a>
                                                  </button>
                                                      
                                                    </div>

                                                   



                                                    </td>

                                                </tr>
                                                <tr>

                                                    <td 
                                                       
                                                        style="padding:10px 0 0px 0;font-size:14px;line-height:25px;font-family:Helvetica,Arial,sans-serif;color:#666666;"
                                                        class="m_-9170412488597135291padding-copy">


                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td >
                                                        <div>
                                                            <p style="margin-top: 0px;
                                                        line-height: 2px;
                                                        font-family: Roboto">Best Regards</p>

                                                            <p style="margin-top: 0px;
                                                            line-height: 2px;
                                                            font-family: Roboto">iPay Team</p>

                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                            <tbody>

                                                <tr>

                                                    <th style="padding:10px 0 0px 0;text-align:center;font-size:14px;line-height:25px;font-family:Helvetica,Arial,sans-serif;color:#666666"
                                                        class="m_-9170412488597135291padding-copy">

                                                    </th>
                                                    <th style="padding:10px 0 0px 0;text-align:center;font-size:14px;line-height:25px;font-family:Helvetica,Arial,sans-serif;color:#666666"
                                                        class="m_-9170412488597135291padding-copy">

                                                    </th>
                                                </tr>
                                                <tr>

                                                    <th style="padding:0px 0 0px 0px;text-align:center;font-size:14px;line-height:25px;font-family:Helvetica,Arial,sans-serif;color:#666666"
                                                        class="m_-9170412488597135291padding-copy">

                                                    </th>
                                                    <th style="padding:0px 0 0px 0px;text-align:center;font-size:14px;line-height:25px;font-family:Helvetica,Arial,sans-serif;color:#666666"
                                                        class="m_-9170412488597135291padding-copy">

                                                    </th>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="border-top:1px dotted #aaa; text-align:center;" >

                                        <table cellspacing="0" cellpadding="0"  width="100%" margin-top: 20px;>
                         
                                                <p style="padding-top: 10;" >
                                                    Sent from
                                                    <a style="text-decoration: none" href="https://www.ipayafrica.com/">
                                                        iPayafrica.com</a>
                                                </p>
                                                <p>
                                                    Need help? Contact our support team on +2547344222 or + 254
                                                    79144 1111
                                                </p>
                                            

                                            <tbody>
                                                <tr>
                                                    <td valign="top" style="padding:0"
                                                        class="m_-9170412488597135291mobile-wrapper">

                                                        <br>

                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>

                            </tbody>
                        </table>

                    </td>
                </tr>
            </tbody>
        </table>


        </td>
        </tr>

        </tbody>
        </table>

    </div>
    <table width="100%"  cellspacing="0" cellpadding="0"
        style="max-width:500px;margin: 0 auto;max-width: 500px;" class="m_-9170412488597135291responsive-table">
        <tbody>
            <tr>
                <td 
                    style="font-size:12px;line-height:18px;font-family:Helvetica,Arial,sans-serif;color:#666666; background-color: #eee;padding-top: 30px;padding-bottom: 30px;  text-align:center;">
                    <p style="
            font-size: 13px;
            font-family: Roboto;">
                        iPay, FCB Mihrab 15th Floor, Lenana Road, Nairobi, Kenya.
                        
                    </p>
                </td>
            </tr>
        </tbody>
    </table>
</body>
</html>';
}

function emailVerificationTemplate2($params)
{
    return '
    <html>

        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
            <title>Merchant-registration</title>
            <link rel="stylesheet" href="https://icons.elipa.co/icons.css">
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
                integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
        
        </head>

        <body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" style="background-color: #eee;">

            <br>
            <div style="margin:0 auto !important;padding:20px; max-width: 500px;background-color: #fff;border-radius: 4px;">
        
                <table border="0" cellpadding="0" cellspacing="0" width="100%">
                    <tbody>
                        <tr>
                            <td bgcolor="#ffffff" align="center">
        
                                <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:500px"
                                    class="m_-9170412488597135291wrapper">
                                    <tbody>
                                        <tr>
                                            <td align="center" valign="top"
                                                style="padding:15px 0 10px 0;font-size:11px;font-family:Helvetica,Arial,sans-serif"
                                                class="m_-9170412488597135291logo">
                                                <a href="" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://ipayafrica.com&source=gmail&ust=1653726730056000&usg=AOvVaw0n0xFfKcEC9wAqcLdxIz2k">
                                                    <img src="https://ci6.googleusercontent.com/proxy/ilh4VS-d6g4KONR2MI3nr1R9C9KRJHHWSY1MdozNhi2NJWrNgIC8c8v6q8v6WMDRV5c-Dvuk7f-Dck1PDYxROFT8jaU0kaG0AxbGS228mIaDnXAPkCuvA2kA-7nkuBQBs46MqkF7=s0-d-e1-ft#https://api.elasticemail.com/userfile/48a5ba37-750b-46a9-84ba-56d763da15a8/iPay.png" alt="iPay" class="CToWUd">
                                                </a>
                                            </td>
                                        </tr>
        
                                    </tbody>
                                </table>
                                <p style="padding-bottom:20px ;">Email verification</p <table border="0" cellpadding="0"
                                    cellspacing="0" width="100%" style="max-width:500px"
                                    class="m_-9170412488597135291responsive-table">
                    <tbody>
                        <tr>
                            <td>
        
                                <table border="0" cellpadding="0" cellspacing="0" width="100%"
                                    style="max-width:500px;border-bottom:1px dotted #aaa" class="m_-9170412488597135291wrapper">
                                    <tbody>
        
                                    </tbody>
                                </table>
        
        
        
        
                                <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:500px"
                                    class="m_-9170412488597135291responsive-table">
                                    <tbody>
                                        <tr>
                                            <td>
        
        
                                                <table >                                            
                                                    <h4 style="position:relative; margin-top: 5%; font-family:Helvetica,Arial,sans-serif;">
                                                        Hi ' . $params['name'] . ',
                                                    </h4>
                                                    <tbody>
                                                        <tr>
                                                        
                                                         <td style="font-family:Helvetica,Arial,sans-serif; ">
                                                          <div style="font-family: Roboto;
                                                            font-style: normal;
                                                            font-weight: 300;
                                                            font-size: 14px;
                                                            line-height: 17px;                                                    
                                                            margin-bottom: 5px;                                                    
                                                            letter-spacing: 0.02em;
                                                            color: #1f1f1f">
                                                            
                                                                    <p>
                                                                        Thanks for registering for an account with iPay. Before
                                                                        we get
                                                                        started, we just need to confirm that this is you. Click
                                                                        below to
                                                                        verify your email address:
                                                                    </p>
                                                                </div>
        
                                                    
                                                        <div style="width: 100%; text-align: center; " > 
                                                          <button style="background-color: #124AA1;
                                                              cursor: pointer;
                                                              border: none;
                                                              width: 100px;
                                                              height: 40px;
                                                              border-radius: 4px;
                                                              color: white;
                                                              padding: 10px;
                                                              text-align: center;
                                                              text-decoration: none;
                                                              
                                                              display: inline-block;"><a style="text-decoration: none; color: white;" href="' . env('APP_BASE_URL') . "/auth/verifyEmail?country=" . $params['country'] . "&vc=" . $params['verificationCode'] . '">Verify Email</a>
                                                          </button>
                                                              
                                                            </div>
        
                                                           
        
        
        
                                                            </td>
        
                                                        </tr>
                                                        <tr>
        
                                                            <td 
                                                               
                                                                style="padding:10px 0 0px 0;font-size:14px;line-height:25px;font-family:Helvetica,Arial,sans-serif;color:#666666;"
                                                                class="m_-9170412488597135291padding-copy">
        
        
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td >
                                                                <div>
                                                                    <p style="margin-top: 0px;
                                                                line-height: 2px;
                                                                font-family: Roboto">Best Regards</p>
        
                                                                    <p style="margin-top: 0px;
                                                                    line-height: 2px;
                                                                    font-family: Roboto">iPay Team</p>
        
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
        
                                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                    <tbody>
        
                                                        <tr>
        
                                                            <th style="padding:10px 0 0px 0;text-align:center;font-size:14px;line-height:25px;font-family:Helvetica,Arial,sans-serif;color:#666666"
                                                                class="m_-9170412488597135291padding-copy">
        
                                                            </th>
                                                            <th style="padding:10px 0 0px 0;text-align:center;font-size:14px;line-height:25px;font-family:Helvetica,Arial,sans-serif;color:#666666"
                                                                class="m_-9170412488597135291padding-copy">
        
                                                            </th>
                                                        </tr>
                                                        <tr>
        
                                                            <th style="padding:0px 0 0px 0px;text-align:center;font-size:14px;line-height:25px;font-family:Helvetica,Arial,sans-serif;color:#666666"
                                                                class="m_-9170412488597135291padding-copy">
        
                                                            </th>
                                                            <th style="padding:0px 0 0px 0px;text-align:center;font-size:14px;line-height:25px;font-family:Helvetica,Arial,sans-serif;color:#666666"
                                                                class="m_-9170412488597135291padding-copy">
        
                                                            </th>
                                                        </tr>
        
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="border-top:1px dotted #aaa; text-align:center;" >
        
                                                <table cellspacing="0" cellpadding="0"  width="100%" margin-top: 20px;>
                                 
                                                        <p style="padding-top: 10;" >
                                                            Sent from
                                                            <a style="text-decoration: none" href="https://www.ipayafrica.com/">
                                                                iPayafrica.com</a>
                                                        </p>
                                                        <p>
                                                            Need help? Contact our support team on +2547344222 or + 254
                                                            79144 1111
                                                        </p>
                                                    
        
                                                    <tbody>
                                                        <tr>
                                                            <td valign="top" style="padding:0"
                                                                class="m_-9170412488597135291mobile-wrapper">
        
                                                                <br>
        
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
        
                                    </tbody>
                                </table>
        
                            </td>
                        </tr>
                    </tbody>
                </table>
        
        
                </td>
                </tr>
        
                </tbody>
                </table>
        
            </div>
            <table width="100%"  cellspacing="0" cellpadding="0"
                style="max-width:500px;margin: 0 auto;max-width: 500px;" class="m_-9170412488597135291responsive-table">
                <tbody>
                    <tr>
                        <td 
                            style="font-size:12px;line-height:18px;font-family:Helvetica,Arial,sans-serif;color:#666666; background-color: #eee;padding-top: 30px;padding-bottom: 30px;  text-align:center;">
                            <p style="
                    font-size: 13px;
                    font-family: Roboto;">
                                iPay, FCB Mihrab 15th Floor, Lenana Road, Nairobi, Kenya.
                                
                            </p>
                        </td>
                    </tr>
                </tbody>
            </table>
        </body>

</html>
';

}