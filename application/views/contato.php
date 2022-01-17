
  
  <?php  $this->load->view('template/topo');?> 
  
    <?php  $this->load->view('template/menu');?> 
<main class="container">
   
    <?php // $this->load->view('template/destaque');?> 

  
        
         <?php // $this->load->view('template/listagem-posts');
?>
        
        <br></br>
          <center>
               <div class="card" style="width:auto;">

      
        <h3 class="pb-4 mb-4 fst-italic border-bottom">
        Perguntas
      </h3>      

        
          
        </header>
        <!-- Main Content-->
        <main class="mb-4">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <p>Quer entrar em contato? Preencha o formulário abaixo para me enviar uma mensagem e entrarei em contato com você o mais breve possível!</p>
                        <div class="my-5">
                          
                            <!-- * * * * * * * * * * * * * * *-->
                            <!-- * * SB Forms Contact Form * *-->
                            <!-- * * * * * * * * * * * * * * *-->
                            <!-- This form is pre-integrated with SB Forms.-->
                            <!-- To make this form functional, sign up at-->
                            <!-- https://startbootstrap.com/solution/contact-forms-->
                            <!-- to get an API token!-->
                            <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                                <div class="form-floating">
                                    <input class="form-control" id="name" type="text" placeholder="Digite seu nome..." data-sb-validations="required" />
                                    <label for="name">Nome</label>
                                    <div class="invalid-feedback" data-sb-feedback="name:required">Um nome e obrigatorio.</div>
                                </div>
                                <div class="form-floating">
                                    <input class="form-control" id="email" type="email" placeholder="Digite seu email..." data-sb-validations="required,email" />
                                    <label for="email">Endereço de Email</label>
                                    <div class="invalid-feedback" data-sb-feedback="email:required">E necessario um email.</div>
                                    <div class="invalid-feedback" data-sb-feedback="email:email">Email nao e valido.</div>
                                </div>
                                <div class="form-floating">
                                    <input class="form-control" id="phone" type="tel" placeholder="Digite seu numero de telefone..." data-sb-validations="required" />
                                    <label for="phone">Numero de telefone</label>
                                    <div class="invalid-feedback" data-sb-feedback="phone:required">E necessario um numero de telefone.</div>
                                </div>
                                <div class="form-floating">
                                    <textarea class="form-control" id="message" placeholder="Digite uma messagem..." style="height: 12rem" data-sb-validations="required"></textarea>
                                    <label for="message">Mensagem</label>
                                    <div class="invalid-feedback" data-sb-feedback="message:required">E necessario uma messagem.</div>
                                </div>
                                <br />
                                <!-- Submit success message-->
                                <!---->
                                <!-- This is what your users will see when the form-->
                                <!-- has successfully submitted-->
                                <div class="d-none" id="submitSuccessMessage">
                                    <div class="text-center mb-3">
                                        <div class="fw-bolder">Envior do formulario com sucesso!</div>
                                       Para ativar esse formulario, increva-se. 
                                        <br />
                                        <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                    </div>
                                </div>
                                <!-- Submit error message-->
                                <!---->
                                <!-- This is what your users will see when there is-->
                                <!-- an error submitting the form-->
                                <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Erro ao enviar massagem!</div></div>
                                <!-- Submit Button-->
                                <button class="btn btn-primary text-uppercase disabled" id="submitButton" type="submit">Enviar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        
        
        </center>
  </div> 
     <?php //$this->load->view('template/coluna-direita');
?>
  </div>

</main>

                <?php $this->load->view('template/rodape');
?>


<header>
    <style>
     
    header.masthead {
    position: relative;
    margin-bottom: 3rem;
    padding-top: calc(8rem + 57px);
    padding-bottom: 8rem;
    background: no-repeat center center;
    background-color: #212529;
    background-size: cover;
    background-attachment: scroll;
    color: #fff;
}
a {
    color: #212529;
    text-decoration: none;
    background-color: transparent;
    -webkit-text-decoration-skip: objects;
}
    .row {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-right: -15px;
    margin-left: -15px;
    justify-content: center;
}

    
    </style>
</header>