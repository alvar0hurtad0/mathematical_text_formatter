<?php

namespace Drupal\Tests\mathematical_text_formatter\Unit;

use Drupal\Tests\UnitTestCase;
use Drupal\mathematical_text_formatter\Parser;

/**
 * Parser unit tests.
 *
 * @group mathematical_text_formatter
 */
class ParserTest extends UnitTestCase {

  /**
   * Test parser::calculate method.
   */
  public function testParser() {
    $parser = new Parser();
    $tokens = ['1', '-', '2'];
    $actual = $parser->caluclate($tokens);
    $expected = -1;
    $this->assertEquals($expected, $actual);
  }

}
