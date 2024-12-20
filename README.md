# PHP Script Repository

Welcome to the PHP Script Repository! This project contains a collection of PHP scripts designed to make learning and using the PHP programming language easy and efficient.

## Table of Contents
- [Introduction](#introduction)
- [Scripts](#scripts)
- [Installation](#installation)
- [Contributing](#contributing)
- [License](#license)

## Introduction

This repository contains a variety of PHP scripts aimed at simplifying common programming tasks. Whether you're a beginner looking to learn PHP or a developer needing a quick solution, these scripts cover a range of functionalities to help you out.

## Scripts

### calculator
This class Calculator takes two numbers as input when an object is created. It has four methods: add(),
subtract(), multiply(), and divide(), each performing the respective operation. The divide() method
checks if the second number is zero to avoid a division by zero error. To use this calculator, you
can create an object of the Calculator class and call the methods on that object. Please note that
this is a very basic calculator and does not perform error checking beyond what’s shown.

### compareVersion
In this program, the compareVersions function splits the version numbers into
parts using the explode function. It then compares each part of the version numbers. If a version
number has fewer parts than the other, those missing parts are considered as 0. The function returns
a string indicating whether the first version number is greater than, less than, or equal to the
second version number. You can replace '1.2.3.4.5' and '1.2.3.5.1' with your version numbers.

### config
The Config class is a bridge, connecting your PHP code with the valuable data stored
in XML configuration files. It’s a testament to the power of object-oriented programming,
encapsulating complex processes within easy-to-use methods. So why wait? Let the Config class guide
you through your XML configuration files today!

### currencyConverter
The CurrencyConverter class is more than just a piece of code; it’s a robust, reliable,
and resourceful companion that’s ready to tackle the challenges of currency conversion. So why
wait? Start leveraging the power of the CurrencyConverter class and take your PHP project to new
heights!

### enigma
The Enigma class is a simplified representation of the Enigma machine, a cipher device
used by the Germans during World War II. Please note that this is a very simplified version of the
Enigma machine and doesn't include many of its features, such as the plugboard, multiple rotor sets,
or double stepping of rotors. Also, this code doesn't provide any real security, it's just for
illustrative purposes. For real encryption, consider using established libraries and algorithms.

### game_madlibs
The class MadLibs processes a template story containing placeholders and replaces them with words provided
by the user to generate a complete story. The class is designed to make the creation of engaging
and customizable stories easy and fun.

### game_numbers
In this game, the program first generates a random number between 1 and 100. Then it
enters a loop where it asks the user to enter their guess. If the user’s guess is too high or too
low, it tells them so and asks for another guess. If the user’s guess is correct, it congratulates
the user and ends the game. The game also counts the number of tries it took for the user to guess
the number correctly. If the user enters something that’s not a number, the program will ask for
a valid number.

### game_rockPaperScissors
Here we are dealing with the classic "Rock Paper Siccors" Game. The computer makes a choice and you
will make a choice, let's see who wins.

### parser
In essence, the TemplateParser class is a powerful, easy-to-use tool that takes the complexity
out of template parsing. It’s a testament to the power of well-structured, object-oriented
programming in PHP. Whether you’re building a web application, a content management system,
or just need to personalize your emails, the TemplateParser class is ready to help!

### unitConverter
The UnitConverter class is a versatile and efficient tool designed to simplify
the process of converting between different units of measurement. It’s like a Swiss Army knife for
unit conversions!

## Installation

To use these scripts in your project, simply clone the repository and include the necessary files in your PHP project:

'''bash
git clone https://github.com/PatrikEigenmann/php.git
'''


## License
My scripts are under the GNU Public License, please consult the LICENSE file.