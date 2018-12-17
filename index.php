<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Lester</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
    </head>
<body>
<div class="container-fluid fundo-top">
    <nav class="container-fluid menu" id="menuHeader">
        <div class="row">
            <div class="col-lg-2 logo"><img src="imgs/logo.png" /></div>
            <div class="col-lg-7 menus">
                <nav class="nav justify-content-end menuinterno">
                <a class="nav-link" href="#">Home</a>
                <div class="dropdown">
                    <a class="nav-link" href="#">Pages <img src="imgs/arrow2.png" style="margin-left:4px;width:7px;" /></a>
                    <div class="dropdown-content">
                        <a href="#">About</a>
                        <a href="#">Services</a>
                        <a href="#">Teams</a>
                    </div>
                </div>
                <div class="dropdown">
                    <a class="nav-link" href="#">Blog <img src="imgs/arrow2.png" style="margin-left:4px;width:7px;" /></a>
                    <div class="dropdown-content">
                        <a href="#">Blog Standard</a>
                        <a href="#">Blog List</a>
                        <a href="#">Single Post</a>
                    </div>
                </div>
                    <a class="nav-link" href="#">Portfolio</a>
                <div class="dropdown">
                    <a class="nav-link" href="#">Elements <img src="imgs/arrow2.png" style="margin-left:4px;width:7px;" /></a>
                    <div class="dropdown-content">
                        <a href="#">Buttons</a>
                        <a href="#">Tabs</a>
                        <a href="#">Accordions</a>
                    </div>
                </div>
                </nav>
            </div>
            <div class="col-lg-2 icones" id="esconder">
                <a href="#"><img src="imgs/face.png" alt="facebook" width="12%"/></a> 
                <a href="#"><img src="imgs/inst.png" alt="instagram" width="12%"/></a>
                <a href="#"><img src="imgs/email.png" alt="contato" width="12%"/></a>        
            </div>
            <div class="col-lg-1 search" id="esconder_search">
                <a href="#" onclick="avancar()"><img src="imgs/search.png" alt="search" width="18px"/></a>
            </div>
            <div class="col-lg-3 buscar" id="mostrar">
                <form class="search-form" method="GET">
                    <a href="#" onclick="avancar()" style="color:black;"> x </a><input type="text" placeholder="Digite seu texto e aperte enter" />
                </form>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="texto-um">
            <h1>Creative agency, corporate and <br>portfolio HTML Template<span style="color:red;"> .</span> </h1>
        </div>
        <div class="texto-dois">
            <h5>Create the hand-crafted look you have been dreaming about with Lester</h5>
        </div>
        <div class="icones-grande">
            <a href="#"><img src="imgs/f.png" alt="facebook" width="45px" /></a>
            <a href="#"><img src="imgs/tw.png" alt="twitter" width="45px" /></a>
            <a href="#"><img src="imgs/g.png" alt="gmail" width="45px" /></a>
            <a href="#"><img src="imgs/in.png" alt="linkedin" width="45px" /></a>
        </div>
        <div class="scrolldown">
            <p>SCROLL DOWN</p>
            <img src="imgs/arrow2.png" style="width:20px;" />
        </div>    
    </div>
</div>

