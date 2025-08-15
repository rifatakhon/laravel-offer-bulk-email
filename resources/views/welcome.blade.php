<!-- resources/views/send-offer.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Send Offer Email</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #0d0d12, #1a1a2e, #2d033b);
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .form-container {
            background: rgba(255, 255, 255, 0.07);
            backdrop-filter: blur(12px);
            border-radius: 12px;
            padding: 30px 40px;
            width: 100%;
            max-width: 500px;
            color: #fff;
            box-shadow: 0 8px 20px rgba(0,0,0,0.3);
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 24px;
            color: #ffcc70;
        }
        label {
            display: block;
            font-weight: bold;
            margin-top: 12px;
            margin-bottom: 5px;
            font-size: 14px;
        }
        textarea, input[type="text"] {
            width: 100%;
            padding: 10px;
            border-radius: 6px;
            border: none;
            outline: none;
            margin-bottom: 12px;
            font-size: 14px;
            background: rgba(255, 255, 255, 0.1);
            color: #fff;
        }
        textarea::placeholder,
        input::placeholder {
            color: rgba(255,255,255,0.7);
        }
        button {
            width: 100%;
            padding: 12px;
            background: linear-gradient(90deg, #ff6a00, #ffcc70);
            color: #1e1e2f;
            font-size: 16px;
            font-weight: bold;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        button:hover {
            background: linear-gradient(90deg, #ffcc70, #ff6a00);
            transform: scale(1.02);
        }
    </style>
</head>
<body>

    <div class="form-container">
        {{-- Success Message --}}
        @if(session('success'))
            <div style="
                background: rgba(0, 255, 100, 0.15);
                border: 1px solid rgba(0, 255, 100, 0.4);
                color: #00ff9d;
                padding: 10px;
                border-radius: 6px;
                margin-bottom: 15px;
                text-align: center;
                font-weight: bold;
            ">
                ✅ {{ session('success') }}
            </div>
        @endif
        <h2>📧 Send Sale Offer Email</h2>
        <form action="{{ route('send.offer.email') }}" method="POST">
            @csrf

            <label>Recipient Emails (comma separated):</label>
            <textarea name="emails" rows="3" placeholder="email1@example.com, email2@example.com, email3@example.com"></textarea>

            <label>Offer Title:</label>
            <input type="text" name="title" value="🎉 Summer Sale – Up to 50% OFF!">

            <label>Offer Body:</label>
            <textarea name="body" rows="3">Enjoy exclusive discounts on our best products.</textarea>

            <label>Button Text:</label>
            <input type="text" name="button_text" value="Shop the Sale">

            <label>Button URL:</label>
            <input type="text" name="button_url" value="https://yourwebsite.com/sale">

            <button type="submit">🚀 Send Emails</button>
        </form>
    </div>

</body>
</html>
