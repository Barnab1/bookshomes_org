<?php
namespace Ninja;

/***
 * Interface Routes
 * 
 * Helps for hinting parameters of some functions
 * Instead of binding directly a  function's parameters
 * in specific project class
 * with a generic class, using  interface is fine for hinting 
 * 
 */
interface Squeeze
{
    /***
     * This function should display form 
     * for the squeeze
     */
    public function formDisplay();
}