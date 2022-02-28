<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
<!-- font awesome  -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" />
<link rel="stylesheet" href="static/css/AdminLTE.min.css" />

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous" />

<!-- custom styling -->
<link rel="stylesheet" type="text/css" href="css/book-puja1.css" />

<!-- <script src="static/js/jquery.min.js"></script> -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <title>soltox</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
</head>
<body>
    <body>
<?php
    include "header.php";
?>

    <div class="form-header">
        <div class="container">
            <div class="heading">
                <h2>Add poojas</h2>
                <h4>search and add poojas</h4>
            </div>          
        </div>      
    </div>
<div class="container py-4">
  <div class="row">
    <div class="col-md-12 form_sec_outer_task border">
      <div class="col-md-12 p-0">
        <div class="col-md-12 form_field_outer p-0">  
          <form  name="bookingform" action="" method="post" enctype="multipart/form-data" id="bookingform"></form> 
    <form action="" id="boxform" class="boxform">    </form>
          <div class="row form_field_outer_row">
              <div class="form-group col-sm-3">
                      <label for="PUJA_CODEb_no_1">Pooja</label>
                      <input form="bookingform" class="form-select"list="puja" name="PUJA_CODEb_no[]"id="PUJA_CODEb_no_1" required/>
                        <datalist id="puja">
                          <option value="vilak"></option>
                          <option value="pushpanjali"></option>
                          <option value="dhara "></option>
                          <option value="neyyvilak"></option>
                        </datalist > 
            </div>
               <div class="form-group col-sm-3">
                      <label for="DATE_REQDb_no_1">Date of offering</label>
                    <input form="bookingform" type="date" class="form-control" name="DATE_REQDb_no[]" id="DATE_REQDb_no_1" required>
        </div>
                                    <div  form="boxform"class="form-group col-sm-3 mb-3" id="box">
                                        <label>To schedule(optional)</label><br>
                                         <span id="Schedule" onclick="schedulePooja(this)"><button class="btn btn-primary">Schedule Pooja</button></span>
                                          <div class="schedule-form" id="schedule-form">
                                            <label for="DATE_FROMb_no_1">From</label>
                                            <input form="boxform" type="date" name="DATE_REQDb_no[]"class="form-control" id="DATE_FROMb_no_1" onblur="date1();">

                                                <label for="DATE_TOb_no_1">To</label>
                                                <input form="boxform" type="date" class="form-control" id="DATE_TOb_no_1" onblur="date2();">
                                                  <input form="boxform"type="checkbox" id="dailyb_no_1" name="dailyb_no[]">
                                                        <label for="daily">daily</label>
                                                         <input form="boxform"type="checkbox" id="monthlyb_no_1" name="monthlyb_no[]" >
                                                        <label for="monthly">monthly</label>
                                
                                                    </div>              
                                                </div>
            <div class="form-group col-sm-3">
            <label for="PUJA_WHOM_b_no_1">Devotee name</label>
                    <input form="bookingform"  type="text" class="form-control" name="PUJA_WHOM_b_no[]"id="PUJA_WHOM_b_no_1" placeholder="Enter devotee name" required>
            </div>
               <div class="form-group col-sm-3">
                <label for="STAR_CODEb_no_1">Birth Star</label>
                      <input form="bookingform" class="form-select"list="star" name="star"id="STAR_CODEb_no_1" required/>
                        <datalist id="star">
                          <option value="pooram"></option>
                          <option value="moolam"></option>
                          <option value="makeeram"></option>
                          <option value="revathy"></option>
                        </datalist> 
            </div>
                    <div class="form-group col-sm-3">
              <label for="PRSD_NEEDb_no_1">Prasada courier</label>
                    <select form="bookingform" name="STAR_CODEb_no[]"id="PRSD_NEEDb_no_1" class="form-select" required>
                            <option>no</option>
                            <option>yes</option>
                    </select >
            </div>
                    <div class="form-group col-sm-3">
          <label for="PUJA_RATEb_no_1">Price</label>
                    <input form="bookingform" type="number"name="PUJA_RATEb_no[]" class="form-control" id="PUJA_RATEb_no_1" value='0' disabled>
            </div>
            <div class="form-group col-md-2 add_del_btn_outer">
                   <label >Copy  &nbsp; &nbsp; Delete</label><br>
              <button class="btn_round add_node_btn_frm_field" title="To Copy this details">
                <i class="fas fa-copy"></i>
              </button>

              <button class="btn_round remove_node_btn_frm_field"title="To delete this details" disabled>
                <i class="fas fa-trash-alt"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row ml-0  mt-3 border py-3">
      <div class="col-md-12">
  Would you like to give dakshina?
        <input type="radio" onclick="show(this)" name="radioButton"  id="a" >Yes 
        <input type="radio" onclick="show(this)" name="radioButton"  id="b"checked >No
    <div id="area">  </div>

                  <button class="btn btn-outline-lite py-0 add_new_frm_field_btn"><i class="fas fa-plus add_icon"></i> Add new poojas</button>
                  <input form="bookingform"  class="btn btn-success " type="submit" value="Add to cart" style="float :right;margin-right: 5%;"/> 
      </div>
    </div>
  </div>
      <div class="col-md-3 col-md-offset-4">
            <div class="total-price mb-4"  ><br><br><br>
                <h5>Price detail</h5>
              <hr class="mb-2">
              <p>Price</p>
              <p>other</p>
              <hr class="mb-2">
              <h5>Total Price</h5>
                <div class="addcart">
             <button class="btn btn-success btn-sm float-right" ><i class="fas fa-arrow-alt-circle-right"></i> Checkout</button>
 
        
