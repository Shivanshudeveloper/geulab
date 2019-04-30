<?php
include './dbh.php';

if (isset($_POST['computerInsert'])) {
    $billNo = $_POST['billNo'];
    $billDate = $_POST['billDate'];
    $vanderName = $_POST['vanderName'];
    $manufactural = $_POST['manufactural'];
    $modalNo = $_POST['modalNo'];
    $serialNo = $_POST['serialNo'];
    $warrenty = $_POST['warrenty'];
    $hardisk = $_POST['hardisk'];
    $ram = $_POST['ram'];
    $gpu = $_POST['gpu'];
    $description = $_POST['description'];
    $processorName = $_POST['processorName'];
    $pcType = $_POST['pcType'];
    $qty = $_POST['qty'];
    $category = $_POST['category'];
    $sql = "SELECT * FROM computer;";
    $result = mysqli_query($conn, $sql);
    $resultNum = mysqli_num_rows($result);
    $uid = "GEU".$pcType.$billDate.$qty."/".$resultNum;
    $sql = "INSERT INTO computer (uid, description, type, category, bill_no, bill_date, qty, vander_name, manufactural, modal_no, serial_no, warrenty, processor, hardisk, ram, graphics_card) VALUES('$uid', '$description', '$pcType', '$category', '$billNo', '$billDate', '$qty', '$vanderName', '$manufactural', '$modalNo', '$serialNo', '$warrenty', '$processorName', '$hardisk', '$ram', '$gpu');";
    mysqli_query($conn, $sql);
}

if (isset($_POST['view'])) {
    $id = $_POST['id'];
    $sql = "SELECT * FROM computer WHERE id = '$id';";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        echo '
        <div class="container mt-3">
            <a class="btn mt-1 btn-danger mt-2" href="./list.php?page=list">Back</a>
            <button class="btn mt-2 btn-primary" onclick="issue(' . $id . ')">Issue It</button>
            <button class="btn mt-2 btn-warning" onclick="issue(' . $id . ')">Edit</button>
            <h4 class="text-center">Details</h4>
            <ul class="list-group">
                <li class="list-group-item"><h5>Type:</h5> '.$row['type']. '</li>
                <li class="list-group-item"><h5>QTY: </h5> ' . $row['qty'] . '</li>
                <li class="list-group-item"><h5>Bill No:</h5> '.$row['bill_no']. '</li>
                <li class="list-group-item"><h5>Bill Date:</h5> ' . $row['bill_date'] . '</li>
                <li class="list-group-item"><h5>Vender Name:</h5> ' . $row['vander_name'] . '</li>
                <li class="list-group-item"><h5>Manufactural:</h5> ' . $row['manufactural'] . '</li>
                <li class="list-group-item"><h5>Modal No:</h5> ' . $row['modal_no'] . '</li>
                <li class="list-group-item"><h5>Serial No:</h5> ' . $row['serial_no'] . '</li>
                <li class="list-group-item"><h5>Warrenty:</h5> ' . $row['warrenty'] . '</li>
                <li class="list-group-item"><h5>Processor:</h5> ' . $row['processor'] . '</li>
                <li class="list-group-item"><h5>Hardisk:</h5> ' . $row['hardisk'] . '</li>
                <li class="list-group-item"><h5>Ram:</h5> ' . $row['ram'] . '</li>
                <li class="list-group-item"><h5>Graphic Card:</h5> ' . $row['graphics_card'] . '</li>
                <li class="list-group-item"><h5>Description:</h5> ' . $row['description'] . '</li>
            </ul>
            
            
            <br />
            <br />
            <br />
            <br />
        </div>
        ';
    }
}

