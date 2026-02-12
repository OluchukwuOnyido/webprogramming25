<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>

<main class="content">

    <h3>Exercise 4: Control Flow and Loops</h3>

    <h3>1. If-Else: Voting Eligibility</h3>

    <form method="post" class="mb-3">
        <div class="mb-2">
            <label class="form-label">Name</label>
            <input type="text" name="name" class="form-control">
        </div>

        <div class="mb-2">
            <label class="form-label">Age</label>
            <input type="number" name="age" class="form-control">
        </div>

        <button type="submit" name="check_vote" class="btn btn-primary">
            Check Eligibility
        </button>
    </form>

    <?php
    if (isset($_POST['check_vote'])) {
        $name = $_POST['name'];
        $age = $_POST['age'];

        if ($age >= 18) {
            echo "<p>$name is eligible for voting.</p>";
        } else {
            echo "<p>$name is not eligible for voting.</p>";
        }
    }
    ?>

    <h3>2. Switch Case: Current Month</h3>

    <?php
    $month = date("F");

    switch ($month) {
        case "August":
            echo "<p>It's August, so it's still holiday.</p>";
            break;

        default:
            echo "<p>Not August, this is $month so I don't have any holidays.</p>";
    }
    ?>

    <h3>3. For Loop: Multiplication Table</h3>

    <form method="post" class="mb-3">
        <div class="mb-2">
            <label class="form-label">Enter a Number</label>
            <input type="number" name="number" class="form-control">
        </div>

        <button type="submit" name="multiply" class="btn btn-success">
            Generate Table
        </button>
    </form>

    <?php
    if (isset($_POST['multiply'])) {
        $num = $_POST['number'];

        echo "<h5>Multiplication Table of $num</h5>";

        for ($i = 1; $i <= 10; $i++) {
            echo "$num x $i = " . ($num * $i) . "<br>";
        }
    }
    ?>

    <h3>4. While Loop: Print 1 to N</h3>

    <form method="post" class="mb-3">
        <div class="mb-2">
            <label class="form-label">Enter a Number</label>
            <input type="number" name="limit" class="form-control">
        </div>

        <button type="submit" name="print_numbers" class="btn btn-warning">
            Print Numbers
        </button>
    </form>

    <?php
    if (isset($_POST['print_numbers'])) {
        $limit = $_POST['limit'];
        $i = 1;

        echo "<h5>Numbers from 1 to $limit:</h5>";

        while ($i <= $limit) {
            echo $i . " ";
            $i++;
        }
    }
    ?>

    <h3>5. Foreach Loop: Print Array Elements</h3>

    <?php
    $myarray = array("HTML", "CSS", "PHP", "JavaScript");

    echo "<ul>";
    foreach ($myarray as $item) {
        echo "<li>$item</li>";
    }
    echo "</ul>";
    ?>

</main>

<?php include 'footer.php'; ?>
