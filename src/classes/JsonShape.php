<?php

/*
 * This file is part of the GeometricShapes package.
 *
 * (c) Rodrigo De La Garza <josille@gmail.com>
 *
 */

/**
 * Class struct that defines a Json shape for api endpoint.
 *
 * @package    GeometricShapes
 * @author     Rodrigo De La Garza <josille@gmail.com>
 */
class JsonShape
{
    private $Type;
    private $Parameters;

    public function __construct($json = false)
    {
        if ($json) {
            $this->set($json);
        }
    }

    // Returns the type of Shape
    public function getType(): string
    {
        return $this->Type;
    }
    // Set the type of Shape
    public function setType(string $type)
    {
        $this->Type = $type;
    }

    // Returns the Parameters of Shape
    public function getParameters(): string
    {
        return $this->Parameters;
    }
    // Set the Parameters of Shape
    public function setParameters($Parameters): string
    {
        $this->Parameters = $Parameters;
    }

    // Assings variables from an array
    public function set(array $data): void
    {
        foreach ($data as $key => $value) {
            switch ($key) {
                case "type":
                    $this->setType($value);
                    break;
                case "params":
                    $this->setParameters($value);
                    break;
            }
        }
    }
}
