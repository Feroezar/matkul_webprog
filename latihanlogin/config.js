document.getElementById("txt_nama").onkeyup = function(){
    let nama = document.getElementById("txt_nama").value;
    let txnama = nama.toUpperCase();
    document.getElementById("txt_nama").value = txnama;
}
document.getElementById("txt_pasw2").onchange = function(){
    let pass1 = document.getElementById("txt_pasw").value;
    let pass2 = document.getElementById("txt_pasw2").value;

    if(pass1 === pass2){
        alert("oke password sama");
        document.getElementById("btn_simpanuser").disabled = false;
    }else{
        document.getElementById("btn_simpanuser").disabled = true;
        alert("password tidak sama")
    }
}