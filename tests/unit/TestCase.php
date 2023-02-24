<?php

namespace tfrommen\BringBackTheGetShortlinkButton\Tests\Unit;

use Brain\Monkey;
use PHPUnit\Framework\TestCase as PHPUnitTestCase;

/**
 * Abstract base class for all unit test case implementations.
 */
abstract class TestCase extends PHPUnitTestCase {

	/**
	 * Prepare the test environment before each test.
	 *
	 * @return void
	 */
	protected function setUp(): void {

		parent::setUp();
		Monkey\setUp();

		// Once Brain Monkey is set up, ensure the main plugin file is loaded.
		require_once dirname( __DIR__, 2 ) . '/bring-back-the-get-shortlink-button.php';
	}

	/**
	 * Clean up the test environment after each test.
	 *
	 * @return void
	 */
	protected function tearDown(): void {

		Monkey\tearDown();
		parent::tearDown();
	}
}
