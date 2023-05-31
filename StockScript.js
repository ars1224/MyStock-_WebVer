function toggle(){
        var blurr = document.getElementById('blur');
        blurr.classList.toggle('active');
        var choice = document.getElementById('choice');
        choice.classList.toggle('active');
        var hide = document.getElementById('addItems');
        hide.classList.toggle('hide');
}

function changeDateFormat() {
  // Get the input value from the text box
  var inputDate = document.getElementById("dateInput").value;
  
  // Create a Date object using the input value
  var date = new Date(inputDate);
  
  // Create the desired date format
  var outputDate = date.toISOString().split('T')[0];
  
  // Set the formatted date as the new value in the text box
  document.getElementById("dateInput").value = outputDate;
}
