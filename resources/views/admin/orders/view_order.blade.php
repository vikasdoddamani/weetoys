<!DOCTYPE html>
<html>
  <head>
    @include('admin.css')
    <style type="text/css">
input[type="text"]
{
 width:400px;
 height:50px;
}
.div_deg{
display: flex;
justify-content: center;
align-items: center;
margin: 30px;
}
.table_deg
{
    text-align: center;
    margin: auto;
    border: 2px solid yellowgreen;
    margin-top: 50px;
    width: 600px;

}

th{
    background-color: skyblue;
    padding: 15px;
    font-size: 20px;
    font-weight: bold;
    color: white;

}

td{
    color: white;
    padding: 10px;
    border: 1px solid skyblue;
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
          <!-- body here -->
          <h1 style="color:white;">Order</h1>
          <div class="div_deg">


          {{-- <form action="{{url('add_category')}}" method="post">
            @csrf
            <div>
                <input type="text" name="category">
                <input class="btn btn-primary" type="submit" value="add category">
            </div>

          </form> --}}
        </div>

        <div style="overflow-x:auto;">
<table class="table_deg">
    <tr>
        <th>
            Product Title
        </th>
        <th>
            SKU
        </th>
        <th>
            shipping address
        </th>
        <th>
            payment
        </th>
        <th>
            payment status
        </th>
        <th>
           order status
        </th>
        <th> Update order</th>
        <th>invoice </th>

    </tr>

    @foreach($orders as $orders)
    <tr>
        <td>
            {{$orders->product->title}}
        </td>
        <td>
            {{$orders->sku}}
        </td>
        <td>
            {{$orders->name}} <br/>
            {{$orders->rec_address}} <br/>
            {{$orders->phone}} <br/>
        </td>
        <td>
            {{$orders->payments}}
        </td>
        <td>
            {{$orders->payment_status}}
        </td>
        <td>
            {{$orders->status}}
        </td>
        <td>
            <form class="p-2" action="{{url('update_order_status',$orders->id)}}" method="post">
                @csrf
                <select name="status" class="form-select" aria-label="Default select example">
                    <option value="in process">
                        in-process
                    </option>
                    <option value="on the way">
                        on the way
                    </option>
                    <option value="delivered">
                       delivered
                    </option>
                </select>
                <input type="submit" class="btn" value="update"/>
            </form>

        </td>
        <td>
            <a class="btn btn-success" href="{{ url('download_invoice', $orders->id) }}">Download Invoice</a>
        </td>
    </tr>
    @endforeach
</table>

</div>

          </div>
      </div>
    </div>
    <!-- JavaScript files-->

    <script type="text/javascript">

        function confirmation(ev) {
            ev.preventDefault();
            var urlToRedirect = ev.currentTarget.getAttribute('href');

            console.log(urlToRedirect);

            swal({
                title: "Are you sure to delete this?",
                text: "This deletion will be permanent",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            }).then((willDelete) => {
                if (willDelete) {
                    window.location.href = urlToRedirect;
                }
            });
        }
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="{{asset('admincss/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('admincss/vendor/popper.js/umd/popper.min.js')}}"> </script>
    <script src="{{asset('admincss/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('admincss/vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
    <script src="{{asset('admincss/vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('admincss/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('admincss/js/charts-home.js')}}"></script>
    <script src="{{asset('admincss/js/front.js')}}"></script>
  </body>
</html>
