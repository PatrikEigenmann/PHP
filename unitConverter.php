#!/bin/php
<?php
/* ***************************************************************************************************
 * unitConverter.php - The UnitConverter class is a versatile and efficient tool designed to simplify
 * the process of converting between different units of measurement. It’s like a Swiss Army knife for
 * unit conversions!
 * This class is equipped with a variety of methods, each tailored to convert between specific units.
 * Whether you’re looking to convert distances from miles to kilometers or vice versa, weights from
 * pounds to kilograms or vice versa, or even smaller units like ounces to grams or vice versa, this
 * class has got you covered.
 * But that’s not all! The UnitConverter class is also capable of handling conversions between meters
 * and yards, as well as inches and centimeters. This makes it a comprehensive solution for a wide
 * range of unit conversion needs.
 * Each method in the class takes a single argument - the value you wish to convert. It then uses
 * predefined conversion ratios to calculate and return the converted value. The beauty of this
 * design is its simplicity and efficiency. You don’t need to worry about the conversion logic -
 * the class handles it all for you!
 * In essence, the UnitConverter class is a powerful, easy-to-use tool that takes the complexity out
 * of unit conversions. It’s a testament to the power of well-structured, object-oriented programming
 * in PHP. Whether you’re building a weather app, a physics simulator, or just need to convert your
 * height from centimeters to inches, the UnitConverter class is ready to help!
 * ---------------------------------------------------------------------------------------------------
 * Author:       Patrik Eigenmann
 * eMail:        p.eigenmann@gmx.net
 * ---------------------------------------------------------------------------------------------------
 * Tue	2023-12-26	File created.													    Version: 00.01
 * ***************************************************************************************************/

/**
 * The UnitConverter class is designed to facilitate the conversion of various units of measurement 
 * in a seamless and efficient manner. Imagine you have different values such as distances in miles, 
 * weights in pounds, or lengths in inches that you need to convert into their respective metric 
 * counterparts like kilometers, kilograms, or centimeters. The UnitConverter class handles these 
 * conversions for you effortlessly.
 * 
 * For instance, if you have a distance in miles and want to know the equivalent distance in 
 * kilometers, the class will do the math for you. Similarly, it can convert weights from pounds 
 * to kilograms, ounces to grams, and vice versa. Additionally, it takes care of converting lengths, 
 * such as from meters to yards or from inches to centimeters.
 * 
 * The purpose of the UnitConverter class is to make these conversions straightforward and 
 * user-friendly, eliminating the need for manual calculations. This can be especially useful in 
 * various fields like logistics, manufacturing, or any scenario where precise measurements and 
 * conversions are necessary.
 * 
 * In essence, the UnitConverter class acts as a reliable tool that simplifies the process of 
 * converting different units, ensuring accuracy and saving time.
 */
class UnitConverter {

    // Conversion ratios
    private $miles_to_km_ratio = 1.60934;
    private $lbs_to_kg_ratio = 0.453592;
    private $oz_to_g_ratio = 28.3495;
    private $m_to_yd_ratio = 1.09361;
    private $in_to_cm_ratio = 2.54;

    /**
     * Converts a value from miles to kilometers.
     * This method takes a distance measured in miles and converts it into its equivalent in kilometers.
     * The conversion is based on the widely accepted ratio where 1 mile is equal to approximately
     * 1.60934 kilometers. This method ensures that distance measurements can be easily converted from
     * the imperial system to the metric system.
     * 
     * @param float $miles - The amount of miles to convert.
     * @return float The calculated value of kilometers.
     */
    public function milesToKm($miles) {
        return $miles * $this->miles_to_km_ratio;
    }

    /**
     * Converts a value from miles to kilometers.
     * This method takes a distance measured in miles and converts it into its equivalent in kilometers.
     * The conversion is based on the widely accepted ratio where 1 mile is equal to approximately
     * 1.60934 kilometers. This method ensures that distance measurements can be easily converted
     * from the imperial system to the metric system.
     *
     * @param float $miles The distance in miles to be converted.
     * @return float The equivalent distance in kilometers.
     */
    public function kmToMiles($km) {
        return $km / $this->miles_to_km_ratio;
    }

    /**
     * Converts a value from pounds to kilograms.
     * This method takes a weight measured in pounds and converts it into its equivalent in
     * kilograms. The conversion is based on the widely accepted ratio where 1 pound is equal
     * to approximately 0.453592 kilograms. This method ensures that weight measurements can be
     * easily converted from the imperial system to the metric system.
     *
     * @param float $lbs The weight in pounds to be converted.
     * @return float The equivalent weight in kilograms.
     */
    public function lbsToKg($lbs) {
        return $lbs * $this->lbs_to_kg_ratio;
    }

