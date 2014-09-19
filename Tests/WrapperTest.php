<?php
/**
 * Created by IntelliJ IDEA.
 * User: stefan
 * Date: 2014-09-19
 * Time: 18:43
 */

require_once dirname(__FILE__) . '/../Wrapper.php';

class WrapperTest extends PHPUnit_Framework_TestCase {

    function testCanCreateAWrapper() {
        $wrapper = new Wrapper();
    }

    function testItShouldWrapAnEmptyString() {
        $wrapper = new Wrapper();
        $this->assertEquals('', $wrapper->wrap(''));
    }

    function testItDoesNotWrapAShortEnoughWord() {
        $wrapper = new Wrapper();
        $this->assertEquals('word', $wrapper->wrap('word', 5));
    }

}
 