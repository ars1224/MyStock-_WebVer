function toggleBtn() {
  const checkbox = document.getElementById('checkbox');
  const checkboxes = document.querySelectorAll('.myCheckbox');
  const button = document.getElementById('deleteBtn');

  checkboxes.forEach(function(checkbox) {
      checkbox.checked = checkbox.checked ? false : true;
  });

  if (checkbox.checked) {
      button.style.display = 'block'; // Show the button
  } else {
      button.style.display = 'none'; // Hide the button
  }
}

const checkboxes = document.querySelectorAll('.myCheckbox');
const button = document.getElementById('deleteBtn');

checkboxes.forEach(function(checkbox) {
  checkbox.addEventListener('change', function() {
    let isChecked = false;

    checkboxes.forEach(function(checkbox) {
      if (checkbox.checked) {
        isChecked = true;
        return;
      }
    });

    if (isChecked) {
      button.style.display = 'block'; // Show the button
    } else {
      button.style.display = 'none'; // Hide the button
    }
  });
});

function toggle(){
        var blurr = document.getElementById('blur');
        blurr.classList.toggle('active');

        var hide = document.getElementById('deleteBtn')
        hide.classList.toggle('remove')

        var show = document.getElementById('Show');
        show.classList.toggle('pop')

        var back = document.getElementById('Show');
        back.classList.toggle('ext')

        
};

function Toggle(){
  var lbl = document.getElementById('iwantToHide');
        lbl.classList.toggle('hideIt')
  var exchange = document.getElementById('updateText');
        exchange.classList.toggle('replace')
}


function calculateTotals() {
  // Get all the checkboxes
  var checkboxes = document.getElementsByClassName('myCheckbox');
  var totalCtn = 0;
  var totalUnits = 0;

  // Iterate over the checkboxes
  for (var i = 0; i < checkboxes.length; i++) {
      if (checkboxes[i].checked) {
          // Get the corresponding row
          var row = checkboxes[i].closest('tr, th');

          // Get the quantity and cartons values
          var qty = parseInt(row.querySelector('[name="Qty"]').textContent);
          var ctns = parseInt(row.querySelector('[name="NoCtns"]').textContent);

          // Accumulate the totals
          totalCtn += ctns;
          totalUnits += ( qty);
      }
  }

  // Update the footer totals
  document.getElementById('ctnTotal').textContent = totalCtn;
  document.getElementById('unitsTotal').textContent = totalUnits;
}


