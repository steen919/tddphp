<?php
/**
 * Created by IntelliJ IDEA.
 * User: stefan
 * Date: 2014-09-19
 * Time: 18:43
 */

require_once dirname(__FILE__) . '/../Wrapper.php';

class WrapperTest extends PHPUnit_Framework_TestCase {

    private $wrapper;

    function setUp() {
        $this->wrapper = new Wrapper();
    }

    function testItShouldWrapAnEmptyString() {
        $this->assertEquals('', $this->wrapper->wrap('', 0));
    }

    function testItDoesNotWrapAShortEnoughWord() {
        $textToBeParsed = 'word';
        $maxLineLength = 5;
        $this->assertEquals($textToBeParsed, $this->wrapper->wrap($textToBeParsed, $maxLineLength));
    }

    function testItWrapsAWordLongerThanLineLength() {
        $textToBeParsed = 'alongword';
        $maxLineLength = 5;
        $this->assertEquals("along\nword", $this->wrapper->wrap($textToBeParsed, $maxLineLength));
    }

}
 