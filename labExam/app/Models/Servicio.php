<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    /**
     * SERVICIO ATTRIBUTES
     * $this->attributes['id'] - int - contains the service primary key (id)
     * $this->attributes['name'] - string - contains the service name
     * $this->attributes['price'] - int - contains the service price
     * $this->attributes['fast'] - boolean - contains the fast value
     * $this->attributes['created_at'] - timestamp - contains the service creation date
     * $this->attributes['updated_at'] - timestamp - contains the service update date
     */

    public function getId()
    {
        return $this->attributes['id'];
    }

    public function setId($id)
    {
        $this->attributes['id'] = $id;
    }

    public function getName()
    {
        return $this->attributes['name'];
    }

    public function setName($name)
    {
        $this->attributes['name'] = $name;
    }

    public function getPrice()
    {
        return $this->attributes['price'];
    }

    public function setPrice($price)
    {
        $this->attributes['price'] = $price;
    }

    public function getFast()
    {
        return $this->attributes['fast'];
    }

    public function setFast($fast)
    {
        $this->attributes['fast'] = $fast;
    }

    public function getCreatedAt()
    {
        return $this->attributes['created_at'];
    }

    public function setCreatedAt($createdAt)
    {
        $this->attributes['created_at'] = $createdAt;
    }

    public function getUpdatedAt()
    {
        return $this->attributes['updated_at'];
    }

    public function setUpdatedAt($updatedAt)
    {
        $this->attributes['updated_at'] = $updatedAt;
    }
}

