<?php
Bentuk Markup HTML:
<!-- Required Form Wrapper -->
<div class="sf-wrapper">

    <!-- Form -->
    <form id="contact-form" class="simple-form" action="simple-forms/sendmail.php" method="post">

        <!-- Form Header -->
        <div class="form-heading">
            <h4>Contact US</h4>
            <p>
                We are here to help.
            </p>
        </div>
        <!-- Form Header -->

        <div class="grid">
            <div class="grid-col-md-6">
                <label>
                    <input type="text" name="name" value="" class="validate-name" min="2" placeholder="Name*" required>
                </label>
            </div>
            <div class="grid-col-md-6">
                <label>
                    <input type="text" name="phone" class="validate-phone" placeholder="Phone*" required>
                </label>
            </div>
        </div>

        <label>
            <input type="text" name="email" class="validate-email" value="" placeholder="E-mail address*">
        </label>

        <label>
            <input type="text" name="url" class="validate-email" value="" placeholder="Social Profile">
        </label>

        <label>
            <input type="date" name="date" class="validate-email" value="" placeholder="Pick a date">
        </label>

        <label>
            <select name="subject" title="demo" required>
                <option value="">Choose subject</option>
                <option value="Support">Support</option>
                <option value="Offer">Special offer</option>
                <option value="Offer">Other</option>
            </select>
        </label>

        <label>
            <textarea name="message" placeholder="Write your message here ..." required></textarea>
        </label>

        <!-- Drag & Drop Files Uploading -->
        <div class="simple-files">
            <label class="simple-file-label">
                <input type="file" name="files[]" multiple>
                <span class="simple-files-trigger"><strong>Select</strong> or drop files here.</span>
            </label>
        </div>

        <div class="form-submit text-center">
            <button type="submit">Send now</button>
        </div>

        <!-- Consent Checkbox -->
        <div class="consent">
            <label class="custom-checkbox-label">
                <input type="checkbox" class="simple-consent-checkbox" name="consent" value="agree" required="" checked>
                <span class="custom-checkbox-button"></span>

                By clicking the “Send now” button you agree to our <a href="#">Terms and Conditions</a>.
            </label>
        </div>

        <!-- Error & Info messages will show here -->
        <div class="server-response"></div>
    </form>