<br>

</div>
          </div>
          </div>
</div>          <script language="Javascript">
               function show(x)
                              {
                                var element=document.getElementById(x.id);
                                if(element.id=='a')
                                {
                                  document.getElementById("area").innerHTML="Amount for Dakshina: <input form='bookingform' name='DKSN_PRST' id='DKSN_PRST'type='text' maxlength='4'  pattern='[0-9]{4}' oninput='javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);'/>";
                                    document.getElementById("area").style.visibility = "visible";
                                }
                                  if(element.id=='b')
                                {
                                  document.getElementById("area").innerHTML="Amount for Dakshina: <input form='bookingform' name='DKSN_PRST' id='DKSN_PRST'type='text' value='0'/>";
                                    document.getElementById("area").style.visibility = "hidden";
                                }
                              }
           </script>

<script type="text/javascript">
    function schedulePooja(event) {
        $thisBookform = $(event).siblings(".schedule-form");
        $(".schedule-form").not($thisBookform).hide();
        $thisBookform.toggle("slow");
            } 
            window.onload = function() {
        $(".dakshina").hide(); 
          $(".schedule-form").hide();
      }

</script>

<script type="text/javascript">
$(function() {
        var today = new Date();
        var dd = String(today.getDate()).padStart(2, '0');
        var mm = String(today.getMonth() + 1).padStart(2, '0');
        var yyyy = today.getFullYear();

        today = yyyy + '-' + mm + '-' + dd;
        $('#DATE_REQDb_no_1').attr('min',today);
         $('#DATE_FROMb_no_1').attr('min',today);
          $('#DATE_TOb_no_1').attr('min',today);
 });
function date1() {
  document.getElementById('DATE_REQDb_no_1').value = document.getElementById('DATE_FROMb_no_1').value;
 }
 function date2() {
  var fdate=document.getElementById('DATE_FROMb_no_1').value;
  var tdate=document.getElementById('DATE_TOb_no_1').value;
  fdate=new Date(fdate);
  tdate=new Date(tdate);
  if(fdate>tdate){
  alert("please enter a future date!");
  }
 }



</script>
<script type="text/javascript">
    ///======Clone method
