<?php include "db.php";
session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Личный кабинет | Доброе сердце</title>
    <style>
        :root {
            --h1-color: #0097a1;
            --h2-color: #ff8b43;
            --button-color: #ff8b43;
            --text-color: #333;
            --light-bg: #f9f9f9;
            --border-color: #ddd;
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
        
        .container {
            width: 85%;
            max-width: 1200px;
            margin: 0 auto;
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
        
        h1 {
            color: var(--h1-color);
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }
        
        h2 {
            color: var(--h2-color);
            font-size: 2rem;
            margin-bottom: 1rem;
        }
        
        .account-container {
            display: grid;
            grid-template-columns: 300px 1fr;
            gap: 2rem;
            margin: 3rem 0;
        }
        
        .account-sidebar {
            background: white;
            border-radius: 8px;
            padding: 1.5rem;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
            height: fit-content;
        }
        
        .account-menu {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        
        .account-menu li {
            margin-bottom: 0.5rem;
        }
        
        .account-menu a {
            display: block;
            padding: 0.8rem;
            text-decoration: none;
            color: var(--text-color);
            border-radius: 5px;
        }
        
        .account-menu a:hover, .account-menu a.active {
            background-color: var(--light-bg);
            color: var(--h1-color);
        }
        
        .account-content {
            background: white;
            border-radius: 8px;
            padding: 2rem;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
        }
        
        .user-info {
            display: flex;
            align-items: center;
            margin-bottom: 2rem;
        }
        
        .user-avatar {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background-color: var(--light-bg);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 1.5rem;
            font-size: 2rem;
            color: var(--h1-color);
        }
        
        .user-details h3 {
            margin: 0;
            font-size: 1.5rem;
        }
        
        .user-details p {
            margin: 0.5rem 0 0;
            color: #666;
        }
        
        .form-group {
            margin-bottom: 1.5rem;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 500;
        }
        
        .form-group input {
            width: 100%;
            padding: 0.8rem;
            border: 1px solid var(--border-color);
            border-radius: 5px;
            font-size: 1rem;
        }
        
        .btn {
            display: inline-block;
            background-color: var(--button-color);
            color: white;
            padding: 0.8rem 1.5rem;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        
        .btn:hover {
            background-color: #e67a3a;
        }
        
        .donations-list {
            margin-top: 2rem;
        }
        
        .donation-item {
            display: grid;
            grid-template-columns: 1fr 150px 100px;
            gap: 1rem;
            padding: 1rem 0;
            border-bottom: 1px solid var(--border-color);
            align-items: center;
        }
        
        .donation-item:last-child {
            border-bottom: none;
        }
        
        .donation-project {
            font-weight: 500;
        }
        
        .donation-date {
            color: #666;
            font-size: 0.9rem;
        }
        
        .donation-amount {
            font-weight: bold;
            text-align: right;
            color: var(--h1-color);
        }
        
        .no-donations {
            text-align: center;
            padding: 2rem;
            color: #666;
        }
        
        footer {
            background-color: #333;
            color: white;
            padding: 3rem 0;
            text-align: center;
        }
        
        @media (max-width: 768px) {
            .container {
                width: 90%;
            }
            
            .account-container {
                grid-template-columns: 1fr;
            }
            
            .donation-item {
                grid-template-columns: 1fr;
                gap: 0.5rem;
            }
            
            .donation-amount {
                text-align: left;
            }
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <?php include "header.php"; ?>    
    <main class="container">
        <h1>Личный кабинет</h1>
        
        <div class="account-container">
            <aside class="account-sidebar">
                <ul class="account-menu">
                    <li><a href="#" class="active"><i class="fas fa-user-circle"></i> Профиль</a></li>
                    <li><a href="#"><i class="fas fa-heart"></i> Мои пожертвования</a></li>
                    <li><a href="logout.php"><i class="fas fa-door-open"></i> Выход</a></li>
                </ul>
            </aside>
            
            <div class="account-content">
                <section class="profile-section">
                    <div class="user-info">
                        <div class="user-avatar">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="user-details">
                            <h3><?=$_SESSION['user_data']['login']?></h3>
                        </div>
                    </div>
                    
                    <h2>Редактирование профиля</h2>
                    <form action="action.php?action=update" method="POST">
                        <div class="form-group">
                            <label for="name">Логин</label>
                            <input type="text" id="login" name="login" value="<?=$_SESSION['user_data']['login']?>" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="name">Имя</label>
                            <input type="text" id="name" name="name" value="<?=$_SESSION['user_data']['name']?>" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="phone">Телефон</label>
                            <input type="tel" id="phone" name="phone" value="<?=$_SESSION['user_data']['phone']?>" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="password">Новый пароль</label>
                            <input type="password" id="password" name="password" placeholder="<?=$_SESSION['user_data']['password']?>" required>
                        </div>
                        
                        <button type="submit" class="btn">Сохранить изменения</button>
                    </form>
                </section>
                
                <section class="donations-section">
                    <h2>Мои пожертвования</h2>
                    
                    <div class="donations-list">
                        <div class="donation-item">
                            <div class="donation-info">
                                <div class="donation-project">Школа для каждого</div>
                                <div class="donation-date">20 мая 2023</div>
                            </div>
                            <div class="donation-status">Завершено</div>
                            <div class="donation-amount">5 000 ₽</div>
                        </div>      
                    </div>
                </section>
            </div>
        </div>
    </main>
    
    <footer>
        <div class="container">
            <div class="logo">Доброе сердце</div>
            <p>Благотворительный фонд помощи нуждающимся</p>
            <p>© 2023 Благотворительный фонд "Доброе сердце". Все права защищены.</p>
        </div>
    </footer>
</body>
</html>