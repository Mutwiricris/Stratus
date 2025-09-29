# Email Testing & Monitoring Guide

## 🚀 Quick Setup Verification

### 1. **Add Your Email Configuration**

Update your `.env` file with these settings:

```bash
# Your email address to receive contact form submissions
CONTACT_EMAIL=mutwiric00l@gmail.com

# Gmail SMTP Configuration (using your credentials)
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=mutwiric00l@gmail.com
MAIL_PASSWORD=rhen kmap bzwd qkhj
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=mutwiric00l@gmail.com
MAIL_FROM_NAME="Ascend Stratus"
```

### 2. **Test All Contact Forms**

#### **A. Floating Widget - Message Form**
1. Visit any page on your website
2. Click the floating contact widget (bottom-right)
3. Go to "Message" tab
4. Fill out: Name, Email, Message
5. Click "Send Message"
6. **Expected Results:**
   - ✅ Success toast: "Thank you! Your message has been sent successfully."
   - ✅ Widget auto-closes after 3 seconds
   - ✅ Email received at `mutwiric00l@gmail.com`
   - ✅ Console log shows submission ID

#### **B. Floating Widget - Call Request**
1. Click the floating contact widget
2. Go to "Call" tab
3. Fill out: Name, Phone, Preferred Time
4. Click "Request a Call"
5. **Expected Results:**
   - ✅ Success toast: "Thank you! Your call request has been submitted."
   - ✅ Widget auto-closes after 3 seconds
   - ✅ Email received at `mutwiric00l@gmail.com`
   - ✅ Console log shows submission ID

#### **C. Main Contact Page Form**
1. Visit `/contact` page
2. Fill out the comprehensive form: First Name, Last Name, Email, Company, Inquiry Type, Message
3. Click "Send Message"
4. **Expected Results:**
   - ✅ Success message: "Thank you for your message! We'll get back to you within 24 hours."
   - ✅ Email received at `mutwiric00l@gmail.com`
   - ✅ Form data preserved if errors occur

## 📧 Email Content Verification

### **What You Should Receive:**

#### **1. Widget Message Email**
- **Subject:** "New Widget Message - Ascend Stratus"
- **Content:** Name, Email, Message, Timestamp, Submission ID
- **Reply-to:** Sender's email address

#### **2. Widget Call Request Email**
- **Subject:** "New Widget Call Request - Ascend Stratus"
- **Content:** Name, Phone, Preferred Time, Timestamp, Submission ID
- **Reply-to:** None (no email provided)

#### **3. Contact Form Email**
- **Subject:** "New Contact Form Submission - Ascend Stratus"
- **Content:** Full Name, Email, Company, Inquiry Type, Message, Timestamp, Submission ID
- **Reply-to:** Sender's email address

## 🔍 Monitoring & Logging

### **Check Laravel Logs**

Monitor email activity in real-time:

```bash
# Watch logs in real-time
tail -f storage/logs/laravel.log

# Search for specific submission
grep "submission_id" storage/logs/laravel.log

# Check for email errors
grep "Failed to send" storage/logs/laravel.log
```

### **Log Entries You'll See:**

#### **Successful Submission:**
```
[2024-09-29 16:20:12] local.INFO: Widget message submission started {"submission_id":"widget_msg_66f9..."}
[2024-09-29 16:20:12] local.INFO: Widget message validation passed {"submission_id":"widget_msg_66f9..."}
[2024-09-29 16:20:12] local.INFO: Attempting to send widget message email {"submission_id":"widget_msg_66f9..."}
[2024-09-29 16:20:13] local.INFO: Widget message email sent successfully {"submission_id":"widget_msg_66f9..."}
```

#### **Failed Email (but form received):**
```
[2024-09-29 16:20:12] local.ERROR: Widget message email failed to send {"submission_id":"widget_msg_66f9...","error":"Connection refused"}
```

#### **Validation Error:**
```
[2024-09-29 16:20:12] local.WARNING: Widget message validation failed {"submission_id":"widget_msg_66f9...","errors":{"email":["The email field is required."]}}
```

## 🧪 Test Scenarios

### **1. Success Tests**
- ✅ Valid form submissions
- ✅ All required fields filled
- ✅ Valid email addresses
- ✅ Valid phone numbers

