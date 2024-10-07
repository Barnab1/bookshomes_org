<?php
namespace Project\Controller;

class AudioController{


    /**
     * entrepreneursBook
     * 
     * Return entrepreneurs books's
     * @return array entrepreneursBook
     */
    public function entrepreneurs()
    {
        return ['title'=>'Bookshomes', 
        'template'=>'home.html.php'  
                ];
    }

}