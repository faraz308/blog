<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
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
                <p class="error"> <?php echo $this->session->flashdata('wrongcreds');?> </p>
                <form method="post" action="<?php site_url('loginController/authenticate')?>">
                    <div class="field">
                        <label class="label">Username</label>
                        <div class="control">
                            <input class="input" type="text" value="<?php echo $this->input->post('userName') ?>" name="userName" maxlength="30" placeholder="Enter Username">
							 <?php echo form_error('userName'); ?> 
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Password</label>
                        <div class="control">
                            <input class="input" type="password" name="password" placeholder="Enter password">
							<?php echo form_error('password'); ?>
                        </div>
                    </div>
                    <div class="field is-grouped">
                        <div class="control">
                            <button class="button is-success">Login</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>