$(document).ready(function () {
  $("body").on("click", ".add_node_btn_frm_field", function (e) {
    var index = $(e.target).closest(".form_field_outer").find(".form_field_outer_row").length + 1;
    var cloned_el = $(e.target).closest(".form_field_outer_row").clone(true);

    $(e.target).closest(".form_field_outer").last().append(cloned_el).find(".remove_node_btn_frm_field:not(:first)").prop("disabled", false);

    $(e.target).closest(".form_field_outer").find(".remove_node_btn_frm_field").first().prop("disabled", true);

    //change id
        $(e.target)
      .closest(".form_field_outer")
      .find(".form_field_outer_row")
      .last()
      .find("datalist")
      .attr("id", "PUJA_CODEb_no_" + index);
         $(e.target)
      .closest(".form_field_outer")
      .find(".form_field_outer_row")
      .last()
      .find("date")
      .attr("id", "DATE_REQDb_no_" + index);
         $(e.target)
      .closest(".form_field_outer")
      .find(".form_field_outer_row")
      .last()
      .find("date")
      .attr("id", "DATE_FROMb_no_" + index);
               $(e.target)
      .closest(".form_field_outer")
      .find(".form_field_outer_row")
      .last()
      .find("date")
      .attr("id", "DATE_TOb_no_" + index);
         $(e.target)
      .closest(".form_field_outer")
      .find(".form_field_outer_row")
      .last()
      .find("input[type='checkbox']")
      .attr("id", "dailyb_no_" + index);
         $(e.target)
      .closest(".form_field_outer")
      .find(".form_field_outer_row")
      .last()
      .find("input[type='checkbox']")
      .attr("id", "monthlyb_no_" + index);
    $(e.target)
      .closest(".form_field_outer")
      .find(".form_field_outer_row")
      .last()
      .find("input[type='text']")
      .attr("id", "PUJA_WHOM_b_no_" + index);
        $(e.target)
      .closest(".form_field_outer")
      .find(".form_field_outer_row")
      .last()
      .find("datalist")
      .attr("id", "STAR_CODEb_no_" + index);
    $(e.target)
      .closest(".form_field_outer")
      .find(".form_field_outer_row")
      .last()
      .find("select")
      .attr("id", "PRSD_NEEDb_no_" + index);
          $(e.target)
      .closest(".form_field_outer")
      .find(".form_field_outer_row")
      .last()
      .find("select")
      .attr("id", "PUJA_RATEb_no_" + index);
    console.log(cloned_el);
    //count++;

  });
});
</script>
<script type="text/javascript">
    $(document).ready(function(){ 
      $("body").on("click",".add_new_frm_field_btn", function (){ console.log("clicked"); 
        var index = $(".form_field_outer").find(".form_field_outer_row").length + 1; 
        $(".form_field_outer").append(`
          <div class="row form_field_outer_row">
            <div class="form-group col-sm-3">
                      <label for="PUJA_CODEb_no_${index}">Pooja</label>
                      <input form="bookingform" class="form-select"list="puja" name="PUJA_CODEb_no[]"id="PUJA_CODEb_no_${index} required" />
                        <datalist id="puja">
                          <option value="vilak"></option>
                          <option value="pushpanjali"></option>
                          <option value="dhara "></option>
                          <option value="neyyvilak"></option>
                        </datalist > 
            </div>
               <div class="form-group col-sm-3">
                      <label for="DATE_REQDb_no_${index}">Date of offering</label>
                    <input form="bookingform" type="date" class="form-control" name="DATE_REQDb_no[]" id="DATE_REQDb_no_${index}" required>
        </div>
                                    <div class="form-group col-sm-3 mb-3" id="box">
                                        <label>To schedule(optional)</label><br>
                                         <span id="Schedule" onclick="schedulePooja(this)"><button class="btn btn-primary">Schedule Pooja</button></span>
                                          <div class="schedule-form" id="schedule-form">
                                            <label for="DATE_FROMb_no_${index}">From</label>
                                            <input form="boxform" type="date" class="form-control" id="DATE_FROMb_no_${index}" onblur="date1();">

                                                <label for="DATE_TOb_no_${index}">To</label>
                                                <input form="boxform" type="date" class="form-control" id="DATE_TOb_no_${index}" onblur="date2();">
                                                   <input form="boxform"type="checkbox" id="dailyb_no_${index}" name="dailyb_no[]">
                                                        <label for="daily">daily</label>
                                                         <input form="boxform"type="checkbox" id="monthlyb_no_${index}" name="monthlyb_no[]" >
                                                        <label for="monthly">monthly</label>
                                                    <button form="boxform" type="submit"class="w3-button w3-yellow" id="okb_no_${index}">ok</button>
                                                    </div>              
                                                </div>
            <div class="form-group col-sm-3">
            <label for="PUJA_WHOM_b_no_${index}">Devotee name</label>
                    <input form="bookingform"  type="text" class="form-control" name="PUJA_WHOM_b_no[]"id="PUJA_WHOM_b_no_${index}" placeholder="Enter devotee name" required>
            </div>
                <div class="form-group col-sm-3">
                <label for="STAR_CODEb_no_1">Birth Star</label>
                      <input form="bookingform" class="form-select"list="star" name="star"id="STAR_CODEb_no_1" required/>
                        <datalist id="star">
                          <option value="pooram"></option>
                          <option value="moolam"></option>
                          <option value="makeeram"></option>
                          <option value="revathy"></option>
                        </datalist> 
            </div>
                    <div class="form-group col-sm-3">
              <label for="PRSD_NEEDb_no_${index}">Prasada courier</label>
                    <select form="bookingform" name="STAR_CODEb_no[]"id="PRSD_NEEDb_no_${index}" class="form-select">
                        <option>yes</option>
                        <option>no</option>
                    </select >
            </div>
                    <div class="form-group col-sm-3">
          <label for="PUJA_RATEb_no_${index}">Price</label>
                    <input form="bookingform" type="number"name="PUJA_RATEb_no[]" class="form-control" id="PUJA_RATEb_no_${index}" value='0' disabled>
            </div>
            <div class="form-group col-sm-3 add_del_btn_outer"> <label >Copy  &nbsp; &nbsp; Delete</label><br>
              <button class="btn_round add_node_btn_frm_field"  title="To Copy this details">
                <i class="fas fa-copy"></i>
              </button>

              <button class="btn_round  remove_node_btn_frm_field" title="To delete this details"  disabled>
                <i class="fas fa-trash-alt"></i>
              </button>
            </div>
          </div>
`); 

$(".form_field_outer").find(".remove_node_btn_frm_field:not(:first)").prop("disabled", false); $(".form_field_outer").find(".remove_node_btn_frm_field").first().prop("disabled", true); }); });
</script>
<script type="text/javascript">
    $(document).ready(function () {
  //===== delete the form fieed row
  $("body").on("click", ".remove_node_btn_frm_field", function () {
    $(this).closest(".form_field_outer_row").remove();
    console.log("success");
  });
});
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

          <?php include("footer1.php");?>
</body>
</html>