<?php
namespace Project\Controller;


/**
 * Responsible for every interactions related
 * to Audio
 */
class AudioController{


    /**
     * entrepreneursBook
     * 
     * Return every audio briefing
     * @return array entrepreneursBook
     */
    public function audioDisplay()
    {
        return ['title'=>'Bookshomes', 
        'template'=>'home.html.php'  
                ];
    }

    /**
     * Return each user 
     * audios
     */
    public function personalAudio()
    {
        return ['title'=>'Bookshomes Personal Audios', 
        'template'=>'personal_audios.html.php'  
                ];
    }

    


}