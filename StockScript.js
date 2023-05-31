function toggle(){
        var blurr = document.getElementById('blur');
        blurr.classList.toggle('active');
        var choice = document.getElementById('choice');
        choice.classList.toggle('active');
        var hide = document.getElementById('addItems');
        hide.classList.toggle('hide');
}

let ans = document.getElementById('Total');
let x = document.getElementById('NoCtn');
let y = document.getElementById('Units');
let z = document.getElementById('PrtBx');

x.addEventListener('input', calculateResult);
y.addEventListener('input', calculateResult);
z.addEventListener('input', calculateResult);

function calculateResult(){
        var a = parseFloat(x.value);
        var b = parseFloat(y.value);
        var c = parseFloat(z.value);
        var res = a * b + c;

        if(!isNaN(res)){
                ans.value = res;
        }
        else {
                ans.value = '';
        }
}
