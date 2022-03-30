function validaUser(){
    let pai = document.getElementById('res');
    if(document.querySelector('.usuario').value == ''){
        if(!document.getElementsByClassName('alerta').length){
            let p1 = document.createElement('p');
            let txt = 'Preencha todos os campos';
            p1.innerHTML = txt;
            p1.style.color = 'red';
            p1.className = 'alerta';
            p1.style.fontSize = '1.4vw';
            p1.style.margin = '0 auto';
            pai.appendChild(p1);
        }
    }
           
        

}
