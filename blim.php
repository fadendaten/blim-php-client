<?php

class BlimStyleImage {

  public $collection;
  public $style;
  public $type;
  public $color;

  function __construct($collection, $style, $type, $color) {
    $this -> collection = $collection;
    $this -> style = $style;
    $this -> type = $type;
    $this -> color = $color;
  }

  function url() {
    $url = "http://blim-env-5th4ra9mbv.elasticbeanstalk.com/styles/{$this->collection}/{$this->style}/{$this->type}/{$this->color}";
    $responds = file_get_contents($url);
    $json = json_decode($responds);
    $images=  $json->images;
    return $images[0]->url;
  }
}

class BlimColorImage {

  public $collection;
  public $program;
  public $color;

  function __construct($collection, $program, $color) {
    $this -> collection = $collection;
    $this -> program = $program;
    $this -> color = $color;
  }

  function url() {
    $url = "http://blim-env-5th4ra9mbv.elasticbeanstalk.com/colors/{$this->collection}/{$this->program}/{$this->color}";
    $responds = file_get_contents($url);
    $json = json_decode($responds);
    $images=  $json->images;
    return $images[0]->url;
  }
}

?>
