

<div class="row g-5">
    <div class="col-md-8">
      <h3 class="pb-4 mb-4 fst-italic border-bottom">
        Postagens
      </h3>

          <?php foreach ($postagens as $post) {
            //echo $post ->id;
          ?>
 
        
      <article class="blog-post">
           <div class="row">
    <div class="col-6">
      <div class="card mt-3 tab-card">
        <div class="card-header tab-card-header">
            
        <img width="350" height="210" class="width-100" 
src="assets/uploads/files/<?=  $post->url_imagem ?>" alt="Boat" />
            
          <a href="<?php echo base_url().'index.php/pagina/post/'.$post ->id ;?>">
          
        <h2 class="blog-post-title"><?php echo $post->titulo;?> </h2>
          </a>
            
        <p class="blog-post-meta"> <?php echo $post->data_post;?> by <a href="#"><?php echo $post->nome_autor ?> </a></p>

        <p>
        <?php echo $post->previa ?>
        </p></div></div></div></div>
        </article>
       <?php 
       
        }  ?>
        <br>
     <nav class="blog-pagination">
                            <a class="btn btn-outline-primary" href="#">Anterior</a> <a class="btn btn-outline-primary" href="#">Próximo</a>                        </nav>

                     
                            <header>

          <style>  
            
.width-100 {
 width: 100%;
}
.width-height-100 {
  width: 100%;
  height: 100%;
}
.width-height-100 {
  width: 100%;
  height: auto;
}
.col-6 {
    -ms-flex: 0 0 50%;
    flex: 0 0 100%;
    max-width: 100%;
            </style>
        </header>