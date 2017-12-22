<?php
namespace FormBuilder;
  /**
   * Form Class
   */
  class Form
  {
    private $elements;
    private $method;
    private $action;
    private $submit;

    //Constructeur
    public function __construct($action, $method = "POST"){
  		$this->setAction($action);
  		$this->setMethod($method);
  		$this->setSubmit("Go");
  		$this->elements = [];
  	}

    //
    public function addInput(string $label,string $name,bool $required = true, $type = "text"){
  		$input = new Input($label, $name, $required, $type);
  		$this->addElement($input);
  		return $this;
  	}

    //
    public function addTextarea(string $label,string $name, bool $required = true){
  		$textarea = new Textarea($label, $name, $required);
  		$this->addElement($textarea);
  		return $this;
  	}

    //
    public function addSelect(string $label,string $name, $options){
  		$select = new Select($label, $name, $options);
  		$this->addElement($select);
  		return $this;
  	}

    //Setter Name
    public function setSubmit(string $name){
  		$this->submit = $name;
  		return $this;
  	}

    //Setter Action
    public function setAction($action){
  		$this->action = $action;
  		return $this;
  	}

    //Setter Method
    public function setMethod($method){
  		$this->method = $method;
  		return $this;
  	}

    //
    public function addElement(IElement $element){
  		$this->elements[] = $element;
  		$element->setForm($this);
  	}

    //Getter Elements
    public function getElements(){
  		return $this->elements;
  	}

    //Getter Element
    public function getElement(string $name){
  		foreach($this->elements as $element){
  			if($element->getName() === $name){
  				return $element;
  			}
  		}
  		return null;
  	}

    //Fonction pour Afficher le formulaire
    public function draw(){
  		echo "<form class=\"fb-form\" method=\"$this->method\" action=\"$this->action\">";
  		echo "<div>";
  		foreach($this->getElements() as $element){
  			echo "<div>";
  			$element->draw();
  			echo "</div>";
  		}
  		echo "<button type=\"submit\">$this->submit</button>";
  		echo "</div>";
  		echo "</form>";
  	}

    //
    public function removeElement(IElement $element){
  		$index = array_search($element, $this->elements);
  		$ok = array_splice($this->elements, $index, 1);
  		if(!is_null($ok)){
  			$element->setForm(null);
  		}
  	}
  }


?>
