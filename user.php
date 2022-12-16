<?php
require_once "header.php";

require_once "mk.php";




echo FIRST_NAME. ' '. LAST_NAME;
die();

$id = $_GET['id'];




$users = [
    ["id" => 1, "firstName" => "Martin", "lastName" => "Karadzinov", "email" => "martin@myhost.mk", "image" => "https://www.oneyoungworld.com/sites/default/files/styles/16_9_640/public/images/speaker/m-karadzhov-500px.png"],
    ["id" => 2, "firstName" => "Filip", "lastName" => "Dobrevski", "email" => "filip@pingdevs.com", "image" => "https://edyn.eu/storage/2022/02/IMG_20200804_133154_409-02-Filip-Dobrevski-e1643809516961-786x786.jpeg"],
    ["id" => 3, "firstName" => "Vlado", "lastName" => "Kostovski", "email" => "vlado@pingdevs.com", "image" => "http://ovationbbdo.com/wp-content/uploads/2017/11/Vlado-600x4003-500x400.jpg"],
];



$groseries  = ["apple", "peach", "banana"];


$people = [["firstName" => "Goran", "lastName" => "Goranovski"], ["firstName" => "Bojan", "lastName" => "Bojanovski"], ["firstName" => "Dojce", "lastName" => "Trojce"]];




foreach($groseries as $index => $product) {
    echo $index . ' '  .$product. "<br />";
}



$dvojce = $people[2];
$dvojce["lastName"] = "ViktorSpie";
var_dump($people);
die();

$numbers = [87, -27, 300, 11];



?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Welcome <?php echo $users[$id]["firstName"] . " " . $users[$id]["lastName"]; ?></h1>
            <img src="<?php echo $users[$id]["image"]; ?>" alt="<?php echo $users[$id]["firstName"]; ?>" />
        </div>
    </div>
</div>

<?php require_once "footer.php"; ?>




