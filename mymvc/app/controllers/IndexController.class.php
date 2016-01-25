<?php

 class IndexController implements IController {

     function indexAction() {
         $fc = FrontController::getInstance();

         $model       = new TestModel();
         $model->name = $fc->getParams();
         $output      = $model->render('../views/index.php');

         $fc->setBody($output);
     }

 }
 