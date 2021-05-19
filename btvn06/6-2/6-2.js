$(document).ready( () =>{
    $("#sidebar").fadeIn(1000);
    $(".main-page").fadeIn(1000);        
})

var CurrentID=5;

function deleteItem (id) {
    const sidebar=$("#sidebar");
    const itemDelete=$(`#${id}`);

    if(id>0)
    {
        itemDelete.fadeOut(1000);
        sidebar.removeChild(itempDelete);
    }

}

function addItem() {

    CurrentID+=1;
    const newItem=document.createElement("a");
    const sidebar=document.getElementById("sidebar");
    const dataItem=document.getElementsByName("adding-item")[0];

    if(dataItem.value!="")
    {
        newItem.innerText=dataItem.value;
        newItem.id=CurrentID;
        newItem.href="#";
        newItem.classList="list-group-item list-group-item-action";
        newItem.ondblclick = () =>deleteItem(newItem.id);
        newItem.style.display="none";
        sidebar.appendChild(newItem);
        $(`#${CurrentID}`).fadeIn(1000);
        
    }
    dataItem.value="";
}

function changeColor(color, pos) {
    if(pos==1) {
        
        $("#item-1").removeClass("black");
        $("#item-1").removeClass("gold");
        $("#item-1").removeClass("white");

       $("#item-1").addClass(color);
    }

    if(pos==2) {
        
        $("#item-2").removeClass("black");
        $("#item-2").removeClass("gold");
        $("#item-2").removeClass("white");

       $("#item-2").addClass(color);
    }
}