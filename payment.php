<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba Upwork</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main id="wrapper" class="flex-container">
        <div class="flex-container container">
            <section id="ipad_wrapper">
                <?php require_once 'partials/ipad_display.php'; ?>
            </section>
            <section id="form_wrapper" class="payment-form">
                <div>
                    <?php require 'partials/ipad_logo.php'; ?>
                    <div class="payment-gateway"><img src="img/visa.png" alt="Payment Gateways"></div>
                    <form action="" method="POST">
                        <div>
                            <div><label class="label-mobile label-desktop" for="name">Cardholder name:</label></div>
                            <div class="form-input"><input type="text" id="name" name="name" placeholder="Cardholder name" required></div>
                        </div>
                        <div>
                            <div><label class="label-mobile label-desktop" for="number">Card number:</label></div>
                            <div class="form-input"><input type="text" id="number" name="number" placeholder="0000 0000 0000 0000" required></div>
                        </div>
                        <div class="flex-container card-info">
                            <div>
                                <div><label for="expiration_month">Expiration date</label></div>
                                <div><label class="label-mobile" for="expiration_month">Expiration month:</label></div>
                                <div class="form-input"><input type="text" id="expiration_month" name="date" placeholder="Month" required></div>
                            </div>
                            <div>
                                <div><label class="label-mobile" for="expiration_year">Expiration year:</label></div>
                                <div class="form-input"><input type="text" placeholder="Year" date="year" required></div>
                            </div>
                            <div>
                                <div><label for="cvv">cvv</label></div>
                                <div><label class="label-mobile" for="cvv">CVC/CVV</label></div>
                                <div class="form-input"><input type="text" id="cvv" placeholder="CVV" required></div>
                            </div>
                        </div>
                        <div class="pay-btn"><input type="submit" value="PAY NOW"></div>
                    </form>
                </div>
                
                <button class="flex-container language-container">
                    <img class="flag" src="img/flag_en.png" alt="US Flag">
                    <span>EN</span>
                </button>
                <?php require_once 'partials/counter.php'; ?>
            </section>
        </div>
    </main>
    <script src="script.js"></script>
</body>
</html>