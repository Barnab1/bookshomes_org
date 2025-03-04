<?php
declare(strict_types = 1);
namespace Project;

class ProjectRoutes implements \Ninja\Routes
{


    /**
     * 
     * That public construct function instantiate the class 
     * but without parameters
     * 
     * 
     **/

     private $usersTable;
     private $authentication;
    private $squeezeTable;
    private $squeezeDevelopperTable;

     
    public function __construct()
    {
        include __DIR__. '/../../includes/DatabaseConnection.php';
        $this->squeezeTable = new \Ninja\DatabaseMysqli($connection,'squeeze','id');
        $this->squeezeDevelopperTable = new \Ninja\DatabaseMysqli($connection,'squeezeDevelopper','id','\Project\Entity\SqueezeDevelopper');

    }



    /**
     * getRoutes( )
     * **************************************
     * Return the route which will intantiate
     *  the controller and the action required
     * ***************************************
     * @return routes array
     */
    public function getRoutes()
    {
            
        $audioController = new \Project\Controller\AudioController();
        $newsController = new \Project\Controller\NewsController();
        $developperSqueezeController = new \Project\Controller\DevelopperSqueezeController($this->squeezeDevelopperTable);
        
      $routes = [
                    ''=>
                    [
                        'GET'=>
                        [
                            'controller'=>$audioController,
                            'action'=>'audioDisplay'
                        ]
                    ] ,
                    'audio/personal'=>
                    [
                        'GET'=>
                        [
                            'controller'=>$audioController,
                            'action'=>'personalAudio'
                        ]
                    ],

                    'news/accueil'=>
                    [
                        'GET'=>
                        [
                            'controller'=>$newsController,
                            'action'=>'accueil'
                        ]
                        ],
                    'squeeze/developper'=>[
                        'GET'=>
                        [
                            'controller'=>$developperSqueezeController,
                            'action'=>'formDisplay'
                        ],
                        'POST'=>[
                            'controller'=>$developperSqueezeController,
                            'action'=>'formTreatment'
                        ]
                        ]

                   
                    
                   
                ]  ;
        return $routes;
        
    }

   
}
