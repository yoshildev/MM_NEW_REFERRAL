@extends('front.components.layout')
@section('content')
@section('title', 'Home')
<!-- LOGIN -->
<section>
    <div class="db">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-lg-3">
                    <div class="db-nav">
                        <div class="db-nav-pro"><img src="images/profiles/12.jpg" class="img-fluid" alt=""></div>
                        <div class="db-nav-list">
                            <ul>
                                <li><a href="user-dashboard.html" class="act"><i class="fa fa-tachometer"
                                            aria-hidden="true"></i>Dashboard</a></li>
                                <li><a href="user-profile.html"><i class="fa fa-male" aria-hidden="true"></i>Profile</a>
                                </li>
                                <li><a href="user-interests.html"><i class="fa fa-handshake-o"
                                            aria-hidden="true"></i>Interests</a></li>
                                <li><a href="user-chat.html"><i class="fa fa-commenting-o" aria-hidden="true"></i>Chat
                                        list</a></li>
                                <li><a href="user-plan.html"><i class="fa fa-money" aria-hidden="true"></i>Plan</a></li>
                                <li><a href="user-setting.html"><i class="fa fa-cog" aria-hidden="true"></i>Setting</a>
                                </li>
                                <li><a href="#"><i class="fa fa-sign-out" aria-hidden="true"></i>Log out</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-lg-9">

                    <div class="row">
                        <div class="col-md-12 col-lg-6 col-xl-4 db-sec-com">
                            <h2 class="db-tit">Profiles status</h2>
                            <div class="db-pro-stat">
                                <h6>Profile completion</h6>
                                <div class="dropdown">
                                    <button type="button" class="btn btn-outline-secondary"
                                        data-bs-toggle="dropdown">
                                        <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Edid profile</a></li>
                                        <li><a class="dropdown-item" href="#">View profile</a></li>
                                        <li><a class="dropdown-item" href="#">Profile visibility settings</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="db-pro-pgog">
                                    <span><b class="count">90</b>%</span>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-12 col-lg-6 col-xl-4 db-sec-com">
                            <h2 class="db-tit">Refer Code</h2>
                            <div class="db-pro-stat">
                                <h6 class="tit-top-curv">Refer Code</h6>
                                <div class="db-plan-card">
                                    <img src="images/icon/plan.png" alt="">
                                </div>
                                <div class="db-plan-detil">
                                    <ul>
                                        <li>Plan name: <strong>Standard</strong></li>
                                        <li>Validity: <strong>6 Months</strong></li>
                                        <li>Valid till <strong>24 June 2024</strong></li>
                                        <li><a href="#" class="cta-3">Upgrade now</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-xl-4 db-sec-com">
                            <h2 class="db-tit">Recent chat list</h2>
                            <div class="db-pro-stat">
                                <div class="db-inte-prof-list db-inte-prof-chat">
                                    <ul>
                                        <li>
                                            <div class="db-int-pro-1"> <img src="images/profiles/2.jpg"
                                                    alt=""> </div>
                                            <div class="db-int-pro-2">
                                                <h5>Julia Ann</h5> <span>Illunois, United States</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 db-sec-com">
                            <h2 class="db-tit">KYC Details</h2>
                            <div class="db-pro-stat">
                                <div class="db-inte-main">

                                    {{-- <ul class="nav nav-tabs" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#home">New
                                                requests</a>
                                        </li>
                                    </ul> --}}
                                    <!-- Tab panes -->
                                    <!-- Tab panes -->
                                    <form action="" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row mb-4">
                                            <div class="col-4">
                                                <div class="card">
                                                    <div class="db-int-pro-11 m-3">
                                                        <h5>Aadhar Card</h5>
                                                        <input type="file" name="aadhar_card" class="form-control mb-4 mt-4">
                                                        <button type="button" class="btn btn-success btn-sm1 w-100">Accepted</button>
                                                        {{-- <button type="button" class="btn btn-outline-danger btn-sm1 w-100">Rejected</button> --}}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="card">
                                                    <div class="db-int-pro-11 m-3">
                                                        <h5>Pan Card</h5>
                                                        <input type="file" name="pan_card" class="form-control mb-4 mt-4">
                                                        {{-- <button type="button" class="btn btn-success btn-sm1 w-100">Accepted</button> --}}
                                                        <button type="button" class="btn btn-outline-danger btn-sm1 w-100">Rejected</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="button" class="btn btn-success w-50">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END -->
@endsection