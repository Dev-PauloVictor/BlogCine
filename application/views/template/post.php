<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

  <?php  $this->load->view('template/topo');?> 

    <?php  $this->load->view('template/menu');?> 
<main class="container">
   <?php  //$this->load->view('template/destaque');?> 

  <div class="row g-5">
    <div class="col-md-8">
        
         <?php //$this->load->view('template/listagem-posts');
?>
        <br></br>  
<article class="blog-post">
   
       <h2 class="blog-post-title"><?php echo $postagem->titulo;?> </h2>
        <p class="blog-post-meta"> <a href="#"><?php echo $postagem->nome_autor;?></a></p>

     
      
        <?php echo $postagem->conteudo;?>
      </article>  
  
  </div>
     <?php // $this->load->view('template/coluna-direita');
?>
  </div>

</main>

                <?php $this->load->view('template/rodape');
?>






