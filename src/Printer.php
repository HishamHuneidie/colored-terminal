<?php

namespace HishamHuneidie\ColoredTerminal;

class Printer
{
    private static self $instance;
    private ColorProcessor $colorProcessor;

    private function __construct(
        private string $text,
    )
    {
        $this->colorProcessor = new ColorProcessor();
    }

    /**
     * Reuse the same instance for printer
     *
     * @param string $text
     *
     * @return self
     */
    public static function newText(string $text): self
    {
        if (self::$instance ?? false) {
            self::$instance->text = $text;
            return self::$instance;
        }

        self::$instance = new self($text);

        return self::$instance;
    }

    /**
     * Change the text color before it is printed
     *
     * @param TextColor $color
     *
     * @return Printer
     */
    public function setColor(TextColor $color): self
    {
        $colorString = $color->value;
        $end = TextColor::CLOSE->value;

        $this->text = "{$colorString}{$this->text}{$end}";

        return $this;
    }

    /**
     * Change the background color before it is printed
     *
     * @param BackgroundColor $background
     *
     * @return Printer
     */
    public function setBackground(BackgroundColor $background): self
    {
        $tab = "  ";
        $backgroundString = $background->value;
        $end = BackgroundColor::CLOSE->value;

        $printedText = "{$tab}{$this->text}{$tab}";

        $line = "";
        for ($i = 0; $i < strlen($printedText); $i++) {
            $line .= " ";
        }

        $this->text = implode("\n", [
            "",
            "{$backgroundString}{$line}{$end}",
            "{$backgroundString}{$printedText}{$end}",
            "{$backgroundString}{$line}{$end}",
        ]);

        return $this;
    }

    /**
     * Change the background and the color before it is printed
     *
     * @param BackgroundColor $background
     * @param TextColor       $color
     *
     * @return Printer
     */
    public function setCombination(BackgroundColor $background, TextColor $color): self
    {
        $tab = "  ";
        $colorString = $this->colorProcessor->processColorCombination($background, $color);
        $end = BackgroundColor::CLOSE->value;

        $printedText = "{$tab}{$this->text}{$tab}";

        $line = "";
        for ($i = 0; $i < strlen($printedText); $i++) {
            $line .= " ";
        }

        $this->text = implode("\n", [
            "",
            "{$colorString}{$line}{$end}",
            "{$colorString}{$printedText}{$end}",
            "{$colorString}{$line}{$end}",
        ]);

        return $this;
    }

    /**
     * Print text with a new line
     *
     * @return void
     */
    public function print(): void
    {
        echo "{$this->text}\n";
    }
}