    /**
     * Converts a value from kilograms to pounds.
     * This method takes a weight measured in kilograms and converts it into its equivalent in pounds.
     * The conversion is based on the widely accepted ratio where 1 kilogram is approximately equal
     * to 2.20462 pounds. This method ensures that weight measurements can be easily converted from
     * the metric system to the imperial system.
     *
     * @param float $kg The weight in kilograms to be converted.
     * @return float The equivalent weight in pounds.
     */
    public function kgToLbs($kg) {
        return $kg / $this->lbs_to_kg_ratio;
    }

    /**
     * Converts a value from ounces to grams.
     * This method takes a weight measured in ounces and converts it into its equivalent in grams.
     * The conversion is based on the widely accepted ratio where 1 ounce is equal to approximately
     * 28.3495 grams. This method ensures that weight measurements can be easily converted from the
     * imperial system to the metric system.
     *
     * @param float $oz The weight in ounces to be converted.
     * @return float The equivalent weight in grams.
     */
    public function ozToG($oz) {
        return $oz * $this->oz_to_g_ratio;
    }

    /**
     * Converts a value from grams to ounces.
     * This method takes a weight measured in grams and converts it into its equivalent in ounces.
     * The conversion is based on the widely accepted ratio where 1 gram is approximately equal to
     * 0.03527396 ounces. This method ensures that weight measurements can be easily converted from
     * the metric system to the imperial system.
     *
     * @param float $g The weight in grams to be converted.
     * @return float The equivalent weight in ounces.
     */
    public function gToOz($g) {
        return $g / $this->oz_to_g_ratio;
    }

    /**
     * Converts a value from meters to yards.
     * This method takes a length measured in meters and converts it into its equivalent in yards.
     * The conversion is based on the widely accepted ratio where 1 meter is equal to approximately
     * 1.09361 yards. This method ensures that length measurements can be easily converted from the
     * metric system to the imperial system.
     *
     * @param float $m The length in meters to be converted.
     * @return float The equivalent length in yards.
     */
    public function mToYd($m) {
        return $m * $this->m_to_yd_ratio;
    }

    /**
     * Converts a value from yards to meters.
     * This method takes a length measured in yards and converts it into its equivalent in meters.
     * The conversion is based on the widely accepted ratio where 1 yard is equal to approximately
     * 0.9144 meters. This method ensures that length measurements can be easily converted from the
     * imperial system to the metric system.
     *
     * @param float $yd The length in yards to be converted.
     * @return float The equivalent length in meters.
     */
    public function ydToM($yd) {
        return $yd / $this->m_to_yd_ratio;
    }

    /**
     * Converts a value from inches to centimeters.
     * This method takes a length measured in inches and converts it into its equivalent in centimeters.
     * The conversion is based on the widely accepted ratio where 1 inch is equal to approximately 2.54
     * centimeters. This method ensures that length measurements can be easily converted from the
     * imperial system to the metric system.
     *
     * @param float $in The length in inches to be converted.
     * @return float The equivalent length in centimeters.
     */
    public function inToCm($in) {
        return $in * $this->in_to_cm_ratio;
    }

    /**
     * Converts a value from centimeters to inches.
     * This method takes a length measured in centimeters and converts it into its equivalent in inches.
     * The conversion is based on the widely accepted ratio where 1 centimeter is approximately equal to
     * 0.393701 inches. This method ensures that length measurements can be easily converted from the
     * metric system to the imperial system.
     *
     * @param float $cm The length in centimeters to be converted.
     * @return float The equivalent length in inches.
     */
    public function cmToIn($cm) {
        return $cm / $this->in_to_cm_ratio;
    }
}

// Create a new instance of the class and test a few methods!
$convertor = new UnitConverter();

printf("10 Kilometers are %f Miles! \n", $convertor->kmToMiles(10));
printf("10 Miles are %f Kilometers! \n", $convertor->milesToKm(10));
printf("10 Meter are %f Yards! \n", $convertor->mToYd(10));
printf("10 Yards are %f Meters! \n", $convertor->ydToM(10));
printf("10 Centimeters are %f Inches! \n", $convertor->cmToIn(10));
printf("10 Inches are %f Centimeters! \n", $convertor->inToCm(10));
printf("10 kg are %f lbs! \n", $convertor->kgToLbs(10));
printf("10 lbs are %f kg! \n", $convertor->lbsToKg(10));
printf("10 g are %f oz! \n", $convertor->gToOz(10));
printf("10 oz are %f g! \n", $convertor->ozToG(10));
?>