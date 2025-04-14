<?php
/*
* File: Issue572Test.php
* Category: Test
* Author: ETES
* Created: 14.04.2025
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
