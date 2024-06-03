@extends('layout.admin')
@section('content')

<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-xxl-12 col-lg-6 order-first">
                    <div class="row row-cols-xxl-4 row-cols-1">
                        <div class="col">
                            <!-- card -->
                            <div class="card card-animate">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <div class="vr rounded bg-secondary opacity-50" style="width: 4px;"></div>
                                        <div class="flex-grow-1 ms-3">
                                            <p class="text-uppercase fw-medium text-muted fs-14 text-truncate">Total Earnings</p>
                                            <h4 class="fs-22 fw-semibold mb-3">$<span class="counter-value" data-target="98851.35">0</span></h4>

                                        </div>
                                        <div class="avatar-sm flex-shrink-0">
                                            <span class="avatar-title bg-secondary-subtle text-secondary rounded fs-3">
                                                <i class="ph-wallet"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div><!-- end card body -->
                            </div><!-- end card -->
                        </div><!-- end col -->

                        <div class="col">
                            <!-- card -->
                            <div class="card card-animate">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <div class="vr rounded bg-info opacity-50" style="width: 4px;"></div>
                                        <div class="flex-grow-1 ms-3">
                                            <p class="text-uppercase fw-medium text-muted fs-14 text-truncate">Orders</p>
                                            <h4 class="fs-22 fw-semibold mb-3"><span class="counter-value" data-target="65802">0</span> </h4>

                                        </div>
                                        <div class="avatar-sm flex-shrink-0">
                                            <span class="avatar-title bg-info-subtle text-info rounded fs-3">
                                                <i class="ph-storefront"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div><!-- end card body -->
                            </div><!-- end card -->
                        </div><!-- end col -->

                        <div class="col">
                            <!-- card -->
                            <div class="card card-animate">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <div class="vr rounded bg-warning opacity-50" style="width: 4px;"></div>
                                        <div class="flex-grow-1 ms-3">
                                            <p class="text-uppercase fw-medium text-muted fs-14 text-truncate">Customers</p>
                                            <h4 class="fs-22 fw-semibold mb-3"><span class="counter-value" data-target="79958">0</span> </h4>

                                        </div>
                                        <div class="avatar-sm flex-shrink-0">
                                            <span class="avatar-title bg-warning-subtle text-warning rounded fs-3">
                                                <i class="ph-user-circle"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div><!-- end card body -->
                            </div><!-- end card -->
                        </div><!-- end col -->
                        <div class="col">
                            <!-- card -->
                            <div class="card card-animate">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <div class="vr rounded bg-primary opacity-50" style="width: 4px;"></div>
                                        <div class="flex-grow-1 ms-3">
                                            <p class="text-uppercase fw-medium text-muted fs-14 text-truncate">Products</p>
                                            <h4 class="fs-22 fw-semibold mb-3"><span class="counter-value" data-target="36758">0</span> </h4>

                                        </div>
                                        <div class="avatar-sm flex-shrink-0">
                                            <span class="avatar-title bg-primary-subtle text-primary rounded fs-3">
                                                <i class="ph-sketch-logo"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div><!-- end card body -->
                            </div><!-- end card -->
                        </div><!-- end col -->
                    </div> <!-- end row-->
                </div><!--end col-->


            </div>

            <div class="row">
                <div class="col-xxl-12">
                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">Recent Orders</h4>

                        </div><!-- end card header -->

                        <div class="card-body">
                            <div class="table-responsive table-card">
                                <table class="table table-centered align-middle table-nowrap mb-0" id="customerTable">
                                    <thead class="text-muted table-light">
                                        <tr>
                                            <th scope="col">Order ID</th>
                                            <th scope="col">Product Name</th>
                                            <th scope="col">Customer Name</th>
                                            <th scope="col">Amount</th>
                                            <th scope="col">Order Date</th>
                                            <th scope="col">Delivery Date</th>
                                            <th scope="col">Vendor</th>
                                            <th scope="col">Ratings</th>
                                            <th scope="col">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <a href="orders-overview.html" class="fw-medium link-primary">#TB010331</a>
                                            </td>
                                            <td>
                                                <a href="product-overview.html" class="text-reset">Macbook Pro</a>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 me-2">
                                                        <img src="dashboard/assets/images/users/avatar-2.jpg" alt="" class="avatar-xxs rounded-circle">
                                                    </div>
                                                    <div class="flex-grow-1">Terry White</div>
                                                </div>
                                            </td>
                                            <td>
                                                $658.00
                                            </td>
                                            <td>17 Dec, 2022</td>
                                            <td>26 Jan, 2023</td>
                                            <td>Brazil</td>
                                            <td>4.5 <i class="bi bi-star-half ms-1 text-warning fs-12"></i></td>
                                            <td>
                                                <span class="badge bg-info-subtle text-info ">New</span>
                                            </td>
                                        </tr><!-- end tr -->

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <script>
                        document.write(new Date().getFullYear())
                    </script> © Toner.
                </div>
                <div class="col-sm-6">
                    <div class="text-sm-end d-none d-sm-block">
                        Design & Develop by Themesbrand
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
<!-- end main content-->

@endsection