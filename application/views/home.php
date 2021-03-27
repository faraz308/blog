<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Blog using PHP(CI) & MySQL</title>
</head>
<body>

    <div class="container mt-5">
       <form>
		Category : <select name='category' onchange='this.form.submit()'>
		<option value=''> Select </option>
		<?php 
		
		if(!empty($category) && is_array($category)){
			foreach($category as $row){
				?>
				<option <?php echo ((isset($inputGet['category']) && $inputGet['category'] == $row['id']) ? "selected" : "");?> value="<?php echo $row['id']; ?>"><?php echo $row['categoryName']?></option>
				
				<?php
			}
		}
		?>
		</select>
		<noscript><input type="submit" value="Submit"></noscript>
		</form>
        <!-- Display posts from database -->
        <div class="row">
            <?php if(!empty($content) && is_array($content)){
			foreach($content as $row){ ?>
                <div class="col-12 col-lg-4 d-flex justify-content-center">
                    <div class="card text-white bg-dark mt-5" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row['title'];?></h5>
                            <p class="card-text"><?php echo substr($row['description'], 0, 50);?>...</p>
                            <a href="view.php?id=<?php echo $row['id']?>" class="btn btn-light">Read More <span class="text-danger">&rarr;</span></a>
                        </div>
                    </div>
                </div>
            <?php }
			}?>
        </div>
       
    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>