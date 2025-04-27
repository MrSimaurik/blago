<?php include "db.php";
session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Доброе сердце - Благотворительный фонд</title>
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
        }
        
        h2 {
            color: var(--h2-color);
            font-size: 2rem;
            margin-bottom: 1rem;
        }
        
        .hero {
            background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('https://images.unsplash.com/photo-1521791055366-0d553872125f?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
            background-size: cover;
            background-position: center;
            color: white;
            text-align: center;
            padding: 5rem 0;
        }
        
        .hero-content {
            max-width: 800px;
            margin: 0 auto;
        }
        
        .btn {
            display: inline-block;
            background-color: var(--button-color);
            color: white;
            padding: 0.8rem 1.5rem;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
            margin-top: 1rem;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        
        .btn:hover {
            background-color: #e67a3a;
        }
        
        .mission {
            padding: 4rem 0;
            text-align: center;
        }
        
        .projects {
            padding: 4rem 0;
            background-color: var(--light-bg);
        }
        
        .project-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }
        
        .project-card {
            background: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
        }
        
        .project-img {
            height: 200px;
            width: 100%;
            object-fit: cover;
        }
        
        .project-content {
            padding: 1.5rem;
            display: flex;
            flex-direction: column;
            
        }
        
        .how-to-help {
            padding: 4rem 0;
            text-align: center;
        }
        
        .help-options {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }
        
        .help-option {
            padding: 2rem;
            background: white;
            border-radius: 8px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
        }
        
        .help-option i {
            font-size: 2.5rem;
            color: var(--h1-color);
            margin-bottom: 1rem;
        }        
        @media (max-width: 768px) {
            .container {
                width: 90%;
            }
            
            .nav-links {
                display: none;
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
<?php include "header.php";?> 
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <h1>Помогаем тем, кто в этом нуждается</h1>
                <p>Каждое ваше пожертвование делает чью-то жизнь лучше. Присоединяйтесь к нам в создании мира, где каждый человек имеет шанс на достойную жизнь.</p>
                <a href="#" class="btn">Помочь сейчас</a>
            </div>
        </div>
    </section>
    
    <section class="mission">
        <div class="container">
            <h2>Наша миссия</h2>
            <p>Фонд "Доброе сердце" создан для помощи людям, оказавшимся в трудной жизненной ситуации. Мы работаем по нескольким направлениям: помощь малоимущим семьям, поддержка пожилых людей, забота о детях-сиротах и помощь бездомным.</p>
            <p>Наша цель - создать систему эффективной адресной помощи, где каждый нуждающийся получит именно то, что ему действительно необходимо.</p>
            <a href="#" class="btn">Узнать больше</a>
        </div>
    </section>
    
    <section class="projects">
        <div class="container">
            <h2>Наши проекты</h2>
            <div class="project-grid">
                <div class="project-card">
                    <img src="https://images.unsplash.com/photo-1529333166437-7750a6dd5a70?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Помощь детям" class="project-img">
                    <div class="project-content">
                        <h3>Школа для каждого</h3>
                        <p>Обеспечиваем детей из малоимущих семей школьными принадлежностями, формой и всем необходимым для обучения.</p>
                        <a href="#" class="btn">Поддержать</a>
                    </div>
                </div>
                
                <div class="project-card">
                    <img src="https://images.unsplash.com/photo-1532629345422-7515f3d16bb6?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Помощь пожилым" class="project-img">
                    <div class="project-content">
                        <h3>Забота о старшем поколении</h3>
                        <p>Организуем доставку продуктов и лекарств пожилым людям, которые не могут выйти из дома.</p>
                        <a href="#" class="btn">Поддержать</a>
                    </div>
                </div>
                
                <div class="project-card">
                    <img src="https://images.unsplash.com/photo-1579684385127-1ef15d508118?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Помощь бездомным" class="project-img">
                    <div class="project-content">
                        <h3>Ночлежка</h3>
                        <p>Содержим приют для бездомных, где они могут переночевать, принять душ и получить горячую еду.</p>
                        <a href="#" class="btn">Поддержать</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="how-to-help" id="how_help">
        <div class="container">
            <h2>Как нам помочь</h2>
            <p>Есть много способов поддержать нашу работу. Выберите тот, который вам ближе:</p>
            
            <div class="help-options">
                <div class="help-option">
                    <i class="fas fa-share-alt"></i>
                    <h3>Расскажите о нас</h3>
                    <p>Поделитесь информацией о нашем фонде в социальных сетях. Чем больше людей узнает о нас, тем больше помощи мы сможем оказать.</p>
                </div>
                
                <div class="help-option">
                    <i class="fas fa-lightbulb"></i>
                    <h3>Предложите идею</h3>
                    <p>Если у вас есть идеи или предложения для нас, мы будем рады сотрудничеству. Вместе мы можем сделать больше!</p>
                </div>
                
                <div class="help-option">
                    <i class="fas fa-hand-holding-heart"></i>
                    <h3>Материальная помощь</h3>
                    <p>Деньгами, вещами, продуктами. Всегда востребованы средства гигиены, нижнее белье, смартфоны.</p>
                </div>
                
                <div class="help-option">
                    <i class="fas fa-hands-helping"></i>
                    <h3>Станьте волонтером</h3>
                    <p>Помогая нуждающимся, вы меняете свою жизнь к лучшему. Заполните анкету и присоединяйтесь к нашей команде.</p>
                </div>
            </div>
            
            <a href="#" class="btn">Хочу помочь</a>
        </div>
    </section>
    <?php include "footer.php" ?>
</body>
</html>