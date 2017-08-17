<?php
/**
 * Created by PhpStorm.
 * User: Julien COEURVOLAN
 * Date: 17/08/2017
 * Time: 10:11
 */

$validateForm = true;
$url = 'localhost';
$fields = array(
    "client_nom" => $_POST["client_nom"],
    "client_prenom" => $_POST["client_prenom"],
    "client_date_naissance" => $_POST["client_date_naissance"],
    "client_lieu_naissance" => $_POST["client_lieu_naissance"],
    "client_telephone" => $_POST["client_telephone"],
    "client_email" => $_POST["client_email"],
    "client_adresse" => $_POST["client_adresse"],
    "client_situation" => $_POST["client_situation"],
    "conjoint_nom" => $_POST["conjoint_nom"],
    "conjoint_prenom" => $_POST["conjoint_prenom"],
    "conjoint_date_naissance" => $_POST["conjoint_date_naissance"],
    "conjoint_lieu_naissance" => $_POST["conjoint_lieu_naissance"],
    "mariage_statut" => $_POST["mariage_statut"],
    "mariage_ex" => $_POST["mariage_ex"]
);
$fields_string = "";
foreach ($fields as $key => $value) {
    $fields_string .= $key . '=' . $value . '&';
}
$fields_string = rtrim($fields_string, '&');


if ($validateForm) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, count($fields));
    curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
    curl_exec($ch);
    curl_close($ch);
    //echo $fields_string;
    http_response_code(200);
} else {
    echo 'bad form';
    http_response_code(400);
}
?>