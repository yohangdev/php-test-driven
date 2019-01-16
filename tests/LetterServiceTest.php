<?php

use PHPUnit\Framework\TestCase;

class LetterServiceTest extends TestCase
{
    public function testOne(): void
    {
        $expectedResults = [
            '2019-A-0001',
            '2019-A-0002',
            '2019-A-0003',
            '2019-A-0004',
            '2019-A-0005',
        ];

        $service = new LetterService();

        $latest  = null;
        $results = [];

        $date = (new \Carbon\Carbon())->year(2019);

        for ($n = 1; $n <= 5; $n++) {
            $latest    = $service->generateNumber($date->year, 'A', $latest);

            $results[] = $latest;
        }

        $this->assertEquals($expectedResults, $results);
    }

    public function testTwo(): void
    {
        $expectedResults = [
            '2018-A-0001',
            '2018-A-0002',
            '2018-A-0003',
            '2019-A-0001',
            '2019-A-0002',
            '2019-A-0003',
        ];

        $service = new LetterService();

        $latest  = null;
        $results = [];

        $date = (new \Carbon\Carbon())->year(2018);

        for ($n = 1; $n <= 3; $n++) {
            $latest    = $service->generateNumber($date->year, 'A', $latest);

            $results[] = $latest;
        }


        $date = (new \Carbon\Carbon())->year(2019);

        for ($n = 1; $n <= 3; $n++) {
            $latest    = $service->generateNumber($date->year, 'A', $latest);

            $results[] = $latest;
        }

        $this->assertEquals($expectedResults, $results);
    }

    public function testThree(): void
    {
        $expectedResults = [
            '2019-A-0001',
            '2019-B-0002',
            '2019-C-0003',
            '2019-D-0004',
            '2019-E-0005',
        ];

        $service = new LetterService();

        $latest  = null;
        $results = [];

        $date = (new \Carbon\Carbon())->year(2019);

        $letters = ['A', 'B', 'C', 'D', 'E'];

        foreach ($letters as $letter) {
            $latest    = $service->generateNumber($date->year, $letter, $latest);

            $results[] = $latest;
        }

        $this->assertEquals($expectedResults, $results);
    }
}
