<!DOCTYPE html>
<html lang="en">

<head>
    <title>Payment Integration</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            padding: 30px;
            text-align: center;
            width: 90%;
            max-width: 400px;
        }

        h2 {
            color: #333;
            margin-bottom: 20px;
        }

        .qr-code {
            display: block;
            margin: auto;
            width: 300px; /* Adjust size as needed */
            border: 2px solid #28a745; /* Add border to QR code */
            border-radius: 10px;
            padding: 10px; /* Padding around the QR code */
            background-color: #f8f9fa; /* Light background for QR code */
        }

        p {
            color: #555;
            font-size: 18px;
            margin: 10px 0;
        }

        .amount {
            font-weight: bold;
            font-size: 22px;
            color: #28a745; /* Green color for amount */
        }

        .note {
            margin-top: 20px;
            font-size: 14px;
            color: #777;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Scan to Pay</h2>
        <img src="{{ $qrCodeDataUri }}" class="qr-code" alt="QR Code">
        <p class="amount">Amount: ₹{{ number_format($amount, 2) }}</p>
        <p>Please scan the QR code to complete your payment.</p>
        <p class="note">Ensure the payment details are correct before confirming.</p>
        Enter last 6 digit transaction id <br/>  <br/> <input type="text" placeholder="enter last 6 digit number" required/> <br/> <br/>
        <input style="padding: 10px;" type="Submit" value="Paid"/>
    </div>
</body>

</html>
