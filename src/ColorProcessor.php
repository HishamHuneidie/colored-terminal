<?php

namespace HishamHuneidie\ColoredTerminal;

use RuntimeException;

class ColorProcessor
{
    /**
     * Finds the number of the color
     *
     * @param string $color
     *
     * @return string
     * @throws RuntimeException
     */
    private function getAbbreviation(string $color): string
    {
        if (preg_match('/;(\d+)m/', $color, $matches)) {
            return $matches[1];
        }

        throw new RuntimeException('Invalid color');
    }

    /**
     * Creates a pseudo-color that mixes the both background and color
     *
     * @param BackgroundColor $background
     * @param TextColor       $color
     *
     * @return string
     */
    public function processColorCombination(BackgroundColor $background, TextColor $color): string
    {
        $backgroundAbbreviation = $this->getAbbreviation($background->value);
        $colorAbbreviation = $this->getAbbreviation($color->value);

        return "\e[1;{$colorAbbreviation};{$backgroundAbbreviation}m";
    }
}