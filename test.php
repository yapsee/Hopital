<?php
require '../m/Patient.php';
$patient = new Patient;
$patientInfs = $patient->listPatients();
var_dump($patientInfs);
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