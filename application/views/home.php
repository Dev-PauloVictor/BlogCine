
    
<!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>assets/css/blog.css" rel="stylesheet">
   
  </head>

  <?php  $this->load->view('template/topo');?> 
  
    <?php  $this->load->view('template/menu');?> 
<main class="container">
   <?php  $this->load->view('template/destaque');?> 

  <div class="row g-5">
    <div class="col-md-8">
        
         <?php $this->load->view('template/listagem-posts');
?>
        
  </div>
     <?php $this->load->view('template/coluna-direita');
?>
  </div>

</main>

                <?php $this->load->view('template/rodape');
?>