<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title></title>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script type="text/javascript">
    $(function() {
  $('#obj').on('input', function() {
    this.value = this.value
      .replace(/[^\d.]/g, '')             // numbers and decimals only
      .replace(/(^[\d]{2})[\d]/g, '$1')   // not more than 2 digits at the beginning
      .replace(/(\..*)\./g, '$1')         // decimal can't exist more than once
      .replace(/(\.[\d]{4})./g, '$1');    // not more than 4 digits after decimal
  });
});
    function checkNumbers()
{
    console.log(this.value);
  var numbers = this.value.split('.');
  var preDecimal = numbers[0];
  var postDecimal = numbers[1];

  if (preDecimal.length>3 || postDecimal.length>3)
  {
        alert("Max 3 numbers before and after the decimal point.")
    this.select();
  } 
}

//ADD LISTENER TO INPUT
var input = document.getElementById("numberInput");
console.log(input);
input.addEventListener("change", checkNumbers)
      $(function () {
            $('#PUJA_RATE').keypress(function (event) {
                var $this = $(this);
                if ((event.which != 46 || $this.val().indexOf('.') != -1) && ((event.which < 48 || event.which > 57) && (event.which != 0 && event.which != 8))) {
                    event.preventDefault();
                }
                var text = $(this).val();
                if (text.length === 8) {
                    $(this).val(text + ".")
                }
                if ((event.which == 46) && (text.indexOf('.') == -1)) {
                    setTimeout(function () {
                        if ($this.val().substring($this.val().indexOf('.')).length > 3) {
                            $this.val($this.val().substring(0, $this.val().indexOf('.') + 3));
                        }
                    }, 1);
                }
                if ((text.indexOf('.') == 8 && text.substring(text.indexOf('.')).length > 2)) {
                    event.preventDefault();
                }
                if (((text.indexOf('.') != -1) && (text.substring(text.indexOf('.')).length > 2) && (event.which != 0 && event.which != 8) && ($(this)[0].selectionStart >= text.length - 2))) {
                    event.preventDefault();
                }
            });
        });

    </script>
</head>
<body>
    <input name="txtValue" type="text" id="obj" style="width: 200px" />
        <input name="txtValue" type="text" id="obj" style="width: 200px" />
            <input name="txtValue" type="text" id="obj" style="width: 200px" />
                <input name="txtValue" type="text" id="obj" style="width: 200px" />
</body>
</html>