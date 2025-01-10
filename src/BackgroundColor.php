<?php

namespace HishamHuneidie\ColoredTerminal;

enum BackgroundColor: string
{
    case RED    = "\e[1;41m";
    case GREEN  = "\e[1;42m";
    case BLUE   = "\e[1;44m";
    case YELLOW = "\e[1;43m";
    case BLACK  = "\e[1;40m";
    case PURPLE = "\e[1;45m";
    case CYAN   = "\e[1;46m";
    case WHITE  = "\e[1;47m";
    case CLOSE  = "\e[0m";

}
