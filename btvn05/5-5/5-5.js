var sizeID=5;


function addItem() {

    sizeID+=1;
    const addingItem=document.getElementsByName("adding-item")[0];
    const currentItem=document.getElementById("sidebar");

    const newItem=document.createElement("a");
    newItem.id=sizeID;
    newItem.href="https://www.facebook.com/profile.php?id=100039320598007";
    newItem.classList = "list-group-item list-group-item-action";
    newItem.ondblclick = () => deleteItem(sizeID);
    if(addingItem.value!="")
    {
    newItem.innerText=addingItem.value;
    currentItem.appendChild(newItem);
    addingItem.value="";
    }
    
}

function deleteItem(id) {
    const sidebar=document.getElementById("sidebar");
    const idDelete=document.getElementById(id);
    sidebar.removeChild(idDelete);
}