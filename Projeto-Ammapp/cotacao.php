<?php include 'includes/header.php'; ?>

    <h1 class="faixacotacao">Proteção Veicular AMMAPP</h1>

    <div style="text-align: left;">

        <h2 id="textcotacao">Solicite sua cotação</h2>

        <form action="enviar_cotacao.php" method="POST" onsubmit="return fazerCotacao();">

            <input type="hidden" name="afiliado" value="<?php echo $idAfiliado?>" id="afiliado" />
            <div class="row">
            
            <label for="nome" class="txt-labels">Nome completo</label>
            <div style="padding-bottom:20px">
            <input required type="text" placeholder="Insira aqui o seu nome" name="nome" id="nome" class="inputs" />
            </div>
            
            <label for="celular" class="txt-labels">Celular</label>
            <div style="padding-bottom:20px">
            <input type="text" required placeholder="(XX) XXXX-XXXX" name="celular" id="celular" class="inputs"/>
            </div>
            
            <label for="placa" class="txt-labels">Placa</label>
            <div style="padding-bottom:20px">
            <input type="text" required placeholder="ABC-1234" name="placa" id="placa" class="inputs"/>
            </div>
            
            <label for="marcamodelo" class="txt-labels">Marca/Modelo</label>
            <div style="padding-bottom:20px">
            <input type="text" required placeholder="Insira a marca e modelo do seu carro" name="marcamodelo" id="marcamodelo" class="inputs"/>
            </div>
            
            <label for="versao" class="txt-labels">Vers&atilde;o</label>
            <div style="padding-bottom:20px">
            <input type="text" required placeholder="Ex: Plus" name="versao" id="versao" class="inputs"/>
            </div>
            
            <label for="motor" class="txt-labels">Motor</label>
            <div style="padding-bottom:20px">
                <input type="text" required placeholder="Ex: 1.0" name="motor" id="motor" class="inputs"/>
                </div>
                    <label for="ano" class="txt-labels">Ano</label>
                        <div style="padding-bottom:20px">
                            <select name="ano" required class="input-select">
                                <option value="">Selecione</option>
                                <option value="0km">0 KM</option>
                                <option value="2025">2025</option>
                                <option value="2024">2024</option>    
                                <option value="2023">2023</option>    
                                <option value="2022">2022</option>    
                                <option value="2022">2021</option>
                                <option value="2020">2020</option>
                                <option value="2019">2019</option>
                                <option value="2018">2018</option>
                                <option value="2017">2017</option>
                                <option value="2016">2016</option>
                                <option value="2015">2015</option>
                                <option value="2014">2014</option>
                                <option value="2013">2013</option>
                                <option value="2012">2012</option>
                                <option value="2011">2011</option>
                                <option value="2010">2010</option>
                                <option value="2009">2009</option>
                                <option value="2008">2008</option>
                                <option value="2007">2007</option>
                            </select>
                        </div>
                    </div>
                <div class="row" style="text-align: center;">
                <input type="submit" class="botao-cotacao" value="Fazer cotação" />
            </div>
        </form>
    </div>

<?php include 'includes/footer.php'; ?>

    <script>
        function fazerCotacao() {
        alert("Sua solicitação de cotação foi enviada com sucesso\nAguarde nosso retorno.");
        return true
        }
    </script>
