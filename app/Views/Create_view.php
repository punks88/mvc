<!DOCTYPE html>

<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">



        <!-- Bootstrap core CSS -->
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
              integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <!-- Bootstrap theme -->

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
              integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <!-- Custom styles for this template -->

        <!-- Just for debugging purposes. Don't actually copy this line! -->
        <!--[if lt IE 9]>
        <script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="col-md-5">
  
        <form  enctype = multipart/form-data action='create'  role="form" method="post" name="product">
            <div class="form-group">
                <label for="name">Название</label>
                <input class="form-control " type="text" name="product[name]">
            </div>
            <div class="form-group">
                <lable for="upload"></lable>
                <!-- Поле MAX_FILE_SIZE должно быть указано до поля загрузки файла -->
                <input type="hidden" name="MAX_FILE_SIZE" value="30000000000" />
                <!-- Название элемента input определяет имя в массиве $_FILES -->
                Отправить этот файл: <input name="img[path]" type="file" />
            </div>
            <div class="form-group">
                <label for="category">Категория</label>
                   <select class="form-control" name="product[category_id]">
                    <?php
                        foreach ($array['Category'] as $key=>$value) {

                            echo "<option value= '{$value['id']}'>{$value['title']}</option>";
                        };

                    ?>
                   </select>
            </div>
            <div class="form-group">
                <label for="price"> Цена </label>
                <input class="form-control" type="text" name="product[price]">
            </div>
            <div class="form-group">
                <label for="descriptio"> Описание </label>
                <input id="description" class="form-control input-lg" type="text" name="product[description]">
            </div>
            <div class="form-group">
                <input class="btn btn-success" type="submit" value="Добавить"  name="add">
            </div>
        </form>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>
    <script src="/vendor/twbs/bootstrap/assets/js/docs.min.js"></script>
    </body>
</html>

<?php



    