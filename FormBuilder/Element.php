<?php
namespace FormBuilder;
  /**
   *  Element Class
   */
   abstract class Element implements IElement{

     //Constructeur
     public function __construct(string $label, string $name){
   		$this->setLabel($label);
   		$this->setName($name);
   	}

    //Getter label
    public function getLabel():string{
  		return $this->label;
  	}

    //Setter label
    public function setLabel(string $label){
  		$this->label = $label;
  	}

    //Getter Name
    public function getName():string{
  		return $this->name;
  	}

    //Setter Name
    public function setName(String $name){
  		$this->name = $name;
  	}

    //Getter Form
    public function getForm():Form{
  		return $this->form;
  	}

    //Setter Form
    public function setForm(Form $form){
  		$this->form = $form;
  	}
  }

?>
