<?php
class JsonShape {

    // private $shape;
    private $type;
    private $Parameters;
    
    public function __construct($json = false) {
        if ($json) $this->set($json);
    }

    public function getType(){
        return $this->type;
    }
    public function setType($type){
        $this->type = $type;
    }
    
    public function getParameters(){
        return $this->Parameters;
    }
    public function setParameters($Parameters){
        $this->Parameters = $Parameters;
    }

    public function set($data) {
        foreach ($data AS $key => $value) {
            // var_dump($key);
            switch ($key) {
                
                case "type":
                // var_dump("typeee");
                //  var_dump($value);
                    $this->setType($value);
                    break;
                    case "params":
                // var_dump("typeee");
                //  var_dump($value);
                    $this->setParameters($value);
                    break;
            }
            // if (is_array($value)) {
            //     $sub = new JSONObject;
            //     $sub->set($value);
            //     $value = $sub;
            // }
            // $this->{$key} = $value;
        }
    }
}
?>