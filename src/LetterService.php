<?php

class LetterService
{
    public function generateNumber($year, $letter, $latest)
    {
        if ($latest === null) {
            $number = 0;
        } else {
            preg_match('/(\d*)-(.?)-(\d*)/', $latest, $output_array);

            $latestYear = (int) $output_array[1];

            if ($latestYear === $year) {
                $number = (int) $output_array[3];
            } else {
                $number = 0;
            }
        }

        $number++;

        return sprintf('%s-%s-%s', $year, $letter, str_pad($number, 4, '0', STR_PAD_LEFT));
    }
}
