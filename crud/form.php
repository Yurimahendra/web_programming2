<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>input</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="css/register.css">
</head>
<body>
    
   <form action="input.php" method="post">
        <h1>Form</h1>
        <label>
            <p class="label-txt">Nama</p>
            <input type="text" class="input" name="nama" required="required">
            <div class="line-box">
                <div class="line"></div>
            </div>
        </label>
        <label>
            <p class="label-txt">USERNAME</p>
            <input type="text" class="input" name="username" required="required">
            <div class="line-box">
                <div class="line"></div>
            </div>
        </label>
        <label>
            <p class="label-txt">PASSWORD</p>
            <input type="password" class="input" name="pass" required="required">
            <div class="line-box">
                <div class="line"></div>
            </div>
        </label>
        <label>
            <p class="label-txt">EMAIL</p>
            <input type="email" class="input" name="email" required="required">
            <div class="line-box">
                <div class="line"></div>
            </div>
        </label>
        <button type="submit">submit</button>
    </form>

    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="js/register.js"></script>
</body>
</html>