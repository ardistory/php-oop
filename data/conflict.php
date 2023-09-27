<?php


namespace Data\One {

    class conflict
    {
        var string $name;
        function namaku(string $name)
        {
            $this->name = $name;
            echo "halo namaku adalah $this->name" . PHP_EOL;
        }
    }
    class dummy
    {
    }
    class sample
    {
    }
}

namespace Data\Two {
    class conflict
    {
        var string $name;
        function namaku(?string $name)
        {
            $name = $this->name;
            echo "halo namaku adalah $name" . PHP_EOL;
        }
    }
}
