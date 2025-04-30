<?php include "db.php";
session_start();

function calculateProgressPercent($current, $target) {
    if ($target <= 0) return 0; // Чтобы избежать деления на ноль
    
    $percent = ($current / $target) * 100;
    
    // Ограничиваем 100%, если собрано больше цели
    return min(round($percent, 1), 100);
}

?>
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
                                
        .projects-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 2rem;
            padding: 1rem 0 3rem;
            justify-content: center;
        }
        
        .project-card {
            background: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
            transition: transform 0.3s;
            
            max-width: 360px;

            display: flex;
            flex-direction: column;
            flex-grow: 1;
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
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            flex-grow: 1;
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

            box-sizing: border-box;
        }
        
        .btn:hover {
            background-color: #e67a3a;
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
<?php include "header.php"; ?>
    <main>
        <div class="container">
            <h1>Наши проекты</h1>
            
            <div class="projects-intro">
                <p>Мы реализуем различные программы помощи тем, кто в ней нуждается. Выберите проект, который вас заинтересует, и внесите свой вклад в доброе дело.</p>
            </div>
                        
            <div class="projects-grid">
            <?php 
                $stm=$connect->query('SELECT * FROM `project`');
                $projects=$stm->fetchAll();?>
                <?php foreach ($projects as $project) {?>
                <div class="project-card">
                    <img src=".\images\Project\<?=$project['img_path']?>" alt="<?=$project['img_path']?>" class="project-img">
                    <div class="project-content">
                        <div class="wrapper">
                        <h3 class="project-title"><?=$project['tittle']?></h3>
                        <p class="project-description"><?=$project['purpose_of_donation']?></p>
                        
                        <div class="project-progress">
                            <div class="progress-bar">
                            <div class="progress-fill" 
                                style="width: <?=calculateProgressPercent($project['target_current'], $project['target_amount']) ?>%"></div>                            </div>
                            <div class="progress-info">
                                <span>Собрано:<?=$project['target_current']?> руб.</span>
                                <span>цель:<?=$project['target_amount']?> руб.</span>
                            </div>
                            </div>
                        </div>
                        <a href="donate.php?project=<?=$project['id']?>" class="btn">Помочь проекту</a>
                    </div>
                </div> 
                <?php }?>              
            </div>
        </div>
    </main>
    
    <?php include "footer.php" ?>
</body>
</html>