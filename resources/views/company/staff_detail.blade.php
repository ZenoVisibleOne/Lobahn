@extends('layouts.master')
@section('content')
<div class="mt-28 sm:mt-36 md:mt-20 pt-20 pb-36 bg-gray-light2">
    <div class="m-opportunity-box mx-auto px-64 relative">
        <div class="absolute shopify-image-box staff-profile-div cz-index">
            <img src="./img/dashboard/staff-pic.png" alt="staff pic" class="shopify-image">
        </div>
        <div class="bg-lime-orange flex flex-row items-center letter-spacing-custom m-opportunity-box__title-bar rounded-corner" >
            <div class="m-opportunity-box__title-bar__height percent text-center py-8 relative">
                <p class="text-3xl md:text-4xl lg:text-5xl font-heavy text-gray mb-1">91.3%</p>
                <p class="text-base text-gray-light1">JSR<sup>TM</sup> Ratio</p>
            </div>
            <div class="m-opportunity-box__title-bar__height match-target ml-8 py-11 2xl:py-12">
                <p class="text-lg md:text-xl lg:text-2xl font-heavy text-black">MATCHES YOUR SALARY RANGE</p>
            </div>
        </div>
        <div class="bg-gray-light rounded-corner">
            <div class="match-company-box p-12">
                <div>
                    <span class="text-lg text-gray-light1 mr-4">member_id</span>
                </div>
                <h1 class="text-2xl md:text-3xl lg:text-4xl text-lime-orange mt-4 mb-2">ALEXANDRIA WILSON BRIDGERTON</h1>
                <div class="text-base lg:text-lg text-gray-light1 letter-spacing-custom">
                    <span class="">Connected 24 Oct 2021</span>
                </div>
                <ul class="mt-6 mb-10 text-white mark-yellow xl:text-2xl sm:text-xl text-lg">
                    <li class="mb-4">Label 1: snappy & attractive</li>
                    <li class="mb-4">Label 2: snappy & attractive</li>
                </ul>
                <div class="border border-gray-pale border-t-0 border-l-0 border-r-0 my-4">
                </div>
                <ul class="flex flex-row flex-wrap justify-start items-center xl:w-3/5 w-full my-6">
                    <li class="flex flex-row justify-start items-center mb-2 w-full sm:w-1/2 lg:w-2/6">
                        <img src="./img/member-opportunity/location.svg" alt="website image"/>
                        <p class="text-gray-pale text-lg ml-3">Hong Kong</p>
                    </li>
                    <li class="flex flex-row justify-start items-center mb-2  w-full sm:w-1/2 lg:w-2/6">
                        <img src="./img/member-opportunity/people.svg" alt="website image"/>
                        <p class="text-gray-pale text-lg ml-3">Management Level</p>
                    </li>
                    <li class="flex flex-row justify-start items-center mb-2 w-full sm:w-1/2 lg:w-2/6">
                        <img src="./img/dashboard/function-area.svg" alt="functional area"/>
                        <p class="text-gray-pale text-lg ml-3">Functional Area</p>
                    </li>
                    <li class="flex flex-row justify-start items-center mb-2 w-full sm:w-1/2 lg:w-2/6">
                        <img src="./img/member-opportunity/briefcase.svg" alt="website image"/>
                        <p class="text-gray-pale text-lg ml-3">Full time</p>
                    </li>
                    <li class="flex flex-row justify-start items-center mb-2 w-full sm:w-1/2 lg:w-2/6">
                        <img src="./img/member-opportunity/building.svg" alt="website image"/>
                        <p class="text-gray-pale text-lg ml-3">Industry</p>
                    </li>
                    <li class="flex flex-row justify-start items-center mb-2  w-full sm:w-1/2 lg:w-2/6">
                        <img src="./img/member-opportunity/language.svg" alt="website image"/>
                        <p class="text-gray-pale text-lg ml-3">Language</p>
                    </li>                    
                </ul>
                <div class="border border-gray-pale border-t-0 border-l-0 border-r-0 my-4">
                </div>
                <div class="mt-7">
                    <p class="text-white sign-up-form__information--fontSize" >
                        Brief description of Member. Snappy & attractive. Five lines maximum. Brief description of Member. Snappy & attractive. Five lines maximum. Brief description of Member. Snappy & attractive. Five lines maximum Brief description of Member. Snappy & attractive.
                    </p>
                </div>
                <!-- <div class="my-8 flex flex-col sm:flex-row justify-start items-center">
                    <p class="sign-up-form__information--fontSize text-white">View CV:</p>
                    <a href="#" class="sign-up-form__information--fontSize text-lime-orange hover:text-white mx-2">Chris_Wong_CV_20210819.pdf </a>
                    <img src="./img/dashboard/external-link.svg" alt="external link"/>
                </div> -->
                <div class="mt-8 flex flex-col sm:flex-row button-bar three-button-box sm:flex-wrap">
                    <button class="focus:outline-none btn-bar text-gray bg-lime-orange text-sm lg:text-lg hover:text-lime-orange hover:bg-transparent border border-lime-orange rounded-corner py-2 px-4 mb-4 md:mb-0 sm:mr-4" onclick="openModalBox('#corporate-connect-staff-successful-popup')">CONNECT</button>
                    <button class="focus:outline-none btn-bar text-gray bg-lime-orange text-sm lg:text-lg hover:text-lime-orange hover:bg-transparent border border-lime-orange rounded-corner py-2 px-4 mb-4 md:mb-0 sm:mr-4">VIEW CV</button>
                    <button class="focus:outline-none btn-bar text-smoke-dark bg-gray-pale text-sm lg:text-lg hover:text-lime-orange hover:bg-transparent border border-gray-pale rounded-corner py-2 px-4 mb-4 md:mb-0 sm:mr-4" onclick="openModalBox('#corporate-shortlist-staff-successful-popup')">SHORTLIST</button>
                    <button class="focus:outline-none btn-bar text-gray-light bg-smoke text-sm lg:text-lg hover:bg-transparent border border-smoke rounded-corner py-2 px-4 hover:text-lime-orange">DELETE</button>
                </div> 
            </div>           
        </div>
    </div>
    <div class="m-opportunity-box mx-auto px-64 relative">
        <div class="grid lg:grid-cols-2 mt-3">
            <div class="lg:mr-3">
                <div class="bg-lime-orange py-8 px-5 md:px-10">
                    <h3 class="uppercase font-heavy text-2xl text-black">Employment history</h3>
                </div>
                <div class="bg-gray-light py-3 pl-5 pr-2 md:p-10 md:pr-7">
                    <div class="cor-profile-block md:my-3 ">
                        <div class="grid sm:grid-cols-3 py-5 lg:py-8 mr-3 border-b border-gray-pale">
                            <div class="sm:col-span-2">
                                <p class="text-white font-book text-xl sm:text-2xl">Marketing Guru</p>
                                <span class="text-gray-pale font-book text-body sm:text-21 block">Employer Name</span>
                                <span class="text-gray-pale font-book text-body sm:text-21 block">location</span>
                            </div>
                            <div class="col-span-1 sm:text-right">
                                <span class="text-white font-book text-xl sm:text-2xl">mm/yyyy-Present</span>
                            </div>
                        </div>
                        <div class="grid sm:grid-cols-3 py-5 lg:py-8 mr-3 border-b border-gray-pale">
                            <div class="sm:col-span-2">
                                <p class="text-white font-book text-xl sm:text-2xl">Marketing Guru</p>
                                <span class="text-gray-pale font-book text-body sm:text-21 block">Employer Name</span>
                                <span class="text-gray-pale font-book text-body sm:text-21 block">location</span>
                            </div>
                            <div class="col-span-1 sm:text-right">
                                <span class="text-white font-book text-xl sm:text-2xl">mm/yyyy-Present</span>
                            </div>
                        </div>
                        <div class="grid sm:grid-cols-3 py-5 lg:py-8 mr-3 border-b border-gray-pale">
                            <div class="sm:col-span-2">
                                <p class="text-white font-book text-xl sm:text-2xl">Marketing Guru</p>
                                <span class="text-gray-pale font-book text-body sm:text-21 block">Employer Name</span>
                                <span class="text-gray-pale font-book text-body sm:text-21 block">location</span>
                            </div>
                            <div class="col-span-1 sm:text-right">
                                <span class="text-white font-book text-xl sm:text-2xl">mm/yyyy-Present</span>
                            </div>
                        </div>
                        <div class="grid sm:grid-cols-3 py-5 lg:py-8 mr-3 border-b border-gray-pale">
                            <div class="sm:col-span-2">
                                <p class="text-white font-book text-xl sm:text-2xl">Marketing Guru</p>
                                <span class="text-gray-pale font-book text-body sm:text-21 block">Employer Name</span>
                                <span class="text-gray-pale font-book text-body sm:text-21 block">location</span>
                            </div>
                            <div class="col-span-1 sm:text-right">
                                <span class="text-white font-book text-xl sm:text-2xl">mm/yyyy-Present</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-3 lg:mt-0">
                <div class="bg-lime-orange py-8 px-5 md:px-10">
                    <h3 class="uppercase font-heavy text-2xl text-black">Education</h3>
                </div>
                <div class="bg-gray-light py-3 pl-5 pr-2 md:p-10 md:pr-7">
                    <div class=" cor-profile-block md:my-3">
                        <div class="grid sm:grid-cols-3 py-5 lg:py-8 mr-3 border-b border-gray-pale">
                            <div class="sm:col-span-2">
                                <p class="text-lime-orange font-book text-xl sm:text-2xl">Degree</p>
                                <p class="text-white font-book text-xl sm:text-2xl">Field of study</p>
                                <span class="text-gray-pale font-book text-body sm:text-21 block">School Name</span>
                                <span class="text-gray-pale font-book text-body sm:text-21 block">location</span>
                            </div>
                            <div class="col-span-1 sm:text-right">
                                <span class="text-white font-book text-xl sm:text-2xl">2018</span>
                            </div>
                        </div>
                        <div class="grid sm:grid-cols-3 py-5 lg:py-8 mr-3 border-b border-gray-pale">
                            <div class="sm:col-span-2">
                                <p class="text-lime-orange font-book text-xl sm:text-2xl">Degree</p>
                                <p class="text-white font-book text-xl sm:text-2xl">Field of study</p>
                                <span class="text-gray-pale font-book text-body sm:text-21 block">School Name</span>
                                <span class="text-gray-pale font-book text-body sm:text-21 block">location</span>
                            </div>
                            <div class="col-span-1 sm:text-right">
                                <span class="text-white font-book text-xl sm:text-2xl">2018</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="m-opportunity-box mx-auto px-64 mt-5 relative">
        <button class="focus:outline-none btn-bar uppercase text-gray-light bg-smoke text-sm lg:text-lg hover:bg-transparent border border-smoke rounded-corner py-2 px-4 hover:text-gray">
            <div class="inline-block w-5 stroke-2" style="margin-bottom: -4px;">
                <svg xmlns="http://www.w3.org/2000/svg" className="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M11 17l-5-5m0 0l5-5m-5 5h12" />
                </svg>
            </div>
            <p class="inline-block">BACK</p>
        </button>
    </div>
