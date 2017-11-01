<?php

class Lesson
{
    public $active = true;

    public function __construct($active = true)
    {
        $this->active = $active;
    }
}

class IsActive
{
    public function isSatisfiedBy($item)
    {
        return $item->active === true;
    }
}

$lesson = new Lesson();
$specification = (new IsActive)->isSatisfiedBy($lesson);

