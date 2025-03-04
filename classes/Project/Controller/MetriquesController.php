<?php

/**
 * Class MetriquesController
 * 
 * In charge of showing metric for the website, in order to follow Eric
 * Ries' analysis
 */

 class MetriquesController {
    /**
     * Connexion to the database Table
     */
    private $databaseTable;

    public function __construct(Ninja\DatabaseMysqli $databaseTable )
    {
        $this->databaseTable = $databaseTable;
    }

    /**
     * Cohort analysis, analyse a lot of actions from population coming 
     * at a given date
     * 
     * Functionalities for people at a particular date:
     * registered,
     * loggedIn,
     * 
     * 
     */
    public function cohortAnalysis(){
         
    }
 }

