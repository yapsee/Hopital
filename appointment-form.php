<div id="tabs" class="container plantab mt-5 ">
    <ul>
        <li><a href="#tab-1" class="btn btn-danger"><span>Prendre un rendez-vous</span></a></li>
        <li><a href="#tab-2" class="btn btn-danger"><span>Modifier ou Annuler un rendez-vous</span></a></li>
    </ul>
    <div id="tab-1">
        <div class="container register ">
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
                                            <input type="text" name="prenom" class="form-control"
                                                placeholder="Prenom *" />
                                        </div>
                                        <div class="form-group">

                                            <input type="text" name="nom" class="form-control" placeholder="Nom *" />
                                        </div>
                                        <div class="form-group">
                                            <input type="number" name='age' class="form-control" placeholder=" Age*" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="date" id="datetimepicker" class="form-control"
                                                placeholder="Date de rendez-vous *" readonly />
                                        </div>
                                        <div class="form-group">
                                            <div class="maxl">
                                                <label class="radio inline">
                                                    <input type="radio" name="genre" value="homme" checked>
                                                    <span> Homme </span>
                                                </label>
                                                <label class="radio inline">
                                                    <input type="radio" name="genre" value="femme">
                                                    <span>Femme </span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control"
                                                placeholder=" Email *" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="tel" minlength="9" maxlength="9"
                                                class="form-control" placeholder="Telephone *" />
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control" name="medecin">
                                                <option class="hidden" selected disabled>Choisissez un medecin</option>
                                                <option>What is your Birthdate?</option>
                                                <option>What is Your old Phone Number</option>
                                                <option>What is your Pet Name?</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="cUrg" class="form-control"
                                                placeholder="Contact d'urgence*" value="" />
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
    <div id="tab-2">
        <div class="container-fluid ">
            <div class="row">
                <div class="col-md-12 col-xs-12 col-md-offset-2 table-responsive mt-5">
                    <a href="#" class="btn btn-primary btn-xs pull-right"><strong>+</strong> Add new categories</a>

                    <table class="table  table-hover table-striped custab text-center">
                        <caption></caption>
                        <thead class='thead-light'>
                            <tr>
                                <th scope="col">ID_Patient</th>
                                <th scope="col">Nom_Patient</th>
                                <th scope="col">Prenom_Patient</th>
                                <th scope="col">Age</th>
                                <th scope="col">Email</th>
                                <th scope="col">Tel</th>
                                <th scope="col">Addresse</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <?php
                        require 'html/m/Patient.php';
                        $patient = new Patient;
                        $patientInfs = $patient->listPatients();
                        for ($i = 0; $i < count($patientInfs); $i++) {
                            $tr = "<tr>";
                            $td = "<td>";
                            $tre = "</tr>";
                            $tde = "</td>";
                            echo $tr .
                                $td . $patientInfs[$i]->id_patient . $tde
                                . $td . $patientInfs[$i]->nom_patient . $tde
                                . $td . $patientInfs[$i]->prenom_patient . $tde
                                . $td . $patientInfs[$i]->age_patient . $tde
                                . $td . $patientInfs[$i]->email_patient . $tde
                                . $td . $patientInfs[$i]->tel_patient . $tde
                                . $td . $patientInfs[$i]->addresse . $tde .
                                '<td class="text-center"><a class="btn btn-info btn-xs" href="edit.php?patient=' . $patientInfs[$i]->id_patient . '">
                                    <span class="glyphicon glyphicon-edit"></span> Edit</a> 
                                    <a href="delete.php?patient=' . $patientInfs[$i]->id_patient . '" class="btn btn-danger btn-xs">
                                <span class="glyphicon glyphicon-remove"></span> Del</a>' .
                                $tde
                                . $tre;
                        }
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>