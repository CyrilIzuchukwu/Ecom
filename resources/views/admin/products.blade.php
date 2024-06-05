@extends('layout.admin')
@section('content')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Product List</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Products</a></li>
                                <li class="breadcrumb-item active">Product List</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>


            <!-- end page title -->

            <div class="row">
                <!-- end col -->
                <div class="col-xl-12 col-lg-12">
                    <div class="row g-4 mb-4">
                        <div class="col-sm-auto">
                            <div>
                                <a href="" class="btn btn-success" id="addproduct-btn"><i class="ri-add-line align-bottom me-1"></i> Add Product</a>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="d-flex justify-content-sm-end">
                                <div class="search-box ms-2">
                                    <input type="text" class="form-control" autocomplete="off" id="searchProductList" placeholder="Search Products...">
                                    <i class="ri-search-line search-icon"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="product-list" class="gridjs-border-none mb-4">
                        <div role="complementary" class="gridjs gridjs-container" style="width: 100%;">
                            <div class="gridjs-wrapper table-responsive" style="height: auto;">
                                @if($products->count() > 0 )
                                <table class="table">
                                    <thead class="table-light">
                                        <tr>
                                            <th scope="col">Product Name</th>
                                            <th scope="col">Manufacturer Name</th>
                                            <th scope="col">Description</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Discount Price</th>
                                            <th scope="col">Created At</th>
                                            <th scope="col">Updated At</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($products as $product)
                                        <tr>
                                            <td data-column-id="productName" class="gridjs-td">
                                                <span>
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-shrink-0 me-2 avatar-sm">
                                                            <div class="avatar-title bg-light rounded"> <img src="/productFolder/{{ $product->productImage }}" alt="" class="avatar-xs"> </div>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <h6 class="mb-1" class="d-block text-reset">{{ $product->productName }}</h6>
                                                            <p class="mb-0 text-muted">Category : <span class="fw-medium">{{ $product->productCategory }}</span></p>
                                                        </div>
                                                    </div>
                                                </span>
                                            </td>
                                            <td>{{ $product->manufacturerName }}</td>
                                            <td>{{ \Illuminate\Support\Str::words(strip_tags($product->productDescription), 20, '...') }}</td>
                                            <td class="gridjs-td">
                                                <div> {{ $product->productPrice ?? '' }} </div>
                                            </td>
                                            <td class="gridjs-td">
                                                <div> {{ $product->discountPrice ?? '' }} </div>
                                            </td>
                                            <td>{{ \Carbon\Carbon::parse($product->created_at)->format('d M, Y h:i A') }}</td>
                                            <td>{{ \Carbon\Carbon::parse($product->updated_at)->format('d M, Y h:i A') }}</td>
                                            <td>
                                                <div class="d-flex">
                                                    <a onclick="return confirm('Are you sure you want to edit the product')" class="dropdown-item remove-list text-success" href="{{ route('editProduct', $product->id) }}"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a>

                                                    <a onclick="return confirm('Are you sure you want to delete this product')" class="dropdown-item remove-list text-danger" href=""><i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>Delete</a>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="d-flex justify-content-end">
                                    <div class="pagination-wrap hstack gap-2">
                                        <div class="flex items-center justify-center mt-6">
                                            `{{ $products->withQueryString()->links('pagination::bootstrap-5') }}`
                                        </div>
                                    </div>
                                </div>
                                @else
                                <table>
                                    <thead>
                                        <tr>
                                            <td class="text-danger"> No Product Found </td>
                                        </tr>
                                    </thead>
                                </table>
                                @endif
                            </div>
                            <div class="gridjs-footer">
                                <div class="gridjs-pagination">

                                </div>
                            </div>
                            <div id="gridjs-temp" class="gridjs-temp"></div>
                        </div>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
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
                    </script>2023 © Toner.
                </div>
                <div class="col-sm-6">
                    <div class="text-sm-end d-none d-sm-block">
                        Design &amp; Develop by Themesbrand
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
@endsection
