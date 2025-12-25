<!DOCTYPE html>
<html>

<head>
    <title>Fruits</title>
</head>

<body>
    <h1>Fruits</h1>
    <ul>
        <?php foreach ($fruits as $fruit): ?>
        <li><?php    echo htmlspecialchars($fruit); ?></li>
        <?php endforeach; ?>
    </ul>
</body>

</html>