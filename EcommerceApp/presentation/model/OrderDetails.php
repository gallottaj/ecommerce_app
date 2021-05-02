<?php

// joey gallotta
// cst-236
class OrderDetails
{

    private $id;

    private $order_id;

    private $product_id;

    private $quantity;

    private $current_price;

    private $description;

    function __construct($order_id, $product_id, $quantity, $current_price, $description)
    {
        $this->id = 0;
        $this->order_id = $order_id;
        $this->product_id = $product_id;
        $this->quantity = $quantity;
        $this->current_price = $current_price;
        $this->current_description = $description;
    }
    
    //GET ID

    function getId()
    {
        return $this->id;
    }

    //GET order ID
    
    function getOrder_id()
    {
        return $this->order_id;
    }

    //GET product ID
    
    function getProduct_id()
    {
        return $this->product_id;
    }

    //GET quantity
    
    function getQuantity()
    {
        return $this->quantity;
    }
    
    //GET current price
    
    function getCurrent_price()
    {
        return $this->current_price;
    }
    
    //GET description
    
    function getdescription()
    {
        return $this->description;
    }

    //SET ID
    
    function setId($id)
    {
        $this->id = $id;
    }
    
    //SET order ID
    
    function setOrder_id($order_id)
    {
        $this->order_id = $order_id;
    }

    //SET product ID
    
    function setProduct_id($product_id)
    {
        $this->product_id = $product_id;
    }

    //SET quantity
    
    function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    //SET current price
    
    function setCurrent_price($current_price)
    {
        $this->current_price = $current_price;
    }
    
    //SET description

    function setdescription($description)
    {
        $this->description = $description;
    }
}

?>