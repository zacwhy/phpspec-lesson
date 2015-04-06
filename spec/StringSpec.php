<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class StringSpec extends ObjectBehavior
{

    function it_splits_pascal_case_string_to_words()
    {
        $this->pascalCaseSplit('ProductCategoryController')->shouldReturn(['Product', 'Category', 'Controller']);
    }

    function it_slices_pascal_case_string()
    {
        $this->pascalCaseSlice('ProductCategoryController', 0, -1)->shouldReturn('ProductCategory');
    }

}
