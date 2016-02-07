<?php
/**
* Item.php storing class item/objects. The o
* @author Jen Lockett, Makeda Michael
* @version 1 02/06/2016
* @link
*/

class Item
{
//item name
   public $name = '';
//item description
   public $description = '';
//item price
   public $price = 0;
//item quantity
   public $quantity;
    
    /**
     * Constructs Item
     * @param $name
     * @param $description
     * @param $price
     * @param $quantity
     */
    
    public function __construct($name, $description, $price, $quantity)
    {
    
    $this->name = $name;
    $this->description = $description;
    $this->price = $price;
    $this->quantity = $quantity;    
    
    }
     /**
     *
     * functions to get return
     *
     */
    
    public function getName()
    {
        return $this->name;
    }
   
    public function getDescription()
    {
        return $this->description;
    }
   
    public function getPrice()
    {
        return $this->price;
    }
   
    public function getQuantity()
    {
        return $this->quantity;
    }
    
}
