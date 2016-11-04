<?php

namespace Drupal\Tests\mathematical_text_formatter\Unit;

use Drupal\Tests\UnitTestCase;
use Drupal\mathematical_text_formatter\Lexer;

/**
 * Lexer unit tests.
 *
 * @group mathematical_text_formatter
 */
class LexTest extends UnitTestCase {

  /**
   * Test Lexer::Tokenize method.
   */
  public function testTokenize() {
    $lexer = new Lexer();
    $actual = $lexer->tokenize('1+1');
    $expected = ['1', '+', '1'];
    $this->assertArrayEquals($expected, $actual);
  }

}
