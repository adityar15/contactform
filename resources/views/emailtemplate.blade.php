<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
</head>
<body>


Hello {{$name}},

Someone has contacted you through your website. Here are the details: <br>
Name: {{$fromname}} <br>
Email: {{$fromemail}} <br>
Message: <?php echo $body; ?>

Regards    

</body>
</html>