function append(value){
    document.getElementById("dis").value += value;
}

function clearDisplay() {
    document.getElementById("dis").value= '';
}

function clac(){
    try{
        const result = eval(document.getElementById("dis").value);
        document.getElementById("dis").value = result;
    }
    catch(e){
        alert("Invalid!!!")
    }
}