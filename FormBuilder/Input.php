<?php
namespace FormBuilder;

  /**
   * Input Class
   */
  class Input extends Textarea {
    private $type;

    //Constructeur
    public function __construct(string $label, string $name,bool $required = true,string $type = "text"){
  		parent::__construct($label, $name, $required);
  		$this->setType($type);
  	}

    public function draw(){
  		echo "<label>" . $this->getLabel() . "</label>" .
  		'<input type="' . $this->getType() . '" name="' . $this->getName() . '" placeholder="'. $this->getLabel() .'" '.($this->isRequired()?"required":"").'/>';
  	}

    //Gette Type
    public function getType():string{
      return $this->type;
    }

    //Setter Type
    public function setType(string $type){
  		$this->type = $type;
  	}

  }


?>
