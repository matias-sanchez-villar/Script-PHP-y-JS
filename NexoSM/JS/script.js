
let arrayID = [];

const pintar = (number) =>
{
    $('#ScriptJS').append(`Ingresé al array y tengo el ID: ${number} <br>`);
}

const evento = () =>
{
    const id = $('#ID').val();

    if (id < 10 && (id % 2) == 0)
    {
        pintar(id);
        arrayID.push(id);
        sessionStorage.setItem("arrayID", JSON.stringify(arrayID));
    }

    location.replace("php/script.php?id="+id)

}

if(sessionStorage.getItem("arrayID"))
{
    arrayID = JSON.parse(sessionStorage.getItem("arrayID"));
    for (const iterator of arrayID) {
        pintar(iterator);
    }
}

$('#btnEnviar').click(function(e){
    e.preventDefault();
    evento();
});