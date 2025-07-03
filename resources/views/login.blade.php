@extends('layouts.master')

@section('content')
<div class="hero hero-inner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mx-auto text-center">
                    <div class="intro-wrap">
                        <h1 class="mb-0">Login</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="untree_co-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 mx-auto mb-5 mb-lg-0">
                    <form class="contact-form" data-aos="fade-up" data-aos-delay="200">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="text-black" for="fname">Email</label>
                                    <input type="email" class="form-control" id="fname">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="text-black" for="lname">Password</label>
                                    <input type="password" class="form-control" id="lname">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-check">
                                        <input type="checkbox" class="form-check-input" id="rememberMe">
                                        <label class="form-check" for="rememberMe">Remember Me</label>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Login</button>

                        <div class="text-center mt-3">
                            <p>Don't have account? <a href="/register">Register here</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection