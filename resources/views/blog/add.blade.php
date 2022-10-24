@extends('master')

@section('title')
    add page
@endsection

@section('body')
    <section class="py-5 bg-info">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h2>Add blog Form</h2>
                        </div>
                        <div class="card-body">
                            <h6 class="text-center text-success">{{Session::get('message')}}</h6>
                            <form action="{{ route('blog.new') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Blog Title</label>
                                    <div class="col-md-9">
                                        <input type="text" name="title" class="form-control"/>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Auther Name</label>
                                    <div class="col-md-9">
                                        <input type="text" name="author" class="form-control"/>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Blog Description</label>
                                    <div class="col-md-9">
                                        <textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Blog Image</label>
                                    <div class="col-md-9">
                                        <input type="file" name="image" class="form-control">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="" class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" name="btn" class="btn btn-outline-success" value="Create New Blog">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
