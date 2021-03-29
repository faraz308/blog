
<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $title?></title>
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
                
	<table border="2" cellspacing="2" cellpadding="2"> 
      <tr> 
          <td> <font face="Arial">id </font> </td> 
          <td> <font face="Arial">Name</font> </td> 
		  <td> <font face="Arial">Category Name</font> </td> 
          <td> Edit </td>
		  <td> Delete </td>
      </tr>

  <?php if(!empty($content) && is_array($content)){
			foreach($content as $row){ 
             echo '<tr> 
                  <td>'.$row['id'].'</td> 
                  <td>'.$row['title'].'</td> 
				  <td>'.$row['categoryName'].'</td> 
				  <td> <a href=""> Click to Edit</a></td> 
				  <td> <a href=""> Click to Delete</a></td> 
                  
              </tr>';
    }
} 
?>
</table>
            </div>
        </div>
    </body>
</html>