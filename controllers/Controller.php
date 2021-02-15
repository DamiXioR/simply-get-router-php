<?php

declare(strict_types=1);

namespace SimplyRouter;

    class Controller {

        private Request $request;
        private View $view;

        public function __construct(Request $request){
            $this->request = $request;
            $this->view = new View();
        }

        public function run(){
            $action = $this->request->action();

            if(!method_exists($this, $action)){
                $this->error404();
                exit;
            }

            $this->$action();
        }

        public function index(){
            $this->view->showRequestedView('index');
        }

        public function makeNoise(){
            $this->view->showRequestedView('makeNoise');
        }

        public function workHardly(){
            $this->view->showRequestedView('workHardly');
        }

        public function takeBreath(){
            $this->view->showRequestedView('takeBreath');
        }

        public function goSleep(){
            $this->view->showRequestedView('goSleep');
        }

        public function error404(){
            $this->view->showRequestedView('e404');
        }
    };
