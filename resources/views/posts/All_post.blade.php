@extends('layouts.admin')
   
@section('content')
<div class="container">
 
            <div class="dashboard-content-one">
                <!-- Breadcubs Area Start Here -->
                <div class="breadcrumbs-area">
                    <h3>Students</h3>
                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>All Students</li>
                    </ul>
                </div>
                   <!-- Breadcubs Area End Here -->
                @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
                <!-- Breadcubs Area End Here -->
                <!-- Student Table Area Start Here -->
                <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>All Students Data</h3>
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
                        <form class="mg-b-20">
                            <div class="row gutters-8">
                                <div class="col-3-xxxl col-xl-3 col-lg-3 col-12 form-group">
                                    <input type="text" placeholder="Search by Roll ..." class="form-control">
                                </div>
                                <div class="col-4-xxxl col-xl-4 col-lg-3 col-12 form-group">
                                    <input type="text" placeholder="Search by Name ..." class="form-control">
                                </div>
                                <div class="col-4-xxxl col-xl-3 col-lg-3 col-12 form-group">
                                    <input type="text" placeholder="Search by Class ..." class="form-control">
                                </div>
                                <div class="col-1-xxxl col-xl-2 col-lg-3 col-12 form-group">
                                    <button type="submit" class="fw-btn-fill btn-gradient-yellow">SEARCH</button>
                                </div>
                            </div>
                        </form>
                        <div class="table-responsive">
                            <table class="table display data-table text-nowrap">
                                <thead>
                                    <tr>
                                        <th>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input checkAll">
                                                <label class="form-check-label">Post Id</label>
                                            </div>
                                        </th>
                                        <th>Title</th>
                                        <th>Image</th>
                                        <th>Create By</th>
                                        <th>Create At</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                        <th>view</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($posts as $post)
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input">
                                                <label class="form-check-label">{{ $post->id }}</label>
                                            </div>
                                        </td>
                                       
                                         <td>{{ Str::limit($post->title,25) }}</td>
                                         <td class="text-center"><img src="{{asset('/public/admin/img/figure/student3.png') }}" alt="student"></td>
                                       
                                        
                                        <td>Admin</td>
                                    <td>{{ $post->created_at }}</td>
                                        @if(($post->status) ==1 ){
                                        <td><button class="btn btn-Success">Publish</button></td>
                                    }
                                     @elseif(($post->status) == 0){
                                     <td><button class="btn btn-warning">Pending</button></td>
                                 }
                                 @else{
                                  <td ><button class="btn btn-danger">Disable</button></td>
                             } 
                             @endif  
                                        
                                        
                                        <td>
                        <a href="{{url ('/update/status/'.$post->id)}}/1"class="btn btn-primary">Enable</a>
                        <a href="{{url ('/update/status/'.$post->id)}}/2" value="1" class="btn btn-danger">Disable</a>
                                        </td>
                                        <td><a href="" class="btn btn-danger">View Post</a></td>
                                        <td>
                        <a href="" class="btn btn-primary">View Post</a>
                    </td>
                                    </tr>
                                   @endforeach
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


@endsection