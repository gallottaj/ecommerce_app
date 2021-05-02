<?php

// joey gallotta
// cst-236

class Order
{

    private $id;

    private $date;

    private $user_id;

    private $address_id;

    private $total;

    function __construct($user_id, $address_id, $total)
    {
        $this->id = 0;
        $this->date = date("Y/m/d");
        $this->user_id = $user_id;
        $this->address_id = $address_id;
        $this->total = $total;
    }
    
    //GET ID

    function getId()
    {
        return $this->id;
    }

    //GET date
    
    function getDate()
    {
        return $this->date;
    }

    //GET user ID
    
    function getUser_id()
    {
        return $this->user_id;
    }

    //GET address ID
    
    function getAddress_id()
    {
        return $this->address_id;
    }

    //GET total
    
    function getTotal()
    {
        return $this->total;
    }
    
    //SET ID
    
    function setId($id)
    {
        $this->id = $id;
    }
    
    //SET date

    function setDate($date)
    {
        $this->date = $date;
    }
    
    //SET user ID

    function setUser_id($user_id)
    {
        $this->user_id = $user_id;
    }
    
    //SET address ID

    function setAddress_id($address_id)
    {
        $this->address_id = $address_id;
    }
    
    //SET total

    function setTotal($total)
    {
        $this->total = $total;
    }
}

?>