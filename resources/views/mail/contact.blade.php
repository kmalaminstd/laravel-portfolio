<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>New Contact Message</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f6f6f6;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            background: #ffffff;
            margin: auto;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        h2 {
            color: #333;
        }
        .field {
            margin-bottom: 15px;
        }
        .label {
            font-weight: bold;
            color: #555;
        }
        .value {
            margin-top: 5px;
            color: #222;
        }
        .message-box {
            background: #f1f1f1;
            padding: 15px;
            border-radius: 8px;
            white-space: pre-line;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>📩 New Contact Message</h2>

    <div class="field">
        <div class="label">Name:</div>
        <div class="value">{{ $name }}</div>
    </div>

    <div class="field">
        <div class="label">Email:</div>
        <div class="value">{{ $email }}</div>
    </div>

    <div class="field">
        <div class="label">Subject:</div>
        <div class="value">{{ $subject }}</div>
    </div>

    <div class="field">
        <div class="label">Message:</div>
        <div class="message-box">
            {{ $messageContent }}
        </div>
    </div>
</div>

</body>
</html>