if (isset($_POST['entry'])) {
    $sql = "SELECT * FROM computer;";
    $result = mysqli_query($conn, $sql);
    $resultChk = mysqli_num_rows($result);
    echo '
    <table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">ID.</th>
            <th scope="col">Type</th>
            <th scope="col">Category</th>
            <th scope="col">Bill No</th>
            <th scope="col">Manufactural</th>
            <th scope="col">Processor</th>
            <th scope="col">Hardisk</th>
            <th scope="col">Ram</th>
            <th scope="col">Graphics Card</th>
            <th scope="col">QTY</th>
            <th scope="col">View</th>
        </tr>
    </thead>
    <tbody>
    ';
    if ($resultChk > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $id = $row['id'];
            $type = $row['type'];
            $category = $row['category'];
            $bill_no = $row['bill_no'];
            $manufactural = $row['manufactural'];
            $processor = $row['processor'];
            $hardisk = $row['hardisk'];
            $ram = $row['ram'];
            $qty = $row['qty'];
            $graphics_card = $row['graphics_card'];
            echo '
                    <tr>
                            <th scope="row">'.$id.'</th>
                            <td>'.$type.'</td>
                            <td>'.$category.'</td>
                            <td>'.$bill_no.'</td>
                            <td>'.$manufactural.'</td>
                            <td>'.$processor.'</td>
                            <td>'.$hardisk.'</td>
                            <td>'.$ram.'</td>
                            <td>'.$graphics_card.'</td>
                            <td>'.$qty.'</td>
                            <td><button type="button" onclick="viewComputer('.$id.');" class="btn btn-sm btn-primary" name="submitView">View</button></td>
                    </tr>
            ';
        }
        echo '
                </table>
        ';
    } else {
        echo '<h2 class="text-center mt-3">No Entry Found</h2>';
    }    
}

// Query Search Faculty
if (isset($_POST['searchFaculty'])) {
    $search = $_POST['searchQuery'];
    $sql = "SELECT * FROM faculty WHERE name = '$search' OR uid = '$search' OR email = '$search' OR contact = '$search';";
    $result = mysqli_query($conn, $sql);
    $resultChk = mysqli_num_rows($result);
    if ($resultChk > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            echo '
            <br />
            <ul class="list-group">
                <li class="list-group-item"><h5>Name:</h5> <span id="facultyName">' . $row['name'] . '</span></li>
                <li class="list-group-item"><h5>UID:</h5> <span id="facultyUID">' . $row['uid'] . '</span></li>
                <li class="list-group-item"><h5>ID:</h5><span id="facultyID"> ' . $row['id'] . '</span></li>
                <li class="list-group-item"><h5>Email:</h5> ' . $row['email'] . '</li>
                <li class="list-group-item"><h5>Contact:</h5><span id="facultyContact"> ' . $row['contact'] . '</span></li>
                <li class="list-group-item"><h5>Department:</h5><span id="facultyDepartment"> ' . $row['department'] . '</span></li>
                <li class="list-group-item"><h5>QTY:</h5> 
                    <input type="number" class="form-control" id="facultyIssueQty-txt" value=1  placeholder="QTY">
                </li>
                <li class="list-group-item">
                    <button class="btn btn-block btn-primary" onclick="issueItemFaculty();">Issue</button>
                </li>
            </ul>
            <br />
            <br />
            <br />
            <br />
        ';
        }
    } else {
        echo '
            <h3>No Result Found</h3>
        ';
    }
}

// Adding Faculty
if (isset($_POST['addFaculty'])) {
    $name = $_POST['name'];
    $id = $_POST['id'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $department = $_POST['department'];
    $sql = "INSERT INTO faculty (name, uid, email, contact, department) VALUES('$name', '$id', '$email', '$contact', '$department');";
    mysqli_query($conn, $sql);
}

// Showing Items Details
if (isset($_POST['showDetails'])) {
    $id = $_POST['id'];
    $sql = "SELECT * FROM computer WHERE id = '$id';";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        echo '
            <h4 class="text-center mt-3">UID:<span id="itemUid"> '.$row['uid']. '</span> Item: '.$row['type'].' QTY: '.$row['qty'].' Will Be Issued To</h4>
        ';
    }
}

