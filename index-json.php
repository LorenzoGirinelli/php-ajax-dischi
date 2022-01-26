<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/vue"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script>
</head>
<body>
    <!-- Header  -->
    <header>
        <div class="logo">
            <img src="https://brandlogos.net/wp-content/uploads/2021/12/spotify-brandlogo.net_.png" alt="logo spotify">
        </div>
    </header>
    <div id="root">
        <!-- Disk list  -->
        <div class="disk-list">
            <div class="container">
                <div class="song-container">
        
                        <div class="disk-card" v-for="(disk, index) in disks" key="index">
            
                            <!-- Poster  -->
                            <div class="poster">
                                <img :src="disk.poster">                        
                            </div>
                            <div class="title">{{ disk.title }}</div>

                            <div class="author">{{ disk.author }}</div>

                            <div class="year">{{ disk.year }}</div>
            
                        </div>
                </div>
    
            </div>
        </div>
    </div>
    <script src="js/script.js" type="text/javascript"></script>
</body>
</html>