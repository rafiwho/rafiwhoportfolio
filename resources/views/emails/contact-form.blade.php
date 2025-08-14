<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Contact Form Message</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f4f4f4;
        }
        .email-container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        .header {
            text-align: center;
            margin-bottom: 30px;
            padding-bottom: 20px;
            border-bottom: 2px solid #667eea;
        }
        .header h1 {
            color: #667eea;
            margin: 0;
            font-size: 24px;
        }
        .contact-info {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 6px;
            margin-bottom: 20px;
        }
        .contact-info h3 {
            color: #667eea;
            margin-top: 0;
            margin-bottom: 15px;
        }
        .info-row {
            margin-bottom: 10px;
        }
        .info-label {
            font-weight: bold;
            color: #555;
            display: inline-block;
            width: 80px;
        }
        .message-content {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 6px;
            border-left: 4px solid #667eea;
        }
        .message-content h3 {
            color: #667eea;
            margin-top: 0;
            margin-bottom: 15px;
        }
        .footer {
            text-align: center;
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #ddd;
            color: #666;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="header">
            <h1>New Contact Form Message</h1>
        </div>
        
        <div class="contact-info">
            <h3>Contact Information</h3>
            <div class="info-row">
                <span class="info-label">Name:</span>
                <span>{{ $name }}</span>
            </div>
            <div class="info-row">
                <span class="info-label">Email:</span>
                <span>{{ $email }}</span>
            </div>
            <div class="info-row">
                <span class="info-label">Subject:</span>
                <span>{{ $subject }}</span>
            </div>
            <div class="info-row">
                <span class="info-label">Date:</span>
                <span>{{ $submittedAt->format('F j, Y \a\t g:i A') }}</span>
            </div>
            <div class="info-row">
                <span class="info-label">IP:</span>
                <span>{{ $ipAddress }}</span>
            </div>
        </div>
        
        <div class="message-content">
            <h3>Message</h3>
            <p>{{ $message }}</p>
        </div>
        
        <div class="footer">
            <p>This message was sent from your portfolio contact form.</p>
            <p>You can reply directly to this email to respond to {{ $name }}.</p>
        </div>
    </div>
</body>
</html> 