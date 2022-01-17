
 <?php  $this->load->view('template/menu');?> 
<center>
    <br>  <br>
<div class="card"style="width: 30rem;">
<h1><?php echo lang('forgot_password_heading');?></h1>
<p><?php echo sprintf(lang('forgot_password_subheading'), $identity_label);?></p>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open("auth/forgot_password");?>

      <p>
      	<label for="identity"><?php echo (($type=='email') ? sprintf(lang('forgot_password_email_label'), $identity_label) : sprintf(lang('forgot_password_identity_label'), $identity_label));?></label> <br />
      	<?php echo form_input($identity);?>
      </p>

 <input class="btn btn-primary" type="submit" value="Enviar">
<?php echo form_close();?></div></center>
<?php $this->load->view('template/rodape');
?>
   <style>
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