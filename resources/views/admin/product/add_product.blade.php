<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.css')
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        .form-container {
            margin-top: 60px;
        }

        h1 {
            color: white;
            text-align: center;
            margin-bottom: 30px;
        }

        label {
            color: white !important;
        }

        .input_deg {
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <header class="header">
        @include('admin.header')
    </header>
    @include('admin.sidebar')

    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid form-container">
                <h1>Add Product</h1>
                <form action="{{ url('upload_product') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 input_deg">
                            <label>Product Title</label>
                            <input type="text" name="title" class="form-control" required />
                        </div>

                        <div class="col-md-6 input_deg">
                            <label>Price</label>
                            <input type="text" name="price" class="form-control" required />
                        </div>

                        <div class="col-md-6 input_deg">
                            <label>Description</label>
                            <textarea name="description" class="form-control" required></textarea>
                        </div>

                        <div class="col-md-6 input_deg">
                            <label>Quantity</label>
                            <input type="number" name="qty" class="form-control" required />
                        </div>

                        <div class="col-md-6 input_deg">
                            <label>SKU</label>
                            <input type="text" name="sku" class="form-control" />
                        </div>

                        <div class="col-md-6 input_deg">
                            <label>Color</label>
                            <input type="text" name="color" class="form-control" />
                        </div>

                        <div class="col-md-6 input_deg">
                            <label>MRP</label>
                            <input type="text" name="mrp" class="form-control" />
                        </div>

                        <div class="col-md-6 input_deg">
                            <label>Discount</label>
                            <input type="text" name="Disc" class="form-control" />
                        </div>

                        <div class="col-md-6 input_deg">
                            <label>Bundle</label>
                            <input type="text" name="Bundle" class="form-control" />
                        </div>

                        <div class="col-md-6 input_deg">
                            <label>Product Category</label>
                            <select required name="category" class="form-control">
                                <option>Select an option</option>
                                @foreach($category as $cat)
                                    <option value="{{ $cat->category_name }}">{{ $cat->category_name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-6 input_deg">
                            <label>Product Image</label>
                            <input type="file" name="images" class="form-control" />
                        </div>

                        <div class="col-md-6 input_deg">
                            <label>Additional Images</label>
                            <input type="file" name="images1" class="form-control" />
                            <input type="file" name="images2" class="form-control" />
                            <input type="file" name="images3" class="form-control" />
                            <input type="file" name="images4" class="form-control" />
                        </div>

                        <div class="col-md-12 input_deg">
                            <input type="submit" class="btn btn-success" value="Submit" />
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- JavaScript files-->
    <script src="{{ asset('admincss/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('admincss/vendor/popper.js/umd/popper.min.js') }}"></script>
    <script src="{{ asset('admincss/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admincss/vendor/jquery.cookie/jquery.cookie.js') }}"></script>
    <script src="{{ asset('admincss/vendor/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('admincss/vendor/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('admincss/js/charts-home.js') }}"></script>
    <script src="{{ asset('admincss/js/fron
