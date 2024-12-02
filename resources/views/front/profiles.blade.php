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
                        <div class="col-md-12 db-sec-com">
                            <h2 class="db-tit">Profiles</h2>
                            <div class="db-pro-stat">
                                
                                <div class="db-inte-main">

                                    <ul class="nav nav-tabs" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#home"
                                                aria-selected="true" role="tab">New requests</a>
                                        </li>
                                    </ul>
                                    <!-- Tab panes -->
                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div id="home" class="container tab-pane active show" role="tabpanel"><br>
                                            <div class="db-inte-prof-list">
                                                <ul>
                                                    @foreach ($users as $user)
                                                        <li style="border: 1px solid black" class="p-3">
                                                            <div class="db-int-pro-1">
                                                                <p>{{$loop->iteration}}.</p>
                                                                <p>Member ID : {{$user->code}}</p>
                                                            </div>
                                                            {{-- <div class="db-int-pro-1"> <img
                                                                    src="images/profiles/men1.jpg" alt=""> <span
                                                                    class="badge bg-primary user-pla-pat">Platinum
                                                                    user</span></div> --}}
                                                            <div class="db-int-pro-2">
                                                                <h5>{{$user->first_name}}{{$user->last_name}}</h5>
                                                                <ol class="poi">
                                                                    <li>Email: <strong>{{$user->email}}</strong></li>
                                                                    <li>Phone: <strong>{{$user->phone}}</strong></li>
                                                                </ol>
                                                                <ol class="poi poi-date">
                                                                    <li>Created on: {{(strtotime($user->created_at) ? date_format(date_create($user->created_at),'d-m-Y') : '')}}</li>
                                                                </ol>
                                                                {{-- <a href="profile-details.html" class="cta-5"
                                                                    target="_blank">View full profile</a> --}}
                                                            </div>
                                                            <div class="db-int-pro-3">
                                                                @if ($user->packages && count($user->packages) > 0)
                                                                    @php
                                                                        $plan = false;
                                                                        $package = $user->packages()->orderBy('id','desc')->first();
                                                                        if($package){
                                                                            $plan = $package->package()->first()->agent_amount;
                                                                            // dd($plan);
                                                                        }else{
                                                                            $plan = 'Invalid Plan';
                                                                        }
                                                                        // dd($package)
                                                                    @endphp
                                                                    @if ($plan)
                                                                    <button type="button"
                                                                    class="btn btn-success btn-sm">{{$plan}} rs</button>
                                                                    @endif
                                                                    @else
                                                                    <button type="button"
                                                                    class="btn btn-outline-danger btn-sm">No Active Plan</button>
                                                                @endif
                                                                {{-- <button type="button"
                                                                    class="btn btn-success btn-sm">Accept</button> --}}
                                                                
                                                            </div>
                                                        </li>
                                                    @endforeach

                                                </ul>
                                            </div>
                                        </div>

                                    </div>
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
