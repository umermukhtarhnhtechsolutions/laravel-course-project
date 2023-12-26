@extends('user.layout.master')
@section('content')
<main>
    <div class="mb-4 pb-4"></div>
    <section class="my-account container">
        <h2 class="page-title">Addresses</h2>
        <div class="row">
            <div class="col-lg-3">
                <ul class="account-nav">
                    <li><a href="{{ url('/profile') }}" class="menu-link menu-link_us-s">Dashboard</a></li>
                    <li><a href="{{ url('/account-orders') }}" class="menu-link menu-link_us-s">Orders</a></li>
                    <li><a href="{{ url('/account-edit-address') }}" class="menu-link menu-link_us-s menu-link_active">Addresses</a></li>
                    <li><a href="{{ url('/account-edit') }}" class="menu-link menu-link_us-s">Account Details</a></li>
                    <li><a href="{{ url('/user-login') }}" class="menu-link menu-link_us-s">Logout</a></li>
                </ul>
            </div>
            <div class="col-lg-9">
                <div class="page-content my-account__address">
                    <p class="notice">The following addresses will be used on the checkout page by default.</p>
                    <div class="my-account__address-list">
                        <div class="my-account__address-item">
                            <div class="my-account__address-item__title">
                                <h5>Billing Address</h5>
                                <a href="#">Edit</a>
                            </div>
                            <div class="my-account__address-item__detail">
                                <p>Daniel Robinson</p>
                                <p>1418 River Drive, Suite 35 Cottonhall, CA 9622</p>
                                <p>United States</p>
                                <br />
                                <p>sale@uomo.com</p>
                                <p>+1 246-345-0695</p>
                            </div>
                        </div>
                        <div class="my-account__address-item">
                            <div class="my-account__address-item__title">
                                <h5>Shipping Address</h5>
                                <a href="#">Edit</a>
                            </div>
                            <div class="my-account__address-item__detail">
                                <p>Daniel Robinson</p>
                                <p>1418 River Drive, Suite 35 Cottonhall, CA 9622</p>
                                <p>United States</p>
                                <br />
                                <p>sale@uomo.com</p>
                                <p>+1 246-345-0695</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
