<!DOCTYPE html>
<html lang="en">
<head>
    <style type="text/css">
    body {
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-color: #f4f4f4;
    font-family: Arial, sans-serif;
}

.thank-you-container {
    text-align: center;
    background: white;
    padding: 40px;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

.thank-you-message h1 {
    color: #28a745;
    margin-bottom: 10px;
}

.thank-you-message p {
    color: #555;
    margin: 10px 0;
}

.btn {
    display: inline-block;
    margin-top: 20px;
    padding: 10px 20px;
    background-color: #28a745;
    color: white;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s;
}

.btn:hover {
    background-color: #218838;
}

</style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You</title>
</head>
<body>
    <div class="thank-you-container">
        <div class="thank-you-message">
            <h1>Thank You!</h1>
            <p>Your order has been successfully placed.</p>
            <p>We appreciate your business and will process your order shortly.</p>
            <a href="{{url('/')}}" class="btn">Return to Home</a>
        </div>
    </div>
</body>
</html>
