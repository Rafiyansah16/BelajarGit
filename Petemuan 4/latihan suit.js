var tanya = true;

while (tanya){
    // menentukan pilihan player
    var pilihanPlayer = prompt('masukan pilihan kamu : \n jempol,telunjuk,kelingking');
    //menentukan pilihan computer
    var pilihanComputer = Math.random();
    //console.log(pilihanComputer);
    if (pilihanComputer <0.34){
        pilihanComputer = "jempol";
    } else if (pilihanComputer >= 0.34 && pilihanComputer <0.67){
        pilihanComputer = "telunjuk"
    } else {
        pilihanComputer = "kelingking";
    }
    // console.log(pilihanComputer);

    // menentukan rules permainan
    if (pilihanPlayer == pilihanComputer){
        hasil = "seri"
    } else if (pilihanPlayer == "jempol"){
        hasil = pilihanComputer == "telunjuk" ? "menang" : "Kalah";
    } else if (pilihanPlayer == "telunjuk"){
        hasil = pilihanComputer == "kelingking" ? "menang" : "kalah";
    } else if (pilihanPlayer == "kelingking"){
        hasil = pilihanComputer == "jempol" ? "menang" : "kalah"
    } else {
        hasil = "pilihan tidak sesuai";
    }


    // menampilkan hasil 
    alert('pilihan kamu adalah :' + pilihanPlayer + " dan pilhan Computer adalah :" + pilihanComputer + "\n Maka hasil-nya,kamu :" + hasil);

    tanya = confirm('Apakah anda ingin bermain lagi ?')
   
}
alert('Terimakasih Telah Bermain')