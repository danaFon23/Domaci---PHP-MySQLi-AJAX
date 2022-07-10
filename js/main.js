


const selected = document.querySelector(".selected");
const optionsContainer = document.querySelector(".options-container");

const optionsList = document.querySelectorAll(".option");

selected.addEventListener("click", () => {      //Ovo nam sluzi da kada kliknemo na strelicu da nam otvori ponudeljene odg, a kada opet kliknemo, da zatvori
    optionsContainer.classList.toggle("active");  //Ako je klasa aktvina kada klinkemo, ucini je neaktivnom, ako je neaktivna, ucini je aktivnom. Aktivna klasa je kada nam se otvori padajuci meni
    
});                                                /*Kod za dodavanje i uklanjanje aktivne klase*/


  
optionsList.forEach( o =>{
    o.addEventListener("click", () => {
        selected.innerHTML = o.querySelector("option").innerHTML;  
        var id_zanra = o.querySelector("option").value;                             //$(".selected").text();
        optionsContainer.classList.remove("active");                             //Kada kliknemo na neku opciju, da se ona zadrzi na Izaberi zanr i da se zatvore ostale opcije
        
            //window.alert(id_zanra);
            
            $.ajax({
                url:"prikaziKnjige.php",
                method: "POST",
                data: 
                {
                    id_zanra : id_zanra
                },
                success:function(data){
                    $("#ans").html(data);   //Prikazuje podatke o odabranom zanru
                }
                
            });

           });
           
            
        });
        
    //}); 
    
//}); 

   /* var value = $(this).find(":selected").val();
    //document.getElementById("zanrovi").value; //OVDE JE PROBLEM

    $.ajax({
        url:"prikaziKnjige.php",
        datatype: "json",
        method: "POST",
        data:  value,
        
        success:function(data){
            $("#ans").html(data);   //Prikazuje podatke o odabranom zanru
    
    
})*/



   



/*
document.getElementById('.option').onclick = function() {
    var checked = document.querySelectorAll('#knjige :checked');
    var selected = [...checked].map(option => option.value);
    alert(selected);
}
*/



