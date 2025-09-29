<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $submissionType === 'call' || $submissionType === 'widget_call' ? 'Call Request' : ($submissionType === 'contact_form' ? 'Contact Form Submission' : 'Contact Message') }} - Ascend Stratus</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f8f9fa;
        }
        .email-container {
            background: white;
            border-radius: 8px;
            padding: 30px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        .header {
            text-align: center;
            margin-bottom: 30px;
            padding-bottom: 20px;
            border-bottom: 3px solid #0891b2;
        }
        .header h1 {
            color: #0891b2;
            margin: 0;
            font-size: 24px;
        }
        .header p {
            color: #666;
            margin: 5px 0 0 0;
        }
        .content {
            margin-bottom: 30px;
        }
        .field {
            margin-bottom: 20px;
            padding: 15px;
            background-color: #f8f9fa;
            border-left: 4px solid #0891b2;
            border-radius: 4px;
        }
        .field-label {
            font-weight: bold;
            color: #0891b2;
            margin-bottom: 5px;
            text-transform: uppercase;
            font-size: 12px;
            letter-spacing: 1px;
        }
        .field-value {
            color: #333;
            font-size: 16px;
            word-wrap: break-word;
        }
        .message-field {
            background-color: #fff;
            border: 1px solid #e9ecef;
            padding: 20px;
            border-radius: 6px;
            margin-top: 10px;
        }
        .footer {
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid #e9ecef;
            color: #666;
            font-size: 14px;
        }
        .badge {
            display: inline-block;
            padding: 4px 12px;
            background-color: #0891b2;
            color: white;
            border-radius: 20px;
            font-size: 12px;
            font-weight: bold;
            text-transform: uppercase;
            margin-bottom: 10px;
        }
        .meta-info {
            background-color: #f1f5f9;
            padding: 15px;
            border-radius: 6px;
            margin-top: 20px;
            font-size: 14px;
            color: #64748b;
        }
        .submission-id {
            font-family: 'Courier New', monospace;
            background-color: #e9ecef;
            padding: 2px 6px;
            border-radius: 3px;
            font-size: 12px;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="header">
            <h1>Ascend Stratus</h1>
            <p>New {{ 
                $submissionType === 'call' || $submissionType === 'widget_call' ? 'Call Request' : 
                ($submissionType === 'contact_form' ? 'Contact Form Submission' : 'Contact Message') 
            }} Received</p>
        </div>

        <div class="content">
            <div class="badge">
                {{ 
                    $submissionType === 'call' || $submissionType === 'widget_call' ? '📞 Call Request' : 
                    ($submissionType === 'contact_form' ? '📋 Contact Form' : '💬 Message') 
                }}
            </div>

            <div class="field">
                <div class="field-label">Name</div>
                <div class="field-value">{{ $contactData['name'] }}</div>
            </div>

            @if(isset($contactData['email']))
            <div class="field">
                <div class="field-label">Email</div>
                <div class="field-value">
                    <a href="mailto:{{ $contactData['email'] }}" style="color: #0891b2; text-decoration: none;">
                        {{ $contactData['email'] }}
                    </a>
                </div>
            </div>
            @endif

            @if(isset($contactData['company']) && $contactData['company'])
            <div class="field">
                <div class="field-label">Company</div>
                <div class="field-value">{{ $contactData['company'] }}</div>
            </div>
            @endif

            @if(isset($contactData['inquiry_type']) && $contactData['inquiry_type'])
            <div class="field">
                <div class="field-label">Inquiry Type</div>
                <div class="field-value">{{ ucfirst(str_replace('_', ' ', $contactData['inquiry_type'])) }}</div>
            </div>
            @endif

            @if(isset($contactData['phone']))
            <div class="field">
                <div class="field-label">Phone Number</div>
                <div class="field-value">
                    <a href="tel:{{ $contactData['phone'] }}" style="color: #0891b2; text-decoration: none;">
                        {{ $contactData['phone'] }}
                    </a>
                </div>
            </div>
            @endif

            @if(isset($contactData['time']) && $contactData['time'])
            <div class="field">
                <div class="field-label">Preferred Time</div>
                <div class="field-value">{{ $contactData['time'] }}</div>
            </div>
            @endif

            @if(isset($contactData['message']))
            <div class="field">
                <div class="field-label">Message</div>
                <div class="message-field">
                    {!! nl2br(e($contactData['message'])) !!}
                </div>
            </div>
            @endif

            <div class="meta-info">
                <strong>Submission Details:</strong><br>
                <strong>Time:</strong> {{ now()->format('F j, Y \a\t g:i A T') }}<br>
                <strong>Type:</strong> {{ ucfirst(str_replace('_', ' ', $submissionType)) }}<br>
                <strong>Source:</strong> {{ 
                    str_contains($submissionType, 'widget') ? 'Contact Widget' : 'Contact Page'
                }} - Ascend Stratus Website<br>
                <strong>Submission ID:</strong> <span class="submission-id">{{ $submissionId ?? 'N/A' }}</span>
            </div>
        </div>

        <div class="footer">
            <p>This email was sent from the Ascend Stratus contact system.</p>
            <p>Please respond promptly to maintain excellent customer service.</p>
        </div>
    </div>
</body>
</html>
