
function ValidaCNPJ(cnpj) {

  var i = 0;
  var l = 0;
  var strNum = "";
  var strMul = "6543298765432";
  var character = "";
  var iValido = 1;
  var iSoma = 0;
  var strNum_base = "";
  var iLenNum_base = 0;
  var iLenMul = 0;
  var iSoma = 0;
  var strNum_base = 0;
  var iLenNum_base = 0;



  l = cnpj.length;
  for (i = 0; i < l; i++) {
        caracter = cnpj.substring(i,i+1)
        if ((caracter >= '0') && (caracter <= '9'))
           strNum = strNum + caracter;
  };



  strNum_base = strNum.substring(0,12);
  iLenNum_base = strNum_base.length - 1;
  iLenMul = strMul.length - 1;
  for(i = 0;i < 12; i++)
        iSoma = iSoma +
                        parseInt(strNum_base.substring((iLenNum_base-i),(iLenNum_base-i)+1),10) *
                        parseInt(strMul.substring((iLenMul-i),(iLenMul-i)+1),10);

  iSoma = 11 - (iSoma - Math.floor(iSoma/11) * 11);
  if(iSoma == 11 || iSoma == 10)
        iSoma = 0;

  strNum_base = strNum_base + iSoma;
  iSoma = 0;
  iLenNum_base = strNum_base.length - 1
  for(i = 0; i < 13; i++)
        iSoma = iSoma +
                        parseInt(strNum_base.substring((iLenNum_base-i),(iLenNum_base-i)+1),10) *
                        parseInt(strMul.substring((iLenMul-i),(iLenMul-i)+1),10)

  iSoma = 11 - (iSoma - Math.floor(iSoma/11) * 11);
  if(iSoma == 11 || iSoma == 10)
        iSoma = 0;
  strNum_base = strNum_base + iSoma;
  if(strNum != strNum_base)
        alert("CNPJ incorreto.");

  return ("")

}
function checkCnpj(src){
	d = src;
	if (!validaCnpj(d.value)){
		d.setCustomValidity("Por favor, forneÃ§a um CNPJ vÃ¡lido no formato xx.xxx.xxx/xxxx-xx");
	}
	else{
		d.setCustomValidity("");
	}
}

function validaCnpj(cnpj){
	exp = /\.|\-|\//g
    cnpj = cnpj.toString().replace( exp, "" );
    var dv = cnpj.substr(cnpj.length-2,cnpj.length);
    cnpj = cnpj.substr(0,12);
    /*calcular 1º dígito verificador*/
    var soma;
    soma = cnpj[0]*6;
    soma += cnpj[1]*7;
    soma += cnpj[2]*8;
    soma += cnpj[3]*9;
    soma += cnpj[4]*2;
    soma += cnpj[5]*3;
    soma += cnpj[6]*4;
    soma += cnpj[7]*5;
    soma += cnpj[8]*6;
    soma += cnpj[9]*7;
    soma += cnpj[10]*8;
    soma += cnpj[11]*9;
    var dv1 = soma%11;
    if (dv1 == 10){
        dv1 = 0;
    }
    /*calcular 2º dígito verificador*/
    soma = cnpj[0]*5;
    soma += cnpj[1]*6;
    soma += cnpj[2]*7;
    soma += cnpj[3]*8;
    soma += cnpj[4]*9;
    soma += cnpj[5]*2;
    soma += cnpj[6]*3;
    soma += cnpj[7]*4;
    soma += cnpj[8]*5;
    soma += cnpj[9]*6;
    soma += cnpj[10]*7;
    soma += cnpj[11]*8;
    soma += dv1*9;
    var dv2 = soma%11;
    if (dv2 == 10){
        dv2 = 0;
    }
    var digito = dv1+""+dv2;
    if(dv == digito){ /*compara o dv digitado ao dv calculado*/
        return true;
    }else{
        return false;
    }
}