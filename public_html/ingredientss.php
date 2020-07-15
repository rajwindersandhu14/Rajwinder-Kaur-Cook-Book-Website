<?php session_start();
// check whether the session array is empty.
if (empty($_SESSION)) {
    header('Location: login.php?ERROR="loginFirst"');
} ?>
<?php require 'ingridient/adddata.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/24326faed9.js" crossorigin="anonymous"></script>
    <title>ingredients</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        label {
            text-align: center;
        }

        main {
            display: grid;
            grid-template-columns: 1fr 3fr;
        }

        .leftaside {
            padding: 10px;

            background: #F3f3f3;
        }

        .rightaside {
            margin-left: 10px;
            padding: 10px;
            background: #F3f3f3;
        }

        ul {
            list-style: none;
            margin: 10px;

        }

        i {
            color: green;
            padding: 0px 5px;
            cursor: pointer;
        }

        .btn,
        input {
            display: block;
            width: 100%;
            padding: 5px;
        }

        .error {
            color: red;
        }
    </style>
</head>

<body>
    <div class="container">
        <?php require 'index.php'; ?>
        <hr>
        <main>
            <aside class="leftaside">
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                    <label for="">write ingrident name and press ADD button</label>
                    <input class="form-control" type="text" name="item" placeholder="Name" value="<?php echo $ingridient; ?>">
                    <span class="error"><?php echo $ERROR['ingr']; ?></span>
                    <input class="form-control mt-2" type="text" name="des" placeholder="Description" value="<?php echo $description; ?>">
                    <span class="error"><?php echo $ERROR['des']; ?></span>
                    <input class="btn btn-info mt-2" type="submit" name="add" value="Add">
                </form>

                <!-- injecting php code here -->
                <?php

                require 'ingridient/showdata.php';
                ?>
            </aside>
        </main>
    </div>
</body>

</html>
<?php
require_once('footer.html');
?>