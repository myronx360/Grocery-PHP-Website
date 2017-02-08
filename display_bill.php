<?php
/**
 * HW 2
 * display_bill.php
 * Myron Williams
 *
 */

$budget=$_POST['budget'];
$apple=$_POST['apple'];
$banana=$_POST['banana'];
$milk=$_POST['milk'];
$cake=$_POST['cake'];
$toast=$_POST['toast'];
$cheese=$_POST['cheese'];
$cookie=$_POST['cookie'];
$water=$_POST['water'];

$total=0.00;
$subTotal=0.00;
$tax=0.00;
$exceeded=0.00;
$message="";
$redFont = true;

$subTotal=(($apple*1)+($banana*0.5)+($milk*2.8)+($cake*10)+($toast*1.6)+($cheese*4.5)+($cookie*5)+($water*1));
if($subTotal > 10){
    $tax = .015;
}else{
    $tax = .02;
}
$total = ($subTotal*$tax) + $subTotal;
if($total > $budget){
    $exceeded=$total-$budget;
    $message = "You have exceeded your budget by ". (number_format($exceeded, 2)) . ", review your oder!";
    $redFont = true;
}else{
    $message = "Thank for Shopping at our store!";
    $redFont = false;
}
?>
<html>
<head>
    <title>Display Bill</title>
    <style>
        table, td, th, tr{
            border: 2px solid black;
        }
        <?php if($redFont==true){
                echo '#message{color: red;}';
               }else{
                echo '#message{color: green;}';
               }
        ?>

    </style>
</head>
<body>
<h1>So, you have selected:</h1>

<table>
    <tr>
        <th>Item</th>
        <th>Quantity</th>
        <th>Price</th>
    </tr>
    <tr>
        <td><img src="img/apple.png"></td>
        <td><?php echo $apple ?></td>
        <td>$1.00</td>
    </tr>
    <tr>
        <td><img src="img/banana.png"></td>
        <td><?php echo $banana ?></td>
        <td>$0.50</td>
    </tr>
    <tr>
        <td><img src="img/milk.png"></td>
        <td><?php echo $milk ?></td>
        <td>$2.80</td>
    </tr>
    <tr>
        <td><img src="img/cake.png"></td>
        <td><?php echo $cake ?></td>
        <td>$10.00</td>
    </tr>
    <tr>
        <td><img src="img/toast.png"></td>
        <td><?php echo $toast ?></td>
        <td>$1.60</td>
    </tr>
    <tr>
        <td><img src="img/cheese.png"></td>
        <td><?php echo $cheese ?></td>
        <td>$4.50</td>
    </tr>
    <tr>
        <td><img src="img/cookie.png"></td>
        <td><?php echo $cookie ?></td>
        <td>$5.00</td>
    </tr>
    <tr>
        <td><img src="img/water.jpg" width="125" height="125"></td>
        <td><?php echo $water ?></td>
        <td>$1.00</td>
    </tr>
    <tr>
        <td><strong>Total</strong></td>
        <td colspan="2">$<?php echo(number_format($subTotal, 2)) ?></td>
    </tr>
</table>

<br>
Tax = <?php echo $tax ?>
<br>
Total Amount = <?php echo(number_format($total, 2)) ?>
<br>
<div id="message">
<?php echo $message; ?>
</div>
</body>
</html>
