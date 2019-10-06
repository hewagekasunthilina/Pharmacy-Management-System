function validateAddItemForm()
{
    var ItemID = document.forms["addItemForm"]["ItemID"].value;
    var ItemName = document.forms["addItemForm"]["ItemName"].value;
    var Description = document.forms["addItemForm"]["Description"].value;
    var Category = document.forms["addItemForm"]["Category"].value;
    var Price = document.forms["addItemForm"]["Price"].value;

    var decimal = /^\d+(\.\d+)?$/;

    if ((ItemID == null || ItemID == "") && (ItemName == null || ItemName == "") && (Description == null || Description == "") && (Category == null || Category == "") && (Price == null || Price == "")){
        alert("Plase Fill the Add Item form");
        return false;
    }

    if (ItemID == null || ItemID == ""){
        alert("Item ID must be filled out ");
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

    if (Category == null || Category == ""){
        alert("Item category must be filled out ");
        return false;
    }

    if (Price == null || Price == ""){
        alert("Item price must be filled out ");
        return false;
    }else if(!(Price.match(decimal))){
        alert('Price is invalid');
        return false;
    }
}


function validateSupplyOrderForm()
{
    var ItemID = document.forms["SupplyOrderForm"]["ItemID"].value;
    var ItemQuantity = document.forms["SupplyOrderForm"]["ItemQuantity"].value;
    var SupplerID = document.forms["SupplyOrderForm"]["SupplerID"].value;
    var exp_date = document.forms["SupplyOrderForm"]["exp_date"].value;
    var exp_month = document.forms["SupplyOrderForm"]["exp_month"].value;
    var exp_year = document.forms["SupplyOrderForm"]["exp_year"].value;
    var mfg_date = document.forms["SupplyOrderForm"]["mfg_date"].value;
    var mfg_month = document.forms["SupplyOrderForm"]["mfg_month"].value;
    var mfg_year = document.forms["SupplyOrderForm"]["mfg_year"].value;
    var phs_date = document.forms["SupplyOrderForm"]["phs_date"].value;
    var phs_month = document.forms["SupplyOrderForm"]["phs_month"].value;
    var phs_year = document.forms["SupplyOrderForm"]["phs_year"].value;
    var Pu_price = document.forms["SupplyOrderForm"]["Pu_price"].value;

    var decimal = /^\d+(\.\d+)?$/;
    var number = /^[0-9]+$/;

    var today = new Date();
    var thisYear = today.getFullYear();
    var thisMonth = today.getMonth()+1;
    var thisDay = today.getDate();

    if ((ItemID == null || ItemID == "") && (ItemQuantity == null || ItemQuantity == "") && (SupplerID == null || SupplerID == "") && (exp_date == null || exp_date == "") && (exp_month == null || exp_month == "") && (exp_year == null || exp_year == "") && (mfg_date == null || mfg_date == "") && (mfg_month == null || mfg_month == "") && (mfg_year == null || mfg_year == "") && (phs_date == null || phs_date == "") && (phs_month == null || phs_month == "") && (phs_year == null || phs_year == "") && (Pu_price == null || Pu_price == "")){
        alert("Plase Fill the Add Supply Order form");
        return false;
    }

    if (ItemID == null || ItemID == ""){
        alert("Item ID must be filled out ");
        return false;
    }

    if (ItemQuantity == null || ItemQuantity == ""){
        alert("Item Quantity must be filled out ");
        return false;
    }else if(!(ItemQuantity.match(number))){
        alert('Quantity is invalid');
        return false;
    }

    if (SupplerID == null || SupplerID == ""){
        alert("Suppler ID must be filled out ");
        return false;
    }


    if (exp_date == null || exp_date == ""){
        alert("Exp Day must be filled out ");
        return false;
    }else if(!(exp_date.match(number))){
        alert('Exp Day is invalid');
        return false;
    }else if(exp_date<1 || exp_date>31){
        alert('Exp Day must between 1 - 31');
        return false;
    }


    if (exp_month == null || exp_month == ""){
        alert("Exp Month must be filled out ");
        return false;
    }else if(!(exp_month.match(number))){
        alert('Exp Month is invalid');
        return false;
    }else if(exp_month<1 || exp_month>12){
        alert('Exp Day must between 1 - 12');
        return false;
    }

    if (exp_year == null || exp_year == ""){
        alert("Exp Year must be filled out ");
        return false;
    }else if(!(exp_year.match(number))){
        alert('Exp Year is invalid');
        return false;
    }else if(exp_year<2000 || exp_year>2050){
        alert('Exp Year is invalid');
        return false;
    }

    if (exp_date==thisDay && exp_month==thisMonth && exp_year==thisYear) {
        alert("This items expiry today");
        return false;
    }

    if (exp_date<=thisDay && exp_month<=thisMonth && exp_year<=thisYear) {
        alert("This items expiryed");
        return false;
    }

    if ((exp_date<=thisDay && exp_month<=thisMonth+1 && exp_year==thisYear) || (exp_date>=thisDay && exp_month==thisMonth && exp_year==thisYear)) {
        alert("This items expiry soon");
        return false;
    }


    

    if (mfg_date == null || mfg_date == ""){
        alert("Mfg Day must be filled out ");
        return false;
    }else if(!(mfg_date.match(number))){
        alert('Mfg Day is invalid');
        return false;
    }else if(mfg_date<1 || mfg_date>31){
        alert('Mfg Day must between 1 - 31');
        return false;
    }

    if (mfg_month == null || mfg_month == ""){
        alert("Mfg Month must be filled out ");
        return false;
    }else if(!(mfg_month.match(number))){
        alert('Mfg Month is invalid');
        return false;
    }else if(mfg_month<1 || mfg_month>12){
        alert('Mfg Month must between 1 - 12');
        return false;
    }

    if (mfg_year == null || mfg_year == ""){
        alert("Mfg Year must be filled out ");
        return false;
    }else if(!(mfg_year.match(number))){
        alert('Mfg Year is invalid');
        return false;
    }else if(mfg_year<2000 || mfg_year>2050){
        alert('Mfg Year is invalid');
        return false;
    }


    if (mfg_date>thisDay && mfg_month>=thisMonth && mfg_year>=thisYear) {
        alert("Manufacture date is invalid");
        return false;
    }


    if (phs_date == null || phs_date == ""){
        alert("Purchase Day must be filled out ");
        return false;
    }else if(!(phs_date.match(number))){
        alert('Purchase Day is invalid');
        return false;
    }else if(phs_date<1 || phs_date>31){
        alert('MPurchase Day must between 1 - 31');
        return false;
    }

    if (phs_month == null || phs_month == ""){
        alert("Purchase Month must be filled out ");
        return false;
    }else if(!(phs_month.match(number))){
        alert('Purchase Month is invalid');
        return false;
    }else if(phs_month<1 || phs_month>12){
        alert('Purchase Month must between 1 - 12');
        return false;
    }

    if (phs_year == null || phs_year == ""){
        alert("Purchase Year must be filled out ");
        return false;
    }else if(!(phs_year.match(number))){
        alert('Purchase Year is invalid');
        return false;
    }else if(phs_year<2000 || phs_year>2050){
        alert('Purchase Year is invalid');
        return false;
    }

    if (phs_date>thisDay && phs_month>=thisMonth && phs_year>=thisYear) {
        alert("Purchase date is invalid");
        return false;
    }


    if (Pu_price == null || Pu_price == ""){
        alert("Purchase Price must be filled out ");
        return false;
    }else if(!(Pu_price.match(decimal))){
        alert('Purchase Price is invalid');
        return false;
    }



}


function validateSupplyOrderFormUpdate()
{
    var ItemID = document.forms["SupplyOrderForm"]["ItemID"].value;
    var ItemQuantity = document.forms["SupplyOrderForm"]["ItemQuantity"].value;
    var SupplerID = document.forms["SupplyOrderForm"]["SupplerID"].value;
    var exp_date = document.forms["SupplyOrderForm"]["exp_date"].value;
    var exp_month = document.forms["SupplyOrderForm"]["exp_month"].value;
    var exp_year = document.forms["SupplyOrderForm"]["exp_year"].value;
    var mfg_date = document.forms["SupplyOrderForm"]["mfg_date"].value;
    var mfg_month = document.forms["SupplyOrderForm"]["mfg_month"].value;
    var mfg_year = document.forms["SupplyOrderForm"]["mfg_year"].value;
    var phs_date = document.forms["SupplyOrderForm"]["phs_date"].value;
    var phs_month = document.forms["SupplyOrderForm"]["phs_month"].value;
    var phs_year = document.forms["SupplyOrderForm"]["phs_year"].value;
    var Pu_price = document.forms["SupplyOrderForm"]["Pu_price"].value;

    var decimal = /^\d+(\.\d+)?$/;
    var number = /^[0-9]+$/;

    var today = new Date();
    var thisYear = today.getFullYear();
    var thisMonth = today.getMonth()+1;
    var thisDay = today.getDate();

    if ((ItemID == null || ItemID == "") && (ItemQuantity == null || ItemQuantity == "") && (SupplerID == null || SupplerID == "") && (exp_date == null || exp_date == "") && (exp_month == null || exp_month == "") && (exp_year == null || exp_year == "") && (mfg_date == null || mfg_date == "") && (mfg_month == null || mfg_month == "") && (mfg_year == null || mfg_year == "") && (phs_date == null || phs_date == "") && (phs_month == null || phs_month == "") && (phs_year == null || phs_year == "") && (Pu_price == null || Pu_price == "")){
        alert("Plase Fill the Add Supply Order form");
        return false;
    }

    if (ItemID == null || ItemID == ""){
        alert("Item ID must be filled out ");
        return false;
    }

    if (ItemQuantity == null || ItemQuantity == ""){
        alert("Item Quantity must be filled out ");
        return false;
    }else if(!(ItemQuantity.match(number))){
        alert('Quantity is invalid');
        return false;
    }

    if (SupplerID == null || SupplerID == ""){
        alert("Suppler ID must be filled out ");
        return false;
    }


    if (exp_date == null || exp_date == ""){
        alert("Exp Day must be filled out ");
        return false;
    }else if(!(exp_date.match(number))){
        alert('Exp Day is invalid');
        return false;
    }else if(exp_date<1 || exp_date>31){
        alert('Exp Day must between 1 - 31');
        return false;
    }


    if (exp_month == null || exp_month == ""){
        alert("Exp Month must be filled out ");
        return false;
    }else if(!(exp_month.match(number))){
        alert('Exp Month is invalid');
        return false;
    }else if(exp_month<1 || exp_month>12){
        alert('Exp Day must between 1 - 12');
        return false;
    }

    if (exp_year == null || exp_year == ""){
        alert("Exp Year must be filled out ");
        return false;
    }else if(!(exp_year.match(number))){
        alert('Exp Year is invalid');
        return false;
    }else if(exp_year<2000 || exp_year>2050){
        alert('Exp Year is invalid');
        return false;
    }

    

    

    


    

    if (mfg_date == null || mfg_date == ""){
        alert("Mfg Day must be filled out ");
        return false;
    }else if(!(mfg_date.match(number))){
        alert('Mfg Day is invalid');
        return false;
    }else if(mfg_date<1 || mfg_date>31){
        alert('Mfg Day must between 1 - 31');
        return false;
    }

    if (mfg_month == null || mfg_month == ""){
        alert("Mfg Month must be filled out ");
        return false;
    }else if(!(mfg_month.match(number))){
        alert('Mfg Month is invalid');
        return false;
    }else if(mfg_month<1 || mfg_month>12){
        alert('Mfg Month must between 1 - 12');
        return false;
    }

    if (mfg_year == null || mfg_year == ""){
        alert("Mfg Year must be filled out ");
        return false;
    }else if(!(mfg_year.match(number))){
        alert('Mfg Year is invalid');
        return false;
    }else if(mfg_year<2000 || mfg_year>2050){
        alert('Mfg Year is invalid');
        return false;
    }


    


    if (phs_date == null || phs_date == ""){
        alert("Purchase Day must be filled out ");
        return false;
    }else if(!(phs_date.match(number))){
        alert('Purchase Day is invalid');
        return false;
    }else if(phs_date<1 || phs_date>31){
        alert('MPurchase Day must between 1 - 31');
        return false;
    }

    if (phs_month == null || phs_month == ""){
        alert("Purchase Month must be filled out ");
        return false;
    }else if(!(phs_month.match(number))){
        alert('Purchase Month is invalid');
        return false;
    }else if(phs_month<1 || phs_month>12){
        alert('Purchase Month must between 1 - 12');
        return false;
    }

    if (phs_year == null || phs_year == ""){
        alert("Purchase Year must be filled out ");
        return false;
    }else if(!(phs_year.match(number))){
        alert('Purchase Year is invalid');
        return false;
    }else if(phs_year<2000 || phs_year>2050){
        alert('Purchase Year is invalid');
        return false;
    }

    


    if (Pu_price == null || Pu_price == ""){
        alert("Purchase Price must be filled out ");
        return false;
    }else if(!(Pu_price.match(decimal))){
        alert('Purchase Price is invalid');
        return false;
    }



}






// Material Design example
$(document).ready(function () {
    $('#dtMaterialDesignExample').DataTable();
    $('#dtMaterialDesignExample_wrapper').find('label').each(function () {
    $(this).parent().append($(this).children());
    });
    $('#dtMaterialDesignExample_wrapper .dataTables_filter').find('input').each(function () {
    $('input').attr("placeholder", "Search");
    $('input').removeClass('form-control-sm');
    });
    $('#dtMaterialDesignExample_wrapper .dataTables_length').addClass('d-flex flex-row');
    $('#dtMaterialDesignExample_wrapper .dataTables_filter').addClass('md-form');
    $('#dtMaterialDesignExample_wrapper select').removeClass(
    'custom-select custom-select-sm form-control form-control-sm');
    $('#dtMaterialDesignExample_wrapper select').addClass('mdb-select');
    $('#dtMaterialDesignExample_wrapper .mdb-select').materialSelect();
    $('#dtMaterialDesignExample_wrapper .dataTables_filter').find('label').remove();
    });