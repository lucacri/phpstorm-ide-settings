<?php

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;


/**
 * class ${NAME}
 */
class ${NAME} extends Command
{
	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected ${DS}name = '$name';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected ${DS}description = '$description';
	
	public function __construct() {
		parent::__construct();
	}

	/**
	 * Execute the console command.
	 *
	 * @return mixed
	 */
	public function fire() {
		
	}

	/**
	 * Get the console command arguments.
	 *
	 * @return array
	 */
	protected function getArguments() {
		return array(
			// array('account', InputArgument::REQUIRED, 'Account username')
		);
	}

	/**
	 * Get the console command options.
	 *
	 * @return array
	 */
	protected function getOptions() {
		return array(
			array('one-shot', 'o', InputOption::VALUE_NONE, 'Run it just one time'),
		);
	}
} 
