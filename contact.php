<?php
 if(isset($_GET['cty']) && $_GET['cty'] != ''){
  $newword=$_GET['cty'];
  }
$GLOBALS['title'] = "Ihr Partner fÃ¼r die Graffitientfernung in NRW";
$GLOBALS['desc'] = "Bis zu 70% gÃ¼nstiger als ein Neuanstrich âœ“ Festpreisgarantie âœ“ Jetzt anrufen : 02331 488 05 52";
$GLOBALS['keywords'] = "Graffitientfernung";
include('header.php'); ?>






     <!-- banner -->
     <section class="banner service-banner">
        <div class="container">
            <h1>Contact opnemen
            </h1>
            <p>
                Heeft u een vraag, of wilt u een offerte aanvragen? Neem dan contact met ons op via het contactformulier of telefonisch!


            </p>
            <a href="" class="theme-btn">Bel 085-1107641</a>
        </div>
    </section>
















    
    <section class="contactus-form contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="contactus-card">
                       
                        <form action="">
                            <h4 class="theme-heading">Contactformulier</h4>
                            <p class="theme-paragraph">Vragen, opmerkingen of een offerte aanvragen? Neem contact met ons op.</p>
                            <div class="inputs">
                                <input type="text" placeholder="Uw naam">
                                <input type="text" placeholder="Postcode">

                            </div>

                            <div class="inputs">
                                <input type="email" placeholder="E-mailadres">
                                <input type="text" placeholder="Telefoonnummer">

                            </div>


                            
                            <div class="form-field">

                                <h5>Wilt u foto's uploaden?</h5>

                                <div id="files-wrap" class="dropzone">
                                    <div id="planner-files-dropzone">
                                        <input type="hidden" value="" name="form_files_list" />
                                        <input type="file" name="form_file" id="pp-file" />
                                    </div>
                                </div>
                                <p class="theme-paragraph">Max. bestandsgrootte: 256 MB.</p>


                            </div>
                            <textarea name="" id="" rows="4" placeholder="Waarmee kunnen wij u helpen?"></textarea>
                            <a href="" class="theme-btn d-block text-center">Vraag een gratis offerte aan</a>
                            <img src="./assets/img/form.png" height="60" class="d-block m-auto" alt="">
                        </form>
                    </div>
                </div>
                <div class="col-lg-5">
 <div class="contactus-list">
    <img src="./assets/img/service-section.jpg"   class="rounded-3 w-100" alt="">
    <div class="contactus-list-content">
        <p class="theme-paragraph">Louwmans Installatie Techniek B.V.
        </p>

        <p class="theme-paragraph">KVK: 84966378

        </p>

        <p class="theme-paragraph">BTW: NL863443515B01

        </p>


        <p class="theme-paragraph">Hoofdkantoor: <br>
            Saljoet 3,<br>
            3824 MD Amersfoort <br>
            
            </p>
            <p class="theme-paragraph">Let op: dit is geen bezoekadres, maar ons hoofdkantoor. Wij werken landelijk.</p>


            <p class="theme-paragraph">Wij streven ernaar de beste service te leveren. Als u niet tevreden bent, vul dan aub ons klachtenformulier in.</p>
    </div>
   
 </div>
                </div>
            </div>
        </div>
    </section>








    <?php include('footer.php'); ?>
