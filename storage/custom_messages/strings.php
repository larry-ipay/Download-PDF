<?php

const IPAY_DOMAIN = "@ipayafrica.com";

const PAYINS = "_inbox";
const PAYOUTS = "_bulk_inbox";

const EMAILS = [
    "support" => "support" . IPAY_DOMAIN,
    "info" => "info" . IPAY_DOMAIN,
    "sales" => "sales" . IPAY_DOMAIN,
    "debug" => "dennis" . IPAY_DOMAIN 
];

const EMAIL_TYPES = [
    "otp" => [
        "slug" => "otpEmail",
        "subject" => "One Time Password (OTP)"
    ],
    "emailVerify" => [
        "slug" => "emailVerification",
        "subject" => "Email Verification"
    ],
    "accountCreated" => [
        "slug" => "accountCreated",
        "subject" => "Account Created"
    ],
    "welcome" => [
        "slug" => "welcomeEmail",
        "subject" => "Welcome Email"
    ],
    "resetPassword" => [
        "slug" => "resetPassword",
        "subject" => "Reset Password"
    ],
    "other" => [
        "slug" => "other",
        "subject" => "Urgent! Approval Required"
    ],
    "firstPassword" => [
        "slug" => "firstPassword",
        "subject" => "First Time Login Password"
    ],
    "passwordChanged" => [
        "slug" => "passwordChanged",
        "subject" => "Password Changed Successfully"
    ]
];

const INTENTS = [
    "email_verification" => "EMAIL",
    "otp_verification" => "OTP",
    "phone_verification" => "PHONE"
];

const STATUS = [
    "active" => "active",
    "inactive" => "inactive",
];

const GLOBAL_CURRENCIES = [
    ["key" => "USD", "value" => "USD"]
];

const SUPPORTED_LANGUAGES = [
    "english" => [
        "slug" => "en",
        "name" =>"English"
    ],
    "french" => [
        "slug" => "fr",
        "name" => "French"
    ],
    "arabic" => [
        "slug" => "ar",
        "name" => "Arabic"
    ],
    "spanish" => [
        "slug" => "es",
        "name" => "Espanol"
    ],
    "portuguese" => [
        "slug" => "pt",
        "name" => "Portuguese"
    ],
    "chinese" => [
        "slug" => "zh",
        "name" => "Chinese"
    ]
];

const UI_THEME = [
    'light' => 'light',
    'dark' => 'dark'
];