</div>
<script>
    var simple_forms = new SimpleForms("#contact-form", {
    lang: "en",         // language for error/info strings
    theme: "white",     // form color theme, options: white | dark | purple | red | green | blue | faded-light | faded-dark
    style: "underline", // form fields style, options: none | underline | classic | classic-rounded | modern | modern-rounded
    files: {
        enabled: true,
        extensions: "gif jpg jpeg png pdf doc docx",
        min: 0,
        max: 10,
        maxFileSize: 24,                                                // Max allowed file size in MB, recommended size: 24
        filesUploadHandler: "simple-forms/files-upload-handler.php", // path to files upload handler, default: simple-forms/files-upload-handler.php
    },
});
</script>

 
<script>
    var simple_forms = new SimpleForms("#", {
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
I love Simple Forms!
Kirim Sekarang
Formulir tidak valid! Silakan periksa kesalahan ...
konfigurasi formCSS
var custom_css_demo_form = new SimpleForms("#custom_css_demo_form", {
    theme: "white",
    style: "modern-rounded",
    formCSS: "border: 2px solid red; box-shadow: none",
});
 
<!-- Simple Forms Styles -->
<link rel="stylesheet" href="simple-forms/css/simple-forms.css">
PENTING: Mohon untuk tidak mengedit/mengubahbentuk-sederhana.cssfile, gunakan file css khusus sebagai gantinya.

Sertakan JS
Tambahkan file simple-forms-translations.js dan simple-forms.min.js yang diperlukan ke halaman Anda sebelum menutup tag </body> , lihat contoh di bawah.

<!-- Simple Forms Scripts -->
<script src="simple-forms/js/simple-forms-translations.js"></script>
<script src="simple-forms/js/simple-forms.min.js"></script>
Buat Formulir
Mari kita buat formulir berfitur lengkap.

Salin & tempel markup html formulir ke halaman Anda untuk memulai.
Jika Anda mendapatkan kesalahan, silakan periksa jalur aset yang terhubung atau buka konsol browser (Kunci F12) untuk deskripsi kesalahan.

Konfigurasi Formulir Dasar
Untuk memulai dengan Formulir Sederhana , konfigurasi minimum diperlukan.
Lihat di bawah contoh konfigurasi formulir dasar.

Contoh konfigurasi dasar
Tempel kode di bawah ini ke halaman web Anda untuk mengonfigurasi formulir Anda.
Silakan ikuti komentar untuk opsi yang tersedia.


Deskripsi Parameter Bentuk Sederhana
Parameter di atas dijelaskan pada tabel di bawah ini. Semua yang perlu Anda lakukan dengan formulir Anda mungkin dijelaskan di sini.

Nama	Jenis	Bawaan	Keterangan
tindakan	rangkaian	simple-forms/sendmail.php	Setel atribut tindakan formulir<form action="...">
lang	rangkaian	en	Setel bahasa untuk string kesalahan/info
tema	rangkaian	putih	Atur tema warna formulir, opsi:putih | gelap | ungu | merah | hijau | biru | cahaya pudar | pudar-gelap
gaya	rangkaian	menggarisbawahi	Setel gaya bidang formulir, opsi:garis bawahi | klasik | bulat klasik | modern | bulat modern | tidak ada | kebiasaan
customSuccessMessage	rangkaian	string kosong	Saya berikan akan menimpa respons server dengan pesan khusus
formulirCSS	rangkaian	string kosong	Tambahkan gaya css ke formulir, contoh: box-shadow: none;
ajaxKirim	boolean	BENAR	Kirim formulir menggunakan AJAX (tanpa memuat ulang halaman)
mengesahkan	boolean	BENAR	Aktifkan validasi bidang formulir
validasiOnKeyup	boolean	BENAR	Validasi bidang formulir Pada Acara KeyUp
browserValidasi	boolean	Salah	Gunakan validasi browser
keterangan alat	boolean	BENAR	Tampilkan kesalahan validasi sebagai tooltips, jika salah akan menampilkan kesalahan sebagai string di bawah bidang
tampilkan kesalahan	boolean	BENAR	Tampilkan kesalahan validasi
tanggapanOverlay	boolean	Salah	tampilkan kesalahan dalam hamparan dengan ikon status tambahan
focusErrorFields	boolean	BENAR	fokuskan bidang kesalahan pada pengiriman formulir
debug	boolean	BENAR	Aktifkan mode debugging (akan menampilkan kesalahan di konsol browser)
sembunyikanFormAfterSubmit	boolean	Salah	Sembunyikan formulir setelah dikirim
izin	boolean	Salah	Aktifkan tombol kirim setelah kotak centang persetujuan dicentang
file	obyek	BENAR	Aktifkan pengunggahan file
var simple_forms = new SimpleForms("#contact-form", {
    files: {
        enabled: true,                                               // enable files uploading
        extensions: "jpg jpeg svg png",                              // allowed extensions
        min: 0,                                                      // min required files count
        max: 10,                                                     // max allowed files count
        maxFileSize: 24,                                             // max file item size in MB
        filesUploadHandler: "simple-forms/files-upload-handler.php", // files upload handler, default: simple-forms/files-upload-handler.php
    },
});
mengalihkan	obyek	Salah	Aktifkan pengalihan setelah formulir dikirimkan
var simple_forms = new SimpleForms("#contact-form", {
    redirect: {
        enabled: true,       // enable redirect after form submit
        url: "success.html", // url to redirect to
        timeout: 3           // redirect timeout (seconds), leave 0 for instant redirect
    },
});
captcha	obyek	Salah	Aktifkan captcha
var simple_forms = new SimpleForms("#contact-form", {
    captcha: {
        enabled: true,          // enable captcha
        type: "recaptcha-v2",   // set captcha type, options: math | recaptcha-v2
        siteKey: "SITE_KEY",    // recaptcha SITE KEY, generate here: https://www.google.com/recaptcha/admin/create
        theme: "light"          // recaptcha theme color, options: light | dark
    },
});
aksesibilitas	obyek	Salah	Setel opsi aksesibilitas
var simple_forms = new SimpleForms("#contact-form", {
    accessibility: {
        escapeReset: true,  // press ESC key to reset/clear all form fields and files
        tabHighlight: true  // press tab to highlight form fields
    },
});
validator	obyek	obyek	Tambahkan aturan validasi khusus
var simple_forms = new SimpleForms("#contact-form", {
    validator: {
        rules: {                   // add custom validation rules
            ".validate-name": {    // select form field with class .validate-name
                required: true,    // add required attribute to form field
                min: 2,            // set field min attribute
                max: 30,           // set field max attribute
                name: true         // attach NAME validation
            },
            ".validate-phone": {
                required: true,
                min: 8,
                max: 14,
                phone: true       // attach PHONE validation
            },
            ".validate-email": {
                required: true,
                min: 8,
                email: true       // attach EMAIL validation
            },
            ".validate-url": {
                required: true,
                min: 5,
                url: true         // attach URL validation
            },
            ".validate-date": {
                required: true,
                min: 6,
                date: true        // attach DATE validation
            },
        }
    },
});

Contoh Bentuk Sederhana
Contoh bagus tentang apa yang dapat Anda buat dengan Formulir Sederhana

Lihat contoh langsung!

formulir kontak
Perkuat situs web Anda dengan formulir kontak yang sederhana dan ramah pengguna. Mengotomatiskan alur kerja dan menghemat waktu.

Hubungi kami
Kami di sini untuk membantu!

Kssksksk
08218118888
sjsjdjwdidid@gmail.com
sksmsksksk@ail.com
3
Hubungi kami
Bentuk Modal
Buat formulir modal dengan mudah.

Buka formulir modal

Formulir Permintaan Panggilan
Buat formulir permintaan panggilan untuk berhubungan dengan pelanggan Anda.


Permintaan Panggilan
Kami akan menghubungi Anda kembali sesuai keinginan Anda!

4 + 5 = ?
Panggil aku
Formulir pendaftaran
Buat formulir pendaftaran untuk situs web Anda untuk memberikan solusi keanggotaan bagi klien Anda.

Daftar
Buat sebuah akun

2 + 5 = ?
Daftar
Formulir pemesanan
Buat formulir pemesanan untuk situs web Anda dan mulailah menerima kiriman.

Pemesanan
Daftarkan pemesanan Anda.

1 + 2 = ?
Daftar
Formulir Survei
Kumpulkan data akurat dari pelanggan Anda dengan membuat formulir survei.


Survei
Harap luangkan waktu sebentar untuk mengisi
formulir ini.

5 + 4 = ?
Kirim
Formulir CSS Kustom
Dengan opsi formCSS Anda dapat menambahkan gaya sebaris ke formulir Anda.
Lihat contoh di bawah.

Berikut adalah bagaimana Anda dapat menambahkan gaya ke formulir dengan cepat dan mudah.
Misalnya, mari tambahkan batas merah 2px khusus dan hapus bayangan formulir menggunakan opsi formCSS .

CSS khusus
Tambahkan gaya khusus


Validasi ujung depan
Perkuat formulir Anda dengan aturan validasi yang kuat.
Lihat contoh di bawah.

Validasi diperlukan untuk memastikan bahwa pengguna memasukkan data yang valid. Formulir Sederhana sangat fleksibel dalam hal validasi bidang.

Anda dapat memilih untuk:
aktifkan/nonaktifkan validasi bidang
memvalidasi bidang formulir pada Acara Keyup
aktifkan/nonaktifkan browser bawaan validasi bidang
tampilkan/sembunyikan kesalahan validasi
tampilkan kesalahan sebagai tooltips atau string
fokuskan bidang kesalahan pada pengiriman formulir
tampilkan respons server/status validasi dalam overlay (tutup formulir)
terapkan aturan validasi khusus
Validasi
Validasi ujung depan.

Asksksks
0921876772828
sjsjdjwdidid@gmail.com
https://weblucas.info/projects/simple-forms/index.html#contact-form-example
Saturday
I love Simple Forms!
Kirim Sekarang
Formulir tidak valid! Silakan periksa kesalahan ...
var frontend_validation_demo_form = new SimpleForms("#frontend_validation_demo_form", {
    theme: "white",
    style: "modern-rounded",
    validate: true,
    validateOnKeyup: true,
    browserValidation: false,
    showErrors: true,
    tooltips: true,
    responseOverlay: false,
    focusErrorFields: true,
    validator: {
        rules: {
            ".validate-name": {
                required: true,
                min: 2,
                max: 30,
                name: true
            },
            ".validate-phone": {
                required: true,
                min: 8,
                max: 14,
                phone: true
            },
            ".validate-email": {
                required: true,
                min: 8,
                email: true
            },
            ".validate-url": {
                required: true,
                min: 5,
                url: true
            },
            ".validate-date": {
                required: true,
                min: 6,
                date: true
            }
        }
    }
});
Validasi Back-end
Formulir Sederhana juga memiliki validasi back-end untuk memastikan bahwa pengguna memberikan informasi yang valid.
Lihat contoh di bawah.

Coba masukkan data yang tidak valid ke dalam formulir dan periksa hasilnya.
Semua bidang formulir kecuali captcha akan divalidasi oleh server.

Validasi
Validasi ujung belakang.

I love Simple Forms!
1 + 5 = ?
Kirim Sekarang
var backend_validation_demo_form = new SimpleForms("#backend_validation_demo_form", {
    theme: "white",
    style: "modern-rounded",
    captcha: {
        enabled: true,
        type: "math"
    },
    validate: false, // validation will be handled by the server
});
Aktifkan Debug
Formulir Sederhana bersifat deskriptif ketika Anda mendapatkan beberapa kesalahan. Aktifkan debugging untuk mendapatkan deskripsi kesalahan di konsol browser Anda.

Saat mengisi bidang formulir mungkin ada beberapa kesalahan dan Anda akan mendapatkan deskripsi yang dapat dibaca manusia di mana sebenarnya masalahnya.
Setel debug: true untuk mendapatkan deskripsi dan rekomendasi kesalahan di konsol browser Anda.

Periksa konsol browser Anda saat menguji formulir demo di bawah. Coba (F12 Key) untuk membuka konsol browser.

Debug
Aktifkan mode debug.

I love Simple Forms!
Kirim Sekarang
var debug_demo_form = new SimpleForms("#debug_demo_form", {
    debug: true, // will show errors and warnings in browser console if any
    theme: "white",
    style: "underline",
    validate: true,
    files: {
        enabled: true,
        extensions: "gif jpg jpeg png",
        min: 1,
        max: 5,
        maxFileSize: 1, // MB
        filesUploadHandler: "simple-forms/files-upload-handler.php",
    },
    validator: {
        rules: {
            ".validate-name": {
                required: true,
                min: 2,
                max: 30,
                name: true
            },
            ".validate-phone": {
                required: true,
                min: 8,
                max: 14,
                phone: true
            },
            ".validate-email": {
                required: true,
                min: 8,
                email: true
            },
            ".validate-url": {
                required: true,
                min: 5,
                url: true
            },
            ".validate-date": {
                required: true,
                min: 6,
                date: true
            }
        }
    },
});
Terjemahan
Formulir Sederhana menyediakan cara mudah untuk menerjemahkan kesalahan/string info untuk bahasa Anda.
Lihat contoh di bawah.

Terjemahan front-end disimpan dalam file simple-forms/js/simple-forms-translations.js .
Di sana Anda dapat menambahkan string terjemahan untuk bahasa Anda, tetapi pertama-tama Anda perlu mengatur bahasa Anda .

Formulir Sederhana menyediakan dua cara utama untuk mengatur bahasa Anda

Menggunakan pengaturan (dalam javascript dengan opsi lang , lihat bagian konfigurasi lanjutan untuk info lebih lanjut).
Menggunakan parameter GET lang=en (contoh: mydomain.com?lang=en ).
Parameter GET akan menimpa opsi lang dalam javascript.
CATATAN: Setelah mengatur bahasa yang Anda inginkan, formulir akan menampilkan pesan kesalahan/info dalam bahasa masing-masing jika terjemahan disediakan dalam file simple-forms-translations.js .

PENTING! Harap jangan menghapus baris terjemahan yang ada untuk menghindari kesalahan kritis.

Pratinjau Terjemahan Front-end
var translations = {
    en:{
        invalidForm:             "Invalid form! Please check for errors...",
        unknownServerError:      "Unknown Server Error... Please try again" ,
        badRequest:              "Bad request.. Form submission failed. Please try again",
        submissionFailed:        "Form submission failed. Please try again",
        minRequiredFiles:        "Min required files: ",
        maxAllowedFiles:         "Max allowed files: ",
        fileAlreadyExist:        "already exist.",
        filesNotAllowed:         "files not allowed!",
        maxAllowedFileSize:      "Max allowed file size: ",
        uploadFailed:            "Upload failed... Please try again. ",
        requiredField:           "This field is required",
        invalidNameField:        "Invalid name",
        invalidPhoneField:       "Invalid phone",
        invalidEmailField:       "Invalid email",
        invalidUrlField:         "Invalid link",
        invalidDateField:        "Invalid date format",
        maxAllowedCharacters:    "Max allowed characters: ",
        minRequiredCharacters:   "Min required characters: ",
        chooseOption:            "Please choose an option ",
        textareaRequiredMessage: "Drop us a line... ",
    },
    ro:{
        invalidForm:             "Forma nevalida! Te rog verifica campurile",
        unknownServerError:      "Eroare necunoscuta. Te rog incearca din nou ..." ,
        badRequest:              "Cerere gresita. Trimiterea formularului a esuat. Te rog incearca din nou ...",
        submissionFailed:        "Trimiterea formularului a esuat. Te rog incearca din nou ...",
        minRequiredFiles:        "Fisiere minim obligatorii: ",
        maxAllowedFiles:         "Max allowed files: ",
        fileAlreadyExist:        "deja exista.",
        filesNotAllowed:         "fisiere nu sunt acceptate!",
        maxAllowedFileSize:      "Maxim fisiere permise: ",
        uploadFailed:            "Incarcarea a esuat. Te rog incearca din nou ...",
        requiredField:           "Camp obligatoriu",
        invalidNameField:        "Nume nevalid",
        invalidPhoneField:       "Telefoon nevalid",
        invalidEmailField:       "Email nevalid",
        invalidUrlField:         "Link nevalid ",
        invalidDateField:        "Data gresita",
        maxAllowedCharacters:    "Maxim caractere permise: ",
        minRequiredCharacters:   "Caractere minim obligatorii: ",
        chooseOption:            "Alege o optiune ",
        textareaRequiredMessage: "Lasa un mesaj... ",
    },

    // add here your translations
};
Terjemahan back-end disimpan dalam file /simple-forms/translations.php .

Pratinjau Terjemahan Back-end
$info_strings = [];

// English   --\/--
$info_strings['en'] = [
    'message_success'   => ' Thanks for submitting the form.',
    'email_send_error'  => ' Mail failed... Please try again. ',
    'required'          => ' - field is required. ',
    'phone_error'       => ' Please enter a valid phone number. ',
    'email_error'       => ' Please enter a valid e-mail address. ',
    'name_error'        => ' Please enter a valid name (letters and whitespace only). ',
    'date_error'        => ' Please enter valid date. ',
    'url_error'         => ' Please provide a valid url. ',
];

// Romana    --\/--
$info_strings['ro'] = [
    'message_success'   => ' Multumim! Formularul a fost trimis.',
    'email_send_error'  => ' Eroare trimitere email. Incearca din nou. ',
    'required'          => ' - este camp obligatoriu. ',
    'phone_error'       => ' Numar de telefon nevalid! ',
    'email_error'       => ' Adresa de email nevalida! ',
    'name_error'        => ' Nume nevalid (doar litere si spatii). ',
    'date_error'        => ' Data nenvalida! ',
    'url_error'         => ' URL nevalid. ',
];

// add here your translations (copy the array example above)
Seret & Jatuhkan Pengunggahan File
Formulir Sederhana memungkinkan pengguna Anda untuk Seret & Jatuhkan file untuk pengunggahan dan validasi cepat.
Hanya file yang diizinkan yang akan diunggah dan dikirim.

Berikut adalah contoh pengaturan Pengunggahan file Drag & Drop . Hanya file yang valid menurut ekstensi dan ukuran yang akan diterima.

Jatuhkan File
Seret & Jatuhkan beberapa file.

Ekeke
082
sjsjdjwdidid@gmail.com
I love Simple Forms!
Kirim Sekarang
var files_uploading_demo_form = new SimpleForms("#files_uploading_demo_form", {
    theme: "white",
    style: "modern-rounded",
    validate: true,
    files: {
        enabled: true,                                               // enable files uploading for this form
        extensions: "gif jpg jpeg png svg",                          // allowed extensions
        min: 1,                                                      // min required files
        max: 10,                                                     // max allowed files
        maxFileSize: 2,                                              // max allowed file size in MB
        filesUploadHandler: "simple-forms/files-upload-handler.php", // backend files uploading handler
    },
});
 
 
 
 
 
 
 
 
captcha
Formulir Sederhana peduli dengan kotak masuk Anda dan kini memiliki opsi anti-spam baru yang kuat,
captcha Matematika , dan Google reCaptcha v2 .

Pilih antara Mathematical captcha dan Google reCaptcha v2 untuk memastikan Anda tidak mendapatkan SPAM .

CATATAN: Jangan bagikan kunci rahasia Google reCAPTCHA Anda!

PENTING Harap pertimbangkan untuk mengonfigurasi Google reCaptcha v2 di domain Anda (bukan di server lokal/pengujian) untuk menghindari kesalahan tak terduga dan konflik skrip.

Matematika Captcha
Kami juga membenci SPAM...

I love Simple Forms!
1 + 5 = ?
Kirim Sekarang
captcha matematika
var captcha_demo_form = new SimpleForms("#captcha_demo_form", {
    theme: "white",
    style: "modern-rounded",
    validate: true,
    captcha: {
        enabled: true,
        type: "math", // mathematical captcha
    },
});
 
 
 
 
reCaptcha V2
Kami juga membenci SPAM...

I love Simple Forms!

Kirim Sekarang
Google reCaptcha v2
var recaptcha_v2_demo_form = new SimpleForms("#recaptcha_v2_demo_form", {
    theme: "white",
    style: "modern-rounded",
    validate: true,
    captcha: {
        enabled: true,
        type: "recaptcha-v2", // Google reCaptcha v2
        siteKey: "SITE_KEY",  // replace SITE_KEY with your site key, generate here: https://www.google.com/recaptcha/admin/create
        theme: "light"
    },
});
 
 
 
 
 
 
Izin
Tambahkan kotak centang persetujuan ke formulir Anda untuk meminta pengguna menyetujui Persyaratan dan Ketentuan .

Jika pengguna Anda harus menyetujui syarat & ketentuan situs untuk mengirimkan formulir, Anda dapat menyiapkan kotak centang persetujuan dalam 2 langkah:

1. Tambahkan kotak centang persetujuan ke formulir Anda, salin kode di bawah ini:
Anda dapat menyesuaikan teks dan menambahkan tautan khusus ke halaman Syarat dan Ketentuan .

PENTING: Harap jangan mengubah kelas css pada contoh di bawah ini.

<div class="consent">
    <label class="custom-checkbox-label">
        <input type="checkbox" class="simple-consent-checkbox" name="consent" value="agree" required="" checked="" title="">
        <span class="custom-checkbox-button"></span>

        By clicking the “Send now” button you agree to our <a href="#">Terms and Conditions</a>.
    </label>
</div>
2. Atur opsi persetujuan
Setel persetujuan: benar untuk mengaktifkan pemeriksaan persetujuan. Sekarang pengguna harus setuju sebelum mengirimkan formulir.

Izin
Setuju sebelum mengirimkan.

I love Simple Forms!
Kirim Sekarang
Pengaturan persetujuan
var consent_demo_form = new SimpleForms("#consent_demo_form", {
    theme: "white",
    style: "modern-rounded",
    validate: true,
    consent: true,
});
 
Arahkan ulang
Arahkan ulang pengguna setelah mengirimkan formulir menggunakan opsi pengalihan . Lihat contoh di bawah.

Arahkan ulang pengguna setelah mengirimkan formulir ke halaman sukses khusus .
Anda dapat mengatur halaman target sukses dan mengarahkan waktu habis.

Arahkan ulang
Arahkan ulang ke halaman sukses.

Lslsks
09229292
sjsjdjwdidid@gmail.com
I love Simple Forms!
Konfigurasi pengalihan
var redirect_demo_form = new SimpleForms("#redirect_demo_form", {
    theme: "white",
    style: "modern-rounded",
    validate: true,
    redirect: {
        enabled: true,       // enable the redirect
        url: "success.html", // set page url
        timeout: 2           // redirect after 2 seconds (0 for instant redirect)
    },
});
 
 
 
 
 
Aksesibilitas
Formulir Sederhana ramah pengguna! Untuk pengalaman yang lebih baik, aktifkan fitur aksesibilitas tambahan seperti ESCAPE Reset dan TAB Highlight .

Saat mengisi formulir Tekan ESC untuk mengatur ulang formulir atau Tekan TAB untuk menyorot bidang formulir.

Aksesibilitas
Formulir Sederhana ramah pengguna!

I love Simple Forms!
Kirim Sekarang
Konfigurasi aksesibilitas
var accessibility_demo_form = new SimpleForms("#accessibility_demo_form", {
    theme: "white",
    style: "modern-rounded",
    validate: true,
    accessibility: {
        escapeReset: true, // pres ESC to reset the form
        tabHighlight: true // press TAB to highlight form fields
    },
});
 
 
 
 
Kirim Ajax
Formulir Sederhana masih dapat dikirimkan tanpa ajax (dengan pemuatan ulang halaman). Lihat di bawah cara menonaktifkan ajax dan validasi.

Formulir di bawah ini akan memuat ulang halaman setelah pengiriman.
Ini adalah metode lama dan tidak direkomendasikan, sampai Anda membutuhkan formulir untuk bekerja dengan cara ini.

Tidak ada Ajax
Pengiriman formulir reguler.

I love Simple Forms!
Kirim Sekarang
Invalid form! Please check for errors...
Nonaktifkan Kirim Ajax
var ajax_submit_demo_form = new SimpleForms("#ajax_submit_demo_form", {
    theme: "white",
    style: "modern-rounded",
    validate: false,   // disable form validation
    ajaxSubmit: false, // disable ajx submit
});
 
 
Sembunyikan Formulir Setelah Dikirim
Formulir Sederhana dapat dihapus setelah pengiriman dan diganti dengan pesan sukses khusus. Lihat contoh di bawah.

Formulir di bawah ini dihapus dan diganti dengan pesan sukses khusus setelah pengiriman.

Sembunyikan saya
Sembunyikan formulir setelah pengiriman.

I love Simple Forms!
Sembunyikan saya
Invalid form! Please check for errors...
Sembunyikan formulir
var hide_after_submit_demo_form = new SimpleForms("#hide_after_submit_demo_form", {
    theme: "white",
    style: "modern-rounded",
    hideFormAfterSubmit: true,
    customSuccessMessage: "[Custom Message] - Thanks for submitting the form.",
});
 
 
Catatan akhir:
Terima kasih atas minat Anda menggunakan Formulir Sederhana .
Jika Anda menyukai produk ini, silakantinggalkan ulasan atau merekomendasikannya ke teman Anda! produk hebat untuk dibagikan!

Jika Anda memiliki saran atau menemukan bugtolong beritahu saya. Terima kasih sebelumnya.

Salam. Lukas

<script>
    var simple_forms = new SimpleForms("#contact-form", {
    lang: "en",         // language for error/info strings
    theme: "white",     // form color theme, options: white | dark | purple | red | green | blue | faded-light | faded-dark
    style: "underline", // form fields style, options: none | underline | classic | classic-rounded | modern | modern-rounded
    files: {
        enabled: true,
        extensions: "gif jpg jpeg png pdf doc docx",
        min: 0,
        max: 10,
        maxFileSize: 24,                                                // Max allowed file size in MB, recommended size: 24
        filesUploadHandler: "simple-forms/files-upload-handler.php", // path to files upload handler, default: simple-forms/files-upload-handler.php
    },
});
</script>

var redirect_demo_form = new SimpleForms("#redirect_demo_form", {
    theme: "white",
    style: "modern-rounded",
    validate: true,
    redirect: {
        enabled: true,       // enable the redirect
        url: "success.html", // set page url
        timeout: 2           // redirect after 2 seconds (0 for instant redirect)
    },
});
 
 
 
 
 

var redirect_demo_form = new SimpleForms("#redirect_demo_form", {
    theme: "white",
    style: "modern-rounded",
    validate: true,
    redirect: {
        enabled: true,       // enable the redirect
        url: "success.html", // set page url
        timeout: 2           // redirect after 2 seconds (0 for instant redirect)
    },
});
 
 
 
 
 

