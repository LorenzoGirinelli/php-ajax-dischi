<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php require __DIR__ . '/database.php'; ?>
    <!-- Header  -->
    <header>
        <div class="logo">
            <img src="https://brandlogos.net/wp-content/uploads/2021/12/spotify-brandlogo.net_.png" alt="logo spotify">
        </div>
    </header>
    <!-- Disk list  -->
    <div class="disk-list">
        <div class="container">
        <div class="song-container">
            <?php foreach ($database as $song) { ?>

                <div class="disk-card">

                    <!-- Poster  -->
                    <div class="poster">
                        <img src= <?php echo $song['poster']; ?>>                      
                    </div>
                        <div class="title"><?php echo $song['title']; ?></div>

                        <div class="author"><?php echo $song['author']; ?></div>

                        <div class="year"><?php echo $song['year']; ?></div>
                </div>
            

            <?php } ?>
            </div>
            

        </div>
    </div>
</body>
</html>