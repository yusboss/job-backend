@extends('layouts.templateLayout')

@section('title', 'Job Post')

@section('content')


        <!-- Header End -->
        <div class="container-xxl py-5 bg-dark page-header mb-5">
            <div class="container my-5 pt-5 pb-4">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Job Post</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb text-uppercase">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Job Post</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Header End -->


        <!-- Job Detail Start -->
        <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="row gy-5 gx-4  d-flex justify-content-center">
                    <div class="col-lg-8">
                        <div class="mb-5">
                            <form action="{{url('job-post')}}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-4">
                                        <h4 class="mb-3">Vacancy/Position</h4>
                                        <input type="text" name="vacancy" class="form-control mb-4 rounded">
                                    </div>
                                    <div class="col-4">
                                        <h4 class="mb-3">Job Nature</h4>
                                        <select class="form-select" name="nature" id="">
                                            <option value="full time">Full Time</option>
                                            <option value="full time">Hybrid</option>
                                            <option value="full time">Part Time</option>
                                        </select>
                                    </div>
                                    <div class="col-4">
                                        <h4 class="mb-3">Job Category</h4>
                                        <select class="form-select">
                                            <option selected>Category</option>
                                            @forelse ($category as $cat)
                                                <option value="{{$cat->name}}">{{$cat->name}}</option>
                                            @empty
                                                <option>No categories available</option>
                                            @endforelse
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h4 class="mb-3">Salary</h4>
                                        <input type="text" name="salary" class="form-control mb-4 rounded">
                                    </div>
                                    <div class="col-md-6">
                                        <h4 class="mb-3">Location</h4>
                                        <input type="text" name="location" class="form-control mb-4 rounded">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h4 class="mb-3">Job description</h4>
                                        <textarea type="text" name="job_desc"
                                            class="form-control mb-4 rounded"></textarea>
                                    </div>
                                    <div class="col-md-6">
                                        <h4 class="mb-3">Company Details</h4>
                                        <textarea type="text" name="company"
                                            class="form-control mb-4 rounded"></textarea>
                                    </div>
                                </div>
                                <h4 class="mb-3">Responsibility</h4>
                                <textarea id="editor" name="responsibility" class="mb-4"></textarea>
                                <h4 class="my-3">Qualifications</h4>
                                <textarea id="editor" name="qualifications" class="mb-4"></textarea>
                                <button type="submit" class="btn btn-primary my-5 py-md-3 px-md-5 animated slideInRight">Add Post</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Job Detail End -->

        <!-- Include TinyMCE scripts from CDN -->
        <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

        <script>
            // Initialize TinyMCE
            tinymce.init({
                selector: '#editor',
                plugins: 'autolink lists link image charmap print preview hr anchor pagebreak',
                toolbar: 'undo redo | formatselect | bold italic backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
                height: 300,
                setup: function (editor) {
                    editor.on('change', function () {
                        editor.save();
                    });
                }
            });
        </script>
@endsection