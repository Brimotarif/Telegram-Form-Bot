 initialization of your form could look like this:

<script>
    var simple_forms = new SimpleForms("#contact-form", {
    action: "simple-forms/sendmail.php", // set form action attribute, default value: simple-forms/sendmail.php
    lang: "en",                          // language for error/info strings
    theme: "white",                      // form color theme, options: white | dark | purple | red | green | blue | faded-light | faded-dark
    style: "underline",                  // form fields style, options: none | underline | classic | classic-rounded | modern | modern-rounded
    ajaxSubmit: true,                    // send form using AJAX (no page reload)
    validate: true,                      // enable form fields validation
    validateOnKeyup: true,               // validate form fields On KeyUp Event
    browserValidation: false,            // use browser validation
    tooltips: true,                      // show validation errors as tooltips, if false will show errors as strings bellow the field
    showErrors: true,                    // show validation errors
    responseOverlay: false,              // show errors in overlay (cover the form)
    focusErrorFields: true,              // focus error fields on form submit
    debug: true,                         // enable debugging mode (will show errors in browser console)
    hideFormAfterSubmit: false,          // hide the form after submit
    customSuccessMessage: "",            // overwrite server response with a custom message
    formCSS: "",                         // add css styles to the form, example: box-shadow: none;
    files: {
        enabled: true,                                               // enable files uploading
        extensions: "jpg jpeg svg png",                              // allowed extensions
        min: 0,                                                      // min required files count
        max: 10,                                                     // max allowed files count
        maxFileSize: 24,                                             // max file item size in MB
        filesUploadHandler: "simple-forms/files-upload-handler.php", // files upload handler, default: simple-forms/files-upload-handler.php
    },
    redirect: {
        enabled: true,                   // enable redirect after form submit
        url: "success.html",             // url to redirect to
        timeout: 3                       // redirect timeout (seconds), leave 0 for instant redirect
    },
    captcha: {
        enabled: true,                   // enable captcha
        type: "math",                    // set captcha type, options: math | recaptcha-v2
        siteKey: "",                     // recaptcha V2 SITE KEY, generate here: https://www.google.com/recaptcha/admin/create
        theme: ""                        // recaptcha theme color, options: light | dark
    },
    accessibility: {
        escapeReset: true,               // press ESC key to reset/clear all form fields and files
        tabHighlight: true               // press tab to highlight form fields
    },
    consent: true,                       // enable submit button after consent checkbox is checked
    validator: {
        rules: {                        // add custom validation rules
            ".validate-name": {         // select form field with class .validate-name
                required: true,         // add required attribute to form field
                min: 2,                 // set field min attribute
                max: 30,                // set field max attribute
                name: true              // attach NAME validation
            },
            ".validate-phone": {
                required: true,
                min: 8,
                max: 14,
                phone: true              // attach PHONE validation
            },
            ".validate-email": {
                required: true,
                min: 8,
                email: true              // attach EMAIL validation
            },
            ".validate-url": {
                required: true,
                min: 5,
                url: true                // attach URL validation
            },
            ".validate-date": {
                required: true,
                min: 6,
                date: true               // attach DATE validation
            }
        }
    },
});
</script>
