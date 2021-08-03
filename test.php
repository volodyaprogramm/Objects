
<?php
class ParentClass
{
    public $var1= 1;
    public $var2= 2;

    /**
     * @return int
     */
    public function getVar1(): int
    {
        return $this->var1;
    }

    /**
     * @param int $var1
     */
    public function setVar1(int $var1): void
    {
        $this->var1 = $var1;
    }

    /**
     * @return int
     */
    public function getVar2(): int
    {
        return $this->var2;
    }

    /**
     * @param int $var2
     */
    public function setVar2(int $var2): void
    {
        $this->var2 = $var2;
    }


}


class Peirs1 extends ParentClass
{

    public $d=10;
    public $property= 10;

    public function summParentVar1():int
    {
        return $this->var1+$this->property;
    }

       /**
        * @return int
        */
    public function getProperty(): int
    {
        return $this->property;
    }

    /**
     * @param int $property
     */
    public function setProperty(int $property): void
    {
        $this->property = $property;
    }
}
$funsumm= new Peirs1();
echo $funsumm->summParentVar1();

final class Peirs2 extends ParentClass
{
    public $property2=10;

    public function multParentVar2():int
    {
        return $this->var2*$this->property2;
    }

    /**
     * @return mixed
     */
    public function getProperty2()
    {
        return $this->property2;
    }

    /**
     * @param mixed $property2
     */
    public function setProperty2($property2): void
    {
        $this->property2 = $property2;
    }

}
$Multvar= new Peirs2();
echo $Multvar->multParentVar2();

abstract class Peirs3 extends ParentClass
{
    public $property3=10;
    public $a=5;

    public function devisParentVar1(): int
    {
        return $this->var1 % $this->property3;
    }

    /**
     * @return mixed
     */
    public function getProperty3()
    {
        return $this->property3;
    }

    /**
     * @param mixed $property3
     */
    public function setProperty3($property3): void
    {
        $this->property3 = $property3;
    }

    public function aon($a)
    {
      $this->a = $a;
    }

    abstract function send();
}

class A extends Peirs3
{
  public $b=2;

  public function bon($b)
  {
    $this->b = $b;
  }
  function send()
{
   echo $this->a**$this->b;
}
function rootClass()
{
  echo $this->b - $this->var2;
}
}
$outlokc= new A();
$outlokc->send();
$outlokc->rootClass();

class B extends Peirs1
{
  public $c=5;

  public function getC():int
  {
    return $this->c;
  }

  public function setC(int $c)
  {
    $this->c = $c;
  }

  function division()
  {
    echo $this->d/$this->c;
  }

  function rClass()
  {
     echo  $this->c % $this->var2;
  }
}
$out = new B();
$out->division();
$out->rClass();
 ?>
