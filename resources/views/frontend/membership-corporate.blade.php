@extends('layouts.frontend-master')

@section('content')
    <div class="corporate-member-premiumplan-container">
        <div class="relative">
            <img src="{{ asset('img/premium/1.png') }}" class="w-full object-cover events-banner-container-img" />
            <div class="absolute premium-content top-1/2 left-1/2">
                <p class="text-white md:text-5xl text-4xl whitespace-normal text-center font-book">Membership</p>
            </div>
        </div>
    </div>
    <div class="bg-gray-warm-pale w-full lg:flex py-40 membertype-container">
        <div class="lg:w-6/12 w-full">
            <a href="{{ route('membership') }}" id="professional-tab"
                class="hover:text-white cursor-pointer text-4xl text-gray-pale font-book text-center
                 title-underline">INDIVIDUAL
                MEMBERS</a>
            <div class="flex justify-center mt-8">
                <button type="button" onclick="window.location='{{ route('membership') }}'"
                    class="relative md:whitespace-nowrap focus:outline-none border-2 border-lime-orange text-gray-pale text-lg font-heavy member-profession-btn py-3 md:px-28 px-20">
                    <div class="flex justify-center">
                        <span class="whitespace-nowrap">Learn
                            more</span>
                        <img class="object-contain hidden" src="{{ asset('img/member/left.png') }}" />
                    </div>
                </button>

            </div>
        </div>
        <div class="lg:w-6/12 w-full lg:pt-0 pt-8">
            <div class="cursor-pointer">
                <a href="#" id="corporate-tab"
                    class="text-4xl text-gray-pale hover:text-white font-book text-center title-underline-active">CORPORATE
                    MEMBERS</a>
            </div>
            <div class="flex justify-center mt-8">
                <button type="button"
                    class="md:whitespace-nowrap focus:outline-none border-2 border-lime-orange text-gray-pale text-lg font-heavy member-corporate-btn py-3 md:px-28 px-20">
                    <div class="flex justify-center">
                        <span class="whitespace-nowrap">Learn more</span>
                        <img class="object-contain hidden" src="{{ asset('img/member/left.png') }}" />
                    </div>
                </button>

            </div>
        </div>
    </div>
    <div class="w-full bg-gray-warm-pale">
        <div class="lg:flex w-full">
            <div class="bg-gray lg:w-6/12 h-autow-full flex justify-center py-20">
                <div class="w-full text-center self-center corporate-content-1">
                    <p class="text-center md:text-5xl text-4xl text-white uppercase">complimentary</p>
                    <p class="text-center md:text-5xl text-4xl text-lime-orange mb-4 uppercase">position listings</p>
                    <p class="text-center text-gray-pale text-21 leading-snug font-futura-pt">
                        Employers that qualify for Corporate Membership are eligible for our complimentary position listing
                        services.
                    </p>
                </div>
            </div>
            <div class=" lg:w-6/12 w-full">
                <img class="w-full corporate-content-1-img" src="{{ asset('img/member/bg1.png') }}" />
            </div>
        </div>
        <div class="lg:flex w-full flex-row-reverse">
            <div
                class="bg-gray flex justify-center lg:w-6/12 member-desc-container w-full relative lg:py-20 py-12 4xl-custom:px-44 xl:px-32 lg:px-12 px-28">
                <div class="w-full text-center self-center gap-12">
                    <div class="w-full md:flex">
                        <div class="md:w-6/12 w-full flex justify-center md:mb-0 mb-6">
                            <div>
                                <img class="object-contain m-auto" src="{{ asset('img/member/icon1.png') }}" />
                                <div class="flex mt-2">
                                    <span class="text-2xl leading-none text-lime-orange mr-1">FREE</span>
                                    <span class="text-2xl  leading-none text-gray-pale"> Sign-up</span>
                                </div>
                            </div>
                        </div>
                        <div class="md:w-6/12 w-full flex justify-center md:mb-0 mb-6">
                            <div>
                                <img class="object-contain m-auto" src="{{ asset('img/member/icon2.png') }}" />
                                <div class="flex mt-2">

                                    <span class="text-2xl  leading-none text-gray-pale"><span
                                            class="text-2xl leading-none text-lime-orange mr-1">FREE</span>Notification &
                                        Viewing of JSR™ Matching Profiles</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full md:flex xl:mt-16 lg:mt-8 mt-8">
                        <div class="md:w-6/12 w-full  flex justify-center md:mb-0 mb-6">
                            <div>
                                <img class="object-contain m-auto" src="{{ asset('img/member/icon3.png') }}" />
                                <div class="flex mt-2">
                                    <span class="text-2xl leading-none text-gray-pale"><span
                                            class="text-2xl leading-none text-lime-orange mr-1">FREE</span>Connection with
                                        Member Professionals</span>
                                </div>
                            </div>
                        </div>
                        <div class="md:w-6/12 w-full  flex justify-center md:mb-0 mb-6">
                            <div>
                                <img class="object-contain m-auto" src="{{ asset('img/member/icon4.png') }}" />
                                <div class="flex mt-2">
                                    <span class="text-2xl leading-none text-lime-orange mr-1">FREE</span>
                                    <span class="text-2xl leading-none text-gray-pale">Corporate Profile</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" lg:w-6/12 w-full">
                <img class="w-full four-icon-img" src="{{ asset('img/premium/3.png') }}" />
            </div>
        </div>

        <div class="lg:flex w-full">
            <div class="bg-gray lg:w-6/12 h-auto w-full relative flex justify-center py-20">
                <div class="w-full text-center self-center corporate-content-2">
                    <p class="text-center text-gray-pale text-21 leading-snug font-futura-pt">
                        Corporate Member profiles are subject to verification, and all position listings must meet our
                        standards for completeness and professional/managerial level prior to being introduced to fellow
                        Corporate Members and our Member Professionals.
                    </p>
                </div>
            </div>
            <div class=" lg:w-6/12 w-full">
                <img class="w-full corporate-content-2-img" src="{{ asset('img/member/bg3.png') }}" />
            </div>
        </div>
        <div class="lg:flex w-full flex-row-reverse mt-24">
            <div class="bg-gray lg:w-6/12 h-auto flex justify-center w-full relative py-20">
                <div class="w-full corporate-content-3 text-center self-center">
                    <p><span class="text-gray-pale text-5xl uppercase mr-1">talent</span>
                        <span class="text-lime-orange text-5xl">DISCOVERY™</span>
                    </p>
                    <p class="xl:mt-8 mt-3 text-center text-gray-pale text-21 leading-snug font-futura-pt">
                        Corporate Members who wish to get ahead of their competitors and optimize their engagement with our
                        Member Professionals are invited to purchase our Talent Hunt™ package, which adds vital promotional
                        support to our free position listing services.
                    </p>
                    <p class="xl:mt-8 mt-3  text-center text-lime-orange text-21 leading-snug font-futura-pt">
                        Talent Discovery™ is a cost-effective means of increasing the reach and visibility of your Position
                        Listing.
                    </p>
                </div>
            </div>
            <div class=" lg:w-6/12 w-full">
                <img class="w-full corporate-content-3-img" src="{{ asset('img/member/bg4.png') }}" />
            </div>
        </div>
    </div>
    <div class="lg:flex w-full flex-row ">
        <div class="bg-gray lg:w-6/12 premium-talent-desc-content-container w-full relative">
            <ul class="absolute w-full talent-desc talent-desc--left text-left xl:text-center">
                <li class="mb-8 sm:mb-6 2xl:mb-8 value-sevices-title">
                    <p class="text-gray-pale text-xl text-center sm:text-21 leading-snug">
                        Added -value services include
                    </p>
                </li>
                <li class="flex flex-row justify-start items-start xl:items-center mb-4 sm:mb-2 2xl:mb-4">
                    <img src="{{ asset('img/premium/msm.svg') }}" alt="member services manager icon"
                        class="premium-services-icon">
                    <p class="ml-4 text-gray-pale text-xl sm:text-21 leading-snug">A dedicated <span
                            class="text-lime-orange"> List Manager</span></p>
                </li>
                <li class="flex flex-row justify-start items-start xl:items-center mb-4 sm:mb-2 2xl:mb-4">
                    <img src="{{ asset('img/premium/profile-promo.svg') }}" alt="profile icon"
                        class="premium-services-icon">
                    <p class="ml-4 text-gray-pale text-xl sm:text-21 leading-snug">Position <span
                            class="text-lime-orange">listing promotion</span></p>
                </li>
                <li class="flex flex-row justify-start items-start xl:items-center mb-4 sm:mb-2 2xl:mb-4">
                    <img src="{{ asset('img/premium/preferred-place.svg') }}" alt="preferred placement icon">
                    <p class="ml-4 text-gray-pale text-xl sm:text-21 leading-snug"><span class="text-lime-orange">Preferred
                            placement </span>of your position listing</p>
                </li>
                <li class="flex flex-row justify-start items-start xl:items-center mb-4 sm:mb-2 2xl:mb-4">
                    <img src="{{ asset('img/premium/outreach.svg') }}" alt="outreach icon"
                        class="premium-services-icon premium-services-icon--noti">
                    <p class="ml-3 sm:ml-4 text-gray-pale text-xl sm:text-21 leading-snug">Lobahn<sup
                            class="text-sm">TM</sup> outreach to <span class="text-lime-orange">suitable Member
                            Professionals</span></p>
                </li>
                <li class="flex flex-row justify-start items-start xl:items-center mb-4 sm:mb-2 2xl:mb-4">
                    <img src="{{ asset('img/premium/data.svg') }}" alt="remuneration data icon"
                        class="premium-services-icon">
                    <p class="ml-4 text-gray-pale text-xl sm:text-21 leading-snug">Market <span
                            class="text-lime-orange">remuneration data</span></p>
                </li>
                <li class="flex flex-row justify-start items-start xl:items-center">
                    <img src="{{ asset('img/premium/network.svg') }}" alt="network icon" class="premium-services-icon">
                    <p class="ml-4 text-gray-pale text-xl sm:text-21 leading-snug">Invitations to Lobahn Connect<sup
                            class="text-xs">TM</sup> <span class="text-lime-orange">networking events</span></p>
                </li>
            </ul>
        </div>
        <div class=" lg:w-6/12 w-full">
            <img class="w-full value-service-image1" src="{{ asset('img/premium/value-services-corporate-image.jpg') }}"
                alt="image value sign" class="value-service-image" />
        </div>
    </div>
    <div class="lg:flex w-full flex-row-reverse">
        <div class="bg-gray lg:w-6/12 h-auto w-full relative py-20 flex justify-center">
            <div class="w-full text-center self-center corporate-service-last-content">
                <p class="text-center text-gray-pale text-21 leading-snug font-futura-pt font-book">
                    Corporate Members may purchase the Talent Discovery™ option in one of two ways: a fixed fee of $10,000
                    per position listing or a success-based fee of 17% of the annual salary of the Member Professional hired
                    for the role.
                </p>
            </div>
        </div>
        <div class=" lg:w-6/12 w-full">
            <img class="w-full corporate-service-last-content-img"
                src="{{ asset('img/corporate-menu/premium/11.png') }}" />
        </div>
    </div>
    <div class="bg-gray-warm-pale py-32">
        <div class="mx-auto footer-section letter-spacing-custom mt-4">
            <div classs="monthly-title-section">
                <h1 class="text-3xl lg:text-5xl text-gray-pale">CORPORATE MEMBERSHIP FEES</h1>
                <p class="text-base lg:text-21 text-gray-pale mt-3">30-day free trial, cancel anytime</p>
            </div>
            <div class="flex flex-row flex-wrap justify-center lg:justify-between items-center mt-12">
                <div class="talent-monthly-card relative group md:mr-4 lg:mr-0">
                    <div
                        class="hidden absolute top-0 left-0 font-heavy bg-lime-orange p-2 rounded-corner text-center text-base lg:text-lg xl:text-2xl w-full text-gray z-10 popular-tag">
                        MOST POPULAR
                    </div>
                    <div class="bg-smoke-dark bill-card rounded-corner">
                        <div class="relative">
                            <img src="{{ asset('img/our-services/monthly-corporate-image.png') }}" alt="monthly image"
                                class="talent-monthly-card-image w-full" />
                            <div class="absolute top-1/2 left-1/2 billed-text w-full">
                                <p class="text-white text-center text-xl xl:text-2xl font-heavy">90-DAY PLAN</p>
                            </div>
                            <div class="absolute -bottom-2 lg:-bottom-1.5 left-1/2 save-price-text hidden">
                                <p class="underline text-lime-orange text-lg xl:text-2xl font-heavy">
                                    Save 50%
                                </p>
                            </div>
                        </div>
                        <div class="pt-4 pb-8 flex flex-col justify-center items-center text-white price-label">
                            <div class="flex flex-row justify-center items-center">
                                <span class="text-lg xl:text-xl 2xl:text-2xl mr-4">HK$</span><span
                                    class="text-4xl xl:text-6xl 2xl:text-80 font-heavy">{{ number_format($monthly_plan->package_price) ?? '' }}</span>
                            </div>
                            <p class="text-lg text-white mt-2 text-center price-label-text">per quarter</p>
                        </div>
                    </div>
                    <div class="purchase-button-section mt-5">
                        <button onclick="window.location='{{ route('signup_talent') }}'"
                            class="bg-smoke-dark purchase-btn hover:bg-lime-orange hover:text-gray text-base lg:text-lg text-gray-pale rounded-corner focus:outline-none w-full py-2 xl:py-4 letter-spacing-custom">Join
                            Now</button>
                    </div>
                </div>
                <div class="talent-monthly-card relative selected-card-style mt-8 md:mt-0 group">
                    <div
                        class="absolute top-0 left-0 font-heavy bg-lime-orange p-2 rounded-corner text-center text-base lg:text-lg xl:text-2xl w-full text-gray z-10 popular-tag">
                        MOST POPULAR
                    </div>
                    <div class="bg-smoke-dark bill-card rounded-corner">
                        <div class="relative">
                            <img src="{{ asset('img/our-services/annual-corporate-image.png') }}" alt="monthly image"
                                class="talent-monthly-card-image w-full" />
                            <div class="absolute top-1/2 left-1/2 billed-text w-full">
                                <p class="text-white text-center text-xl xl:text-2xl font-heavy">TWO-YEAR PLAN</p>
                            </div>
                            <div class="absolute -bottom-2 lg:-bottom-1.5 left-1/2 save-price-text">
                                @if ($two_year_plan->promotion_percent)
                                    <p class="underline text-lime-orange text-lg xl:text-2xl font-heavy">Save
                                        {{ $two_year_plan->promotion_percent }}
                                        %</p>
                                @endif

                            </div>
                        </div>
                        <div class="pt-12 pb-8 flex flex-col justify-center items-center text-white price-label">
                            <div class="flex flex-row justify-center items-center">
                                <span class="text-lg xl:text-xl 2xl:text-2xl mr-4">HK$</span><span
                                    class="text-4xl xl:text-6xl 2xl:text-80 font-heavy">
                                    {{ number_format($two_year_plan->price_permonth) ?? '' }}
                                </span>
                            </div>
                            <p class="text-lg text-white mt-2 text-center price-label-text">per quarter billed at HK
                                {{ number_format($two_year_plan->package_price) ?? '' }}
                                every two years</p>
                        </div>
                    </div>
                    <div class="purchase-button-section mt-5">
                        <button onclick="window.location='{{ route('signup_talent') }}'"
                            class="bg-smoke-dark purchase-btn hover:bg-lime-orange hover:text-gray text-base lg:text-lg text-gray-pale rounded-corner focus:outline-none w-full py-2 xl:py-4 letter-spacing-custom">Join
                            Now</button>
                    </div>
                </div>
                <div class="talent-monthly-card relative group mt-8 lg:mt-0">
                    <div
                        class="hidden font-heavy absolute top-0 left-0 bg-lime-orange p-2 rounded-corner text-center text-basese lg:text-lg xl:text-2xl w-full text-gray z-10 popular-tag">
                        MOST POPULAR
                    </div>
                    <div class="bg-smoke-dark bill-card rounded-corner">
                        <div class="relative">
                            <img src="{{ asset('img/our-services/two-year-image.png') }}" alt="monthly image"
                                class="talent-monthly-card-image w-full" />
                            <div class="absolute top-1/2 left-1/2 billed-text w-full">
                                <p class="text-white text-center text-xl xl:text-2xl font-heavy">ONE-YEAR PLAN</p>
                            </div>
                            <div class="absolute -bottom-2 lg:-bottom-1.5 left-1/2 save-price-text">
                                @if ($annual_plan->promotion_percent)
                                    <p class="underline text-lime-orange text-lg xl:text-2xl font-heavy">
                                        Save{{ $annual_plan->promotion_percent }}%</p>
                                @endif
                            </div>
                        </div>
                        <div class="pt-12 pb-8 flex flex-col justify-center items-center text-white price-label">
                            <div class="flex flex-row justify-center items-center">
                                <span class="text-lg xl:text-xl 2xl:text-2xl mr-4">HK$</span><span
                                    class="text-4xl xl:text-6xl 2xl:text-80 font-heavy">
                                    {{ number_format($annual_plan->price_permonth) ?? '' }}
                                </span>
                            </div>
                            <p class="text-lg text-white mt-2 text-center price-label-text">per quarter billed at HK$
                                {{ number_format($annual_plan->package_price) ?? '' }}
                                annually</p>
                        </div>
                    </div>
                    <div class="purchase-button-section mt-5">
                        <button onclick="window.location='{{ route('signup_talent') }}'"
                            class="bg-smoke-dark purchase-btn hover:bg-lime-orange hover:text-gray text-base lg:text-lg text-gray-pale rounded-corner focus:outline-none w-full py-2 xl:py-4 letter-spacing-custom">Join
                            Now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="guarantee-container flex justify-center w-full relative bg-lime-orange md:pt-40 md:pb-28 pt-48 pb-36">
        <div class="guarantee-contentd">
            <p class="text-center uppercase font-futura-pt text-5xl md:whitespace-nowrap text-gray font-book">join today
            </p>
            <p class="text-center text-21 text-gray pt-6 font-book">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ut nibh et urna vehicula commodo eu
                commodo enim. Ut laoreet urna non libero vehicula condimentum. Sed tincidunt blandit rutrum. Mauris ac
                congue nibh, a maximus nibh. Donec accumsan risus nec blandit semper.
            </p>
            <div class="flex justify-center pt-8">
                <button type="button" onclick="window.location='{{ route('signup_talent') }}'"
                    class=" whitespace-nowrap text-lg focus:outline-none text-gray font-futura-pt font-heavy guarantee-join-btn py-4 md:px-28 px-20">
                    Join Today
                </button>
            </div>
        </div>
    </div>
@endsection
