<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice #{{ $order->id }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .header {
            text-align: center;
        }
        .details {
            margin-top: 20px;
        }
        .table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        .table th, .table td {
            border: 1px solid #ddd;
            padding: 8px;
        }
        .table th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

    <div class="header">
        <h1>Invoice #{{ $order->id }}</h1>
        <p>Date: {{ $order->created_at->format('d-m-Y') }}</p>
    </div>

    <div class="details">
        <p><strong>Customer Name:</strong> {{ $order->name }}</p>
        <p><strong>Address:</strong> {{ $order->rec_address }}</p>
        <p><strong>Phone:</strong> {{ $order->phone }}</p>
        <p><strong>Total Amount:</strong> {{ number_format($order->product->price, 2) }}</p>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>Product Title</th>
                <th>Quantity</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $order->product->title }}</td> <!-- Access the single product directly -->
                <td>{{ $order->quantity }}</td> <!-- Assuming you have quantity as a field in Order -->
                <td>{{ number_format($order->product->price, 2) }}</td> <!-- Assuming payments are the total price -->
            </tr>
        </tbody>
    </table>


</body>
</html>
