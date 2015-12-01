<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class Post extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = [
            [
                'id'=>1,
                'title'=>'Monitor LG 29UM67 mostra a produtividade dos ultrawide',
                'resume'=>'O INFOlab recebeu, recentemente, um monitor da LG de 29 polegadas ultrawide e, desde que foi montado, já me convenceu dos benefícios deste tipo de monitor para a produtividade, particularmente em escritórios. Com uma razão de 21:9 entre largura e altura (em contraste aos monitores widescreen 16:9 ou os antigos e quadradões 12:9), ele é excepcionalmente largo, com uma resolução de 2.560 po 1.080 pixels. A altura (e resolução vertical) […]',
                'content'=>'<p>O INFOlab recebeu, recentemente, um monitor da LG de 29 polegadas ultrawide e, desde que foi montado, já me convenceu dos benefícios deste tipo de monitor para a produtividade, particularmente em escritórios.

</p><p>    Com uma razão de 21:9 entre largura e altura (em contraste aos monitores widescreen 16:9 ou os antigos e quadradões 12:9), ele é excepcionalmente largo, com uma resolução de 2.560 po 1.080 pixels. A altura (e resolução vertical) são as mesmas de um monitor widescreen de 24 polegadas Full HD, mas a largura é maior para acomodar os 640 pixels extras da horizontal.

</p><p>    Em uso diário, para escritório, ele é ótimo. O espaço extra permite que duas janelas sejam colocadas lado a lado, cada com a resolução de 1.280 por 1.080 pixels. Trabalhar essa quantidade de informações na mesma tela requer um pouco de adaptação, mas é fácil se acostumar.

</p><p>    O recurso Snap, do Windows, se mostra particularmente útil nesse monitor, já que janelas que tomem a tela toda tendem a ser mal utilizadas. A maior parte dos sites não está preparada para tanto espaço e deixa muito espaço em branco inutilizado. Nesse caso, abrir duas janelas de um navegador, além de tornar as informações mais visíveis, permite que se redistribuam as abas para uma melhor organização.

</p><p>    Enquanto um documento de Word, por exemplo, não se beneficia muito de uma telona como essa, trabalhar em planilhas do Excel se torna muito mais prazeroso.

</p><p>    Para consumo de conteúdo o LG29UM67 não é ideal, já que a maior parte do conteúdo é criada na proporção de 16:9, o que deixa barras verticais pretas nas laterais, similar ao que ocorre quando se assiste a um filme antigo em um monitor 16:9. Games podem se adaptar melhor a quaisquer tamanhos de tela, mas nem todos têm essa opção, portanto faça a pesquisa antes de escolher um ultrawide para jogos.</p>',
                'date'=>'25/09/2015',
                'User'=>[
                    'id'=>'1',
                    'name'=>'O Leprechaun'
                ]
            ],
            [
                'id'=>2,
                'title'=>'Corsair cria um console para gamers de PC',
                'resume'=>'Não é difícil montar um desktop que ultrapasse em muito o poder de renderização gráfica de um console de última geração. No entanto, montar esse mesmo computador com um formato similar ao de um console é um tarefa um pouco mais complicada. A Corsair resolveu facilitar essa empreitada com o case Bulldog. […]',
                'content'=>'<p>Não é difícil montar um desktop que ultrapasse em muito o poder de renderização gráfica de um console de última geração. No entanto, montar esse mesmo computador com um formato similar ao de um console é um tarefa um pouco mais complicada. A Corsair resolveu facilitar essa empreitada com o case Bulldog.

</p><p>Fazendo jus à sua fama de fabricante de memórias de alta performance, a Corsair não poupou esforços com essa máquina. Trata-se de um case compacto equipado com uma fonte de 600 watts, uma placa-mãe mini ITX de alto desempenho e uma dupla de sistemas de refrigeração líquida (um para a CPU e outro opcional para a GPU). Em resumo, a intenção da Corsair é que o Bulldog suporte uma configuração capaz de rodar games em 4K.

</p><p>Até recentemente, tal objetivo exigiria pelo menos duas placas de vídeo com pool grande de memória em SLI/Crossfire, o que seria impossível de implementar em uma placa mini ITX. Mas é bem provável que o lançamento de hoje não seja só um acaso de calendário. As primeiras placas dual GPU que conseguem atingir frame rates razoáveis em 4K acabaram de sair. Um exemplo é a Titan X da Nvidia, cujo TDP de 250 W se encaixa com sobra no Bulldog. De qualquer maneira, vale lembrar que o suporte a placas grandes como a Titan X também faz com o que o design do case seja um pouco maior do que poderia ser.

</p><p>Quanto ao sistema de refrigeração líquida, o cooler de CPU H55 vem integrado em todos os modelos. O cooler de GPU que também pode ser adicionado no pacote é o HG10. Além disso, a Corsair trabalhou com a Nvidia e MSI para oferecer versões especiais com refrigeração líquida integrada das placas Titan X, GTX 980, GTX 980 Ti e GTX 970.

</p><p>A motherboard, por sua vez, suporta RAM DDR4, USB 3.1 e áudio surround 7.1. Claro, ela também tem espaço para ethernet e Wi-Fi. O preço inicial do Bulldog é de 399 dólares.</p>',
                'date'=>'20/09/2015',
                'User'=>[
                    'id'=>'1',
                    'name'=>'O Leprechaun'
                ]

            ],
            [
                'id'=>3,
                'title'=>'Computador para crianças Kano está em fase de pré-venda',
                'resume'=>'Depois de um Kickstarter bem sucedido, o computador educativo Kano agora pode ser comprado por qualquer pessoa. […]',
                'content'=>'<p>Depois de um Kickstarter bem sucedido, o computador educativo Kano agora pode ser comprado por qualquer pessoa.

</p><p>O hardware em si não é nenhuma novidade: trata-se simplesmente do Raspberry Pi Model B. O diferencial está no contexto em que ele é apresentado. Além do Pi, o kit do Kano inclui um teclado bluetooth, uma cobertura para o computador, um cabo HDMI e, crucialmente, um cartão SD com um sistema operacional educativo. Todo o processo de montagem é guiado tanto por um manual simples quanto pela própria cor dos componentes.

</p><p>Embora a parte física também seja bem interessante, é graças ao software que o Kano se diferencia. O Kano OS é um sistema completamente open source cuja interface foi projetada para familiarizar crianças com conceitos de programação através da modificação de jogos. Clássicos como Pong e Snake podem ser facilmente alterados pelo usuário com um sistema de blocos que lembra o NXT da Lego. Por trás dessa superfície, contudo, a criança está na verdade alterando parâmetros de um código escrito em Python. Quem quiser experimentar o sistema pode brincar com o jogo Pong neste link. Conforme a criança vence os desafios de modificação propostos pelo Kano, outros exemplos mais complexos vão sendo liberados. O sistema inclui até mesmo uma versão do Minecraft.

</p><p>O Kano está sendo vendido por 150 dólares (ou cerca de 421 reais, incluindo a taxa de entrega). Espera-se que as primeira unidades comecem a ser entregues em Outubro.</p>',
                'date'=>'25/09/2015',
                'User'=>[
                    'id'=>'1',
                    'name'=>'O Leprechaun'
                ]

            ]
        ];
        return view('posts/index', ['posts'=>$posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
