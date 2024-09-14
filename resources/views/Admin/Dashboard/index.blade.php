@extends('layouts.admin')
@section('title')
   Admin Dashboard
@endsection
@section('content')
<!--begin::Toolbar-->
<div class="toolbar py-5 py-lg-15" id="kt_toolbar">
    <!--begin::Container-->
    <div id="kt_toolbar_container" class="container-xxl d-flex flex-stack flex-wrap">
        <!--begin::Title-->
        <h3 class="text-white fw-bolder fs-2qx me-5">Todays’ Agenda</h3>
        <!--begin::Title-->
        <!--begin::Actions-->
        <div class="d-flex align-items-center flex-wrap py-2">
            <!--begin::Search-->
            <div id="kt_header_search" class="d-flex align-items-center w-200px w-lg-250px my-2 me-4 me-lg-6" data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="enter" data-kt-search-layout="menu" data-kt-menu-trigger="auto" data-kt-menu-permanent="true" data-kt-menu-placement="bottom-end">
                <!--begin::Form-->
                <form data-kt-search-element="form" class="search w-100 position-relative" autocomplete="off">
                    <!--begin::Hidden input(Added to disable form autocomplete)-->
                    <input type="hidden" />
                    <!--end::Hidden input-->
                    <!--begin::Icon-->
                    <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                    <span class="svg-icon svg-icon-2 svg-icon-lg-1 svg-icon-white position-absolute top-50 translate-middle-y ms-5">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black" />
                            <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black" />
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                    <!--end::Icon-->
                    <!--begin::Input-->
                    <input type="text" class="form-control ps-15" name="search" value="" placeholder="Search..." data-kt-search-element="input" />
                    <!--end::Input-->
                    <!--begin::Spinner-->
                    <span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5" data-kt-search-element="spinner">
                        <span class="spinner-border h-15px w-15px align-middle text-white"></span>
                    </span>
                    <!--end::Spinner-->
                    <!--begin::Reset-->
                    <span class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-4" data-kt-search-element="clear">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                        <span class="svg-icon svg-icon-2 svg-icon-white svg-icon-lg-1 me-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
                                <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </span>
                    <!--end::Reset-->
                </form>
                <!--end::Form-->
                <!--begin::Menu-->
                <div data-kt-search-element="content" class="menu menu-sub menu-sub-dropdown w-300px w-md-400px py-7 px-7 overflow-hidden">
                    <!--begin::Wrapper-->
                    <div data-kt-search-element="wrapper">
                        <!--begin::Categories-->
                        <div data-kt-search-element="categories" class="d-flex overflow-auto position-relative" data-kt-buttons="true">
                            <!--begin::Category items-->
                            <a class="btn btn-light-primary active rounded-pill me-1 py-2 px-4" data-kt-search-category="all">All</a>
                            <a class="btn btn-light-primary rounded-pill me-1 py-2 px-4" data-kt-search-category="targets">Targets</a>
                            <a class="btn btn-light-primary rounded-pill me-1 py-2 px-4" data-kt-search-category="projects">Projects</a>
                            <a class="btn btn-light-primary rounded-pill me-1 py-2 px-4" data-kt-search-category="users">Users</a>
                            <!--end::Category items-->
                            <!--begin::Preferences toggle-->
                            <div data-kt-search-element="preferences-show" class="btn btn-icon btn-sm btn-active-color-primary ms-auto">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->
                                <span class="svg-icon svg-icon-2x">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="4" fill="black" />
                                        <rect x="11" y="11" width="2.6" height="2.6" rx="1.3" fill="black" />
                                        <rect x="15" y="11" width="2.6" height="2.6" rx="1.3" fill="black" />
                                        <rect x="7" y="11" width="2.6" height="2.6" rx="1.3" fill="black" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                            <!--end::Preferences toggle-->
                        </div>
                        <!--end::Categories-->
                        <!--begin::Separator-->
                        <div class="separator border-gray-200 my-6"></div>
                        <!--end::Separator-->
                        <!--begin::Recently viewed-->
                        <div data-kt-search-element="results" class="d-none">
                            <!--begin::Items-->
                            <div class="scroll-y mh-200px mh-lg-300px my-2 me-n2 pe-2">
                                <!--begin::Category title-->
                                <h3 class="fs-4 fw-bold m-0 pb-5" data-kt-search-element="category-title">Targets</h3>
                                <!--end::Category title-->
                                <!--begin::Item-->
                                <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1" data-kt-search-category="targets">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-30px me-4">
                                        <span class="symbol-label bg-light">
                                            <img class="w-20px h-20px" src="assets/media/svg/brand-logos/volicity-9.svg" alt="" />
                                        </span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Title-->
                                    <div class="fw-bold">
                                        <span class="fs-6 text-gray-800 me-2">Company Rbranding</span>
                                        <span class="badge badge-light">UI Design</span>
                                    </div>
                                    <!--end::Title-->
                                </a>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1" data-kt-search-category="targets">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-30px me-4">
                                        <span class="symbol-label bg-light">
                                            <img class="w-20px h-20px" src="assets/media/svg/brand-logos/tvit.svg" alt="" />
                                        </span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Title-->
                                    <div class="fw-bold">
                                        <span class="fs-6 text-gray-800 me-2">Company Re-branding</span>
                                        <span class="badge badge-light">Web Development</span>
                                    </div>
                                    <!--end::Title-->
                                </a>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1" data-kt-search-category="targets">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-30px me-4">
                                        <span class="symbol-label bg-light">
                                            <img class="w-20px h-20px" src="assets/media/svg/misc/infography.svg" alt="" />
                                        </span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Title-->
                                    <div class="fw-bold">
                                        <span class="fs-6 text-gray-800 me-2">Business Analytics App</span>
                                        <span class="badge badge-light">Administration</span>
                                    </div>
                                    <!--end::Title-->
                                </a>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1" data-kt-search-category="targets">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-30px me-4">
                                        <span class="symbol-label bg-light">
                                            <img class="w-20px h-20px" src="assets/media/svg/brand-logos/atica.svg" alt="" />
                                        </span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Title-->
                                    <div class="fw-bold">
                                        <span class="fs-6 text-gray-800 me-2">5G Mobile Billing</span>
                                        <span class="badge badge-light">Database Design</span>
                                    </div>
                                    <!--end::Title-->
                                </a>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1" data-kt-search-category="targets">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-30px me-4">
                                        <span class="symbol-label bg-light">
                                            <img class="w-20px h-20px" src="assets/media/svg/brand-logos/rgb.svg" alt="" />
                                        </span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Title-->
                                    <div class="fw-bold">
                                        <span class="fs-6 text-gray-800 me-2">UI/UX Conference</span>
                                        <span class="badge badge-light">Server Setup</span>
                                    </div>
                                    <!--end::Title-->
                                </a>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1" data-kt-search-category="targets">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-30px me-4">
                                        <span class="symbol-label bg-light">
                                            <img class="w-20px h-20px" src="assets/media/svg/brand-logos/leaf.svg" alt="" />
                                        </span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Title-->
                                    <div class="fw-bold">
                                        <span class="fs-6 text-gray-800 me-2">EcoLeaf App Launch</span>
                                        <span class="badge badge-light">Marketing</span>
                                    </div>
                                    <!--end::Title-->
                                </a>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1" data-kt-search-category="targets">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-30px me-4">
                                        <span class="symbol-label bg-light">
                                            <img class="w-20px h-20px" src="assets/media/svg/brand-logos/tower.svg" alt="" />
                                        </span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Title-->
                                    <div class="fw-bold">
                                        <span class="fs-6 text-gray-800 me-2">Tower Group Website</span>
                                        <span class="badge badge-light">Google Adwords</span>
                                    </div>
                                    <!--end::Title-->
                                </a>
                                <!--end::Item-->
                                <!--begin::Category title-->
                                <h3 class="fs-4 fw-bold m-0 pt-10 pb-5" data-kt-search-element="category-title">Projects</h3>
                                <!--end::Category title-->
                                <!--begin::Item-->
                                <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1" data-kt-search-category="projects">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-30px me-4">
                                        <span class="symbol-label bg-light-primary">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen005.svg-->
                                            <span class="svg-icon svg-icon-2 svg-icon-primary">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <path opacity="0.3" d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM15 17C15 16.4 14.6 16 14 16H8C7.4 16 7 16.4 7 17C7 17.6 7.4 18 8 18H14C14.6 18 15 17.6 15 17ZM17 12C17 11.4 16.6 11 16 11H8C7.4 11 7 11.4 7 12C7 12.6 7.4 13 8 13H16C16.6 13 17 12.6 17 12ZM17 7C17 6.4 16.6 6 16 6H8C7.4 6 7 6.4 7 7C7 7.6 7.4 8 8 8H16C16.6 8 17 7.6 17 7Z" fill="black" />
                                                    <path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="black" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Title-->
                                    <div class="fw-bold">
                                        <span class="fs-6 text-gray-800">Si-Fi Project by AU Themes</span>
                                        <span class="fs-7 text-muted">#45670</span>
                                    </div>
                                    <!--end::Title-->
                                </a>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1" data-kt-search-category="projects">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-30px me-4">
                                        <span class="symbol-label bg-light-primary">
                                            <!--begin::Svg Icon | path: icons/duotune/finance/fin008.svg-->
                                            <span class="svg-icon svg-icon-2 svg-icon-primary">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <path opacity="0.3" d="M3.20001 5.91897L16.9 3.01895C17.4 2.91895 18 3.219 18.1 3.819L19.2 9.01895L3.20001 5.91897Z" fill="black" />
                                                    <path opacity="0.3" d="M13 13.9189C13 12.2189 14.3 10.9189 16 10.9189H21C21.6 10.9189 22 11.3189 22 11.9189V15.9189C22 16.5189 21.6 16.9189 21 16.9189H16C14.3 16.9189 13 15.6189 13 13.9189ZM16 12.4189C15.2 12.4189 14.5 13.1189 14.5 13.9189C14.5 14.7189 15.2 15.4189 16 15.4189C16.8 15.4189 17.5 14.7189 17.5 13.9189C17.5 13.1189 16.8 12.4189 16 12.4189Z" fill="black" />
                                                    <path d="M13 13.9189C13 12.2189 14.3 10.9189 16 10.9189H21V7.91895C21 6.81895 20.1 5.91895 19 5.91895H3C2.4 5.91895 2 6.31895 2 6.91895V20.9189C2 21.5189 2.4 21.9189 3 21.9189H19C20.1 21.9189 21 21.0189 21 19.9189V16.9189H16C14.3 16.9189 13 15.6189 13 13.9189Z" fill="black" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Title-->
                                    <div class="fw-bold">
                                        <span class="fs-6 text-gray-800">"Create FireStone API" Target</span>
                                        <span class="fs-7 text-muted">#84250</span>
                                    </div>
                                    <!--end::Title-->
                                </a>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1" data-kt-search-category="projects">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-30px me-4">
                                        <span class="symbol-label bg-light-primary">
                                            <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm002.svg-->
                                            <span class="svg-icon svg-icon-2 svg-icon-primary">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <path d="M21 10H13V11C13 11.6 12.6 12 12 12C11.4 12 11 11.6 11 11V10H3C2.4 10 2 10.4 2 11V13H22V11C22 10.4 21.6 10 21 10Z" fill="black" />
                                                    <path opacity="0.3" d="M12 12C11.4 12 11 11.6 11 11V3C11 2.4 11.4 2 12 2C12.6 2 13 2.4 13 3V11C13 11.6 12.6 12 12 12Z" fill="black" />
                                                    <path opacity="0.3" d="M18.1 21H5.9C5.4 21 4.9 20.6 4.8 20.1L3 13H21L19.2 20.1C19.1 20.6 18.6 21 18.1 21ZM13 18V15C13 14.4 12.6 14 12 14C11.4 14 11 14.4 11 15V18C11 18.6 11.4 19 12 19C12.6 19 13 18.6 13 18ZM17 18V15C17 14.4 16.6 14 16 14C15.4 14 15 14.4 15 15V18C15 18.6 15.4 19 16 19C16.6 19 17 18.6 17 18ZM9 18V15C9 14.4 8.6 14 8 14C7.4 14 7 14.4 7 15V18C7 18.6 7.4 19 8 19C8.6 19 9 18.6 9 18Z" fill="black" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Title-->
                                    <div class="fw-bold">
                                        <span class="fs-6 text-gray-800">Reference to "FureStibe" Project FAQ</span>
                                        <span class="fs-7 text-muted">#67945</span>
                                    </div>
                                    <!--end::Title-->
                                </a>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1" data-kt-search-category="projects">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-30px me-4">
                                        <span class="symbol-label bg-light-primary">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen006.svg-->
                                            <span class="svg-icon svg-icon-2 svg-icon-primary">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <path opacity="0.3" d="M22 5V19C22 19.6 21.6 20 21 20H19.5L11.9 12.4C11.5 12 10.9 12 10.5 12.4L3 20C2.5 20 2 19.5 2 19V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5ZM7.5 7C6.7 7 6 7.7 6 8.5C6 9.3 6.7 10 7.5 10C8.3 10 9 9.3 9 8.5C9 7.7 8.3 7 7.5 7Z" fill="black" />
                                                    <path d="M19.1 10C18.7 9.60001 18.1 9.60001 17.7 10L10.7 17H2V19C2 19.6 2.4 20 3 20H21C21.6 20 22 19.6 22 19V12.9L19.1 10Z" fill="black" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Title-->
                                    <div class="fw-bold">
                                        <span class="fs-6 text-gray-800">"Landing UI Design" Project Launch</span>
                                        <span class="fs-7 text-muted">#24005</span>
                                    </div>
                                    <!--end::Title-->
                                </a>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1" data-kt-search-category="projects">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-30px me-4">
                                        <span class="symbol-label bg-light-primary">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen032.svg-->
                                            <span class="svg-icon svg-icon-2 svg-icon-primary">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <rect x="8" y="9" width="3" height="10" rx="1.5" fill="black" />
                                                    <rect opacity="0.5" x="13" y="5" width="3" height="14" rx="1.5" fill="black" />
                                                    <rect x="18" y="11" width="3" height="8" rx="1.5" fill="black" />
                                                    <rect x="3" y="13" width="3" height="6" rx="1.5" fill="black" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Title-->
                                    <div class="fw-bold">
                                        <span class="fs-6 text-gray-800">Shopix Mobile App Planning</span>
                                        <span class="fs-7 text-muted">#45690</span>
                                    </div>
                                    <!--end::Title-->
                                </a>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1" data-kt-search-category="projects">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-30px me-4">
                                        <span class="symbol-label bg-light-primary">
                                            <!--begin::Svg Icon | path: icons/duotune/communication/com012.svg-->
                                            <span class="svg-icon svg-icon-2 svg-icon-primary">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <path opacity="0.3" d="M20 3H4C2.89543 3 2 3.89543 2 5V16C2 17.1046 2.89543 18 4 18H4.5C5.05228 18 5.5 18.4477 5.5 19V21.5052C5.5 22.1441 6.21212 22.5253 6.74376 22.1708L11.4885 19.0077C12.4741 18.3506 13.6321 18 14.8167 18H20C21.1046 18 22 17.1046 22 16V5C22 3.89543 21.1046 3 20 3Z" fill="black" />
                                                    <rect x="6" y="12" width="7" height="2" rx="1" fill="black" />
                                                    <rect x="6" y="7" width="12" height="2" rx="1" fill="black" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Title-->
                                    <div class="fw-bold">
                                        <span class="fs-6 text-gray-800">Finance Monitoring SAAS Discussion</span>
                                        <span class="fs-7 text-muted">#21090</span>
                                    </div>
                                    <!--end::Title-->
                                </a>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1" data-kt-search-category="projects">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-30px me-4">
                                        <span class="symbol-label bg-light-primary">
                                            <!--begin::Svg Icon | path: icons/duotune/communication/com006.svg-->
                                            <span class="svg-icon svg-icon-2 svg-icon-primary">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <path opacity="0.3" d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 7C10.3 7 9 8.3 9 10C9 11.7 10.3 13 12 13C13.7 13 15 11.7 15 10C15 8.3 13.7 7 12 7Z" fill="black" />
                                                    <path d="M12 22C14.6 22 17 21 18.7 19.4C17.9 16.9 15.2 15 12 15C8.8 15 6.09999 16.9 5.29999 19.4C6.99999 21 9.4 22 12 22Z" fill="black" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Title-->
                                    <div class="fw-bold">
                                        <span class="fs-6 text-gray-800">Dashboard Analitics Launch</span>
                                        <span class="fs-7 text-muted">#34560</span>
                                    </div>
                                    <!--end::Title-->
                                </a>
                                <!--end::Item-->
                                <!--begin::Category title-->
                                <h3 class="fs-4 fw-bold m-0 pt-10 pb-5" data-kt-search-element="category-title">Users</h3>
                                <!--end::Category title-->
                                <!--begin::Item-->
                                <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1" data-kt-search-category="users">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-30px me-4">
                                        <img src="assets/media/avatars/150-1.jpg" alt="" />
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Title-->
                                    <div class="fw-bold">
                                        <span class="fs-6 text-gray-800 me-2">Karina Clark</span>
                                        <span class="badge badge-light">Marketing Manager</span>
                                    </div>
                                    <!--end::Title-->
                                </a>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1" data-kt-search-category="users">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-30px me-4">
                                        <img src="assets/media/avatars/150-3.jpg" alt="" />
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Title-->
                                    <div class="fw-bold">
                                        <span class="fs-6 text-gray-800 me-2">Olivia Bold</span>
                                        <span class="badge badge-light">Software Engineer</span>
                                    </div>
                                    <!--end::Title-->
                                </a>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1" data-kt-search-category="users">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-30px me-4">
                                        <img src="assets/media/avatars/150-4.jpg" alt="" />
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Title-->
                                    <div class="fw-bold">
                                        <span class="fs-6 text-gray-800 me-2">Sean Wild</span>
                                        <span class="badge badge-light">Web Developer</span>
                                    </div>
                                    <!--end::Title-->
                                </a>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1" data-kt-search-category="users">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-30px me-4">
                                        <img src="assets/media/avatars/150-6.jpg" alt="" />
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Title-->
                                    <div class="fw-bold">
                                        <span class="fs-6 text-gray-800 me-2">Karina Clark</span>
                                        <span class="badge badge-light">Google Expert</span>
                                    </div>
                                    <!--end::Title-->
                                </a>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1" data-kt-search-category="users">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-30px me-4">
                                        <img src="assets/media/avatars/150-8.jpg" alt="" />
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Title-->
                                    <div class="fw-bold">
                                        <span class="fs-6 text-gray-800 me-2">Ana Clark</span>
                                        <span class="badge badge-light">UI/UX Designer</span>
                                    </div>
                                    <!--end::Title-->
                                </a>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1" data-kt-search-category="users">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-30px me-4">
                                        <img src="assets/media/avatars/150-11.jpg" alt="" />
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Title-->
                                    <div class="fw-bold">
                                        <span class="fs-6 text-gray-800 me-2">Nick Pitola</span>
                                        <span class="badge badge-light">Art Director</span>
                                    </div>
                                    <!--end::Title-->
                                </a>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1" data-kt-search-category="users">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-30px me-4">
                                        <img src="assets/media/avatars/150-12.jpg" alt="" />
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Title-->
                                    <div class="fw-bold">
                                        <span class="fs-6 text-gray-800 me-2">Edward Kulnic</span>
                                        <span class="badge badge-light">System Administrator</span>
                                    </div>
                                    <!--end::Title-->
                                </a>
                                <!--end::Item-->
                            </div>
                            <!--end::Items-->
                        </div>
                        <!--end::Recently viewed-->
                        <!--begin::Recently viewed-->
                        <div data-kt-search-element="recently-viewed">
                            <!--begin::Heading-->
                            <div class="d-flex flex-stack fw-bold">
                                <span class="text-muted fs-5 me-2">Recently Viewed:</span>
                                <!--begin::Clear-->
                                <div data-kt-search-element="recently-viewed-clear" class="btn btn-link fw-6">Clear</div>
                                <!--end::Clear-->
                            </div>
                            <!--end::Heading-->
                            <!--begin::Items-->
                            <div class="scroll-y mh-200px mh-lg-300px my-2 me-n2 pe-2">
                                <!--begin::Item-->
                                <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-30px me-4">
                                        <span class="symbol-label bg-light-primary">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen005.svg-->
                                            <span class="svg-icon svg-icon-2 svg-icon-primary">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <path opacity="0.3" d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM15 17C15 16.4 14.6 16 14 16H8C7.4 16 7 16.4 7 17C7 17.6 7.4 18 8 18H14C14.6 18 15 17.6 15 17ZM17 12C17 11.4 16.6 11 16 11H8C7.4 11 7 11.4 7 12C7 12.6 7.4 13 8 13H16C16.6 13 17 12.6 17 12ZM17 7C17 6.4 16.6 6 16 6H8C7.4 6 7 6.4 7 7C7 7.6 7.4 8 8 8H16C16.6 8 17 7.6 17 7Z" fill="black" />
                                                    <path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="black" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Title-->
                                    <div class="fw-bold">
                                        <span class="fs-6 text-gray-800">Si-Fi Project by AU Themes</span>
                                        <span class="fs-7 text-muted">#45670</span>
                                    </div>
                                    <!--end::Title-->
                                </a>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-30px me-4">
                                        <span class="symbol-label bg-light-primary">
                                            <!--begin::Svg Icon | path: icons/duotune/finance/fin008.svg-->
                                            <span class="svg-icon svg-icon-2 svg-icon-primary">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <path opacity="0.3" d="M3.20001 5.91897L16.9 3.01895C17.4 2.91895 18 3.219 18.1 3.819L19.2 9.01895L3.20001 5.91897Z" fill="black" />
                                                    <path opacity="0.3" d="M13 13.9189C13 12.2189 14.3 10.9189 16 10.9189H21C21.6 10.9189 22 11.3189 22 11.9189V15.9189C22 16.5189 21.6 16.9189 21 16.9189H16C14.3 16.9189 13 15.6189 13 13.9189ZM16 12.4189C15.2 12.4189 14.5 13.1189 14.5 13.9189C14.5 14.7189 15.2 15.4189 16 15.4189C16.8 15.4189 17.5 14.7189 17.5 13.9189C17.5 13.1189 16.8 12.4189 16 12.4189Z" fill="black" />
                                                    <path d="M13 13.9189C13 12.2189 14.3 10.9189 16 10.9189H21V7.91895C21 6.81895 20.1 5.91895 19 5.91895H3C2.4 5.91895 2 6.31895 2 6.91895V20.9189C2 21.5189 2.4 21.9189 3 21.9189H19C20.1 21.9189 21 21.0189 21 19.9189V16.9189H16C14.3 16.9189 13 15.6189 13 13.9189Z" fill="black" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Title-->
                                    <div class="fw-bold">
                                        <span class="fs-6 text-gray-800">"Create FireStone API" Target</span>
                                        <span class="fs-7 text-muted">#84250</span>
                                    </div>
                                    <!--end::Title-->
                                </a>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-30px me-4">
                                        <span class="symbol-label bg-light-primary">
                                            <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm002.svg-->
                                            <span class="svg-icon svg-icon-2 svg-icon-primary">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <path d="M21 10H13V11C13 11.6 12.6 12 12 12C11.4 12 11 11.6 11 11V10H3C2.4 10 2 10.4 2 11V13H22V11C22 10.4 21.6 10 21 10Z" fill="black" />
                                                    <path opacity="0.3" d="M12 12C11.4 12 11 11.6 11 11V3C11 2.4 11.4 2 12 2C12.6 2 13 2.4 13 3V11C13 11.6 12.6 12 12 12Z" fill="black" />
                                                    <path opacity="0.3" d="M18.1 21H5.9C5.4 21 4.9 20.6 4.8 20.1L3 13H21L19.2 20.1C19.1 20.6 18.6 21 18.1 21ZM13 18V15C13 14.4 12.6 14 12 14C11.4 14 11 14.4 11 15V18C11 18.6 11.4 19 12 19C12.6 19 13 18.6 13 18ZM17 18V15C17 14.4 16.6 14 16 14C15.4 14 15 14.4 15 15V18C15 18.6 15.4 19 16 19C16.6 19 17 18.6 17 18ZM9 18V15C9 14.4 8.6 14 8 14C7.4 14 7 14.4 7 15V18C7 18.6 7.4 19 8 19C8.6 19 9 18.6 9 18Z" fill="black" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Title-->
                                    <div class="fw-bold">
                                        <span class="fs-6 text-gray-800">Reference to "FureStibe" Project FAQ</span>
                                        <span class="fs-7 text-muted">#67945</span>
                                    </div>
                                    <!--end::Title-->
                                </a>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-30px me-4">
                                        <span class="symbol-label bg-light-primary">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen006.svg-->
                                            <span class="svg-icon svg-icon-2 svg-icon-primary">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <path opacity="0.3" d="M22 5V19C22 19.6 21.6 20 21 20H19.5L11.9 12.4C11.5 12 10.9 12 10.5 12.4L3 20C2.5 20 2 19.5 2 19V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5ZM7.5 7C6.7 7 6 7.7 6 8.5C6 9.3 6.7 10 7.5 10C8.3 10 9 9.3 9 8.5C9 7.7 8.3 7 7.5 7Z" fill="black" />
                                                    <path d="M19.1 10C18.7 9.60001 18.1 9.60001 17.7 10L10.7 17H2V19C2 19.6 2.4 20 3 20H21C21.6 20 22 19.6 22 19V12.9L19.1 10Z" fill="black" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Title-->
                                    <div class="fw-bold">
                                        <span class="fs-6 text-gray-800">"Landing UI Design" Project Launch</span>
                                        <span class="fs-7 text-muted">#24005</span>
                                    </div>
                                    <!--end::Title-->
                                </a>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-30px me-4">
                                        <span class="symbol-label bg-light-primary">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen032.svg-->
                                            <span class="svg-icon svg-icon-2 svg-icon-primary">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <rect x="8" y="9" width="3" height="10" rx="1.5" fill="black" />
                                                    <rect opacity="0.5" x="13" y="5" width="3" height="14" rx="1.5" fill="black" />
                                                    <rect x="18" y="11" width="3" height="8" rx="1.5" fill="black" />
                                                    <rect x="3" y="13" width="3" height="6" rx="1.5" fill="black" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Title-->
                                    <div class="fw-bold">
                                        <span class="fs-6 text-gray-800">Shopix Mobile App Planning</span>
                                        <span class="fs-7 text-muted">#45690</span>
                                    </div>
                                    <!--end::Title-->
                                </a>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-30px me-4">
                                        <span class="symbol-label bg-light-primary">
                                            <!--begin::Svg Icon | path: icons/duotune/communication/com012.svg-->
                                            <span class="svg-icon svg-icon-2 svg-icon-primary">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <path opacity="0.3" d="M20 3H4C2.89543 3 2 3.89543 2 5V16C2 17.1046 2.89543 18 4 18H4.5C5.05228 18 5.5 18.4477 5.5 19V21.5052C5.5 22.1441 6.21212 22.5253 6.74376 22.1708L11.4885 19.0077C12.4741 18.3506 13.6321 18 14.8167 18H20C21.1046 18 22 17.1046 22 16V5C22 3.89543 21.1046 3 20 3Z" fill="black" />
                                                    <rect x="6" y="12" width="7" height="2" rx="1" fill="black" />
                                                    <rect x="6" y="7" width="12" height="2" rx="1" fill="black" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Title-->
                                    <div class="fw-bold">
                                        <span class="fs-6 text-gray-800">Finance Monitoring SAAS Discussion</span>
                                        <span class="fs-7 text-muted">#21090</span>
                                    </div>
                                    <!--end::Title-->
                                </a>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-30px me-4">
                                        <span class="symbol-label bg-light-primary">
                                            <!--begin::Svg Icon | path: icons/duotune/communication/com006.svg-->
                                            <span class="svg-icon svg-icon-2 svg-icon-primary">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <path opacity="0.3" d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 7C10.3 7 9 8.3 9 10C9 11.7 10.3 13 12 13C13.7 13 15 11.7 15 10C15 8.3 13.7 7 12 7Z" fill="black" />
                                                    <path d="M12 22C14.6 22 17 21 18.7 19.4C17.9 16.9 15.2 15 12 15C8.8 15 6.09999 16.9 5.29999 19.4C6.99999 21 9.4 22 12 22Z" fill="black" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Title-->
                                    <div class="fw-bold">
                                        <span class="fs-6 text-gray-800">Dashboard Analitics Launch</span>
                                        <span class="fs-7 text-muted">#34560</span>
                                    </div>
                                    <!--end::Title-->
                                </a>
                                <!--end::Item-->
                            </div>
                            <!--end::Items-->
                        </div>
                        <!--end::Recently viewed-->
                        <!--begin::Empty-->
                        <div data-kt-search-element="empty" class="text-center d-none">
                            <!--begin::Message-->
                            <div class="text-muted fw-bold fs-5 py-10">No result found</div>
                            <!--end::Message-->
                            <!--begin::Illustration-->
                            <div class="text-center px-4">
                                <img src="assets/media/illustrations/dozzy-1/2.png" alt="" class="w-100 h-200px" />
                            </div>
                            <!--end::Illustration-->
                        </div>
                        <!--end::Empty-->
                    </div>
                    <!--end::Wrapper-->
                    <!--begin::Preferences-->
                    <div data-kt-search-element="preferences" class="d-none">
                        <!--begin::Heading-->
                        <h3 class="fw-bold text-dark pb-10 m-0">Search Preferences</h3>
                        <!--end::Heading-->
                        <!--begin::Input group-->
                        <div class="pb-4 border-bottom">
                            <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid justify-content-between">
                                <span class="form-check-label text-gray-700 fs-5 fw-bold ms-0 me-2">Projects</span>
                                <input class="form-check-input" type="checkbox" value="1" checked="checked" />
                            </label>
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="py-4 border-bottom">
                            <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid justify-content-between">
                                <span class="form-check-label text-gray-700 fs-5 fw-bold ms-0 me-2">Targets</span>
                                <input class="form-check-input" type="checkbox" value="1" checked="checked" />
                            </label>
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="py-4 border-bottom">
                            <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid justify-content-between">
                                <span class="form-check-label text-gray-700 fs-5 fw-bold ms-0 me-2">Affiliate Programs</span>
                                <input class="form-check-input" type="checkbox" value="1" />
                            </label>
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="py-4 border-bottom">
                            <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid justify-content-between">
                                <span class="form-check-label text-gray-700 fs-5 fw-bold ms-0 me-2">Referrals</span>
                                <input class="form-check-input" type="checkbox" value="1" checked="checked" />
                            </label>
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="py-4 border-bottom">
                            <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid justify-content-between">
                                <span class="form-check-label text-gray-700 fs-5 fw-bold ms-0 me-2">Users</span>
                                <input class="form-check-input" type="checkbox" value="1" />
                            </label>
                        </div>
                        <!--end::Input group-->
                        <!--begin::Actions-->
                        <div class="d-flex justify-content-end pt-10">
                            <button type="reset" class="btn btn-white btn-active-light-primary me-2 px-6" data-kt-search-element="preferences-dismiss">Cancel</button>
                            <button type="submit" class="btn btn-primary px-6">Save Changes</button>
                        </div>
                        <!--end::Actions-->
                    </div>
                    <!--end::Preferences-->
                </div>
                <!--end::Menu-->
            </div>
            <!--end::Search-->
            <!--begin::Action-->
            <a href="#" class="btn btn-custom btn-color-white btn-active-color-success my-2 me-2 me-lg-6" data-bs-toggle="modal" data-bs-target="#kt_modal_invite_friends">Invite Friend</a>
            <!--end::Action-->
            <!--begin::Button-->
            <a href="#" class="btn btn-success my-2" tooltip="New App" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">New Goal</a>
            <!--end::Button-->
        </div>
        <!--end::Actions-->
    </div>
    <!--end::Container-->
