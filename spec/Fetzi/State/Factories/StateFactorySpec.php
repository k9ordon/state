<?php

namespace spec\Fetzi\State\Factories;

use Fetzi\State\State;
use PhpSpec\ObjectBehavior;

class StateFactorySpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Fetzi\State\Factories\StateFactory');
    }

    function it_should_assign_a_unique_identifier()
    {
        $this->build('name', [])->shouldHaveType(State::class);
    }

    function it_should_assign_name_to_state()
    {
        $this->build('name', [])->name()->shouldReturn('name');
    }

    function it_should_assign_data_to_state()
    {
        $response = $this->build('name', [1, 2, 3])->raw();

        $response->shouldBeArray();
        $response->shouldHaveCount(3);
    }
}
