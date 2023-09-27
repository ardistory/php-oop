<?php

class socialMedia
{
    public string $name;
}
//final class Facebook extends socialMedia
//{
//final public function auth(string $username, string $password): bool
//{
//return true;
//}
//}
class Facebook extends socialMedia
{
    public function auth(string $username, string $password): bool
    {
        return true;
    }
}
class fakeFacebook extends Facebook
{
    public function auth(string $username, string $password): bool
    {
        return false;
    }
}
