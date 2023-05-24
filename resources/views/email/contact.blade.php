<!DOCTYPE html>
<html>
<head>
    <title>Contact Form Submission</title>
</head>
<body>
    <h2>Contact Form Submission</h2>
    <p><strong>Name:</strong> {{  $data['name'] }}</p>
    <p><strong>Email:</strong> {{  $data['email'] }}</p>
    <p><strong>Phone:</strong> {{  $data['phone'] }}</p>
    <p><strong>Country:</strong> {{  $data['country'] }}</p>
    <p><strong>Reason:</strong> {{  $data['reason'] }}</p>
    <p><strong>Message:</strong> {{  $data['message'] }}</p>
</body>
</html>