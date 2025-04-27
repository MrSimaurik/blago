<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Наши проекты | Доброе сердце</title>
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
            padding-top: 2rem;
        }
        
        .projects-intro {
            text-align: center;
            max-width: 800px;
            margin: 0 auto 3rem;
            padding: 0 1rem;
        }
        
        .projects-filter {
            display: flex;
            justify-content: center;
            margin-bottom: 2rem;
            flex-wrap: wrap;
        }
        
        .filter-btn {
            background: none;
            border: 1px solid var(--h1-color);
            color: var(--h1-color);
            padding: 0.5rem 1rem;
            margin: 0.5rem;
            border-radius: 20px;
            cursor: pointer;
            transition: all 0.3s;
        }
        
        .filter-btn:hover, .filter-btn.active {
            background-color: var(--h1-color);
            color: white;
        }
        
        .projects-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 2rem;
            padding: 1rem 0 3rem;
        }
        
        .project-card {
            background: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
            transition: transform 0.3s;
        }
        
        .project-card:hover {
            transform: translateY(-5px);
        }
        
        .project-img {
            height: 200px;
            width: 100%;
            object-fit: cover;
        }
        
        .project-content {
            padding: 1.5rem;
        }
        
        .project-category {
            display: inline-block;
            background-color: var(--light-bg);
            color: var(--h1-color);
            padding: 0.3rem 0.8rem;
            border-radius: 20px;
            font-size: 0.8rem;
            margin-bottom: 0.8rem;
        }
        
        .project-title {
            font-size: 1.3rem;
            margin: 0.5rem 0;
            color: var(--h1-color);
        }
        
        .project-description {
            margin-bottom: 1.5rem;
            color: #666;
        }
        
        .project-progress {
            margin-bottom: 1rem;
        }
        
        .progress-bar {
            height: 6px;
            background-color: #eee;
            border-radius: 3px;
            margin-bottom: 0.5rem;
            overflow: hidden;
        }
        
        .progress-fill {
            height: 100%;
            background-color: var(--h2-color);
            width: 65%;
        }
        
        .progress-info {
            display: flex;
            justify-content: space-between;
            font-size: 0.9rem;
            color: #666;
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
            text-align: center;
        }
        
        .btn:hover {
            background-color: #e67a3a;
        }
        
        footer {
            background-color: #333;
            color: white;
            padding: 3rem 0;
            text-align: center;
        }
        
        .footer-links {
            display: flex;
            justify-content: center;
            list-style: none;
            padding: 0;
            margin: 1rem 0;
        }
        
        .footer-links li {
            margin: 0 1rem;
        }
        
        .footer-links a {
            color: white;
            text-decoration: none;
        }
        
        @media (max-width: 768px) {
            .container {
                width: 90%;
            }
            
            .projects-grid {
                grid-template-columns: 1fr;
            }
            
            h1 {
                font-size: 2rem;
            }
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <header>
        <div class="container">
            <nav>
                <div class="logo">Доброе сердце</div>
                <ul class="nav-links">
                    <li><a href="index.html">Главная</a></li>
                    <li><a href="#">О нас</a></li>
                    <li><a href="projects.html" class="active">Проекты</a></li>
                    <li><a href="#">Как помочь</a></li>
                    <li><a href="login.html">Личный кабинет</a></li>
                </ul>
            </nav>
        </div>
    </header>
    
    <main>
        <div class="container">
            <h1>Наши проекты</h1>
            
            <div class="projects-intro">
                <p>Мы реализуем различные программы помощи тем, кто в ней нуждается. Выберите проект, который вас заинтересует, и внесите свой вклад в доброе дело.</p>
            </div>
            
            <div class="projects-filter">
                <button class="filter-btn active">Все проекты</button>
                <button class="filter-btn">Детям</button>
                <button class="filter-btn">Пожилым</button>
                <button class="filter-btn">Бездомным</button>
                <button class="filter-btn">Медицина</button>
                <button class="filter-btn">Образование</button>
            </div>
            
            <div class="projects-grid">
                <!-- Проект 1 -->
                <div class="project-card">
                    <img src="https://images.unsplash.com/photo-1529333166437-7750a6dd5a70?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Школа для каждого" class="project-img">
                    <div class="project-content">
                        <span class="project-category">Детям / Образование</span>
                        <h3 class="project-title">Школа для каждого</h3>
                        <p class="project-description">Обеспечиваем детей из малоимущих семей школьными принадлежностями, формой и всем необходимым для обучения.</p>
                        
                        <div class="project-progress">
                            <div class="progress-bar">
                                <div class="progress-fill" style="width: 65%"></div>
                            </div>
                            <div class="progress-info">
                                <span>Собрано: 325 000 ₽</span>
                                <span>Цель: 500 000 ₽</span>
                            </div>
                        </div>
                        
                        <a href="#" class="btn">Помочь проекту</a>
                    </div>
                </div>
                
                <!-- Проект 2 -->
                <div class="project-card">
                    <img src="https://images.unsplash.com/photo-1532629345422-7515f3d16bb6?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Забота о старшем поколении" class="project-img">
                    <div class="project-content">
                        <span class="project-category">Пожилым</span>
                        <h3 class="project-title">Забота о старшем поколении</h3>
                        <p class="project-description">Организуем доставку продуктов и лекарств пожилым людям, которые не могут выйти из дома.</p>
                        
                        <div class="project-progress">
                            <div class="progress-bar">
                                <div class="progress-fill" style="width: 40%"></div>
                            </div>
                            <div class="progress-info">
                                <span>Собрано: 120 000 ₽</span>
                                <span>Цель: 300 000 ₽</span>
                            </div>
                        </div>
                        
                        <a href="#" class="btn">Помочь проекту</a>
                    </div>
                </div>
                
                <!-- Проект 3 -->
                <div class="project-card">
                    <img src="https://images.unsplash.com/photo-1579684385127-1ef15d508118?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Ночлежка" class="project-img">
                    <div class="project-content">
                        <span class="project-category">Бездомным</span>
                        <h3 class="project-title">Ночлежка</h3>
                        <p class="project-description">Содержим приют для бездомных, где они могут переночевать, принять душ и получить горячую еду.</p>
                        
                        <div class="project-progress">
                            <div class="progress-bar">
                                <div class="progress-fill" style="width: 85%"></div>
                            </div>
                            <div class="progress-info">
                                <span>Собрано: 425 000 ₽</span>
                                <span>Цель: 500 000 ₽</span>
                            </div>
                        </div>
                        
                        <a href="#" class="btn">Помочь проекту</a>
                    </div>
                </div>
                
                <!-- Проект 4 -->
                <div class="project-card">
                    <img src="https://images.unsplash.com/photo-1576091160550-2173dba999ef?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Здоровое детство" class="project-img">
                    <div class="project-content">
                        <span class="project-category">Детям / Медицина</span>
                        <h3 class="project-title">Здоровое детство</h3>
                        <p class="project-description">Обеспечиваем детей с хроническими заболеваниями необходимыми лекарствами и медицинским оборудованием.</p>
                        
                        <div class="project-progress">
                            <div class="progress-bar">
                                <div class="progress-fill" style="width: 30%"></div>
                            </div>
                            <div class="progress-info">
                                <span>Собрано: 450 000 ₽</span>
                                <span>Цель: 1 500 000 ₽</span>
                            </div>
                        </div>
                        
                        <a href="#" class="btn">Помочь проекту</a>
                    </div>
                </div>
                
                <!-- Проект 5 -->
                <div class="project-card">
                    <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Теплый дом" class="project-img">
                    <div class="project-content">
                        <span class="project-category">Семьям</span>
                        <h3 class="project-title">Теплый дом</h3>
                        <p class="project-description">Помогаем многодетным и малоимущим семьям с ремонтом жилья перед зимним сезоном.</p>
                        
                        <div class="project-progress">
                            <div class="progress-bar">
                                <div class="progress-fill" style="width: 55%"></div>
                            </div>
                            <div class="progress-info">
                                <span>Собрано: 275 000 ₽</span>
                                <span>Цель: 500 000 ₽</span>
                            </div>
                        </div>
                        
                        <a href="#" class="btn">Помочь проекту</a>
                    </div>
                </div>
                
                <!-- Проект 6 -->
                <div class="project-card">
                    <img src="https://images.unsplash.com/photo-1521791055366-0d553872125f?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Помощь беженцам" class="project-img">
                    <div class="project-content">
                        <span class="project-category">Беженцы</span>
                        <h3 class="project-title">Помощь беженцам</h3>
                        <p class="project-description">Оказываем гуманитарную помощь беженцам: продукты, одежда, временное жилье и юридическая поддержка.</p>
                        
                        <div class="project-progress">
                            <div class="progress-bar">
                                <div class="progress-fill" style="width: 70%"></div>
                            </div>
                            <div class="progress-info">
                                <span>Собрано: 700 000 ₽</span>
                                <span>Цель: 1 000 000 ₽</span>
                            </div>
                        </div>
                        
                        <a href="#" class="btn">Помочь проекту</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
    
    <footer>
        <div class="container">
            <div class="logo">Доброе сердце</div>
            <p>Благотворительный фонд помощи нуждающимся</p>
            
            <ul class="footer-links">
                <li><a href="#">О нас</a></li>
                <li><a href="projects.html">Проекты</a></li>
                <li><a href="#">Отчеты</a></li>
                <li><a href="#">Контакты</a></li>
                <li><a href="#">Политика конфиденциальности</a></li>
            </ul>
            
            <p>© 2023 Благотворительный фонд "Доброе сердце". Все права защищены.</p>
        </div>
    </footer>
</body>
</html>