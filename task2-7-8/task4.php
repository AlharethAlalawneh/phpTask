<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task 4</title>
</head>
<body>
    <?php
    class ArraySorter {
        private $array;
    
        public function __construct($array) {
            $this->array = $array;
        }
    
        public function sortArray() {
            sort($this->array);
        }
    
        public function getSortedArray() {
            return $this->array;
        }
    }
    
    $sampleArray = array(11, -2, 4, 35, 0, 8, -9);
    $sorter = new ArraySorter($sampleArray);
    $sorter->sortArray();
    $sortedArray = $sorter->getSortedArray();
    
    print_r($sortedArray);
    ?>
</body>
</html>