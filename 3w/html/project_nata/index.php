<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Мы рады видеть вас на нашем сайте!</title>
    <link rel="next" href="photos/" > 
    <?php
                include '/home/st/REPOBARE/_repo/NWeb/3w/html/project_nata/photos/';
                ?>

    <style>
        /* Стили для главной страницы */
        body {
            background-color: #f5f5f5;
            font-family: Arial, sans-serif;
            text-align: center;
        }

        header {
            background-color: #3498db;
            padding: 20px;
            color: #fff;
        }

        h1 {
            animation: fadeInUp 2s ease-in-out;
            opacity: 0;
            transform: translateY(30px);
            margin-top: 0;
        }

        /* Стили для навигации */
        nav {
            background-color: #333;
            padding: 10px;
            color: #fff; 
        }

        nav ul {
            list-style-tipe: none;
            padding: 0;
        }

        nav li {
            display: inline;
            margin-right: 10px;
        }

        nav a {
            text-decoration:  none;
            color: #fff; 
        }

        /* Стили для альбома */
        .album {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, lfr));
            grid-gap: 20px;
            margin: 20px;
        }

        /* Стили для фотографий */
        .album img {
            max-width: 100%;
            height: auto;
        }

        /* Анимация для заголовка */
        @keyframes fadeInUp {
            0% {
                opacity: 0;
                transform: translateY(30px);
            }

            100% {
                opacity: 1;
                ctransform: translateY(0);
            }
        }

    </style>
</head>

<body>

   <header>
        <h1>Мы рады видеть вас на нашем сайте!</h1>
    </header>
        <nav>
            <ul>
                <li><a href="index.php">Главная страница</a></li>
                <li><a href="about.php">О нас</a></li>
                <li><a href="contact.php">Контакты</a></li>
                <li><a href="register.php">Регистрация</a></li>
            </ul>
        </nav>

        <h2>Мой фотоальбом</h2>
        <div class="album">
        <img src="photos/1.jpg" alt="1.jpg" >

            <?php
                include '/home/st/REPOBARE/_repo/NWeb/3w/html/project_nata/photos/';
                $photoDirectory = 'photos/';
                $photos = scandir($photoDirectory);

            foreach ($photos as $photo) {
                if ($photo != '.' && $photo != '..') {
                    echo '<img scr="'.$photoDirectory.$photo.'" >';
                    }                    
                }
            ?>
        </div>
    
    <script>
        window.addEventListener("Load",function() {
            var headerTitle = document.querySelector("header h1");
            headerTitle.classList.add("animated");
        })
    </script>
   
</body>
</html>
