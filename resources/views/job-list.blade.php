@extends('layouts.templateLayout')

@section('title', 'Job List')

@section('content')
        <!-- Header End -->
        <div class="container-xxl py-5 bg-dark page-header mb-5">
            <div class="container my-5 pt-5 pb-4">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Job List</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb text-uppercase">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Job List</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Header End -->


        <!-- Jobs Start -->
        <div class="container-xxl py-5">
            @isset($search)
                <div id="tab-3" class="tab-pane fade show p-0">
                    @forelse ($search as $s)
                        <div class="job-item p-4 mb-4">
                            <div class="row g-4">
                                <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid border rounded" src="img/com-logo-1.jpg"
                                        alt="" style="width: 80px; height: 80px;">
                                    <div class="text-start ps-4">
                                        <h5 class="mb-3 text-capitalize">{{$s->vacancy}}</h5>
                                        <span class="text-truncate me-3"><i
                                                class="fa fa-map-marker-alt text-primary me-2 text-capitalize"></i>{{$s->location}}</span>
                                        <span class="text-truncate me-3"><i
                                                class="far fa-clock text-primary me-2 text-capitalize"></i>{{$s->nature}}</span>
                                        <span class="text-truncate me-0"><i
                                                class="far fa-money-bill-alt text-primary me-2 text-capitalize"></i>{{$s->salary}}</span>
                                    </div>
                                </div>
                                <div
                                    class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                    <div class="d-flex mb-3">
                                        <a class="btn btn-light btn-square me-3" href=""><i
                                                class="far fa-heart text-primary"></i></a>
                                        <a class="btn btn-primary" href="">Apply Now</a>
                                    </div>
                                    <small class="text-truncate"><i
                                            class="far fa-calendar-alt text-primary me-2"></i>Date Line: {{$s->created_at->diffForHumans()}}</small>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="job-item p-4 mb-4">
                            No items found.
                        </div>
                    @endforelse
                </div>
            @endisset
        </div>
        <div class="container-xxl py-5">
            <div class="container">
                <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Job Listing</h1>
                <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.3s">
                    <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 ms-0 pb-3 active" data-bs-toggle="pill"
                                href="#tab-1">
                                <h6 class="mt-n1 mb-0">Featured</h6>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill"
                                href="#tab-2">
                                <h6 class="mt-n1 mb-0">Full Time</h6>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill"
                                href="#tab-3">
                                <h6 class="mt-n1 mb-0">Part Time</h6>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            @forelse ($jobs as $job)
                                <div class="job-item p-4 mb-4">
                                    <div class="row g-4">
                                        <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                            <img class="flex-shrink-0 img-fluid border rounded" src="img/com-logo-1.jpg"
                                                alt="" style="width: 80px; height: 80px;">
                                            <div class="text-start ps-4">
                                                <h5 class="mb-3 text-capitalize">{{$job->vacancy}}</h5>
                                                <span class="text-truncate me-3"><i
                                                        class="fa fa-map-marker-alt text-primary me-2 text-capitalize"></i>{{$job->location}}</span>
                                                <span class="text-truncate me-3"><i
                                                        class="far fa-clock text-primary me-2 text-capitalize"></i>{{$job->nature}}</span>
                                                <span class="text-truncate me-0"><i
                                                        class="far fa-money-bill-alt text-primary me-2 text-capitalize"></i>{{$job->salary}}</span>
                                            </div>
                                        </div>
                                        <div
                                            class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                            <div class="d-flex mb-3">
                                                <a class="btn btn-light btn-square me-3" href=""><i
                                                        class="far fa-heart text-primary"></i></a>
                                                <a class="btn btn-primary" href="{{url('job-details/'.$job->id)}}">Apply Now</a>
                                            </div>
                                            <small class="text-truncate"><i
                                                    class="far fa-calendar-alt text-primary me-2"></i>Date Line: {{$job->created_at->diffForHumans()}}</small>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <div class="job-item p-4 mb-4">
                                    No items found.
                                </div>
                            @endforelse
                            
                            <a class="btn btn-primary py-3 px-5" href="">Browse More Jobs</a>
                        </div>
                        <div id="tab-2" class="tab-pane fade show p-0">
                            @forelse ($jobs as $job)
                                @if ($job->nature == "full time")
                                    <div class="job-item p-4 mb-4">
                                    <div class="row g-4">
                                        <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                            <img class="flex-shrink-0 img-fluid border rounded" src="img/com-logo-1.jpg"
                                                alt="" style="width: 80px; height: 80px;">
                                            <div class="text-start ps-4">
                                                <h5 class="mb-3 text-capitalize">{{$job->vacancy}}</h5>
                                                <span class="text-truncate me-3"><i
                                                        class="fa fa-map-marker-alt text-primary me-2 text-capitalize"></i>{{$job->location}}</span>
                                                <span class="text-truncate me-3"><i
                                                        class="far fa-clock text-primary me-2 text-capitalize"></i>{{$job->nature}}</span>
                                                <span class="text-truncate me-0"><i
                                                        class="far fa-money-bill-alt text-primary me-2 text-capitalize"></i>{{$job->salary}}</span>
                                            </div>
                                        </div>
                                        <div
                                            class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                            <div class="d-flex mb-3">
                                                <a class="btn btn-light btn-square me-3" href=""><i
                                                        class="far fa-heart text-primary"></i></a>
                                                <a class="btn btn-primary" href="">Apply Now</a>
                                            </div>
                                            <small class="text-truncate"><i
                                                    class="far fa-calendar-alt text-primary me-2"></i>Date Line: {{$job->created_at->diffForHumans()}}</small>
                                        </div>
                                    </div>
                                </div>
                                @else
                                    <div class="job-item p-4 mb-4">
                                        No items found.
                                    </div>
                                @endif
                            @empty
                                No items found.
                            @endforelse
                            <a class="btn btn-primary py-3 px-5" href="">Browse More Jobs</a>
                        </div>
                        <div id="tab-3" class="tab-pane fade show p-0">
                            @forelse ($jobs as $job)
                                @if ($job->nature == "part time")
                                    <div class="job-item p-4 mb-4">
                                        <div class="row g-4">
                                            <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                                <img class="flex-shrink-0 img-fluid border rounded" src="img/com-logo-1.jpg"
                                                    alt="" style="width: 80px; height: 80px;">
                                                <div class="text-start ps-4">
                                                    <h5 class="mb-3 text-capitalize">{{$job->vacancy}}</h5>
                                                    <span class="text-truncate me-3"><i
                                                            class="fa fa-map-marker-alt text-primary me-2 text-capitalize"></i>{{$job->location}}</span>
                                                    <span class="text-truncate me-3"><i
                                                            class="far fa-clock text-primary me-2 text-capitalize"></i>{{$job->nature}}</span>
                                                    <span class="text-truncate me-0"><i
                                                            class="far fa-money-bill-alt text-primary me-2 text-capitalize"></i>{{$job->salary}}</span>
                                                </div>
                                            </div>
                                            <div
                                                class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                                <div class="d-flex mb-3">
                                                    <a class="btn btn-light btn-square me-3" href=""><i
                                                            class="far fa-heart text-primary"></i></a>
                                                    <a class="btn btn-primary" href="">Apply Now</a>
                                                </div>
                                                <small class="text-truncate"><i
                                                        class="far fa-calendar-alt text-primary me-2"></i>Date Line: {{$job->created_at->diffForHumans()}}</small>
                                            </div>
                                        </div>
                                    </div>
                                @else
                                    <div class="job-item p-4 mb-4">
                                        No items found.
                                    </div>
                                @endif
                            @empty
                                <div class="job-item p-4 mb-4">
                                        No items found.
                                    </div>
                            @endforelse
                            <a class="btn btn-primary py-3 px-5" href="">Browse More Jobs</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Jobs End -->
@endsection