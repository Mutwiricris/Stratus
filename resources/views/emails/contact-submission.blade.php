<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $submissionType === 'call' || $submissionType === 'widget_call' ? 'Call Request' : ($submissionType === 'contact_form' ? 'Contact Form Submission' : 'Contact Message') }} - Ascend Stratus</title>
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
            line-height: 1.6;
            color: #1f2937;
            max-width: 640px;
            margin: 0 auto;
            padding: 0;
            background-color: #f3f4f6;
        }
        .email-wrapper {
            padding: 32px 16px;
        }
        .email-container {
            background: white;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        }
        .header {
            background: linear-gradient(135deg, #0d9488 0%, #06b6d4 50%, #3b82f6 100%);
            padding: 32px;
            text-align: center;
        }
        .header-logo {
            font-size: 28px;
            font-weight: 700;
            color: white;
            margin: 0 0 8px 0;
            letter-spacing: -0.5px;
        }
        .header-subtitle {
            color: rgba(255, 255, 255, 0.9);
            font-size: 14px;
            margin: 0;
        }
        .badge-container {
            text-align: center;
            margin-top: -20px;
        }
        .badge {
            display: inline-block;
            padding: 8px 20px;
            background-color: white;
            color: #0d9488;
            border-radius: 24px;
            font-size: 13px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        }
        .content {
            padding: 32px;
        }
        .intro-text {
            color: #6b7280;
            font-size: 15px;
            margin-bottom: 24px;
            padding-bottom: 24px;
            border-bottom: 1px solid #e5e7eb;
        }
        .field {
            margin-bottom: 20px;
        }
        .field-label {
            font-weight: 600;
            color: #0d9488;
            margin-bottom: 6px;
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        .field-value {
            background-color: #f9fafb;
            border-radius: 10px;
            padding: 14px 16px;
            font-size: 15px;
            color: #374151;
            border-left: 3px solid #0d9488;
        }
        .field-value a {
            color: #0d9488;
            text-decoration: none;
            font-weight: 500;
        }
        .field-value a:hover {
            text-decoration: underline;
        }
        .message-field {
            background-color: #ffffff;
            border: 1px solid #e5e7eb;
            padding: 20px;
            border-radius: 12px;
            margin-top: 8px;
            font-size: 15px;
            line-height: 1.7;
            color: #374151;
        }
        .action-section {
            background: linear-gradient(135deg, #f0fdfa 0%, #ecfeff 100%);
            border-radius: 12px;
            padding: 24px;
            margin-top: 24px;
            text-align: center;
        }
        .action-section h4 {
            color: #0d9488;
            margin: 0 0 12px 0;
            font-size: 16px;
        }
        .action-section p {
            color: #6b7280;
            font-size: 14px;
            margin: 0 0 16px 0;
        }
        .action-buttons {
            display: flex;
            gap: 12px;
            justify-content: center;
            flex-wrap: wrap;
        }
        .action-btn {
            display: inline-block;
            padding: 10px 20px;
            border-radius: 8px;
            font-size: 14px;
            font-weight: 600;
            text-decoration: none;
        }
        .btn-primary {
            background: linear-gradient(135deg, #0d9488 0%, #06b6d4 100%);
            color: white;
        }
        .btn-secondary {
            background-color: white;
            color: #0d9488;
            border: 2px solid #0d9488;
        }
        .meta-info {
            background-color: #f9fafb;
            padding: 20px;
            margin-top: 24px;
            border-radius: 12px;
            font-size: 13px;
            color: #6b7280;
        }
        .meta-row {
            display: flex;
            justify-content: space-between;
            padding: 6px 0;
            border-bottom: 1px solid #e5e7eb;
        }
        .meta-row:last-child {
            border-bottom: none;
        }
        .meta-label {
            font-weight: 600;
            color: #374151;
        }
        .submission-id {
            font-family: 'SF Mono', Monaco, 'Courier New', monospace;
            background-color: #e5e7eb;
            padding: 2px 8px;
            border-radius: 4px;
            font-size: 11px;
            color: #4b5563;
        }
        .footer {
            background-color: #f9fafb;
            text-align: center;
            padding: 24px 32px;
            border-top: 1px solid #e5e7eb;
        }
        .footer-brand {
            font-weight: 700;
            color: #0d9488;
            font-size: 16px;
            margin-bottom: 8px;
        }
        .footer-text {
            color: #9ca3af;
            font-size: 12px;
            margin: 4px 0;
        }
        .footer-links {
            margin-top: 16px;
        }
        .footer-links a {
            color: #6b7280;
            text-decoration: none;
            font-size: 12px;
            margin: 0 8px;
        }
        .footer-links a:hover {
            color: #0d9488;
        }
        .priority-banner {
            background-color: #fef3c7;
            border-left: 4px solid #f59e0b;
            padding: 12px 16px;
            margin-bottom: 24px;
            border-radius: 0 8px 8px 0;
            font-size: 14px;
            color: #92400e;
        }
        .inquiry-type-badge {
            display: inline-block;
            padding: 4px 12px;
            background-color: #dbeafe;
            color: #1d4ed8;
            border-radius: 16px;
            font-size: 12px;
            font-weight: 500;
            margin-left: 8px;
        }
    </style>
</head>
<body>
    <div class="email-wrapper">
        <div class="email-container">
            <div class="header">
                <h1 class="header-logo">Ascend Stratus</h1>
                <p class="header-subtitle">Enterprise Software & Digital Solutions</p>
            </div>

            <div class="badge-container">
                <span class="badge">
                    @if($submissionType === 'call' || $submissionType === 'widget_call')
                        New Call Request
                    @elseif($submissionType === 'contact_form')
                        New Contact Inquiry
                    @else
                        New Message
                    @endif
                </span>
            </div>

            <div class="content">
                @if($submissionType === 'call' || $submissionType === 'widget_call')
                <div class="priority-banner">
                    <strong>Action Required:</strong> This lead has requested a callback. Please respond within 2 business hours.
                </div>
                @endif

                <p class="intro-text">
                    You have received a new
                    @if($submissionType === 'call' || $submissionType === 'widget_call')
                        callback request
                    @elseif($submissionType === 'contact_form')
                        contact form submission
                    @else
                        message via the website chat widget
                    @endif
                    from the Ascend Stratus website. Details are below:
                </p>

                <div class="field">
                    <div class="field-label">Contact Name</div>
                    <div class="field-value">{{ $contactData['name'] }}</div>
                </div>

                @if(isset($contactData['email']))
                <div class="field">
                    <div class="field-label">Email Address</div>
                    <div class="field-value">
                        <a href="mailto:{{ $contactData['email'] }}">{{ $contactData['email'] }}</a>
                    </div>
                </div>
                @endif

                @if(isset($contactData['phone']))
                <div class="field">
                    <div class="field-label">Phone Number</div>
                    <div class="field-value">
                        <a href="tel:{{ $contactData['phone'] }}">{{ $contactData['phone'] }}</a>
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
                    <div class="field-value">
                        {{ ucfirst(str_replace('_', ' ', $contactData['inquiry_type'])) }}
                        @if($contactData['inquiry_type'] === 'partnership')
                            <span class="inquiry-type-badge">High Priority</span>
                        @elseif($contactData['inquiry_type'] === 'platform')
                            <span class="inquiry-type-badge">Demo Request</span>
                        @endif
                    </div>
                </div>
                @endif

                @if(isset($contactData['time']) && $contactData['time'])
                <div class="field">
                    <div class="field-label">Preferred Call Time</div>
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

                <div class="action-section">
                    <h4>Quick Actions</h4>
                    <p>Respond to this lead promptly to maintain excellent customer service.</p>
                    <div class="action-buttons">
                        @if(isset($contactData['email']))
                        <a href="mailto:{{ $contactData['email'] }}?subject=Re: Your inquiry to Ascend Stratus&body=Hello {{ $contactData['name'] }},%0D%0A%0D%0AThank you for reaching out to Ascend Stratus. We received your message and would love to discuss how we can help you.%0D%0A%0D%0ABest regards,%0D%0AAscend Stratus Team" class="action-btn btn-primary">
                            Reply via Email
                        </a>
                        @endif
                        @if(isset($contactData['phone']))
                        <a href="tel:{{ $contactData['phone'] }}" class="action-btn btn-secondary">
                            Call Now
                        </a>
                        @endif
                    </div>
                </div>

                <div class="meta-info">
                    <div class="meta-row">
                        <span class="meta-label">Submitted</span>
                        <span>{{ now()->format('M j, Y \a\t g:i A') }} (EAT)</span>
                    </div>
                    <div class="meta-row">
                        <span class="meta-label">Source</span>
                        <span>
                            @if(str_contains($submissionType, 'widget'))
                                Website Chat Widget
                            @else
                                Contact Page Form
                            @endif
                        </span>
                    </div>
                    <div class="meta-row">
                        <span class="meta-label">Submission ID</span>
                        <span class="submission-id">{{ $submissionId ?? 'N/A' }}</span>
                    </div>
                </div>
            </div>

            <div class="footer">
                <div class="footer-brand">Ascend Stratus</div>
                <p class="footer-text">Building the Future of African Enterprise Software</p>
                <p class="footer-text">Kerugoya, Kirinyaga, Kenya | +254 110 407 501</p>
                <div class="footer-links">
                    <a href="https://ascendstratus.com">Website</a>
                    <a href="https://ascendstratus.com/services">Services</a>
                    <a href="https://ascendstratus.com/portfolio">Portfolio</a>
                    <a href="https://ascendstratus.com/contact">Contact</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
