<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Subscription Confirmed</title>
</head>
<body>
    <h2>Hi {{ $subscriber->name ?? 'Subscriber' }},</h2>
    <p>Thank you for subscribing to our newsletter! You will now receive updates from us.</p>
    <p>Regards,<br>Sustainable Nepal Team</p>
</body>
</html>
