// fetch("test.json").then(r => r.text()).then(t => console.log(t)) // full string olarak döndürür
// fetch("test.json").then(r => r.json()).then(t => console.log(t)) // json olarak döndürür










function sahte_form() {
    let formData = new FormData();
    formData.append('username ', 'Sahte Veri');
    formData.append('userpassword', '321321');

    fetch("form_verileri.php",{method:"POST",body:formData})
    .then(function(response){return response.text();})
    .then(function(data) {
        document.getElementById("cevap").innerHTML = "Cevap : " +data;
    })
    .catch(function(error) {
        document.getElementById("cevap").innerHTML = "Hata : " + error;
    });
    
}




function sahte_form2() {
  let formData = new FormData();
  formData.append("username ", "Sahte Veri2");
  formData.append("userpassword", "17052022");

  fetch("form_verileri.php", { method: "POST", body: formData })
    .then(function (response) {
      return response.text();
    })
    .then(data => {
      document.getElementById("cevap").innerHTML = "Cevap : " + data;
    })
    .catch(error => {
      document.getElementById("cevap").innerHTML = "Hata : " + error;
    });
}


document.addEventListener('submit', (e)=>{

    let form = e.target;

    start_Request();
    fetch(form.action,{method:form.method,body:new FormData(form)})
    .then(response => response.text())
    .then(data => {
        handle_data(data);
    })
    .catch(error => {
        console.error(error);
    });

    e.preventDefault();




});