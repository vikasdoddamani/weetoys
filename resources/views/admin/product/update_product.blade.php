<!DOCTYPE html>
<html>
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
            font-size: 18px!important;
            color: white!important;
        }

        input[type='text'], input[type='number'] {
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
    </style>
</head>
<body>
    <header class="header">
        @include('admin.header')
    </header>
    @include('admin.sidebar')

    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">
                <h1>Add Product</h1>
                <div class="div_deg">
                    <form action="{{ url('edit_product', $data->id) }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="input_deg">
                            <label>Product Title</label>
                            <input type="text" name="title" value="{{ $data->title }}" required/>
                        </div>

                        <div class="input_deg">
                            <label>Description</label>
                            <textarea name="description" required>{{ $data->description }}</textarea>
                        </div>

                        <div class="input_deg">
                            <label>Price</label>
                            <input type="text" name="price" value="{{ $data->price }}" required/>
                        </div>

                        <div class="input_deg">
                            <label>Quantity</label>
                            <input type="number" name="qty" value="{{ $data->quantity }}" required/>
                        </div>

                        <div class="input_deg">
                            <label>Product Category</label>
                            <select required name="category">
                                <option value="{{ $data->category }}">{{ $data->category }}</option>
                                @foreach($category as $cat)
                                    <option value="{{ $cat->category_name }}">{{ $cat->category_name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="input_deg">
                            <label>Current Image</label>
                            <img width="200" height="200" src="/product/{{ $data->images }}"/>
                        </div>

                        <div class="input_deg">
                            <label>New Image (optional)</label>
                            <input type="file" name="images" accept="image/*"/>
                        </div>

                        <div class="input_deg">
                            <input type="submit" class="btn btn-success" value="Update All data"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

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
