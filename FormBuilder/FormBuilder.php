<?php

namespace FormBuilder;

use FormBuilder\Form;

class FormBuilder {

  //Fonction pour définier le formulaire de contact
  public function buildContactForm(){
    $form = new Form("traitement.php");
    $form->addInput("Motif", "motif")
    ->addInput("Mail", "mail", true, "mail")
    ->addTextarea("Message", "message", true)
    ->addSelect("Destinataire", "destinataire", ["Administration", "Formateurs",
    "Réseau"])
    ->setSubmit("Valider");
    return $form;
  }
}
?>
