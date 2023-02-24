<?php

namespace tfrommen\BringBackTheGetShortlinkButton\Tests\Unit;

use Brain\Monkey\Actions;
use Brain\Monkey\Filters;
use tfrommen\BringBackTheGetShortlinkButton;

class PluginTest extends TestCase {

	public function testPluginAddsBootstrapCallback(): void {

		self::assertNotFalse( Actions\has( 'plugins_loaded', 'tfrommen\\BringBackTheGetShortlinkButton\\bootstrap' ) );
	}

	public function testBootstrapAddsFilterCallback(): void {

		self::assertFalse( Filters\has( 'get_shortlink' ) );

		BringBackTheGetShortlinkButton\bootstrap();

		self::assertNotFalse( Filters\has( 'get_shortlink', 'tfrommen\\BringBackTheGetShortlinkButton\\pass_through' ) );
	}

	/**
	 * @dataProvider providePassThroughData
	 */
	public function testPassThrough( string $shortlink ): void {

		self::assertSame( $shortlink, BringBackTheGetShortlinkButton\pass_through( $shortlink ) );
	}

	public function providePassThroughData(): array {

		return [
			'homepage'    => [ 'https://example.com/' ],
			'public post' => [ 'https://example.com/?p=123' ],
			'other'       => [ '' ],
		];
	}
}
