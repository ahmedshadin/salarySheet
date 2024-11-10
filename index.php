<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bill accounting 21/10/2024</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="account">
        <h1>Bill accounting 21/10/2024</h1>
        <div class="salary">
            <?php 

                class Salary{
                    public function __construct(public $deposit){ }
                    private $money = [];
                    private $total = 0;

                    public function addSalary($name, $salary){
                        $this->total += $salary;
                        $this->money[$name] = $salary;
                        
                        
                    }

                    public function createReport() { ?>

                <span class="deposit"><?php    echo "Initial Deposit was {$this->deposit}.<br>"; ?></span> 

                    <?php    echo "---------------------------------------<br>";
                        foreach($this->money as $name => $salary) { ?>
                            <span class="labour"><?php echo "{$name} --- {$salary}<br>"; ?></span>
                            <?php
                        }
                        echo "-----------------------------<br>"; ?>
                       <span class="total"><?php echo "Total: {$this->total}<br>"; ?></span>
                        <span class="remaining"><?php echo "Remaining Balance: ".($this->deposit - $this->total)."<br>"; ?></span>
                    <?php     
                    }
                }

                $salary = new Salary(325000);
                $salary->addSalary("hanif", 40000 );
                $salary->addSalary("khachru", 20000);
                $salary->addSalary("shahin", 30000);
                $salary->addSalary("anis", 20000);
                $salary->addSalary("hasmot", 10000);
                $salary->addSalary("aminur", 5000);
                $salary->addSalary("anis", 3000);
                $salary->addSalary("nijam", 20000);
                $salary->addSalary("nijam", 10000);
                $salary->addSalary("shopna", 2000);
                $salary->createReport();
            
            ?>
        </div>
    </div>
</body>
</html>