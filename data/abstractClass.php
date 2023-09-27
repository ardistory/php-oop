<?php

namespace Data {
    abstract class Animal
    {
        public string $name;
        abstract function run();
    }

    class Cat extends Animal
    {
        public function run()
        {
            echo "cat $this->name is running";
        }
    }
    class Dog extends Animal
    {
        public function run()
        {
            echo "dog $this->name is running";
        }
    }
}
