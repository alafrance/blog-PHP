<?php
require '../src/DAO/DAO.php';
require '../src/DAO/ArticleDAO.php';
require '../src/DAO/CommentDAO.php';
require '../src/DAO/UserDAO.php';

require '../src/controller/Controller.php';
require '../src/controller/FrontController.php';
require '../src/controller/ErrorController.php';
require '../src/controller/BackController.php';


require '../src/model/Article.php';
require '../src/model/Comment.php';
require '../src/model/View.php';
require '../src/model/User.php';

require '../src/constraint/Validation.php';
require '../src/constraint/Constraint.php';
require '../src/constraint/CommentValidation.php';
require '../src/constraint/ArticleValidation.php';
require '../src/constraint/UserValidation.php';

require '../config/Parameter.php';
require '../config/Request.php';
require '../config/Router.php';
require '../config/Session.php';
require '../config/Cookie.php';

session_start();
$router = new \App\config\Router();
$router->run();
