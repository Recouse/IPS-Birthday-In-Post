//<?php

/* To prevent PHP errors (extending class does not exist) revealing path */
if ( !\defined( '\IPS\SUITE_UNIQUE_KEY' ) )
{
	exit;
}

class hook127 extends _HOOK_CLASS_
{
    public function isBirthday()
    {
        $bmonth = $this->bday_month;
        $bday = $this->bday_day;

        if ($bmonth == null || $bday == null) {
            return false;
        }

        if (mb_strlen($bday) != '2') {
            $bday = 0 . $bday;
        }
        if (mb_strlen($bmonth) != '2') {
            $bmonth = '0' . $bmonth;
        }

        if ($bmonth . $bday == date('md')) {
            return true;
        }

        return false;
    }

    // public function age()
    // {
    //     if (empty($this->bday_year)) {
    //         return NULL;
    //     }

    //     $bdayYear = (int) $this->bday_year;
    //     $currentYear = (int) date('Y');

    //     return $currentYear - $bdayYear;
    // }
}
