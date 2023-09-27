<?php

trait A
{
    public function doA(): void
    {
        echo "a";
    }
    public function doB(): void
    {
        echo "b";
    }
}
trait B
{
    public function doA(): void
    {
        echo "A";
    }
    public function doB(): void
    {
        echo "B";
    }
}

class sample
{
    use A, B {
        A::doA insteadof B;
        B::doB insteadof A;
    }
}

$sample = new sample();
$sample->doA();
$sample->doB();
