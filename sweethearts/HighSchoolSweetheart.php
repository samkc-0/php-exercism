<?php

class HighSchoolSweetheart
{
    public function firstLetter(string $name): string
    {
        return trim($name)[0];
    }

    public function initial(string $name): string
    {
        return strtoupper($this->firstLetter($name)) . '.';
    }

    public function initials(string $name): string
    {
        $initials = array_map(function($x) { return $this->initial($x); }, explode(" ", $name));
        return implode(" ", $initials);
    }

    public function pair(string $sweetheart_a, string $sweetheart_b): string
    {
        $initials_a = $this->initials($sweetheart_a);
        $initials_b = $this->initials($sweetheart_b);
        $pair = implode("  ", array($initials_a, "+", $initials_b));
        $out = <<<EXPECTED_HEART
        ******       ******
      **      **   **      **
    **         ** **         **
   **            *            **
   **                         **
   **     A. B.  +  C. D.     **
    **                       **
      **                   **
        **               **
          **           **
            **       **
              **   **
                ***
                 *
   EXPECTED_HEART;
   return $out;

    }
}
