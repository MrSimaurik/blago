<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вход | Доброе сердце</title>
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
            background-color: var(--light-bg);
        }
        
        header {
            background-color: white;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            padding: 1rem 0;
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
            text-align: center;
        }
        
        .auth-container {
            max-width: 500px;
            margin: 3rem auto;
            padding: 2rem;
            background: white;
            border-radius: 8px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
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
            border: 1px solid #ddd;
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
            width: 100%;
            font-size: 1rem;
        }
        
        .btn:hover {
            background-color: #e67a3a;
        }
        
        .auth-links {
            text-align: center;
            margin-top: 1.5rem;
        }
        
        .auth-links a {
            color: var(--h1-color);
            text-decoration: none;
        }
        
        .auth-links a:hover {
            text-decoration: underline;
        }
        
        footer {
            background-color: #333;
            color: white;
            padding: 3rem 0;
            text-align: center;
            margin-top: 3rem;
        }
        
        @media (max-width: 768px) {
            .container {
                width: 90%;
            }
            
            .auth-container {
                padding: 1.5rem;
                margin: 2rem auto;
            }
            
            h1 {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <nav>
                <div class="logo">Доброе сердце</div>
                <ul class="nav-links">
                    <li><a href="index.html">Главная</a></li>
                    <li><a href="#">О нас</a></li>
                    <li><a href="#">Проекты</a></li>
                    <li><a href="#">Как помочь</a></li>
                    <li><a href="#">Контакты</a></li>
                </ul>
            </nav>
        </div>
    </header>
    
    <main>
        <div class="container">
            <h1>Вход в личный кабинет</h1>
            
            <div class="auth-container">
                <form action="#" method="post">
                    <div class="form-group">
                        <label for="login">Логин или email</label>
                        <input type="text" id="login" name="login" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="password">Пароль</label>
                        <input type="password" id="password" name="password" required>
                    </div>
                    
                    <button type="submit" class="btn">Войти</button>
                </form>
                
                <div class="auth-links">
                    <p>Еще нет аккаунта? <a href="register.html">Зарегистрируйтесь</a></p>
                    <p><a href="#">Забыли пароль?</a></p>
                </div>
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