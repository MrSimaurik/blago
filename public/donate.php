<?php include "db.php";
session_start();

// Получаем ID проекта из URL
$project_id = isset($_GET['project']) ? intval($_GET['project']) : 0;

// Получаем информацию о проекте
$stm = $connect->prepare("SELECT * FROM `project` WHERE id = ?");
$stm->execute([$project_id]);
$project = $stm->fetch();



if (!$project) {
    header('Location: projects.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Пожертвование | Доброе сердце</title>
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
            background-color: var(--light-bg);
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
        
        .donate-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 2rem;
            margin: 3rem 0;
        }
        
        .project-info {
            background: white;
            border-radius: 8px;
            padding: 2rem;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
        }
        
        .project-img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 8px;
            margin-bottom: 1.5rem;
        }
        
        .donation-form {
            background: white;
            border-radius: 8px;
            padding: 2rem;
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
        
        .form-group input, 
        .form-group select {
            width: 100%;
            padding: 0.8rem;
            border: 1px solid var(--border-color);
            border-radius: 5px;
            font-size: 1rem;
            box-sizing: border-box;
        }
        
        .amount-options {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 0.5rem;
            margin-bottom: 1rem;
        }
        
        .amount-option {
            background: white;
            border: 1px solid var(--border-color);
            border-radius: 5px;
            padding: 0.8rem;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s;
        }
        
        .amount-option:hover, 
        .amount-option.selected {
            background-color: var(--h1-color);
            color: white;
            border-color: var(--h1-color);
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
            font-size: 1.1rem;
            margin-top: 1rem;
        }
        
        .btn:hover {
            background-color: #e67a3a;
        }
        
        .project-progress {
            margin: 1.5rem 0;
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
            width: <?=($project['target_current'] / $project['target_amount']) * 100?>%;
        }
        
        .progress-info {
            display: flex;
            justify-content: space-between;
            font-size: 0.9rem;
            color: #666;
        }
        
        @media (max-width: 768px) {
            .container {
                width: 90%;
            }
            
            .donate-container {
                grid-template-columns: 1fr;
            }
            
            h1 {
                font-size: 2rem;
            }
            
            .amount-options {
                grid-template-columns: repeat(2, 1fr);
            }
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <?php include "header.php"; ?>
    
    <main class="container">
        <h1>Поддержать проект</h1>
        
        <div class="donate-container">
            <div class="project-info">
                <img src="./images/Project/<?=$project['img_path']?>" alt="<?=$project['tittle']?>" class="project-img">
                <h2><?=$project['tittle']?></h2>
                <p><?=$project['purpose_of_donation']?></p>
                
                <div class="project-progress">
                    <div class="progress-bar">
                        <div class="progress-fill"></div>
                    </div>
                    <div class="progress-info">
                        <span>Собрано: <?=number_format($project['target_current'], 0, '', ' ')?> руб.</span>
                        <span>Цель: <?=number_format($project['target_amount'], 0, '', ' ')?> руб.</span>
                    </div>
                </div>
            </div>
            
            <div class="donation-form">
                <h2>Сделать пожертвование</h2>
                
                <form action="action.php?action=donate&project=<?=$_GET['project']?>" method="POST">
                    <input type="hidden" name="project_id" value="<?=$project['id']?>">
                    
                    <div class="form-group">
                        <label for="amount">Сумма пожертвования (руб.)</label>
                        <div class="amount-options">
                            <div class="amount-option" data-amount="500">500</div>
                            <div class="amount-option" data-amount="1000">1 000</div>
                            <div class="amount-option" data-amount="2000">2 000</div>
                            <div class="amount-option" data-amount="3000">3 000</div>
                            <div class="amount-option" data-amount="5000">5 000</div>
                            <div class="amount-option" data-amount="10000">10 000</div>
                        </div>
                        <input type="number" id="amount" name="amount" min="100" step="100" required>
                    </div>                    
                    <button type="submit" class="btn">Подтвердить пожертвование</button>
                </form>
            </div>
        </div>
    </main>
    
    <?php include "footer.php" ?>
    
    <script>
        // Обработка выбора суммы
        document.querySelectorAll('.amount-option').forEach(option => {
            option.addEventListener('click', function() {
                document.querySelectorAll('.amount-option').forEach(opt => {
                    opt.classList.remove('selected');
                });
                this.classList.add('selected');
                document.getElementById('amount').value = this.getAttribute('data-amount');
            });
        });
    </script>
</body>
</html>