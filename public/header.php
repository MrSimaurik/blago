<?php include "db.php";
session_start();
?>
<style>
        :root {
            --h1-color: #0097a1;
            --h2-color: #ff8b43;
            --button-color: #ff8b43;
            --text-color: #333;
            --light-bg: #f9f9f9;
        }
        
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            color: var(--text-color);
            line-height: 1.6;
        }

        header {
            background-color: white;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            padding: 1rem 0;
            position: sticky;
            top: 0;
            z-index: 100;
        }
        
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .logo {
            font-size: 1.8rem;
            font-weight: bold;
            color: var(--h1-color);
        }
        
        .nav-links {
            display: flex;
            list-style: none;
        }
        
        .nav-links li {
            margin-left: 2rem;
        }
        
        .nav-links a {
            text-decoration: none;
            color: var(--text-color);
            font-weight: 500;
        }
        
        .nav-links a:hover {
            color: var(--h1-color);
        }

</style>
<header>
        <div class="container">
            <nav>
                <div class="logo">Доброе сердце</div>
                <ul class="nav-links">
                    <li><a href="index.php">Главная</a></li>
                    <li><a href="#">О нас</a></li>
                    <li><a href="projects.php">Проекты</a></li>
                    <li><a href="index.php#how_help">Как помочь</a></li>
                    <li><a href="#">Контакты</a></li>
                    <?php if (!empty($_SESSION['auth']) && $_SESSION['auth']==true) {echo '<li><a href="account.php">Акканут</a></li>';}
                    else {echo '<li><a href="logout.php">Выйти</a></li>';}
                    ?>
                    
                </ul>
            </nav>
        </div>
</header>
