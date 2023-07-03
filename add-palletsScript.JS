let x = document.getElementById('Num1');
let y = document.getElementById('Num2');
let z = document.getElementById('Num3');
let ans = document.getElementById('result');

x.addEventListener('input', calculateResult);
y.addEventListener('input', calculateResult);
z.addEventListener('input', calculateResult);

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