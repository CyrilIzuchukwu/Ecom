@extends('layout.admin')
@section('content')
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <!-- @if (session()->has('success'))
                        <div class="alert alert-success mt-4">
                            {{ session()->get('success') }}
                        </div>
                        @endif -->
                        <h4 class="mb-sm-0">Categories</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                                <li class="breadcrumb-item active">Categories</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-xxl-10">
                    <div class="card">
                        <div class="card-header">
                            <h6 class="card-title mb-0">Create Categories</h6>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('add_category') }}" method="POST" class="needs-validation createCategory-form">

                                @csrf

                                <div class="row">
                                    <div class="col-xxl-12 col-lg-6">
                                        <div class="mb-3">
                                            <label for="categoryTitle" class="form-label">Category
                                                Name<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="categoryTitle" name="category" placeholder="Enter Category name">
                                            <span class="text-danger">@error('category'){{ $message }}@enderror</span>

                                        </div>
                                    </div>
                                    <div class="col-xxl-12">
                                        <div class="text-end">
                                            <button type="submit" class="btn btn-success">Add
                                                Category</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- end card -->
                </div>
            </div><!--end row-->




            <div class="row">
                <div class="col-xxl-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive table-card mb-1">
                                <div class="card-header">
                                    <h3 class="card-title">List of Categories</h3>
                                </div>

                                <table class="table align-middle table-nowrap" id="orderTable">
                                    <thead class="table-dark">
                                        <tr>
                                            <th class="sort fw-bold">Category Name</th>
                                            <th class="sort fw-bold">Created At</th>
                                            <th class="fw-bold">Action</th>
                                        </tr>
                                    </thead>
                                    <!-- 24 Dec, 2022 -->
                                    <tbody class="list form-check-all">

                                        @foreach($categories as $category)
                                        <tr>
                                            <td class="">{{ ucfirst($category->category) }}</td>
                                            <td class="">
                                                {{ \Carbon\Carbon::parse($category->created_at)->format('d M, Y h:i A') }}
                                            </td>
                                            <td>
                                                <div class="d-flex gap-3">
                                                    <a onclick="return confirm('Are you sure you want to delete this category')" class="remove-item-btn" href="{{ route('deleteCategory', $category->id) }}">
                                                        <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                            <div class="d-flex justify-content-end">
                                <div class="pagination-wrap hstack gap-2">
                                    <div class="flex items-center justify-center mt-6">
                                        `{{ $categories->withQueryString()->links('pagination::bootstrap-5') }}`
                                    </div>
                                </div>
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

@endsection
