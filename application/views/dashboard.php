<!DOCTYPE html>
<html>
    <head>
        <title>Dashboard</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.min.css">
    </head>
    <body>
        <div class="container">
            <div class="column">
                <nav class="navbar" role="navigation" aria-label="main navigation">
                    <div id="navbarBasicExample" class="navbar-menu">
                        <div class="navbar-start">
                            <a href="<?php echo base_url('dashboardController')?>" class="navbar-item is-active">Dashboard</a>
                            <a href="<?php echo base_url('dashboardController/createContent')?>" class="navbar-item">Create Content</a>
                        </div>

                        <div class="navbar-end">
                            <div class="navbar-item has-dropdown is-hoverable">
                                <a class="navbar-link"><?php echo $this->session->userdata('user_name');?></a>

                                <div class="navbar-dropdown">
                                    <a href="<?php echo base_url('dashboardController/logout')?>" class="navbar-item">Sign out</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
                
            </div>
        </div>
    </body>
</html>