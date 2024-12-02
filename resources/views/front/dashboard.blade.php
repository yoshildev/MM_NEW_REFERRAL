@extends('front.components.layout')
@section('content')
@section('title', 'Home')
<!-- LOGIN -->
<section>
    <div class="db">
        <div class="container">
            <div class="row">
                @include('front.components.adminSidebar')
                <div class="col-md-8 col-lg-9">

                    <div class="row">
                        <div class="col-md-12 col-lg-6 col-xl-4 db-sec-com">
                            <h2 class="db-tit">Profiles status</h2>
                            <div class="db-pro-stat">
                                <h6>Profile completion</h6>
                                <div class="dropdown">
                                    {{-- <button type="button" class="btn btn-outline-secondary"
                                        data-bs-toggle="dropdown">
                                        <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Edid profile</a></li>
                                        <li><a class="dropdown-item" href="#">View profile</a></li>
                                        <li><a class="dropdown-item" href="#">Profile visibility settings</a>
                                        </li>
                                    </ul> --}}
                                </div>
                                <div class="db-pro-pgog">
                                    <span><b class="count">90</b>%</span>
                                </div>

                            </div>
                        </div>
                        {{-- <div class="col-md-12 col-lg-6 col-xl-4 db-sec-com"> --}}
                        <div class="col-md-12 col-lg-6 col-xl-8 db-sec-com">
                            <h2 class="db-tit">Refer Code</h2>
                            <div class="db-pro-stat">
                                <h6 class="tit-top-curv">Refer Code</h6>
                                <div class="db-plan-card">
                                    <img src="images/icon/plan.png" alt="">
                                </div>
                                <div class="db-plan-detil">
                                    <ul>
                                        {{-- <li><strong>BD{{ $LOGGED_IN_PANDIT->id }}</strong></li> --}}
                                        <li><a href="#" class="cta-3">BD{{ $LOGGED_IN_PANDIT->id }}</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="col-lg-12 col-xl-4 db-sec-com">
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
                        </div> --}}
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
                                    <form action="{{ route('pandit.kycSubmit') }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row mb-4">
                                            <div class="col-4">
                                                <div class="card">
                                                    <div class="db-int-pro-11 m-3">
                                                        <h5>Aaadhaar Card</h5>
                                                        <input type="file" name="aadhaar_card" class="form-control mb-4 mt-4">
                                                        @if($LOGGED_IN_PANDIT->aadhaar_verified==1)
                                                            <button type="button" class="btn btn-success btn-sm1 w-100">Accepted</button>
                                                        @else
                                                            <button type="button" class="btn btn-outline-danger btn-sm1 w-100">Pending / Rejected</button>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="card">
                                                    <div class="db-int-pro-11 m-3">
                                                        <h5>Pan Card</h5>
                                                        <input type="file" name="pan_card" class="form-control mb-4 mt-4">
                                                        @if($LOGGED_IN_PANDIT->pan_card_verified==1)
                                                            <button type="button" class="btn btn-success btn-sm1 w-100">Accepted</button>
                                                        @else
                                                            <button type="button" class="btn btn-outline-danger btn-sm1 w-100">Pending / Rejected</button>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button @disabled($LOGGED_IN_PANDIT->kyc==1) type="submit" class="btn btn-success w-50">Submit</button>
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
