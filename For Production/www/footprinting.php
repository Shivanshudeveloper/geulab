<?php
include_once '../includes/header.inc.php';
include_once '../includes/navbar.inc.php';
?>
<!-- Body Comes Here -->
<div style="margin-top: 20px;" class="form-group container" width="50%">
    <label for="exampleInputEmail1">Search</label>
    <input type="text" class="form-control" id="id-txt" aria-describedby="emailHelp" placeholder="Item ID/ Item UID/ Faculty Name/ Faculty UID">
    <button onclick="footPrintByIdShow();" class="float-right btn btn-primary mt-2">Search</button>
</div><br />
<div class="container mt-4" width="50%" id="root"></div>
<!-- Body Comes Here -->
<?php
include_once '../includes/footer.inc.php';
?>