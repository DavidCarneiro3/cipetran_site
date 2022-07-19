<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Cipetran - CE</title>
<!--
Newline Template
https://templatemo.com/tm-503-newline
-->
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <meta name="description" content="Inspeção de segurança">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/fontAwesome.css">
        <link rel="stylesheet" href="css/templatemo-style.css">
        <link rel="stylesheet" href="css/slideshow.css">

        <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>

        <?php
        require_once('phpmailer/src/PHPMailer.php');
        require_once('phpmailer/src/SMTP.php');
        require_once('phpmailer/src/Exception.php');
        
        use PHPMailer\PHPMailer\PHPMailer;
        use PHPMailer\PHPMailer\SMTP;
        use PHPMailer\PHPMailer\Exception;
          if($_POST['btn'] == 'send'){
            
            
            
            $mail = new PHPMailer(true);
    
            try {
              //$mail->SMTPDebug = SMTP::DEBUG_SERVER;
              $mail->isSMTP();
              $mail->Host = 'smtp.gmail.com';
              $mail->SMTPAuth = true;
              $mail->Username = 'suportecipp@gmail.com';
              $mail->Password = 'suportecipp@123';
              $mail->Port = 587;
            
              $mail->setFrom('suportecipp@gmail.com');
              $mail->addAddress('cipetran@cipetran.com');
              //$mail->addAddress('endereco2@provedor.com.br');
            
              $mail->isHTML(true);
              $mail->Subject = 'Vivas Fale Conosco';
              $mail->Body = 'Nome: <strong>'.$_POST['name'].'</strong><br>
                       Email: <strong>'.$_POST['email'].'</strong><br>
                       Cpf: <strong>'.$_POST['cpf'].'</strong><br>
                       Placa: <strong>'.$_POST['placa'].'</strong><br>
                       Mensagem: <br>'.$_POST['msg'];
              //$mail->AltBody = 'Chegou o email teste do Canal TI';
            
              if($mail->send()) {
                echo '<script>alert("Mensagem enviada com sucesso!")</script>';
              } else {
                echo '<script>alert("Erro ao enviar mensagem!")</script>';
              }
            } catch (Exception $e) {
              echo '<script>alert("Erro ao enviar mensagem: {'.$mail->ErrorInfo.'}")</script>';
            }
          }
          
          
        ?>

    </head>
    <body>

        <div class="overlay"></div>
        <section class="top-part">
          <video controls autoplay loop>
            <source src="videos/transito2.mp4" type="video/mp4">
            <source src="videos/transito2.ogg" type="video/ogg">
          Seu navegador não suporta tag de vídeo.
          </video>
        </section>
        
        <section class="cd-hero">

          <div class="cd-slider-nav">
            <nav>
              <span class="cd-marker item-1"></span>
              <ul>
                <li class="selected"><a href="#0"><div class="image-icon"><img src="img/home-icon.png"></div><h6>Home</h6></a></li>
                <!-- <li><a href="#0"><div class="image-icon"><img src="img/about-icon.png"></div><h6>História</h6></a></li> -->
                <li><a href="#0"><div class="image-icon"><img src="img/settings.png"></div><h6>Serviços</h6></a></li>
                <li><a href="#0"><div class="image-icon"><img src="img/contact-icon.png"></div><h6>Contato</h6></a></li>
                <li><a href="#0"><div class="image-icon"><img src="img/privacy.png"></div><h6>Privacidade</h6></a></li>
              </ul>
            </nav> 
          </div> <!-- .cd-slider-nav -->

          <ul class="cd-hero-slider">

            <li class="selected">
              <div class="heading">
                <h1>CIPETRAN</h1>
                <span>Inspeção de Segurança</span>
              </div>
              <div class="cd-full-width first-slide">
                <div class="container">
                  <div class="row">
                    
                    <div class="col-md-12">
                      <div class="content first-content">
                        <div class="slideshow-container">

                          <div class="mySlides fade">
                            <div class="numbertext">1 / 4</div>
                            <img src="img/img1.jpeg" style="width:100%">
                            <div class="text">Testamos e inspecionamos</div>
                          </div>
                          
                          <div class="mySlides fade">
                            <div class="numbertext">2 / 4</div>
                            <img src="img/img2.jpeg" style="width:100%">
                            <div class="text">Inspeção veicular de veículos leves</div>
                          </div>
                          
                          <div class="mySlides fade">
                            <div class="numbertext">3 / 4</div>
                            <img src="img/img3.jpeg" style="width:100%">
                            <div class="text">Controle de qualidade</div>
                          </div>

                          <div class="mySlides fade">
                            <div class="numbertext">4 / 4</div>
                            <img src="img/img4.jpeg" style="width:100%">
                            <div class="text">Aqui segurança é levada a sério</div>
                          </div>
                          
                          </div>
                          <div style="text-align:center">
                            <span class="dot"></span> 
                            <span class="dot"></span> 
                            <span class="dot"></span> 
                            <span class="dot"></span> 
                          </div>
                      </div>
                      <script>
                        var slideIndex = 0;
                        showSlides();
                        
                        function showSlides() {
                          var i;
                          var slides = document.getElementsByClassName("mySlides");
                          var dots = document.getElementsByClassName("dot");
                          for (i = 0; i < slides.length; i++) {
                            slides[i].style.display = "none";  
                          }
                          slideIndex++;
                          if (slideIndex > slides.length) {slideIndex = 1}    
                          for (i = 0; i < dots.length; i++) {
                            dots[i].className = dots[i].className.replace(" active", "");
                          }
                          slides[slideIndex-1].style.display = "block";  
                          dots[slideIndex-1].className += " active";
                          setTimeout(showSlides, 6000); // Change image every 2 seconds
                        }
                        </script>
                    </div>
                    <div class="col-md-12">
                      <div class="content first-content">
                        <h4>Conheça um pouco mais a CIPETRAN-CE:</h4>
                        <p>02 linhas de inspeção (ambas com capacidade para veículos leves e pesados);</p>
                        <p>01 linha de inspeção para motos e assemelhados;</p>
                        <p>04 analisadores de gases; </p>
                        <p>04 opacímetros;</p>
                        <p>Mais de 5.000,00m² de área total (instalações);</p>
                        <p>25 funcionários experientes, habilitados e especializados em gestão da qualidade e inspeção veicular;</p>
                        <p>Estacionamento interno;</p>
                        <p>Vigilância profissional (segurança) e monitoramento por câmeras 24h;</p>
                        <p>Fonte de energia auxiliar, o que evita a paralisação dos serviços por falta de energia da Coelce;</p>
                        <br/>
                        <h4>Acreditaçôes</h4>
                        <p>Segurança Veicular</p>
                        <img src="img/acreditado0200.png" width="70px" height="50%"/>
                        <p>Segurança Veicular</p>
                        <img src="img/acreditado019.png" width="70px"/>
                        <img src="img/pp.png" width="70px" />
                        <!-- <div class="primary-button">
                          <a href="#">Discover More</a>
                        </div> -->
                      </div>
                    </div>
                  </div>                  
                </div>
              </div>
            </li>

            <!-- <li>
              <div class="heading">
                <h1>About Us</h1>
                <span>Get More Info About Our Agency</span> 
              </div>
              <div class="cd-half-width second-slide">   
                <div class="container">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="content second-content">
                        <div class="row">
                          <div class="col-md-7 left-image">
                            <img src="img/left-about-image.jpg">
                          </div>
                          <div class="col-md-5">
                            <div class="right-about-text">
                              <h4>Who we are?</h4>
                              <p>Fusce neque leo, dapibus sed imperdiet sed, vulputate sed purus. Nam eget justo in nibh facilisis rhoncus. Donec et risus non mauris lobortis convallis. Aliquam id urna quis ante blandit semper.</p>
                              <div class="primary-button">
                                <a href="#">Discover More</a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-7">
                            <div class="left-about-text">
                              <h4>What we do?</h4>
                              <p>Nam aliquam ultrices interdum. Vivamus metus mi, accumsan a tincidunt a, efficitur id felis. Vivamus non nibh malesuada, vestibulum nulla in, iaculis sem. Aenean tincidunt faucibus ipsum, ac aliquet nunc accumsan sed. Nulla sodales nunc sit amet libero egestas, ut interdum ex congue.</p>
                              <div class="primary-button">
                                <a href="#">Discover More</a>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-5 right-image">
                            <img src="img/right-about-image.jpg">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>                  
                </div>
              </div>
            </li> -->

            <li>
              <div class="heading">
                <h1>Serviços</h1>
                <span>Conheça nossa vasta gama de serviços e nossas condições especiais.</span> 
              </div>
              <div class="cd-half-width third-slide">
                <div class="container">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="content third-content">
                        <div class="row">
                          <div class="col-md-7 left-image">
                            <img src="img/left-feature-image.jpg">
                          </div>
                          <div class="col-md-5">
                            <div class="right-feature-text">
                              <!-- <h4>Featured Product: <em>Newline</em></h4>
                              <p>Lorem ipsum dolor amet, consecte adipiscing elit, quisque dictum convallis mi. In dapibus auctor dictum donec mattis quis eros ultricies feugiat. Morbi congue faucibus mi, ague blandit curabitur ac lacinia.</p> -->
                              <div class="feature-list">
                                <ul>
                                  <p>- VEÍCULOS AUTOMOTORES/ REBOCADOS / MOTOCICLETAS E ASSEMELHADOS TRANSFORMADOS</p>
                                  <p>- VEÍCULOS/ MOTOCICLETAS E ASSEMELHADOS MODIFICADOS</p>
                                  <p>- Vestibulum iaculis nisi dui</p>
                                  <p>- ADAPTAÇÃO DE ACESSIBILIDADE EM VEÍCULOS PARA O TRANSPORTE COLETIVO DE PASSAGEIROS</p>
                                  <p>- ADAPTAÇÃO DE ACESSIBILIDADE EM VEÍCULOS PARA O TRANSPORTE COLETIVO DE PASSAGEIROS, COM ADAPTAÇAO DE PLATAFORMA ELEVATORIA</p>
                                  <p>- VEÍCULOS AUTOMOTORES DESTINADOS AO TRANSPORTE DE PRODUTOS PERIGOSOS</p>
                                  <p>- VEÍCULOS REBOCADOS DESTINADOS AO TRANSPORTE DE PRODUTOS PERIGOSOS</p>
                                  <p>- RTQ CAR PORTARIA INMETRO N.º 91/2009</p>
                                  <p>- RTQ 7i PORTARIA INMETRO N.º 91/2009</p>
                                  <p>- EQUIPAMENTOS SOB PRESSÃO / VÁCUO PORTARIA INMETRO N.º 299/2014 (EXEMPLO: LIMPA FOSSA)</p>
                                  <p>- EQUIPAMENTOS SILO PORTARIA INMETRO N.º 299/2014</p>
                                  <p>- <b>Controle de Frota.</b>
                                    Laudos para frota, através do controle de poluentes, consumo de comsbustível e manutenção preventiva.</p>
                                  <p>- <b>LAEP - Laudo de Análise em Emissões de Poluentes.</b>
                                    Em atendimento ao Art. 7º da Portaria SCSP Nº 12, de 29 de junho de 2016</p>
                                  <p>- <b>ANTT - LIT</b>
                                    Ônibus e Microônibus, conforme Resolução 1166, alterada pelas Resoluções 2116, 1600 e 2390</p>
                                  <p>- <b>ARCE - Laudo Técnico de Vistoria</b>
                                    Ônibus, Microônibus e Utilitários para transporte de passageiros interurbano e metropolitano, conforme Resolução 46/2004 do CONTRAN</p>
                                  <p>- <b>Laudo e Parecer Técnico</b>
                                    Veículos automotores e rebocados que necessitam comprovação de atendimento a normas e leis de trânsito</p>

                                </ul>
                              </div>
                              <!-- <div class="primary-button">
                                <a href="#">Discover More</a>
                              </div> -->
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>                  
                </div>
              </div>
            </li>

            

            <li>
              <div class="heading">
                <h1>Fale Conosco</h1>
                <span>Envie sua dúvida ou reclamação</span>
              </div>
              <div class="cd-half-width fivth-slide">
                <div class="container">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="content fivth-content">
                        <div class="row">
                          <div class="col-md-4">
                            <div class="left-info">
                              <p>
                                <td><b>Telefones:</b></td>

                                

                                <td>(85) 3296.7000 / 3402.8750</td>
                                <br />
                               <td> <b>E-mail para contato:</b></td>

                                

                                <td>comercial@cipetran.com </td>

                                <td><b>Endereço:</b></td>

                                

                                <td>Av. Godofredo Maciel, 2841 - Maraponga - Fortaleza - CEP: 60710-001 (em frente à sede do DETRAN-CE) </td>
                                <br />
                                <td><b>Ouvidoria</b></td>

                                

                                <td>ouvidoria@cipetran.com </td>
                              </p>
                              <!-- <ul class="social-icons">
                                <i><a href="#"><i class="fa fa-facebook"></i></a></i>
                                <i><a href="#"><i class="fa fa-twitter"></i></a></i>
                                <i><a href="#"><i class="fa fa-linkedin"></i></a></i>
                                <i><a href="#"><i class="fa fa-rss"></i></a></i>
                                <i><a href="#"><i class="fa fa-behance"></i></a></i>
                              </ul> -->
                            </div>
                          </div>
                          <div class="col-md-8">
                            <div class="row">
                              <form action="index.php" method="post">
                                <div class="col-md-6">
                                  <fieldset>
                                    <input name="name" type="text" class="form-control" id="name" placeholder="Seu Nome" required="">
                                  </fieldset>
                                </div>
                                <div class="col-md-6">
                                  <fieldset>
                                    <input name="email" type="email" class="form-control" id="email" placeholder="Email" required="">
                                  </fieldset>
                                </div>
                                <div class="col-md-6">
                                  <fieldset>
                                    <input name="cpf" type="text" class="form-control" id="cpf" placeholder="CPF" required="">
                                  </fieldset>
                                </div>
                                <div class="col-md-6">
                                  <fieldset>
                                    <input name="placa" type="text" class="form-control" id="placa" placeholder="Placa" required="">
                                  </fieldset>
                                </div>
                                <div class="col-md-12">
                                  <fieldset>
                                    <textarea name="message" rows="6" class="form-control" id="message" placeholder="Mensagem" required=""></textarea>
                                  </fieldset>
                                </div>
                                <div class="col-md-12">
                                  <fieldset>
                                  <button name="btn" value="send" type="submit" class="btn">Enviar</button>
                                  </fieldset>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>                  
                </div>
              </div>
            </li>
            <li>
              <div class="heading">
                <h1>Política de Privacidade</h1>
                <!-- <span>Here you can check our recent projects</span>  -->
              </div>
              <div class="cd-half-width fourth-slide">
                <div class="container">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="content fourth-content">
                        <div class="row">
                          <h2>Política Privacidade</h2>                    
                          <p>A sua privacidade é importante para nós. É política do Grupo Cipetran respeitar a sua privacidade em relação a qualquer informação sua que possamos coletar no site <a href=http://www.cipetran.com/>Grupo Cipetran</a>, e outros sites que possuímos e operamos.</p>                   
                           <p>Solicitamos informações pessoais apenas quando realmente precisamos delas para lhe fornecer um serviço. Fazemo-lo por meios justos e legais, com o seu conhecimento e consentimento. Também informamos por que estamos coletando e como será usado.                    </p>                   
                            <p>Apenas retemos as informações coletadas pelo tempo necessário para fornecer o serviço solicitado. Quando armazenamos dados, protegemos dentro de meios comercialmente aceitáveis ​​para evitar perdas e roubos, bem como acesso, divulgação, cópia, uso ou                        modificação não autorizados.</p>                    
                            <p>Não compartilhamos informações de identificação pessoal publicamente ou com terceiros, exceto quando exigido por lei.</p>                    
                            <p>O nosso site pode ter links para sites externos que não são operados por nós. Esteja ciente de que não temos controle sobre o conteúdo e práticas desses sites e não podemos aceitar responsabilidade por suas respectivas <a href='https://politicaprivacidade.com' target='_BLANK'>políticas de privacidade</a>.                    </p>                    
                            <p>Você é livre para recusar a nossa solicitação de informações pessoais, entendendo que talvez não possamos fornecer alguns dos serviços desejados.</p>                    <p>O uso continuado de nosso site será considerado como aceitação de nossas práticas em torno de privacidade e informações pessoais. Se você tiver alguma dúvida sobre como lidamos com dados do usuário e informações pessoais, entre em contacto connosco.</p>                    
                            <h2>Política de Cookies Grupo Cipetran</h2>                    
                            <h3>O que são cookies?</h3>                    
                            <p>Como é prática comum em quase todos os sites profissionais, este site usa cookies, que são pequenos arquivos baixados no seu computador, para melhorar sua experiência. Esta página descreve quais informações eles coletam, como as usamos e por que às vezes                        precisamos armazenar esses cookies. Também compartilharemos como você pode impedir que esses cookies sejam armazenados, no entanto, isso pode fazer o downgrade ou 'quebrar' certos elementos da funcionalidade do site.</p>                    
                            <h3>Como usamos os cookies?</h3>                   
                             <p>Utilizamos cookies por vários motivos, detalhados abaixo. Infelizmente, na maioria dos casos, não existem opções padrão do setor para desativar os cookies sem desativar completamente a funcionalidade e os recursos que eles adicionam a este site. É recomendável                        que você deixe todos os cookies se não tiver certeza se precisa ou não deles, caso sejam usados ​​para fornecer um serviço que você usa.</p>                   
                              <h3>Desativar cookies</h3>                   
                               <p>Você pode impedir a configuração de cookies ajustando as configurações do seu navegador (consulte a Ajuda do navegador para saber como fazer isso). Esteja ciente de que a desativação de cookies afetará a funcionalidade deste e de muitos outros sites que                        você visita. A desativação de cookies geralmente resultará na desativação de determinadas funcionalidades e recursos deste site. Portanto, é recomendável que você não desative os cookies.</p>                    
                               <h3>Cookies que definimos</h3>                    
                                                   
                                  <p> Cookies relacionados à conta<br>
                                    <br> Se você criar uma conta connosco, usaremos cookies para o gerenciamento do processo de inscrição e administração geral. Esses cookies geralmente serão excluídos quando você sair do sistema, porém, em alguns                            casos, eles poderão permanecer posteriormente para lembrar as preferências do seu site ao sair.<br><br>                        </p>                       
                                  <p> Cookies relacionados ao login<br><br> Utilizamos cookies quando você está logado, para que possamos lembrar dessa ação. Isso evita que você precise fazer login sempre que visitar uma nova página. Esses cookies são normalmente removidos ou limpos                            quando você efetua logout para garantir que você possa acessar apenas a recursos e áreas restritas ao efetuar login.<br><br>                        </p>                        
                                  <p> Cookies relacionados a boletins por e-mail<br><br> Este site oferece serviços de assinatura de boletim informativo ou e-mail e os cookies podem ser usados ​​para lembrar se você já está registrado e se deve mostrar determinadas notificações                            válidas apenas para usuários inscritos / não inscritos.<br><br>                        </p>                        
                                  <p>  Pedidos processando cookies relacionados<br><br> Este site oferece facilidades de comércio eletrônico ou pagamento e alguns cookies são essenciais para garantir que seu pedido seja lembrado entre as páginas, para que possamos processá-lo adequadamente.<br><br>                        </p>                        
                                  <p>  Cookies relacionados a pesquisas<br><br> Periodicamente, oferecemos pesquisas e questionários para fornecer informações interessantes, ferramentas úteis ou para entender nossa base de usuários com mais precisão. Essas pesquisas podem usar cookies                            para lembrar quem já participou numa pesquisa ou para fornecer resultados precisos após a alteração das páginas.<br><br>                        </p>                        
                                  <p>   ookies relacionados a formulários<br><br> Quando você envia dados por meio de um formulário como os encontrados nas páginas de contacto ou nos formulários de comentários, os cookies podem ser configurados para lembrar os detalhes do usuário                            para correspondência futura.<br><br>                        </p>                        
                                  <p>  Cookies de preferências do site<br><br> Para proporcionar uma ótima experiência neste site, fornecemos a funcionalidade para definir suas preferências de como esse site é executado quando você o usa. Para lembrar suas preferências, precisamos                            definir cookies para que essas informações possam ser chamadas sempre que você interagir com uma página for afetada por suas preferências.<br>                        </p>                    
                                                  
                                <h3>Cookies de Terceiros</h3>                   
                                <p>Em alguns casos especiais, também usamos cookies fornecidos por terceiros confiáveis. A seção a seguir detalha quais cookies de terceiros você pode encontrar através deste site.</p>                    
                                                       
                                  <p>                            Este site usa o Google Analytics, que é uma das soluções de análise mais difundidas e confiáveis ​​da Web, para nos ajudar a entender como você usa o site e como podemos melhorar sua experiência. Esses cookies podem rastrear itens como quanto tempo                            você gasta no site e as páginas visitadas, para que possamos continuar produzindo conteúdo atraente.                        </p>                    
                                                  
                                <p>Para mais informações sobre cookies do Google Analytics, consulte a página oficial do Google Analytics.</p>                    
                                                       
                                  <p>                            As análises de terceiros são usadas para rastrear e medir o uso deste site, para que possamos continuar produzindo conteúdo atrativo. Esses cookies podem rastrear itens como o tempo que você passa no site ou as páginas visitadas, o que nos ajuda a entender                            como podemos melhorar o site para você.</p>                        
                                  <p>                            Periodicamente, testamos novos recursos e fazemos alterações subtis na maneira como o site se apresenta. Quando ainda estamos testando novos recursos, esses cookies podem ser usados ​​para garantir que você receba uma experiência consistente enquanto                            estiver no site, enquanto entendemos quais otimizações os nossos usuários mais apreciam.</p>                        
                                  <p>                            À medida que vendemos produtos, é importante entendermos as estatísticas sobre quantos visitantes de nosso site realmente compram e, portanto, esse é o tipo de dados que esses cookies rastrearão. Isso é importante para você, pois significa que podemos                            fazer previsões de negócios com precisão que nos permitem analizar nossos custos de publicidade e produtos para garantir o melhor preço possível.</p>                                            
                                                  
                                <h3>Compromisso do Usuário</h3>                                
                                <p>O usuário se compromete a fazer uso adequado dos conteúdos e da informação que o Grupo Cipetran oferece no site e com caráter enunciativo, mas não limitativo:</p>                                       
                                                       
                                  <p>A) Não se envolver em atividades que sejam ilegais ou contrárias à boa fé a à ordem pública;</p>                        
                                  <p>B) Não divulgar conteúdo ou propaganda de natureza racista, xenofóbica, <a href='https://ondeapostar.pt/' style='color: inherit;font-weight: normal;text-decoration:none;'>casas de apostas online</a>, pornografia ilegal, de apologia ao terrorismo ou contra os direitos humanos;</p>                        
                                  <p>B) Não difundir propaganda ou conteúdo de natureza racista, xenofóbica, ou sobre cassinos, <a href='https://ondeapostar.pt/' style='color: inherit;font-weight: normal;text-decoration:none;'>casas de apostas legais</a> (ex.: <a href='https://ondeapostar.pt/review/betano/' style='color: inherit;font-weight: normal;text-decoration:none;'>Betano</a>), jogos de sorte e azar, qualquer tipo de pornografia ilegal, de apologia ao terrorismo ou contra os direitos humanos;</p>                        
                                  <p>C) Não causar danos aos sistemas físicos (hardwares) e lógicos (softwares) do Grupo Cipetran, de seus fornecedores ou terceiros, para introduzir ou disseminar vírus informáticos ou quaisquer outros sistemas de hardware ou software que sejam capazes de causar danos anteriormente mencionados.</p>                    
                                                                      
                                <h3>Mais informações</h3>                    
                                <p>Esperemos que esteja esclarecido e, como mencionado anteriormente, se houver algo que você não tem certeza se precisa ou não, geralmente é mais seguro deixar os cookies ativados, caso interaja com um dos recursos que você usa em nosso site.</p>                    
                                <p>Esta política é efetiva a partir de <strong>December</strong>/<strong>2020</strong>.</p>
                        </div>
                      </div>
                    </div>
                  </div>                  
                </div>
              </div>
            </li>
          </ul> <!-- .cd-hero-slider -->
        </section> <!-- .cd-hero -->


        <footer>
          <p>Copyright &copy; 2020 Cipetran - CE</p>
        </footer>
    
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        

    </body>
</html>