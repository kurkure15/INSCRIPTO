<!DOCTYPE html>
<html lang="en">
        <?php
        include('session.php');
        ?>
<head>
    <script src="user.js"></script>
        <link rel="stylesheet" type="text/css" href="profile.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>
</head>
<body style="background-color:#EED3C2">
<div id="edit">
        <button type="submit" name="submit" class="upload" title="Click to Upload">
            <img type="file"  class="img" src="Circle.jpg">
        </button>

    <p class="mine" style="position:absolute; top:40px; left:500px;"><?php echo $login_session; ?></p>
</div>
<div class="horizon">
</div>
    <button class="edit" id="editP" >Edit Profile </button>

    <div class="prof" id="profile">
</div>

        
</body>
</html>