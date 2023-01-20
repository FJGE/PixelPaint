let colorGuardado;
let cellsPainted = [];
let colors1 = [
    "black","gray","darkred","red","coral","yellow","seagreen","dodgerblue","royalblue","purple"
];
let colors2 = [
    "white","silver","sienna","pink","gold","lemonchiffon","lime","lightskyblue","cornflowerblue","thistle"
];

function placeColors(idRow){
    if(idRow == 10){
        for (i = 0; i < colors1.length; i++) {
            document.getElementById(idRow).style.backgroundColor = colors1[i];
            idRow++;
        };
    }

    else{
        for (i = 0; i < colors2.length; i++) {
            document.getElementById(idRow).style.backgroundColor = colors2[i];
            idRow++;
        };
    }
};

function getColor(id){
    colorGuardado = document.getElementById(id).style.backgroundColor;
    document.getElementById('colorName').innerHTML = `<b>${colorGuardado}</b>`;
    return colorGuardado;
};

function Clean(){
    colorGuardado = "white";
    document.getElementById('colorName').innerHTML = `<b>Ninguno</b>`;
    cellsPainted.forEach(id => {
        Paint(id);
    });
};

function Paint(id){
    document.getElementById(id).style.backgroundColor = colorGuardado;
    cellsPainted.push(id)
};

placeColors(10);
placeColors(210);