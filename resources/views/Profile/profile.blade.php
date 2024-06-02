@extends('layouts.main')
@section('container-fluid')
                <!-- Begin Page Content -->
<div class="content-layout">
    <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Profile  </h1>
                    </div>
                    <div class="row">

                        <!-- Content Column -->
                        <div class="col-lg-6 mb-4">
                    
                            <!-- Profile Card -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">My Profile</h6>
                                </div>
                                <div class="card-body">
                                    <div class="text-center">
                                        <img class="img-fluid px-3 mx-auto d-block" style="width: 150px; height: 150px;"
                                            src="img/undraw_profile.svg" alt="...">
                                    </div>
                                    <div class="text-center">
                                        <h5 class="mb-0">John Smith</h5>
                                        <span>Web Developer</span>
                                    </div>
                                </div>
                            </div>
                    
                            <!-- About Me -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">About Me</h6>
                                </div>
                                <div class="card-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas accumsan lacus sit amet
                                        faucibus
                                        faucibus. Nunc aliquam euismod neque, eget semper quam semper nec. Quisque consectetur
                                        pellentesque
                                        diam vel malesuada. Integer dignissim neque ac ligula malesuada, in dignissim diam
                                        consectetur.
                                        Nunc
                                        faucibus a felis sed viverra. Aliquam erat volutpat. Maecenas eu augue eget libero
                                        pulvinar
                                        consectetur
                                        vitae sed arcu. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Aenean lacinia
                                        bibendum
                                        nulla sed consectetur.</p>
                                </div>
                            </div>
                    
                        </div>
                    
                        <!-- Content Column -->
                        <div class="col-lg-6 mb-4">
                    
                            <!-- Education -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Education</h6>
                                </div>
                                <div class="card-body">
                                    <h4 class="small font-weight-bold">University of California, Berkeley<span
                                            class="float-right">2000 - 2004</span></h4>
                                    <div class="mb-1">Bachelor of Science in Computer Science</div>
                                </div>
                            </div>
                    
                            <!-- Experience -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Experience</h6>
                                </div>
                                <div class="card-body">
                                    <h4 class="small font-weight-bold">Software Engineer<span class="float-right">2005 - 2010</span>
                                    </h4>
                                    <div class="mb-1">Google</div>
                                </div>
                            </div>
                    
                        </div>
                    </div>
    </div>
</div>
@endsection