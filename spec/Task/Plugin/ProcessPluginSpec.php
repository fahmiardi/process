<?php

namespace spec\Task\Plugin;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ProcessPluginSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Task\Plugin\ProcessPlugin');
    }
}
