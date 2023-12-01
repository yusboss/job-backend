@extends('layouts.templateLayout')

@section('title', 'Add Category')

@section('content')


        <!-- Header End -->
        <div class="container-xxl py-5 bg-dark page-header mb-5">
            <div class="container my-5 pt-5 pb-4">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Add Category</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb text-uppercase">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Add Category</li>
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
                            <form action="{{url('add-category')}}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <h4 class="mb-3">Category Name</h4>
                                        <input type="text" name="name" class="form-control rounded">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary my-5 py-md-3 px-md-5 animated slideInRight">Add Category</button>
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