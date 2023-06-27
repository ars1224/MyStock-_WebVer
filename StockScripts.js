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

let x = document.getElementById('Num1');
let y = document.getElementById('Num2');
let z = document.getElementById('Num3');
let ans = document.getElementById('result');

x.addEventListener('input', calculateResult);
y.addEventListener('input', calculateResult);
z.addEventListener('input',0, calculateResult);

function calculateResult() {
  var num1 = parseFloat(x.value);  // Use x.value instead of num1.value
  var num2 = parseFloat(y.value);  // Use y.value instead of num2.value
  var num3 = parseFloat(z.value);  // Use z.value instead of num3.value
  var result = (num1 * num2) + num3;

  if (!isNaN(result)) {
    ans.value = result;
  } else {
    ans.value = '';
  }
}



