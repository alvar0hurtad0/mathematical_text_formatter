<?php

namespace Drupal\mathematical_text_formatter;

/**
 * Class Lexer.
 *
 * @package Drupal\mathematical_text_formatter
 */
class Lexer implements LexerInterface {

  /**
   * Supported operators.
   *
   * @var array
   */
  protected $operators = [];

  /**
   * Constructor.
   */
  public function __construct() {
    $this->operators = ['+', '-'];
  }

  /**
   * {@inheritdoc}
   */
  public function tokenize($expression) {
    $matches = [];
    $operand = '';

    for ($i = 0; $i < strlen($expression); $i++) {
      if (in_array($expression[$i], $this->operators)) {
        $matches[] = $operand;
        $matches[] = $expression[$i];
        $operand = '';
      }
      else {
        $operand .= $expression[$i];
      }
    }
    $matches[] = $operand;

    return $matches;
  }

}
