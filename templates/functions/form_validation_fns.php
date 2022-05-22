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
            return 'заполните поле!';
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
            return "заполните поле";
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
            return 'заполните поле';
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
            return 'заполните поле';
        } elseif (!preg_match($reg_exp, $password)) {
            return 'Пароль должен состоять минимум из восьми произвольных символов';
        } else {
            return "";
        }
    }

    function validate_password2($password, $password2)
    {
        if (strlen($password2) === 0) {
            return 'заполните поле';
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
                    <label for="first_name">Имя:</label><span>$errors[first_name]</span><br>
                    <input class="inp" type="text" name="first_name" placeholder="Только русские буквы" value="$input[first_name]">
                    
                </div>
                
                <div>
                    <label for="last_name">Фамилия:</label> <span>$errors[last_name]</span><br>
                    <input class="inp" type="text" name="last_name" placeholder="Только русские буквы" value="$input[last_name]">
                   
                </div>

                
                <div>
                    <label for="email">Электронная почта:</label><span>$errors[email]</span><br>
                    <input class="inp" type="email" placeholder="Введите ваш email" name="email" value="$input[email]">
                    
                </div>
                
                <div>
                    <label for="password">Пароль:</label> <span>$errors[password]</span><br>
                    <input class="inp" type="password" name="password" placeholder="Более восьми символов" value="$input[password]" size="20">
                   
                </div>
                <div>
                    <label for="password">Подтвердите пароль:</label><span>$errors[password2]</span><br>
                    <input class="inp" type="password" name="password2" placeholder="пароли должны совпадать" value="$input[password2]" size="20">
                    
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


        if (empty($email)) {

            return 'заполните поле';
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
            return 'заполните поле';
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
          <label for="email">Электронная почта:</label><span>$errors[email]</span><br>
          <input class="inp" type="email" name="email" value="$input[email]" placeholder="ваш email">
          
        </div>
  
        <div>
          <label for="password">Пароль:</label><span>$errors[password]</span><br>
          <input class="inp" type="password" name="password" placeholder="более восьми символов" value="$input[password]">
          
          <p>Нет учетной записи? Пройдите <a href="./registration.php">регистрацию</a></p>
         
        </div>
     
  
        <input class="inp-submit" type="submit" value="Войти">
      </form>
  </section>
 
  
SECTION;
}


/************************************
ФОРМА СОЗДАНИЯ/РЕДАКТИРОВАНИЯ СТАТЬИ
//  ************************************/

function validate_сreat_form()
{

    // массивы для данных и ошибок
    $errors = []; // массив для ошибок
    $input = []; // массив для данных
    $method = $_SERVER['REQUEST_METHOD'];



    // забираем введенные пользователем данные и кладем в массив $input
    $method === "POST" ? $input['category'] = htmlspecialchars(trim($_POST['category'])) : $input['category'] = "";
    $method === "POST" ? $input['post_img_url'] = htmlspecialchars(trim($_POST['post_img_url'])) : $input['post_img_url'] = "";
    $method === "POST" ? $input['news_img_url'] = htmlspecialchars(trim($_POST['news_img_url'])) : $input['news_img_url'] = "";
    $method === "POST" ? $input['post_title'] = htmlspecialchars(trim($_POST['post_title'])) : $input['post_title'] = "";
    $method === "POST" ? $input['post_preview'] = htmlspecialchars(trim($_POST['post_preview'])) : $input['post_preview'] = "";
    $method === "POST" ? $input['post_text'] = htmlspecialchars(trim($_POST['post_text'])) : $input['post_text'] = "";


    if ($method === "GET") {
        return $input;
    }


    function validate_create_category($arg)
    {
        if (empty($arg)) {
            return 'Выберете из списка!';
        }
        return "";
    }


    function validate_сreat_post_img_url($img_url)
    {
        if (empty($img_url)) {
            return "укажите ссылку";
        } elseif (mb_strlen($img_url) > 499) {
            return "ссылка должна быть короче 500 символов";
        } else {
            return "";
        }
    }

    function validate_create_title($arg)
    {
        if (empty($arg)) {
            return "заполните поле";
        } elseif (mb_strlen($arg) > 79) {
            return "заголовок д.б. менее 80 символов";
        } else {
            return "";
        }
    }

    function validate_create_post_preview($arg)
    {
        if (empty($arg)) {
            return "заполните поле";
        } elseif (mb_strlen($arg) > 319) {
            return "поле д.б. менее 320 символов";
        } else {
            return "";
        }
    }

    function validate_create_post_text($arg)
    {
        if (empty($arg)) {
            return "заполните поле";
        } else {
            return "";
        }
    }



    $errors['category'] = validate_create_category($input['category']);
    $errors['post_img_url'] = validate_сreat_post_img_url($input['post_img_url']);
    $errors['news_img_url'] = validate_сreat_post_img_url($input['news_img_url']);
    $errors['post_title'] = validate_create_title($input['post_title']);
    $errors['post_preview'] = validate_create_post_preview($input['post_preview']);
    $errors['post_text'] = validate_create_post_text($input['post_text']);

    $flag = empty(array_filter($errors, fn ($value) => $value != ""));
    return [$errors, $input, $flag];
}

function show_creat_form($errors = [], $input = [])
{

    echo <<<_HTML_
            <div class="forms-box">
    <h1 class="h1-white h1-white-margin-b">
      Разместить статью
    </h1>
    <form class="reuse-form" action="" method="POST">
      <div>
        <label for="category">Категория:</label><span>$errors[category]</span><br>
        <select id="category" class="inp" name="category">
          <option value="">Выберите категорию:</option>
          <option value="Diablo">Diablo</option>
          <option value="Overwatch">Overwatch</option>
          <option value="Herous of the storm">HoS</option>
          <option value="Starcraft">Starcraft</option>
          <option value="Hearthstone">Hearthstone</option>
          <option value="Warcraft">Warcraft</option>
          <option value="Другие игры">Другие игры</option>
        </select>
        
      </div>

      <div>
        <label for="post_img_url">Основная картинка:</label  <span>$errors[post_img_url]</span><br>
        <input type="url" name="post_img_url" id="post_img_url" placeholder="ссылка на вашу картинку" value="$input[post_img_url]" size=50>
      
      </div>

      <div>
        <label for="news_img_url">доп. картинка:</label><span>$errors[news_img_url]</span><br>
        <input type="url" name="news_img_url" id="news_img_url" placeholder="ссылка на вашу картинку" value="$input[news_img_url]" size=50>
        
      </div>

      <div>
        <label for="post_title">Заголовок:</label>  <span>$errors[post_title]</span><br>
        <input class="inp" type="text" name="post_title" id="post_title" placeholder="не более 80 символов"
          value="$input[post_title]" size=50>
      
      </div>

      <div>
        <label for="post_preview">Краткое описание:</label><span>$errors[post_preview]</span><br>
        <textarea class="inp   post-preview-ta" id="post-preview" name="post_preview" placeholder="не более 320 символов">$input[post_preview]</textarea>
      </div>



      <div>
        <label for="post_text">Текст статьи:</label><span>$errors[post_text]</span><br>
        <textarea class="inp post-ta" name="post_text" id="post_text" placeholder="Введите ваше сообщение" >$input[post_text]</textarea>
      </div>

      <input class="inp-submit" type="submit" value="разместить">
    </form>

_HTML_;
}

function get_post_and_category($id)
{
    require './templates/configs/db_connect.php';
    $post_query = "SELECT id, id_category, title, post_description, text, main_img, small_img
    FROM news WHERE id = $id";
    $category_query = "SELECT name, id_news 
    FROM categorys  WHERE id_news = $id";
    // $category = $pdo->query($category_query)->fetch();
    $post = $pdo->query($post_query)->fetch();
    return $post;
}