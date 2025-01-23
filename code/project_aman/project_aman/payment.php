<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-12">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic Payment Method</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: auto;
            background: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        h3 {
            margin-bottom: 20px;
            font-size: 24px;
        }
        .inputBox {
            margin-bottom: 15px;
        }
        .inputBox span {
            display: block;
            margin-bottom: 5px;
        }
        .inputBox input, .inputBox select {
            width: calc(100% - 20px);
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        .submit-btn {
            padding: 10px 15px;
            background: #28a745;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .payment-details {
            display: none;
            margin-top: 20px;
        }
    </style>
    <script>
        function showPaymentFields() {
            const paymentMethod = document.querySelector('select[name="payment_method"]').value;
            const paymentDetails = document.querySelector('.payment-details');
            paymentDetails.style.display = 'block';
            paymentDetails.innerHTML = ''; // Clear previous fields

            if (paymentMethod === 'credit_card') {
                paymentDetails.innerHTML = `
                    <h4>Credit Card Details</h4>
                    <div class="inputBox">
                        <span>Name on Card:</span>
                        <input type="text" name="name_on_card" placeholder="Mr. John Doe" required>
                    </div>
                    <div class="inputBox">
                        <span>Card Number:</span>
                        <input type="text" name="card_number" placeholder="1111-2222-3333-4444" required>
                    </div>
                    <div class="inputBox">
                        <span>Exp Month:</span>
                        <input type="text" name="exp_month" placeholder="MM" required>
                    </div>
                    <div class="inputBox">
                        <span>Exp Year:</span>
                        <input type="text" name="exp_year" placeholder="YYYY" required>
                    </div>
                    <div class="inputBox">
                        <span>CVV:</span>
                        <input type="text" name="cvv" placeholder="123" required>
                    </div>
                `;
            } else if (paymentMethod === 'paypal') {
                paymentDetails.innerHTML = `
                    <h4>PayPal Details</h4>
                    <div class="inputBox">
                        <span>Email:</span>
                        <input type="email" name="paypal_email" placeholder="example@example.com" required>
                    </div>
                `;
            } else if (paymentMethod === 'bank_transfer') {
                paymentDetails.innerHTML = `
                    <h4>Bank Transfer Details</h4>
                    <div class="inputBox">
                        <span>Account Number:</span>
                        <input type="text" name="account_number" placeholder="123456789" required>
                    </div>
                    <div class="inputBox">
                        <span>Bank Name:</span>
                        <input type="text" name="bank_name" placeholder="Your Bank" required>
                    </div>
                `;
            }
        }
    </script>
</head>
<body>

<div class="container">
    <form action="process_payment.php" method="post">
        <h3>Select Payment Method</h3>
        <div class="inputBox">
            <span>Payment Method:</span>
            <select name="payment_method" onchange="showPaymentFields()" required>
                <option value="">Select...</option>
                <option value="credit_card">Credit Card</option>
                <option value="paypal">PayPal</option>
                <option value="bank_transfer">Bank Transfer</option>
            </select>
        </div>

        <div class="payment-details"></div>

        <input type="submit" value="Proceed to Payment" class="submit-btn">
    </form>
</div>

</body>
</html>