<div class="container-fluid">
    <div class="container">
        <div class="wwdo" data-anime="bottom">
            <h2>What We Do <span style="color:red;"> .</span></h2>
            <hr>
        </div>
        <div class="row wwdoimgs">
            <div class="col-lg-8" data-anime="bottom">
                <img src="imgs/about.jpg" width="100%;""/>
            </div>
            <div class="col-lg-4" data-anime="bottom">
                <img src="imgs/cam.jpg" width="100%;" />
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="container" data-anime="bottom">
        <div class="row numeros">
            <div class="col-lg-1"><h2>01.</h2></div>
            <div class="col-lg-3">
                <span style="font-weight:bold">Creativity.</span><br>
                Lorem ipsum dolor sit amet, cemur adipisicing elit maxime modi nam placeat facilis illo.
            </div>
            <div class="col-lg-1"><h2>02.</h2></div>
            <div class="col-lg-3">
                <span style="font-weight:bold">Expert Analysis.</span><br>
                Lorem ipsum dolor sit amet, cemur adipisicing elit maxime modi nam placeat facilis illo.
            </div>
            <div class="col-lg-1"><h2>03.</h2></div>
            <div class="col-lg-3">
                <span style="font-weight:bold">Discover Talents.</span><br>
                Lorem ipsum dolor sit amet, cemur adipisicing elit maxime modi nam placeat facilis illo.
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row digital">
        <div class="col-lg-6 conteudo-esq" data-anime="bottom">
            <h2>Digital Services</h2>
            <p style="padding-left: 50px;padding-top:5px;">We are delivering beautiful digital products for you</p>
            <div class="row webpixel" style="padding-top:60px;">
                <div class="col-lg-1"><img src="imgs/settings.png" width="40px"></div>
                <div class="col-lg-4">
                    <h6>Web Development</h6>
                    <p>Lorem ipsum dolor sit amet, cotetur in iste adicing elite minima nam.</p>
                </div>
                <div class="col-lg-1"><img src="imgs/calenda.png" width="50px"></div>
                <div class="col-lg-4">
                    <h6>Pixel Perfect Design</h6>
                    <p>Lorem ipsum dolor sit amet, cotetur in iste adicing elite minima nam.</p>
                </div> 
            </div>
            <div class="row webpixel" style="padding-top:30px;">
                <div class="col-lg-1"><img src="imgs/man.png" width="50px"></div>
                <div class="col-lg-4">
                    <h6>Branding</h6>
                    <p>Lorem ipsum dolor sit amet, cotetur in iste adicing elite minima nam.</p>
                </div>
                <div class="col-lg-1"><img src="imgs/engre.png" width="50px"></div>
                <div class="col-lg-4">
                    <h6>App Development</h6>
                    <p>Lorem ipsum dolor sit amet, cotetur in iste adicing elite minima nam.</p>
                </div> 
            </div>
        </div>
        <div class="col-lg-6 parallax">
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6 parallax">
        </div>
        <div class="col-lg-6 whoweare">
            <h2>Who we are</h2>
            <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet duis sagittis ipsum sed augue semper porta. Mauris massa vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra.<br>
            Nulla metus metus, ullamcorper vel, tincidunt sed, euismod in, nibh. Quisque volutpat condimentum velit. Class aptent taciti sociosqu ad litora torquent perconubia nostra, per inceptos himenaeos nam nec ante..</p>
            <button class="botaoe">EXPLORE</button> <button class="botaom">MEET OUR TEAM</button>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row numerosfim">
        <div class="col-lg-4" id="efeito">
            <p>PROJECT DONE</p><h2 id="contador"></h2>
        </div>
        <div class="col-lg-4">
            <p>POEPLOE LOVED</p>
            <h2 id="segundoNumero"></h2>
        </div>
        <div class="col-lg-4">
            <p>AWARDS RECEIVED</p>
            <h2 id="terceiroNumero"></h2>
        </div>
    </div>
</div>
<!-- CRIAR UM CAROUSEL DPS -->
<div class="container-fluid">
    <div class="container">
        <div class="ourteam" data-anime="bottom">
            <h2>Our Team <span style="color:red;"> .</span></h2>
            <hr>
        </div>
        <div class="row teste">
            <div class="col-lg-4">
                <img src="imgs/caramen1.jpg"/>
            </div>
            <div class="col-lg-4">
                <img src="imgs/caramen3.jpg"/>
            </div>
            <div class="col-lg-4">
                <img src="imgs/caramen2.jpg"/>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid" style="padding-top:200px;padding-left:0;padding-right:0px;">
    <div class="parallaxfim">
        <div style="padding-top: 100px;"></div>
        <div class="interno">
            <h4>Create Awesome &<br> Functionality Website With<br> Lester Best Solution for<br> Startup</h4>
        </div>
    </div>
</div>

