
<html>

	<head>
		<title>Cadastro de Empresa</title>
        <html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br" xml:lang="pt-br">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" type="text/css" href="../../webroot/css/style.css">
	</head>
	
	<body>
        <!-- NAVEGAÇÃO PRINCIPAL -->
        <ul id="Menu_Home">
        <a href="index.ctp"><img src="../../webroot/img/button-home.png" alt="Home" id="button-home"></a>
        </ul>

		<!-- TÍTULO -->
                <h1>Cadastrar Empresa</h1>

		<!-- INICIO FORMULÁRIO -->
		<form method="post" action="" autocomplete="off" name="formularioEmpresa">

                <!-- CAMPOS DE PREENCHIMENTO -->
                <div>

                    <!-- INICIO DADOS DE EMPRESA -->
                    <div style="width:50%; float:left;" align="center">
                        <fieldset>
                            <legend>Dados da Empresa</legend>

                            <div>
                                <!-- ÁREA NOME -->
                                <div>
                                    <label for="nome"><b>Nome</b></label>
                                    <input required type="text" id="nome"/>
                                </div>

                                <!-- ÁREA CNPJ -->
                                <div>
                                    <label for="cnpj"><b>CNPJ</b></label>
                                    <input required pattern="[0-9]{2}[.][0-9]{3}[.][0-9]{3}[/][0-9]{4}[-]{1}[0-9]{2}" type="text" id="cnpj" placeholder="Ex: 12.345.678 ou 1234-56" 
                                    maxlength="10"/>
                                </div>

                                <!-- ÁREA SIGLA -->
                                <div>
                                    <label for="sigla"><b>Sigla</b></label>
                                    <input required type="text" id="sigla"/>
                                </div>

                                <!-- ÁREA ENDEREÇO -->
                                <p>
                                <div>
                                    <b>Endereço:</b><br>
                                    <label for="cep">CEP</label>
                                    <input required pattern="[0-9]{5}[-][0-9]{3}" type="text" id="cep" placeholder="Ex: 12345-678" />
                                </div>

                                <div>
                                    <label for="logradouro">Logradouro</label>
                                    <input required type="text" id="logradouro"/>
                                </div>


                                <div>
                                    <label for="cidade">Cidade</label>
                                    <input required type="text" id="cidade" maxlength="20"/>
                                </div>

                                <div>
                                    <label for="bairro">Bairro</label>
                                    <input required type="text" id="bairro" maxlength="20"/>
                                </div>

                                <div>
                                    <label for="numero">Número</label>
                                    <input required type="text" id="numero" pattern="[0-9]{1,10}"/>
                                </div>

                                <div>
                                    <label for="complemento">Complemento</label>
                                    <input type="text" id="complemento"/>
                                </div>

                                <div>
                                    <label for="estado">Estado</label>
                                    <select required id="estado">
                                        <option value="">Selecione o estado</option>
                                        <option value="AC">AC</option>
                                        <option value="AL">AL</option>
                                        <option value="AP">AP</option>
                                        <option value="AM">AM</option>
                                        <option value="BA">BA</option>
                                        <option value="CE">CE</option>
                                        <option value="DF">DF</option>
                                        <option value="ES">ES</option>
                                        <option value="GO">GO</option>
                                        <option value="MA">MA</option>
                                        <option value="MT">MT</option>
                                        <option value="MS">MS</option>
                                        <option value="MG">MG</option>
                                        <option value="PA">PA</option>
                                        <option value="PB">PB</option>
                                        <option value="PR">PR</option>
                                        <option value="PE">PE</option>
                                        <option value="PI">PI</option>
                                        <option value="RJ">RJ</option>
                                        <option value="RN">RN</option>
                                        <option value="RS">RS</option>
                                        <option value="RO">RO</option>
                                        <option value="RR">RR</option>
                                        <option value="SC">SC</option>
                                        <option value="SP">SP</option>
                                        <option value="SE">SE</option>
                                        <option value="TO">TO</option>
                                    </select>
                                </p>
                                </div>


                                <!-- ÁREA TELEFONES -->
                                <div>
                                    <div>
                                        <label for="telefone"><b>Telefone</b></label>
                                        <input required pattern="[(][0-9]{2}[)][0-9]{4}[-][0-9]{4}" type="text" id="telefone" placeholder="Ex: (12)3456-7890" />
                                    </div>

                                    <div>
                                        <label for="telefoneOpcional"><b>Telefone 2 (Opcional)</b></label>
                                        <input pattern="[(][0-9]{2}[)][0-9]{4}[-][0-9]{4}" type="text" id="telefoneOpcional" placeholder="Ex: (12)3456-7891"/>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                    <!-- FIM DADOS EMPRESA -->

                    <!-- INÍCIO DADOS DO SPONSOR -->
                    <div align="center">
                        <fieldset>
                            <legend>Dados do Sponsor</legend>

                            <!-- ÁREA NOME SPONSOR -->
                            <div>
                                <label for="nomeSponsor"><b>Nome</b></label>
                                <input required type="text" id="nomeSponsor" pattern="(.{1,50})"/>
                            </div>
                            
                            <!-- ÁREA EMAIL SPONSOR -->
                            <div>
                                <label for="emailSponsor"><b>Email</b></label>
                                <input required type="email" id="emailSponsor" placeholder="exemplo@email.com" />
                            </div>

                            <!-- ÁREA TELEFONE SPONSOR -->
                            <div>
                                <label for="telefoneSponsor"><b>Telefone</b></label>
                                <input required pattern="[(][0-9]{2}[)][0-9]{4}[-][0-9]{4}" type="text" id="telefoneSponsor"  placeholder="Ex: (12)3456-7891"/>
                            </div>
                        </fieldset>
                    </div> 
                    <!-- FIM DADOS SPONSOR -->

                    <!-- INICIO DADOS FINANCEIROS -->
                    <div align="center">
                        <fieldset>
                            <legend>Dados do Financeiro</legend>

                            <!-- ÁREA NOME FINANCEIRO -->
                            <div>
                                <label for="nomeFinanceiro"><b>Nome</b></label>
                                <input required type="text" id="nomeFinanceiro" pattern="(.{1,50})"/>
                            </div>

                            <!-- ÁREA EMAIL FINANCEIRO -->
                            <div>
                                <label for="emailFinanceiro"><b>Email</b></label>
                                <input required type="email" id="emailFinanceiro" placeholder="exemplo@email.com" />
                            </div>

                            <!-- ÁREA TELEFONE FINANCEIRO -->
                            <div>
                                <label for="telefoneFinanceiro"><b>Telefone</b></label>
                                <input required pattern="[(][0-9]{2}[)][0-9]{4}[-][0-9]{4}" type="text" id="telefoneFinanceiro"  placeholder="Ex: (12)3456-7891"/>
                            </div>
                        </fieldset>
                    </div> 
                    <!-- FIM DADOS FINANCEIRO -->

                    <!-- INICIO DADOS SEPG -->
                    <div align="center">
                        <fieldset>
                            <legend>Líder SEPG</legend>
                            
                            <!-- ÁREA NOME SEPG -->
                            <div>
                                <label for="nomeSepg"><b>Nome</b></label>
                                <input required type="text" id="nomeSepg" pattern="(.{1,50})"/>
                            </div>
                            
                            <!-- ÁREA EMAIL SEPG -->
                            <div>
                                <label for="emailSepg"><b>Email</b></label>
                                <input required type="email" id="emailSepg" placeholder="exemplo@email.com" />
                            </div>

                            <!-- ÁREA TELEFONE SEPG -->
                            <div>
                                <label for="telefoneSepg"><b>Telefone</b></label>
                                <input required pattern="[(][0-9]{2}[)][0-9]{4}[-][0-9]{4}" type="text" id="telefoneSepg" 
                                placeholder="Ex: (12)3456-7891"/>
                            </div>   
                        </fieldset>
                    </div> 
                    <!-- FIM DADOS SEPG -->

                </div>
            

            <!-- BOTÕES -->
            
            <fieldset>
            <div align="center"> 
                <input type="button" src="index.html" class="button" value="Voltar"/>
                <input type="reset" class="button" value="Limpar"/>
                <input type="submit" class="button" value="Salvar"/>   
            </div>
            </fieldset>

        </form>
	</body>

</html>