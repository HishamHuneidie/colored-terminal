# 🎨 Colored Terminal Text

This project allows you to easily print colored text and backgrounds in the terminal using PHP.

## ✨ Features

- 🎨 Customize text color.
- 🖌️ Customize background color.
- 🎭 Combine text and background colors for styled terminal output.

## 🛠 Requirements

- 🐘 PHP 8.0 or later.

## 📥 Installation

```bash
composer require --dev hishamhuneidie/colored-terminal
```

## 🚀 Usage

Here's how to use the library to print styled text in the terminal:

### Example

```php
#!/usr/bin/env php
<?php

use HishamHuneidie\ColoredTerminal\BackgroundColor;
use HishamHuneidie\ColoredTerminal\Printer;
use HishamHuneidie\ColoredTerminal\TextColor;

require __DIR__ . '/vendor/autoload.php';

// Print text with a specific color
Printer::newText('Hello world!')
       ->setColor(TextColor::BLUE)
       ->print();

// Print text with a background color
Printer::newText('Hello Mars!')
       ->setBackground(BackgroundColor::BLUE)
       ->print();

// Combine text color and background color
Printer::newText('Hello Mercury!')
       ->setColor(TextColor::RED)
       ->setBackground(BackgroundColor::YELLOW)
       ->print();
```

## 🎨 Available Colors

### 🖍️ Text Colors

- `TextColor::RED`
- `TextColor::GREEN`
- `TextColor::BLUE`
- `TextColor::YELLOW`
- `TextColor::BLACK`
- `TextColor::PURPLE`
- `TextColor::CYAN`
- `TextColor::WHITE`

### 🖌️ Background Colors

- `BackgroundColor::RED`
- `BackgroundColor::GREEN`
- `BackgroundColor::BLUE`
- `BackgroundColor::YELLOW`
- `BackgroundColor::BLACK`
- `BackgroundColor::PURPLE`
- `BackgroundColor::CYAN`
- `BackgroundColor::WHITE`

## 🏃 Running the Script

1. Make the script executable:
   ```bash
   chmod +x script.php
   ```

2. Run the script:
   ```bash
   ./script.php
   ```

## 📜 License

This project is licensed under the MIT License. See the [LICENSE](./LICENSE) file for details.

