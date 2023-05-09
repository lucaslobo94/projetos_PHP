<html lang="pt-BR">
<header>
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap"
        rel="stylesheet"
    />
    <!-- fonts -->
    <title>Tabuada</title>
</header>
<style>
    * { /*reset CSS pegando todas as tags*/
        margin: 0; /*remover margem*/
        padding: 0; /*remover preenchimento interno*/
        box-sizing: border-box; /*calculo das box atraves das bordas*/
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
    }

    :root { /* reseto para utilizar o rem, fazendo a conta, usa a msg numeração do px*/
        font-size: 62.5%;
        font-family: 'Lato', sans-serif;
    }

    body {
        font-size: 1.6rem;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: row;
        height: 100vh;
    }

    .tab {
        margin: .8rem; /*margem entre as box*/
        padding: 1.6rem; /*espcamento interno*/
        background-color: #fff; /*cor de fundo*/
        box-shadow: 0 8px 3.2rem rgba(0 0 0 / .16); /*sombreamento da box*/
        border-radius: .6rem; /*arredondamento de borda da box*/
    }
</style>
<body>
<?php

for ($i = 0; $i <= 10; $i++) {
    echo "<div class='tab tab{$i}'>";
    echo "<h4>Tabuada do {$i}</h4>";
    for ($j = 0; $j <= 10; $j++) {
        echo "{$i} x {$j} = " . $i * $j . "<br>";
    }
    echo "</div>";
}

?>
</body>
</html>

