<?php

/*функция для проверки полей ввода*/
function validate_form()
{

    // массивы для данных и ошибок
    $errors = []; // массив для ошибок
    $input = []; // массив для данных
    $method = $_SERVER['REQUEST_METHOD'];


    // забираем введенные пользователем данные и кладем в массив $input
    $method === "POST" ? $input['first_name'] = htmlspecialchars(trim($_POST['first_name'])) : $input['first_name'] = "";
    $method === "POST" ? $input['last_name'] = htmlspecialchars(trim($_POST['last_name'])) : $input['last_name'] = "";
    $method === "POST" ? $input['login'] = htmlspecialchars(trim($_POST['login'])) : $input['login'] = "";
    $method === "POST" ? $input['password'] = htmlspecialchars(trim($_POST['password'])) : $input['password'] = "";
    $method === "POST" ? $input['email'] = htmlspecialchars(trim($_POST['email'])) : $input['email'] = "";

    if ($method === "GET") {
        return $input;
    }

    /**
     * функция для проверки имени
     */
    // объявляем функцию
    function validate_first_name($first_name)
    {
        $reg_exp = "/^[а-яё]{2,}$/ui";

        if (empty($first_name)) {
            return 'Введите имя!';
        } elseif (mb_strlen($first_name) < 2) {
            return 'Имя должно состоять не менее чем из двух букв!';
        } elseif (!preg_match($reg_exp, $first_name)) {
            return 'Имя должно состоять только из русских букв!';
        } else {
            return "";
        }
    }
    // вызываем функцию для проверки имени
    $errors['first_name'] = validate_first_name($input['first_name']);



    /**
     * функция для проверки фамилии
     */
    // объявляем функцию
    function validate_last_name($last_name)
    {
        $reg2_exp = '/^[а-яё]{2,}$/ui';

        if (empty($last_name)) {
            return "Введите фамилию!";
        } elseif (mb_strlen($last_name) < 2) {
            return "Фамилия должна содержать не меньше двух букв";
        } elseif (!preg_match($reg2_exp, $last_name)) {
            return "Фамилия должна состоять только из русских букв";
        } else {
            return "";
        }
    }
    // вызываем функцию для проверки имени
    $errors['last_name'] = validate_last_name($input['last_name']);


    /**
     * функция для проверки логина
     */
    // объявляем функцию
    function validate_login($login)
    {
        $reg_exp = "/^[a-z][a-z0-9]{2,}$/ui";

        if (strlen($login) === 0) {
            return 'Введите логин';
        } elseif (strlen($login) < 2) {
            return 'Логин должен быть не короче двух символов';
        } elseif (!preg_match($reg_exp, $login)) {
            return 'Логин должен содержать только латинские буквы или цифры и должен начинаться с буквы';
        } else {
            return "";
        }
    }
    // вызываем функцию для проверки логина
    $errors['login'] = validate_login($input['login']);

    /**
     * функция для проверки емейла
     */
    // объявляем функцию
    function validate_email($email)
    {
        $reg_exp = "/^.+@.+$/u";

        if (strlen($email) === 0) {
            return 'Введите адрес электронной почты';
        } elseif (!preg_match($reg_exp, $email)) {
            return 'Адрес электронной почты введен в неверном формате';
        } else {
            return "";
        }
    }
    // вызываем функцию для проверки емейла
    $errors['email'] = validate_email($input['email']);



    /**
     * функция для проверки пароля
     */
    // объявляем функцию
    function validate_password($password)
    {
        $reg_exp = "/^.{8,}$/u";

        if (strlen($password) === 0) {
            return 'Введите пароль';
        } elseif (!preg_match($reg_exp, $password)) {
            return 'Пароль должен состоять минимум из восьми произвольных символов';
        } else {
            return "";
        }
    }
    // вызываем функцию для проверки пароля
    $errors['password'] = validate_password($input['password']);

    // возвращаем массив с данными, введенными пользователем и ошибками если они есть

    // $form_valid_flag = any($errors);

    $flag = empty(array_filter($errors, fn ($value) => $value != ""));

    // foreach ($errors as $key => $val){
    //     if ($val != ""){
    //       $flag = false;
    //       break;
    //     }
    // }

    return [$errors, $input, $flag];
}

/*Функция отображения данных при успешной обработке формы*/
// function registration_done(){
// // _HTML_;

//         echo "<h2>$_SESSION[first_name], Вы успешно зарегистрировались!</h2>";
//         echo "<p>Добро подаловать в лк!</p>";
//         echo "<p><a href='index.php'>На главную страницу</a></p>";
//         echo "<p><a href='exit.php'>Выйти</a></p>";

// }


/* Функция отображения формы*/
function show_form($errors = [], $input = [])
{

    echo <<<_HTML_
            <div class="forms-box">
            <h1 class="h1-white h1-white-margin-b">
                    Регистрация
                </h1>
                <form class ="reuse-form" action="" method="POST">
                                
                <div>
                    <label for="first_name">Имя:</label><br>
                    <input class="inp" type="text" name="first_name" placeholder="Только русские буквы" value="$input[first_name]">
                    <span>$errors[first_name]</span>
                </div>
                
                <div>
                    <label for="last_name">Фамилия:</label><br>
                    <input class="inp" type="text" name="last_name" placeholder="Только русские буквы" value="$input[last_name]">
                    <span>$errors[last_name]</span>
                </div>
                
                <div>
                    <label for="login">Логин:</label><br>
                    <input class="inp" type="text" name="login" placeholder="Латинские буквы и цифры" value="$input[login]" size="20">
                    <span>$errors[login]</span>
                </div>
                
                <div>
                    <label for="email">Электронная почта:</label><br>
                    <input class="inp" type="email" placeholder="Введите ваш email" name="email" value="$input[email]">
                    <span>$errors[email]</span>
                </div>
                
                <div>
                    <label for="password">Пароль:</label><br>
                    <input class="inp" type="password" name="password" placeholder="Более восьми символов" value="$input[password]" size="20">
                    <span>$errors[password]</span>
                </div>
                          
                <input class="inp-submit" type="submit" value="Зарегистрироваться">      
            </form> 

_HTML_;
}