<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Here we add Roboto Font of Google -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" id="fontsGoogle">
    <!-- Here we use fontawesome 5.15.1 -->
    <script src="../../js/allFontAwesome.js"></script>
    <!-- Here we use normalize.css for nomalizer the styles css -->
    <link rel="stylesheet" href="../../css/normalize.css">
    <!-- Principal Styles -->
    <link rel="stylesheet" href="../../css/styles.css">
    <!-- Styles of the pages -->
    <link rel="stylesheet" href="login.css">
</head>

<body>
    <?php
        include("../../templates/nav.php")
    ?>
    <div class="loginC" id="fean">
        <div class="loginCF">
            <h2 class="titleF">
                Sign In
            </h2>
            <form action="" method="post">
                <label for="email" class="label">Email</label>
                <input type="email" name="email" id="email" placeholder="Example: info@yourcompany.com" class="input">
                <label for="password" class="label">Password</label>
                <input type="password" name="pass" id="password" placeholder="Password" class="input">
                <a href="#" class="lostP">Lost Password?</a>
                <div class="submit">
                    <input type="submit" value="Login Now" class="btn" name="register">
                </div>
            </form>
        </div>
        <div class="formStarted">
            <h2 class="titleF">
                Create New Account
            </h2>
            <?php
                include("../../templates/formRegister.php")
            ?>
        </div>
    </div>
    <div class="learn tac">
        <h2 class="learn__title">
            Want To Learn More?
        </h2>
        <p class="learn__description">
            Learn to use the BuySellGuestPost suite of products and tools with our easy-to-follow guides, articles and
            support documents.
        </p>
        <div class="learn__more">
            <div class="learnCard">
                <div class="learTitle">
                    <div class="iconLearn">
                        <i class="fas fa-newspaper"></i>
                    </div>
                    <h3>Read Articles</h3>
                </div>
                <p>
                    The latest news about the guest blogging and the BuySellGuestPost line of products and services.
                </p>
            </div>
            <a class="learnCard" id="linkM">
                <div class="learTitle">
                    <div class="iconLearn">
                        <i class="fas fa-cart-plus"></i>
                    </div>
                    <h3>View Marketplace</h3>
                </div>
                <p>
                    Get quality contextual backlinks, view guest blogging sites marketplace that includes 2500+ sites.
                </p>
            </a>
            <div class="learnCard">
                <div class="learTitle">
                    <div class="iconLearn">
                        <i class="fas fa-file-alt"></i>
                    </div>
                    <h3>Support Doc</h3>
                </div>
                <p>
                    Need any help regarding buying or selling guest posts, our experts ready to help you 24/7.
                </p>
            </div>
        </div>
    </div>
    <?php
        include("../../templates/footer.php")
    ?>
    <script src="../../js/main.js"></script>
</body>

</html>