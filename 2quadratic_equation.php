<?php
class QuadraticEquation {
    private $a, $b, $c;

    public function __construct($a, $b, $c) {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }
    public function getA() { return $this->a; }
    public function getB() { return $this->b; }
    public function getC() { return $this->c; }

    public function getDiscriminant() {
        return ($this->b * $this->b) - 4 * ($this->a * $this->c);
    }

    // Calculate first root
    public function getRoot1() {
        $d = $this->getDiscriminant();
        if ($d < 0) return null;
        return (-$this->b + sqrt($d)) / (2 * $this->a);
    }

    public function getRoot2() {
        $d = $this->getDiscriminant();
        if ($d < 0) return null;
        return (-$this->b - sqrt($d)) / (2 * $this->a);
    }
}

$sample = new QuadraticEquation(1, -3, 2);
echo "Root 1: " . $sample->getRoot1() . "\n"; 
echo "Root 2: " . $sample->getRoot2(); 
?>
