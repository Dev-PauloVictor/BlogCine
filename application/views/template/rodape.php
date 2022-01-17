

<body>
<div class="content">
</div>
    <footer id="myFooter">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <h5>Inicio</h5>
                    <ul>
                        <li><a href="<?php echo base_url();?>">Home</a></li>
                        <li><a href="<?php echo base_url();?>index.php/pagina/teorias">Teorias</a></li> 
                        <li><a href="<?php echo base_url();?>index.php/pagina/criticas">Criticas</a></li>
                    
                    </ul>
                  
                </div>
                <div class="col-sm-3">
                    <h5>Sobre nós</h5>
                    <ul>
                        <li><a href="<?php echo base_url();?>index.php/pagina/sobre">Informações da Empresa</a></li>
                          <li><a href="<?php echo base_url();?>index.php/pagina/contato">Contato</a></li>
                           
                       
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5>Suporte</h5>
                    <ul>
                    
                        <li><a href="#">FAQ</a></li>
                         <li><a href="#">E-mail</a></li>
                           <li><a href="<?php echo base_url();?>index.php/pagina/temos">Politica de Uso</a></li>
                         
                    </ul>
                </div>
                <div class="col-sm-3 info">
                    <h5>Informaçoes</h5>
                    <ul>
                        <li><a href="#">#</a></li>
                        
               
                    </ul>
                </div>
            </div>
        </div>
       <div class="footer-copyright">
            <p>© 2021 Copyright</p>
        </div>
</html>
<header>
    <style>
        #myFooter .footer-copyright {
    background-color: #000000;
    padding-top: 3px;
    padding-bottom: 3px;
    text-align: center;
}
        #myFooter {
    background-color: #1C1C1C;
    color: white;
}

#myFooter .row {
    margin-bottom: 60px;
}

#myFooter .info{
    text-align: justify; 
    color: #afb0b1;
}

#myFooter ul {
    list-style-type: none;
    padding-left: 0;
    line-height: 1.7;
}

#myFooter h5 {
    font-size: 18px;
    color: white;
    font-weight: bold;
    margin-top: 30px;
}

#myFooter .logo{
    margin-top: 10px;
}

#myFooter .second-bar .logo a{
    color:white;
    font-size: 28px;
    float: left;
    font-weight: bold;
    line-height: 68px;
    margin: 0;
    padding: 0;
}

#myFooter a {
    color: #d2d1d1;
    text-decoration: none;
}

#myFooter a:hover,
#myFooter a:focus {
    text-decoration: none;
    color: white;
}

#myFooter .second-bar {
    text-align: center;
    background-color: #33373e;
    text-align: center;
}

#myFooter .second-bar a {
    font-size: 22px;
    color: #9fa3a9;
    padding: 10px;
    transition: 0.2s;
    line-height: 68px;
}

#myFooter .second-bar a:hover {
    text-decoration: none;
}

#myFooter .social-icons {
    float:right;
}


#myFooter .facebook:hover {
    color: #0077e2;
}

#myFooter .instagram:hover {
    color: purple;
}

#myFooter .twitter:hover {
    color: #00aced;
}

@media screen and (max-width: 767px) {
    #myFooter {
        text-align: center;
    }

    #myFooter .info{
        text-align: center;
    }
}



/* CSS utilizado para posicionar o rodapé no final da página. */
/* Você pode remover isso. */

html{
    height: 100%;
}

body{
    display: flex;
    display: -webkit-flex;
    flex-direction: column;
    -webkit-flex-direction: column;
    height: 100%;
}

.content{
   flex: 1 0 auto;
   -webkit-flex: 1 0 auto;
   min-height: 200px;
}

#myFooter{
   flex: 0 0 auto;
   -webkit-flex: 0 0 auto;
}
        
    </style>
</header>