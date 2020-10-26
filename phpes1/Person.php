<?php

class Person{
    private $first_name;
    private $last_name;

    public function __construct($fn, $ln){
        $this->first_name = $fn;
        $this->last_name = $ln;
    }

    public function getFullName(){
        return $this->first_name . " " . $this->last_name;
    }
}

$p = new Person($_POST['nome'], $_POST['cognome']);

?>
<html>
<body>

    Il nome inserito e' <b><?php echo $p->getFullName() . "\n"; ?></b>

</body>
</html>