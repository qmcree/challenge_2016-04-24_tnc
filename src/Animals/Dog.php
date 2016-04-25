<?php

namespace Challenge\Animals;

use Challenge\Exceptions\ScaredException;

class Dog
{
    const SPEAK_SOUND = 'ruff';

    protected $cat;

    /**
     * Dog constructor.
     * @param Cat $cat
     */
    public function __construct($cat)
    {
        $this->cat = $cat;
    }

    /**
     * @return string
     * @throws ScaredException
     */
    public function speak()
    {
        if ($this->cat->hasHissed())
            throw new ScaredException;
        
        return self::SPEAK_SOUND;
    }
}