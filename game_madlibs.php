#!/opt/homebrew/opt/php@8.3/bin/php
<?php
/* ***************************************************************************************************
 * game_madlibs.php - A class to generate Mad Libs-style stories by replacing placeholders in a
 * template with provided words.
 *
 * This class processes a template story containing placeholders and replaces them with words provided
 * by the user to generate a complete story. The class is designed to make the creation of engaging
 * and customizable stories easy and fun.
 *
 * Attributes:
 *     $story (string): The template story containing placeholders to be replaced.
 *     $words (array): An associative array where the keys are placeholders and the values are the words
 *                     to replace the placeholders with.
 *
 * Methods:
 *     __construct($story, $words):
 *         Initialize the MadLibs object with a story template and a dictionary of words.
 *
 *     generateStory():
 *         Generate the complete story by replacing placeholders with the provided words.
 *         This method processes the template story, replacing each placeholder with the
 *         corresponding word from the dictionary, resulting in a final, entertaining story.
 * ---------------------------------------------------------------------------------------------------
 * Author:       Patrik Eigenmann
 * eMail:        p.eigenmann@gmx.net
 * ---------------------------------------------------------------------------------------------------
 * Fri 2024-12-20 File created.                                                         Version: 00.01
 * ---------------------------------------------------------------------------------------------------
 * To Do's:
 * ***************************************************************************************************/

/**
 * A class to generate Mad Libs-style stories by replacing placeholders in a template with provided words.
 *
 * This class processes a template story containing placeholders and replaces them with words provided
 * by the user to generate a complete story. The class is designed to make the creation of engaging
 * and customizable stories easy and fun.
 *
 * Attributes:
 *     $story (string): The template story containing placeholders to be replaced.
 *     $words (array): An associative array where the keys are placeholders and the values are the words
 *                     to replace the placeholders with.
 *
 * Methods:
 *     __construct($story, $words):
 *         Initialize the MadLibs object with a story template and a dictionary of words.
 *
 *     generateStory():
 *         Generate the complete story by replacing placeholders with the provided words.
 *         This method processes the template story, replacing each placeholder with the
 *         corresponding word from the dictionary, resulting in a final, entertaining story.
 */
 class MadLibs {

    // The variable $story in the MadLibs class is used to store the template story that contains
    // placeholders. These placeholders are meant to be replaced with specific words or phrases
    //to create a complete story.
    private $story; 
    
    // The variable $words in the MadLibs class is an associative array (also known as a dictionary
    // or a map). It is used to store the words or phrases that will replace the placeholders in
    // the template story. Here's a more detailed explanation.
    private $words; //

    /**
     * Initialize the MadLibs object with a story template and a dictionary of words.
     *
     * Args:
     *     $story (string): The template story containing placeholders.
     *     $words (array): An associative array where the key is the placeholder and the value is the word to replace it with.
     *
     * This constructor sets the initial values for the story and words attributes,
     * preparing the class to generate a completed story.
     */
    public function __construct($story, $words) {

        $this->story = $story;
        $this->words = $words;
    }

    /**
     * Generate the complete story by replacing placeholders with the provided words.
     *
     * Returns:
     *     string: The completed story with all placeholders replaced by the corresponding words.
     *
     * This method processes the template story, iterating through the provided words
     * and replacing each placeholder in the story with the corresponding word from the dictionary.
     * The final result is a fully formed story that incorporates the user's inputs.
     */

    public function generateStory() {
        $result = $this->story;
        foreach ($this->words as $placeholder => $word) {
            $result = str_replace("{" . $placeholder . "}", $word, $result);
        }
        return $result;
    }
}

// Usage
$story = "Today, I went to the {place}. I saw a {animal} jumping around.";
$words = array("place" => "zoo", "animal" => "monkey");

$madLibs = new MadLibs($story, $words);
echo $madLibs->generateStory();  // Output: Today, I went to the zoo. I saw a monkey jumping around.

?>
