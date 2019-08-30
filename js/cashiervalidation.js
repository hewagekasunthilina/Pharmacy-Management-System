function validateAddItemForm()
{
    var ItemNo_1 = document.forms["InvoiceForm"]["ItemNo_1"].value;
    var ItemNo_2 = document.forms["InvoiceForm"]["ItemNo_2"].value;
    var ItemNo_3 = document.forms["InvoiceForm"]["ItemNo_3"].value;
    var ItemNo_4 = document.forms["InvoiceForm"]["ItemNo_4"].value;
    var ItemNo_5 = document.forms["InvoiceForm"]["ItemNo_5"].value;
    var ItemNo_6 = document.forms["InvoiceForm"]["ItemNo_6"].value;
    var ItemNo_7 = document.forms["InvoiceForm"]["ItemNo_7"].value;
    var ItemNo_8 = document.forms["InvoiceForm"]["ItemNo_8"].value;
    var ItemNo_9 = document.forms["InvoiceForm"]["ItemNo_9"].value;
    var ItemNo_10 = document.forms["InvoiceForm"]["ItemNo_10"].value;
    

    var decimal = /^\d+(\.\d+)?$/;
    var number = /^[0-9]+$/;

    if ((ItemID == null || ItemID == "") && (ItemName == null || ItemName == "") && (Description == null || Description == "") && (Category == null || Category == "Select Category") && (Price == null || Price == "")){
        alert("Plase Fill the Add Item form");
        return false;
    }

    if (ItemID == null || ItemID == ""){
        alert("Item ID must be filled out ");
        return false;
    }else if(!(Price.match(numbers))){
        alert('Price is invalid');
        return false;
    }

    if (ItemName == null || ItemName == ""){
        alert("Item name must be filled out ");
        return false;
    }

    if (Description == null || Description == ""){
        alert("Item description must be filled out ");
        return false;
    }

    if (Category == null || Category == "Select Category"){
        alert("Item category must be filled out ");
        return false;
    }

    if (Price == null || Price == ""){
        alert("Item price must be filled out ");
        return false;
    }
}

function validate_1stAdd(){
    var ItemNo_1 = document.forms["InvoiceForm"]["ItemNo_1"].value;
    var Quantity_1 = document.forms["InvoiceForm"]["Quantity_1"].value;

    if (ItemNo_1 == null || ItemNo_1 == ""){
        alert("Item name must be filled out ");
        return false;
    }
}