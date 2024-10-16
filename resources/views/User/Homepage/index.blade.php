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
                        <input type="text" class="form-control form-control-solid" name="title" placeholder="Search" value="{{ request('title') }}">
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
                <!-- Check if there are research records -->
                @if(isset($researches) && $researches->isNotEmpty())
                    <!-- Loop through each research entry -->
                    @foreach($researches as $research)
                        <div class="col-md-12 mb-4">
                            <div class="card h-100 shadow-sm">
                                <div class="card-body">
                                    <!-- Research Title -->
                                    <h3 class="card-title mb-3">{{ $research->title }}</h3>
            
                                    <!-- Research Details -->
                                    <p class="card-text"><strong>Author:</strong> {{ $research->author }}</p>
                                    <p class="card-text"><strong>Academic Year:</strong> {{ $research->academic_year ?? 'N/A' }}</p>
                                    <p class="card-text"><strong>Publication:</strong> {{ $research->publication ?? 'N/A' }}</p>
                                    <p class="card-text" style="text-align: justify;"><strong>Description:</strong> {{ $research->description ?? 'No description available' }}</p>

                                    <!-- Abstract Download Link -->
                                    @if($research->abstract_path)
                                        <p class="card-text">
                                            <a href="{{ route('research.download', $research->id) }}" class="btn btn-danger btn-sm">
                                                <i class="fas fa-file-pdf"></i> Download {{ $research->abstract_file_name }}
                                            </a>
                                        </p>
                                    @else
                                        <p class="text-muted"><em>Abstract PDF not available</em></p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
            
                    <!-- Pagination Section -->
                    <div class="d-flex justify-content-between align-items-center pt-4">
                        <div class="text-muted">
                            Showing {{ $researches->firstItem() }} to {{ $researches->lastItem() }} of {{ $researches->total() }} entries
                        </div>
            
                        <!-- Pagination Links -->
                        <ul class="pagination">
                            <!-- Previous Button -->
                            @if ($researches->onFirstPage())
                                <li class="page-item disabled">
                                    <a class="page-link"><i class="fas fa-angle-left"></i></a>
                                </li>
                            @else
                                <li class="page-item">
                                    <a href="{{ $researches->previousPageUrl() }}" class="page-link"><i class="fas fa-angle-left"></i></a>
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
                                <li class="page-item">
                                    <a href="{{ $researches->nextPageUrl() }}" class="page-link"><i class="fas fa-angle-right"></i></a>
                                </li>
                            @else
                                <li class="page-item disabled">
                                    <a class="page-link"><i class="fas fa-angle-right"></i></a>
                                </li>
                            @endif
                        </ul>
                    </div>
               
                @endif
            </div>
            
        </div>
    </div>
@endsection