</div>
<div class="fixed top-0 w-full h-screen left-0 hidden z-20 bg-gray-opacity" id="notifications-popup">   
    <div class="absolute notification-popup popup-text-box bg-gray-light3 px-4">
        <div class="flex flex-col py-8 relative">            
            <div class="flex">
                <button class="px-8 focus:outline-none -mt-2 hidden">
                    <img class=" object-contain m-auto"
                        src="./img/corporate-menu/noti.svg" />
                    <span onclick="showAllNofification()"
                        class="showNotificationMenu ml-1 flex self-center text-gray-light text-lg">12</span>
                </button>
                <p class="text-2xl text-gray font-book pb-3">NOTIFICATIONS</p>
            </div>
           <div class="notification-popup-contents">
            <div class="bg-white rounded-lg px-4 py-4">
                <div class="flex justify-end"><img src="./img/corporate-menu/status.png" /></div>
                <p class="text-base text-gray font-book pb-3">A Member Professional of Lobahn Connect™
                    has
                    connected regarding the following career</p>
                <div class="bg-smoke-light rounded-lg py-4 px-4">
                    <div class="flex justify-between">
                        <div>
                            <p class="text-gray text-base">
                                JavaScript Developer
                            </p>
                            <p class="text-gray-light1 text-base">
                                Lobahn. Ltd
                            </p>
                        </div>
                        <div>
                            <img src="./img/corporate-menu/shop.png" />
                        </div>
                    </div>
                </div>
                <p class="pt-4 text-sm text-gray-light1">a minute ago</p>
            </div>
            <div class="bg-white rounded-lg px-4 py-4 mt-3">
                <div class="flex justify-end"><img src="./img/corporate-menu/status.png" /></div>
                <p class="text-base text-gray font-book pb-3">A Member Professional of Lobahn Connect™
                    has
                    connected regarding the following career</p>
                <div class="bg-smoke-light rounded-lg py-4 px-4">
                    <div class="flex justify-between">
                        <div>
                            <p class="text-gray text-base">
                                JavaScript Developer
                            </p>
                            <p class="text-gray-light1 text-base">
                                Lobahn. Ltd
                            </p>
                        </div>
                        <div>
                            <img src="./img/corporate-menu/shop.png" />
                        </div>
                    </div>
                </div>
                <p class="pt-4 text-sm text-gray-light1">4 hours ago</p>
            </div>
            <div class="bg-white rounded-lg px-4 py-4 mt-3">
                <div class="flex justify-end"><img src="./img/corporate-menu/status.png" /></div>
                <p class="text-base text-gray font-book pb-3">A Member Professional of Lobahn Connect™
                    has
                    connected regarding the following career</p>
                <div class="bg-smoke-light rounded-lg py-4 px-4">
                    <div class="flex justify-between">
                        <div>
                            <p class="text-gray text-base">
                                JavaScript Developer
                            </p>
                            <p class="text-gray-light1 text-base">
                                Lobahn. Ltd
                            </p>
                        </div>
                        <div>
                            <img src="./img/corporate-menu/shop.png" />
                        </div>
                    </div>
                </div>
                <p class="pt-4 text-sm text-gray-light1">a minute ago</p>
            </div>
           </div>
        </div>
    </div> 
