<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control Panel</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Robot Control</h1>

    <div class="container">
        <div class="row">
            <form action="action.php" method="post">
                <button class="button" name="command" value="forward">↑</button>
            </form>
        </div>
        <div class="row">
            <form action="action.php" method="post">
                <button class="button" name="command" value="left">←</button>
            </form>
            <form action="action.php" method="post">
                <button class="button" name="command" value="right">→</button>
            </form>
        </div>
        <div class="row">
            <form action="action.php" method="post">
                <button class="button" name="command" value="backward">↓</button>
            </form>
        </div>
        <div class="row">
            <form action="action.php" method="post">
                <button class="button stop-button" name="command" value="stop">Stop</button>
            </form>
        </div>
    </div>
</body>
</html>
