<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <link rel="stylesheet" href="<?php echo asset('css/welcome.css')?>" type="text/css">

</head>
<body>
<header>
    <div class="container">
        <h1>Keagan Swanepoel</h1>
        <nav>
            <a href="/about">About</a>
            <a href="{{ SkillsController::class, 'display' }}">Skills</a>
            <a href="{{ AboutMeController::class, 'display' }}">Portfolio</a>
        </nav>
        <div class="profile-picture">
            <img src="/assets/profile-picture.png" alt="Profile Picture">
        </div>
    </div>
</header>


<footer>
    <div class="container"></div>
</footer>

</body>
</html>