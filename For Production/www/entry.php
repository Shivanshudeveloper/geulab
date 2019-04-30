<?php
include_once '../includes/header.inc.php';
include_once '../includes/navbar.inc.php';
?>
<!-- Body Comes Here -->
<img id="vectorImg1" style="width: 40%;" class="mt-3" src="../images/images/img-1.jpg" alt="Image">

<div style="width: 60%; float: right;" class="container">
    <h2 style="margin-top: 10px;">Computer Details</h2>


    <div style="margin-top: 20px;" class="form-group">
        <label for="exampleInputEmail1">Type: <span id="typeElement"> Desktop</span></label><br />
        <div class="text-center">
            <label class="radio-inline">
                <input type="radio" onclick="selectType('Desktop');" name="optradio" checked>
                <img src="https://img.icons8.com/color/50/000000/monitor.png">
            </label>
            <label class="ml-5 radio-inline">
                <input type="radio" onclick="selectType('Laptop');" name="optradio">
                <img src="https://img.icons8.com/color/60/000000/laptop.png">
            </label>
            <label class="ml-5 radio-inline">
                <input type="radio" onclick="selectType('Printer');" name="optradio">
                <img src="https://img.icons8.com/color/60/000000/print.png">
            </label>
            <label class="ml-5 radio-inline">
                <input type="radio" onclick="selectType('UPS');" name="optradio">
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="50" height="50" viewBox="0 0 192 192" style=" fill:#000000;">
                    <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                        <path d="M0,192v-192h192v192z" fill="none"></path>
                        <g fill="#3498db">
                            <g id="surface1">
                                <path d="M28.92,3.84c-3.135,0 -6.45,2.25 -7.8,5.28l-14.88,33.24c0.495,-0.045 0.93,-0.12 1.44,-0.12h176.64c0.48,0 0.975,0.075 1.44,0.12l-14.88,-33.24c-1.335,-3.045 -4.665,-5.28 -7.8,-5.28zM7.68,49.92c-4.23,0 -7.68,3.45 -7.68,7.68v126.72c0,4.245 3.45,7.68 7.68,7.68h176.64c4.245,0 7.68,-3.435 7.68,-7.68v-126.72c0,-4.23 -3.435,-7.68 -7.68,-7.68zM38.4,76.8c4.245,0 7.68,3.435 7.68,7.68c0,4.245 -3.435,7.68 -7.68,7.68c-4.245,0 -7.68,-3.435 -7.68,-7.68c0,-4.245 3.435,-7.68 7.68,-7.68zM84.48,76.8h15.36c2.115,0 3.84,1.725 3.84,3.84v84.48c0,2.115 -1.725,3.84 -3.84,3.84h-15.36c-2.115,0 -3.84,-1.725 -3.84,-3.84v-84.48c0,-2.115 1.725,-3.84 3.84,-3.84zM115.2,76.8h15.36c2.115,0 3.84,1.725 3.84,3.84v84.48c0,2.115 -1.725,3.84 -3.84,3.84h-15.36c-2.115,0 -3.84,-1.725 -3.84,-3.84v-84.48c0,-2.115 1.725,-3.84 3.84,-3.84zM145.92,76.8h15.36c2.115,0 3.84,1.725 3.84,3.84v84.48c0,2.115 -1.725,3.84 -3.84,3.84h-15.36c-2.115,0 -3.84,-1.725 -3.84,-3.84v-84.48c0,-2.115 1.725,-3.84 3.84,-3.84zM92.16,84.48c-4.245,0 -7.68,3.435 -7.68,7.68c0,4.245 3.435,7.68 7.68,7.68c4.245,0 7.68,-3.435 7.68,-7.68c0,-4.245 -3.435,-7.68 -7.68,-7.68zM122.88,84.48c-4.245,0 -7.68,3.435 -7.68,7.68c0,4.245 3.435,7.68 7.68,7.68c4.245,0 7.68,-3.435 7.68,-7.68c0,-4.245 -3.435,-7.68 -7.68,-7.68zM153.6,84.48c-4.245,0 -7.68,3.435 -7.68,7.68c0,4.245 3.435,7.68 7.68,7.68c4.245,0 7.68,-3.435 7.68,-7.68c0,-4.245 -3.435,-7.68 -7.68,-7.68zM38.4,99.84c4.245,0 7.68,3.435 7.68,7.68c0,4.245 -3.435,7.68 -7.68,7.68c-4.245,0 -7.68,-3.435 -7.68,-7.68c0,-4.245 3.435,-7.68 7.68,-7.68z"></path>
                            </g>
                        </g>
                    </g>
                </svg>
            </label>
            <label class="ml-5 radio-inline">
                <input type="radio" onclick="selectType('Network Switch');" name="optradio">
                <img src="https://img.icons8.com/color/60/000000/internet-hub.png">
            </label>
            <label class="ml-5 radio-inline">
                <input type="radio" onclick="selectType('Projector');" name="optradio">
                <img src="https://img.icons8.com/color/60/000000/video-projector.png">
            </label>
        </div>
    </div>
    <div class="text-center">
        <label>OR</label>
    </div>
        
    <hr />
    <?php
    include_once '../src/php/dbh.php';
    $sql = "SELECT * FROM hardware;";
    $result = mysqli_query($conn, $sql);
    echo '<div class="text-center">
            <p>
                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                    Category Added By Admin
                </button>
            </p>
            <div class="collapse" id="collapseExample">
                <div class="card card-body">
                <select onclick="selectAdminCategory()" id="adminCategory-select" class="browser-default custom-select">
                    <option value="" disabled>Choose option</option>

        ';
    while ($row = mysqli_fetch_assoc($result)) {
        echo '
                <option value="' . $row['category'] . '">' . $row['category'] . '</option>
            ';
    }
    echo '
        </select>
        </div>
    </div>  
    </div>
        '
    ?>
    <hr />

    <div id="categoryForm">
        <div style="margin-top: 20px;" class="form-group">
            <label for="exampleInputEmail1">Bill No</label>
            <input type="text" class="form-control" id="billno-txt" aria-describedby="emailHelp" placeholder="Bill Number">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Bill Date</label>
            <input id="date" class="form-control" type="date" width="276" />
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Vander Name</label>
            <input type="text" class="form-control" id="vanderName-txt" aria-describedby="emailHelp" placeholder="Vander Name">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">QTY</label>
            <input type="number" class="form-control" id="qty-txt" aria-describedby="emailHelp" value=1 placeholder="Quantity">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea3">Description</label>
            <textarea class="form-control" id="description-txt" rows="7"></textarea>
        </div>
        <div class="form-group">
            <label>Manufactural</label>
            <select id="manufactural-select" class="browser-default custom-select">
                <option value="" disabled>Choose option</option>
                <option value="HP" selected>HP</option>
                <option value="Acer">Acer</option>
                <option value="Dell">Dell</option>
                <option value="Lenovo">Lenovo</option>
                <option value="Toshiba">Toshiba</option>
                <option value="Asus">Asus</option>
                <option value="IBM">International Business Machines (IBM)</option>
                <option value="Apple">Apple</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Modal No</label>
            <input type="text" class="form-control" id="modalNo-txt" aria-describedby="emailHelp" placeholder="Modal Number">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Serial No</label>
            <input type="text" class="form-control" id="serialNo-txt" aria-describedby="emailHelp" placeholder="Serial Number">
        </div>
        <div class="form-group">
            <label>Warrenty</label>
            <select id="warrenty-select" class="browser-default custom-select">
                <option value="" disabled>Choose option</option>
                <option value="1 Year Warrenty" selected>1 Year Warrenty</option>
                <option value="2 Year Warrenty">2 Year Warrenty</option>
                <option value="3 Year Warrenty">3 Year Warrenty</option>
                <option value="4 Year Warrenty">4 Year Warrenty</option>
                <option value="5 Year Warrenty">5 Year Warrenty</option>
            </select>
        </div>

        <div class="form-group">
            <label>Configuration</label>
            <div class="accordion" id="accordionExample">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h5 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Select the Processors
                            </button>
                        </h5>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                            <div id="intel" class="text-center">
                                <img class="mb-2" width=40 src="../images/images/intel.svg"><br />
                                <button type="button" id="intel-btn1" onclick="processorButtons('#intel-btn1', '#intel-btn2', '#intel-btn3', '#intel-btn4', '#intel-btn5', '#intel-btn6', '#amd-btn1', '#amd-btn2', '#amd-btn3', '#amd-btn4', '#amd-btn5', 'Core i3')" class="btn btn-primary btn-sm">Core i3</button>
                                <button type="button" id="intel-btn2" onclick="processorButtons('#intel-btn2', '#intel-btn1', '#intel-btn3', '#intel-btn4', '#intel-btn5', '#intel-btn6', '#amd-btn1', '#amd-btn2', '#amd-btn3', '#amd-btn4', '#amd-btn5',  'Core i5')" class="btn btn-light btn-sm">Core i5</button>
                                <button type="button" id="intel-btn3" onclick="processorButtons('#intel-btn3', '#intel-btn2', '#intel-btn1', '#intel-btn4', '#intel-btn5', '#intel-btn6', '#amd-btn1', '#amd-btn2', '#amd-btn3', '#amd-btn4', '#amd-btn5', 'Core i7')" class="btn btn-light btn-sm">Core i7</button>
                                <button type="button" id="intel-btn4" onclick="processorButtons('#intel-btn4', '#intel-btn2', '#intel-btn3', '#intel-btn1', '#intel-btn5', '#intel-btn6', '#amd-btn1', '#amd-btn2', '#amd-btn3', '#amd-btn4', '#amd-btn5', 'Xeon')" class="btn btn-light btn-sm">Xeon</button>
                                <button type="button" id="intel-btn5" onclick="processorButtons('#intel-btn5', '#intel-btn2', '#intel-btn3', '#intel-btn4', '#intel-btn1', '#intel-btn6', '#amd-btn1', '#amd-btn2', '#amd-btn3', '#amd-btn4', '#amd-btn5', 'Pentium')" class="btn btn-light btn-sm">Pentium</button>
                            </div>
                            <div id="amd" class="text-center">
                                <img class="mb-2 mt-2" src="https://img.icons8.com/color/30/000000/amd.png"><br />
                                <button type="button" id="amd-btn1" onclick="processorButtons('#amd-btn1', '#intel-btn2', '#intel-btn3', '#intel-btn4', '#intel-btn5', '#intel-btn6', '#intel-btn1', '#amd-btn2', '#amd-btn3', '#amd-btn4', '#amd-btn5', 'AMD Ryzen')" class="btn btn-light btn-sm">AMD Ryzen</button>
                                <button type="button" id="amd-btn2" onclick="processorButtons('#amd-btn2', '#intel-btn2', '#intel-btn3', '#intel-btn4', '#intel-btn5', '#intel-btn6', '#intel-btn1', '#amd-btn1', '#amd-btn3', '#amd-btn4', '#amd-btn5', 'AMD Athlon')" class="btn btn-light btn-sm">AMD Athlon</button>
                                <button type="button" id="amd-btn3" onclick="processorButtons('#amd-btn3', '#intel-btn2', '#intel-btn3', '#intel-btn4', '#intel-btn5', '#intel-btn6', '#intel-btn1', '#amd-btn2', '#amd-btn1', '#amd-btn4', '#amd-btn5', 'AMD A-Series')" class="btn btn-light btn-sm">AMD A-Series</button>
                                <button type="button" id="amd-btn4" onclick="processorButtons('#amd-btn4', '#intel-btn2', '#intel-btn3', '#intel-btn4', '#intel-btn5', '#intel-btn6', '#intel-btn1', '#amd-btn2', '#amd-btn3', '#amd-btn1', '#amd-btn5', 'AMD FX')" class="btn btn-light btn-sm">AMD FX</button>
                                <button type="button" id="amd-btn5" onclick="processorButtons('#amd-btn5', '#intel-btn2', '#intel-btn3', '#intel-btn4', '#intel-btn5', '#intel-btn6', '#intel-btn1', '#amd-btn2', '#amd-btn3', '#amd-btn4', '#amd-btn1', 'Other')" class="btn btn-light btn-sm">Other</button>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Hardisk
                            </button>
                        </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body text-center">
                            <img src="https://img.icons8.com/color/30/000000/stack.png"> <br />
                            <select id="hardisk-select" class="browser-default custom-select">
                                <option value="" disabled>Choose option</option>
                                <option value="500GB" selected>500GB</option>
                                <option value="1TB">1TB</option>
                                <option value="2TB">2TB</option>
                                <option value="More than 2TB">More than 2TB</option>
                            </select>

                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingThree">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                RAM
                            </button>
                        </h5>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="card-body text-center">
                            <img src="https://img.icons8.com/color/30/000000/smartphone-ram.png"> <br />
                            <select id="ram-select" class="browser-default custom-select">
                                <option value="" disabled>Choose option</option>
                                <option value="1GB" selected>1GB</option>
                                <option value="2GB">2GB</option>
                                <option value="3GB">3GB</option>
                                <option value="4GB">4GB</option>
                                <option value="8GB">8GB</option>
                                <option value="16GB">16GB</option>
                                <option value="More than 2TB">More than 2TB</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header" id="headingFour">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#headingFour" aria-expanded="false" aria-controls="collapseThree">
                                Graphics Cards
                            </button>
                        </h5>
                    </div>
                    <div id="headingFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                        <div class="card-body text-center">
                            <img src="https://img.icons8.com/color/40/000000/video-card.png"> <br />
                            <select id="gpu-select" class="browser-default custom-select">
                                <option value="" disabled>Choose option</option>
                                <option value="AMD Radeon" selected>AMD Radeon</option>
                                <option value="Nvidia GTX">Nvidia GTX</option>
                                <option value="MSI">MSI</option>
                                <option value="None">None</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button type="submit" id="onSubmitComputer" class="btn btn-block btn-lg btn-success">Submit</button>

        <br />
        <br />
        <br />
    </div>
</div>
<img id="vectorImg1" style="width: 40%; margin-top: 3px;" src="../images/images/img-2.jpg" alt="Image">
<img id="vectorImg1" style="width: 40%; margin-top: 3px;" src="../images/images/img-3.jpg" alt="Image">



<!-- Body Comes Here -->
<?php
include_once '../includes/footer.inc.php';
?>