<?php
// path to run ./vendor/bin/phpunit --bootstrap vendor/autoload.php SimpleTest.php
// butuh Framework PHPUnit
use PHPUnit\Framework\TestCase;
    //Class yang mau di Test
    require_once "Wordcount.php";

    //Class untuk run Testing
    class SimpleTest extends TestCase{
        public function testCountWord(){

            // Kita Pakai class yang mau kita coba/test
            $Wc = new WordCount();


            //Kita masukkan paramater 3 kata, yang harusnya dapat 3 output
            $TestSentence = "Nama Saya Muhammad Aiman";
            $WordCount = $Wc ->countWords($TestSentence);


            //kita assert equal, ekspetasi nya harus 3, juka benar berarti Wordcount berfungsi dengan baik
            $this->assertEquals(3,$WordCount);

        }
    }

?>