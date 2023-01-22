<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Result</title>
        <style>
            table {
                font-family: arial, sans-serif;
                border-collapse: collapse;
                width: 50%;
            }

            td, th {
                border: 1px solid #dddddd;
                text-align: left;
                padding: 8px;
            }

            tr:nth-child(even) {
                background-color: #dddddd;
            }
        </style>
    </head>
    <body>
        <table>
            <?php

            class student {

                public $enr, $name;

                function __construct($enr, $name) {
                    $this->enr = $enr;
                    $this->name = $name;
//                    $this->sub1=$sub1;
//                    $this->sub2=$sub2;
//                    $this->sub3=$sub3;
                }

                function setdata($enr, $name) {
                    $this->enr = $enr;
                    $this->name = $name;
                }

                function display() {
                    
                    echo "<tr><th>Name is: </th><td>$this->name</td></th>";
                    echo "<tr><th>Enrollment Number is: </th><td>$this->enr</td></th>";
                }

            }

            class result extends student {

                public $sub1, $sub2, $sub3, $total, $res, $grade;

                function __construct($enr, $name, $sub1, $sub2, $sub3) {
                    parent::__construct($enr, $name);
                    $this->sub1 = $sub1;
                    $this->sub2 = $sub2;
                    $this->sub3 = $sub3;
                }

                function setdata($enr, $name, $sub1, $sub2, $sub3) {
                    parent::setdata($enr, $name);
                    $this->sub1 = $sub1;
                    $this->sub2 = $sub2;
                    $this->sub3 = $sub3;
                }

                function getresult() {
                    $this->total = $this->sub1 + $this->sub2 + $this->sub3;
                    $this->res = $this->total / 3;
                    $this->res;
                    if ($this->res > 70) {
                        $this->grade = "Distinction";
                    } elseif ($this->res > 60 or $this->res <= 70) {
                        $this->grade = "First Class";
                    } elseif ($this->res >= 50 or $this->res <= 60) {
                        $this->grade = "Second Class";
                    } 
                    else {
                        $this->grade = "Fail";
                    }
                }

                function display() {
                    parent::display();
                    echo "<tr><th>Subject 1 mark is : </th><td>$this->sub1</td></tr>";
                    echo "<tr><th>Subject 2 mark is : </th><td>$this->sub2</td></tr>";
                    echo "<tr><th>Subject 3 mark is : </th><td>$this->sub3</td></tr>";
                    echo "<tr><th>Persentage is : </th><td>$this->res</td></tr>";
                    echo "<tr><th>Grade is : </th><td>$this->grade</td></tr>";


                    
                }

            }

            $name = $_POST['name'];
            $enr = $_POST['enr'];
            $sub1 = $_POST['sub1'];
            $sub2 = $_POST['sub2'];
            $sub3 = $_POST['sub3'];
            $p = new result($enr, $name, $sub1, $sub2, $sub3);
//            $p->setdata();
            $p->getresult();
            $p->display();
            ?>
        </table>
    </body>
</html>