// Issue Item to Faculty
if (isset($_POST['facultyIssue'])) {
    $id = $_POST['id'];
    $toBeIssuedQty = $_POST['qty'];
    $facultyID = $_POST['facultyID'];
    $facultyUID = $_POST['facultyUID'];
    $facultyName = $_POST['facultyName'];
    $facultyContact = $_POST['facultyContact'];
    $facultyDepartment = $_POST['facultyDepartment'];
    $sql = "SELECT * FROM computer WHERE id = '$id';";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $itemQty = $row['qty']; 
        $itemUID = $row['uid'];
    }
    if ($itemQty == 0) {
        echo '
            <br />
            <br />
            <br />
            <div class="alert alert-danger" role="alert">
                Sorry! Stock Out
            </div>
        ';
    } elseif ($itemQty < $toBeIssuedQty) {
        echo '
            <br />
            <br />
            <br />
            <div class="alert alert-danger" role="alert">
                Sorry! Quantity is more than to be issued
            </div>
        ';
    } elseif ($toBeIssuedQty <= 0) {
        echo '
            <br />
            <br />
            <br />
            <div class="alert alert-danger" role="alert">
                Sorry! Quantity is in negative or 0
            </div>
        ';
    } else {
        $itemQty -= 1;
        $sql = "UPDATE computer SET qty = '$itemQty' WHERE id = '$id';";
        mysqli_query($conn, $sql);
        $sql = "INSERT INTO issue (faculty_id, faculty_uid, faculty_name, faculty_contact, faculty_department, item_id, item_uid, issue_qty) VALUES ('$facultyID', '$facultyUID', '$facultyName', '$facultyContact', '$facultyDepartment', '$id', '$itemUID', '$toBeIssuedQty');";
        mysqli_query($conn, $sql);
        echo '
        <br />
        <br />
        <br />
        <div class="text-center">
            <div class="alert alert-success" role="alert">
                Item Issued
            </div>
            <a href="./list.php?page=list" class="btn btn-block btn-danger">Back</a>
        </div>
        ';
    }
}

// See All Items
if (isset($_POST['seeAllIssue'])) {
    $sql = "SELECT * FROM issue;";
    $result = mysqli_query($conn, $sql);
    $resultChk = mysqli_num_rows($result);
    if ($resultChk > 0) {
        echo '
        <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Faculty UID.</th>
                <th scope="col">Faculty Name</th>
                <th scope="col">Faculty Contact</th>
                <th scope="col">Faculty Department</th>
                <th scope="col">Item UID</th>
                <th scope="col">Item Issued QTY.</th>
            </tr>
        </thead>
        <tbody>';
        while ($row = mysqli_fetch_assoc($result)) {
            echo '
                    <tr>
                            <td>' . $row['faculty_uid'] . '</td>
                            <td>' . $row['faculty_name'] . '</td>
                            <td>' . $row['faculty_contact'] . '</td>
                            <td>' . $row['faculty_department'] . '</td>
                            <td>' . $row['item_uid'] . '</td>
                            <td>' . $row['issue_qty'] . '</td>
                    </tr>
            ';
        }
        echo '
                </table>
        ';
    } else {
        echo '
        <br />
            <br />
            <br />
            <div class="alert alert-danger" role="alert">
                Oops! No Item Found
            </div>
        ';
    }
}
// Add More Category
if (isset($_POST['addCategory'])) {
    $category = $_POST['category'];
    $uid = uniqid().date("d-m-Y H:i:s");
    $sql = "INSERT INTO hardware (category, uid) VALUES('$category', '$uid');";
    mysqli_query($conn, $sql);
}

// FootPrinting Code
if (isset($_POST['seeAllIssueFootPrint'])) {
    $sql = "SELECT * FROM computer;";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $itemId = $row['id'];
        $itemUID = $row['uid'];
        $sql = "SELECT * FROM issue WHERE item_id = '$itemId';";
        $result2 = mysqli_query($conn, $sql);
        
        while ($row2 = mysqli_fetch_assoc($result2)) {
            echo '
            <ul class="list-group">
                <li class="list-group-item active"><h4>ID: ' . $itemId . '</h4><h4> UID: '.$itemUID.'</h4></li>
                <li class="list-group-item">'.$row2['faculty_uid']. '</li>
            </ul><br/><br/>
            ';
        }
    }
}
// Footprint By Search Query
if (isset($_POST['seeIdIssueFootPrint'])) {
    $search_query = $_POST['id'];
    $sql = "SELECT * FROM issue WHERE item_uid = '$search_query' || faculty_name = '$search_query' || faculty_uid = '$search_query';";
    $result = mysqli_query($conn, $sql);
    $resultChk = mysqli_num_rows($result);
    if ($resultChk > 0) {
        while ($row = mysqli_fetch_assoc($result)) { 
            echo '
            <ul class="list-group">
                <li class="list-group-item active"><h4>ID: ' . $row['item_id'] . '</h4><h4> UID: '.$row['item_uid'].'</h4></li>
                <li class="list-group-item">'.$row['faculty_uid']. '</li>
            </ul><br/><br/>
            ';
        }
    } else {
        echo '
            <div class="alert alert-danger" role="alert">
                Oops! Nothing Found
            </div>
        ';
    }
    
}