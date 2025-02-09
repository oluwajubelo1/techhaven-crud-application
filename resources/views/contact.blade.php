<!DOCTYPE html>
<html>
<head>
    <title>Contact Form</title>
</head>
<body>
<h1>Contact Us</h1>
<form method="POST" action="{{ route('form.submit') }}">
    @csrf

    <div>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
    </div>

    <div>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
    </div>

    <div>
        <label for="address">Address:</label>
        <input type="text" id="address" name="address" required>
    </div>

    <div>
        <label for="message">Message:</label>
        <textarea id="message" name="message" rows="5" required></textarea>
    </div>

    <button type="submit">Submit</button>
</form>
</body>
</html>