</div>
<!--end::Toolbar-->
<!--begin::Container-->
<div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
    <!--begin::Post-->
    <div class="content flex-row-fluid" id="kt_content">
        <!--begin::Index-->
        <div class="card card-page">
            <!--begin::Card body-->
            <div class="card-body">
                <!--begin::Row-->
                <div class="row gy-5 g-xl-8">
                    <!--begin::Col-->
                    <div class="col-xxl-6">
                        <!--begin::Table Widget 1-->
                        <div class="card card-xxl-stretch">
                            <!--begin::Header-->
                            <div class="card-header border-0 pt-5 pb-3">
                                <!--begin::Card title-->
                                <h3 class="card-title fw-bolder text-gray-800 fs-2">Leading Partners</h3>
                                <!--end::Card title-->
                                <!--begin::Card toolbar-->
                                <div class="card-toolbar">
                                    <div class="my-1">
                                        <!--begin::Select-->
                                        <select class="form-select fw-bold w-125px" data-control="select2" data-placeholder="Status" data-hide-search="true">
                                            <option value="1" selected="selected">Status</option>
                                            <option value="2">Pending</option>
                                            <option value="3">In Progress</option>
                                            <option value="3">Complete</option>
                                        </select>
                                        <!--end::Select-->
                                    </div>
                                </div>
                                <!--end::Card toolbar-->
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body py-0">
                                <!--begin::Table-->
                                <div class="table-responsive">
                                    <table class="table align-middle table-row-bordered table-row-dashed gy-5" id="kt_table_widget_1">
                                        <!--begin::Table body-->
                                        <tbody>
                                            <!--begin::Table row-->
                                            <tr class="text-start text-gray-400 fw-boldest fs-7 text-uppercase">
                                                <th class="min-w-200px px-0">Authors</th>
                                                <th class="min-w-125px">Progress</th>
                                                <th class="text-end pe-2 min-w-70px">Action</th>
                                            </tr>
                                            <!--end::Table row-->
                                            <!--begin::Table row-->
                                            <tr>
                                                <!--begin::Author=-->
                                                <td class="p-0">
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Logo-->
                                                        <div class="symbol symbol-50px me-2">
                                                            <span class="symbol-label">
                                                                <img alt="" class="w-25px" src="assets/media/svg/brand-logos/aven.svg" />
                                                            </span>
                                                        </div>
                                                        <!--end::Logo-->
                                                        <div class="ps-3">
                                                            <a href="../dist/account/overview.html" class="text-gray-800 fw-boldest fs-5 text-hover-primary mb-1">Brad Simmons</a>
                                                            <span class="text-gray-400 fw-bold d-block">HTML, JS, ReactJS</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <!--end::Author=-->
                                                <!--begin::Progress=-->
                                                <td>
                                                    <div class="d-flex flex-column w-100 me-2 mt-2">
                                                        <span class="text-gray-400 me-2 fw-boldest mb-2">65%</span>
                                                        <div class="progress bg-light-danger w-100 h-5px">
                                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 65%"></div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <!--end::Company=-->
                                                <!--begin::Action=-->
                                                <td class="pe-0 text-end">
                                                    <a href="#" class="btn btn-sm btn-icon btn-color-gray-500 btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-overflow="true" data-kt-menu-placement="bottom-start">
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->
                                                        <span class="svg-icon svg-icon-2x">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="4" fill="black" />
                                                                <rect x="11" y="11" width="2.6" height="2.6" rx="1.3" fill="black" />
                                                                <rect x="15" y="11" width="2.6" height="2.6" rx="1.3" fill="black" />
                                                                <rect x="7" y="11" width="2.6" height="2.6" rx="1.3" fill="black" />
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </a>
                                                    <!--begin::Menu 3-->
                                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3" data-kt-menu="true">
                                                        <!--begin::Heading-->
                                                        <div class="menu-item px-3">
                                                            <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
                                                        </div>
                                                        <!--end::Heading-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">Create Invoice</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link flex-stack px-3">Create Payment
                                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i></a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">Generate Bill</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
                                                            <a href="#" class="menu-link px-3">
                                                                <span class="menu-title">Subscription</span>
                                                                <span class="menu-arrow"></span>
                                                            </a>
                                                            <!--begin::Menu sub-->
                                                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <a href="#" class="menu-link px-3">Plans</a>
                                                                </div>
                                                                <!--end::Menu item-->
                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <a href="#" class="menu-link px-3">Billing</a>
                                                                </div>
                                                                <!--end::Menu item-->
                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <a href="#" class="menu-link px-3">Statements</a>
                                                                </div>
                                                                <!--end::Menu item-->
                                                                <!--begin::Menu separator-->
                                                                <div class="separator my-2"></div>
                                                                <!--end::Menu separator-->
                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <div class="menu-content px-3">
                                                                        <!--begin::Switch-->
                                                                        <label class="form-check form-switch form-check-custom form-check-solid">
                                                                            <!--begin::Input-->
                                                                            <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
                                                                            <!--end::Input-->
                                                                            <!--end::Label-->
                                                                            <span class="form-check-label text-muted fs-6">Recuring</span>
                                                                            <!--end::Label-->
                                                                        </label>
                                                                        <!--end::Switch-->
                                                                    </div>
                                                                </div>
                                                                <!--end::Menu item-->
                                                            </div>
                                                            <!--end::Menu sub-->
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3 my-1">
                                                            <a href="#" class="menu-link px-3">Settings</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                    </div>
                                                    <!--end::Menu 3-->
                                                </td>
                                                <!--end::Action=-->
                                            </tr>
                                            <!--end::Table row-->
                                            <!--begin::Table row-->
                                            <tr>
                                                <!--begin::Author=-->
                                                <td class="p-0">
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Logo-->
                                                        <div class="symbol symbol-50px me-2">
                                                            <span class="symbol-label">
                                                                <img alt="" class="w-25px" src="assets/media/svg/brand-logos/leaf.svg" />
                                                            </span>
                                                        </div>
                                                        <!--end::Logo-->
                                                        <div class="ps-3">
                                                            <a href="../dist/account/overview.html" class="text-gray-800 fw-boldest fs-5 text-hover-primary mb-1">Jessie Clarcson</a>
                                                            <span class="text-gray-400 fw-bold d-block">C#, ASP.NET, MS SQL</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <!--end::Author=-->
                                                <!--begin::Progress=-->
                                                <td>
                                                    <div class="d-flex flex-column w-100 me-2 mt-2">
                                                        <span class="text-gray-400 me-2 fw-boldest mb-2">85%</span>
                                                        <div class="progress bg-light-danger w-100 h-5px">
                                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 85%"></div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <!--end::Company=-->
                                                <!--begin::Action=-->
                                                <td class="pe-0 text-end">
                                                    <a href="#" class="btn btn-sm btn-icon btn-color-gray-500 btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-overflow="true" data-kt-menu-placement="bottom-start">
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->
                                                        <span class="svg-icon svg-icon-2x">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="4" fill="black" />
                                                                <rect x="11" y="11" width="2.6" height="2.6" rx="1.3" fill="black" />
                                                                <rect x="15" y="11" width="2.6" height="2.6" rx="1.3" fill="black" />
                                                                <rect x="7" y="11" width="2.6" height="2.6" rx="1.3" fill="black" />
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </a>
                                                    <!--begin::Menu 3-->
                                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3" data-kt-menu="true">
                                                        <!--begin::Heading-->
                                                        <div class="menu-item px-3">
                                                            <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
                                                        </div>
                                                        <!--end::Heading-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">Create Invoice</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link flex-stack px-3">Create Payment
                                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i></a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">Generate Bill</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
                                                            <a href="#" class="menu-link px-3">
                                                                <span class="menu-title">Subscription</span>
                                                                <span class="menu-arrow"></span>
                                                            </a>
                                                            <!--begin::Menu sub-->
                                                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <a href="#" class="menu-link px-3">Plans</a>
                                                                </div>
                                                                <!--end::Menu item-->
                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <a href="#" class="menu-link px-3">Billing</a>
                                                                </div>
                                                                <!--end::Menu item-->
                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <a href="#" class="menu-link px-3">Statements</a>
                                                                </div>
                                                                <!--end::Menu item-->
                                                                <!--begin::Menu separator-->
                                                                <div class="separator my-2"></div>
                                                                <!--end::Menu separator-->
                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <div class="menu-content px-3">
                                                                        <!--begin::Switch-->
                                                                        <label class="form-check form-switch form-check-custom form-check-solid">
                                                                            <!--begin::Input-->
                                                                            <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
                                                                            <!--end::Input-->
                                                                            <!--end::Label-->
                                                                            <span class="form-check-label text-muted fs-6">Recuring</span>
                                                                            <!--end::Label-->
                                                                        </label>
                                                                        <!--end::Switch-->
                                                                    </div>
                                                                </div>
                                                                <!--end::Menu item-->
                                                            </div>
                                                            <!--end::Menu sub-->
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3 my-1">
                                                            <a href="#" class="menu-link px-3">Settings</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                    </div>
                                                    <!--end::Menu 3-->
                                                </td>
                                                <!--end::Action=-->
                                            </tr>
                                            <!--end::Table row-->
                                            <!--begin::Table row-->
                                            <tr>
                                                <!--begin::Author=-->
                                                <td class="p-0">
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Logo-->
                                                        <div class="symbol symbol-50px me-2">
                                                            <span class="symbol-label">
                                                                <img alt="" class="w-25px" src="assets/media/svg/brand-logos/atica.svg" />
                                                            </span>
                                                        </div>
                                                        <!--end::Logo-->
                                                        <div class="ps-3">
                                                            <a href="../dist/account/overview.html" class="text-gray-800 fw-boldest fs-5 text-hover-primary mb-1">Lebron Wayde</a>
                                                            <span class="text-gray-400 fw-bold d-block">PHP, Laravel, VueJS</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <!--end::Author=-->
                                                <!--begin::Progress=-->
                                                <td>
                                                    <div class="d-flex flex-column w-100 me-2 mt-2">
                                                        <span class="text-gray-400 me-2 fw-boldest mb-2">40%</span>
                                                        <div class="progress bg-light-danger w-100 h-5px">
                                                            <div class="progress-bar bg-success" role="progressbar" style="width: 40%"></div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <!--end::Company=-->
                                                <!--begin::Action=-->
                                                <td class="pe-0 text-end">
                                                    <a href="#" class="btn btn-sm btn-icon btn-color-gray-500 btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-overflow="true" data-kt-menu-placement="bottom-start">
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->
                                                        <span class="svg-icon svg-icon-2x">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="4" fill="black" />
                                                                <rect x="11" y="11" width="2.6" height="2.6" rx="1.3" fill="black" />
                                                                <rect x="15" y="11" width="2.6" height="2.6" rx="1.3" fill="black" />
                                                                <rect x="7" y="11" width="2.6" height="2.6" rx="1.3" fill="black" />
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </a>
                                                    <!--begin::Menu 3-->
                                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3" data-kt-menu="true">
                                                        <!--begin::Heading-->
                                                        <div class="menu-item px-3">
                                                            <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
                                                        </div>
                                                        <!--end::Heading-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">Create Invoice</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link flex-stack px-3">Create Payment
                                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i></a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">Generate Bill</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
                                                            <a href="#" class="menu-link px-3">
                                                                <span class="menu-title">Subscription</span>
                                                                <span class="menu-arrow"></span>
                                                            </a>
                                                            <!--begin::Menu sub-->
                                                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <a href="#" class="menu-link px-3">Plans</a>
                                                                </div>
                                                                <!--end::Menu item-->
                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <a href="#" class="menu-link px-3">Billing</a>
                                                                </div>
                                                                <!--end::Menu item-->
                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <a href="#" class="menu-link px-3">Statements</a>
                                                                </div>
                                                                <!--end::Menu item-->
                                                                <!--begin::Menu separator-->
                                                                <div class="separator my-2"></div>
                                                                <!--end::Menu separator-->
                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <div class="menu-content px-3">
                                                                        <!--begin::Switch-->
                                                                        <label class="form-check form-switch form-check-custom form-check-solid">
                                                                            <!--begin::Input-->
                                                                            <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
                                                                            <!--end::Input-->
                                                                            <!--end::Label-->
                                                                            <span class="form-check-label text-muted fs-6">Recuring</span>
                                                                            <!--end::Label-->
                                                                        </label>
                                                                        <!--end::Switch-->
                                                                    </div>
                                                                </div>
                                                                <!--end::Menu item-->
                                                            </div>
                                                            <!--end::Menu sub-->
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3 my-1">
                                                            <a href="#" class="menu-link px-3">Settings</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                    </div>
                                                    <!--end::Menu 3-->
                                                </td>
                                                <!--end::Action=-->
                                            </tr>
                                            <!--end::Table row-->
                                            <!--begin::Table row-->
                                            <tr>
                                                <!--begin::Author=-->
                                                <td class="p-0">
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Logo-->
                                                        <div class="symbol symbol-50px me-2">
                                                            <span class="symbol-label">
                                                                <img alt="" class="w-25px" src="assets/media/svg/brand-logos/volicity-9.svg" />
                                                            </span>
                                                        </div>
                                                        <!--end::Logo-->
                                                        <div class="ps-3">
                                                            <a href="../dist/account/overview.html" class="text-gray-800 fw-boldest fs-5 text-hover-primary mb-1">Natali Trump</a>
                                                            <span class="text-gray-400 fw-bold d-block">Python, ReactJS</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <!--end::Author=-->
                                                <!--begin::Progress=-->
                                                <td>
                                                    <div class="d-flex flex-column w-100 me-2 mt-2">
                                                        <span class="text-gray-400 me-2 fw-boldest mb-2">71%</span>
                                                        <div class="progress bg-light-danger w-100 h-5px">
                                                            <div class="progress-bar bg-info" role="progressbar" style="width: 71%"></div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <!--end::Company=-->
                                                <!--begin::Action=-->
                                                <td class="pe-0 text-end">
                                                    <a href="#" class="btn btn-sm btn-icon btn-color-gray-500 btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-overflow="true" data-kt-menu-placement="bottom-start">
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->
                                                        <span class="svg-icon svg-icon-2x">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="4" fill="black" />
                                                                <rect x="11" y="11" width="2.6" height="2.6" rx="1.3" fill="black" />
                                                                <rect x="15" y="11" width="2.6" height="2.6" rx="1.3" fill="black" />
                                                                <rect x="7" y="11" width="2.6" height="2.6" rx="1.3" fill="black" />
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </a>
                                                    <!--begin::Menu 3-->
                                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3" data-kt-menu="true">
                                                        <!--begin::Heading-->
                                                        <div class="menu-item px-3">
                                                            <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
                                                        </div>
                                                        <!--end::Heading-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">Create Invoice</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link flex-stack px-3">Create Payment
                                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i></a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">Generate Bill</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
                                                            <a href="#" class="menu-link px-3">
                                                                <span class="menu-title">Subscription</span>
                                                                <span class="menu-arrow"></span>
                                                            </a>
                                                            <!--begin::Menu sub-->
                                                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <a href="#" class="menu-link px-3">Plans</a>
                                                                </div>
                                                                <!--end::Menu item-->
                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <a href="#" class="menu-link px-3">Billing</a>
                                                                </div>
                                                                <!--end::Menu item-->
                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <a href="#" class="menu-link px-3">Statements</a>
                                                                </div>
                                                                <!--end::Menu item-->
                                                                <!--begin::Menu separator-->
                                                                <div class="separator my-2"></div>
                                                                <!--end::Menu separator-->
                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <div class="menu-content px-3">
                                                                        <!--begin::Switch-->
                                                                        <label class="form-check form-switch form-check-custom form-check-solid">
                                                                            <!--begin::Input-->
                                                                            <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
                                                                            <!--end::Input-->
                                                                            <!--end::Label-->
                                                                            <span class="form-check-label text-muted fs-6">Recuring</span>
                                                                            <!--end::Label-->
                                                                        </label>
                                                                        <!--end::Switch-->
                                                                    </div>
                                                                </div>
                                                                <!--end::Menu item-->
                                                            </div>
                                                            <!--end::Menu sub-->
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3 my-1">
                                                            <a href="#" class="menu-link px-3">Settings</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                    </div>
                                                    <!--end::Menu 3-->
                                                </td>
                                                <!--end::Action=-->
                                            </tr>
                                            <!--end::Table row-->
                                            <!--begin::Table row-->
                                            <tr>
                                                <!--begin::Author=-->
                                                <td class="p-0">
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Logo-->
                                                        <div class="symbol symbol-50px me-2">
                                                            <span class="symbol-label">
                                                                <img alt="" class="w-25px" src="assets/media/svg/brand-logos/bebo.svg" />
                                                            </span>
                                                        </div>
                                                        <!--end::Logo-->
                                                        <div class="ps-3">
                                                            <a href="../dist/account/overview.html" class="text-gray-800 fw-boldest fs-5 text-hover-primary mb-1">Carles Puyol</a>
                                                            <span class="text-gray-400 fw-bold d-block">PHP, SQLite, Artisan CLI</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <!--end::Author=-->
                                                <!--begin::Progress=-->
                                                <td>
                                                    <div class="d-flex flex-column w-100 me-2 mt-2">
                                                        <span class="text-gray-400 me-2 fw-boldest mb-2">45%</span>
                                                        <div class="progress bg-light-danger w-100 h-5px">
                                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 45%"></div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <!--end::Company=-->
                                                <!--begin::Action=-->
                                                <td class="pe-0 text-end">
                                                    <a href="#" class="btn btn-sm btn-icon btn-color-gray-500 btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-overflow="true" data-kt-menu-placement="bottom-start">
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->
                                                        <span class="svg-icon svg-icon-2x">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="4" fill="black" />
                                                                <rect x="11" y="11" width="2.6" height="2.6" rx="1.3" fill="black" />
                                                                <rect x="15" y="11" width="2.6" height="2.6" rx="1.3" fill="black" />
                                                                <rect x="7" y="11" width="2.6" height="2.6" rx="1.3" fill="black" />
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </a>
                                                    <!--begin::Menu 3-->
                                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3" data-kt-menu="true">
                                                        <!--begin::Heading-->
                                                        <div class="menu-item px-3">
                                                            <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
                                                        </div>
                                                        <!--end::Heading-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">Create Invoice</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link flex-stack px-3">Create Payment
                                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i></a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">Generate Bill</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
                                                            <a href="#" class="menu-link px-3">
                                                                <span class="menu-title">Subscription</span>
                                                                <span class="menu-arrow"></span>
                                                            </a>
                                                            <!--begin::Menu sub-->
                                                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <a href="#" class="menu-link px-3">Plans</a>
                                                                </div>
                                                                <!--end::Menu item-->
                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <a href="#" class="menu-link px-3">Billing</a>
                                                                </div>
                                                                <!--end::Menu item-->
                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <a href="#" class="menu-link px-3">Statements</a>
                                                                </div>
                                                                <!--end::Menu item-->
                                                                <!--begin::Menu separator-->
                                                                <div class="separator my-2"></div>
                                                                <!--end::Menu separator-->
                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <div class="menu-content px-3">
                                                                        <!--begin::Switch-->
                                                                        <label class="form-check form-switch form-check-custom form-check-solid">
                                                                            <!--begin::Input-->
                                                                            <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
                                                                            <!--end::Input-->
                                                                            <!--end::Label-->
                                                                            <span class="form-check-label text-muted fs-6">Recuring</span>
                                                                            <!--end::Label-->
                                                                        </label>
                                                                        <!--end::Switch-->
                                                                    </div>
                                                                </div>
                                                                <!--end::Menu item-->
                                                            </div>
                                                            <!--end::Menu sub-->
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3 my-1">
                                                            <a href="#" class="menu-link px-3">Settings</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                    </div>
                                                    <!--end::Menu 3-->
                                                </td>
                                                <!--end::Action=-->
                                            </tr>
                                            <!--end::Table row-->
                                        </tbody>
                                        <!--end::Table body-->
                                    </table>
                                </div>
                                <!--end::Table-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Table Widget 1-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-xxl-6">
                        <!--begin::Row-->
                        <div class="row g-5 g-xl-8">
                            <!--begin::Col-->
                            <div class="col-xxl-6">
                                <!--begin::Statistics Widget 1-->
                                <div class="card card-xxl-stretch-50 mb-5 mb-xl-8">
                                    <!--begin::Body-->
                                    <div class="card-body d-flex flex-column justify-content-between p-0">
                                        <!--begin::Hidden-->
                                        <div class="d-flex flex-column px-9 pt-5">
                                            <!--begin::Number-->
                                            <div class="text-success fw-boldest fs-2hx">6.2k</div>
                                            <!--end::Number-->
                                            <!--begin::Description-->
                                            <span class="text-gray-400 fw-bold fs-6">Weekly New Followers</span>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Hidden-->
                                        <!--begin::Chart-->
                                        <div class="statistics-widget-1-chart card-rounded-bottom" data-kt-chart-color="success" style="height: 150px"></div>
                                        <!--end::Chart-->
                                    </div>
                                    <!--end::Body-->
                                </div>
                                <!--end::Statistics Widget 1-->
                                <!--begin::Mixed Widget 1-->
                                <div class="card card-xxl-stretch-50 mb-xxl-8">
                                    <!--begin::Body-->
                                    <div class="card-body pt-5">
                                        <!--begin::Chart-->
                                        <div id="kt_mixed_widget_1_chart" data-kt-height="250" class="mb-n15"></div>
                                        <!--end::Chart-->
                                        <!--begin::Label-->
                                        <span class="badge badge-lg badge-light-warning w-100 text-gray-800 text-start d-flex align-items-center">
                                        <i class="fas fa-exclamation-circle text-warning me-3 fs-3"></i>Only New Users</span>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Body-->
                                </div>
                                <!--end::Mixed Widget 1-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-xxl-6">
                                <!--begin::Mixed Widget 2-->
                                <div class="card card-xxl-stretch-50 mb-5 mb-xl-8">
                                    <!--begin::Body-->
                                    <div class="card-body d-flex flex-column justify-content-between p-0">
                                        <!--begin::Hidden-->
                                        <div class="d-flex flex-column px-9 pt-5">
                                            <!--begin::Number-->
                                            <span class="text-primary fw-boldest fs-2hx">730</span>
                                            <!--end::Number-->
                                            <!--begin::Description-->
                                            <span class="text-gray-400 fw-bold fs-6">My Weekly Targets</span>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Hidden-->
                                        <!--begin::Chart-->
                                        <div id="kt_mixed_widget_2_chart" class="mx-3" data-kt-color="primary" style="height: 175px"></div>
                                        <!--end::Chart-->
                                    </div>
                                </div>
                                <!--end::Mixed Widget 2-->
                                <!--begin::Engage widget 1-->
                                <div class="card card-xxl-stretch-50" style="background-color: #1C53E1">
                                    <!--begin::Card body-->
                                    <div class="card-body d-flex align-items-end p-0 pt-10">
                                        <!--begin::Wrapper-->
                                        <div class="flex-grow-1 ps-9 pb-9">
                                            <!--begin::Items-->
                                            <div class="pt-8">
                                                <!--begin::Item-->
                                                <div class="d-flex align-items-center mb-3">
                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr059.svg-->
                                                    <span class="svg-icon svg-icon-3 svg-icon-white me-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                            <path d="M6.8 15.8C7.3 15.7 7.9 16 8 16.5C8.2 17.4 8.99999 18 9.89999 18H17.9C19 18 19.9 17.1 19.9 16V8C19.9 6.9 19 6 17.9 6H9.89999C8.79999 6 7.89999 6.9 7.89999 8V9.4H5.89999V8C5.89999 5.8 7.69999 4 9.89999 4H17.9C20.1 4 21.9 5.8 21.9 8V16C21.9 18.2 20.1 20 17.9 20H9.89999C8.09999 20 6.5 18.8 6 17.1C6 16.5 6.3 16 6.8 15.8Z" fill="black" />
                                                            <path opacity="0.3" d="M12 9.39999H2L6.3 13.7C6.7 14.1 7.3 14.1 7.7 13.7L12 9.39999Z" fill="black" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                    <span class="fw-bolder fs-7 text-white">Cereate</span>
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex align-items-center mb-3">
                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr059.svg-->
                                                    <span class="svg-icon svg-icon-3 svg-icon-white me-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                            <path d="M6.8 15.8C7.3 15.7 7.9 16 8 16.5C8.2 17.4 8.99999 18 9.89999 18H17.9C19 18 19.9 17.1 19.9 16V8C19.9 6.9 19 6 17.9 6H9.89999C8.79999 6 7.89999 6.9 7.89999 8V9.4H5.89999V8C5.89999 5.8 7.69999 4 9.89999 4H17.9C20.1 4 21.9 5.8 21.9 8V16C21.9 18.2 20.1 20 17.9 20H9.89999C8.09999 20 6.5 18.8 6 17.1C6 16.5 6.3 16 6.8 15.8Z" fill="black" />
                                                            <path opacity="0.3" d="M12 9.39999H2L6.3 13.7C6.7 14.1 7.3 14.1 7.7 13.7L12 9.39999Z" fill="black" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                    <span class="fw-bolder fs-7 text-white">Observe</span>
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex align-items-center mb-5">
                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr059.svg-->
                                                    <span class="svg-icon svg-icon-3 svg-icon-white me-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                            <path d="M6.8 15.8C7.3 15.7 7.9 16 8 16.5C8.2 17.4 8.99999 18 9.89999 18H17.9C19 18 19.9 17.1 19.9 16V8C19.9 6.9 19 6 17.9 6H9.89999C8.79999 6 7.89999 6.9 7.89999 8V9.4H5.89999V8C5.89999 5.8 7.69999 4 9.89999 4H17.9C20.1 4 21.9 5.8 21.9 8V16C21.9 18.2 20.1 20 17.9 20H9.89999C8.09999 20 6.5 18.8 6 17.1C6 16.5 6.3 16 6.8 15.8Z" fill="black" />
                                                            <path opacity="0.3" d="M12 9.39999H2L6.3 13.7C6.7 14.1 7.3 14.1 7.7 13.7L12 9.39999Z" fill="black" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                    <span class="fw-bolder fs-7 text-white">Export PDF</span>
                                                </div>
                                                <!--end::Item-->
                                            </div>
                                            <!--end::Items-->
                                            <!--begin::Link-->
                                            <a href="#" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#kt_modal_new_target">New Target</a>
                                            <!--end::Link-->
                                        </div>
                                        <!--end::Wrapper-->
                                        <img class="mh-200px" alt="" src="assets/media/svg/illustrations/engage.svg" />
                                    </div>
                                    <!--end::Card body-->
                                </div>
                                <!--end::Engage widget 1-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Row-->
                <!--begin::Row-->
                <div class="row g-5 g-xl-8">
                    <!--begin::Col-->
                    <div class="col-xxl-6">
                        <!--begin::List Widget 4-->
                        <div class="card card-xl-stretch mb-5 mb-xl-8">
                            <!--begin::Header-->
                            <div class="card-header align-items-center border-0 mt-5">
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="fw-bolder text-dark fs-2">Folders</span>
                                    <span class="text-gray-400 mt-2 fw-bold fs-6">32 Active Folders</span>
                                </h3>
                                <div class="card-toolbar">
                                    <!--begin::Menu-->
                                    <button type="button" class="btn btn-sm btn-icon btn-icon-primary btn-active-light-primary me-n3" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                                        <span class="svg-icon svg-icon-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="5" y="5" width="5" height="5" rx="1" fill="#000000" />
                                                    <rect x="14" y="5" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
                                                    <rect x="5" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
                                                    <rect x="14" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
                                                </g>
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </button>
                                    <!--begin::Menu 3-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3" data-kt-menu="true">
                                        <!--begin::Heading-->
                                        <div class="menu-item px-3">
                                            <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
                                        </div>
                                        <!--end::Heading-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Create Invoice</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link flex-stack px-3">Create Payment
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i></a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Generate Bill</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
                                            <a href="#" class="menu-link px-3">
                                                <span class="menu-title">Subscription</span>
                                                <span class="menu-arrow"></span>
                                            </a>
                                            <!--begin::Menu sub-->
                                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Plans</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Billing</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Statements</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu separator-->
                                                <div class="separator my-2"></div>
                                                <!--end::Menu separator-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <div class="menu-content px-3">
                                                        <!--begin::Switch-->
                                                        <label class="form-check form-switch form-check-custom form-check-solid">
                                                            <!--begin::Input-->
                                                            <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
                                                            <!--end::Input-->
                                                            <!--end::Label-->
                                                            <span class="form-check-label text-muted fs-6">Recuring</span>
                                                            <!--end::Label-->
                                                        </label>
                                                        <!--end::Switch-->
                                                    </div>
                                                </div>
                                                <!--end::Menu item-->
                                            </div>
                                            <!--end::Menu sub-->
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3 my-1">
                                            <a href="#" class="menu-link px-3">Settings</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu 3-->
                                    <!--end::Menu-->
                                </div>
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body pt-1">
                                <!--begin::Item-->
                                <div class="d-flex flex-stack item-border-hover px-3 py-2 ms-n4 mb-3">
                                    <!--begin::Section-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-40px symbol-circle me-4">
                                            <span class="symbol-label bg-light-primary">
                                                <!--begin::Svg Icon | path: icons/duotune/technology/teh008.svg-->
                                                <span class="svg-icon svg-icon-1 svg-icon-primary">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3" d="M11 6.5C11 9 9 11 6.5 11C4 11 2 9 2 6.5C2 4 4 2 6.5 2C9 2 11 4 11 6.5ZM17.5 2C15 2 13 4 13 6.5C13 9 15 11 17.5 11C20 11 22 9 22 6.5C22 4 20 2 17.5 2ZM6.5 13C4 13 2 15 2 17.5C2 20 4 22 6.5 22C9 22 11 20 11 17.5C11 15 9 13 6.5 13ZM17.5 13C15 13 13 15 13 17.5C13 20 15 22 17.5 22C20 22 22 20 22 17.5C22 15 20 13 17.5 13Z" fill="black" />
                                                        <path d="M17.5 16C17.5 16 17.4 16 17.5 16L16.7 15.3C16.1 14.7 15.7 13.9 15.6 13.1C15.5 12.4 15.5 11.6 15.6 10.8C15.7 9.99999 16.1 9.19998 16.7 8.59998L17.4 7.90002H17.5C18.3 7.90002 19 7.20002 19 6.40002C19 5.60002 18.3 4.90002 17.5 4.90002C16.7 4.90002 16 5.60002 16 6.40002V6.5L15.3 7.20001C14.7 7.80001 13.9 8.19999 13.1 8.29999C12.4 8.39999 11.6 8.39999 10.8 8.29999C9.99999 8.19999 9.20001 7.80001 8.60001 7.20001L7.89999 6.5V6.40002C7.89999 5.60002 7.19999 4.90002 6.39999 4.90002C5.59999 4.90002 4.89999 5.60002 4.89999 6.40002C4.89999 7.20002 5.59999 7.90002 6.39999 7.90002H6.5L7.20001 8.59998C7.80001 9.19998 8.19999 9.99999 8.29999 10.8C8.39999 11.5 8.39999 12.3 8.29999 13.1C8.19999 13.9 7.80001 14.7 7.20001 15.3L6.5 16H6.39999C5.59999 16 4.89999 16.7 4.89999 17.5C4.89999 18.3 5.59999 19 6.39999 19C7.19999 19 7.89999 18.3 7.89999 17.5V17.4L8.60001 16.7C9.20001 16.1 9.99999 15.7 10.8 15.6C11.5 15.5 12.3 15.5 13.1 15.6C13.9 15.7 14.7 16.1 15.3 16.7L16 17.4V17.5C16 18.3 16.7 19 17.5 19C18.3 19 19 18.3 19 17.5C19 16.7 18.3 16 17.5 16Z" fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Title-->
                                        <div class="ps-1 mb-1">
                                            <a href="#" class="fs-5 text-gray-800 text-hover-primary fw-boldest">Project Alice</a>
                                            <div class="text-gray-400 fw-bold">Phase 1 development</div>
                                        </div>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Section-->
                                    <!--begin::Label-->
                                    <span class="badge badge-light rounded-pill fs-7 fw-boldest">43 files</span>
                                    <!--end::Label-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="d-flex flex-stack item-border-hover px-3 py-2 ms-n4 mb-3">
                                    <!--begin::Section-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-40px symbol-circle me-4">
                                            <span class="symbol-label bg-light-danger">
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen044.svg-->
                                                <span class="svg-icon svg-icon-1 svg-icon-danger">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
                                                        <rect x="11" y="14" width="7" height="2" rx="1" transform="rotate(-90 11 14)" fill="black" />
                                                        <rect x="11" y="17" width="2" height="2" rx="1" transform="rotate(-90 11 17)" fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Title-->
                                        <div class="ps-1 mb-1">
                                            <a href="#" class="fs-5 text-gray-800 text-hover-primary fw-boldest">HR Confidential</a>
                                            <div class="text-gray-400 fw-bold">Confidential staff documents</div>
                                        </div>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Section-->
                                    <!--begin::Label-->
                                    <span class="badge badge-light rounded-pill fs-7 fw-boldest">24 files</span>
                                    <!--end::Label-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="d-flex flex-stack item-border-hover px-3 py-2 ms-n4 mb-3">
                                    <!--begin::Section-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-40px symbol-circle me-4">
                                            <span class="symbol-label bg-light-success">
                                                <!--begin::Svg Icon | path: icons/duotune/files/fil023.svg-->
                                                <span class="svg-icon svg-icon-1 svg-icon-success">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3" d="M5 15C3.3 15 2 13.7 2 12C2 10.3 3.3 9 5 9H5.10001C5.00001 8.7 5 8.3 5 8C5 5.2 7.2 3 10 3C11.9 3 13.5 4 14.3 5.5C14.8 5.2 15.4 5 16 5C17.7 5 19 6.3 19 8C19 8.4 18.9 8.7 18.8 9C18.9 9 18.9 9 19 9C20.7 9 22 10.3 22 12C22 13.7 20.7 15 19 15H5ZM5 12.6H13L9.7 9.29999C9.3 8.89999 8.7 8.89999 8.3 9.29999L5 12.6Z" fill="black" />
                                                        <path d="M17 17.4V12C17 11.4 16.6 11 16 11C15.4 11 15 11.4 15 12V17.4H17Z" fill="black" />
                                                        <path opacity="0.3" d="M12 17.4H20L16.7 20.7C16.3 21.1 15.7 21.1 15.3 20.7L12 17.4Z" fill="black" />
                                                        <path d="M8 12.6V18C8 18.6 8.4 19 9 19C9.6 19 10 18.6 10 18V12.6H8Z" fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Title-->
                                        <div class="ps-1 mb-1">
                                            <a href="#" class="fs-5 text-gray-800 text-hover-primary fw-boldest">Project Rider</a>
                                            <div class="text-gray-400 fw-bold">New frontend admin theme</div>
                                        </div>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Section-->
                                    <!--begin::Label-->
                                    <span class="badge badge-light rounded-pill fs-7 fw-boldest">75 files</span>
                                    <!--end::Label-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="d-flex flex-stack item-border-hover px-3 py-2 ms-n4 mb-3">
                                    <!--begin::Section-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-40px symbol-circle me-4">
                                            <span class="symbol-label bg-light-info">
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen006.svg-->
                                                <span class="svg-icon svg-icon-1 svg-icon-info">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3" d="M22 5V19C22 19.6 21.6 20 21 20H19.5L11.9 12.4C11.5 12 10.9 12 10.5 12.4L3 20C2.5 20 2 19.5 2 19V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5ZM7.5 7C6.7 7 6 7.7 6 8.5C6 9.3 6.7 10 7.5 10C8.3 10 9 9.3 9 8.5C9 7.7 8.3 7 7.5 7Z" fill="black" />
                                                        <path d="M19.1 10C18.7 9.60001 18.1 9.60001 17.7 10L10.7 17H2V19C2 19.6 2.4 20 3 20H21C21.6 20 22 19.6 22 19V12.9L19.1 10Z" fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Title-->
                                        <div class="ps-1 mb-1">
                                            <a href="#" class="fs-5 text-gray-800 text-hover-primary fw-boldest">Banner Assets</a>
                                            <div class="text-gray-400 fw-bold">Collection of banner images</div>
                                        </div>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Section-->
                                    <!--begin::Label-->
                                    <span class="badge badge-light rounded-pill fs-7 fw-boldest">16 files</span>
                                    <!--end::Label-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="d-flex flex-stack item-border-hover px-3 py-2 ms-n4 mb-6">
                                    <!--begin::Section-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-40px symbol-circle me-4">
                                            <span class="symbol-label bg-light-warning">
                                                <!--begin::Svg Icon | path: icons/duotune/art/art002.svg-->
                                                <span class="svg-icon svg-icon-1 svg-icon-warning">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                                                        <path opacity="0.3" d="M8.9 21L7.19999 22.6999C6.79999 23.0999 6.2 23.0999 5.8 22.6999L4.1 21H8.9ZM4 16.0999L2.3 17.8C1.9 18.2 1.9 18.7999 2.3 19.1999L4 20.9V16.0999ZM19.3 9.1999L15.8 5.6999C15.4 5.2999 14.8 5.2999 14.4 5.6999L9 11.0999V21L19.3 10.6999C19.7 10.2999 19.7 9.5999 19.3 9.1999Z" fill="black" />
                                                        <path d="M21 15V20C21 20.6 20.6 21 20 21H11.8L18.8 14H20C20.6 14 21 14.4 21 15ZM10 21V4C10 3.4 9.6 3 9 3H4C3.4 3 3 3.4 3 4V21C3 21.6 3.4 22 4 22H9C9.6 22 10 21.6 10 21ZM7.5 18.5C7.5 19.1 7.1 19.5 6.5 19.5C5.9 19.5 5.5 19.1 5.5 18.5C5.5 17.9 5.9 17.5 6.5 17.5C7.1 17.5 7.5 17.9 7.5 18.5Z" fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Title-->
                                        <div class="ps-1 mb-1">
                                            <a href="#" class="fs-5 text-gray-800 text-hover-primary fw-boldest">Icon Assets</a>
                                            <div class="text-gray-400 fw-bold">Collection of SVG icons</div>
                                        </div>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Section-->
                                    <!--begin::Label-->
                                    <span class="badge badge-light rounded-pill fs-7 fw-boldest">64 files</span>
                                    <!--end::Label-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Alert-->
                                <div class="rounded border border-primary bg-light-primary border-dashed px-6 py-5">
                                    <a href="#" class="link-primary fw-bolder fs-6 me-1">Intive New .NET Collaborators</a>
                                    <span class="text-gray-800 fw-bold fs-6">to creating great outstanding business to business .jsp modular class outstanding scripts</span>
                                </div>
                                <!--end::Alert-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::List Widget 4-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-xxl-6">
                        <!--begin::List Widget 5-->
                        <div class="card card-xl-stretch mb-5 mb-xl-8">
                            <!--begin::Header-->
                            <div class="card-header border-0 pt-5">
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bolder text-dark">Trends</span>
                                    <span class="text-muted mt-1 fw-bold fs-7">Latest tech trends</span>
                                </h3>
                                <div class="card-toolbar">
                                    <!--begin::Menu-->
                                    <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                                        <span class="svg-icon svg-icon-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="5" y="5" width="5" height="5" rx="1" fill="#000000" />
                                                    <rect x="14" y="5" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
                                                    <rect x="5" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
                                                    <rect x="14" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
                                                </g>
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </button>
                                    <!--begin::Menu 3-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3" data-kt-menu="true">
                                        <!--begin::Heading-->
                                        <div class="menu-item px-3">
                                            <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
                                        </div>
                                        <!--end::Heading-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Create Invoice</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link flex-stack px-3">Create Payment
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i></a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Generate Bill</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
                                            <a href="#" class="menu-link px-3">
                                                <span class="menu-title">Subscription</span>
                                                <span class="menu-arrow"></span>
                                            </a>
                                            <!--begin::Menu sub-->
                                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Plans</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Billing</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Statements</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu separator-->
                                                <div class="separator my-2"></div>
                                                <!--end::Menu separator-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <div class="menu-content px-3">
                                                        <!--begin::Switch-->
                                                        <label class="form-check form-switch form-check-custom form-check-solid">
                                                            <!--begin::Input-->
                                                            <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
                                                            <!--end::Input-->
                                                            <!--end::Label-->
                                                            <span class="form-check-label text-muted fs-6">Recuring</span>
                                                            <!--end::Label-->
                                                        </label>
                                                        <!--end::Switch-->
                                                    </div>
                                                </div>
                                                <!--end::Menu item-->
                                            </div>
                                            <!--end::Menu sub-->
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3 my-1">
                                            <a href="#" class="menu-link px-3">Settings</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu 3-->
                                    <!--end::Menu-->
                                </div>
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body pt-5">
                                <!--begin::Item-->
                                <div class="d-flex align-items-sm-center mb-7">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-circle symbol-50px me-5">
                                        <span class="symbol-label">
                                            <img src="assets/media/svg/brand-logos/plurk.svg" class="h-50 align-self-center" alt="" />
                                        </span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Section-->
                                    <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                        <div class="flex-grow-1 me-2">
                                            <a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bolder">Top Authors</a>
                                            <span class="text-muted fw-bold d-block fs-7">Mark, Rowling, Esther</span>
                                        </div>
                                        <span class="badge badge-light fw-bolder my-2">+82$</span>
                                    </div>
                                    <!--end::Section-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="d-flex align-items-sm-center mb-7">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-circle symbol-50px me-5">
                                        <span class="symbol-label">
                                            <img src="assets/media/svg/brand-logos/telegram.svg" class="h-50 align-self-center" alt="" />
                                        </span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Section-->
                                    <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                        <div class="flex-grow-1 me-2">
                                            <a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bolder">Popular Authors</a>
                                            <span class="text-muted fw-bold d-block fs-7">Randy, Steve, Mike</span>
                                        </div>
                                        <span class="badge badge-light fw-bolder my-2">+280$</span>
                                    </div>
                                    <!--end::Section-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="d-flex align-items-sm-center mb-7">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-circle symbol-50px me-5">
                                        <span class="symbol-label">
                                            <img src="assets/media/svg/brand-logos/vimeo.svg" class="h-50 align-self-center" alt="" />
                                        </span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Section-->
                                    <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                        <div class="flex-grow-1 me-2">
                                            <a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bolder">New Users</a>
                                            <span class="text-muted fw-bold d-block fs-7">John, Pat, Jimmy</span>
                                        </div>
                                        <span class="badge badge-light fw-bolder my-2">+4500$</span>
                                    </div>
                                    <!--end::Section-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="d-flex align-items-sm-center mb-7">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-circle symbol-50px me-5">
                                        <span class="symbol-label">
                                            <img src="assets/media/svg/brand-logos/bebo.svg" class="h-50 align-self-center" alt="" />
                                        </span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Section-->
                                    <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                        <div class="flex-grow-1 me-2">
                                            <a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bolder">Active Customers</a>
                                            <span class="text-muted fw-bold d-block fs-7">Mark, Rowling, Esther</span>
                                        </div>
                                        <span class="badge badge-light fw-bolder my-2">+4500$</span>
                                    </div>
                                    <!--end::Section-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="d-flex align-items-sm-center mb-7">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-circle symbol-50px me-5">
                                        <span class="symbol-label">
                                            <img src="assets/media/svg/brand-logos/kickstarter.svg" class="h-50 align-self-center" alt="" />
                                        </span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Section-->
                                    <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                        <div class="flex-grow-1 me-2">
                                            <a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bolder">Bestseller Theme</a>
                                            <span class="text-muted fw-bold d-block fs-7">Disco, Retro, Sports</span>
                                        </div>
                                        <span class="badge badge-light fw-bolder my-2">+4500$</span>
                                    </div>
                                    <!--end::Section-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="d-flex align-items-sm-center">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-circle symbol-50px me-5">
                                        <span class="symbol-label">
                                            <img src="assets/media/svg/brand-logos/fox-hub.svg" class="h-50 align-self-center" alt="" />
                                        </span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Section-->
                                    <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                        <div class="flex-grow-1 me-2">
                                            <a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bolder">Fox Broker App</a>
                                            <span class="text-muted fw-bold d-block fs-7">Finance, Corporate, Apps</span>
                                        </div>
                                        <span class="badge badge-light fw-bolder my-2">+4500$</span>
                                    </div>
                                    <!--end::Section-->
                                </div>
                                <!--end::Item-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::List Widget 5-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Row-->
                <!--begin::Calendar Widget 1-->
                <div class="card card-xxl-stretch">
                    <!--begin::Card header-->
                    <div class="card-header">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bolder text-dark">My Calendar</span>
                            <span class="text-muted mt-1 fw-bold fs-7">Preview monthly events</span>
                        </h3>
                        <div class="card-toolbar">
                            <a href="#" class="btn btn-primary">Manage Calendar</a>
                        </div>
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body">
                        <!--begin::Calendar-->
                        <div id="kt_calendar_widget_1"></div>
                        <!--end::Calendar-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Calendar Widget 1-->
                <!--begin::Modals-->
                <!--begin::Modal - New Product-->
                <div class="modal fade" id="kt_modal_add_event" tabindex="-1" aria-hidden="true">
                    <!--begin::Modal dialog-->
                    <div class="modal-dialog modal-dialog-centered mw-650px">
                        <!--begin::Modal content-->
                        <div class="modal-content">
                            <!--begin::Form-->
                            <form class="form" action="#" id="kt_modal_add_event_form">
                                <!--begin::Modal header-->
                                <div class="modal-header">
                                    <!--begin::Modal title-->
                                    <h2 class="fw-bolder" data-kt-calendar="title">Add Event</h2>
                                    <!--end::Modal title-->
                                    <!--begin::Close-->
                                    <div class="btn btn-icon btn-sm btn-active-icon-primary" id="kt_modal_add_event_close">
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                        <span class="svg-icon svg-icon-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
                                                <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </div>
                                    <!--end::Close-->
                                </div>
                                <!--end::Modal header-->
                                <!--begin::Modal body-->
                                <div class="modal-body py-10 px-lg-17">
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-9">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold required mb-2">Event Name</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" class="form-control form-control-solid" placeholder="" name="calendar_event_name" />
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-9">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold mb-2">Event Description</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" class="form-control form-control-solid" placeholder="" name="calendar_event_description" />
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-9">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold mb-2">Event Location</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" class="form-control form-control-solid" placeholder="" name="calendar_event_location" />
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-9">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="" id="kt_calendar_datepicker_allday" />
                                            <span class="form-check-label fw-bold" for="kt_calendar_datepicker_allday">All Day</span>
                                        </label>
                                        <!--end::Checkbox-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="row row-cols-lg-2 g-10">
                                        <div class="col">
                                            <div class="fv-row mb-9">
                                                <!--begin::Label-->
                                                <label class="fs-6 fw-bold mb-2 required">Event Start Date</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input class="form-control form-control-solid" name="calendar_event_start_date" placeholder="Pick a start date" id="kt_calendar_datepicker_start_date" />
                                                <!--end::Input-->
                                            </div>
                                        </div>
                                        <div class="col" data-kt-calendar="datepicker">
                                            <div class="fv-row mb-9">
                                                <!--begin::Label-->
                                                <label class="fs-6 fw-bold mb-2">Event Start Time</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input class="form-control form-control-solid" name="calendar_event_start_time" placeholder="Pick a start time" id="kt_calendar_datepicker_start_time" />
                                                <!--end::Input-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="row row-cols-lg-2 g-10">
                                        <div class="col">
                                            <div class="fv-row mb-9">
                                                <!--begin::Label-->
                                                <label class="fs-6 fw-bold mb-2 required">Event End Date</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input class="form-control form-control-solid" name="calendar_event_end_date" placeholder="Pick a end date" id="kt_calendar_datepicker_end_date" />
                                                <!--end::Input-->
                                            </div>
                                        </div>
                                        <div class="col" data-kt-calendar="datepicker">
                                            <div class="fv-row mb-9">
                                                <!--begin::Label-->
                                                <label class="fs-6 fw-bold mb-2">Event End Time</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input class="form-control form-control-solid" name="calendar_event_end_time" placeholder="Pick a end time" id="kt_calendar_datepicker_end_time" />
                                                <!--end::Input-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Input group-->
                                </div>
                                <!--end::Modal body-->
                                <!--begin::Modal footer-->
                                <div class="modal-footer flex-center">
                                    <!--begin::Button-->
                                    <button type="reset" id="kt_modal_add_event_cancel" class="btn btn-light me-3">Cancel</button>
                                    <!--end::Button-->
                                    <!--begin::Button-->
                                    <button type="button" id="kt_modal_add_event_submit" class="btn btn-primary">
                                        <span class="indicator-label">Submit</span>
                                        <span class="indicator-progress">Please wait...
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                    </button>
                                    <!--end::Button-->
                                </div>
                                <!--end::Modal footer-->
                            </form>
                            <!--end::Form-->
                        </div>
                    </div>
                </div>
                <!--end::Modal - New Product-->
                <!--begin::Modal - New Product-->
                <div class="modal fade" id="kt_modal_view_event" tabindex="-1" aria-hidden="true">
                    <!--begin::Modal dialog-->
                    <div class="modal-dialog modal-dialog-centered mw-650px">
                        <!--begin::Modal content-->
                        <div class="modal-content">
                            <!--begin::Modal header-->
                            <div class="modal-header border-0 justify-content-end">
                                <!--begin::Edit-->
                                <div class="btn btn-icon btn-sm btn-color-gray-400 btn-active-icon-primary me-2" data-bs-toggle="tooltip" data-bs-dismiss="click" title="Edit Event" id="kt_modal_view_event_edit">
                                    <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                    <span class="svg-icon svg-icon-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="black" />
                                            <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="black" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </div>
                                <!--end::Edit-->
                                <!--begin::Edit-->
                                <div class="btn btn-icon btn-sm btn-color-gray-400 btn-active-icon-danger me-2" data-bs-toggle="tooltip" data-bs-dismiss="click" title="Delete Event" id="kt_modal_view_event_delete">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                                    <span class="svg-icon svg-icon-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="black" />
                                            <path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="black" />
                                            <path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="black" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </div>
                                <!--end::Edit-->
                                <!--begin::Close-->
                                <div class="btn btn-icon btn-sm btn-color-gray-500 btn-active-icon-primary" data-bs-toggle="tooltip" title="Hide Event" data-bs-dismiss="modal">
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                    <span class="svg-icon svg-icon-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
                                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </div>
                                <!--end::Close-->
                            </div>
                            <!--end::Modal header-->
                            <!--begin::Modal body-->
                            <div class="modal-body pt-0 pb-20 px-lg-17">
                                <!--begin::Row-->
                                <div class="d-flex">
                                    <!--begin::Icon-->
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                                    <span class="svg-icon svg-icon-1 svg-icon-muted me-5">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path opacity="0.3" d="M21 22H3C2.4 22 2 21.6 2 21V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5V21C22 21.6 21.6 22 21 22Z" fill="black" />
                                            <path d="M6 6C5.4 6 5 5.6 5 5V3C5 2.4 5.4 2 6 2C6.6 2 7 2.4 7 3V5C7 5.6 6.6 6 6 6ZM11 5V3C11 2.4 10.6 2 10 2C9.4 2 9 2.4 9 3V5C9 5.6 9.4 6 10 6C10.6 6 11 5.6 11 5ZM15 5V3C15 2.4 14.6 2 14 2C13.4 2 13 2.4 13 3V5C13 5.6 13.4 6 14 6C14.6 6 15 5.6 15 5ZM19 5V3C19 2.4 18.6 2 18 2C17.4 2 17 2.4 17 3V5C17 5.6 17.4 6 18 6C18.6 6 19 5.6 19 5Z" fill="black" />
                                            <path d="M8.8 13.1C9.2 13.1 9.5 13 9.7 12.8C9.9 12.6 10.1 12.3 10.1 11.9C10.1 11.6 10 11.3 9.8 11.1C9.6 10.9 9.3 10.8 9 10.8C8.8 10.8 8.59999 10.8 8.39999 10.9C8.19999 11 8.1 11.1 8 11.2C7.9 11.3 7.8 11.4 7.7 11.6C7.6 11.8 7.5 11.9 7.5 12.1C7.5 12.2 7.4 12.2 7.3 12.3C7.2 12.4 7.09999 12.4 6.89999 12.4C6.69999 12.4 6.6 12.3 6.5 12.2C6.4 12.1 6.3 11.9 6.3 11.7C6.3 11.5 6.4 11.3 6.5 11.1C6.6 10.9 6.8 10.7 7 10.5C7.2 10.3 7.49999 10.1 7.89999 10C8.29999 9.90003 8.60001 9.80003 9.10001 9.80003C9.50001 9.80003 9.80001 9.90003 10.1 10C10.4 10.1 10.7 10.3 10.9 10.4C11.1 10.5 11.3 10.8 11.4 11.1C11.5 11.4 11.6 11.6 11.6 11.9C11.6 12.3 11.5 12.6 11.3 12.9C11.1 13.2 10.9 13.5 10.6 13.7C10.9 13.9 11.2 14.1 11.4 14.3C11.6 14.5 11.8 14.7 11.9 15C12 15.3 12.1 15.5 12.1 15.8C12.1 16.2 12 16.5 11.9 16.8C11.8 17.1 11.5 17.4 11.3 17.7C11.1 18 10.7 18.2 10.3 18.3C9.9 18.4 9.5 18.5 9 18.5C8.5 18.5 8.1 18.4 7.7 18.2C7.3 18 7 17.8 6.8 17.6C6.6 17.4 6.4 17.1 6.3 16.8C6.2 16.5 6.10001 16.3 6.10001 16.1C6.10001 15.9 6.2 15.7 6.3 15.6C6.4 15.5 6.6 15.4 6.8 15.4C6.9 15.4 7.00001 15.4 7.10001 15.5C7.20001 15.6 7.3 15.6 7.3 15.7C7.5 16.2 7.7 16.6 8 16.9C8.3 17.2 8.6 17.3 9 17.3C9.2 17.3 9.5 17.2 9.7 17.1C9.9 17 10.1 16.8 10.3 16.6C10.5 16.4 10.5 16.1 10.5 15.8C10.5 15.3 10.4 15 10.1 14.7C9.80001 14.4 9.50001 14.3 9.10001 14.3C9.00001 14.3 8.9 14.3 8.7 14.3C8.5 14.3 8.39999 14.3 8.39999 14.3C8.19999 14.3 7.99999 14.2 7.89999 14.1C7.79999 14 7.7 13.8 7.7 13.7C7.7 13.5 7.79999 13.4 7.89999 13.2C7.99999 13 8.2 13 8.5 13H8.8V13.1ZM15.3 17.5V12.2C14.3 13 13.6 13.3 13.3 13.3C13.1 13.3 13 13.2 12.9 13.1C12.8 13 12.7 12.8 12.7 12.6C12.7 12.4 12.8 12.3 12.9 12.2C13 12.1 13.2 12 13.6 11.8C14.1 11.6 14.5 11.3 14.7 11.1C14.9 10.9 15.2 10.6 15.5 10.3C15.8 10 15.9 9.80003 15.9 9.70003C15.9 9.60003 16.1 9.60004 16.3 9.60004C16.5 9.60004 16.7 9.70003 16.8 9.80003C16.9 9.90003 17 10.2 17 10.5V17.2C17 18 16.7 18.4 16.2 18.4C16 18.4 15.8 18.3 15.6 18.2C15.4 18.1 15.3 17.8 15.3 17.5Z" fill="black" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                    <!--end::Icon-->
                                    <div class="mb-9">
                                        <!--begin::Event name-->
                                        <div class="d-flex align-items-center mb-2">
                                            <span class="fs-3 fw-bolder me-3" data-kt-calendar="event_name"></span>
                                            <span class="badge badge-light-success" data-kt-calendar="all_day"></span>
                                        </div>
                                        <!--end::Event name-->
                                        <!--begin::Event description-->
                                        <div class="fs-6" data-kt-calendar="event_description"></div>
                                        <!--end::Event description-->
                                    </div>
                                </div>
                                <!--end::Row-->
                                <!--begin::Row-->
                                <div class="d-flex align-items-center mb-2">
                                    <!--begin::Icon-->
                                    <!--begin::Svg Icon | path: icons/duotune/abstract/abs050.svg-->
                                    <span class="svg-icon svg-icon-1 svg-icon-success me-5">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <circle fill="#000000" cx="12" cy="12" r="8" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                    <!--end::Icon-->
                                    <!--begin::Event start date/time-->
                                    <div class="fs-6">
                                        <span class="fw-bolder">Starts</span>
                                        <span data-kt-calendar="event_start_date"></span>
                                    </div>
                                    <!--end::Event start date/time-->
                                </div>
                                <!--end::Row-->
                                <!--begin::Row-->
                                <div class="d-flex align-items-center mb-9">
                                    <!--begin::Icon-->
                                    <!--begin::Svg Icon | path: icons/duotune/abstract/abs050.svg-->
                                    <span class="svg-icon svg-icon-1 svg-icon-danger me-5">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <circle fill="#000000" cx="12" cy="12" r="8" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                    <!--end::Icon-->
                                    <!--begin::Event end date/time-->
                                    <div class="fs-6">
                                        <span class="fw-bolder">Ends</span>
                                        <span data-kt-calendar="event_end_date"></span>
                                    </div>
                                    <!--end::Event end date/time-->
                                </div>
                                <!--end::Row-->
                                <!--begin::Row-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Icon-->
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen018.svg-->
                                    <span class="svg-icon svg-icon-1 svg-icon-muted me-5">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path opacity="0.3" d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z" fill="black" />
                                            <path d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z" fill="black" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                    <!--end::Icon-->
                                    <!--begin::Event location-->
                                    <div class="fs-6" data-kt-calendar="event_location"></div>
                                    <!--end::Event location-->
                                </div>
                                <!--end::Row-->
                            </div>
                            <!--end::Modal body-->
                        </div>
                    </div>
                </div>
                <!--end::Modal - New Product-->
                <!--end::Modals-->
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Index-->
    </div>
    <!--end::Post-->
</div>
<!--end::Container-->
@endsection