<?php
include_once '../includes/header.inc.php';
include_once '../includes/navbar.inc.php';
?>
<!-- Body Comes Here -->
<div class="container" style="width: 50%">
    <div id="itemDetails"></div>
</div>
<div class="container" style="width: 50%">
    <div style="margin-top: 20px;" class="form-group">
        <label for="exampleInputEmail1">Search Faculty</label>
        <input type="text" class="form-control" id="faculty-txt" aria-describedby="emailHelp" placeholder="Faculty...">
        <button type="button" onclick="searchFaculty();" class="btn btn-primary float-right mt-2">Search</button>
    </div>
</div>
<br />
<div class="container" style="width: 50%">
    <div id="facultyDetails"></div>
</div>



<!-- Body Comes Here -->
<?php
include_once '../includes/footer.inc.php';
?>