<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Confirmation</title>
</head>
<body style="font-family: Arial, sans-serif; margin: 0; padding: 0;">
    <div style="max-width: 600px; margin: auto; padding: 20px; border: 1px solid #ddd; border-radius: 10px;">
        <img src="cid:logo" alt="The Metro Bar & Kitchen" style="width: 100%; max-width: 200px; display: block; margin: auto;">
        <h2 style="text-align: center; color: #333;">Order Confirmation</h2>
        <p>Dear {{ $order->name }},</p>
        <p>Thank you for placing an order with The Metro Bar & Kitchen!</p>
        <p><strong>Order Details:</strong></p>
        <ul>
            <li><strong>Order Number:</strong> {{ $order->id }}</li>
            <li><strong>Order Date:</strong> [Order Date]</li>
            <li><strong>Estimated Pickup Time:</strong> [Pickup Time]</li>
        </ul>
        <p><strong>Items Ordered:</strong></p>
        <ul>
        <li>Order ID: {{ $order->id }}</li>
        <li>Total: £{{ $order->total }}</li>
            <!-- Add more items as needed -->
        </ul>
        <p>If you have any questions or need to make changes to your order, please contact us at [Contact Information].</p>
        <p>We appreciate your business and look forward to serving you!</p>
        <p>Best regards,</p>
        <p>The Metro Bar & Kitchen Team</p>
    </div>
</body>
</html>
