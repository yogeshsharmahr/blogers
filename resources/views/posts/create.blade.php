@extends('layouts.admin')

   

@section('content')
<div class="container">
 <!-- Sidebar Area End Here -->
            <div class="dashboard-content-one">
                <!-- Breadcubs Area Start Here -->
                <div class="breadcrumbs-area">
                    <h3>Students</h3>
                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>Add Post</li>
                    </ul>
                </div>
                 <!-- Breadcubs Area End Here -->
                @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
                <!-- Breadcubs Area End Here -->
                <!-- Admit Form Area Start Here -->
                <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>Add New Post</h3>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                    aria-expanded="false">...</a>

                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-times text-orange-red"></i>Close</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                </div>
                            </div>
                        </div>
                        <form class="new-added-form" method="post" action="{{ route('posts.store') }}">
                            <div class="row">
                                 @csrf
                                <div class="col-xl-12 col-lg-6 col-12 form-group">
                                    <label>Title *</label>
                                    <input type="text" placeholder="" class="form-control" name="title" required>
                                </div>
                                
                                <div class="col-xl-6 col-lg-6 col-12 form-group">
                                    <label>Post Category *</label>
                                    <select class="select2" name="categories[]" required>
                                        <option selected disabled>Please Select Group *</option>
                                        <option value="News">News</option>
                                        <option value="Sports">Sports</option>
                                        <option value="Food">Food</option>
                                        <option value="Technology">Technology</option>
                                        <option value="Gym">Gym</option>
                                        <option value="Education">Education</option>
                                    </select>
                                </div>
                                <div class="col-lg-6 col-12 form-group mg-t-30">
                                    <label class="text-dark-medium">Upload Image</label>
                                    <input type="file" name="image" class="form-control-file" >
                                </div>
                                <div class="col-lg-12 col-12 form-group">
                                    <label>Short BIO</label>
                                    <textarea class="textarea form-control" name="body"  id="form-message" cols="10"
                                        rows="9" required></textarea>
                                </div>
                                
                                <div class="col-12 form-group mg-t-8">
                                    <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Save</button>
                                    <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Reset</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
@endsection