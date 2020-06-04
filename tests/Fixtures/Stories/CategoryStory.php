<?php

namespace Zenstruck\Foundry\Tests\Fixtures\Stories;

use Zenstruck\Foundry\Story;
use Zenstruck\Foundry\Tests\Fixtures\Factories\CategoryFactory;

/**
 * @author Kevin Bond <kevinbond@gmail.com>
 */
final class CategoryStory extends Story
{
    protected function build(): void
    {
        $this->add('php', CategoryFactory::create(['name' => 'php']));
        $this->add('symfony', CategoryFactory::create(['name' => 'symfony']));
    }
}
