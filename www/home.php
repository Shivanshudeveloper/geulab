<?php
include_once '../includes/header.inc.php';
include_once '../includes/navbar.inc.php';
?>
<!-- Body Comes Here -->
<div class="container mt-4" style="width: 50%">
    <h5>Dashboard</h5>
    <ul class="list-group">
        <li class="list-group-item"><a href="./entry.php">
                <h5>Add Items</h5>
            </a></li>
        <li class="list-group-item"><a href="./list.php?page=list">
                <h5>List of Hardware</h5>
            </a></li>
        <li class="list-group-item"><a href="./footprinting.php?page=footprinting">
                <h5>FootPrinting</h5>
            </a></li>
        <li class="list-group-item"><a href="./hardware.php?page=hardware">
                <h5>Hardware List</h5>
            </a></li>
        <li class="list-group-item"><a href="./faculty.php?page=faculty">
                <h5>Faculty</h5>
            </a></li>
    </ul>
    <img src="https://www.geu.ac.in/content/dam/geu/landing-page/geu-logo.svg" alt="Graphic Era Image">
</div>
<!-- Body Comes Here -->
<?php
include_once '../includes/footer.inc.php';
?>