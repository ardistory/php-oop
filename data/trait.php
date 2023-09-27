<?php

namespace Data\Traits;

trait sayHello
{
    public string $name;
    public function sayHello(string $name): void
    {
        echo "hello $name" . PHP_EOL;
    }
}
trait sayGoodbye
{
    public string $name;
    public function sayGoodbye(string $name): void
    {
        echo "Goodbye $name" . PHP_EOL;
    }
}
trait run
{
    public abstract function run();
}
class Personil
{
    use sayHello, sayGoodbye, run;

    public function run()
    {
        echo "this trait $this->name is running";
    }
}
