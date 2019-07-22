<?php
    session_start();
    require_once LIBRARY.'database.php';
    require_once HELPER.'function.php';
    function autoload($controller, $action)
    {
        if(!is_dir(CONTROLLER_PATH.$controller))
        {
            return false;   
        }

        if(!is_file(CONTROLLER_PATH.$controller.'/'.$action.'.php'))
        {
            return false;
        }

        //Gọi file index tổng của moder
        require_once MODEL_PATH.'index.php';
        //Gọi file xử lý moder tương ứng vs controller nếu tồn tại
        if(is_file(MODEL_PATH.$controller.'.php'))
        {
            require_once MODEL_PATH.$controller.'.php';
        }
        require_once 'Site/Controller/Category/index.php';
        //Gọi file xử lý controller và action tương ứng
        require_once CONTROLLER_PATH.$controller.'/'.$action.'.php';
        //Gọi file index tổng của view
        require_once VIEW_PATH.'index.php';
        return true;
        
    }
?>