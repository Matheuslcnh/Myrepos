function verificar(){
    var data = new Date()
    var ano = data.getFullYear()
    var fano = document.getElementById('txtano')
    var res = document.getElementById('res')
    if (fano.value.length == 0 || Number(fano.value) > ano){
        alert('[Erro] Verifique os dados e tente novamente!')
    } else {
        var fsex = document.getElementsByName('radsex')
        var idade = ano - Number(fano.value)
        var genero = ''
        var img = document.createElement('img')
        img.setAttribute('id', 'foto')
        if (fsex[0].checked){
            genero = 'Homem'
            if (idade >= 0 && idade < 10){
                //Crianca
                img.setAttribute('src', 'bebe-mas.png')
            } else if (idade < 21){
                //jovem
                img.setAttribute('src', 'jovem-mas.png')
            } else if (idade < 50){
                //Adulto
                img.setAttribute('src', 'adulto-mas.png')
            } else {
                //idoso
                img.setAttribute('src', 'idoso-mas.png')
            }
        } else if (fsex[1].checked) {
            genero = 'Mulher'
            if (idade >= 0 && idade < 10){
                //Crianca
                img.setAttribute('src', 'bebe-fem.png')
            } else if (idade < 21){
                //jovem
                img.setAttribute('src', 'jovem-fem.png')
            } else if (idade < 50){
                //Adulto
                img.setAttribute('src', 'adulto-fem.png')
            } else {
                //idoso
                img.setAttribute('src', 'idoso-fem.png')
            }
        }
        res.style.textAlign = 'center'
        res.innerHTML = 'Detectamos ' + genero + ' com '  + idade + ' anos'
        res.appendChild(img)
    }
}