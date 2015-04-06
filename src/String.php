<?php

class String
{

    public function pascalCaseSplit($string)
    {
        preg_match_all('/((?:^|[A-Z])[a-z]+)/', $string, $matches);

        return $matches[0];
    }

    public function pascalCaseSlice($string, $offset, $length = null)
    {
        $input = $this->pascalCaseSplit($string);

        $output = array_slice($input, $offset, $length);

        return join('', $output);
    }

}
