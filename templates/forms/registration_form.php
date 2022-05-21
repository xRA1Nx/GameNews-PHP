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
                // если форма валидна cоздаем сессию и добавляем в бд пользователя
                $_SESSION['email'] = $_POST["email"];
                $_SESSION['fname'] = $_POST["first_name"];
                $_SESSION['lname'] = $_POST["last_name"];
                $_SESSION['from'] = "registration";
                $insert_query = $pdo->prepare("INSERT INTO users VALUE(null,?,?,?,?,?,default)");

                $insert_query->execute([
                    $_POST['first_name'],
                    $_POST['last_name'],
                    $_POST['email'],
                    $_POST['password'],
                    $_POST['email']
                ]);
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