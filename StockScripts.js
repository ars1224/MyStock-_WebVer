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
}


