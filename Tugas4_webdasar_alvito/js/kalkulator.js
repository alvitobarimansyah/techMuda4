function tambah() {
    var frm = window.document.getElementById("htmlKalkulator")
    var n1 = parseFloat(frm.firstNumber.value);
    var n2 = parseFloat(frm.secondNumber.value);
    var h5 = n1 + n2;

    frm.result.value = h5;

}

function kurang() {
    var frm = window.document.getElementById("htmlKalkulator")
    var n1 = parseFloat(frm.firstNumber.value);
    var n2 = parseFloat(frm.secondNumber.value);
    var h5 = n1 - n2;

    frm.result.value = h5;

}

function kali() {
    var frm = window.document.getElementById("htmlKalkulator")
    var n1 = parseFloat(frm.firstNumber.value);
    var n2 = parseFloat(frm.secondNumber.value);
    var h5 = n1 * n2;

    frm.result.value = h5;

}

function bagi() {
    var frm = window.document.getElementById("htmlKalkulator")
    var n1 = parseFloat(frm.firstNumber.value);
    var n2 = parseFloat(frm.secondNumber.value);
    var h5 = n1 / n2;

    frm.result.value = h5;

}
