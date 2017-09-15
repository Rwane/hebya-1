<?php



namespace Entity;


class Provider {
    
    /**
     *
     * @var int
     */
    private $idprovider;
    
    
    /**
     *
     * @var string
     */
    private $lastname;
    
    private $firstname;
    
    private $company;
    
    private $email;
    
    private $phone;
    
    private $address;
    
     private $country;
    
     
     
     
     /***GETTER****/
     
    function getIdprovider() {
        return $this->idprovider;
    }

    function getLastname() {
        return $this->lastname;
    }

    function getFirstname() {
        return $this->firstname;
    }

    function getCompany() {
        return $this->company;
    }

    function getEmail() {
        return $this->email;
    }

    function getPhone() {
        return $this->phone;
    }

    function getAddress() {
        return $this->address;
    }

    function getCountry() {
        return $this->country;
    }

    
    /**********SETTER************/
    
    
    function setIdprovider($idprovider) {
        $this->idprovider = $idprovider;
        
        return $this;
    }

    function setLastname($lastname) {
        $this->lastname = $lastname;
        
        return $this;
    }

    function setFirstname($firstname) {
        $this->firstname = $firstname;
        
        return $this;
    }

    function setCompany($company) {
        $this->company = $company;
        
        return $this;
    }

    function setEmail($email) {
        $this->email = $email;
        
        return $this;
    }

    function setPhone($phone) {
        $this->phone = $phone;
        
        return $this;
    }

    function setAddress($address) {
        $this->address = $address;
        
        return $this;
    }

    function setCountry($country) {
        $this->country = $country;
        
        return $this;
    }

       
    
    
}
