 <?php
        $number = 12345;

        $numberStr = (string)$number;

        $firstDigit = $numberStr[0];

        $lastDigit = $numberStr[strlen($numberStr) - 1];

        $sum = (int)$firstDigit + (int)$lastDigit;

        echo "The sum of the first and last digit of $number is: $sum\n";
    ?>
