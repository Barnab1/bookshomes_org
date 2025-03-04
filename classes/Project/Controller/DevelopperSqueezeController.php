<?php
namespace Project\Controller;

use PhpMyAdmin\Sanitize;

class DevelopperSqueezeController implements \Ninja\Squeeze{

    private $squeezeDevelopperTable;

    public function __construct( \Ninja\DatabaseMysqli $squeezeDevelopperTable)
    {
        $this->squeezeDevelopperTable = $squeezeDevelopperTable;
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


        
        
        /**
         * 
         * I want to check DatabaseMysqli's total function
         */

        $data = ["email"=>"bookshomes@gmail.com"];

        $totalOfElt = $this->squeezeDevelopperTable->total();

        echo $totalOfElt;

         /*
        $user = $_POST['user'];

        $email = $user['email'];
        
        $email = trim($email);
       
        $valid = true;

        $errors = [];

        if(empty($email))
        {
            $valid = false;
            $errors[]= 'Email vide';
        }elseif (filter_var($email, FILTER_VALIDATE_EMAIL) == false){
            $valid = false;
            $errors[]= 'Email invalide';
        }else{
            //si l'email n'est pas vide et invalide

           
            $search = $this->squeezeDevelopperTable->find('email',$email)->email;

            if(!empty($search))
            {
                if($search == $email){
                $valid = false;
                $errors[] ="Email déjà existante. Veuillez en fournir une autre";
                }
            }

        }

        if($valid){
            if($this->squeezeDevelopperTable->insert(['email'=>$email])){
                echo 'done';
            }
            else{
                echo 'rejected';
            }
        }
        
      
        return [
            'title'=>'Developpeur hors pair',
            'template'=>'developpeurSqueeze.html.php',
            'variables'=>[
                'errors'=> $errors
            ]

        ] ;*/
    }
}