    const font = 0.45359237;

    function energiaKalkulalas(){
        var tevekenyseg = document.getElementById('tevekenyseg').value;
        var sulyKg = document.getElementById('kg').value;
        var perc = document.getElementById('perc').value;
        console.log(tevekenyseg,sulyKg,perc);
        var t = tevekenysegKcal(tevekenyseg);
        var s = energiaFogyasSzorzo(sulyKg);
        var eredmenyP = document.getElementById('kcal');
        eredmenyP.textContent =  Math.round((t*s)*perc)+' kcal';
    }

    function tevekenysegKcal(tevekenyeg){
		if(tevekenyeg == "Séta") t=1.1;
        else if(tevekenyeg == "Kocogás") t=1.5;
        else if(tevekenyeg == "Futás") t=1.8;
        else t = 1;

        return t;
    }

    function energiaFogyasSzorzo(sulyInKg){
     var sulyInFont = (sulyInKg/font);
     var szorzo = Math.round((sulyInFont/20));
     return szorzo;
    }
