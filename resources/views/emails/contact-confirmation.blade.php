<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank you for contacting D Lush</title>
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
            padding: 30px;
            text-align: center;
            border-radius: 8px 8px 0 0;
        }
        .content {
            background-color: #f9f9f9;
            padding: 30px;
            border: 1px solid #ddd;
        }
        .highlight {
            background-color: #e8f4f8;
            padding: 20px;
            border-left: 4px solid #5C0029;
            border-radius: 4px;
            margin: 20px 0;
        }
        .contact-info {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            border: 1px solid #ddd;
            margin: 20px 0;
        }
        .footer {
            background-color: #5C0029;
            color: white;
            padding: 20px;
            text-align: center;
            border-radius: 0 0 8px 8px;
            font-size: 14px;
        }
        .cta-button {
            display: inline-block;
            background-color: #5C0029;
            color: white;
            padding: 12px 24px;
            text-decoration: none;
            border-radius: 25px;
            margin: 15px 0;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Thank You, {{ $contactData['full_name'] }}!</h1>
        <p>We've received your message and will get back to you soon.</p>
    </div>
    
    <div class="content">
        <h2>What happens next?</h2>
        
        <div class="highlight">
            <p>Our team will review your message and get back to you shortly!</p>
        </div>
        
        <h3>Your Message Summary:</h3>
        <div class="contact-info">
            <p><strong>Name:</strong> {{ $contactData['full_name'] }}</p>
            <p><strong>Email:</strong> {{ $contactData['email'] }}</p>
            <p><strong>Phone:</strong> {{ $contactData['phone'] }}</p>
            @if($contactData['event_date'])
            <p><strong>Event Date:</strong> {{ \Carbon\Carbon::parse($contactData['event_date'])->format('F j, Y') }}</p>
            @endif
            <p><strong>Your Message:</strong></p>
            <p style="background-color: #f5f5f5; padding: 10px; border-radius: 4px; margin-top: 10px;">{{ $contactData['message'] }}</p>
        </div>
        
        <h3>In the meantime...</h3>
        <p>Feel free to explore our website to learn more about our services:</p>
        <ul>
            <li>🎉 <strong>Event Planning:</strong> Complete event coordination and management</li>
            <li>🏛️ <strong>Venue Decoration:</strong> Stunning venue transformations</li>
            <li>🎪 <strong>Rental Services:</strong> Premium equipment and decor rentals</li>
        </ul>
        
        <div style="text-align: center; margin: 30px 0;">
            <a href="{{ url('/event-planning') }}" class="cta-button">View Our Services</a>
        </div>
        
        <div class="contact-info">
            <h3>Need immediate assistance?</h3>
            <p><strong>📞 Call us:</strong> 024 7501 8311</p>
            <p><strong>📧 Email us:</strong> folake02@yahoo.com</p>
            <p><strong>📍 Visit us:</strong> 65 Armorial Road, CV3 6GH, Coventry</p>
        </div>
    </div>
    
    <div class="footer">
        <p><strong>D Lush Event Planning Services</strong></p>
        <p>This confirmation was sent on {{ now()->format('F j, Y \a\t g:i A') }}</p>
    </div>
</body>
</html>
