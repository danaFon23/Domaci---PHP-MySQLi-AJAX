const selected = document.querySelector(".selected");
const optionsContainer = document.querySelector(".options-container");

const optionsList = document.querySelectorAll(".option");

selected.addEventListener("click", () => {      //Ovo nam suzi da kada kliknemo na strelicu da nam otvori ponudeljene odg, a kada pet kliknemo, da zatvori
    optionsContainer.classList.toggle("active");  //Ako je klasa aktvina kada klinkemo, ucini je neaktivnom, ako je neaktivna, ucini je aktivnom. Aktivna klasa je kada nam se otvori padajuci meni
});                                                /*Kod za dodavanje i uklanjanje aktivne klase*/


function selectBrand(){
    var x = document.getElementById("naziv_zanra");

    $.ajax({
        url:"prikaziKnjige.php",
        method: "POST",
        data:{
            id: x
        },
        success:function(data){
            $("ans").innerHTML(data);   //Prikazuje podatke o odabranom zanru
        }
    })
}


optionsList.forEach( o =>{
    o.addEventListener("click", () => {
        selected.innerHTML = o.querySelector("option").innerHTML;
        optionsContainer.classList.remove("active");
        selectBrand();
    });
}); //Kada kliknemo na neku opciju, da se ona zadrzi na Izaberi zanr i da se zatvore ostale opcije




/*
document.getElementById('.option').onclick = function() {
    var checked = document.querySelectorAll('#knjige :checked');
    var selected = [...checked].map(option => option.value);
    alert(selected);
}
*/



