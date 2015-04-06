<?php

class String
{

    public function pascalCaseSplit($string)
    {
        preg_match_all('/((?:^|[A-Z])[a-z]+)/', $string, $matches);

        return $matches[0];
    }

}
