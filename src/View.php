<?php

declare(strict_types=1);

namespace SimplyRouter;

    class View{
        public function showRequestedView(string $requestedPage){
            include_once ROOT_DIRECTORY."/../views/mainView.php";
        }
    }
