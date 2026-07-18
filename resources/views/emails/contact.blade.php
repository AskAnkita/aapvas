<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>New Contact Message</title>
</head>
<body style="font-family: system-ui, -apple-system, 'Segoe UI', Roboto, 'Helvetica Neue', Arial; color: #222;">
    <h2>New contact message</h2>

    <p><strong>Name:</strong> {{ $data['name'] ?? '—' }}</p>
    <p><strong>Email:</strong> {{ $data['email'] ?? '—' }}</p>
    <p><strong>Subject:</strong> {{ $data['subject'] ?? '—' }}</p>

    <hr>

    <p><strong>Message:</strong></p>
    <p style="white-space: pre-wrap;">{{ $data['message'] ?? '—' }}</p>

    <hr>

    <p>This message was submitted from the website contact form.</p>
</body>
</html>
