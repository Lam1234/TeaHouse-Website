<?php
class TicketEntity
{
    public $ID;
    public $tickets;
    public $gender;
    public $name;
    public $telep;
    public $email;
    
    
    function __construct($ID, $tickets, $gender, $name, $telep, $email) {
        $this->ID = $ID;
        $this->tickets = $tickets;
        $this->gender = $gender;
        $this->name = $name;
        $this->telep = $telep;
        $this->email = $email;
        
    }
}
?>
