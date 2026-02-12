<?php
       $title="HomePage";
       $md="Use an appropriate md";
       include 'header.php';
       ?>
       <html>
    <body>
        <h3>"Hello World!";<h3>
    </body>
</html>
<?php
echo "My name is Oluchukwu";
?>
<h4>
   <?php
   $title = "PHP is intresting.";
echo $title;
?>
</h4>

<?php
$g1 = 5;
$g2 = 4;
$g3 = 3;
?>

<table border="5" cellpadding="8">
    <tr>
        <th>S.n.</th>
        <th>Name</th>
        <th>Grade</th>
    </tr>
    <tr>
        <td>1</td>
        <td>John</td>
        <td><?php echo $g1; ?></td>
    </tr>
    <tr>
        <td>2</td>
        <td>Bob</td>
        <td><?php echo $g2; ?></td>
    </tr>
    <tr>
        <td>3</td>
        <td>Alice</td>
        <td><?php echo $g3; ?></td>
    </tr>

    </tr>
</table>


<?php
$vehicles = array(
    'cars' => array(
        'Toyota' => 'Corolla',
        'BMW'    => 'M5',
        'Volvo'  => 'V40cc'
    ),
    'vans' => array(
        'Toyota' => 'Hiace',
        'Honda'  => '---',
        'Fiat'   => 'Ducato'
    )
);

foreach ($vehicles as $vehicle => $data) {
    foreach ($data as $key => $value) {
        echo "<b>$key</b> has a " . $vehicle . " model $value <br/>";
    }
}
?>
    <?php include 'footer.php'; ?>