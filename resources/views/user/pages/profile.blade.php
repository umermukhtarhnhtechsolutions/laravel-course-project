@extends('user.layout.master')
@section('content')
<main>
    <div class="mb-4 pb-4"></div>
    <section class="my-account container">
        <h2 class="page-title">My Account</h2>
        <div class="row">
            <div class="col-lg-3">
                <ul class="account-nav">
                    <li><a href="" class="menu-link menu-link_us-s menu-link_active">Dashboard</a></li>
                    <li><a href="{{ url('/account-orders') }}" class="menu-link menu-link_us-s">Orders</a></li>
                    <li><a href="{{ url('/account-edit-address') }}" class="menu-link menu-link_us-s">Addresses</a></li>
                    <li><a href="{{ url('/account-edit') }}" class="menu-link menu-link_us-s">Account Details</a></li>
                    <li><a href="{{ url('/user-login') }}" class="menu-link menu-link_us-s">Logout</a></li>
                </ul>
            </div>
            <div class="col-lg-9">
                <div class="page-content my-account__dashboard">
                    <p>Hello <strong>alitfn58</strong> (not <strong>alitfn58?</strong> <a href="{{ url('/user-login') }}">Log out</a>)</p>
                    <p>From your account dashboard you can view your <a class="unerline-link" href="{{ url('/account-orders') }}">recent orders</a>, manage your <a class="unerline-link" href="{{ url('/account-edit-address') }}">shipping and billing addresses</a>, and <a class="unerline-link" href="{{ url('/account-edit') }}">edit your password and account details.</a></p>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
