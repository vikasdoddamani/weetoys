<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.css')
    <style type="text/css">
        .div_deg {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 60px;
        }

        h1 {
            color: white;
        }

        label {
            display: inline-block;
            width: 250px;
            font-size: 18px !important;
            color: white !important;
        }

        input[type='text'],
        input[type='number'] {
            width: 350px;
            height: 50px;
        }

        textarea {
            width: 450px;
            height: 80px;
        }

        .input_deg {
            padding: 15px;
        }

        select {
            width: 360px;
            height: 50px;
        }
    </style>
</head>

<body>
    <header class="header">
        @include('admin.header')
    </header>
    @include('admin.sidebar')

    <!-- Sidebar Navigation end-->
    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">
                <h1>Add Product</h1>
                <div class="div_deg">
                    <form action="{{ url('upload_product') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="input_deg">
                            <label>Product Title</label>
                            <input type="text" name="title" required />
                        </div>

                        <div class="input_deg">
                            <label>Description</label>
                            <textarea name="description" required></textarea>
                        </div>

                        <div class="input_deg">
                            <label>SKU</label>
                            <textarea name="sku"></textarea>
                        </div>

                        <div class="input_deg">
                            <label>SKU Tab</label>
                            <textarea name="SKU_Tab"></textarea>
                        </div>

                        <div class="input_deg">
                            <label>SKU Product ID</label>
                            <textarea name="SKU_Product_ID"></textarea>
                        </div>

                        <div class="input_deg">
                            <label>Product ID</label>
                            <textarea name="Product_ID"></textarea>
                        </div>

                        <div class="input_deg">
                            <label>Color</label>
                            <input type="text" name="color" />
                        </div>

                        <div class="input_deg">
                            <label>Price</label>
                            <input type="text" name="price" required />
                        </div>

                        <div class="input_deg">
                            <label>Quantity</label>
                            <input type="number" name="qty" required />
                        </div>

                        <div class="input_deg">
                            <label>MRP</label>
                            <input type="text" name="mrp" />
                        </div>

                        <div class="input_deg">
                            <label>Discount</label>
                            <input type="text" name="Disc" />
                        </div>

                        <div class="input_deg">
                            <label>Bundle</label>
                            <input type="text" name="Bundle" />
                        </div>

                        <div class="input_deg">
                            <label>Product Category</label>
                            <select required name="category">
                                <option>Select an option</option>
                                @foreach($category as $cat)
                                    <option value="{{ $cat->category_name }}">{{ $cat->category_name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="input_deg">
                            <label>Product Image</label>
                            <input type="file" name="image" />
                        </div>

                        <div class="input_deg">
                            <label>Additional Images</label>
                            <input type="file" name="images" />
                            <input type="file" name="images1" />
                            <input type="file" name="images2" />
                            <input type="file" name="images3" />
                            <input type="file" name="images4" />
                        </div>

                        <div class="input_deg">
                            <input type="submit" class="btn btn-success" value="Submit" />
                        </div>

                    </form>
                </div>
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
    <script src="{{ asset('admincss/js/front.js') }}"></script>
</body>

</html>
