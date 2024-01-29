<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    :root {
        --blue: #5e72e4;
        --indigo: #5603ad;
        --purple: #8965e0;
        --pink: #f3a4b5;
        --red: #f5365c;
        --orange: #fb6340;
        --yellow: #ffd600;
        --green: #2dce89;
        --teal: #11cdef;
        --cyan: #2bffc6;
        --white: #fff;
        --gray: #8898aa;
        --gray-dark: #32325d;
        --light: #ced4da;
        --lighter: #e9ecef;
        --primary: #5e72e4;
        --secondary: #f7fafc;
        --success: #2dce89;
        --info: #11cdef;
        --warning: #fb6340;
        --danger: #f5365c;
        --light: #adb5bd;
        --dark: #212529;
        --default: #172b4d;
        --white: #fff;
        --neutral: #fff;
        --darker: black;
        --breakpoint-xs: 0;
        --breakpoint-sm: 576px;
        --breakpoint-md: 768px;
        --breakpoint-lg: 992px;
        --breakpoint-xl: 1200px;
        --font-family-sans-serif: Open Sans, sans-serif;
        --font-family-monospace: SFMono-Regular, Menlo, Monaco, Consolas, 'Liberation Mono', 'Courier New', monospace;
    }

    *,
    *::before,
    *::after {
        box-sizing: border-box;
    }

    @-ms-viewport {
        width: device-width;
    }

    figcaption,
    footer,
    main,
    nav,
    section {
        display: block;
    }

    body {
        font-family: Open Sans, sans-serif;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        margin: 0;
        text-align: left;
        color: #525f7f;
        background-color: #f8f9fe;
    }

    [tabindex='-1']:focus {
        outline: 0 !important;
    }

    hr {
        overflow: visible;
        box-sizing: content-box;
        height: 0;
    }

    h2,
    h3,
    h6 {
        margin-top: 0;
        margin-bottom: .5rem;
    }

    p {
        margin-top: 0;
        margin-bottom: 1rem;
    }

    address {
        font-style: normal;
        line-height: inherit;
        margin-bottom: 1rem;
    }

    dfn {
        font-style: italic;
    }

    strong {
        font-weight: bolder;
    }

    a {
        text-decoration: none;
        color: #5e72e4;
        background-color: transparent;
        -webkit-text-decoration-skip: objects;
    }

    a:hover {
        text-decoration: none;
        color: #233dd2;
    }

    a:not([href]):not([tabindex]) {
        text-decoration: none;
        color: inherit;
    }

    a:not([href]):not([tabindex]):hover,
    a:not([href]):not([tabindex]):focus {
        text-decoration: none;
        color: inherit;
    }

    a:not([href]):not([tabindex]):focus {
        outline: 0;
    }

    code {
        font-family: SFMono-Regular, Menlo, Monaco, Consolas, 'Liberation Mono', 'Courier New', monospace;
        font-size: 1em;
    }

    caption {
        padding-top: 1rem;
        padding-bottom: 1rem;
        caption-side: bottom;
        text-align: left;
        color: #8898aa;
    }

    label {
        display: inline-block;
        margin-bottom: .5rem;
    }

    button {
        border-radius: 0;
    }

    button:focus {
        outline: 1px dotted;
        outline: 5px auto -webkit-focus-ring-color;
    }

    input,
    button,
    textarea {
        font-family: inherit;
        font-size: inherit;
        line-height: inherit;
        margin: 0;
    }

    button,
    input {
        overflow: visible;
    }

    button {
        text-transform: none;
    }

    button,
    [type='reset'],
    [type='submit'] {
        -webkit-appearance: button;
    }

    button::-moz-focus-inner,
    [type='button']::-moz-focus-inner,
    [type='reset']::-moz-focus-inner,
    [type='submit']::-moz-focus-inner {
        padding: 0;
        border-style: none;
    }

    input[type='radio'],
    input[type='checkbox'] {
        box-sizing: border-box;
        padding: 0;
    }

    input[type='date'],
    input[type='time'],
    input[type='datetime-local'],
    input[type='month'] {
        -webkit-appearance: listbox;
    }

    textarea {
        overflow: auto;
        resize: vertical;
    }

    legend {
        font-size: 1.5rem;
        line-height: inherit;
        display: block;
        width: 100%;
        max-width: 100%;
        margin-bottom: .5rem;
        padding: 0;
        white-space: normal;
        color: inherit;
    }

    [type='number']::-webkit-inner-spin-button,
    [type='number']::-webkit-outer-spin-button {
        height: auto;
    }

    [type='search'] {
        outline-offset: -2px;
        -webkit-appearance: none;
    }

    [type='search']::-webkit-search-cancel-button,
    [type='search']::-webkit-search-decoration {
        -webkit-appearance: none;
    }

    ::-webkit-file-upload-button {
        font: inherit;
        -webkit-appearance: button;
    }

    [hidden] {
        display: none !important;
    }

    h2,
    h3,
    h6,
    .h2,
    .h3,
    .h6 {
        font-family: inherit;
        font-weight: 600;
        line-height: 1.5;
        margin-bottom: .5rem;
        color: #32325d;
    }

    h2,
    .h2 {
        font-size: 1.25rem;
    }

    h3,
    .h3 {
        font-size: 1.0625rem;
    }

    h6,
    .h6 {
        font-size: .625rem;
    }

    hr {
        margin-top: 2rem;
        margin-bottom: 2rem;
        border: 0;
        border-top: 1px solid rgba(0, 0, 0, .1);
    }

    code {
        font-size: 87.5%;
        word-break: break-word;
        color: #f3a4b5;
    }

    a>code {
        color: inherit;
    }

    .container {
        width: 100%;
        margin-right: auto;
        margin-left: auto;
        padding-right: 15px;
        padding-left: 15px;
    }

    @media (min-width: 576px) {
        .container {
            max-width: 540px;
        }
    }

    @media (min-width: 768px) {
        .container {
            max-width: 720px;
        }
    }

    @media (min-width: 992px) {
        .container {
            max-width: 960px;
        }
    }

    @media (min-width: 1200px) {
        .container {
            max-width: 1140px;
        }
    }

    .row {
        display: flex;
        margin-right: -15px;
        margin-left: -15px;
        flex-wrap: wrap;
    }

    .col-4,
    .col-8,
    .col-md-12,
    .col-lg-4,
    .col-lg-6,
    .col-xl-6,
    .col-xl-8 {
        position: relative;
        width: 100%;
        min-height: 1px;
        padding-right: 15px;
        padding-left: 15px;
    }

    .col-4 {
        max-width: 33.33333%;
        flex: 0 0 33.33333%;
    }

    .col-8 {
        max-width: 66.66667%;
        flex: 0 0 66.66667%;
    }

    @media (min-width: 768px) {
        .col-md-12 {
            max-width: 100%;
            flex: 0 0 100%;
        }
    }

    @media (min-width: 992px) {
        .col-lg-4 {
            max-width: 33.33333%;
            flex: 0 0 33.33333%;
        }

        .col-lg-6 {
            max-width: 50%;
            flex: 0 0 50%;
        }
    }

    @media (min-width: 1200px) {
        .col-xl-6 {
            max-width: 50%;
            flex: 0 0 50%;
        }

        .col-xl-8 {
            max-width: 66.66667%;
            flex: 0 0 66.66667%;
        }

        .order-xl-1 {
            order: 1;
        }
    }

    .form-control {
        font-size: 1rem;
        line-height: 1.5;
        display: block;
        width: 100%;
        height: calc(2.75rem + 2px);
        padding: .625rem .75rem;
        transition: all .2s cubic-bezier(.68, -.55, .265, 1.55);
        color: #8898aa;
        border: 1px solid #cad1d7;
        border-radius: .375rem;
        background-color: #fff;
        background-clip: padding-box;
        box-shadow: none;
    }

    @media screen and (prefers-reduced-motion: reduce) {
        .form-control {
            transition: none;
        }
    }

    .form-control::-ms-expand {
        border: 0;
        background-color: transparent;
    }

    .form-control:focus {
        color: #8898aa;
        border-color: rgba(50, 151, 211, .25);
        outline: 0;
        background-color: #fff;
        box-shadow: none, none;
    }

    .form-control:-ms-input-placeholder {
        opacity: 1;
        color: #adb5bd;
    }

    .form-control::-ms-input-placeholder {
        opacity: 1;
        color: #adb5bd;
    }

    .form-control::placeholder {
        opacity: 1;
        color: #adb5bd;
    }

    .form-control:disabled,
    .form-control[readonly] {
        opacity: 1;
        background-color: #e9ecef;
    }

    textarea.form-control {
        height: auto;
    }

    .form-group {
        margin-bottom: 1.5rem;
    }

    .btn {
        font-size: 1rem;
        font-weight: 600;
        line-height: 1.5;
        display: inline-block;
        padding: .625rem 1.25rem;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
        text-align: center;
        vertical-align: middle;
        white-space: nowrap;
        border: 1px solid transparent;
        border-radius: .375rem;
    }

    @media screen and (prefers-reduced-motion: reduce) {
        .btn {
            transition: none;
        }
    }

    .btn:hover,
    .btn:focus {
        text-decoration: none;
    }

    .btn:focus {
        outline: 0;
        box-shadow: 0 7px 14px rgba(50, 50, 93, .1), 0 3px 6px rgba(0, 0, 0, .08);
    }

    .btn:disabled {
        opacity: .65;
        box-shadow: none;
    }

    .btn:not(:disabled):not(.disabled) {
        cursor: pointer;
    }

    .btn:not(:disabled):not(.disabled):active {
        box-shadow: none;
    }

    .btn:not(:disabled):not(.disabled):active:focus {
        box-shadow: 0 7px 14px rgba(50, 50, 93, .1), 0 3px 6px rgba(0, 0, 0, .08), none;
    }

    .btn-primary {
        color: #fff;
        border-color: #5e72e4;
        background-color: #5e72e4;
        box-shadow: 0 4px 6px rgba(50, 50, 93, .11), 0 1px 3px rgba(0, 0, 0, .08);
    }

    .btn-primary:hover {
        color: #fff;
        border-color: #5e72e4;
        background-color: #5e72e4;
    }

    .btn-primary:focus {
        box-shadow: 0 4px 6px rgba(50, 50, 93, .11), 0 1px 3px rgba(0, 0, 0, .08), 0 0 0 0 rgba(94, 114, 228, .5);
    }

    .btn-primary:disabled {
        color: #fff;
        border-color: #5e72e4;
        background-color: #5e72e4;
    }

    .btn-primary:not(:disabled):not(.disabled):active {
        color: #fff;
        border-color: #5e72e4;
        background-color: #324cdd;
    }

    .btn-primary:not(:disabled):not(.disabled):active:focus {
        box-shadow: none, 0 0 0 0 rgba(94, 114, 228, .5);
    }

    .btn-sm {
        font-size: .875rem;
        line-height: 1.5;
        padding: .25rem .5rem;
        border-radius: .375rem;
    }

    .card {
        position: relative;
        display: flex;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        border: 1px solid rgba(0, 0, 0, .05);
        border-radius: .375rem;
        background-color: #fff;
        background-clip: border-box;
    }

    .card>hr {
        margin-right: 0;
        margin-left: 0;
    }

    .card-body {
        padding: 1.5rem;
        flex: 1 1 auto;
    }

    .card-header {
        margin-bottom: 0;
        padding: 1.25rem 1.5rem;
        border-bottom: 1px solid rgba(0, 0, 0, .05);
        background-color: #fff;
    }

    .card-header:first-child {
        border-radius: calc(.375rem - 1px) calc(.375rem - 1px) 0 0;
    }

    @keyframes progress-bar-stripes {
        from {
            background-position: 1rem 0;
        }

        to {
            background-position: 0 0;
        }
    }

    .bg-secondary {
        background-color: #f7fafc !important;
    }

    a.bg-secondary:hover,
    a.bg-secondary:focus,
    button.bg-secondary:hover,
    button.bg-secondary:focus {
        background-color: #d2e3ee !important;
    }

    .bg-default {
        background-color: #172b4d !important;
    }

    a.bg-default:hover,
    a.bg-default:focus,
    button.bg-default:hover,
    button.bg-default:focus {
        background-color: #0b1526 !important;
    }

    .bg-white {
        background-color: #fff !important;
    }

    a.bg-white:hover,
    a.bg-white:focus,
    button.bg-white:hover,
    button.bg-white:focus {
        background-color: #e6e6e6 !important;
    }

    .bg-white {
        background-color: #fff !important;
    }

    .border-0 {
        border: 0 !important;
    }

    .align-items-center {
        align-items: center !important;
    }

    @media (min-width: 1200px) {
        .justify-content-xl-between {
            justify-content: space-between !important;
        }
    }

    .shadow {
        box-shadow: 0 0 2rem 0 rgba(136, 152, 170, .15) !important;
    }

    .mb-0 {
        margin-bottom: 0 !important;
    }

    .my-4 {
        margin-top: 1.5rem !important;
    }

    .mb-4,
    .my-4 {
        margin-bottom: 1.5rem !important;
    }

    .mb-5 {
        margin-bottom: 3rem !important;
    }

    .mt-7 {
        margin-top: 6rem !important;
    }

    .m-auto {
        margin: auto !important;
    }

    @media (min-width: 992px) {
        .pl-lg-4 {
            padding-left: 1.5rem !important;
        }
    }

    .text-right {
        text-align: right !important;
    }

    .text-center {
        text-align: center !important;
    }

    .text-muted {
        color: #8898aa !important;
    }

    @media print {

        *,
        *::before,
        *::after {
            box-shadow: none !important;
            text-shadow: none !important;
        }

        a:not(.btn) {
            text-decoration: underline;
        }

        p,
        h2,
        h3 {
            orphans: 3;
            widows: 3;
        }

        h2,
        h3 {
            page-break-after: avoid;
        }

        @ page {
            size: a3;
        }

        body {
            min-width: 992px !important;
        }

        .container {
            min-width: 992px !important;
        }
    }

    figcaption,
    main {
        display: block;
    }

    main {
        overflow: hidden;
    }

    .bg-white {
        background-color: #fff !important;
    }

    a.bg-white:hover,
    a.bg-white:focus,
    button.bg-white:hover,
    button.bg-white:focus {
        background-color: #e6e6e6 !important;
    }

    @keyframes floating-lg {
        0% {
            transform: translateY(0px);
        }

        50% {
            transform: translateY(15px);
        }

        100% {
            transform: translateY(0px);
        }
    }

    @keyframes floating {
        0% {
            transform: translateY(0px);
        }

        50% {
            transform: translateY(10px);
        }

        100% {
            transform: translateY(0px);
        }
    }

    @keyframes floating-sm {
        0% {
            transform: translateY(0px);
        }

        50% {
            transform: translateY(5px);
        }

        100% {
            transform: translateY(0px);
        }
    }

    [class*='shadow'] {
        transition: all .15s ease;
    }

    .btn {
        font-size: .875rem;
        position: relative;
        transition: all .15s ease;
        letter-spacing: .025em;
        text-transform: none;
        will-change: transform;
    }

    .btn:hover {
        transform: translateY(-1px);
        box-shadow: 0 7px 14px rgba(50, 50, 93, .1), 0 3px 6px rgba(0, 0, 0, .08);
    }

    .btn:not(:last-child) {
        margin-right: .5rem;
    }

    .btn-sm {
        font-size: .75rem;
    }

    [class*='btn-outline-'] {
        border-width: 1px;
    }

    .main-content {
        position: relative;
    }

    .footer {
        padding: 2.5rem 0;
        background: #f7fafc;
    }

    .footer .copyright {
        font-size: .875rem;
    }

    .form-control-label {
        font-size: .875rem;
        font-weight: 600;
        color: #525f7f;
    }

    .form-control {
        font-size: .875rem;
    }

    .form-control:focus:-ms-input-placeholder {
        color: #adb5bd;
    }

    .form-control:focus::-ms-input-placeholder {
        color: #adb5bd;
    }

    .form-control:focus::placeholder {
        color: #adb5bd;
    }

    textarea[resize='none'] {
        resize: none !important;
    }

    textarea[resize='both'] {
        resize: both !important;
    }

    textarea[resize='vertical'] {
        resize: vertical !important;
    }

    textarea[resize='horizontal'] {
        resize: horizontal !important;
    }

    .form-control-alternative {
        transition: box-shadow .15s ease;
        border: 0;
        box-shadow: 0 1px 3px rgba(50, 50, 93, .15), 0 1px 0 rgba(0, 0, 0, .02);
    }

    .form-control-alternative:focus {
        box-shadow: 0 4px 6px rgba(50, 50, 93, .11), 0 1px 3px rgba(0, 0, 0, .08);
    }

    .focused .form-control {
        border-color: rgba(50, 151, 211, .25);
    }

    .focused .form-control {
        border-color: rgba(50, 151, 211, .25);
    }

    @media (min-width: 768px) {
        @ keyframes show-navbar-dropdown {
            0% {
                transition: visibility .25s, opacity .25s, transform .25s;
                transform: translate(0, 10px) perspective(200px) rotateX(-2deg);
                opacity: 0;
            }

            100% {
                transform: translate(0, 0);
                opacity: 1;
            }
        }

        @keyframes hide-navbar-dropdown {
            from {
                opacity: 1;
            }

            to {
                transform: translate(0, 10px);
                opacity: 0;
            }
        }
    }

    @keyframes show-navbar-collapse {
        0% {
            transform: scale(.95);
            transform-origin: 100% 0;
            opacity: 0;
        }

        100% {
            transform: scale(1);
            opacity: 1;
        }
    }

    @keyframes hide-navbar-collapse {
        from {
            transform: scale(1);
            transform-origin: 100% 0;
            opacity: 1;
        }

        to {
            transform: scale(.95);
            opacity: 0;
        }
    }

    p {
        font-size: 1rem;
        font-weight: 300;
        line-height: 1.7;
    }

    .heading-small {
        font-size: .75rem;
        padding-top: .25rem;
        padding-bottom: .25rem;
        letter-spacing: .04em;
        text-transform: uppercase;
    }

    @media (max-width: 768px) {
        .btn {
            margin-bottom: 10px;
        }
    }
    </style>
