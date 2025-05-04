<?php include "db.php";
session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>О нас | Доброе сердце</title>
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
        
        .container {
            width: 85%;
            max-width: 1200px;
            margin: 0 auto;
        }
        
        h1 {
            color: var(--h1-color);
            font-size: 2.5rem;
            margin-bottom: 1rem;
            text-align: center;
            padding-top: 2rem;
        }
        
        h2 {
            color: var(--h2-color);
            font-size: 2rem;
            margin-bottom: 1rem;
        }
        
        .about-hero {
            background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('https://i.postimg.cc/rsg6ZGQV/13c18722e24a69cd5ab36cf9427258ae.jpg');
            background-size: cover;
            background-position: center;
            color: white;
            text-align: center;
            padding: 5rem 0;
            margin-bottom: 3rem;
        }
        
        .about-hero-content {
            max-width: 800px;
            margin: 0 auto;
        }
        
        .about-section {
            padding: 3rem 0;
        }
        
        .about-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            align-items: center;
            margin-bottom: 3rem;
        }
        
        .about-img {
            width: 100%;
            border-radius: 8px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
        }
        
        .team-section {
            background-color: var(--light-bg);
            padding: 3rem 0;
        }
        
        .team-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }
        
        .team-member {
            background: white;
            border-radius: 8px;
            padding: 1.5rem;
            text-align: center;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
        }
        
        .team-avatar {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            margin: 0 auto 1rem;
            display: block;
        }
        
        .stats-section {
            padding: 3rem 0;
            text-align: center;
        }
        
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }
        
        .stat-item {
            background: white;
            border-radius: 8px;
            padding: 2rem;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
        }
        
        .stat-number {
            font-size: 2.5rem;
            font-weight: bold;
            color: var(--h1-color);
            margin-bottom: 0.5rem;
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
        
        @media (max-width: 768px) {
            .container {
                width: 90%;
            }
            
            .about-content {
                grid-template-columns: 1fr;
            }
            
            h1 {
                font-size: 2rem;
            }
            
            h2 {
                font-size: 1.5rem;
            }
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <?php include "header.php"; ?>
    
    <section class="about-hero">
        <div class="container">
            <div class="about-hero-content">
                <h1>О фонде "Доброе сердце"</h1>
                <p>Мы - команда единомышленников, объединенных желанием помогать тем, кто в этом нуждается.</p>
            </div>
        </div>
    </section>
    
    <section class="about-section">
        <div class="container">
            <div class="about-content">
                <div>
                    <h2>Наша история</h2>
                    <p>Фонд "Доброе сердце" был создан в 2010 году группой волонтеров, объединившихся для системной помощи тем, кто особенно нуждается в поддержке: тяжелобольным, бездомным животным, детям из детских домов и другим уязвимым категориям.</p>
                    <p>Начиная с небольших локальных акций, мы выросли в крупную организацию, реализовавшую десятки проектов. За эти годы мы:

спасли сотни бездомных животных, находя им дом и лечение;

поддержали тяжелобольных, обеспечивая их лекарствами и уходом;

помогали детям из детских домов, дарили им внимание, заботу и необходимые вещи.

Но мы понимаем, что впереди еще много работы. Каждый день к нам обращаются за помощью, и мы делаем всё возможное, чтобы ни одно животное не осталось на улице, ни один больной — без лечения, ни один ребенок — без поддержки.</p>
                </div>
                <img src="https://i.postimg.cc/hvRPR0LV/1f9ce3bdedb8b4e0474f1f56ab1c7ab2.jpg" alt="Наша команда" class="about-img">
            </div>
            
            <div class="about-content">
                <img src="https://i.postimg.cc/zft6ZXrN/childhood-cancer.jpg" alt="Наши принципы" class="about-img">
                <div>
                    <h2>Наши принципы</h2>
                    <p><strong>Прозрачность:</strong> Мы публикуем полные отчеты о расходовании средств и регулярно отчитываемся о проделанной работе.</p>
                    <p><strong>Эффективность:</strong> Каждое пожертвование используется максимально эффективно для решения конкретных проблем.</p>
                    <p><strong>Уважение:</strong> Мы помогаем с сохранением достоинства тех, кто обращается к нам за поддержкой.</p>
                    <p><strong>Ответственность:</strong> Мы берем на себя обязательства перед теми, кому помогаем, и перед нашими благотворителями.</p>
                </div>
            </div>
        </div>
    </section>
    
    <section class="team-section">
        <div class="container">
            <h2>Наша команда</h2>
            <p>В фонде работают профессионалы с большим опытом в социальной сфере и волонтерском движении.</p>
            
            <div class="team-grid">
                <div class="team-member">
                    <img src="https://randomuser.me/api/portraits/women/43.jpg" alt="Анна Петрова" class="team-avatar">
                    <h3>Анна Петрова</h3>
                    <p>Директор фонда</p>
                    <p>Опыт работы в социальной сфере - 15 лет</p>
                </div>
                
                <div class="team-member">
                    <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Иван Смирнов" class="team-avatar">
                    <h3>Иван Смирнов</h3>
                    <p>Координатор проектов</p>
                    <p>Организовал более 50 благотворительных акций</p>
                </div>
                
                <div class="team-member">
                    <img src="https://randomuser.me/api/portraits/women/65.jpg" alt="Елена Козлова" class="team-avatar">
                    <h3>Елена Козлова</h3>
                    <p>Финансовый директор</p>
                    <p>Обеспечивает прозрачность всех операций</p>
                </div>
                
                <div class="team-member">
                    <img src="https://randomuser.me/api/portraits/men/76.jpg" alt="Дмитрий Иванов" class="team-avatar">
                    <h3>Дмитрий Иванов</h3>
                    <p>Руководитель волонтеров</p>
                    <p>Координирует работу более 200 волонтеров</p>
                </div>
            </div>
        </div>
    </section>
    
    <section class="stats-section">
        <div class="container">
            <h2>Наши достижения</h2>
            <p>За годы работы мы смогли сделать многое, но впереди еще больше задач</p>
            
            <div class="stats-grid">
                <div class="stat-item">
                    <div class="stat-number">12+</div>
                    <p>Лет работы</p>
                </div>
                
                <div class="stat-item">
                    <div class="stat-number">50+</div>
                    <p>Реализованных проектов</p>
                </div>
                
                <div class="stat-item">
                    <div class="stat-number">10 000+</div>
                    <p>Людей получили помощь</p>
                </div>
                
                <div class="stat-item">
                    <div class="stat-number">250+</div>
                    <p>Активных волонтеров</p>
                </div>
            </div>
            
            <a href="projects.php" class="btn">Поддержать наши проекты</a>
        </div>
    </section>
    
    <?php include "footer.php"; ?>
</body>
</html>