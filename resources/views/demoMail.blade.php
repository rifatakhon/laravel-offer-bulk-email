<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $mailData['title'] ?? 'Special Offer' }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f7f9fc;
        }
        .container {
            max-width: 600px;
            margin: auto;
            background: #ffffff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0,0,0,0.05);
        }
        .header {
            background: linear-gradient(135deg, #4f46e5, #6366f1);
            padding: 30px;
            text-align: center;
            color: #ffffff;
        }
        .header h1 {
            margin: 0;
            font-size: 26px;
        }
        .content {
            padding: 25px;
            color: #444;
            line-height: 1.6;
        }
        .content h2 {
            color: #4f46e5;
            margin-top: 0;
        }
        .btn {
            display: inline-block;
            padding: 12px 20px;
            margin: 20px 0;
            background: #4f46e5;
            color: #fff !important;
            text-decoration: none;
            border-radius: 6px;
            font-weight: bold;
        }
        .features {
            margin: 20px 0;
        }
        .features li {
            margin-bottom: 8px;
        }
        .footer {
            background: #f0f2f5;
            padding: 15px;
            text-align: center;
            font-size: 13px;
            color: #777;
        }
        @media screen and (max-width: 600px) {
            .header h1 { font-size: 20px; }
            .content { padding: 15px; }
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Header -->
        <div class="header">
            <h1>{{ $mailData['title'] ?? 'Big Savings Just for You!' }}</h1>
            <p>Exclusive offer – Limited Time Only</p>
        </div>

        <!-- Content -->
        <div class="content">
            <h2>{{ $mailData['body'] ?? 'Don’t miss this opportunity!' }}</h2>
            <p>We’re excited to share our latest offer that could help you save big and get more value for your money.</p>

            <ul class="features">
                <li>✅ High-quality products at unbeatable prices</li>
                <li>🚀 Fast and free shipping on orders over $50</li>
                <li>🎁 Free gift with every purchase</li>
            </ul>

            <p>Act now and take advantage of this deal before it’s gone!</p>

            <a href="{{ $mailData['button_url'] ?? '#' }}" class="btn">
                {{ $mailData['button_text'] ?? 'Shop Now' }}
            </a>
        </div>

        <!-- Footer -->
        <div class="footer">
            <p>&copy; {{ date('Y') }} Your Company Name. All rights reserved.</p>
            <p>123 Business Street, Your City, Country</p>
        </div>
    </div>
</body>
</html>
