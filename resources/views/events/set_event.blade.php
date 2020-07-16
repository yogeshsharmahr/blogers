@extends('layouts.admin')

@section('content')

                <div class="container">

            <div class="dashboard-content-one">
                <!-- Breadcubs Area Start Here -->
                <div class="breadcrumbs-area">
                    <h3>ADD Events</h3>
                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>Create New Event </li>
                    </ul>
                </div>
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
                                <h3>Add New Event</h3>
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
                        <form class="new-added-form" action="{{route('add_new.event')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-12 form-group">
                                    <label>Event Titile *</label>
                                    <input type="text" placeholder="" class="form-control" name="event_title">
                                </div>
                                <div class="col-xl-6 col-lg-6 col-12 form-group">
                                    <label>Event Link *</label>
                                    <input type="text" placeholder="" class="form-control"name="event_link">
                                </div>
                                
                                  <div class="col-xl-6 col-lg-6 col-12 form-group">
                                    <label>Date Of Event*</label>
                                    <input type="text" placeholder="dd/mm/yyyy" class="form-control air-datepicker"
                                        data-position='bottom right' name="event_date">
                                    <i class="far fa-calendar-alt"></i>
                                </div>
                              
                                
                                 <div class="col-lg-6 col-6 form-group ">
                                    <label class="text-dark-medium">File</label>
                                    <input type="file" class="form-control-file" name="file">
                                </div>
                                <div class="col-lg-12 col-12 form-group">
                                    <label>Description</label>
                                    <textarea class="textarea form-control" name="message" id="form-message" cols="10"
                                        rows="9" name="description"></textarea>
                                </div>
                               
                                <div class="col-12 form-group mg-t-8">
                                    <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Save</button>
                                    <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Reset</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                
                
            </div>
        </div>
        <!-- Page Area End Here -->
    </div>
    <!-- jquery-->



@endsection
