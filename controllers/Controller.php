<?php

declare(strict_types=1);

namespace SimplyRouter;

    class Controller {

        private Request $request;

        public function __construct(Request $request){
            $this->request = $request;
        }

        public function run(){
            
            include_once ROOT_DIRECTORY."/../views/mainView.php";
        }

    };
