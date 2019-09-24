<?php
namespace MyGreeter;

class Client
{
	public function __construct()
	{

	}

	public function getGreeting()
	{
		$date = date('Y-m-d');
		$morning = strtotime($date .' 12:00:00');
        $afternoon = strtotime($date .' 18:00:00');
        $evening = strtotime($date .' 23:59:59');
        if (time() < $morning) {
            return 'Good morning';
        } elseif (time() < $afternoon) {
            return 'Good afternoon';
        } elseif (time() <= $evening) {
            return 'Good evening';
        }
        return 'Good morning';
	}
}
