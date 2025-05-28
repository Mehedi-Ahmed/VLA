<?php
abstract class VehicleBase {
    protected $name;
    protected $type;
    protected $price;
    protected $image;

    public function __construct($data) {
        $this->name = $data['name'];
        $this->type = $data['type'];
        $this->price = $data['price'];
        $this->image = $data['image'];
    }

    abstract public function getDetails();
}
