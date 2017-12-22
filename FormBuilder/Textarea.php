<?php
namespace FormBuilder;
  /**
   * Textarea Class
   */
  class Textarea extends Element {
    private $required;

    //Constructeur
    public function __construct(string $label, string $name,bool $required = true){
  		parent::__construct($label, $name);
  		$this->setRequired($required);
  	}

    public function draw(){
  		echo '<label>'.$this->getLabel().'</label>';
  		echo '<textarea name="' . $this->getName() . '" '.($this->required?"required":"").' placeholder="' .$this->getLabel(). '">';
  		echo '</textarea>';
  	}

    //Equivalent du Getter Required
    public function isRequired():bool{
  		return $this->required;
  	}

    //Setter Required
    public function setRequired(bool $required){
  		$this->required = $required;
  	}

  }


 ?>
