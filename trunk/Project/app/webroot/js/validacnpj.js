
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

  if (cnpj == "")
        alert("Preencha o campo CNPJ.");

  l = cnpj.length;
  for (i = 0; i < l; i++) {
        caracter = cnpj.substring(i,i+1)
        if ((caracter >= '0') && (caracter <= '9'))
           strNum = strNum + caracter;
  };

  if(strNum.length != 14)
        alert("CNPJ deve conter 14 caracteres.");

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
        alert("CNPJ inv�lido.");

  return ("")

}
