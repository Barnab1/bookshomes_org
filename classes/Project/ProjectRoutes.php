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


     
    public function __construct()
    {
        //include __DIR__. '/../../includes/DatabaseConnection.php';
        
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
     
        
        $audioController = new \Project\Controller\audioController();
        
        
      $routes = [
                    ''=>
                    [
                        'GET'=>
                        [
                            'controller'=>$audioController,
                            'action'=>'entrepreneurs'
                        ]
                    ] ,
                    
                   
                ]  ;
        return $routes;
        
    }

   
}