const MESSAGES = [
    'account_inactive' => 'Inactive account. Kindly contact support@ipayafrica.com',
    'account_not_found' => 'Invalid account. Kindly contact support@ipayafrica.com ',
    'account_locked'=> 'Account locked. Kindly contact support@ipayafrica.com',
    'approved_success' => 'Approved successfully',
    'approver_not_found' => 'Approver Identifier is invalid',
    'account_updated' => 'Account Configuration Updated',
    'acc_not_found'=>'Bank account not found',
    'account_saved'=>'Account details stored',
    'account_configured'=>'Configuration settings stored',

    'billing_cat_not_found' => 'Billing Category not found',
    'billing_serv_not_found' => 'Billing service not found',
    'billing_service_exist' => 'Billing Service Exist',

    'category_id_mismatch' => 'Category Id doesn\'t match the country',
    'country_not_exist' => 'Country not found',
    'csv_file_err'=> "CSV file doesn't match expected data",
    'card_reset' => 'Card reset successfully',
    'commission_refund_completed' => 'Commission refunded successfully',
    'commission_refund_initiated' => 'Commission refund initiated',
    
    
    'data_saved' => 'Record saved successfully',
    'data_exported' => 'Data exported successfully',
    'document_not_found' => "Documents for company don't exist",
    'document_verified' => 'Document verified successfully!',
    'document_unverified'=> 'Document verification unsuccessfull',

    "email_not_verified" => "Email has not been verified",
    "email_already_verified" => "Email has been verified",
    "email_exist" => "Email already exists. Use a different email to register.",
    "email_not_found" => "Sorry, the email provided does not match our records",
    "email_verify_time_lapsed" => "Email verification period has elapsed. Kindly create a new account",
    "email_verify_success" => "Email verification successful",
    'expired_otp' => 'Entered OTP is expired',
    'expired_token' => 'Expired Token',
    'export_error'=> 'Provide valid file extension.',

    'first_time_login' => 'Kindly confirm your email',
    'file_error' => "Error Uploading file",
    'file_uploaded' => 'File Uploaded Successfully',
    'file_exported' => 'File exported successfully',
    'filter_error' => 'Filter requires more parameters',

    "invalid_email_verification" => "Invalid Verification Code.",
    'internal_server_error' => 'Internal Server Error. Kindly contact support@ipayafrica.com',
    'invalid_promo_code' => 'Invalid Promo Code',
    'invalid_otp' => 'Invalid OTP entered',
    "invalid_token" => "Unauthorized Access Forbidden",
    "invalid_username_password" => "Invalid username and / or Password",
    'intent_error'=>"Invalid operation",
    'integrity_constraints'=>'Integrity constraint violation',

    'merchant_data_saved' => 'Merchant record saved successfully',

    'not_csv_format' => "File format should be csv",

    'otp_sent' => 'OTP sent to Phone and/or Email',

    'password_expired' => 'Password expired. Kindly Reset password', 
    'parameters_empty' => "Request has some empty fields",
    'pdq_not_found'=>'PDQs not found',
    'pdq_saved'=>'PDQ record saved successfully',
    'pdq_updated'=>'PDQ record updated successfully', 

    'merchant_deleted' => 'Merchant deleted successfully',
    'record_not_found' => 'Record Not Found',
    'record_deleted' => 'Record Deleted Successfully',
    'record_exist' => 'Record already exists',
    'redirect_login' => 'Resend Attempts exceeded.',
    'reset_password_link' => 'Reset link has been sent to your email',
    'refund_completed' => 'Refund completed',
    'reallocate_initiated'=> 'Transaction reallocation initiated',
    'refund_initiated'=> 'Transaction refund initiated',
    'refund_failed' => 'Transaction refund/resend cannot be initiated',
    'refund_resend' => 'Transaction resent',

    'session_expired' => 'Session has Expired',
    "similar_password_history" => "Your new password can not be same as any of your previous 3 passwords",
    'search_error'=>"Invalid search parameters",

    'transaction_updated' => "Transaction successfully updated",
    "transactions_updated" => "Transactions inserted successfully",
    'transaction_failed' => "Transaction failed to update",
    'topup_success' => 'Top-up successfull',
    'tariff_updated'=> 'Tarrif Updated Successfully',
    'table_not_found' => 'Vendor ID not found',

    'unauthorized_action' => 'Unauthorized Action Attempt!',
    'user_created' => 'User has been created successfully',
    'user_updated' => 'User details has been updated successfully',
    'user_deleted' => 'User has been deleted successfully',
    'user_restored' => 'User restored successfully',
    'upload_error' => "Error while uploading file",

    'password_changed' => 'Password changed successfully',

    'vendor_record_not_found' => 'Error while fetching merchant record. Does not exist'
];

const ROLES = [
    "administrator" => "admin",
    "normal_user" => "normal"
];

const NOTIFICATION_MSG = [
    'conf_refund' =>[
        'subject' => 'Initiate Online Refund',
        'message' => 'Online refund has been initiated. See information about the transaction',
        'type' => 'action',
        'purpose' => 'Refund'
    ],
    'conf_resend' =>[
        'subject' => 'Initiate Online Refund',
        'message' => 'Transaction resend has been initiated. See information about the transaction: ',
        'type' => 'action',
        'purpose' => 'Resend'
    ],
    'conf_promo' =>[
        'subject' => 'Confirm Promo Code for:',
        'message' => 'Promocode has been created. Kindly Confirm this Action. See link: ',
        'type' => 'action',
        'purpose' => 'Promo Code'
    ]
];
