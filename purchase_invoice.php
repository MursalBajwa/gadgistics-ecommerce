<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }
        .invoice-container {
            width: 80%;
            margin: 20px auto;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }
        .invoice-header {
            text-align: center;
            border-bottom: 2px solid #333;
            padding-bottom: 10px;
        }
        .invoice-header h1 {
            margin: 0;
            font-size: 24px;
            color: #333;
        }
        .invoice-details {
            margin-top: 20px;
        }
        .invoice-details table {
            width: 100%;
            border-collapse: collapse;
        }
        .invoice-details th, .invoice-details td {
            padding: 10px;
            text-align: left;
            border: 1px solid #ddd;
        }
        .invoice-details th {
            background-color: #333;
            color: #fff;
        }
        .invoice-footer {
            margin-top: 20px;
            display: flex;
            justify-content: space-between;
        }
        .invoice-footer button {
            padding: 10px 15px;
            font-size: 16px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }
        .back-button {
            background-color: #333;
            color: #fff;
        }
        .print-button {
            background-color: gray;
            color: #fff;
        }
        .back-button:hover {
            background-color: #555;
        }
        .print-button:hover {
            background-color: black;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <div class="invoice-container">
        <?php
        session_start();

        // Check if cart exists
        if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
            $totalAmount = 0;

            // Set the timezone to your local timezone
            date_default_timezone_set('Asia/Karachi'); // Replace 'Asia/Karachi' with your timezone
            
            echo '<div class="invoice-header">';
            echo '<h1>Invoice</h1>';
            echo '<p>Customer Name: ' . ($_SESSION['user_name'] ?? 'N/A') . '</p>';
            echo '<p>Date: ' . date('Y-m-d') . '</p>'; // Current date
            echo '<p>Time: ' . date('H:i:s') . '</p>'; // Current time
            echo '</div>';
            

            echo '<div class="invoice-details">';
            echo '<table>';
            echo '<tr><th>Product Name</th><th>Quantity</th><th>Price</th></tr>';

            // Loop through cart items
            foreach ($_SESSION['cart'] as $item) {
                $prod_name = $item['name'];
                $quantity = $item['quantity'];
                $price = $item['price'];
                $amount = $price * $quantity;
                $totalAmount += $amount;

                echo '<tr>';
                echo '<td>' . htmlspecialchars($prod_name) . '</td>';
                echo '<td>' . htmlspecialchars($quantity) . '</td>';
                echo '<td>$' . htmlspecialchars(number_format($price, 2)) . '</td>';
                echo '</tr>';
            }

            echo '<tr>';
            echo '<th colspan="2">Total Amount</th>';
            echo '<th>$' . htmlspecialchars(number_format($totalAmount, 2)) . '</th>';
            echo '</tr>';
            echo '</table>';
            echo '</div>';

            $_SESSION['totalAmount'] = $totalAmount;
        } else {
            header('location: Cart.php');
            exit();
        }
        ?>

        <div class="invoice-footer">
            <button class="back-button" onclick="history.back()">Back</button>
            <button class="print-button" onclick="window.print()">Print</button>
        </div>
    </div>
</body>
</html>
<?php
unset($_SESSION['cart']);
unset( $_SESSION['totalAmount']);
?>