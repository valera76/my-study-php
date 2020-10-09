<?php       

    class Calculator
{
        private $a;
        private $b;

        public function __construct(int $a, int $b)
    {
        $this->a = $a;
        $this->b = $b;
    }
        public function sum(): int
    {
        return $this->a + $this->b; 
    }
        public function sub(): int
    {
        return $this->a - $this->b; 
    }
        public function mul(): int
    {
        return $this->a * $this->b; 
    }
        public function div(): int
    {
        return $this->a / $this->b; 
    }
}

$calc = new Calculator($_POST['a'], $_POST['b']);
$operation = isset($_POST['operation']) ? $_POST['operation'] : 'undefined';

if ($operation === 'Sum') {
    echo '<h5 class="result">ОТВЕТ: ',$calc->sum(),'</h5>';
    } 

if ($operation === 'Sub') {
    echo '<h5 class="result">ОТВЕТ: ',$calc->sub(),'</h5>';
    }

if ($operation === 'Mul') {
    echo '<h5 class="result">ОТВЕТ: ',$calc->mul(),'</h5>';
    }
if ($operation === 'Div') {
    echo '<h5 class="result">ОТВЕТ: ',$calc->div(),'</h5>';
    }
    



   


       

