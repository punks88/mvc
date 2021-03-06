<?php
require_once  "header.php";

?>
<body role="document">

<!-- Fixed navbar -->

<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Bootstrap theme</a>
        </div>
        <div style="float: right; margin-left: 20px">
        <button type="button"  class="btn btn-default " style="margin-top: 8.5%;"><a href="indexToCart" <span class ='glyphicon glyphicon-shopping-cart'></span>Корзина</a></button>
            <span id = 'cartCount' style="background-color: #00cc00 "><?php if(count($_SESSION['ShoppingCart'])>0){
                   print_r( count($_SESSION['ShoppingCart'])); } else{print 'пусто';}


               ?>
            </span>

        </div>
        <form class="navbar-form navbar-right" role="search" action="search" method="get">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search" name="query">
            </div>
            <button  type="submit" class="btn btn-default">Submit</button></a>
        </form>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li class="dropdown-header">Nav header</li>
                        <li><a href="#">Separated link</a></li>
                        <li><a href="#">One more separated link</a></li>
                    </ul>
                </li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</div>

<div class="container theme-showcase" role="main">

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
        <h1>Hello, world!</h1>
        <p>This is a template for a simple marketing or informational website. It includes a large callout called a
            jumbotron and three supporting pieces of content. Use it as a starting point to create something more
            unique.</p>
        <p><a href="#" class="btn btn-primary btn-lg" role="button">Learn more &raquo;</a></p>
    </div>
    <div class="navbar navbar-inverse">
        <div class="container">
            <div class="navbar-header">
                <!-- Форма Bootstrap, содержащая элемент для поиска по сайту -->

            </div>
        </div>

        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Project name</a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li class="dropdown-header">Nav header</li>
                            <li><a href="#">Separated link</a></li>
                            <li><a href="#">One more separated link</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>
    <div class="page-header">
        <h1>Table Product</h1>
    <div>
        <button class='btn btn-lg btn-success'>
            <a href='product/create'> Добавить</a>
        </button>

        <table class="table table-hover">

            <thead>
            <tr>
                <th>ID товара</th>
                <th>Название товара</th>
                <th>Категория товара</th>
                <th>Цена на товар </th>
                <th>Описание товара</th>
            </tr>
            </thead>
            <tbody>
            <form action="/groupAction" method="post" >
                <div class="dropdown open">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown button
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <input class="dropdown-item" href="drop" type="submit" value="Удалить">
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div>



                <?php foreach ($array['Product'] as $key => $value):  ?>

                    <tr>
                                  
                                  <td>
                                    <span class='checkbox'>
                                    <input type='checkbox' name="checkboxGroup[]"  value="<?=$value['id']?>" />
                                    </span>


                                      <?=$value['id']?>
                                    
                                  </td> 
                                  <td>

                                      <img width="100px" height="100px" src="<?=\app\classes\Upload::ABSOLUTE_PATH.$value['img_id'] ?>"  alt="saf">
                                      <?=$value['name']?>
                                  </td> 
                                  <td>
                                        <?=$value['category_title']?>

                                  </td> 
                                  <td>

                                      <?=$value['price']?>
                                  </td> 
                                  <td>
                                      <?=$value['description']?>

                                  </td> 
                                  
                                  <td>
                                        <button class='btn btn-lg btn-info'>
                                            <a href='product/read?id=<?=$value['id']?>'> Больше ...</a>
                                        </button> 
                                  </td>
                                  <td>
                                        <button class='btn btn-lg btn-warning'>
                                            <a href='product/update?id=<?=$value['id']?>'> Изменить</a>
                                        </button> 
                                  </td>
                                  <td>
                                        <button class='btn btn-lg btn-danger'>
                                            <a href='product/delete?id=<?=$value['id']?>'> Удалить</a>
                                        </button> 
                                  </td>
                      </tr>
                    <tr>
                        <td>
                            <a id = 'remove_in_cart_<?=$value['id']?>'    href='#' onclick="removeToProduct(<?=$value['id']?>); return false;"  alt = 'Удалить из корзины'>Удалить из корзины</a>
                            <a id = 'add_to_cart_<?=$value['id']?>'  href='#' onclick="addToCart(<?=$value['id']?>);  return false;" alt = 'Добавить в корзину'> Добавить в корзину</a>
                        </td>
                    </tr>

                 <?php endforeach;?>
            </form>
            </td>
            </tbody>
        </table>
        <ul class="pagination">
            <?php


                    if (isset($_GET['page']) && $_GET['page'] == 1) {

                    } else {
                        $preg_page = $_GET['page'] - 1;
                        echo "<li><a href='?page={$preg_page}'>&laquo;</a></li>";
                    }

                    for ($d = 1; $d <= $Pagination->number_links; $d++) {
                        echo "<li><a href='?page={$d}'>" . $d . "</a></li>";
                    };


                    if (isset($_GET['page']) && $_GET['page'] >= $Pagination->number_links) {

                    } else {
                        $page_next = $_GET['page'] + 1;
                        echo "<li><a href='?page={$page_next}'>&raquo;</a></li>";
                    }

            ?>

        </ul>
    </div>
    </div>


    <div class="page-header">
        <h1>Wells</h1>
    </div>
    <div class="well">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sed diam eget risus varius blandit sit amet
            non magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent commodo cursus magna, vel
            scelerisque nisl consectetur et. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non
            commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Aenean lacinia bibendum nulla
            sed consectetur.</p>
    </div>


</div> <!-- /container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
<script src="/vendor/twbs/bootstrap/assets/js/docs.min.js"></script>

<!--<div id="hide-layout" class="hide-layout"></div>-->
</body>
</html>