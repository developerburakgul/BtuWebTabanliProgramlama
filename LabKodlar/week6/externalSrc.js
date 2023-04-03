var sayi = 20.22;
let sabit = 17.05;
var sonuc = sabit * sayi;
var castliSonuc = parseInt(sabit * sayi);

console.log("a x b = " + sonuc);
console.log("cast ile hesaplanan a x b = " + castliSonuc);

function fonk1(sabit, sayi) {
  return sabit * sayi;
}
// bu şekilde default değer atayamazsın default değerler sağ tarafta olmalı yada sağ taraftaki değişkende default değere sahip olmalı
// function fonk1(sabit=3.14, sayi) {
//   return sabit * sayi;
// }

// console.log(fonk1(2,10))

var dizi = [1, 2.1, 3]; // dizi karışık tipte olabilir

for (let index = 0; index < dizi.length; index++) {
  dizi[index] = dizi[index] * 5;
}

var dizi2 = [1, 2, "3"]; // "3" ü integera çevirir çarpmada

for (let index = 0; index < dizi2.length; index++) {
  dizi2[index] = dizi2[index] * 5;
}

for (let index = 0; index < dizi2.length; index++) {
  dizi2[index] = dizi2[index] + 2;
}

var nesne = { a: 3, b: "b degiskeni", dizix: dizi2 }; // nesnenin a özelliği 3 değerini tutmaktadır
console.log(nesne["a"]);

console.log(Object.keys(nesne)); // nesnein property lerinin bir dizisini verir

// function uyari (txt){
//   alert(txt)
// }

// default olarak mesaj yok yazar
function uyari(txt = "mesaj yok") {
  alert(txt);
}

var div_mesaj = document.getElementById("mesaj");
// div_mesaj.innerHTML = "yeni <a href = 'javascript:uyari(\"Bir yeni mesajiniz var\")'> mesaj </a>";
div_mesaj.innerHTML = "yeni <a href = 'javascript:uyari()'> mesaj </a>";