### **2. Validation Tests**
- ❌ Empty required fields
- ❌ Invalid email formats
- ❌ Messages too long (>5000 chars)
- ❌ Names too long (>200 chars)

### **3. Error Handling Tests**
- ⚠️ Network disconnection during submission
- ⚠️ Invalid SMTP credentials
- ⚠️ Gmail authentication issues

## 🔧 Troubleshooting

### **Common Issues & Solutions:**

#### **1. "Authentication failed" Error**
```bash
# Check your Gmail app password
MAIL_PASSWORD=rhen kmap bzwd qkhj  # Verify this is correct
```
**Solution:** Generate a new Gmail app password

#### **2. "Connection refused" Error**
**Possible causes:**
- Firewall blocking SMTP ports
- Incorrect SMTP settings
- Network connectivity issues

**Solution:** Test SMTP connection:
```bash
php artisan tinker
Mail::raw('Test', function($msg) { $msg->to('mutwiric00l@gmail.com')->subject('Test'); });
```

#### **3. Emails Not Received**
**Check:**
1. Spam/Junk folder
2. Gmail filters
3. Laravel logs for errors
4. SMTP credentials

#### **4. Form Validation Errors**
**Check:**
- Required fields are filled
- Email format is valid
- Message length < 5000 characters
- Names < 200 characters

## 📊 Success Indicators

### **Frontend (User Experience):**
- ✅ Loading states show during submission
- ✅ Success toasts appear with checkmarks
- ✅ Error messages are clear and helpful
- ✅ Forms reset after successful submission
- ✅ Widget auto-closes after success

### **Backend (Email & Logs):**
- ✅ Emails arrive within 30 seconds
- ✅ All form data is included in emails
- ✅ Submission IDs are unique and trackable
- ✅ Logs show complete submission flow
- ✅ Error handling prevents crashes

### **Email Quality:**
- ✅ Professional HTML formatting
- ✅ Ascend Stratus branding
- ✅ All form fields included
- ✅ Proper reply-to addresses
- ✅ Unique submission IDs for tracking

## 🚨 Error Monitoring Commands

### **Real-time Monitoring:**
```bash
# Monitor all email activity
tail -f storage/logs/laravel.log | grep -E "(submission_id|email|Mail)"

# Monitor only errors
tail -f storage/logs/laravel.log | grep -E "(ERROR|Failed)"

# Monitor specific form type
tail -f storage/logs/laravel.log | grep "widget_msg"
```

### **Daily Email Statistics:**
```bash
# Count successful emails today
grep "$(date +%Y-%m-%d)" storage/logs/laravel.log | grep "email sent successfully" | wc -l

# Count failed emails today
grep "$(date +%Y-%m-%d)" storage/logs/laravel.log | grep "email failed to send" | wc -l
```

## 📈 Performance Metrics

### **Expected Response Times:**
- **Form Validation:** < 100ms
- **Email Sending:** < 5 seconds
- **Total Submission:** < 6 seconds

### **Success Rates:**
- **Target:** 99%+ email delivery
- **Acceptable:** 95%+ email delivery
- **Alert if:** < 90% email delivery

## 🔐 Security Checklist

- ✅ CSRF tokens on all forms
- ✅ Input validation and sanitization
- ✅ Rate limiting (if needed)
- ✅ Gmail app passwords (not regular passwords)
- ✅ Environment variables secured
- ✅ No sensitive data in logs

## 📞 Support Contacts

If you encounter issues:

1. **Check logs first:** `storage/logs/laravel.log`
2. **Test SMTP connection:** Use Laravel Tinker
3. **Verify Gmail settings:** App passwords, 2FA enabled
4. **Check network:** Firewall, DNS, connectivity

---

**Your enhanced email system is now ready with comprehensive error handling, logging, and user feedback!** 🎉

**Key Features:**
- ✅ **3 Email-enabled forms** with unique tracking
- ✅ **Comprehensive logging** for debugging
- ✅ **User-friendly toasts** with emojis
- ✅ **Graceful error handling** 
- ✅ **Professional email templates**
- ✅ **Real-time monitoring** capabilities
