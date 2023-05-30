function toggle(){
        var blurr = document.getElementById('blur');
        blurr.classList.toggle('active');
        var choice = document.getElementById('choice');
        choice.classList.toggle('active');
        var hide = document.getElementById('addItems');
        hide.classList.toggle('hide');
}

var dateInput = document.getElementById('dateInput');

// Add event listener to format the date on input change
dateInput.addEventListener('input', function() {
  var inputDate = new Date(this.value);
  var formattedDate = inputDate.toLocaleDateString('en-US', { year: 'numeric', month: '2-digit', day: '2-digit' });
  this.value = formattedDate;
});
