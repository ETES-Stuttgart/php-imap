<?php
/*
* File: Issue401Test.php
* Category: Test
* Author: M.Goldenbaum
* Created: 23.06.23 22:48
* Updated: -
*
* Description:
*  -
*/

namespace Tests\issues;

use PHPUnit\Framework\TestCase;
use Webklex\PHPIMAP\Message;

class Issue572Test extends TestCase {

    public function testIssueEmail() {
        $filename = implode(DIRECTORY_SEPARATOR, [__DIR__, "..", "messages", "issue-572.eml"]);
        $message = Message::fromFile($filename);

        self::assertSame("some special chars: ♿äüö", $message->getHTMLBody());
    }

}
