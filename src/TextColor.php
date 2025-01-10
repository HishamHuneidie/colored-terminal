<?php

namespace HishamHuneidie\ColoredTerminal;

enum TextColor: string
{
    case RED    = "\e[0;31m";
    case GREEN  = "\e[0;32m";
    case BLUE   = "\e[0;34m";
    case YELLOW = "\e[0;33m";
    case BLACK  = "\e[0;30m";
    case PURPLE = "\e[0;35m";
    case CYAN   = "\e[0;36m";
    case WHITE  = "\e[0;37m";
    case CLOSE  = "\e[0m";

}
