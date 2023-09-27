<?php

class Handphone
{
    private string $name;
    private bool $expensive;

    public function setName(string $name)
    {
        if (trim($name) != "") {
            $this->name = $name;
        }
    }
    public function getName()
    {
        return $this->name;
    }
    public function setExpensive(bool $expensive)
    {
        $this->expensive = $expensive;
    }
    public function isExpensive()
    {
        return $this->expensive;
    }
}
