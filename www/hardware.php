<?php
include_once '../includes/header.inc.php';
include_once '../includes/navbar.inc.php';
?>
<!-- Body Comes Here -->
<div class="container">
    <div class="container" style="width: 50%">
        <h4 class="mt-3">Hardware Details</h4>
        <div style="margin-top: 20px;" class="form-group">
            <label for="exampleInputEmail1">Category</label>
            <input type="text" class="form-control" id="category-txt" aria-describedby="emailHelp" placeholder="Name">
        </div>
        <button class="btn btn-primary" onclick="addCategory();">Add Hardware</button>
    </div>
</div>

<!-- Body Comes Here -->
<?php
include_once '../includes/footer.inc.php';
?>