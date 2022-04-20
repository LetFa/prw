function Verificar() {
    var data = new Date()
    var ano = data.getFullYear()
    var fano = document.getElementById('txtNasc')
    var res = document.getElementById('res')
    if (fano.value.legth == 0 || Number(fano.value) > ano) {
        window.alert('[ERRO] Verifique os dados e tente novamente')
    }else {
        var fsex = document.getElementsByName('radsex')
        var idade = ano - Number(fano.value)
        var genero = ''
        var img = document.createElement('img')
        img.setAttribute('id' ,'foto')
        if(fsex[0].checked){
            genero = 'Homem'
            if(idade >= 0 && idade <=12){
                //criança
                img.setAttribute('src', 'https://cdn.iconscout.com/icon/free/png-256/boy-avatar-4-1129037.png')
            }else if(idade < 21){
              //jovem
              img.setAttribute('src','https://cdn-icons-png.flaticon.com/512/146/146035.png')
            }else if(idade <=50){
               //adultos
               img.setAttribute('src','https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTuNfh5XEmL28p3fZftINhCjPR1g7V8IDWJ9-H58s0jyp4GMH_nWaRqFrRFu-6CJbaTdK0&usqp=CAU')
            }else {
                //idoso
                img.setAttribute('src', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQTNbAc2cL-MKHdIcwTJ7uEcF4woQSplLg4r0jAAwd-Z06MB6auHjbH7pfBg3mZ40rNgPE&usqp=CAU')
            }
        }else if(fsex[1].checked){
            genero = 'Mulher'
            if(idade >= 0 && idade <=12){
                //criança
                img.setAttribute('src', 'https://media.istockphoto.com/vectors/kid-with-inspiration-vector-id1225934263?k=20&m=1225934263&s=170667a&w=0&h=V-nSXSMJJ3u-UtKvoJcDzKOusfCAoQi2B2mPVaz__54=')
            }else if(idade < 21){
              //jovem
               img.setAttribute('src', 'https://static.vecteezy.com/ti/vetor-gratis/t1/2518038-jovem-modelo-personagem-avatar-em-desenho-animado-estilo-plano-icone-redondo-vetor.jpg')
            }else if(idade <=50){
               //adultos
               img.setAttribute('src', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTVKNy38wfvGKqs5oRzuMwpgywiTlF4FmHZ2JRDG2JUWXl3l7wHP_zcQ8adJLDvEMBsiCg&usqp=CAU')
            }else {
                //idoso
                img.setAttribute('src', 'https://static-public.klickpages.com.br/uploads/media/file/2350467/idoso.png')
            }
        }
        res.style.textAlign = 'center'
        res.innerHTML = 'Detectamos ' +genero+ ' com a idade de '+idade+ '!'
        res.appendChild(img)
    }
}