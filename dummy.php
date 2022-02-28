<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/new-user890.css">

	<title>soltox</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<script src="https://code.jquery.com/jquery-latest.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<p>&nbsp;</p>
<h5 class="text-center">Dynamic Control : Text Box, Dropdown List, Radiobox and Checkbox</h5>
<section class="container">
<div class="table table-responsive">
<table class="table table-responsive table-striped table-bordered">
<thead>
  <tr>
      <td>TextBox</td>
      <td>Dropdown List</td>
      <td>To schedule(optional)</td>
      <td>CheckBox</td>
      <td>BTN</td>
    </tr>
</thead>
<tbody id="TextBoxContainer">
  <td><input name = "DynamicTextBox" type="text" value = "" class="form-control" /></td>
  <td><select name="" class="form-control"><option> Select</option><option> Male</option><option> Female</option></select></td>
  <td><input name = "DynamicTextBox" type="button" id="Schedule" onclick="schedulePooja(this)">          
    <form action="" id="boxform" class="boxform">   
                                <label for="From">From</label>
                                <input type="date" class="form-control">

                                <label for="to">To</label>
                                <input type="date" class="form-control">
                                  <input type="checkbox" id="daily" name="daily">
                                  <label for="daily">daily</label>
                                   <input type="checkbox" id="monthly" name="monthly" >
                                  <label for="monthly">monthly</label>
    
                                  <button href="#"class="w3-button w3-yellow" >ok</button>
                          </form> </td>
  <td><input name = "DynamicTextBox" type="checkbox" value = "" /></td>
  <td><button type="button" class="btn btn-danger remove"><i class="glyphicon glyphicon-remove-sign"></i></button></td>
</tbody>
<tfoot>
  <tr>
    <th colspan="5">
    <button id="btnAdd" type="button" class="btn btn-primary" data-toggle="tooltip" data-original-title="Add more controls"><i class="glyphicon glyphicon-plus-sign"></i>&nbsp; Add&nbsp;</button></th>
  </tr>
</tfoot>
</table>
</div>
</section>
<script type="text/javascript">
  function schedulePooja(event) {
    $thisBookform = $(event).siblings(".boxform");
    $(".boxform").not($thisBookform).hide();
    $thisBookform.toggle("slow");
  }
$(function () {
    $("#btnAdd").bind("click", function () {
        var div = $("<tr />");
        div.html(GetDynamicTextBox(""));
        $("#TextBoxContainer").append(div);
    });
    $("body").on("click", ".remove", function () {
        $(this).closest("tr").remove();
    });
});
function GetDynamicTextBox(value) {
    return '<td><input name = "DynamicTextBox" type="text" value = "' + value + '" class="form-control" /></td>' + '<td><select name="" class="form-control"><option> Select</option><option> Male</option><option> Female</option></select></td>' + '<td><input name = "DynamicTextBox" type="button" onclick="schedulePooja(this)">' + '<input type="date" class="form-control"> ' + '  <input type="date" class="form-control">  ' + ' <input type="checkbox" id="daily" name="daily" daily/> ' + ' <input type="checkbox" id="monthly" name="monthly" ' + ' <button href="#"class="w3-button w3-yellow" ></button> /></td>' + '<td><input name = "DynamicTextBox" type="checkbox" value = "' + value + '" /></td>' + '<td><button type="button" class="btn btn-danger remove"><i class="glyphicon glyphicon-remove-sign"></i></button></td>'
}
</script>
</body>
</html>
function populateSecondTextBox() {
    document.getElementById('DATE_REQD').value = document.getElementById('DATE_FROM').value;
    var date = document.getElementById("DATE_FROM").value;
var varDate = new Date(date); //dd-mm-YYYY
var today = new Date();

if(varDate <= today) {
//Do something..
alert("Please enter a future date!");
$("input[type=date]").val("");
}
}
function date1(){
var date = document.getElementById("DATE_REQD").value;

var varDate = new Date(date); //dd-mm-YYYY
var today = new Date();

if(varDate < today) {
//Do something..
alert("Please enter a future date!");
$("input[type=date]").val("");
}
}
function date2(){

var date1 = document.getElementById("DATE_TO").value;

var varDate = new Date(date1); //dd-mm-YYYY
var today = new Date();

if(varDate < today) {
//Do something..
alert("Please enter a future date!");
$("input[type=date]").val("");
}
}
