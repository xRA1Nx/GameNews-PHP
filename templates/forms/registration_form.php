<section class="white-section">
  <?php

    require('./templates/functions/my_reg_function.php');

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        list($errors, $input, $flag) = validate_form();

        // если в форма не валидна,показываем ошибки
        if (!$flag) {
            show_form($errors, $input);
            // показываем сообщение о регистрации    
        } else {
            foreach ($_POST as $key => $val) {
                $_SESSION[$key] = $val;
            }
            header("location:registration.php");
        }
        //если метод GET , то выводим изначальную форму
    } else {
        $input = validate_form(); //массив из пустых строк
        show_form($input, $input);
    }

    ?>
</section>