<?php

namespace UnknownRori\CLIColor;

class Color
{
    // Text Formating
    const NORMAL = 0;
    const BOLD = 1;
    const DIM = 2;
    const UNDERLINE = 4;
    const BLINK = 5;
    const REVERSE = 7;
    const HIDDEN = 8;

    // Foreground
    const BLACK = 30;
    const DARK_GRAY = [1, 30];
    const RED = 31;
    const LIGHT_RED = [1, 31];
    const GREEN = 32;
    const LIGHT_GREEN = [1, 32];
    const BROWN = 33;
    const YELLOW = 33;
    const BLUE = 34;
    const LIGHT_BLUE = [1, 34];
    const MAGENTA = 25;
    const PURPLE = [2, 35];
    const LIGHT_MAGENTA = [1, 35];
    const LIGHT_PURPLE = [1, 35];
    const CYAN = [0, 36];
    const LIGHT_CYAN = [1, 36];
    const LIGHT_GRAY = [2, 37];
    const BOLD_WHITE = [1, 38];
    const LIGHT_WHITE = 38;
    const WHITE = 38;
    const GRAY = 90;
    const LIGHT_RED_ALT = 91;
    const LIGHT_GREEN_ALT = 92;
    const LIGHT_YELLOW_ALT = 93;
    const LIGHT_YELLOW = [1, 93];
    const LIGHT_BLUE_ALT = 94;
    const LIGHT_MAGENTA_ALT = 95;
    const LIGHT_CYAN_ALT = 96;
    const LIGHT_WHITE_ALT = 97;

    // Backgrounds
    const BG_BLACK = 40;
    const BG_RED = 41;
    const BG_GREEN = 42;
    const BG_YELLOW = 43;
    const BG_BLUE = 44;
    const BG_MAGENTA = 45;
    const BG_CYAN = 46;
    const BG_LIGHT_GRAY = 47;
    const BG_DEFAULT = 49;
    const BG_DARK_GRAY = 100;
    const BG_LIGHT_RED = 101;
    const BG_LIGHT_GREEN = 102;
    const BG_LIGHT_YELLOW = 103;
    const BG_LIGHT_BLUE = 104;
    const BG_LIGHT_MAGENTA = 105;
    const BG_LIGHT_CYAN = 106;
    const BG_WHITE = 107;

    /**
     * Print out colorized string with the passed color code and end line
     * @param  string $string
     * @param  int    $colorCode
     * 
     * @return void
     */
    public static function Println(string $string, $colorCode = 30): void
    {
        self::convertArray($colorCode);
        echo "\e[{$colorCode}m{$string}\e[0m\n";
    }

    /**
     * Print out colorized string with the passed color code
     * @param  string $string
     * @param  int    $colorCode
     * 
     * @return void
     */
    public static function Print(string $string, $colorCode = 30): void
    {
        self::convertArray($colorCode);
        echo "\e[{$colorCode}m{$string}\e[0m";
    }

    private static function convertArray(&$colorCode)
    {
        if (is_array($colorCode)) {
            $colorCode = implode(';', $colorCode);
        }
    }
}
