<?php
namespace Project\Controller;


/**
 * Responsible for news
 * 
 */
class NewsController {
        public function accueil()
        {
            
            return ['title'=>'Bookshomes news',
                'template'=>'news.html.php',
                
                    ];
                   
        }
}