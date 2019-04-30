<?php
include_once '../includes/header.inc.php';
include_once '../includes/navbar.inc.php';
?>
<!-- Body Comes Here -->
<div id="root">
    <div class="container" style="width: 50%">
        <div style="margin-top: 20px;" class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" class="form-control" id="name-txt" aria-describedby="emailHelp" placeholder="Name">
        </div>
        <div style="margin-top: 20px;" class="form-group">
            <label for="exampleInputEmail1">ID</label>
            <input type="text" class="form-control" id="id-txt" aria-describedby="emailHelp" placeholder="ID">
        </div>
        <div style="margin-top: 20px;" class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" class="form-control" id="email-txt" aria-describedby="emailHelp" placeholder="example@example.com">
        </div>
        <div style="margin-top: 20px;" class="form-group">
            <label for="exampleInputEmail1">Contact</label>
            <input type="text" class="form-control" id="contact-txt" aria-describedby="emailHelp" placeholder="Phone No.">
        </div>
        <div style="margin-top: 20px;" class="form-group">
            <label for="exampleInputEmail1">Department</label>
            <input type="text" class="form-control" id="department-txt" aria-describedby="emailHelp" placeholder="Department">
        </div>
        <button class="btn btn-primary btn-block" onclick="addFaculty();">Add Faculty</button>
        <button class="btn btn-warning btn-block" onclick="seeAllIssuedFaculty();">See All Issued By Faculty</button>
    </div>
</div>
<!-- Body Comes Here -->
<?php
include_once '../includes/footer.inc.php';
?>