</div> 
<div class="fixed top-0 w-full h-screen left-0 hidden z-50 bg-black-opacity" id="corporate-connect-staff-successful-popup">   
    <div class="text-center text-white absolute top-1/2 left-1/2 popup-text-box bg-gray-light">
        <div class="flex flex-col justify-center items-center popup-text-box__container popup-text-box__container-corporate popup-text-box__container--height pt-12 pb-16 relative">
            <button class="absolute top-5 right-5 cursor-pointer focus:outline-none" onclick="toggleModalClose('#corporate-connect-staff-successful-popup')">
                <img src="./img/sign-up/close.svg" alt="close modal image">
            </button>
            <h1 class="text-lg lg:text-2xl tracking-wide popup-text-box__title mb-4">SUCCESS</h1>
            <p class="text-gray-pale popup-text-box__description popup-text-box__description--connect-success">Your invitation to connect has been sent to <span class="text-lime-orange block"> <span>&#60;</span>
                member name <span>&gt;</span> </span></p>
        </div>
    </div>  
</div>
<div class="fixed top-0 w-full h-screen left-0 hidden z-50 bg-black-opacity" id="corporate-shortlist-staff-successful-popup">   
    <div class="text-center text-white absolute top-1/2 left-1/2 popup-text-box bg-gray-light">
        <div class="flex flex-col justify-center items-center popup-text-box__container popup-text-box__container-corporate popup-text-box__container--height pt-12 pb-16 relative">
            <button class="absolute top-5 right-5 cursor-pointer focus:outline-none" onclick="toggleModalClose('#corporate-shortlist-staff-successful-popup')">
                <img src="./img/sign-up/close.svg" alt="close modal image">
            </button>
            <h1 class="text-lg lg:text-2xl tracking-wide popup-text-box__title mb-4">SUCCESS</h1>
            <p class="text-gray-pale popup-text-box__description popup-text-box__description--connect-success"><span class="text-lime-orange"> <span>&#60;</span>
                member name <span>&gt;</span> </span> has been shortlisted</p>
        </div>
    </div>  
</div>   
@endsection