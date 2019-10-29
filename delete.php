<!-- <?php

        if ($_POST['nom'] && $_POST['prenom'] && $_POST['medecin'] && $_POST['genre'] && $_POST['date']) {
            require "html/m/Patient.php";
            require "html/m/Secretaire.php";
            $patient = new Patient(
                $_POST['nom'],
                $_POST['prenom'],
                $_POST['medecin'],
                $_POST['genre'],
                $_POST['tel'],
                $_POST['email'],
                $_POST['cUrg'],
                $_POST['age']
            );
            $secretaire = new MSecretaire;
            $secretaire->prendreRv($patient, $_POST['date']);
        }

        header('location:index.php?page=rv');

        ?>
    <?php
    if ($GET['patient']) {
        require 'html/m/patient';
        $patient = new Patient;
        $patientInf = $patient->infPatient($GET['patient']);
        ?>
    <div class="container register" >
            <div class="row">
                <div class="col-md-3 register-left">
                    <img src="html/v/img/heart.png" alt="" />
                    <h3>Welcome Bissimilah-Ekksil akk jamm</h3>
                    <p>Our HOSPITALITY will make you forget that you are in a HOSPITAL!</p>
                </div>
                <div class="col-md-9 register-right">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <h3 class="register-heading">Prise de rendez-vous/Apointement service</h3>
                            <form action="save.php" method="post">

                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="prenom" class="form-control" placeholder="Prenom *"
                                            value="<?= $patientInf->prenom_patient ?>"  />
                                        </div>
                                        <div class="form-group">

                                            <input type="text" name="nom" class="form-control" placeholder="Nom *"
                                            value="<?= $patientInf->nom_patient ?>"  />
                                        </div>
                                        <div class="form-group">
                                            <input type="number" name='age' class="form-control" placeholder=" Age*"
                                            value="<?= $patientInf->age_patient ?>" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="date" id="datetimepicker" class="form-control" placeholder="Date de rendez-vous *"
                                            value="" readonly />
                                        </div>
                                        <div class="form-group">
                                            <div class="maxl">
                                                <label class="radio inline">
                                                    <input type="radio" name="genre" value="homme" 
                                                    value="<?php if ($patientInf->prenom_patient = "homme") : echo 'checked';
                                                                endif ?>">
                                                    <span> Homme </span>
                                                </label>
                                                <label class="radio inline">
                                                    <input type="radio" name="genre" value="femme"
                                                    <?php if ($patientInf->prenom_patient = "femme") : echo 'checked';
                                                        endif ?> >
                                                    <span>Femme </span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control" placeholder=" Email *"
                                            value="<?= $patientInf->email_patient ?>"  />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name = "tel" minlength="9" maxlength="9" class="form-control"
                                                placeholder="Telephone *"
                                                value="<?= $patientInf->tel_patient ?>"  />
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control" name ="medecin">
                                                <option class="hidden" selected disabled>Choisissez un medecin</option>
                                                <option>What is your Birthdate?</option>
                                                <option>What is Your old Phone Number</option>
                                                <option>What is your Pet Name?</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="addresse" class="form-control" placeholder="Addresse *"
                                             value="<?= $patientInf->tel_patient ?>" />
                                        </div>
                                        <input type="submit" class="btnRegister" value="Enregistrer" />
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
  </div>
        <?php } ?> -->

<?php

require_once 'html/m/patient.php';
require_once 'html/m/secretaire.php';
$delete > annulerRv();
header('location:html/m/appointment-form.php');
?>