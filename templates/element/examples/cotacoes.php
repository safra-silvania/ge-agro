<style>
    .imagenet-widget-tabela {
        width: 100% !important;
        font: 0.813em/1.5em "Arial", sans-serif !important;
    }
    .imagenet-widget-tabela thead td {
        display: none !important;
        background: #bc8c53 !important;
    }
    .imagenet-widget-tabela tr td {
        /* margin: 1em 0px !important; */
        /* padding: 0px !important; */
        color: #747474 !important;
        font-family: Arial, sans-serif !important;
        font-size: 13.008px !important;
        /* background-color: #ffffff !important; */
    }
    .imagenet-widget-tabela img {
        display: none !important;
    }
    .imagenet-widget-tabela tbody tr:nth-child(2n) {
        background: rgb(245, 244, 243) !important;
    }
</style>


<section>
    <h3><span>Cotações</span></h3>
    <script type="text/javascript" src="https://www.cepea.esalq.usp.br/br/widgetproduto.js.php?fonte=arial&tamanho=10&largura=400px&corfundo=dbd6b2&cortexto=333333&corlinha=ede7bf&id_indicador%5B%5D=91&id_indicador%5B%5D=77&id_indicador%5B%5D=119&id_indicador%5B%5D=54&id_indicador%5B%5D=23"></script>
    <!--
    <table>
        <tr>
            <td>Soja</td>
            <td>R$ 0,00</td>
        </tr>
        <tr>
            <td>Milho</td>
            <td>R$ 0,00</td>
        </tr>
        <tr>
            <td>Sorgo</td>
            <td>R$ 0,00</td>
        </tr>
        <tr>
            <td>Arroz</td>
            <td>R$ 0,00</td>
        </tr>
        <tr>
            <td>Girassol</td>
            <td>R$ 0,00</td>
        </tr>
        <tr>
            <td>Milheto</td>
            <td>R$ 0,00</td>
        </tr>
        <tr>
            <td>Feijão</td>
            <td>R$ 0,00</td>
        </tr>
        <tr>
            <td>Algodão</td>
            <td>R$ 0,00</td>
        </tr>
        <tr>
            <td>Trigo</td>
            <td>R$ 0,00</td>
        </tr>
    </table>
    -->
    <p class="more">
        <?php
        echo $this->Html->link(
            'Ver Mais',
            ['controller' => 'site', 'action' => 'cotacoes'],
            ['escape' => false, 'title' => 'Cotações']
        );
        ?>
    </p>
</section>
