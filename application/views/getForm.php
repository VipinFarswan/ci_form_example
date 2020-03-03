<!DOCTYPE html>
<html>
<head>
  <title>CI FORM</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
  <div class="container mt-5">
    <?php if(!empty($this->session->flashdata('successMessage'))) { ?>
      <div class="text-success text-center"> <?php echo $this->session->flashdata('successMessage'); ?></div>
      <div class="text-center"><a href="form" class="btn btn-primary">Fill Form Again</a></div>
    <?php } else { ?>
    <?php echo form_open('/getForm',array('onsubmit' => 'vaidateData()') ); ?>
      <div class="form-group">
        <label for="email">Email address</label>
        <input type="email" class="form-control" name="email" placeholder="Enter email" value="<?php echo set_value('email'); ?>" id="email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        <span class="text-danger"><?php echo form_error('email'); ?></span>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" name="password" placeholder="Password" id="password">
        <span class="text-danger"><?php echo form_error('password'); ?></span>
      </div>
      <div class="form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
      </div>
      <button type="submit" class="btn btn-primary mt-1">Submit</button>
    <?php echo form_close(); } ?>
  </div>
</body>
</html>