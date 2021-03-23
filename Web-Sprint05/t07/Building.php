<?php

class Building
{
    protected $floors;
    protected $material;
    protected $address;

    public function __construct(int $floors, string $material, string $address)
    {
        $this->floors = $floors;
        $this->material = $material;
        $this->address = $address;
    }

    /*
      @return int
    */
    public function getFloors() : int
    {
        return $this->floors;
    }

    /*
      @return string
    */
    public function getMaterial() : string
    {
        return $this->material;
    }

    /*
      @return string
    */
    public function getAddress() : string
    {
        return $this->address;
    }

    /*
      @return string
    */
    public function toString() : string
    {
        $props = ["Floors : " . $this->floors,
            "Material : " . $this->material,
            "Address : " . $this->address,
            "Elevator: " . $this->hasElevator(),
            "Arc reactor capacity: " . $this->getArcCapacity(),
            "Height: " . $this->getHeight(),
            "Floor height: " . $this->getFloorHeight()
        ];

        $str = "";

        foreach ($props as $p)
            $str = $str . $p . "\n";
        return $str;
    }
}
