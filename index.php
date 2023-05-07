<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
</head>
<body>
    <form action="send.php" method="post">
        <label for="emailID">Email</label>
        <input type="email" placeholder="Email" value="" id="emailID" name="email" required/>
        <label for="sbjID">subject</label>
        <input type="text" placeholder="subject.." value="" id="sbjID" name="subject" required/>
        <label for="msgID">message</label>
        <input type="text" placeholder="message..." value="" id="msgID" name="message" required/>
        <button type="submit" name="send">Send</button>
    </form>
</body>
</html>