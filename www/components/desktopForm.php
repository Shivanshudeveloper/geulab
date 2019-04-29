<div style="margin-top: 20px;" class="form-group">
    <label for="exampleInputEmail1">Bill No</label>
    <input type="text" class="form-control" id="billno-txt" aria-describedby="emailHelp" placeholder="Bill Number">
</div>
<div class="form-group">
    <label for="exampleInputPassword1">Bill Date</label>
    <input id="date" class="form-control" type="date" width="276" />
</div>
<div class="form-group">
    <label for="exampleInputPassword1">Vender Name</label>
    <input type="text" class="form-control" id="vanderName-txt" aria-describedby="emailHelp" placeholder="Vender Name">
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
<script>
    $("#onSubmitComputer").click(() => {
        event.preventDefault()
        // Getting the values
        var billNo = $("#billno-txt").val()
        var billDate = $("#date").val()
        var vanderName = $("#vanderName-txt").val()
        var manufactural = $("#manufactural-select").val()
        var modalNo = $("#modalNo-txt").val()
        var serialNo = $("#serialNo-txt").val()
        var warrenty = $("#warrenty-select").val()
        var hardisk = $("#hardisk-select").val()
        var ram = $("#ram-select").val()
        var gpu = $("#gpu-select").val()
        var qty = $("#qty-txt").val()
        var description = $("#description-txt").val()
        swal({
                title: "Are you sure?",
                text: "Do You Want To Insert It!",
                icon: "info",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    if (pcType === "Desktop" || pcType === "Laptop") {
                        $.post("../src/php/main.php", {
                            billNo: billNo,
                            billDate: billDate,
                            description: description,
                            vanderName: vanderName,
                            manufactural: manufactural,
                            modalNo: modalNo,
                            category: category,
                            serialNo: serialNo,
                            warrenty: warrenty,
                            hardisk: hardisk,
                            ram: ram,
                            gpu: gpu,
                            processorName: processorName,
                            pcType: pcType,
                            qty: qty,
                            computerInsert: true
                        });
                    } else {
                        $.post("../src/php/main.php", {
                            billNo: billNo,
                            billDate: billDate,
                            description: description,
                            vanderName: vanderName,
                            manufactural: manufactural,
                            modalNo: modalNo,
                            category: category,
                            serialNo: serialNo,
                            warrenty: warrenty,
                            hardisk: "None",
                            ram: "None",
                            gpu: "None",
                            processorName: "None",
                            pcType: pcType,
                            qty: qty,
                            computerInsert: true
                        });
                    }

                    swal("Done! Data Inserted", {
                        icon: "success",
                    });
                }
            });
    })
</script>