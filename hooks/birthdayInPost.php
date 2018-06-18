//<?php

/* To prevent PHP errors (extending class does not exist) revealing path */
if ( !defined( '\IPS\SUITE_UNIQUE_KEY' ) )
{
	exit;
}

<<<<<<< HEAD
class hook110 extends _HOOK_CLASS_
{
	public function isBirthday()
	{
		try
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
		catch ( \RuntimeException $e )
		{
			if ( method_exists( get_parent_class(), __FUNCTION__ ) )
			{
				return call_user_func_array( 'parent::' . __FUNCTION__, func_get_args() );
			}
			else
			{
				throw $e;
			}
=======
class hook23 extends _HOOK_CLASS_
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
>>>>>>> 01fbfe311fa359128ae9e833adf331423f6615e2
		}
	}
}
