<?php
ini_set("intl.error_level", E_WARNING);
ini_set("intl.default_locale", "nl");

$intlcal = IntlCalendar::createInstance('GMT+00:01');
print_r($intlcal->getTimeZone());
print_r(intlcal_get_time_zone($intlcal));
?>
==DONE==
