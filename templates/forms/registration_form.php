<section class="white-section-100">
    <?php


    if (isset($_SESSION['email'])) {
        header("location:lk.php");
    } else {
        require('./templates/functions/form_validation_fns.php');

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            list($errors, $input, $flag) = validate_reg_form();


            // если в форма не валидна,показываем ошибки
            if (!$flag) {
                show_reg_form($errors, $input);
            } else {
                // если форма валидна cоздаем сессию и переводим пользователя на страницу с валидацией по емейл
                foreach ($_POST as $key => $val) {
                    $_POST[$key] = trim($val);
                }

                $_POST["first_name"] = mb_convert_case(mb_strtolower($_POST["first_name"]), MB_CASE_TITLE, "UTF-8");
                $_POST["last_name"] = mb_convert_case(mb_strtolower($_POST["last_name"]), MB_CASE_TITLE, "UTF-8");
                $_SESSION['email'] = $_POST["email"];
                $_SESSION['fname'] = $_POST["first_name"];
                $_SESSION['lname'] = $_POST["last_name"];
                $_SESSION['password'] = $_POST["password"];
                $_SESSION['from'] = "registration";

                header("location:registration-done.php");
            }
            //если метод GET , то выводим изначальную форму
        } else {
            $input = validate_reg_form(); //массив из пустых строк
            show_reg_form($input, $input);
        }
    }
    ?>
</section>