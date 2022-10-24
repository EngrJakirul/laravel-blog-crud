@extends('master')

@section('title')
    Manage Page
@endsection

@section('body')
    <section class="py-5 bg-info">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            All Blog Information
                        </div>
                        <div class="card-body">
                            <table class="table table-hover table-bordered table-active">
                                <thead>
                                    <tr>
                                        <th>SL NO</th>
                                        <th>Blog Title</th>
                                        <th>Blog Author</th>
                                        <th>Blog Description</th>
                                        <th>Blog Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($blogs as $blog)
                                    <tr>
                                        <td>{{$loop->iteration }}</td>
                                        <td>{{$blog->title}}</td>
                                        <td>{{$blog->author}}</td>
                                        <td>{!! $blog->description !!}</td>
                                        <td>
                                            <img src="{{asset($blog->image)}}" alt="" height="100" width="100">
                                        </td>
                                        <td>
                                            <a href="{{route('blog.edit', ['id' => $blog->id])}}" class="btn btn-warning btn-sm" onclick="return confirm('Are you sure to want this..')">Edit</a>
                                            <a href="{{route('blog.delete', ['id' => $blog->id])}}" class="btn btn-danger btn-sm">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
