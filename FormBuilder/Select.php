<?php
namespace FormBuilder;
  /**
   * Select Class
   */
  class Select extends Element {

    private $options;

    //Constructeur
    public function __construct(string $label,string $name, $options){
  		parent::__construct($label, $name);
  		$this->options = $options;
  	}

    public function draw(){
  		echo "<select name=\"" .$this->getName()."\">";
  		foreach ($this->options as $key => $value) {
  			echo "<option value=\"$key\">$value</option>";
  		}
  		echo "</select>";
  	}

    public function addOption($option){
  		$this->options[] = $option;
  	}

    //Getter Options
    public function getOptions(){
  		return $this->options;
  	}

    public function removeOption($option){
  		$index = array_search($option, $this->options);
  		array_splice($this->options, $index, 1);
  	}

  }


?>
