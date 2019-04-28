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
    $uid = "GEU".$pcType.$billDate.$qty;
    $sql = "INSERT INTO computer (uid, description, type, category, bill_no, bill_date, vander_name, manufactural, modal_no, serial_no, warrenty, processor, hardisk, ram, graphics_card) VALUES('$uid', '$description', '$pcType', '$category', '$billNo', '$billDate', '$vanderName', '$manufactural', '$modalNo', '$serialNo', '$warrenty', '$processorName', '$hardisk', '$ram', '$gpu');";
    mysqli_query($conn, $sql);
}

if (isset($_POST['view'])) {
    $id = $_POST['id'];
    $sql = "SELECT * FROM computer WHERE id = '$id';";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        echo '
        <div class="container">
            <a class="btn btn-danger mt-2" href="./list.php?page=list">Back</a>
            <h2>Type: '.$row['type'].'</h2>
            <h4>Bill No: '.$row['bill_no'].'</h4>
            <h4>Bill Date: '.$row['bill_date'].'</h4>
            <h4>Vander Name: '.$row['vander_name'].'</h4>
            <h4>Manufactural: '.$row['manufactural'].'</h4>
            <h4>Modal No: '.$row['modal_no'].'</h4>
            <h4>Serial No: '.$row['serial_no'].'</h4>
            <h4>Warrenty:  '.$row['warrenty'].'</h4>
            <h4>Processor: '.$row['processor'].'</h4>
            <h4>Hardisk: '.$row['hardisk'].'</h4>
            <h4>Ram: '.$row['ram'].'</h4>
            <h4>Graphic Card: '.$row['graphics_card'].'</h4>
            <p>Description: 
                '.$row['description'].'
            </p>
            <button class="btn btn-block btn-primary" onclick="issue('.$id.')">Issue It</button>
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