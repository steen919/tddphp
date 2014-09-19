<?php
/**
 * Created by IntelliJ IDEA.
 * User: stefan
 * Date: 2014-09-19
 * Time: 18:43
 */

require_once dirname(__FILE__) . '/../Wrapper.php';

class WrapperTest extends PHPUnit_Framework_TestCase {

    function setUp() {
        $this->wrapper = new Wrapper();
    }

    function testItShouldWrapAnEmptyString() {
        $this->assertEquals('', $this->wrapper->wrap(''));
    }

    function testItDoesNotWrapAShortEnoughWord() {
        $this->assertEquals('word', $this->wrapper->wrap('word', 5));
    }

}
 