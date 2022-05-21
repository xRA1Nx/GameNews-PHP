<?php

/************************************
ФОРМА РЕГИСТРАЦИИ
 ************************************/

function validate_reg_form()
{

    // массивы для данных и ошибок
    $errors = []; // массив для ошибок
    $input = []; // массив для данных
    $method = $_SERVER['REQUEST_METHOD'];



    // забираем введенные пользователем данные и кладем в массив $input
    $method === "POST" ? $input['first_name'] = htmlspecialchars(trim($_POST['first_name'])) : $input['first_name'] = "";
    $method === "POST" ? $input['last_name'] = htmlspecialchars(trim($_POST['last_name'])) : $input['last_name'] = "";
    $method === "POST" ? $input['password'] = htmlspecialchars(trim($_POST['password'])) : $input['password'] = "";
    $method === "POST" ? $input['password2'] = htmlspecialchars(trim($_POST['password2'])) : $input['password2'] = "";
    $method === "POST" ? $input['email'] = htmlspecialchars(trim($_POST['email'])) : $input['email'] = "";


    if ($method === "GET") {
        return $input;
    }


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

    function validate_email($email)
    {
        require './templates/functions/arrays_fns.php';
        require './templates/configs/db_connect.php';
        $query = "SELECT email FROM users";
        $query_res = $pdo->query($query);
        $query_res = $query_res->fetchall();
        $reg_exp = "/^.+@.+$/u";


        if (strlen($email) === 0) {
            return 'Введите адрес электронной почты';
        } elseif (!preg_match($reg_exp, $email)) {
            return 'Адрес электронной почты введен в неверном формате';
        } elseif (in_fetch_array($query_res, "0", $email,)) {
            return "пользователь с эл. почтой  $email уже зарегистрирован";
        } else {
            return "";
        }
    }


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

    function validate_password2($password, $password2)
    {
        if (strlen($password2) === 0) {
            return 'подтвердите пароль';
        } elseif ($password != $password2) {
            return 'пароль не совпадает';
        } else {
            return "";
        }
    }

    $errors['first_name'] = validate_first_name($input['first_name']);
    $errors['last_name'] = validate_last_name($input['last_name']);
    $errors['email'] = validate_email($input['email']);
    $errors['password'] = validate_password($input['password']);
    $errors['password2'] = validate_password2($input['password'], $input['password2']);

    $flag = empty(array_filter($errors, fn ($value) => $value != ""));
    return [$errors, $input, $flag];
}

function show_reg_form($errors = [], $input = [])
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
                    <label for="email">Электронная почта:</label><br>
                    <input class="inp" type="email" placeholder="Введите ваш email" name="email" value="$input[email]">
                    <span>$errors[email]</span>
                </div>
                
                <div>
                    <label for="password">Пароль:</label><br>
                    <input class="inp" type="password" name="password" placeholder="Более восьми символов" value="$input[password]" size="20">
                    <span>$errors[password]</span>
                </div>
                <div>
                    <label for="password">Подтвердите пароль:</label><br>
                    <input class="inp" type="password" name="password2" placeholder="пароли должны совпадать" value="$input[password2]" size="20">
                    <span>$errors[password2]</span>
                </div>
                          
                <input class="inp-submit" type="submit" value="Зарегистрироваться">      
            </form> 

_HTML_;
}

/************************************
ФОРМА АВТОРИЗАЦИИ
 ************************************/

function validate_signin_form()
{

    // массивы для данных и ошибок
    $errors = []; // массив для ошибок
    $input = []; // массив для данных
    $method = $_SERVER['REQUEST_METHOD'];


    // забираем введенные пользователем данные и кладем в массив $input
    $method === "POST" ? $input['email'] = htmlspecialchars(trim($_POST['email'])) : $input['email'] = "";
    $method === "POST" ? $input['password'] = htmlspecialchars(trim($_POST['password'])) : $input['password'] = "";


    if ($method === "GET") {
        return $input;
    }
    $user_exists = false;

    function validate_signin_email($email)
    {
        require './templates/functions/arrays_fns.php';
        require './templates/configs/db_connect.php';
        $reg_exp = "/^.+@.+$/u";

        empty($_POST['email']) ? $email = "0" : $email = $_POST['email'];
        empty($_POST['password']) ? $pass = "0" : $pass = $_POST['password'];
        $user_query = "SELECT email, password 
        FROM users
        WHERE password = $pass 
        AND email LIKE '$email'";
        $user_exists = $pdo->query($user_query)->fetch();


        if (strlen($email) === 0) {

            return 'Введите адрес электронной почты';
        } elseif (!preg_match($reg_exp, $email)) {
            return 'Адрес электронной почты введен в неверном формате';
        } elseif (!$user_exists) {
            return 'Пользователя с таким именем и паролем не существует';
        } else {
            return "";
        }
    }


    function validate_signin_password($password)
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

    $errors['email'] = validate_signin_email($input['email']);
    $errors['password'] = validate_signin_password($input['password']);
    $flag = empty(array_filter($errors, fn ($value) => $value != ""));
    return [$errors, $input, $flag];
}

function show_signin_form($errors = [], $input = [])
{
    echo <<<SECTION
    <section class="white-section-100">
    <div class="forms-box">
      <h1 class="h1-white h1-white-margin-b">
        Вход в систему
      </h1>
      <form class="reuse-form" action="" method="POST">
        <div>
          <label for="email">Электронная почта:</label><br>
          <input class="inp" type="email" name="email" value="$input[email]" placeholder="ваш email">
          <span>$errors[email]</span>
        </div>
  
        <div>
          <label for="password">Пароль:</label><br>
          <input class="inp" type="password" name="password" placeholder="более восьми символов" value="$input[password]">
          <span>$errors[password]</span>
          <p>Нет учетной записи? Пройдите <a href="./registration.php">регистрацию</a></p>
         
        </div>
     
  
        <input class="inp-submit" type="submit" value="Войти">
      </form>
  </section>
 
  
SECTION;
}

// <p>Нет учетной записи? Пройдите <a href="./registration.php">регистрацию</a></p>