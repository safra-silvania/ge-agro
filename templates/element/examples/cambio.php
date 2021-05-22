<section>
    <h3><span>Câmbio <small id="data-cambio"></small></span></h3>
    <table>
        <tr>
            <td>Dolar</td>
            <td id="cotacao-dolar">-</td>
        </tr>
    </table>
</section>

<script>
    function adicionaZero(numero){
        if (numero <= 9) 
            return "0" + numero;
        else
            return numero; 
    }

    $(document).ready(function () {
        $.get("https://economia.awesomeapi.com.br/json/last/USD-BRL", function(result) {
            // $( ".result" ).html( data );
            let r = result.USDBRL;
            let data = new Date(r.create_date);
            let dataFormatada = (adicionaZero(data.getDate().toString()) + "/" + (adicionaZero(data.getMonth()+1).toString()) + "/" + data.getFullYear());

            let valor = r.bid;

            let valorFormatado = new Intl.NumberFormat('pt-BR', { maximumSignificantDigits: 3, style: 'currency', currency: 'BRL' }).format(valor);

            $("#data-cambio").html("("+dataFormatada+")");
            $("#cotacao-dolar").html(valorFormatado);
        });
    });
</script>