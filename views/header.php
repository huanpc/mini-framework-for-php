<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?= isset($this->title) ? $this->title : 'Mini Framework'; ?></title>
        <link rel="stylesheet" href="<?php echo URL; ?>public/css/default.css" />
        <link rel="stylesheet" href="<?php echo URL; ?>public/css/bootstrap.min.css" />
        <script type="text/javascript" src="<?php echo URL; ?>public/js/jquery.js"></script>
        <?php
        if (isset($this->js)) {
            foreach ($this->js as $js) {
                echo '<script type="text/javascript" src="' . URL . 'views/' . $js . '"></script>';
            }
        }
        ?>
    </head>
    <body>
        <?php Session::init() ?>    

        <div id="header">
            <ul>                            
                <?php if (Session::get('loggedIn') == true): ?>
                    <li><?php echo '<strong>' . Session::get('user') . '</strong>'; ?></li>                
                    <li><a href='<?php echo URL; ?>dashboard'>Dashboard</a></li>
                    <?php if (Session::get('role') == 'owner'): ?>
                        <li><a href='<?php echo URL; ?>account'>Account</a></li>               
                    <?php endif; ?>
                    <li><a href='<?php echo URL; ?>dashboard/logout'>Logout</a></li>
                <?php else: ?> 
                    <li><a href='<?php echo URL; ?>home'>Home</a></li>                
                    <li><a href='<?php echo URL; ?>login'>Login</a></li>
                <?php endif; ?>    
            </ul>
        </div>
        <div id="content">
            
        

