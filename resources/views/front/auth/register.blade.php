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
                                <h1>Sign up as Pandit</h1>
                                <p>Already a member? <a href="{{ route('login') }}">Login</a></p>
                            </div>
                            <div class="form-login">
                                <form method="post" action="{{ route('save') }}">
                                    @csrf
                                    <div class="form-group">
                                        <label class="lb">Name:</label>
                                        <input type="text" class="form-control" placeholder="Enter your full name"
                                            name="name" value="{{ old('name') }}">
                                    </div>
                                    <div class="form-group">
                                        <label class="lb">Email:</label>
                                        <input type="email" class="form-control" id="email"
                                            placeholder="Enter email" name="email" value="{{ old('email') }}">
                                    </div>
                                    <div class="form-group">
                                        <label class="lb">Phone:</label>
                                        <input type="number" class="form-control" id="phone"
                                            placeholder="Enter phone number" name="phone" value="{{ old('phone') }}">
                                    </div>
                                    <div class="form-group">
                                        <label class="lb">Password:</label>
                                        <input type="password" class="form-control" id="pwd"
                                            placeholder="Enter password" name="password">
                                    </div>
                                    <div class="form-group form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="checkbox" name="agree" required> Creating
                                            an account means you’re okay with our <a href="#!">Terms of Service</a>
                                        </label>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Create Account</button>
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
