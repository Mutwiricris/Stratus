# Contact Widget Email Testing Guide

## 🚀 Quick Test Steps

### **1. Check CSRF Token**
1. Open your website in browser
2. Press F12 to open Developer Tools
3. Go to Console tab
4. Look for: `"CSRF token loaded successfully"`
5. If you see an error, the CSRF token is missing

### **2. Test Message Form**
1. Click the floating contact widget (bottom-right)
2. Go to "Message" tab
3. Fill out:
   - **Name:** Test User
   - **Email:** test@example.com
   - **Message:** This is a test message
4. Click "Send Message"
5. **Expected Results:**
   - Button shows "Sending..." briefly
   - Success toast appears: "✅ Thank you! We'll get back to you soon."
   - Widget auto-closes after 3 seconds
   - Email sent to `mutwiric00l@gmail.com`

### **3. Test Call Form**
1. Click the floating contact widget
2. Go to "Call" tab
3. Fill out:
   - **Name:** Test User
   - **Phone:** +254700000000
   - **Preferred time:** Weekdays 9am-5pm
4. Click "Request a Call"
5. **Expected Results:**
   - Button shows "Submitting..." briefly
   - Success toast appears: "✅ Thank you! We'll call you soon."
   - Widget auto-closes after 3 seconds
   - Email sent to `mutwiric00l@gmail.com`

## 🔍 Debugging Steps

### **Check Browser Console**
Open F12 → Console and look for:

#### **✅ Success Messages:**
```
CSRF token loaded successfully
Message sent successfully: widget_msg_66f9abc123...
```

#### **❌ Error Messages:**
```
CSRF token not found! Make sure <meta name="csrf-token"...
Network error: Failed to fetch
```

### **Check Laravel Logs**
Monitor in real-time:
```bash
tail -f storage/logs/laravel.log
```

#### **✅ Successful Submission:**
```
[2024-09-29 19:40:12] local.INFO: Widget message submission started {"submission_id":"widget_msg_66f9..."}
[2024-09-29 19:40:12] local.INFO: Widget message validation passed {"submission_id":"widget_msg_66f9..."}
[2024-09-29 19:40:13] local.INFO: Widget message email sent successfully {"submission_id":"widget_msg_66f9..."}
```

#### **❌ Failed Submission:**
```
[2024-09-29 19:40:12] local.ERROR: Widget message email failed to send {"error":"Connection refused"}
```

## 🔧 Common Issues & Fixes

### **1. CSRF Token Missing**
**Error:** `CSRF token not found!`
**Fix:** Ensure `<meta name="csrf-token" content="{{ csrf_token() }}">` is in your layout head

### **2. Email Not Sending**
**Error:** `Failed to send message`
**Check:**
- Gmail credentials in `.env` file
- Internet connection
- Laravel logs for specific error

### **3. Form Validation Errors**
**Error:** `Please check your input`
**Fix:** Ensure all required fields are filled:
- Name (required)
- Email (required, valid format)
- Message (required)
- Phone (required for call form)

### **4. Network Errors**
**Error:** `Network error. Please try again.`
**Check:**
- Website is running (php artisan serve)
- Routes are accessible
- No firewall blocking requests

## 📧 Email Configuration Check

### **Verify .env Settings:**
```bash
CONTACT_EMAIL=mutwiric00l@gmail.com
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=mutwiric00l@gmail.com
MAIL_PASSWORD=rhen kmap bzwd qkhj
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=mutwiric00l@gmail.com
MAIL_FROM_NAME="Ascend Stratus"
```

### **Test Email Manually:**
```bash
php artisan tinker
Mail::raw('Test email from widget', function($msg) { 
    $msg->to('mutwiric00l@gmail.com')->subject('Widget Test'); 
});
```

## 🎯 Expected Email Content

### **Message Form Email:**
- **Subject:** "New Widget Message - Ascend Stratus"
- **Content:** Name, Email, Message, Timestamp, Submission ID
- **Reply-to:** Sender's email

### **Call Form Email:**
- **Subject:** "New Widget Call Request - Ascend Stratus"  
- **Content:** Name, Phone, Preferred Time, Timestamp, Submission ID
- **Reply-to:** None (no email provided)

## ✅ Success Checklist

- [ ] CSRF token loads without errors
- [ ] Message form submits successfully
- [ ] Call form submits successfully
- [ ] Loading states appear during submission
- [ ] Success toasts show with checkmarks
- [ ] Widget auto-closes after success
- [ ] Emails received at `mutwiric00l@gmail.com`
- [ ] Laravel logs show successful submissions
- [ ] No JavaScript errors in console

## 🚨 If Still Not Working

1. **Clear browser cache** and refresh
2. **Check .env file** is properly configured
3. **Restart Laravel server** (`php artisan serve`)
4. **Check Gmail spam folder**
5. **Verify Gmail app password** is correct
6. **Test with different browser**

---

**Your contact widget should now send emails successfully!** 🎉

If you're still having issues, check the Laravel logs and browser console for specific error messages.
