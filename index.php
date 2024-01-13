<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba Upwork</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main id="wrapper">
        <div class="flex-container container">
            <section id="ipad_wrapper">
                <?php require_once 'partials/ipad_display.php'; ?>
            </section>
            <section id="form_wrapper">
                <div>
                    <?php require 'partials/ipad_logo.php'; ?>
                    <h1>Please fill in your details</h1>
                    <form action="payment.php" class="flex-container" method="POST">
                        <div class="form-input"><input name="email" type="email" placeholder="E-mail" required></div>
                        <div class="form-input"><input name="password" type="password" placeholder="Password" required></div>
                        <div class="form-inputs">
                            <div class="terms-conditions flex-container"><input type="checkbox" for="terms"><label for="terms">I accept the terms of use. <a href="">Read more.</a></label></div>
                            <div class="submit-btn"><input class="pink-selected" type="submit" value="Continue"></div>
                        </div>
                    </form>
            
                    <button class="flex-container language-container">
                        <img class="flag" src="img/flag_en.png" alt="US Flag">
                        <span>EN</span>
                    </button>
                </div>
                <?php require_once 'partials/counter.php'; ?>
            </section>
        </div>
    </main>
    <script src="script.js"></script>
</body>
</html>