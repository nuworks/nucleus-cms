<?php

/**
 * Automatically register the Modules
 */


\Nucleus\Core\Components\ModuleRegistration::register(
	\Nucleus\Core\Components\ModuleRegistration::MODULE,
	'Envelope_CMS',
	__DIR__
);