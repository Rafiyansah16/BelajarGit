var tanya = true;

while (tanya) {
    // menentukan pilihan player

var pilihanPlayer = prompt('Masukkan pilihan kamu : \n batu,gunting,kertas');
// menentukan pilihan computer
var pilihanComputer = Math.random();
// console.log(pilihanComputer);
if (pilihanComputer < 0.34) {
    pilihanComputer = "Batu";
} else if (pilihanComputer >= 0.34 && pilihanComputer < 0.67) {
    pilihanComputer = "Gunting";
} else {
    pilihanComputer= "Kertas";
}
// console.log(pilihanComputer);

// menentukan rules permainan
if (pilihanPlayer == pilihanComputer) {
    hasil = "Seri";
} else if (pilihanPlayer == "batu") {
    // if (pilihanComputer == "Gunting") {
        // hasil = "Menang";
        // } else 
        // hasil = "Kalah"

        hasil = pilihanComputer == "Gunting" ? "Menang" : "Kalah"; 
        } else if  (pilihanPlayer == "Gunting"){
            hasil = pilihanComputer == "Kertas" ? "Menang" : "Kalah";
        } else if (pilihanPlayer == "Kertas"){
            hasil = pilihanComputer == "batu" ? "Menang" : "Kalah";
        } else {
            hasil ="Pilihan tidak sesuai";
        }

        //menampilkan hasil
        alert ('Pilihan kam adalah : ' + pilihanPlayer + "dan pilihanComputer adalah :" + pilihanComputer + "\n Maka hasil-nya, kamu : " + hasil);
        tanya = confirm ('Apakah anda ingin bermain lagi ?');
} 
   
    alert('Terimakasi sudah bermain')