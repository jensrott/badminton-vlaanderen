<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="<?php bloginfo('description') ?>">
    <title><?php bloginfo('name') ?></title>
    <?php wp_head() ?> <!-- important meta stuff -->
    
  </head>
  <body>
  <?php get_header() ?>
 
  <!-- Full width video -->
  <div class="video-container">
    <div class="filter"></div>
    <!-- adding control="" is alternative -->
    <!-- https://stackoverflow.com/questions/9097605/how-to-make-a-loading-image-when-loading-html5-video -->
      <video id="video_id" controls="" autoplay loop muted poster="data:image/gif,AAAA">
        <source src="wp-content/themes/badminton_vlaanderen/videos/introfilmpje_shuttlekids.mp4" type="video/mp4"/>
      </video>
  </div>

  <!-- itembuttons -->
    <div class="myButtons">
        <div class="wit" onclick="location.href='/kleur-wit';"><span class="no_show_front white_text">Extra informatie</span></div>
        <div class="geel" onclick="location.href='/kleur-geel';"><span class="no_show_front">Traject geel</span></div>
        <div class="oranje" onclick="location.href='/kleur-oranje';"><span class="no_show_front">Traject oranje</span></div>
        <div class="rood"  onclick="location.href='/kleur-rood';"><span class="no_show_front">Traject rood</span></div>
        <div class="paars" onclick="location.href='/kleur-paars';"><span class="no_show_front">Traject paars</span></div>
        <div class="blauw" onclick="location.href='/kleur-blauw';"><span class="no_show_front">Traject blauw</span></div>
    </div>

    <!-- The rest -->
      <section class="main-section">

        <section class="about-section">
          <div class="container">
            <div class="row">
              <div class="about-card col-sm-6">
                <div class="about-card-title">
                  <h1>
                  Wat is het <br>
                  <span> shuttle kids</span> <br>
                  project?
                  </h1>
                </div>
                <div class="about-card-text">
                  <p>Shuttle Kids is een ontwikkelingstraject van <br> 
                  Badminton Vlaanderen voor beginnende <br> 
                  badminton spelers.
                  </p>
                </div>

                <i class="fas fa-arrow-down" id="down-arrow"></i>
              </div>
              <div class="col-sm-6"></div>
            
            </div>
            <div class="row">
              <div class="colors-explained col-sm-6">
                <p>
                Aan de hand van de 6 kleuren en een duidelijke structuur van de nummering kan je voor je spelers de gepaste leerlijn uitzetten, 
                onmiddellijk de aandachtspunten terugvinden <br> 
                en enkele voorbeeldoefeningen uitproberen. <br>
                De tips voor de trainer zijn er om je te helpen de lessen efficiënt en zo leerrijk mogelijk te maken. <br>
                </p>
               <h5>
               Elk traject (kleur) is opgebouwd uit 6 pijlers:
              </h5>
                
              </div>
              <div class="col-sm-6"></div>
            </div>
            <div>
              <!-- Carousel here -->
              <div class="row carousel-container">
                <div class="carousel-slider">      

                  <!-- Card -->
                  <div>
                    <div class="carousel-card">
                      <div class="text">
                        <div class="carousel-card-title">
                          <h1>1. Klussce
                          </h1>
                        </div>
                        <div class="carousel-card-text">
                          <p>

                          Kracht, lenigheid, uithouding, snelheid en agility, stabiliteit, coördinatie en <br> 
                          evenwicht zijn basisvoorwaarden om actief en <br> 
                          intensief te kunnen deelnemen aan bewegingsvormen. <br> 
                          Deze fundamenten dienen dan ook in zinvolle bewegingscontexten, systematisch, gevarieerd en <br> 
                          op maat van elke leerling te worden opgebouwd en onderhouden.
                          
                          </p>  
                        </div>
                      </div>
                      <div class="image">
                        <img src="wp-content/themes/badminton_vlaanderen/images/klussce.jpg">
                      </div>
                    </div> <!-- End carousel-card -->
                  </div>

                  <!-- Card -->
                  <div>
                    <div class="carousel-card">
                      <div class="text">
                        <div class="carousel-card-title">
                          <h1>2. Grepen
                          </h1>
                        </div>
                        <div class="carousel-card-text">
                          <p>
                          Voor elke slag is er een ideale handgreep. <br> 
                          Het principe is dat het racketblad loodrecht komt te staan <br> 
                          op de vliegrichting bij contact met de shuttle. Bij de initiatie leren we 4 grepen aan. <br> 
                          Elke greep wordt gebruikt in specifieke situaties.
                           <br> 
                          </p>  
                        </div>
                      </div>
                      <div class="image">
                        <img src="wp-content/themes/badminton_vlaanderen/images/grepen.jpg">
                      </div>
                    </div> <!-- End carousel-card -->
                  </div>

                  <!-- Card -->
                  <div>
                    <div class="carousel-card">
                      <div class="text">
                        <div class="carousel-card-title">
                          <h1>3. Houdingen
                          </h1>
                        </div>
                        <div class="carousel-card-text">
                          <p>
                          De badmintonsport bestaat uit een aantal karakteristieke houdingen. <br>
                          Deze houdingen zijn zeer belangrijk voor zowel de slagtechniek als voor het footwork. <br>
                          Deze specifieke badmintonhoudingen vormen de link tussen deze beide aspecten.
                          
                          </p>  
                        </div>
                      </div>
                      <div class="image">
                        <img src="wp-content/themes/badminton_vlaanderen/images/houdingen.jpg">
                      </div>
                    </div> <!-- End carousel-card -->
                  </div>

                  <!-- Card -->
                  <div>
                    <div class="carousel-card">
                      <div class="text">
                        <div class="carousel-card-title">
                          <h1>4. Slagtechniek
                          </h1>
                        </div>
                        <div class="carousel-card-text">
                          <p>
                          Slagtechniek is een essentieel element in het badmintonspel: <br> 
                          met een correcte techniek kan je harder, nauwkeuriger en efficiënter shuttles wegslaan. <br>
                          Bovendien stelt het je in staat om meer variatie in je slagen te brengen. <br> 
                          Ook het spelen met ‘schijn’ vraagt een optimale slagtechniek.
                          </p>  
                        </div>
                      </div>
                      <div class="image">
                        <img src="wp-content/themes/badminton_vlaanderen/images/slagtechniek.jpg">
                      </div>
                    </div> <!-- End carousel-card -->
                  </div> 

                  <!-- Card -->
                  <div>
                    <div class="carousel-card">
                      <div class="text">
                        <div class="carousel-card-title">
                          <h1>5. Footwork
                          </h1>
                        </div>
                        <div class="carousel-card-text">
                          <p>
                            Footwork maakt deel uit van de basistechniek van badminton. <br> 
                            Het zorgt dat je snel bij de shuttle komt, flitsend terug naar de basis terugkeert <br> 
                            en verschillende slagen met voetenwerk efficiënt aan elkaar kan verbinden.
                          </p>  
                        </div>
                      </div>
                      <div class="image">
                        <img src="wp-content/themes/badminton_vlaanderen/images/footwork.jpg">
                      </div>
                    </div> <!-- End carousel-card -->
                  </div> 

                  <!-- Card -->
                  <div>
                    <div class="carousel-card">
                      <div class="text">
                        <div class="carousel-card-title">
                          <h1>6. Tactiek
                          </h1>
                        </div>
                        <div class="carousel-card-text">
                          <p>
                            Het winnen of verliezen is afhankelijk van de manier waarop een speler zijn technische en fysische <br> 
                            kwaliteiten inzet tijdens het opbouwen van een rally. <br>
                            Hoe creëert hij situaties die het mogelijk maken een punt te scoren? <br>
                            Hoe maakt hij het de tegenstrever moeilijk? <br>
                            Het is belangrijk om vanaf de start van de initiatie hier aandacht voor te hebben. <br>
                            Het ABC van Mils is een kapstok die de trainer kan gebruiken om zijn spelers inzicht te brengen in de basistactiek van badminton.
                          </p>  
                        </div>
                      </div>
                      <div class="image">
                        <img src="wp-content/themes/badminton_vlaanderen/images/tactiek.jpg">
                      </div>
                    </div> <!-- End carousel-card -->
                  </div> 

                </div> <!-- End carousel-slider -->
              </div> <!-- End row -->
            </div> <!-- End row -->
          </div> <!-- End container -->

        </section> <!-- End about-section -->
      

      <section class="about-section-with-images">
        <div class="container">
          <div class="row">
            <div class="col-sm-6">
              <img class="image_jongen" src="wp-content/themes/badminton_vlaanderen/images/jongen.jpg">
            </div>
            <div class="col-sm-6 duurzame_motivatie">
              <h1>Duurzame motivatie</h1>
              <p>Shuttle Kids is gebaseerd op het principe van de <br> 
              <span> A-B-C-basisbehoeften voor duurzame motivatie en fair play</span>. <br> 
                We hebben graag dat onze kinderen, de trainers en ouders zich goed voelen <br> 
                in ons clubgebeuren. 
                Dit stimuleren we door de nodige <br> 
                <span>autonomie, binding en competentie</span> aan te bieden (ABC). <br>
                We stimuleren dit extra aan de hand van een <span>Shuttle ID</span>, een badmintonpaspoort voor elk kind.
                Daarnaast bieden we nog 6 gadgets aan. <br> 
                Wanneer uw kind instapt in het Shuttle Kids programma ontvangt het <br> een <span>wit bandje</span> als motiverende startpremie.
                Bij het doorlopen <br> 
                van de verschillende trajecten ontvangt elke speler na het eerste traject <br> 
                een <span>gele sleutelhanger</span>, 
                na het doorlopen van de volgende trajecten <br> 
                een grip voor zijn of haar handvat in <span>4 kleuren</span>: oranje, rood, paars en blauw. Met <br>
                de <span>Shuttle Kids sticker</span> kan je alvast wat promotie maken voor onze leuke badmintonsport!
              </p>
            </div> <!-- End col-sm-6 duurzame_motivatie -->
          </div> <!-- End row -->
          <div class="about-section-with-image-item-back-button">
            <a id="back-button">Terug naar boven</a>
          </div> 
        </div> <!-- End container -->
      </section> <!-- End about-section-with-images -->
        
    </section> <!-- End main-section -->

    
  <!-- Footer with Badminton Vlaanderen logo --->
  <footer>
    <div class="footer_red">Shuttle kids is een project van 
      <a href="https://www.badmintonvlaanderen.be/Home"><img src="../../../wp-content/themes/badminton_vlaanderen/images/footer_logo.png" alt="footer_image"></a>
    </div>
    <div class="footer_purple">
      <div class="container">
      <ul class="footer_ul">
      <div class="left_side small_screen_footer">
        <a href="http://www.yonex.com/">
          Met dank aan
          <img class="yonex_logo" src="../../../../wp-content/themes/badminton_vlaanderen/images/yonex_met_kleuren.png" alt="footer_image">
        </a>
      </div>  
      <div class="right_side">
        <li class="footer_li"><a href="http://facebook.com/badmintonvlaanderen"><i class="fab fa-facebook-f"></i></a></li>
        <li class="footer_li"><a href="http://twitter.com/badvlaanderen"><i class="fab fa-twitter"></i></a></li>
        <li class="footer_li"><a href="http://instagram.com/badmintonvlaanderen"><i class="fab fa-instagram"></i></a></li>
      </div>
      </ul>
      </div>
    </div>
    <div class="footer_green">
      Copyright &copy; <?php echo Date('Y'); ?> - <?php bloginfo('name');?> All rights reserved.
    </div>
  </footer>
  <?php wp_footer() ?>

  </body>
  </html>