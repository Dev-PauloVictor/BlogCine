 <?php  $this->load->view('template/menu');?> 
<center>
    <br>
    
         <div class="card" style="width: 23rem;">
<h1><?php echo lang('login_heading');?></h1>
<p><?php echo lang('login_subheading');?></p>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open("auth/login");?>

  <p>
    <?php echo lang('login_identity_label', 'identity');?>
    <?php echo form_input($identity);?>
  </p>

  <p>
    <?php echo lang('login_password_label', 'password');?>
    <?php echo form_input($password);?>
  </p>

  <p>
    <?php echo lang('login_remember_label', 'remember');?>
    <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
  </p>


  
<input class="btn btn-primary" type="submit" value="Entrar">
 
 <p><a href="forgot_password"><?php echo lang('login_forgot_password');?></a></p>
 
<?php echo form_close();?></div>

</center>
<?php $this->load->view('template/rodape');
?>

<style>
 a{
    color:#0a58ca;
    text-decoration: none;
    
 
}
.card {
    position: relative;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    word-wrap: break-word;
    background-color: #212529;
    color:white;
    background-clip: border-box;
    border: 3px solid rgba(0,0,0,.125);
    
    border-radius: 0.5rem;
    border-top-left-radius: 0.5rem;
    border-top-right-radius: 0.5rem;
    border-bottom-right-radius: 0.5rem;
    border-bottom-left-radius: 0.5rem;
}
button, input, optgroup, select, textarea {
    margin: 0;
    margin-top: 0px;
    margin-right: 0px;
    margin-bottom: 0px;
    margin-left: 0px;
    font-family:auto;
     
    line-height: normal;
</style>