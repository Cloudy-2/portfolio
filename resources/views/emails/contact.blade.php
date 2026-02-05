<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            background: linear-gradient(135deg, #6366f1 0%, #8b5cf6 50%, #ec4899 100%);
            color: white;
            padding: 20px;
            border-radius: 8px 8px 0 0;
            text-align: center;
        }
        .content {
            background: #f8f9fa;
            padding: 30px;
            border-radius: 0 0 8px 8px;
        }
        .field {
            margin-bottom: 20px;
        }
        .label {
            font-weight: bold;
            color: #6366f1;
            display: block;
            margin-bottom: 5px;
        }
        .value {
            background: white;
            padding: 10px;
            border-radius: 4px;
            border-left: 3px solid #6366f1;
        }
        .message-box {
            background: white;
            padding: 15px;
            border-radius: 4px;
            border-left: 3px solid #6366f1;
            white-space: pre-wrap;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            padding-top: 20px;
            border-top: 1px solid #ddd;
            color: #666;
            font-size: 12px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1 style="margin: 0;">📧 New Portfolio Contact Message</h1>
    </div>
    
    <div class="content">
        <div class="field">
            <span class="label">From:</span>
            <div class="value">{{ $contactData['name'] }}</div>
        </div>
        
        <div class="field">
            <span class="label">Email:</span>
            <div class="value">
                <a href="mailto:{{ $contactData['email'] }}">{{ $contactData['email'] }}</a>
            </div>
        </div>
        
        @if(!empty($contactData['subject']))
        <div class="field">
            <span class="label">Subject:</span>
            <div class="value">{{ $contactData['subject'] }}</div>
        </div>
        @endif
        
        <div class="field">
            <span class="label">Message:</span>
            <div class="message-box">{{ $contactData['message'] }}</div>
        </div>
        
        <div class="footer">
            This message was sent from your portfolio contact form at {{ now()->format('F j, Y, g:i a') }}
        </div>
    </div>
</body>
</html>
