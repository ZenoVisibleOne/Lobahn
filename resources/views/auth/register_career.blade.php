@extends('layouts.master')


@push('css')
    <style>
        #msform fieldset:not(:first-of-type) {
            display: none
        }
        li.targetpayType , label.cv-upload , li.sign-up-form__fee { text-align: left;}
         
    </style>
@endpush

@section('content')
    <div class="bg-gray-warm-pale text-white mt-28 py-16 md:pt-28 md:pb-28">

        <form action="{{ route('register') }}" method="POST" files="true" id="msform" name="msform"
            enctype="multipart/form-data" data-stripe-publishable-key="{{ $stripe_key }}">
            @csrf

            <div class="flex flex-wrap justify-center items-center sign-up-card-section">
                <input type="hidden" name="user_id" id="user_id" value="{{ $user->id }}">

                {{-- User Data --}}
                <fieldset
                    class="group sign-up-card-section__explore join-individual flex flex-col items-center justify-center bg-gray-light m-2 rounded-md">

                    <h1 class="text-xl sm:text-2xl xl:text-4xl text-center mb-5 font-heavy tracking-wide mt-4">YOUR PASSWORD
                    </h1>

                    <div class="sign-up-form mb-5">
                        <div class="mb-3 sign-up-form__information">
                            <input type="text" name="user_name" id="user_name" placeholder="Username*"
                                class="focus:outline-none w-full bg-gray text-gray-pale pl-8 pr-4 py-4 rounded-md tracking-wide" />
                        </div>
                        <div class="mb-3 sign-up-form__information relative">
                            <input type="text" name="password" id="password" placeholder="Password*"
                                class="focus:outline-none w-full bg-gray text-gray-pale pl-8 pr-4 py-4 rounded-md tracking-wide profile-password" />
                            <img src="../img/sign-up/eye-lash.svg" alt="eye lash icon"
                                class="cursor-pointer eye-lash-icon absolute right-0" />
                        </div>
                        <div class="mb-3 sign-up-form__information relative">
                            <input type="text" name="confirm_password" id="confirm_password"
                                placeholder="Comfirm Password.*"
                                class="focus:outline-none w-full bg-gray text-gray-pale pl-8 pr-4 py-4 rounded-md tracking-wide profile-password" />
                            <img src="../img/sign-up/eye-lash.svg" alt="eye lash icon"
                                class="cursor-pointer eye-lash-icon absolute right-0" />
                        </div>
                    </div>

                    <button type="button"
                        class=" next action-button text-lg btn h-11 leading-7 py-2 cursor-pointer focus:outline-none border border-lime-orange hover:bg-transparent hover:text-lime-orange">
                        Next
                    </button>

                </fieldset>

                {{-- Profile Data --}}
                <fieldset
                    class="group sign-up-card-section__explore join-individual sign-up-card-section__explore--height py-16 sm:py-24 flex flex-col items-center justify-center bg-gray-light m-2 rounded-md">
                    <center>
                        <h1 class="text-xl sm:text-2xl xl:text-4xl text-center mb-5 font-heavy tracking-wide mt-4">PROFILE
                            DATA
                        </h1>
                        <div class="sign-up-form mb-5">
                            <div class="mb-3 sign-up-form__information">
                                <div class="select-wrapper text-gray-pale">
                                    <div class="select-preferences">
                                        <div
                                            class="select__trigger relative flex items-center justify-between pl-4 bg-gray cursor-pointer">
                                            <span>Where do you live?</span>
                                            <svg class="arrow transition-all mr-4" xmlns="http://www.w3.org/2000/svg"
                                                width="13.328" height="7.664" viewBox="0 0 13.328 7.664">
                                                <path id="Path_150" data-name="Path 150" d="M18,7.5l5.25,5.25L18,18"
                                                    transform="translate(19.414 -16.586) rotate(90)" fill="none"
                                                    stroke="#bababa" stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="2" />
                                            </svg>

                                        </div>
                                        <div
                                            class="custom-options absolute block top-full left-0 right-0 bg-white transition-all opacity-0 invisible pointer-events-none cursor-pointer">
                                            <span
                                                class="location-reset custom-option selected pr-4 block relative transition-all hover:bg-lime-orange hover:text-gray"
                                                data-value="Where do you live?">Where do you live?</span>

                                            @foreach ($conuntries as $country)
                                                <span
                                                    class="location custom-option pr-4 block relative transition-all hover:bg-lime-orange hover:text-gray"
                                                    data-value="{{ $country->country_name }}"
                                                    value="{{ $country->id }}">{{ $country->country_name }}</span>
                                            @endforeach
                                        </div>
                                        <input type="hidden" id="location_id" name="location_id" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3 sign-up-form__information relative">
                                <div class="select-wrapper text-gray-pale">
                                    <div class="select-preferences">
                                        <div
                                            class="select__trigger relative flex items-center justify-between pl-4 bg-gray cursor-pointer">
                                            <span>Desired position titles</span>
                                            <svg class="arrow transition-all mr-4" xmlns="http://www.w3.org/2000/svg"
                                                width="13.328" height="7.664" viewBox="0 0 13.328 7.664">
                                                <path id="Path_150" data-name="Path 150" d="M18,7.5l5.25,5.25L18,18"
                                                    transform="translate(19.414 -16.586) rotate(90)" fill="none"
                                                    stroke="#bababa" stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="2" />
                                            </svg>

                                        </div>
                                        <div
                                            class="custom-options absolute block top-full left-0 right-0 bg-white transition-all opacity-0 invisible pointer-events-none cursor-pointer">
                                            <span
                                                class="position_title-reset custom-option selected pr-4 block relative transition-all hover:bg-lime-orange hover:text-gray"
                                                data-value="Desired position titles">Desired position titles</span>

                                            @foreach ($job_titles as $job_title)
                                                <span
                                                    class="position_title custom-option pr-4 block relative transition-all hover:bg-lime-orange hover:text-gray"
                                                    data-value="{{ $job_title->job_title }}"
                                                    value="{{ $job_title->id }}">{{ $job_title->job_title }}</span>
                                            @endforeach
                                        </div>
                                        <input type="hidden" id="position_title_id" name="position_title_id" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3 sign-up-form__information relative">
                                <div class="select-wrapper text-gray-pale">
                                    <div class="select-preferences">
                                        <div
                                            class="select__trigger relative flex items-center justify-between pl-4 bg-gray cursor-pointer">
                                            <span>Target industry sectors</span>
                                            <svg class="arrow transition-all mr-4" xmlns="http://www.w3.org/2000/svg"
                                                width="13.328" height="7.664" viewBox="0 0 13.328 7.664">
                                                <path id="Path_150" data-name="Path 150" d="M18,7.5l5.25,5.25L18,18"
                                                    transform="translate(19.414 -16.586) rotate(90)" fill="none"
                                                    stroke="#bababa" stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="2" />
                                            </svg>

                                        </div>
                                        <div
                                            class="custom-options absolute block top-full left-0 right-0 bg-white transition-all opacity-0 invisible pointer-events-none cursor-pointer">
                                            <span
                                                class="industry-reset custom-option selected pr-4 block relative transition-all hover:bg-lime-orange hover:text-gray"
                                                data-value="Target industry sectors">Target industry sectors</span>
                                            @foreach ($industries as $industry)
                                                <span
                                                    class="industry custom-option pr-4 block relative transition-all hover:bg-lime-orange hover:text-gray"
                                                    data-value="{{ $industry->industry_name }}"
                                                    value="{{ $industry->id }}">
                                                    {{ $industry->industry_name }}</span>
                                            @endforeach
                                        </div>
                                        <input type="hidden" name="industry_id" id="industry_id">
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3 sign-up-form__information relative">
                                <div class="select-wrapper text-gray-pale">
                                    <div class="select-preferences">
                                        <div
                                            class="select__trigger relative flex items-center justify-between pl-4 bg-gray cursor-pointer">
                                            <span>Desired functional areas</span>
                                            <svg class="arrow transition-all mr-4" xmlns="http://www.w3.org/2000/svg"
                                                width="13.328" height="7.664" viewBox="0 0 13.328 7.664">
                                                <path id="Path_150" data-name="Path 150" d="M18,7.5l5.25,5.25L18,18"
                                                    transform="translate(19.414 -16.586) rotate(90)" fill="none"
                                                    stroke="#bababa" stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="2" />
                                            </svg>

                                        </div>
                                        <div
                                            class="custom-options absolute block top-full left-0 right-0 bg-white transition-all opacity-0 invisible pointer-events-none cursor-pointer">
                                            <span
                                                class="functional_area-rest custom-option selected pr-4 block relative transition-all hover:bg-lime-orange hover:text-gray"
                                                data-value="Desired functional areas">Desired functional areas</span>

                                            @foreach ($functionals as $functional)
                                                <span
                                                    class="functional_area custom-option pr-4 block relative transition-all hover:bg-lime-orange hover:text-gray"
                                                    data-value="{{ $functional->area_name }}"
                                                    value="{{ $functional->id }}">{{ $functional->area_name }}</span>
                                            @endforeach
                                        </div>
                                        <input type="hidden" name="functional_area_id" id="functional_area_id">
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3 sign-up-form__information relative">
                                <div class="select-wrapper text-gray-pale">
                                    <div class="select-preferences">
                                        <div
                                            class="select__trigger relative flex items-center justify-between pl-4 bg-gray cursor-pointer">
                                            <span>Desirable employers</span>
                                            <svg class="arrow transition-all mr-4" xmlns="http://www.w3.org/2000/svg"
                                                width="13.328" height="7.664" viewBox="0 0 13.328 7.664">
                                                <path id="Path_150" data-name="Path 150" d="M18,7.5l5.25,5.25L18,18"
                                                    transform="translate(19.414 -16.586) rotate(90)" fill="none"
                                                    stroke="#bababa" stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="2" />
                                            </svg>

                                        </div>
                                        <div
                                            class="custom-options absolute block top-full left-0 right-0 bg-white transition-all opacity-0 invisible pointer-events-none cursor-pointer">
                                            <span
                                                class="employer-reset custom-option selected pr-4 block relative transition-all hover:bg-lime-orange hover:text-gray"
                                                data-value="Desirable employers">Desirable employers</span>
                                            @foreach ($employers as $employer)
                                                <span
                                                    class="employer custom-option pr-4 block relative transition-all hover:bg-lime-orange hover:text-gray"
                                                    data-value="{{ $employer->company_name }}"
                                                    value="{{ $employer->id }}">{{ $employer->company_name }}</span>
                                            @endforeach
                                        </div>
                                        <input type="hidden" name="target_employer_id" id="target_employer_id">
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3 sign-up-form__information relative">
                                <div id="list1" class="dropdown-check-list" tabindex="100">
                                    <button data-value='Preferred employment terms*'
                                        class="anchor selectedData pl-8 pr-4 text-lg py-2 font-book focus:outline-none outline-none w-full bg-gray btn-default  anchor"
                                        type="button" id="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <div class="flex justify-between">
                                            <span class="mr-12 py-3 text-gray-pale text-21 selectedText">Preferred employment
                                                terms*</span>
                                            <span class="custom-caret-preference flex self-center"></span>
                                        </div>
                                    </button>
                                    <ul class="items bg-gray text-gray-pale">
                                        <li
                                            class="targetpayType cursor-pointer preference-option-active py-3 pl-8  preference-option1">
                                            <input name='preference-checkbox' data-value='1' checked type="checkbox"
                                                data-target='Preferred employment terms*' id="1" /><label
                                                class="text-21 pl-2">Preferred
                                                employment terms*</label>
                                        </li>
                                        <li class="targetpayType cursor-pointer py-3 pl-8 preference-option2"><input
                                                name='preference-checkbox' data-value='2' type="checkbox"
                                                data-target='Full-time - permanents' id="2" /><label class="text-21 pl-2">Full-time
                                                -
                                                permanent</label></li>
                                        <li class="targetpayType cursor-pointer py-3 pl-8 preference-option3"><input
                                                name='preference-checkbox' data-value='3' type="checkbox"
                                                data-target='Full-time - project' id="3" /><label class="text-21 pl-2">Full-time -
                                                project</label> </li>
                                        <li class="targetpayType cursor-pointer py-3 pl-8 preference-option4"><input
                                                name='preference-checkbox' data-value='4' type="checkbox" data-target='Part-time'
                                                id="4" /><label class="text-21 pl-2">Part-time</label> </li>
                                        <li class="targetpayType cursor-pointer py-3 pl-8 preference-option5"><input
                                                name='preference-checkbox' data-value='5' type="checkbox" data-target='Freelance'
                                                id="5" /><label class="text-21 pl-2">Freelance</label> </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="mb-3 relative target-pay1">
                                <input type="text" placeholder="Target Pay*" readonly
                                    class="opacity-50 py-4 text-21 w-full placeholder-gray-pale bg-gray text-gray-pale rounded-lg focus:outline-none font-book font-futura-pt text-lg pl-8" />
                            </div>
                            <div class=" w-full">
                                <div class="target-pay2 w-full pt-3 hidden">
                                    <p class="text-21 text-smoke  font-futura-pt">Full-time monthly salary</p>
                                    <div class="flex">
                                        <span class="relative hongkongdollar w-full">
                                            <input name="full_time_salary" value="" type="text" class="py-4 pl-20 rounded-lg w-full bg-gray focus:outline-none text-gray-light3
                                            font-book font-futura-pt text-21 px-4 placeholder-gray-light3" placeholder="" />
                                            <span class="text-21 opacity-50 self-center -ml-28 text-gray-pale">per
                                                month</span>
                                        </span>
                                    </div>
                                </div>
                                <div class="target-pay4 pt-3 hidden">
                                    <p class="text-21 text-smoke  font-futura-pt">Part time daily rate</p>
                                    <div class="flex">
                                        <span class="relative hongkongdollar w-full">
                                            <input name="part_time_salary" value="" type="text" class="py-4 pl-20 rounded-lg w-full bg-gray focus:outline-none text-gray-light3
                                            font-book font-futura-pt text-21 px-4 placeholder-gray-light3" placeholder="" />
                                            <span class="text-21 opacity-50 self-center -ml-24 text-gray-pale">per
                                                day</span>
                                        </span>
                                    </div>
                                    <div class="target-pay5 pt-3 hidden">
                                        <p class="text-21 text-smoke  font-futura-pt">Freelance monthly project fee</p>
                                        <span class="relative hongkongdollar w-full">
                                            <input name="freelance_salary" value="" type="text" class="py-4 pl-20 rounded-lg w-full bg-gray focus:outline-none text-gray-light3
                                            font-book font-futura-pt text-21 px-4 placeholder-gray-light3" placeholder="" />
                                            <span class="text-21 opacity-50 self-center -ml-28 text-gray-pale">per
                                                month</span>
                                        </span>
                                    </div>
                                </div>
            
                            </div>
                        </div>
                        
                        <button type="button"
                            class="text-lg btn h-11 leading-7 py-2 cursor-pointer focus:outline-none border border-lime-orange hover:bg-transparent hover:text-lime-orange next action-button">
                            Next
                        </button>
                    </center>
                </fieldset>
                {{-- Upload CV --}}
                <fieldset
                    class="group sign-up-card-section__explore join-individual sign-up-card-section__explore--upload-height py-16 sm:py-20 lg:py-24 flex flex-col items-center justify-center bg-gray-light m-2 rounded-md">
                    <center>
                        <h1 class="text-xl sm:text-2xl xl:text-4xl text-center font-heavy tracking-wide mt-4 mb-3">PLEASE
                            UPLOAD YOUR CV</h1>
                        <h6
                            class="text-base xl:text-lg letter-spacing-custom mb-7 text-gray-pale text-center upload-accepted-file-note">
                            Accepted file types: .pdf, .docx
                            Maximum file size: 1mb</h6>
                        <div class="sign-up-form mb-5">
                            <div class="image-upload upload-photo-box  sign-up-form__information mb-8 relative">
                                
                            <div class="image-upload upload-photo-box  sign-up-form__information mb-8 relative">
                                <label for="file-input"
                                    class="cv-upload relative cursor-pointer block w-full bg-gray text-gray-pale pl-8 pr-4 py-4 rounded-md tracking-wide profile-password">
                                    Your most recent CV
                                    <img src="{{ asset('/img/sign-up/upload-file.svg') }}" alt="upload icon"
                                        class="upload-cv-image absolute right-2" />
                                </label>
                                <input id="file-input" type="file" name="cv" id="cv" accept=".pdf,.docs"
                                    data-allowed-file-extensions="pdf docs" />
                            </div>
                        </div>
                        <button type="button"
                            class="text-lg btn h-11 leading-7 py-2 cursor-pointer focus:outline-none border border-lime-orange hover:bg-transparent hover:text-lime-orange next action-button mt-5">
                            Next
                        </button>
                    </center>
                </fieldset>

                {{-- Upload Photo --}}
                <fieldset
                    class="group sign-up-card-section__explore join-individual sign-up-card-section__explore--upload-height py-16 sm:py-20 lg:py-24 flex flex-col items-center justify-center bg-gray-light m-2 rounded-md">
                    <center>
                        <h1 class="text-xl sm:text-2xl xl:text-4xl text-center font-heavy tracking-wide mt-4 mb-3">
                            PLEASE UPLOAD YOUR PHOTO</h1>
                        <h6
                            class="text-base xl:text-lg letter-spacing-custom mb-7 text-gray-pale text-center upload-accepted-file-note upload-accepted-file-note--width">
                            Recommended format:<span class="block">300x300px, .jpg, not larger than 200kb</span>
                        </h6>
                        <div class="image-upload upload-photo-box  mb-8 relative">
                            <label for="img-input" class="relative cursor-pointer block">
                                <img src="./img/sign-up/upload-photo.png" alt="sample photo image"
                                    class="upload-photo-box__photo" />
                                <img src="./img/sign-up/upload-file.svg" alt="upload icon"
                                    class="upload-photo-box__icon absolute top-1/2 left-1/2" />
                            </label>
                            <input type="file" id="img-input" name="image" accept="image/*;capture=camera,.jpg,.png,.jpeg"
                                data-allowed-file-extensions="jpg jpeg png" />
                        </div>
                        <button type="button"
                            class="text-lg btn h-11 leading-7 py-2 cursor-pointer focus:outline-none border border-lime-orange hover:bg-transparent hover:text-lime-orange next action-button">
                            Next
                        </button>
                    </center>
                </fieldset>

                {{-- Membership / Package --}}
                <fieldset
                    class="group sign-up-card-section__explore join-individual card-membership-height flex flex-col items-center justify-center bg-gray-light m-2 rounded-md py-20">
                    <center>
                        <h1 class="text-xl sm:text-2xl xl:text-4xl text-center mb-5 font-heavy tracking-wide ">SELECT
                            MEMBERSHIP</h1>
                        <div class="sign-up-form mb-5">
                            <ul class="mb-3 sign-up-form__information letter-spacing-custom">

                                @foreach ($packages as $package)
                                    <li value="{{ $package->id }}" class="w-full bg-white <?php echo $package->package_title == 'Basic' ? 'active-fee' : ' '; ?> sign-up-form__fee cursor-pointer hover:bg-lime-orange text-gray pl-8 pr-4 py-4 mb-4 rounded-md tracking-wide sign-up-form__information--fontSize font-heavy">
                                        {{ $package->package_title }} Membership<span class="block text-gray font-book">${{ $package->package_price }} only</span>
                                    </li>
                                @endforeach
                            </ul>
                            <input type="hidden" name="package_id" id="package_id" value="2">
                        </div>
                        <button type="button"
                            class="text-lg btn h-11 leading-7 py-2 cursor-pointer focus:outline-none border border-lime-orange hover:bg-transparent hover:text-lime-orange next action-button">
                            Next
                        </button>
                    </center>
                </fieldset>

                {{-- Payment --}}
                <fieldset
                    class="pay group sign-up-card-section__explore join-individual flex flex-col items-center justify-center bg-gray-light m-2 rounded-md">
                    <center>
                        <h1 class="text-xl sm:text-2xl xl:text-4xl text-center mb-5 font-heavy tracking-wide mt-4">
                            PAYMENT
                        </h1>
                        <div class="sign-up-form mb-5">
                            <div class="mb-3 sign-up-form__information">
                                <button
                                    class="focus:outline-none w-full bg-gray text-gray-pale py-4 rounded-md tracking-wide">
                                    <img src="./img/sign-up/ipay.svg" alt="i pay icon" class="mx-auto ipay-image">
                                </button>
                            </div>
                            <div class="divider-custom mb-3">
                                <p class="inline-block text-sm text-gray-pale">or pay with card</p>
                            </div>
                            <div class="mb-3 sign-up-form__information">
                                <input type="text" autocomplete='off' placeholder="Card number"
                                    class="card-number text-gray-pale text-sm focus:outline-none w-full bg-gray text-gray-pale pl-8 pr-4 py-4 rounded-md tracking-wide" />
                            </div>
                            <div class="flex flex-wrap justify-between items-center">
                                <div class="mb-3 sign-up-form__information sign-up-form__information--card-width">
                                    <input type="text" placeholder="MM/YY"
                                        class="card-expiry text-gray-pale text-sm focus:outline-none w-full bg-gray text-gray-pale pl-8 pr-4 py-4 rounded-md tracking-wide" />
                                </div>
                                <div class="mb-3 sign-up-form__information sign-up-form__information--card-width">
                                    <input type="text" placeholder="CVV" autocomplete='off'
                                        class="card-cvc text-gray-pale text-sm focus:outline-none w-full bg-gray text-gray-pale pl-8 pr-4 py-4 rounded-md tracking-wide" />
                                </div>
                            </div>
                        </div>
                        <button type="button" id="btn_complete"
                            class="text-gray text-lg btn h-11 leading-7 py-2 cursor-pointer focus:outline-none border border-lime-orange hover:bg-transparent hover:text-lime-orange">
                            Next
                        </button>
                    </center>
                </fieldset>
        </form>
        {{-- Payment Success Popup --}}
        <div class="fixed top-0 w-full h-screen left-0 hidden z-50 bg-black-opacity" id="individual-successful-popup">
            <div class="text-center text-white absolute top-1/2 left-1/2 popup-text-box bg-gray-light">
                <div
                    class="flex flex-col justify-center items-center popup-text-box__container popup-text-box__container--height pt-16 pb-8 relative">
                    {{-- <button class="absolute top-5 right-5 cursor-pointer focus:outline-none"
                             onclick="toggleModalClose('#email-verify')">
                             <img src="./img/sign-up/close.svg" alt="close modal image">
                         </button> --}}
                    <h1 class="text-lg lg:text-2xl tracking-wide popup-text-box__title mb-4">THAT'S ALL FOR
                        NOW!
                    </h1>
                    <p class="text-gray-pale popup-text-box__description individual-successful-description">
                        Get
                        ready to
                        receive well-matched career opportunities that fit your criteria!</p>
                    <div class="sign-up-form sign-up-form--individual-success my-5">
                        <ul class="mb-3 sign-up-form__information sign-up-form__information--individual">

                            <button id="edit-profile"
                                class="mx-auto active-fee sign-up-form__fee successful-options cursor-pointer hover:bg-lime-orange hover:text-gray text-lime-orange mb-4 rounded-full tracking-wide text-sm lg:text-base xl:text-lg border border-lime-orange py-3"
                                onclick="event.preventDefault(); document.getElementById('profile-form').submit();">For
                                best
                                results, optimize your profile now!</button>

                            <form id="profile-form" action="{{ route('registered.profile') }}" method="POST"
                                style="display: none;">
                                @csrf
                                <input type="hidden" value="{{ $user->id }}" name="user_id">
                            </form>

                            <button id="candidate-dashboard"
                                class="mx-auto active-fee sign-up-form__fee successful-options cursor-pointer hover:bg-lime-orange hover:text-gray text-lime-orange mb-4 rounded-full tracking-wide text-sm lg:text-base xl:text-lg border border-lime-orange py-3"
                                onclick="event.preventDefault(); document.getElementById('dashboard-form').submit();">For
                                I'll optimize my profile later</button>
                            <form id="dashboard-form" action="{{ route('registered.dashboard') }}" method="POST"
                                style="display: none;">
                                @csrf
                                <input type="hidden" value="{{ $user->id }}" name="user_id">
                            </form>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
    <script>
        $(document).ready(function() {
        
            @if (session('status'))
            openModalBox('#individual-successful-popup')
            @php Session::forget('verified'); @endphp
            @endif

            // Stripe Payment and Register Script

            $("#btn_complete").click(function() {
                var btn = $(this);
                btn.prop('disabled', true);
                setTimeout(function() {
                    btn.prop('disabled', false);
                }, 3 * 1000);

                var $form = $("#msform");
                Stripe.setPublishableKey($form.data('stripe-publishable-key'));
                var cardexpirymonth = $('.card-expiry').val().split('/')[0];
                var cardexpireyear = $('.card-expiry').val().split('/')[1];
                var response = Stripe.createToken({
                    number: $('.card-number').val(),
                    cvc: $('.card-cvc').val(),
                    exp_month: cardexpirymonth,
                    exp_year: cardexpireyear
                }, stripeResponseHandler);

                function stripeResponseHandler(status, response) {
                    if (response.error) {
                        alert("Please use valid card and try again ");
                    } else {
                        /* token contains id, last4, and card type */
                        var stripe_token = response['id'];
                        // console.log(stripe_token);
                        pay(stripe_token);
                    }
                }

                function pay(stripe_token) {

                    $.ajax({
                        type: 'POST',
                        url: '/stripe',
                        data: {
                            "_token": "{{ csrf_token() }}",
                            "stripeToken": stripe_token,
                            "package_id": $('#package_id').val(),
                            "user_id": $('#user_id').val(),
                        },
                        success: function(data) {
                            if (data.status == "success") {
                                $('#msform').submit();
                            } else {
                                alert("Payment Fail , try again");
                            }
                        }
                    });
                }

            });

            // End of Stripe Payment and Register Script

            $('#individual-successful-popup').click(function() {
                $('#candidate-dashboard').click();
            });

        });
    </script>
    <script src="{{ asset('./js/candidate-register.js') }}"></script>
@endpush
