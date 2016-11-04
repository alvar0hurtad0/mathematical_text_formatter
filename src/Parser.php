<?php

namespace Drupal\mathematical_text_formatter;

/**
 * Class Parser.
 *
 * @package Drupal\mathematical_text_formatter
 */
class Parser implements ParserInterface {

  /**
   * {@inheritdoc}
   */
  public function caluclate($tokens) {
    $result = 0;

    // First number allways add to the math result.
    if (is_numeric($tokens[0])) {
      $result += $tokens[0];
    }

    for ($i = 1; $i < count($tokens); $i += 2) {

      // If there's a number followed by an operator.
      if (isset($tokens[$i + 1])) {
        switch ($tokens[$i]) {
          case '+':
            $result += $tokens[$i + 1];
            break;

          case '-':
            $result -= $tokens[$i + 1];
            break;
        }
      }
    }

    return $result;
  }

}
