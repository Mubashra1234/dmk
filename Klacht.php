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
            <h1>Klachtenformulier
            </h1>
            <p>
                Wij streven ernaar om de hoogste kwaliteit van service te leveren.
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
                            <p class="theme-paragraph">Wij streven ernaar om de hoogste kwaliteit van service te leveren.</p>
                            <div class="inputs">
                                <input type="text" placeholder="Naam">
                                <input type="text" placeholder="E-mailadres">

                            </div>

                            <div class="inputs">
                                <input type="email" placeholder="Telefoonnummer">
                                <input type="text" placeholder="Postcode">

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
                            <textarea name="" id="" rows="8" placeholder="Bent u niet tevreden? Beschrijven hier a.u.b. zo uitgebreid mogelijk uw klacht. Wij zullen dit nagaan bij de betreffende elektricien zodat wij samen tot een oplossing kunnen. Binnen 48 uur nemen wij contact met u op."></textarea>
                            <a href="" class="theme-btn d-block text-center">Klacht versturen</a>
                            <img src="./assets/img/form.png" height="60" class="d-block m-auto" alt="">
                        </form>
                    </div>
                </div>
                <div class="col-lg-5">
 <div class="contactus-list">
    <img src="./assets/img/service-section.jpg"   class="rounded-3 w-100" alt="">
 </div>
                </div>
            </div>
        </div>
    </section>




    <?php include('footer.php'); ?>
