
        <?php
          
          header('Access-Control-Allow-Origin:*');
          
        $news = [
           [
             'imagem'=>'https://super.abril.com.br/wp-content/uploads/2022/11/SI_omicron_site.jpg?quality=90&strip=info&resize=850,567',
             'nota'=>'Uma nova variante do coronavírus está dando as caras no Brasil. A BQ.1 apareceu pela primeira vez no Amazonas                 em 20 de outubro. Segundo as secretarias estaduais de saúde, ela causou na última segunda (7) pelo menos quatro casos                 de COVID-19 no Rio de Janeiro, outro no Rio Grande do Sul e dois em São Paulo (em um deles, o paciente tinha                          comorbidades e morreu nesta terça, dia 8).'  
           ],
            [
              'imagem'=>'https://tm.ibxk.com.br/2022/11/07/07093416687046.jpg?ims=1120x420',
              'nota'=>'As queimadas que afligem todos os biomas nacionais são causadas, em sua maioria, pelo ser humano. É o que                    mostra um estudo feito por pesquisadores brasileiros que analisou dados do Instituto Nacional de Pesquisas Espaciais                  (Inpe) de 2011 a 2020'  
            ],
        ];
        
        exit(json_encode($news));
        ?>
