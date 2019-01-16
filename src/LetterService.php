<?php

class LetterService
{
    public function generateNumber($year, $letter, $latest)
    {
        if ($latest === null) {
            $number = 1;

            return $this->formatNumber($year, $letter, $number);
        }

        preg_match('/(\d*)-(.?)-(\d*)/', $latest, $output_array);

        $lastYear = (int) $output_array[1];

        if ($lastYear === $year) {
            $number = (int) $output_array[3];

            $number++;

            return $this->formatNumber($year, $letter, $number);
        }

        $number = 1;

        return $this->formatNumber($year, $letter, $number);
    }

    protected function formatNumber($year, $letter, $number)
    {
        return sprintf('%s-%s-%s', $year, $letter, str_pad($number, 4, '0', STR_PAD_LEFT));
    }
}
