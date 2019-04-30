<div class="form-group">
    <label>Network Switch</label>
    <select id="printerType-select" onclick="printerType();" class="browser-default custom-select">
        <option value="" disabled>Choose option</option>
        <option value="Managed Switch" selected>Managed Switch</option>
        <option value="Non Managed Switch">Non Managed Switch</option>
    </select>
</div>
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
        <option value="EPSON">EPSON</option>
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