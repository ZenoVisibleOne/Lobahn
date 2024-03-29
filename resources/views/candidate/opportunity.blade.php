@extends('layouts.master')
@section('content')

    <div class="mt-28 sm:mt-36 md:mt-20 py-20 bg-gray-light2">
        <div class="m-opportunity-box mx-auto px-64 relative">
            <div class="absolute shopify-image-box">
                <img src="{{ asset('/uploads/company_logo/' . $opportunity->company->company_logo) }}" alt="shopify icon"
                    class="shopify-image">
            </div>
            <div
                class="bg-lime-orange flex flex-row items-center letter-spacing-custom m-opportunity-box__title-bar rounded-corner">
                <div class="m-opportunity-box__title-bar__height percent text-center py-8 relative">
                    @if($opportunity->is_featured)
                    <div class="self-center bg-gray inline-block rounded-2xl">
                        <p class="text-lg font-heavy px-8 py-1 text-lime-orange uppercase">featured</p>
                    </div>
                    @else
                    <p class="text-3xl md:text-4xl lg:text-5xl font-heavy text-gray mb-1"> @if ($opportunity->jsrRatio($opportunity->id, Auth::id()) != null)  {{ $opportunity->jsrRatio($opportunity->id, Auth::id())->jsr_percent }} % @else no data @endif</p>
                    <p class="text-base text-gray-light1">JSR<sup>TM</sup> Ratio</p>
                    @endif
                </div>
                <div class="m-opportunity-box__title-bar__height match-target ml-8 py-11 2xl:py-12">
                    <p class="text-lg md:text-xl lg:text-2xl font-heavy text-black">MATCHES YOUR TARGET SALARY</p>
                </div>
            </div>
            <div class="bg-gray-light rounded-corner">
                <div class="match-company-box p-12">
                    <div>
                        <span class="text-lg text-gray-light1 mr-4">#12345678</span>
                        <span class="text-sm bg-lime-orange text-black rounded-full px-3 py-0.5">New</span>
                    </div>
                    <h1 class="text-2xl md:text-3xl lg:text-4xl text-lime-orange mt-4 mb-2">{{ $opportunity->title }}</h1>
                    <div class="text-base lg:text-lg text-gray-light1 letter-spacing-custom">
                        <span class="">{{ $opportunity->company->company_name }}</span>
                        <span class="listed-label relative"></span>
                        <span class="listed-date">Listed {{ $opportunity->listing_date }}</span>
                    </div>
                    <ul class="mt-6 mb-10 text-white mark-yellow xl:text-2xl sm:text-xl text-lg">
                        @if ($opportunity->highlight_1 != null)
                            <li class="mb-4">{{ $opportunity->highlight_1 }}</li>
                        @endif
                        @if ($opportunity->highlight_2 != null)
                            <li class="mb-4">{{ $opportunity->highlight_2 }}</li>
                        @endif
                        @if ($opportunity->highlight_3 != null)
                            <li class="mb-4">{{ $opportunity->highlight_3 }}</li>
                        @endif
                    </ul>
                    <div class="border border-gray-pale border-t-0 border-l-0 border-r-0 my-4">
                    </div>
                    <ul class="flex flex-row flex-wrap justify-start items-center xl:w-3/5 w-full my-6">
                        <li class="flex flex-row justify-start items-center mb-2 w-full sm:w-1/2 lg:w-2/6">
                            <img src="{{ asset('/img/member-opportunity/location.svg') }}" alt="website image" />
                            <p class="text-gray-pale text-lg ml-3">
                                @if ($opportunity->country_id != null)
                                    {{ $opportunity->country->country_name }}
                                @else no data
                                @endif
                            </p>
                        </li>
                        <li class="flex flex-row justify-start items-center mb-2  w-full sm:w-1/2 lg:w-2/6">
                            <img src="{{ asset('/img/member-opportunity/people.svg') }}" alt="website image" />
                            <p class="text-gray-pale text-lg ml-3">
                                @if ($opportunity->management_id != null)
                                    {{ $opportunity->carrier->carrier_level }}
                                @else no data
                                @endif
                            </p>
                        </li>
                        <li class="flex flex-row justify-start items-center mb-2 w-full sm:w-1/2 lg:w-2/6">
                            <img src="{{ asset('/img/dashboard/function-area.svg') }}" alt="functional area" />
                            <p class="text-gray-pale text-lg ml-3">
                                @if ($opportunity->functional_area_id != null)
                                    {{ $opportunity->functionalArea->area_name }}
                                @else no data
                                @endif
                            </p>
                        </li>
                        <li class="flex flex-row justify-start items-center mb-2 w-full sm:w-1/2 lg:w-2/6">
                            <img src="{{ asset('/img/member-opportunity/briefcase.svg') }}" alt="website image" />
                            <p class="text-gray-pale text-lg ml-3">
                                @if ($opportunity->contract_term_id != null)
                                    {{ $opportunity->jobShift->job_shift }}
                                @else no data
                                @endif
                            </p>
                        </li>
                        <li class="flex flex-row justify-start items-center mb-2 w-full sm:w-1/2 lg:w-2/6">
                            <img src="{{ asset('/img/member-opportunity/building.svg') }}" alt="website image" />
                            <p class="text-gray-pale text-lg ml-3">
                                @if ($opportunity->industry_id != null)
                                    {{ $opportunity->industry->industry_name }}
                                @else no data
                                @endif
                            </p>
                        </li>
                        <li class="flex flex-row justify-start items-center mb-2  w-full sm:w-1/2 lg:w-2/6">
                            <img src="{{ asset('/img/member-opportunity/language.svg') }}" alt="website image" />
                            <p class="text-gray-pale text-lg ml-3">Language</p>
                        </li>
                    </ul>
                    <div class="border border-gray-pale border-t-0 border-l-0 border-r-0 my-4">
                    </div>
                    <div class="mt-7">
                        <p class="text-white sign-up-form__information--fontSize">
                            {{ $opportunity->description }}
                        </p>
                    </div>
                    <div class="tag-bar mt-7 text-sm">
                        @foreach ($keywords as $keyword)
                            <span
                                class="bg-gray-light1 border border-gray-light1 text-tag-color rounded-full px-3 pb-0.5 inline-block mb-2">team
                                {{ $keyword->keyword_name }}</span>
                        @endforeach
                    </div>
                    <div class="button-bar mt-5">
                        @if ($is_connected == true)
                            <button disabled
                                class="text-lime-orange bg-transparent border border-lime-orange rounded-corner py-2 px-12 mr-4 md:mb-0 mb-3">CONNECTED</button>
                        @else
                            <button
                                class="focus:outline-none text-gray bg-lime-orange text-sm lg:text-lg hover:text-lime-orange hover:bg-transparent border border-lime-orange rounded-corner py-2 px-12 mr-4 md:mb-0 mb-3"
                                onclick="openModalBox('#member-connect-popup')">CONNECT</button>
                        @endif

                        {{-- <button
                            class="focus:outline-none text-gray bg-lime-orange text-sm lg:text-lg hover:text-lime-orange hover:bg-transparent border border-lime-orange rounded-corner py-2 px-5 sm:px-4 mr-4">VIEW
                            FULL DETAILS</button> --}}
                        <button
                            class="focus:outline-none btn-bar text-gray-light bg-smoke text-sm lg:text-lg hover:bg-transparent border border-smoke rounded-corner py-2 px-4 hover:text-lime-orange delete-o-btn mt-3 md:mt-0"
                            onclick="openModalBox('#delete-opportunity-popup')">DELETE</button>
                    </div>
                </div>
            </div>
            <div class="button-bar mt-8">
                <button
                    class="btn-bar focus:outline-none text-gray-light bg-smoke text-sm lg:text-lg hover:bg-transparent border border-smoke rounded-corner py-2 px-4 flex flex-row justify-center items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14"
                        class="back-arrow-svg">
                        <g id="Group_236" data-name="Group 236" transform="translate(34.968 -0.681)">
                            <path id="Path_301" data-name="Path 301"
                                d="M-27.968,14.681a1,1,0,0,1-.707-.293l-6-6a1,1,0,0,1,0-1.414l6-6a1,1,0,0,1,1.414,0,1,1,0,0,1,0,1.414l-5.293,5.293,5.293,5.293a1,1,0,0,1,0,1.414A1,1,0,0,1-27.968,14.681Z"
                                fill="#2f2f2f" />
                            <path id="Path_302" data-name="Path 302"
                                d="M-21.968,8.681h-12a1,1,0,0,1-1-1,1,1,0,0,1,1-1h12a1,1,0,0,1,1,1A1,1,0,0,1-21.968,8.681Z"
                                fill="#2f2f2f" />
                        </g>
                    </svg>
                    <a href="{{ route('candidate.dashboard') }}" class="ml-2">BACK</a>
                </button>
            </div>
        </div>
    </div>

    <!-- Connect -->
    <div class="fixed top-0 w-full h-screen left-0 hidden z-50 bg-black-opacity" id="member-connect-popup">
        <div class="text-center text-white absolute top-1/2 left-1/2 popup-text-box bg-gray-light">
            <div
                class="flex flex-col justify-center items-center popup-text-box__container popup-text-box__container-corporate popup-text-box__container--height pt-10 pb-12 relative">
                <!-- <button class="absolute top-5 right-5 cursor-pointer focus:outline-none" onclick="toggleModalClose('#email-verify')">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <img src="./img/sign-up/close.svg" alt="close modal image">                                                                                                                                                                                                                                                                                                                                                                                </button> -->
                <h1 class="text-lg lg:text-2xl tracking-wide popup-text-box__title mb-4">CONNECT EMPLOYER</h1>
                <p class="text-gray-pale popup-text-box__description connect-employer-text-box">By clicking on "Connect",
                    your Profile & CV will be transmitted to the Corporate Member. </p>
                <p class="text-gray-pale popup-text-box__description mb-4">Do you wish to proceed?</p>
                <div class="button-bar button-bar--width mt-4">
                    <form id="opportunity-connect" action="{{ url('opportunity-connect') }}" method="POST">
                        @csrf
                        <input type="hidden" name="opportunity_id" value="{{ $opportunity->id }}">
                    </form>
                    <button type="submit" form="opportunity-connect"
                        class="btn-bar focus:outline-none text-gray bg-lime-orange text-sm lg:text-lg hover:text-lime-orange hover:bg-transparent border border-lime-orange rounded-corner py-2 px-4 mr-2">CONNECT</button>
                    <button
                        class="btn-bar focus:outline-none text-gray-pale bg-smoke-dark text-sm lg:text-lg hover:bg-transparent border border-smoke-dark rounded-corner py-2 px-4"
                        onclick="toggleModalClose('#member-connect-popup')">CANCEL</button>
                </div>
            </div>
        </div>
    </div>

    <div>
        <input type="hidden" id="connect-success" value="@if (Session::has('status')){{ Session::get('status') }} @endif">
        <button id="connect-success-popup" onclick="openModalBoxSuccess('#member-connect-success-popup')"> </button>
    </div>

    <!-- Success -->
    <div class="fixed top-0 w-full h-screen left-0 hidden z-50 bg-black-opacity" id="member-connect-success-popup">
        <div class="text-center text-white absolute top-1/2 left-1/2 popup-text-box bg-gray-light">
            <div
                class="flex flex-col justify-center items-center popup-text-box__container popup-text-box__container-corporate popup-text-box__container--height pt-10 pb-12 relative">
                <button class="absolute top-5 right-5 cursor-pointer focus:outline-none"
                    onclick="toggleModalClose('#member-connect-success-popup')">
                    <img src="{{ asset('/img/sign-up/close.svg') }}" alt="close modal image">
                </button>
                <h1 class="text-lg lg:text-2xl tracking-wide popup-text-box__title mb-4">SUCCESS</h1>
                <p class="text-gray-pale popup-text-box__description popup-text-box__description--connect-success">Your
                    profile has been sent to
                    <span class="text-lime-orange"> <span>&#60;</span>
                        {{ Session::get('status') }} <span>&gt;</span> </span>
                </p>
            </div>
        </div>
    </div>


    <!-- Delete -->
    <div class="fixed top-0 w-full h-screen left-0 hidden z-50 bg-black-opacity" id="delete-opportunity-popup">
        <div class="text-center text-white absolute top-1/2 left-1/2 popup-text-box bg-gray-light">
            <div
                class="flex flex-col justify-center items-center popup-text-box__container popup-text-box__container-corporate popup-text-box__container--height pt-10 pb-12 relative">
                <!-- <button class="absolute top-5 right-5 cursor-pointer focus:outline-none" onclick="toggleModalClose('#email-verify')">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <img src="./img/sign-up/close.svg" alt="close modal image">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     </button> -->
                <h1 class="text-lg lg:text-2xl tracking-wide popup-text-box__title mb-4">DELETE OPPORTUNITY</h1>
                <p class="text-gray-pale popup-text-box__description connect-employer-text-box">By clicking on 'Confirm',
                    this opportunity will be removed from your dashboard.</p>
                <p class="text-gray-pale popup-text-box__description mb-4">Do you wish to proceed?</p>
                <div class="button-bar button-bar--width mt-4">
                    <form id="opportunity-delete" action="{{ url('opportunity-delete') }}" method="POST">
                        @csrf
                        <input type="hidden" name="opportunity_id" value="{{ $opportunity->id }}">
                    </form>

                    <button type="submit" form="opportunity-delete"
                        class="btn-bar focus:outline-none text-gray bg-lime-orange text-sm lg:text-lg hover:text-lime-orange hover:bg-transparent border border-lime-orange rounded-corner py-2 px-4 mr-2"
                        onclick="toggleModalClose('#delete-opportunity-popup')">CONFIRM</button>
                    <button
                        class="btn-bar focus:outline-none text-gray-pale bg-smoke-dark text-sm lg:text-lg hover:bg-transparent border border-smoke-dark rounded-corner py-2 px-4"
                        onclick="toggleModalClose('#delete-opportunity-popup')">CANCEL</button>
                </div>
            </div>
        </div>
    </div>



@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            var status = $('#connect-success').val();
            if (status) {
                $('#connect-success-popup').click();
            }
        });
    </script>
@endpush
