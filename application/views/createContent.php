<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $title ;?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.min.css">
		<style>
		.error {
			color:red;
		}
		</style>
    </head>
    <body>
        <div class="container">
            <div class="column">
                <p class="error"> <?php echo $this->session->flashdata('wrongCreateContent');?> </p>
                <form method="post" action="<?php site_url('dashboardController/createContent')?>">
                    <div class="field">
                        <label class="label">Title</label>
                        <div class="control">
                            <input class="input" type="text" value="<?php echo $this->input->post('contentTitle') ?>" name="contentTitle" maxlength="100" placeholder="Enter Username">
							 <?php echo form_error('contentTitle'); ?> 
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Description</label>
                        <div class="control">
                            <textarea  name="contentDescription" rows="4" cols="50">
<?php echo $this->input->post('contentDescription') ?>
                            </textarea>
							<?php echo form_error('contentDescription'); ?>
                        </div>
                    </div>
					 <div class="field">
                        <label class="label">Category</label>
                        <div class="control">
                             <select name='contentCategory' >
							<option value=''> Select </option>
							<?php 
							
							if(!empty($category) && is_array($category)){
								foreach($category as $row){
									?>
									<option <?php echo ($this->input->post('contentCategory') == $row['id'] ? "selected" : "");?> value="<?php echo $row['id']; ?>"><?php echo $row['categoryName']?></option>
									
									<?php
								}
							}
							?>
							</select>
							<?php echo form_error('contentCategory'); ?>
                        </div>
                    </div>
                    <div class="field is-grouped">
                        <div class="control">
                            <button class="button is-success">Create</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>