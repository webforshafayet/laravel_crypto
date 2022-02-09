<x-guest-layout>
    <!-- <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card> -->




    <!doctype html>
<html class="no-js" lang="">

<head>
   <meta charset="utf-8">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <link rel="manifest" href="site.webmanifest">
    <link rel="apple-touch-icon" href="icon.png">
    <!-- Place favicon.ico in the root directory -->

    <!--Bootstrap css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="css/normalize.css">

    <link rel="stylesheet" href="css/main.css">

    <link rel="stylesheet" href="css/register.css">
    <link rel="stylesheet" href="css/selectField.css">

    <style>
        #policy,
        #coverAndbenificiary {
            display: none;
        }
    </style>
</head>

<body>

<x-jet-validation-errors class="mb-4" />

    <!--Header start-->
    <header>
        <nav class="navbar p-3 navbar-expand-lg">
            <a class="navbar-brand" href="index.html">
                <img src="img/headLogo.png" class="img-fluid">
            </a>
        </nav>
    </header>
    <!--Header start-->

    <!--Main start-->
    <!-- <main>
        <div class="px-1 w-100 mx-auto authWrap">
            <form method="POST" action="{{ route('register') }}" method="post" class="ms-auto px-md-3 text-center text-md-start px-lg-0">
            @csrf
                <h2>
                    Sign up to get The
                    <p>Best Benifit</p>
                </h2>

                <p>Open account for free and trade bitcoin and stock now!</p>

                <div class="row w-100 m-0">
                    <div class="my-1 px-1 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <input type="text" class="form-control py-2 no-shadow" placeholder="First name"
                            aria-label="First name" name="name" :value="old('name')" required autofocus autocomplete="name">
                    </div>

                    <div class="my-1 px-1 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <input type="text" class="form-control py-2 no-shadow" placeholder="Last name"
                            aria-label="Last name" name="last_name" :value="old('last_name')" required>
                    </div>

                    <div class="my-1 px-1 col-12">
                        <input type="email" class="form-control py-2 no-shadow" placeholder="Email Address" name="email" :value="old('email')" required>
                    </div>

                    <div class="my-1 px-1 col-12">
                        <input type="text" class="form-control py-2 no-shadow" placeholder="Contact Number" name="contact_number" :value="old('contact_number')" required>
                    </div>

                    <div class="my-1 px-1 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="text-start position-relative custom-select">

                        <select   class="form-select d-none" id="package" name="choose_package" :value="old('choose_package')" required>



                        <option disabled selected hidden name="choose_package">Choose Package</option>
                                <option value="Starter" name="choose_package">Starter</option>
                                <option value="Premium" name="choose_package">Premium</option>
                                <option value="Professional" name="choose_package">Professional</option>
                                <option value="Qpt_Fixed_Annuity" name="choose_package">Qpt Fixed Annuity</option>
                                <option value="Cash_Balance" name="choose_package">Cash Balance</option>
                                <option value="SMFS" name="choose_package">SMFS</option>
                                <option value="DCF" name="choose_package">DCF</option>

 
                        </select>



                            
                        </div>
                    </div>

                    <div class="my-1 px-1 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="text-start position-relative custom-select">
                            <select class="form-select d-none" name="country" :value="old('country')" required>
                                <option disabled selected hidden>Select Country</option>
                                <option>USA</option>
                                <option>France</option>
                                <option>Spain</option>
                                <option>India</option>
                                <option>Bangladesh</option>
                            </select>
                        </div>
                    </div>

                    <div class="my-1 px-1 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <input type="text" class="form-control py-2 no-shadow" placeholder="Sum Amount" name="sum" :value="old('sum')" required>
                    </div>

                    <div class="my-1 px-1 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <input type="text" class="form-control py-2 no-shadow" placeholder="Frequent Deposit" name="frequent_deposit" :value="old('frequent_deposit')" required>
                    </div>

                    <div class="my-1 px-1 col-12">
                        <div class="text-start position-relative custom-select">
                            <select class="form-select d-none" name="select_cover_duration" :value="old('select_cover_duration')" required>
                                <option disabled selected hidden>Select Cover Duration</option>
                                <option>1 Month</option>
                                <option>3 Months</option>
                                <option>6 Months</option>
                                <option>9 Months</option>
                                <option>12 Months</option>
                            </select>
                        </div>
                    </div>

                    <div class="mb-5 policyWrap">
                        <h6 class="my-3">Policy</h6>

                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime culpa quidem recusandae nobis
                            aliquid architecto obcaecati odit dolor architecto obcaecati odit dolor architecto obcaecati
                            odit dolor obcaecati odit dolor obcaecati odit dolor</p>

                        <label class="position-relative">
                            <input type="checkbox" class="position-relative">
                            <span class="position-absolute border rounded chk"></span>
                            <span class="ms-3">I agree with the terms &amp; condition</span>
                        </label>
                    </div>

                    <div class="accordion p-1" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="text-uppercase accordion-button collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                    aria-controls="collapseTwo">
                                    Cover Information
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">

                                    <div class="row w-100 m-0">
                                        <div class="my-1 px-1 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" class="form-control py-2 no-shadow" placeholder="Address"
                                                aria-label="Address" name="address" :value="old('address')" required>
                                        </div>

                                        <div class="my-1 px-1 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" class="form-control py-2 no-shadow" placeholder="State"
                                                aria-label="State" name="state" :value="old('state')" required>
                                        </div>

                                        <div class="my-1 px-1 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" class="form-control py-2 no-shadow" placeholder="City"
                                                aria-label="City" name="city" :value="old('city')" required>
                                        </div>

                                        <div class="my-1 px-1 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <input type="date" class="form-control py-2 no-shadow" aria-label="Date" name="date" :value="old('date')" required>
                                        </div>

                                        <div class="my-1 px-1 col-12">
                                            <div class="text-start position-relative custom-select">
                                                <label class="form-label">Sex</label>
                                                <select class="form-select d-none" name="sex" :value="old('sex')" required>
                                                    <option selected>Choose an option</option>
                                                    <option>Male</option>
                                                    <option>Female</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="text-uppercase accordion-button collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                                    aria-controls="collapseThree">
                                    Add Benificiary
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">

                                    <div class="row w-100 m-0">
                                        <div class="my-1 px-1 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" class="form-control py-2 no-shadow"
                                                placeholder="Beneficiary Name" aria-label="Beneficiary Name" name="ben_name" :value="old('ben_name')" required>
                                        </div>

                                        <div class="my-1 px-1 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" class="form-control py-2 no-shadow"
                                                placeholder="Beneficiary Number" aria-label="Beneficiary Number" name="ben_number" :value="old('ben_number')" required>
                                        </div>

                                        <div class="my-1 px-1 col-12">
                                            <div class="text-start position-relative custom-select">
                                                <label class="form-label">Relationship</label>

                                                <select class="form-select d-none" name="ben_relationship" :value="old('ben_relationship')" required>
                                                    <option selected>Choose an option</option>
                                                    <option>Mother</option>
                                                    <option>Father</option>
                                                    <option>Brother</option>
                                                    <option>Sister</option>
                                                    <option>Cousin</option>
                                                    <option>Uncle</option>
                                                    <option>Auntie</option>
                                                    <option>Friend</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="my-1 px-1 col-12">
                                            <label for="customRange2" class="form-label">
                                                Beneficiary Percentage <span id="percentage">0</span>%
                                            </label>
                                            <input type="range" class="form-range" min="1" max="100"
                                                id="percentageRange" value="1" name="ben_percentage" :value="old('ben_percentage')" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="my-1 px-1 col-12">
                            <input type="password" class="form-control py-2 no-shadow" placeholder="Type Password" name="password" required autocomplete="new-password">
                        </div>

                        <div class="my-1 px-1 col-12">
                            <input type="password" class="form-control py-2 no-shadow" placeholder="Re-type Password" name="password_confirmation" required autocomplete="new-password">
                        </div>

                        <div class="my-4 submitBtnWrap">
                            <p class="d-inline-block py-2">
                                Already have an account?
                                <a class="text-decoration-none" href="{{ route('login') }}">Sign in</a>
                            </p>

                            <button class="btn text-white px-5 float-end py-2" type="submit">Next</button>
                        </div>
                    </div>
            </form>
        </div>
    </main> -->


 <main>
        <div class="px-1 w-100 mx-auto authWrap">
        <form method="POST" action="{{ route('register') }}" method="post" class="ms-auto px-md-3 text-center text-md-start px-lg-0">
            @csrf
                <h2>
                    Sign up to get The
                    <p>Best Benifit</p>
                </h2>

                <p>Open account for free and trade bitcoin and stock now!</p>

                <div class="row w-100 m-0">
                <div class="my-1 px-1 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <input type="text" class="form-control py-2 no-shadow" placeholder="First name"
                            aria-label="First name" name="name" :value="old('name')" required autofocus autocomplete="name">
                    </div>

                    <div class="my-1 px-1 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <input type="text" class="form-control py-2 no-shadow" placeholder="Last name"
                            aria-label="Last name" name="last_name" :value="old('last_name')" required>
                    </div>

                    <div class="my-1 px-1 col-12">
                        <input type="email" class="form-control py-2 no-shadow" placeholder="Email Address" name="email" :value="old('email')" required>
                    </div>

                    <div class="my-1 px-1 col-12">
                        <input type="text" class="form-control py-2 no-shadow" placeholder="Contact Number" name="contact_number" :value="old('contact_number')" required>
                    </div>

                    <div class="my-1 px-1 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="text-start position-relative custom-select">
                            <select class="form-select d-none" id="package" name="choose_package" :value="old('choose_package')" required>
                                <option disabled selected hidden>Choose Package</option>
                                <option value="Starter">Starter</option>
                                <option value="Premium">Premium</option>
                                <option value="Professional">Professional</option>
                                <option value="Qpt Fixed Annuity">Qpt Fixed Annuity</option>
                                <option value="Cash Balance">Cash Balance</option>
                                <option value="SMFS">SMFS</option>
                                <option value="DCF">DCF</option>
                            </select>
                        </div>
                    </div>

                    <div class="my-1 px-1 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="text-start position-relative custom-select">
                            <select class="form-select d-none" name="country" :value="old('country')" required>
                                <option disabled selected hidden>Select Country</option>
                                <option>USA</option>
                                <option>France</option>
                                <option>Spain</option>
                                <option>India</option>
                                <option>Bangladesh</option>
                            </select>
                        </div>
                    </div>

                    <div class="my-1 px-1 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <input type="text" class="form-control py-2 no-shadow" placeholder="Sum Amount" name="sum" :value="old('sum')" required>
                    </div>

                    <div class="my-1 px-1 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <input type="text" class="form-control py-2 no-shadow" placeholder="Frequent Deposit" name="frequent_deposit" :value="old('frequent_deposit')" required>
                    </div>

                    <div class="my-1 px-1 col-12">
                        <div class="text-start position-relative custom-select">
                            <select class="form-select d-none" name="select_cover_duration" :value="old('select_cover_duration')" required>
                                <option disabled selected hidden>Select Cover Duration</option>
                                <option>1 Month</option>
                                <option>3 Months</option>
                                <option>6 Months</option>
                                <option>9 Months</option>
                                <option>12 Months</option>
                            </select>
                        </div>
                    </div>

                    <div class="mb-5 policyWrap" id=policy>
                        <h6 class="my-3">Policy</h6>

                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime culpa quidem recusandae nobis
                            aliquid architecto obcaecati odit dolor architecto obcaecati odit dolor architecto obcaecati
                            odit dolor obcaecati odit dolor obcaecati odit dolor</p>

                        <label class="position-relative">
                            <input type="checkbox" class="position-relative">
                            <span class="position-absolute border rounded chk"></span>
                            <span class="ms-3">I agree with the terms &amp; condition</span>
                        </label>
                    </div>

                    <div class="accordion p-1" id="accordionExample">
                        <div class="accordion-item" id="coverAndbenificiary">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="text-uppercase accordion-button collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                    aria-controls="collapseTwo">
                                    Cover Information & Add Benificiary
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">

                                    <div class="row w-100 m-0">
                                    <div class="my-1 px-1 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" class="form-control py-2 no-shadow" placeholder="Address"
                                                aria-label="Address" name="address"  >
                                        </div>

                                        <div class="my-1 px-1 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" class="form-control py-2 no-shadow" placeholder="State"
                                                aria-label="State" name="state"   >
                                        </div>

                                        <div class="my-1 px-1 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" class="form-control py-2 no-shadow" placeholder="City"
                                                aria-label="City" name="city"    >
                                        </div>

                                        <div class="my-1 px-1 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <input type="date" class="form-control py-2 no-shadow" aria-label="Date" name="date"   >
                                        </div>

                                        <div class="my-1 px-1 col-12">
                                            <div class="text-start position-relative custom-select">
                                                <label class="form-label">Sex</label>
                                                <select class="form-select d-none" name="sex"    >
                                                    <option selected>Choose an option</option>
                                                    <option>Male</option>
                                                    <option>Female</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row w-100 m-0">
                                    <div class="my-1 px-1 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" class="form-control py-2 no-shadow"
                                                placeholder="Beneficiary Name" aria-label="Beneficiary Name" name="ben_name"  >
                                        </div>

                                        <div class="my-1 px-1 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" class="form-control py-2 no-shadow"
                                                placeholder="Beneficiary Number" aria-label="Beneficiary Number" name="ben_number"    >
                                        </div>

                                        <div class="my-1 px-1 col-12">
                                            <div class="text-start position-relative custom-select">
                                                <label class="form-label">Relationship</label>

                                                <select class="form-select d-none" name="ben_relationship"   >
                                                    <option selected>Choose an option</option>
                                                    <option>Mother</option>
                                                    <option>Father</option>
                                                    <option>Brother</option>
                                                    <option>Sister</option>
                                                    <option>Cousin</option>
                                                    <option>Uncle</option>
                                                    <option>Auntie</option>
                                                    <option>Friend</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="my-1 px-1 col-12">
                                            <label for="customRange2" class="form-label">
                                                Beneficiary Percentage <span id="percentage">0</span>%
                                            </label>
                                            <input type="range" class="form-range" min="1" max="100"
                                                id="percentageRange" value="1" name="ben_percentage"   >
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="my-1 px-1 col-12">
                            <input type="password" class="form-control py-2 no-shadow" placeholder="Type Password" name="password" required autocomplete="new-password">
                        </div>

                        <div class="my-1 px-1 col-12">
                            <input type="password" class="form-control py-2 no-shadow" placeholder="Re-type Password" name="password_confirmation" required autocomplete="new-password">
                        </div>

                        <div class="my-4 submitBtnWrap">
                            <p class="d-inline-block py-2">
                                Already have an account?
                                <a class="text-decoration-none" href="{{ route('login') }}">Sign in</a>
                            </p>

                            <button class="btn text-white px-5 float-end py-2" type="submit">Next</button>
                        </div>
                    </div>
            </form>
        </div>
    </main>
















































    <!--Main end-->

    <!--Bootstrap js-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <script src="js/vendor/modernizr-3.11.2.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

    <script src="js/signup.js"></script>

    <script>
        document.getElementById("percentageRange").addEventListener("click", () => {
            document.getElementById("percentage").innerText = document.getElementById("percentageRange").value;
        });

        const policy = document.getElementById("policy");
        const coverAndbenificiary = document.getElementById("coverAndbenificiary");
        const package = document.getElementById("package");

        setInterval(() => {
            if (package.value === "Starter" || package.value === "Professional" || package.value === "Premium") {
                policy.style.display = "none";
                coverAndbenificiary.style.display = "none";
            }

            else if (package.value === "Qpt Fixed Annuity" || package.value === "Cash Balance" || package.value === "SMFS" || package.value === "DCF") {
                policy.style.display = "block";
                coverAndbenificiary.style.display = "block";
            }
        }, 1);
    </script>

    <script>
        document.getElementById("percentageRange").addEventListener("click", () => {
            document.getElementById("percentage").innerText = document.getElementById("percentageRange").value;
        });
    </script>
</body>

</html>
</x-guest-layout>
