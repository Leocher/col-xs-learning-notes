<?php

trait OwnerTrait
{
    public function owner()
    {
        var_dump('comment owner');
    }
}

class Article
{
    use OwnerTrait;
}

class Comment
{
    use OwnerTrait;
}

(new Comment())->owner();
