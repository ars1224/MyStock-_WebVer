function toggle(){
        var blurr = document.getElementById('blur');
        blurr.classList.toggle('active');
        var choice = document.getElementById('choice');
        choice.classList.toggle('active');
        var hide = document.getElementById('addItems');
        hide.classList.toggle('hide');
}

function show() {
  let pop1 = document.getElementById('PopUp_1');
  pop1.classList.toggle('active');
}

function pop() {
        let pop2 = document.getElementById('popUP_2');
        pop2.classList.toggle('active');
}