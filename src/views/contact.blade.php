<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us</title>
</head>

<body>

    <h1>Contact Us any timw</h1>

    <form action="{{ route('contact')}}" method="post">
        @csrf
        <input type="text" name="name" id="name" placeholder="Your name here">
        <input type="text" name="email" id="email" placeholder="Your email">
        <textarea name="message" id="message" cols="30" rows="10" placeholder="Your Query"></textarea>
        <input type="submit" value="Submit">
    </form>

</body>

</html>