<div class="container-fluid" style="padding-top:150px;padding-left:0;padding-right:0px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <img src="imgs/about.jpg" width="100%" class="trocar-imagem">
            </div>
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-lg-3">
                        esq
                    </div>
                    <div class="col-lg-9 direitabaixo" >
                        <h4 style="padding-top:10px;" data-anime="bottom">Different Layout</h4>
                        <p data-anime="bottom">Maenas aliquet mollis lectus. Vivamus conctetuer risus et tortor lorem in, nibh ipsum aptent taciti sociosqu ad.</p>
                       
                        <h4 data-anime="bottom">Code Quality</h4>
                        <p data-anime="bottom">Maenas aliquet mollis lectus. Vivamus conctetuer risus et tortor lorem in, nibh ipsum aptent taciti sociosqu ad.</p>
                        
                        <h4 data-anime="bottom">Excellent Support</h4>
                        <p data-anime="bottom">Maenas aliquet mollis lectus. Vivamus conctetuer risus et tortor lorem in, nibh ipsum aptent taciti sociosqu ad.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<div class="container-fluid" style="background-color:#424447;padding-top:50px;height:420px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 about">
                <h5>ABOUT US</h5>
                <hr>
                <p>Lorem ipsum dolor sit amet, contetur pising elit. Ab acus ariam erntur codi ctus dolous est, fugiat ipsum mostias natus nihil nobis officiis ratione lique. Deleniti ducimus eaque egendi exenem</p>
                <h5>SUBSCRIBE NEWSLETTER</h5>
                <hr>
                <form>
                    <input type="text" placeholder="Email*" name="email"/><button>Enviar</button> 
                </form>
            </div>
            <div class="col-lg-4 latest">
                <h5>LATEST BLOG POSTS</h5>
                <hr>
                <div class="row">
                    <div class="col-lg-3">
                        <img src="imgs/pc.jpg" width="80px" />
                    </div>
                    <div class="col-lg-8">
                        Good design is obvious
                        25 April 2018 | by Alex Gray
                    </div>
                </div>
            </div>
            <div class="col-lg-4 contact">
                <h5>CONTACT INFO</h5>
                <hr>
                <p>Integer euismod lacus luctus magna. Quisque cursus, metus vitae pharetra auctor, sem massa mattis sem, at interdum magna augue eget diam.</p>
                <h6><a href="#">123 North West, Florida, USA </a></h6>
                <h6><a href="#">example@domain.com</a></h6>
                <h6><a href="#">1-800-222-000</a></h6>
            </div>
        </div>
        <div class="fim"><span style="color:#ee3158">@</span> 2018 Lester. All rights reserved. </div>
    </div>
</div>





<script>
$(function(){   
    var nav = $('#menuHeader');   
    $(window).scroll(function () { 
        if ($(this).scrollTop() > 50) { 
            nav.addClass("menufixo");
            $('body').css('padding-top', 70);
        } else { 
            nav.removeClass("menufixo"); 
            $('body').css('padding-top', 0);
        } 
    });  
}); 

/* DEPOIS CRIAR ALGO PARA QUE ELE SO INICIA A CONTAGEM QUANDO ESTIVER NA TELA */
    var i = 0;                    
    var totalCount = 124;
            function myLoop() {           
                setTimeout(function () {   
                    $('#contador').html(i);          
                    i++;                     
                    if (i <= totalCount) {           
                        myLoop();             
                    }
                }, 20) 
            }
    myLoop();

    var x = 0;                    
    var contador = 255;
            function segundoNumero() {           
                setTimeout(function () {    
                    $('#segundoNumero').html(i);          
                    i++;                     
                    if (i <= contador) {           
                        segundoNumero();             
                    }
        }, 10)
        }
    segundoNumero();

    var y = 0;                    
    var contar = 351;
            function terceiroNumero() {           
                setTimeout(function () {    
                    $('#terceiroNumero').html(i);          
                    i++;                     
                    if (i <= contar) {           
                        terceiroNumero();             
                    }
        }, 10)
        }
    terceiroNumero();
</script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
</body>
</html>