<?php
require_once "header.php";


$array1 = [0, ["a" => 332, 1, 2, 3], 2, 3, 4];


//  $key => $value
$users = [
    ["id" => 1, "firstName" => "Martin", "lastName" => "Karadzinov", "email" => "martin@myhost.mk"],
    ["id" => 2, "firstName" => "Filip", "lastName" => "Dobrevski", "email" => "filip@pingdevs.com"],
    ["id" => 3, "firstName" => "Vlado", "lastName" => "Kostovski", "email" => "vlado@pingdevs.com"],
];


$users2 = [
    ["id" => 4, "firstName" => "Viktor", "lastName" => "Kocevski", "email" => "viktor@pingdevs.mk"],
    ["id" => 5, "firstName" => "Irena", "lastName" => "Kunovska", "email" => "irena@pingdevs.com"],
    ["id" => 6, "firstName" => "Gish", "lastName" => "Biljarski", "email" => "gis@pingdevs.com"],
];




$role = "Editor";


$showMyDate = date('l');


switch ($showMyDate) {
    case "Monday":
        echo "You have to work!";
        break;
    case "Tuesday":
        echo "Three more days to go!";
        break;
    case "Wednesday":
        echo "Not  there yet";
        break;
    case "Thursday":
        echo "One more day!";
        break;
    case "Friday":
        echo "Finally!!";
        break;
    default:
        echo "Yeyei it's weekend!";
}



switch ($role) {
    case "Administrator":
        echo "Welcome admin!";
        break;
    case "Moderator":
        echo "Welcome moderator";
        break;
    case "Editor":
        echo "You don't have permissions!";
    default:
        echo "You don't have permissions!";
}

$color = "yellow";

switch ($color) {
    case "red":
        echo "Color is red";
        break;
    case "pink":
        echo "Color is pink";
        break;
    case "black":
        echo "Color is black";
        break;
    default:
        echo "Not in a range of colors";
}





?>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email Address</th>
                </tr>
                </thead>
                <tbody>
                <?php

                foreach ($users as $user) {
                    echo '
                <tr>
                    <td>' . $user["id"] . '</td>
                    <td>' . $user["firstName"] . '</td>
                    <td>' . $user["lastName"] . '</td>
                    <td>' . $user["email"] . '</td>
                </tr>';
                }


                for($i = 0; $i < count($users2); $i++) {

                    echo '
                <tr>
                    <td>' . $users2[$i]["id"] . '</td>
                    <td>' . $users2[$i]["firstName"] . '</td>
                    <td>' . $users2[$i]["lastName"] . '</td>
                    <td>' . $users2[$i]["email"] . '</td>
                </tr>';
                }


                $i = 0;
                while($i < count($users2)) {

                    echo '
                <tr>
                    <td>' . $users2[$i]["id"] . '</td>
                    <td>' . $users2[$i]["firstName"] . '</td>
                    <td>' . $users2[$i]["lastName"] . '</td>
                    <td>' . $users2[$i]["email"] . '</td>
                </tr>';
                    $i++;
                }




                ?>



                </tbody>
            </table>
        </div>
    </div>
</div>


<?php require_once "footer.php" ?>






