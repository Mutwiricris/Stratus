# Email Setup Guide for Contact Forms

This guide will help you configure email notifications for all contact forms on your Ascend Stratus website.

## 📧 What's Been Implemented

### 1. **Contact Forms with Email Notifications**
- **Floating Contact Widget**: Message and Call request forms
- **Main Contact Page**: Comprehensive contact form with company details
- **All forms send emails** to your specified email address

### 2. **Email Features**
- **Professional HTML email templates** with Ascend Stratus branding
- **Different email subjects** for different form types
- **Complete form data** included in emails (name, email, message, phone, company, etc.)
- **Automatic reply-to** set to sender's email for easy responses
- **Error handling** with logging for failed email sends
- **Form validation** with user-friendly error messages

## 🚀 Quick Setup (5 minutes)

### Step 1: Configure Your Email Settings

Add these settings to your `.env` file:

```bash
# Your email address to receive contact form submissions
CONTACT_EMAIL=your-email@ascendstratus.com

# Gmail SMTP Configuration (Recommended for quick setup)
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=your-gmail@gmail.com
MAIL_PASSWORD=your-app-password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=your-gmail@gmail.com
MAIL_FROM_NAME="Ascend Stratus"
```

### Step 2: Get Gmail App Password

1. Go to your [Google Account settings](https://myaccount.google.com/)
2. Navigate to **Security** → **2-Step Verification**
3. Scroll down to **App passwords**
4. Generate a new app password for "Mail"
5. Use this 16-character password in `MAIL_PASSWORD`

### Step 3: Test the Setup

1. Visit your website
2. Use the floating contact widget or main contact form
3. Submit a test message
4. Check your email inbox

## 📋 Email Configuration Options

### Option 1: Gmail (Easiest - Free)
```bash
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=your-gmail@gmail.com
MAIL_PASSWORD=your-16-char-app-password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=your-gmail@gmail.com
MAIL_FROM_NAME="Ascend Stratus"
```

### Option 2: Mailgun (Production Recommended)
```bash
MAIL_MAILER=mailgun
MAILGUN_DOMAIN=mg.yourdomain.com
MAILGUN_SECRET=your-mailgun-api-key
MAIL_FROM_ADDRESS=noreply@ascendstratus.com
MAIL_FROM_NAME="Ascend Stratus"
```

### Option 3: SendGrid (High Volume)
```bash
MAIL_MAILER=smtp
MAIL_HOST=smtp.sendgrid.net
MAIL_PORT=587
MAIL_USERNAME=apikey
MAIL_PASSWORD=your-sendgrid-api-key
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=noreply@ascendstratus.com
MAIL_FROM_NAME="Ascend Stratus"
```

### Option 4: Mailtrap (Testing Only)
```bash
MAIL_MAILER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=your-mailtrap-username
MAIL_PASSWORD=your-mailtrap-password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=test@ascendstratus.com
MAIL_FROM_NAME="Ascend Stratus"
```

## 🎯 What Emails You'll Receive

### 1. **Widget Message Submissions**
- **Subject**: "New Contact Message - Ascend Stratus"
- **Contains**: Name, Email, Message, Timestamp, IP Address
- **Reply-to**: Sender's email address

### 2. **Widget Call Requests**
- **Subject**: "New Call Request - Ascend Stratus"
- **Contains**: Name, Phone, Preferred Time, Timestamp, IP Address
- **Reply-to**: Not applicable (no email provided)

### 3. **Main Contact Form**
- **Subject**: "New Contact Form Submission - Ascend Stratus"
- **Contains**: Full Name, Email, Company, Inquiry Type, Message, Timestamp, IP Address
- **Reply-to**: Sender's email address

## 🔧 Advanced Configuration

### Custom Email Templates
Email templates are located in: `resources/views/emails/contact-submission.blade.php`

### Multiple Recipients
To send emails to multiple people, update the routes in `routes/web.php`:

```php
// Send to multiple recipients
$recipients = ['admin@ascendstratus.com', 'sales@ascendstratus.com'];
Mail::to($recipients)->send(new ContactSubmission($data, 'message'));
```

### Email Logging
All email attempts are logged in `storage/logs/laravel.log`. Check this file if emails aren't being received.

### Queue Emails (Performance)
For high-traffic sites, consider queueing emails:

1. Set up Laravel queues
2. Update the mailable to implement `ShouldQueue`
3. Use `Mail::to($email)->queue(new ContactSubmission($data, 'message'))`

## 🚨 Troubleshooting

### Emails Not Being Received

1. **Check spam folder** - Gmail might filter automated emails
2. **Verify .env settings** - Ensure no typos in configuration
3. **Check logs** - Look in `storage/logs/laravel.log` for errors
4. **Test SMTP connection** - Use a tool like Telnet to test SMTP
5. **Gmail security** - Ensure 2FA is enabled and app password is used

### Common Errors

**"Authentication failed"**
- Double-check Gmail app password
- Ensure 2FA is enabled on Gmail account

**"Connection refused"**
- Check MAIL_HOST and MAIL_PORT settings
- Verify firewall isn't blocking SMTP ports

**"From address not allowed"**
- Ensure MAIL_FROM_ADDRESS matches your authenticated email

### Testing Commands

Test email configuration with Laravel Tinker:
```bash
php artisan tinker
Mail::raw('Test email', function($msg) { $msg->to('your-email@domain.com')->subject('Test'); });
```

## 📱 Form Locations

### 1. **Floating Contact Widget**
- **Location**: Available on all pages (bottom-right corner)
- **Forms**: Message form, Call request form, Chat interface
- **Routes**: `/contact/message`, `/contact/call`

### 2. **Main Contact Page**
- **Location**: `/contact` page
- **Form**: Comprehensive contact form with company details
- **Route**: `/contact/form`

## 🎨 Customization

### Change Email Recipient
Update `CONTACT_EMAIL` in your `.env` file:
```bash
CONTACT_EMAIL=sales@ascendstratus.com
```

### Customize Email Design
Edit the template: `resources/views/emails/contact-submission.blade.php`

### Add Auto-Responder
Create a new mailable for sending confirmation emails to users who submit forms.

## ✅ Verification Checklist

- [ ] Added email configuration to `.env` file
- [ ] Set up Gmail app password (if using Gmail)
- [ ] Updated `CONTACT_EMAIL` with your email address
- [ ] Tested floating widget message form
- [ ] Tested floating widget call form
- [ ] Tested main contact page form
- [ ] Verified emails are received in inbox
- [ ] Checked that reply-to addresses work correctly

## 🔒 Security Notes

- **Never commit** `.env` file to version control
- **Use app passwords** instead of regular passwords for Gmail
- **Enable 2FA** on email accounts used for SMTP
- **Monitor logs** for suspicious activity
- **Rate limit** contact forms to prevent spam

## 📞 Support

If you need help with email setup:
1. Check the Laravel logs: `storage/logs/laravel.log`
2. Test with Mailtrap first (safer for testing)
3. Verify DNS settings if using custom domains
4. Contact your hosting provider for SMTP support

---

**Your contact forms are now ready to receive and forward all inquiries directly to your email!** 🎉
