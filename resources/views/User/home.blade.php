@extends('layouts.user')
@section('title')
    Home Page
@endsection

@section('content')
    <!--begin::Toolbar-->
    <div class="toolbar py-5 py-lg-15" id="kt_toolbar">
        <div id="kt_toolbar_container" class="container-xxl d-flex flex-stack flex-wrap">
            <div class="page-title d-flex flex-column">
                <h1 class="d-flex text-white fw-bold fs-2qx my-1 me-5">
                    Research Repository
                </h1>
                <span class="text-white opacity-75 pt-1">Discover and explore academic research</span>
            </div>
        </div>
    </div>
    <!--end::Toolbar-->

    <!--begin::Filter-->
    <div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
        <!--begin::Post-->
        <div class="content flex-row-fluid" id="kt_content">
            <!-- Filter Form -->
            <div class="d-flex justify-content-center mb-4 w-100">
                <form action="{{ route('search') }}" method="GET" class="row g-3 w-100">
                    @csrf
                    <!-- Research Title -->
                    <div class="col-12 col-md-8">
                        <input type="text" class="form-control form-control-solid" name="title" placeholder="Search research" value="{{ request('title') }}">
                    </div>
                    <!-- Filter Button -->
                    <div class="col-12 col-md-2 d-flex">
                        <button type="submit" class="btn btn-primary w-100">
                            <i class="fas fa-filter"></i> Filter
                        </button>
                    </div>
                    <div class="col-12 col-md-2 d-flex">
                        <a href="{{ route('homepage') }}" class="btn btn-success w-100">
                            <i class="fas fa-redo"></i>Reset
                        </a>
                    </div>
                </form>
            </div>


            <div class="row mt-5">
                @if(isset($researches) && $researches->isNotEmpty())
                    @foreach($researches as $research)
                        <div class="col-md-12 mb-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h2 class="card-title">{{ $research->title }}</h2>
                                    <p class="card-text"><strong>Author:</strong> {{ $research->author }}</p>
                                    <p class="card-text"><strong>Academic Year:</strong> {{ $research->academic_year }}</p>
                                    <p class="card-text"><strong>Publication:</strong> {{ $research->publication }}</p>
                                    <p class="card-text"><strong>Description:</strong> {{ $research->description }}</p>
                                    @if($research->abstract_path)
                                        <a href="{{ route('research.download', $research->id) }}" class="btn btn-danger btn-sm">
                                            <i class="fas fa-file-pdf"></i>  {{ $research->abstract_file_name }}
                                        </a>
                                    @else
                                        <p class="text-muted">Abstract PDF not available</p>
                                    @endif

                                </div>
                            </div>
                        </div>
                    @endforeach

                    <!-- Pagination Section -->
                    <div class="d-flex flex-stack flex-wrap pt-10 mb-2">
                        <!-- Pagination Display Text -->
                        <div class="fs-6 fw-semibold text-gray-700">
                            Showing {{ $researches->firstItem() }} to {{ $researches->lastItem() }} of {{ $researches->total() }} entries
                        </div>

                        <!-- Pagination Links -->
                        <ul class="pagination">
                            <!-- Previous Button -->
                            @if ($researches->onFirstPage())
                                <li class="page-item disabled">
                                    <a href="#" class="page-link">
                                        <i class="previous"></i>
                                    </a>
                                </li>
                            @else
                                <li class="page-item previous">
                                    <a href="{{ $researches->previousPageUrl() }}" class="page-link">
                                        <i class="previous"></i>
                                    </a>
                                </li>
                            @endif

                            <!-- Page Numbers -->
                            @for ($i = 1; $i <= $researches->lastPage(); $i++)
                                <li class="page-item {{ $i == $researches->currentPage() ? 'active' : '' }}">
                                    <a href="{{ $researches->url($i) }}" class="page-link">{{ $i }}</a>
                                </li>
                            @endfor

                            <!-- Next Button -->
                            @if ($researches->hasMorePages())
                                <li class="page-item next">
                                    <a href="{{ $researches->nextPageUrl() }}" class="page-link">
                                        <i class="next"></i>
                                    </a>
                                </li>
                            @else
                                <li class="page-item disabled">
                                    <a href="#" class="page-link">
                                        <i class="next"></i>
                                    </a>
                                </li>
                            @endif
                        </ul>
                    </div>
                @elseif(request()->has('title'))
                    <div class="col-md-12 mb-4 text-center">
                        <div class="card h-100">
                            <div class="card-body">
                                <h3 class="">Sorry, no research records match your search criteria. Please try different keywords.</h3>
                            </div>
                        </div>
                    </div>
                @endif
            </div>

        </div>
        <!--end::Post-->
    </div>
    <!--end::Filter-->
@endsection
