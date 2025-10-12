<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Contact Form Submission</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            background-color: #5C0029;
            color: white;
            padding: 20px;
            text-align: center;
            border-radius: 8px 8px 0 0;
        }
        .content {
            background-color: #f9f9f9;
            padding: 30px;
            border: 1px solid #ddd;
        }
        .field {
            margin-bottom: 15px;
        }
        .label {
            font-weight: bold;
            color: #5C0029;
            display: block;
            margin-bottom: 5px;
        }
        .value {
            background-color: white;
            padding: 10px;
            border-radius: 4px;
            border: 1px solid #ddd;
        }
        .message-field {
            background-color: white;
            padding: 15px;
            border-radius: 4px;
            border: 1px solid #ddd;
            white-space: pre-wrap;
        }
        .footer {
            background-color: #5C0029;
            color: white;
            padding: 15px;
            text-align: center;
            border-radius: 0 0 8px 8px;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>New Contact Form Submission</h1>
        <p>D Lush Event Planning Services</p>
    </div>
    
    <div class="content">
        <h2>Contact Details</h2>
        
        <div class="field">
            <span class="label">Full Name:</span>
            <div class="value">{{ $contactData['full_name'] }}</div>
        </div>
        
        <div class="field">
            <span class="label">Email Address:</span>
            <div class="value">{{ $contactData['email'] }}</div>
        </div>
        
        <div class="field">
            <span class="label">Phone Number:</span>
            <div class="value">{{ $contactData['phone'] }}</div>
        </div>
        
        @if($contactData['event_date'])
        <div class="field">
            <span class="label">Event Date:</span>
            <div class="value">{{ \Carbon\Carbon::parse($contactData['event_date'])->format('F j, Y') }}</div>
        </div>
        @endif
        
        <div class="field">
            <span class="label">Message / Event Details:</span>
            <div class="message-field">{{ $contactData['message'] }}</div>
        </div>
    </div>
    
    <div class="footer">
        <p>This email was sent from the D Lush contact form on {{ now()->format('F j, Y \a\t g:i A') }}</p>
    </div>
</body>
</html>
