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
    <?php require __DIR__ . './database.php'; ?>
    <!-- Header  -->
    <header>
        <div class="logo">
            <img src="https://brandlogos.net/wp-content/uploads/2021/12/spotify-brandlogo.net_.png" alt="logo spotify">
        </div>
    </header>
    <!-- Disk list  -->
    <div class="disk-list">
        <div class="container">
            <?php foreach ($database as $song) { ?>

                <div class="disk-card">
            <div class="disk-container">

                <?php foreach ($database as $song) { ?>

                    <!-- Poster  -->
                    <div class="poster">
                        <img <?php echo 'src='$song['poster']''; ?> <?php echo 'alt='$song['poster']''; ?>>
                    <div class="disk-card">

                        <div class="poster">
                            <img src="<?php echo $song['poster']; ?>" alt="<?php echo $song['title']; ?>">                        
                        </div>

                        <div class="title"><?php echo $song['title']; ?></div>

                        <div class="author"><?php echo $song['author']; ?></div>

                        <div class="year"><?php echo $song['year']; ?></div>

                    </div>

                    <div class="title">{{ diskObject.title }}</div>

                    <div class="author">{{ diskObject.author }}</div>

                    <div class="year">{{ diskObject.year }}</div>

                </div>
                <?php } ?>
                <?php } ?>
            </div>

        </div>
    </div>
</body>
</html>