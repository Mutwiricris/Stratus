<!DOCTYPE html>
<html>
<head>
    <title>Test Contact Form</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        body { font-family: sans-serif; max-width: 600px; margin: 50px auto; padding: 20px; }
        .form-group { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; font-weight: bold; }
        input, textarea { width: 100%; padding: 8px; border: 1px solid #ddd; border-radius: 4px; }
        button { background: #0ea5e9; color: white; padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer; }
        button:hover { background: #0284c7; }
        .success { background: #10b981; color: white; padding: 15px; border-radius: 4px; margin-bottom: 20px; }
        .error { background: #ef4444; color: white; padding: 15px; border-radius: 4px; margin-bottom: 20px; }
    </style>
</head>
<body>
    <h1>Test Contact Form</h1>

    @if(session('success'))
        <div class="success">{{ session('success') }}</div>
    @endif

    @if($errors->any())
        <div class="error">
            @foreach($errors->all() as $error)
                <div>{{ $error }}</div>
            @endforeach
        </div>
    @endif

    <form action="{{ route('contact.message') }}" method="POST">
        @csrf

        <div class="form-group">
            <label>Name *</label>
            <input type="text" name="name" value="{{ old('name') }}" required>
        </div>

        <div class="form-group">
            <label>Email *</label>
            <input type="email" name="email" value="{{ old('email') }}" required>
        </div>

        <div class="form-group">
            <label>Phone</label>
            <input type="tel" name="phone" value="{{ old('phone') }}">
        </div>

        <div class="form-group">
            <label>Message *</label>
            <textarea name="message" rows="4" required>{{ old('message') }}</textarea>
        </div>

        <button type="submit">Send Test Message</button>
    </form>

    <hr style="margin: 30px 0;">

    <h2>Test Call Request</h2>

    <form action="{{ route('contact.call') }}" method="POST">
        @csrf

        <div class="form-group">
            <label>Name *</label>
            <input type="text" name="name" value="{{ old('name') }}" required>
        </div>

        <div class="form-group">
            <label>Phone *</label>
            <input type="tel" name="phone" value="{{ old('phone') }}" required>
        </div>

        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" value="{{ old('email') }}">
        </div>

        <div class="form-group">
            <label>Note</label>
            <textarea name="note" rows="2">{{ old('note') }}</textarea>
        </div>

        <button type="submit">Send Test Call Request</button>
    </form>

</body>
</html>
