#!/opt/homebrew/opt/php@8.3/bin/php
<?php
/* **********************************************************************************************
 * calculator.php - This class Calculator takes two numbers as input when an object is created. It 
 * has four methods: add(), subtract(), multiply(), and divide(), each performing the respective
 * operation. The divide() method checks if the second number is zero to avoid a division by zero
 * error. To use this calculator, you can create an object of the Calculator class and call the
 * methods on that object. Please note that this is a very basic calculator and does not perform
 * error checking beyond what’s shown.
 * ----------------------------------------------------------------------------------------------
 * Author:       Patrik Eigenmann
 * eMail:        p.eigenmann@gmx.net
 * ----------------------------------------------------------------------------------------------
 * Sun 2023-12-24 File created.                                                     Version: 00.01
 * Thu 2024-12-19 Getters implemented                                               Version: 00.02
 * **********************************************************************************************/

// -----------------------------------------------------------------------------------------------
// Calculator - This class takes two numbers as input when an object is created. It has four
// methods: add(), subtract(), multiply(), and divide(), each performing the respective operation.
// The divide() method checks if the second number is zero to avoid a division by zero error.
// To use this calculator, you can create an object of the Calculator class and call the methods
// on that object. Please note that this is a very basic calculator and does not perform error
// checking beyond what’s shown.
// -----------------------------------------------------------------------------------------------
 class Calculator {
    private $num1;          // Number 1
    private $num2;          // Number 2

    // --------------------------------------------------------------------------------------------
    // The getNum1() method in the Calculator class is a getter function that returns the value of
    // the num1 variable. This method allows access to the private num1 variable from outside the
    // class, providing a way to retrieve its current value. By using this getter, you can ensure
    // encapsulation, keeping num1 protected from direct modification while still making its value
    // accessible when needed.
    //
    // @return $this->num1 The first number in the calculator class.
    // --------------------------------------------------------------------------------------------
    public function getNum1() {
        return $this->num1;
    }

    // --------------------------------------------------------------------------------------------
    // The getNum2() method in the Calculator class is a getter function that returns the value of
    // the num2 variable. This method allows access to the private num2 variable from outside the
    // class, providing a way to retrieve its current value. By using this getter, you can ensure
    // encapsulation, keeping num2 protected from direct modification while still making its value
    // accessible when needed.
    //
    // @return $this->num2 The second number in the calculator class.
    // --------------------------------------------------------------------------------------------
    public function getNum2() {
        return $this->num2;
    }

    // --------------------------------------------------------------------------------------------
    // The constructor for the Calculator class initializes the object with two numeric values,
    // num1 and num2. These values serve as the primary operands for the arithmetic operations that
    // the calculator performs. Upon instantiation, the constructor sets these two numbers, ensuring
    // that the Calculator object is ready to execute operations like addition, subtraction,
    // multiplication, and division using the provided values.
    //
    // @param $num1 as integer or double
    // @param $num2 as integer or double
    // --------------------------------------------------------------------------------------------
    public function __construct($num1, $num2) {
        
        // Handling of num1, if the number isn't a numeric
        // value it will overwrite with the value of 0 (zero).
        if(is_numeric($num1))
            $this->num1 = $num1;
        else
            $this->num1 = 0;

        // Handling of num2, if the number isn't a numeric
        // value it will overwrite with the value of 0 (zero).
        if(is_numeric($num2))
            $this->num2 = $num2;
        else
            $this->num2 = 0;
    }

    // --------------------------------------------------------------------------------------------
    // The add() method in the Calculator class is responsible for performing the addition operation
    // on two numeric operands. This method takes the values of num1 and num2, which were initialized
    // when the Calculator object was created, and returns their sum. The add() method ensures that
    // the calculator can accurately compute and provide the result of adding these two numbers,
    // making it a fundamental operation within the class.
    //
    // @return addition of $num1 and $num2
    // --------------------------------------------------------------------------------------------
    public function add() {
        return $this->num1 + $this->num2;
    }

    // --------------------------------------------------------------------------------------------
    // The subtract() method in the Calculator class is responsible for performing the subtraction
    // operation on two numeric operands. This method takes the values of num1 and num2, which were
    // initialized when the Calculator object was created, and returns the result of subtracting
    // num2 from num1. The subtract() method ensures that the calculator can accurately compute and
    // provide the difference between these two numbers, making it a key function within the class.
    //
    // @return subtraction of $num1 and $num2
    // --------------------------------------------------------------------------------------------
    public function subtract() {
        return $this->num1 - $this->num2;
    }

    // --------------------------------------------------------------------------------------------
    // The multiply() method in the Calculator class is designed to perform the multiplication
    // operation on two numeric operands. This method utilizes the values of num1 and num2, which
    // were initialized when the Calculator object was instantiated, and returns the product of
    // these two numbers. The multiply() method ensures that the calculator can accurately compute
    // and provide the result of multiplying num1 by num2, making it an essential function within
    // the class.
    //
    // @return multiplication of $num1 and $num2
    // --------------------------------------------------------------------------------------------
    public function multiply() {
        return $this->num1 * $this->num2;
    }

    // --------------------------------------------------------------------------------------------
    // The divide() method in the Calculator class is responsible for performing the division
    // operation on two numeric operands. This method uses the values of num1 and num2, which were
    // initialized when the Calculator object was created, and returns the result of dividing num1
    // by num2. The divide() method includes error handling to ensure that division by zero is
    // managed appropriately, typically by returning a specific value or raising an exception.
    // This method is crucial for performing accurate and safe division operations within the
    // calculator.
    //
    // @return divition of $num1 and $num2
    // --------------------------------------------------------------------------------------------
    public function divide() {
        if ($this->num2 != 0) {
            return $this->num1 / $this->num2;
        } else {
            return "Error! Division by zero is not allowed.";
        }
    }
}

// Initialize a calculator object.
$calculator = new Calculator(50, 5);

$num1 = $calculator->getNum1();
$num2 = $calculator->getNum2();

echo "Addition:         $num1 + $num2 = " . $calculator->add() . "\n";      // Showcase the addition function.
echo "Subtraction:      $num1 - $num2 = " . $calculator->subtract() . "\n"; // Showcase the substraction function.
echo "Multiplication:   $num1 * $num2 = " . $calculator->multiply() . "\n"; // Showcase the multiplication function.
echo "Division:         $num1 / $num2 = " . $calculator->divide() . "\n";   // showcase the divition function.
?>