</head>

<body>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

    <body>
    <?php
                if(isset($_SESSION['username'])&&(is_array($_SESSION['username']))){
                    extract($_SESSION['username']);
    
                }

                ?>
        <div class="main-content">
            <div class="container mt-7">
                <!-- Table -->
                <!-- <h2 class="mb-5">My Account Card</h2> -->
                <div class="row">
                    <div class="col-xl-8 m-auto order-xl-1">
                        <div class="card bg-secondary shadow">
                            <div class="card-header bg-white border-0">
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <h3 class="mb-0">My account</h3>
                                    </div>
                                    <!-- <div class="col-4 text-right">
                  <a href="#!" class="btn btn-sm btn-primary">Settings</a>
                </div> -->
                                </div>
                            </div>
                            <div class="card-body">
                                <form>
                                    <h6 class="heading-small text-muted mb-4">User information</h6>
                                    <div class="pl-lg-4">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group focused">
                                                    <label class="form-control-label"
                                                        for="input-username">Username</label>
                                                    <input type="text" id="input-username"
                                                        class="form-control form-control-alternative"
                                                        placeholder="Username" value="<?=$username?>" disabled>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="form-control-label" for="input-email">Email </label>
                                                    <input type="email" id="input-email"
                                                        class="form-control form-control-alternative"
                                                        placeholder="Null" value="<?=$email?>" disabled>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group focused">
                                                    <label class="form-control-label" for="input-first-name">Full Name</label>
                                                    <input type="text" id="input-first-name"
                                                        class="form-control form-control-alternative"
                                                        placeholder="Null" value="<?=$fullname?>" disabled>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group focused">
                                                    <label class="form-control-label" for="input-last-name">Phone Number</label>
                                                    <input type="text" id="input-last-name"
                                                        class="form-control form-control-alternative"
                                                        placeholder="Null" value="<?=$phone_number?>" disabled>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="my-4">
                                    <!-- Address -->
                                    <h6 class="heading-small text-muted mb-4">Contact information</h6>
                                    <div class="pl-lg-4">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group focused">
                                                    <label class="form-control-label"
                                                        for="input-address">Address</label>
                                                    <input id="input-address"
                                                        class="form-control form-control-alternative"
                                                        placeholder="Null" value="<?=$address?>" disabled
                                                        value="Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09"
                                                        type="text">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <div class="row">
                                            <div class="col-lg-4">
                                                <div class="form-group focused">
                                                    <label class="form-control-label" for="input-city">City</label>
                                                    <input type="text" id="input-city"
                                                        class="form-control form-control-alternative" placeholder="City"
                                                        value="New York">
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group focused">
                                                    <label class="form-control-label"
                                                        for="input-country">Country</label>
                                                    <input type="text" id="input-country"
                                                        class="form-control form-control-alternative"
                                                        placeholder="Country" value="United States">
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label class="form-control-label" for="input-country">Postal
                                                        code</label>
                                                    <input type="number" id="input-postal-code"
                                                        class="form-control form-control-alternative"
                                                        placeholder="Postal code">
                                                </div>
                                            </div>
                                        </div> -->
                                    </div>
                                    <hr class="my-4">
                                    <!-- Description -->
                                    <h6 class="heading-small text-muted mb-4">About me</h6>
                                    <div class="pl-lg-4">
                                        <div class="form-group focused">
                                            <label>About Me</label>
                                            <textarea rows="4" class="form-control form-control-alternative"
                                                placeholder="A few words about you ..." disabled>Null</textarea>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="row align-items-center justify-content-xl-between">
                <div class="col-xl-6 m-auto text-center">
                    <div class="copyright">
                        <div class="col-12 ">
                            <a href="#!" class="btn btn-sm btn-primary">Settings</a>
                        </div>
                    </div>
                    <br>
                    <div class="copyright">
                        <div class="col-12 ">
                            <a href="?act=logout" class="btn btn-sm btn-primary">Log Out</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</body>

</html>