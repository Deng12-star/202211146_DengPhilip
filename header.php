<?php
// Shared header with navigation. Set $activePage to one of: 'home', 'signup', 'login', 'teach'
if (!isset($activePage)) {
    $activePage = '';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>School</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<header>
    <nav>
        <ul class="nav-links">
            <li><a href="/course" class="<?php echo $activePage === 'home' ? 'active' : ''; ?>">Home</a></li>
            <li><a href="/course/signup" class="<?php echo $activePage === 'signup' ? 'active' : ''; ?>">Sign Up</a></li>
            <li><a href="/course/login" class="<?php echo $activePage === 'login' ? 'active' : ''; ?>">Login</a></li>
            <li><a href="/course/teach" class="<?php echo $activePage === 'teach' ? 'active' : ''; ?>">Teach with us</a></li>
        </ul>
    </nav>
</header>
