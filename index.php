<?php

include __DIR__ .'/includes/autoload.php';

try
{
       
  
   $route = ltrim(strtok($_SERVER['REQUEST_URI'], '?'), '/') ?? '';

   // $_SERVER['REQUEST_METHOD'] = GET

   $entryPoint = new \Ninja\EntryPoint($route,$_SERVER['REQUEST_METHOD'], new \Project\ProjectRoutes());
   $entryPoint->run();
  
}catch(Exception $e)
{
   $output = 'Error From: '. $e->getMessage() . ' In '. $e->getFile() . 'At Line' . $e->getLine();  
   
   include __DIR__. '/templates/html/output.html.php';
}
catch(Throwable $e)
{
   $output = ' Error :<b> '. $e->getMessage() . '</b> That Error will be found in '. $e->getFile() . 'At Line ' . $e->getLine();  
   
   include __DIR__. '/templates/html/output.html.php';
}

