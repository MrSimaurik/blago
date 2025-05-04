<?php include "db.php";
session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Контакты | Доброе сердце</title>
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
        
        .contacts-hero {
            background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('https://images.unsplash.com/photo-1521791136064-7986c2920216?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
            background-size: cover;
            background-position: center;
            color: white;
            text-align: center;
            padding: 5rem 0;
            margin-bottom: 3rem;
        }
        
        .contacts-hero-content {
            max-width: 800px;
            margin: 0 auto;
        }
        
        .contacts-section {
            padding: 3rem 0;
        }
        
        .contacts-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }
        
        .contact-card {
            background: white;
            border-radius: 8px;
            padding: 2rem;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
            text-align: center;
        }
        
        .contact-icon {
            font-size: 2.5rem;
            color: var(--h1-color);
            margin-bottom: 1rem;
        }
        
        .contact-card h3 {
            margin-bottom: 1rem;
            color: var(--h1-color);
        }
        
        .contact-card a {
            color: var(--h1-color);
            text-decoration: none;
        }
        
        .contact-card a:hover {
            text-decoration: underline;
        }
        
        .map-container {
            margin: 3rem 0;
            height: 400px;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
        }
        
        .contact-form {
            background: white;
            border-radius: 8px;
            padding: 2rem;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
            max-width: 600px;
            margin: 0 auto;
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
        .form-group textarea {
            width: 100%;
            padding: 0.8rem;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
        }
        
        .form-group textarea {
            min-height: 150px;
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
    
    <section class="contacts-hero">
        <div class="container">
            <div class="contacts-hero-content">
                <h1>Наши контакты</h1>
                <p>Мы всегда рады ответить на ваши вопросы и предложения. Свяжитесь с нами удобным для вас способом.</p>
            </div>
        </div>
    </section>
    
    <section class="contacts-section">
        <div class="container">
            <h2>Способы связи</h2>
            <p>Выберите удобный для вас способ связи с нашим фондом</p>
            
            <div class="contacts-grid">
                <div class="contact-card">
                    <div class="contact-icon">
                        <i class="fas fa-phone-alt"></i>
                    </div>
                    <h3>Телефон</h3>
                    <p>+7 (123) 456-78-90</p>
                    <p>Рабочие дни: 9:00 - 18:00</p>
                </div>
                
                <div class="contact-card">
                    <div class="contact-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <h3>Электронная почта</h3>
                    <p><a href="mailto:info@dobroe-serdce.ru">info@dobroe-serdce.ru</a></p>
                    <p>Отвечаем в течение 24 часов</p>
                </div>
                
                <div class="contact-card">
                    <div class="contact-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <h3>Адрес</h3>
                    <p>г. Москва, ул. Добрая, д. 15, офис 42</p>
                    <p>Прием по предварительной записи</p>
                </div>
            </div>
            
            <div class="map-container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2245.373789417037!2d37.61842331593095!3d55.75393098055245!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b54a5a738fa419%3A0x7c347d506f52311!2z0JrRgNCw0YHQvdCw0Y8g0J_RgNC10YHQvdC40LbQsNGA0LjRjywg0JzQvtGB0LrQstCw!5e0!3m2!1sru!2sru!4v1620000000000!5m2!1sru!2sru" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            
            <h2>Форма обратной связи</h2>
            <p>Оставьте ваше сообщение, и мы обязательно вам ответим</p>
            
            <div class="contact-form">
                <form action="action.php?action=contact" method="post">
                    <div class="form-group">
                        <label for="name">Ваше имя</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Электронная почта</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="message">Сообщение</label>
                        <textarea id="message" name="message" required></textarea>
                    </div>
                    
                    <button type="submit" class="btn">Отправить сообщение</button>
                </form>
            </div>
        </div>
    </section>
    
    <?php include "footer.php"; ?>

    <?php include "db.php";
session_start();

// Проверяем, была ли форма отправлена
$formSubmitted = isset($_GET['contact']) && $_GET['contact'] == 'success';
?>
    <style>
        /* Существующие стили остаются без изменений */
        
        /* Добавляем стили для уведомления */
        .notification {
            position: fixed;
            top: 20px;
            right: 20px;
            background-color: #4CAF50;
            color: white;
            padding: 15px 25px;
            border-radius: 5px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.2);
            z-index: 1000;
            display: none;
            animation: slideIn 0.5s, fadeOut 0.5s 2.5s forwards;
        }
        
        @keyframes slideIn {
            from {right: -300px; opacity: 0;}
            to {right: 20px; opacity: 1;}
        }
        
        @keyframes fadeOut {
            from {opacity: 1;}
            to {opacity: 0;}
        }
    </style>
</head>
<body>
    
    <!-- Добавляем уведомление -->
    <div id="notification" class="notification" style="<?= $formSubmitted ? 'display: block;' : '' ?>">
        Форма успешно отправлена! Мы свяжемся с вами в ближайшее время.
    </div>
    <script>
        // Показываем уведомление, если форма была отправлена
        <?php if ($formSubmitted): ?>
        document.addEventListener('DOMContentLoaded', function() {
            const notification = document.getElementById('notification');
            notification.style.display = 'block';
            
            // Скрываем уведомление через 3 секунды
            setTimeout(() => {
                notification.style.display = 'none';
            }, 3000);
        });
        <?php endif; ?>
    </script>
</body>
</html>
</body>
</html>