@extends('admin.layout.master')
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-10">
                        <h4>Seller Table</h4>
                    </div>
                    <div class="col-md-2 text-right">
                        <a href="{{ url('/seller-create') }}" class="btn btn-info ">
                            Add Seller
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td> <a href="" class="btn btn-sm btn-info ">
                                    <i class="ti ti-edit"></i>
                                </a>
                                <a href="" class="btn btn-sm btn-danger ">
                                    <i class="ti ti-trash"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                            <td> <a href="" class="btn btn-sm btn-info ">
                                    <i class="ti ti-edit"></i>

                                </a>
                                <a href="" class="btn btn-sm btn-danger ">
                                    <i class="ti ti-trash"></i>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
