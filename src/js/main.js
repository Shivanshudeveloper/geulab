var processorName = "Core i3"
var pcType = "Desktop"
var category = "Desktop"
$(document).ready(() => {
    var pageURL = window.location.href;
    var url = new URL(pageURL);
    var page = url.searchParams.get("page");
    // Fetching URL
    console.log("S")
    $('#datepicker').datepicker({
        uiLibrary: 'bootstrap4'
    });

    if (page === "list") {
        $("#tableInfo").load("../src/php/main.php",{
            entry: true
        })
    } else if (page === "issue") {
        showItem()
    }
})
const processorButtons = (ibtn1, ibtn2, ibtn3, ibtn4, ibtn5, abtn1, abtn2, abtn3, abtn4, abtn5, otherbtn, pName) => {
    $(ibtn1).removeClass('btn btn-light btn-sm').addClass('btn btn-primary btn-sm')
    $(ibtn2).removeClass('btn btn-primary btn-sm').addClass('btn btn-light btn-sm')
    $(ibtn3).removeClass('btn btn-primary btn-sm').addClass('btn btn-light btn-sm')
    $(ibtn4).removeClass('btn btn-primary btn-sm').addClass('btn btn-light btn-sm')
    $(ibtn5).removeClass('btn btn-primary btn-sm').addClass('btn btn-light btn-sm')
    $(abtn1).removeClass('btn btn-primary btn-sm').addClass('btn btn-light btn-sm')
    $(abtn2).removeClass('btn btn-primary btn-sm').addClass('btn btn-light btn-sm')
    $(abtn3).removeClass('btn btn-primary btn-sm').addClass('btn btn-light btn-sm')
    $(abtn4).removeClass('btn btn-primary btn-sm').addClass('btn btn-light btn-sm')
    $(abtn5).removeClass('btn btn-primary btn-sm').addClass('btn btn-light btn-sm')
    $(otherbtn).removeClass('btn btn-primary btn-sm').addClass('btn btn-light btn-sm')
    processorName = pName
    console.log(processorName)
}

const selectType = (type) => {
    pcType = type
    $("#typeElement").html(pcType)
    if (pcType === "Desktop") {
        $("#categoryForm").load("./components/desktopForm.php")
        category = "Desktop"
    } else if (pcType === "Laptop") {
        $("#categoryForm").load("./components/desktopForm.php")
        category = "Laptop"
    } else if (pcType === "Printer") {
        $("#categoryForm").load("./components/printerForm.php")
        category = "Printer"
    } else if (pcType === "UPS") {
        $("#categoryForm").load("./components/upsForm.php")
        category = "UPS"
    } else if (pcType === "Network Switch") {
        $("#categoryForm").load("./components/networkForm.php")
        category = "Switch"
    } else if (pcType === "Projector") {
        $("#categoryForm").load("./components/projectorForm.php")
        category = "Projector"
    }  
    
}

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

const viewComputer = (id) => {
    $("#tableInfo").load("../src/php/main.php", {
        view: true,
        id: id
    })
}
// For Faculty to get issue
const issue = (id) => {
    window.location.href = `./issue.php?page=issue&id=${id}`;
}

const printerType = () => {
    pcType = $("#printerType-select").val()
    console.log(pcType)
}

// Issue Item
const issueItem = () => {
    var pageURL1 = window.location.href;
    var url1 = new URL(pageURL1);
    var page1 = url1.searchParams.get("id");
    console.log(page1)
}

const searchFaculty = () => {
    var searchQuery = $("#faculty-txt").val()
    $("#facultyDetails").load("../src/php/main.php", {
        searchQuery: searchQuery,
        searchFaculty: true
    })
}

// Add Faculty
const addFaculty = () => {
    var name = $("#name-txt").val()
    var id = $("#id-txt").val()
    var email = $("#email-txt").val()
    var contact = $("#contact-txt").val()
    var department = $("#department-txt").val()
    $.post("../src/php/main.php", {
        name: name,
        id: id,
        email: email,
        contact: contact,
        department: department,
        addFaculty: true
    })
    swal("Done! Faculty Added", {
        icon: "success",
    });
}

// Showing Items
const showItem = () => {
    var pageURL1 = window.location.href;
    var url1 = new URL(pageURL1);
    var id = url1.searchParams.get("id");
    $("#itemDetails").load("../src/php/main.php", {
        id: id,
        showDetails: true
    })
    console.log("L")
}

const issueItemFaculty = () => {
    var pageURL1 = window.location.href;
    var url1 = new URL(pageURL1);
    var id = url1.searchParams.get("id");
    var qty = $("#facultyIssueQty-txt").val()
    var facultyUID = $("#facultyUID").html()
    var facultyID = $("#facultyID").html()
    $("#facultyDetails").load("../src/php/main.php", {
        id: id,
        qty: qty,
        facultyID: facultyID,
        facultyUID: facultyUID,
        facultyIssue: true
    })
}

// See All Issued Faculty Details
const seeAllIssuedFaculty = () => {
    $("#root").load("../src/php/main.php", {
        seeAllIssue: true
    })
}