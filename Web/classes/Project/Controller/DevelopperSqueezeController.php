<?php
namespace Project\Controller;



class DevelopperSqueezeController implements \Ninja\Squeeze{

    private $squeezeTable;

    public function __construct(\Ninja\DatabaseMysqli $squeezeTable)
    {
        $this->squeezeTable = $squeezeTable;
    }
    /***
     * Will take into account developper
     * things
     */
    public function formDisplay(){
        return [
            'title'=>'Developpeur hors pair',
            'template'=>'developpeurSqueeze.html.php'
        ] ;
    }

    
    public function formTreatment(){

      
     
      
      
        return [
            'title'=>'Developpeur hors pair',
            'template'=>'developpeurSqueeze.html.php',
            'variables'=>[
                'jean'=>'Merci cher ami de t\'être inscrit'
            ]

        ] ;
    }
}