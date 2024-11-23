@extends('front.components.layout')
@section('content')
@section('title','Home')
<!-- REGISTER -->
<section>
    <div class="login">
        <div class="container">
            <div class="row">

                <div class="inn">
                    <div class="lhs">
                        <div class="tit">
                            <h2>Now <b>Find your life partner</b> Easy and fast.</h2>
                        </div>
                        <div class="im">
                            <img src="{{asset('front_assets/images/login-couple.png')}}" alt="">
                        </div>
                        {{-- <div class="log-bg">&nbsp;</div> --}}
                    </div>
                    <div class="rhs">
                        <div>
                            <div class="form-tit">
                                <h4>Start for free</h4>
                                <h1>Sign in as Pandit</h1>
                                <p>Register for pandit? <a href="{{ route('register') }}">Register</a></p>
                            </div>
                            <div class="form-login">
                                <form method="post" action="{{ route('loginSubmit') }}">
                                    @csrf
                                    <div class="form-group">
                                        <label class="lb">Email:</label>
                                        <input type="email" class="form-control" id="email"
                                            placeholder="Enter email" name="email" value="{{ old('email') }}">
                                    </div>
                                    <div class="form-group">
                                        <label class="lb">Password:</label>
                                        <input type="password" class="form-control" id="pwd"
                                            placeholder="Enter password" name="password">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Login</button>
                                </form>
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
