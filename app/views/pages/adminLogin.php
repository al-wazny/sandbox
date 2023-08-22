<?php require_once(APP_ROOT.'/views/components/index.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?= head() ?>
    <title>Admin panel | Login</title>
    <style>
       .form {
            --input-focus: #2d8cf0;
            --font-color: #323232;
            --font-color-sub: #666;
            --bg-color: #fff;
            --main-color: #323232;
            padding: 20px;
            background: lightgrey;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            justify-content: center;
            gap: 20px;
            border-radius: 5px;
            border: 2px solid var(--main-color);
            box-shadow: 4px 4px var(--main-color);
        }

        .title {
            color: var(--font-color);
            font-weight: 900;
            font-size: 20px;
            margin-bottom: 25px;
        }

        .title span {
            color: var(--font-color-sub);
            font-weight: 600;
            font-size: 17px;
        }

        .input {
            width: 250px;
            height: 40px;
            border-radius: 5px;
            border: 2px solid var(--main-color);
            background-color: var(--bg-color);
            box-shadow: 4px 4px var(--main-color);
            font-size: 15px;
            font-weight: 600;
            color: var(--font-color);
            padding: 5px 10px;
            outline: none;
        }

        .input::placeholder {
            color: var(--font-color-sub);
            opacity: 0.8;
        }

        .input:focus {
            border: 2px solid var(--input-focus);
        }

        .button-confirm {
            margin: 50px auto 0 auto;
            width: 120px;
            height: 40px;
            border-radius: 5px;
            border: 2px solid var(--main-color);
            background-color: var(--bg-color);
            box-shadow: 4px 4px var(--main-color);
            font-size: 17px;
            font-weight: 600;
            color: var(--font-color);
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container vh-100 d-flex align-items-center justify-content-center">
        <div>
            <form class="form" action="/pages/checkAdminCredentials">
                <div class="title">Welcome,<br><span>sign up to continue</span></div>
                <input type="text" placeholder="Username" name="username" class="input">
                <input type="password" placeholder="Password" name="password" class="input">
                <button class="button-confirm">Let`s go →</button>
            </form>
        </div>
    </div>
</body>