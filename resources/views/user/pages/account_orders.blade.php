@extends('user.layout.master')
@section('content')
<main>
    <div class="mb-4 pb-4"></div>
    <section class="my-account container">
        <h2 class="page-title">Orders</h2>
        <div class="row">
            <div class="col-lg-3">
                <ul class="account-nav">
                    <li><a href="{{ url('/profile') }}" class="menu-link menu-link_us-s">Dashboard</a></li>
                    <li><a href="{{ url('/account-orders') }}" class="menu-link menu-link_us-s menu-link_active">Orders</a></li>
                    <li><a href="{{ url('/account-edit-address') }}" class="menu-link menu-link_us-s">Addresses</a></li>
                    <li><a href="{{ url('/account-edit') }}" class="menu-link menu-link_us-s">Account Details</a></li>
                    <li><a href="{{ url('/user-login') }}" class="menu-link menu-link_us-s">Logout</a></li>
                </ul>
            </div>
            <div class="col-lg-9">
                <div class="page-content my-account__orders-list">
                    <table class="orders-table">
                        <thead>
                            <tr>
                                <th>Order</th>
                                <th>Date</th>
                                <th>Status</th>
                                <th>Total</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>#2416</td>
                                <td>October 1, 2023</td>
                                <td>On hold</td>
                                <td>$1,200.65 for 3 items</td>
                                <td><button class="btn btn-primary">VIEW</button></td>
                            </tr>
                            <tr>
                                <td>#2417</td>
                                <td>October 2, 2023</td>
                                <td>On hold</td>
                                <td>$1,200.65 for 3 items</td>
                                <td><button class="btn btn-primary">VIEW</button></td>
                            </tr>
                            <tr>
                                <td>#2418</td>
                                <td>October 3, 2023</td>
                                <td>On hold</td>
                                <td>$1,200.65 for 3 items</td>
                                <td><button class="btn btn-primary">VIEW</button></td>
                            </tr>
                            <tr>
                                <td>#2419</td>
                                <td>October 4, 2023</td>
                                <td>On hold</td>
                                <td>$1,200.65 for 3 items</td>
                                <td><button class="btn btn-primary">VIEW</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
