<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Pedzap!</title>
        <link rel="stylesheet" type="text/css" href="CSS.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;500;700&display=swap">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
    </head>
    <body>

    <!--DOBRA 1-->
    <section id="dobra1">
            <!--formulario de cadastro dobra 1-->
            <form id="form1" action="dados.php" method="POST">
            <input type="text" name="nome" placeholder="nome">
            <input type="text" name="estabelecimento" placeholder="estabelecimento">
            <input type="text" name="telefone" placeholder="telefone">
            <input type="mail" name="email" placeholder="email">
            <button type="submit" name="enviar_formulario">Preciso do Pedzap! ></button>
            </form>

            <img id="logo" src="/img/logo.png">
            <p id="intro">Quer automatizar o atendimento e aumentar as vendas do <span style="color: #30bb6e;">seu restaurante?</span></p>
            <p id="subintro">Atenda ainda mais clientes sem correr o risco de deixar eles esperando. O Pedzap chegou para facilitar o recebimento depedidos do seu negócio.</p>
    </section>

    <!-- DOBRA 2 -->
    <section id="dobra2">
    <img id="robo1" src="img/Robo.png">
        <div id="textodobra2">
            <br>
            <p id="intro2">Com o Pedzap, agora tudo isso é possível!</p>
            <div class="blocotexto">
                <p>Atenda seus pedidos sem correr riscos de anotá-los errado.</p>
            </div>

            <div class="blocotexto">
                <p>Responda vários clientes simultaneamente de forma rápida e automatizada.</p>
            </div>

            <div class="blocotexto">
                <p>Atenda vários clientes sem afetar o funcionamento do seu estabelecimento</p>
            </div>

            <a id="gatilho" href="#dobra5">Preciso do Pedzap! ></a>
        
        </div>
    </section>

    <!-- DOBRA 3 -->
    <section id="dobra3">
        <br>
        <p id="intro3">O QUE É O PEDZAP?</p>
        <p id="subintro3">O Pedzap é um robô que atende seus clientes pelo WhatsApp.</p>

        <div id="bloco">
            <div id="esquerda">
                <div class="blocotexto2">
                    <p>- Primeiro cadastramos seu cardápio e suas regras de estabelecimento.</p>
                </div>

                <div class="blocotexto2">
                    <p>- Então seus clientes entram em contato e o Pedzap registra todos os pedidos dele.</p>
                </div>

                <div class="blocotexto2">
                    <p>- Por fim, você recebe tudo que ele pediu já anotado.</p>
                </div>
        
                <p id="subtexto">É menos preocupações para você e mais pedidos recebidos para o seu negócio.</p>
                <a id="gatilho2" href="#dobra5">Preciso do Pedzap! ></a>
            </div>
            <!-- videos -->
            <div id="direita">
                <iframe class="video" src="https://www.youtube.com/embed/5ZyjycgGmMg" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <br>
                <iframe class="video" src="https://www.youtube.com/embed/9vOn6w7a0vo" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>        
            </div>
        </div>
    </section>

    <!-- DOBRA 4 -->
    <section id="dobra4">
        <p id="intro4">Confira os principais benefícios do Pedzap:</p>
        
        <div id="flex">
            <div id="img1">
                <p>Clientes atendidos rapidamente.</p>
            </div>

            <div id="img2">
                <p>Menos reclamações por pedidos errados.</p> 
            </div>
        
            <div id="img3">
                <p>Mais pedidos recebidos.</p>
            </div>

            <div id="img4">
                <p>Economizar no processo de delivery.</p>
            </div>

            <div id="img5">
                <p>Possibilidade de rastrear os pedidos dos clientes.</p>
            </div>

            <div id="img6">
                <p>Métricas, controle e gestão do seu estabelecimento.</p>
            </div>
        </div>
        

        <a id="gatilho4" href="#dobra5">Preciso do Pedzap! ></a>


    </section>
    <section id="futuro">
        <p>O futuro chegou</p>
        <img src="/img/wpp.png">
    </section>

    <!-- DOBRA 5 -->
    <section id="dobra5">
        <img id="robo2" src="img/robo2.png">
        <br>
        <p id="intro5">Aumente o recebimento de pedidos e diminua as reclamações!</p>
        <p id="subintro5">Tenha o Pedzap no seu estabelecimento agora mesmo.</p>
        
        <div class="redessociais">
            <a href="https://www.youtube.com/channel/UCcu0gvzh5L2ljvwnuUc9kPQ?view_as=subscriber"><img src="data:image/webp;base64,UklGRjYCAABXRUJQVlA4TCkCAAAvMUAJEOfjuG0kR1LtmfX73PyDPH/dVWk4biRJkXJgGZ7r4LnPfENdjiNJkppqkMTNE/9Nkjl3l4NIkhQpe+GeFbC6189MAYj8IwQgBZ/AF/gBfyyLSF0LIULC7wCcgb//wwYhwLUQbOpSCFUK6Z8qppgiuOr3/XFTTL//3+P8EkOX6lyR3PS6f1SqSn9Vyk2f5xfonyqmytW5ulSlv38qJJtiQIrgqqAY3CoGNyFFQLAJIQjBTfPpuQdy7GcFZnIJcB2HaSqX3Lp7BXKNtyYX4zD1cZgmcnEe104uGYepABmHaQZUuQC+gx8+wH8a59nghwCTcZimcjEOU87jWsglwBuYbeu+BMq9fwTIOEzlGm8NqECTy/veP6pcMg5TAyKXKpcAom3bpptzktS27TY1Upu3Zmrb9t+/i3f2F0T0fwLI+7V4cHMvfrU7/0nGp814Bk1dfdS8nzPw2RsRvVww9OkjUZTB1+g3Fi31c5nhF07w9tLwrh/w7n0IJqdYJwXlcpr6xiesx3sbs4QKB5SPkTyRULfytTMgUa58LpWoM42N2lVLNJhas8OzNrUYzMUdeByq6ocLVkbQStqVGaMtv2VOYdSbJqeUdY1Ehcm1TCKhx5+uoAQXDfsxWMAinNc8Mj1jPT0UzmUh5sSMTOuMBHb2Q/7+Du/mGG9/A2/lPwYt7pt20LaIXi+xzp+I6OMS6eKdvK/bMSix0Wcy/q0f3T6Ipx8u/ZAXAA=="></img></a>
            <a href="https://www.facebook.com/botpedzap"><img src="data:image/webp;base64,UklGRtwBAABXRUJQVlA4TM8BAAAvMUAJENfiIJIkRcp7Zn4R798Y88+2DdeRZKtKP8OdKIiOqPl158pxGEmS0zQg700Uyj8dxYHnlm0kSU5m79Daw1IhEBsZkwPWIy5AIoEbgQ+BB5EwkxeRyI8/VZ0SEkggNbQS0i8X4v9s999n5fcr6l8kwvMy00r4/zc+j5Xff+P/3agUKhXv58LjPFGpqBRet5nXfaFS0Uo4n3oSodUg8LovVCqOx/8JrdfPDN5r22Y8PhoETSangCODZrOLwwf9zvf77wKNx8d8sbgN/a6jaxqHQePxUTAk/IvFbTodfgcEQdCg32m1ejRQ1zQODfrdM+h3mkxODQymgG3bsumoYttpxUbbadvW//9JVHfnqd+qciL6PwE0/LlxmnBbnjTrHzT2+SBgA53vP434vrYBX36T6uuNDfr6hfTIBj6gPx+a/3fHBr91y+VdLFdFJM9xZ2cK1/ojCxxOZS71LeAOtfDivb6IKa2YDFhDoUfUkWLp7FAzbUwUpSATLs3AwgzkUJY73aGeajuFoho3fZG6DfqfxYHnuuWJVKoiRa7zbR5rN3/9aP4fGqAdkr5cYV08k+r3HOnsi4Yf94IoZveBxr6vndx73BZ7zPHqGw0DAA=="></a>
            <a href="https://www.instagram.com/pedzap/"><img src="data:image/webp;base64,UklGRgwDAABXRUJQVlA4TAADAAAvMUAJEO8FIZIkxVY+5s/fwPcvEHfKhoNIkhSpnpkdvME3f/w7XRAaSXIkxXnvGRx/SMfkfzsdR5LkKNk7aP3jhQG4h+1aToCs4QoNP2j4QKcj+kLTNCHWveBfswwIkpBgLQNJSICQhJQEzIQSkpmWoBpJAUlKqiQBQUhAShJmApNMZbVRsv7jbxoZUrL+I8mQafkd/5UkJVOZSsIkJWT9x3f3J5nK/EeSmQrJJNOCFDLJVP7nBQlIybTxv4zgb1pIkr9pkTCBJCAJE5CpECQgJQGZNgJCghISIQkTkM/f7wJ5fjwmUNv1enU6HAYEcj4eGwomkOv5XFD77bbeP58T5HQ4TO/X62632disVgUDcjocAgPe8L9fr4fT4TCDfH2/ZwgEAtlvt3m631eQzWpVkP12+9lvtzkfjysYMCBRkmTTtlZf27Zt+5nXNp5t277oZ9u23/u6ve6es9cXRPR/ApT117UnH7wcf//k6k8165d7QTA06O5nzZ9XMPjFH6XUt9cw+tVXpR7C8Afqv69pfv9uQR6YkWMzI1CGG29EpWOnaPvkaLHorZvAp3OS4kvtPgIPCLvJPW31+XmzFtS37SO7BNKaSa6NhTBuHSernVjNndGwv2C0NnYXVzoQeY7LYT/0HDejmWfCXVdIlmj8545v3bZiXoD/Fg6gksxzXTmZa4lZQ+3GpMhCf+SS5Y4FrOfUxJJFI5PcHAaYsZiX5gPAnPNsMWUTB6Dt5TZTTrNJV8mpKEMusE5XwOloQ7azTbeMh2BIDw9nW9J2s8+U+L3cvzQ1eeEOHk03BeUHSc6QxxvgWAFZZkFa/xHyxGAWrFVkrusizrJZA4RkZoVB38rT4a7DKu6K1dlN2MsJOFg9yQ2JkqSNvFjhBDrIA52N5TYbuw6RbRC6C3zaLlJ8sdVH4PlGABQNH7N3ZKgQ0mc3RYB/ao7NFH/Ir//zkznt91c9MO2+Ul9fmvX8i1Lqz3OTnv5W1k93gk0Jvv1RzfrjyuN33l4Oe797dPm7sgI="></a>
        </div>

        <!--formulario de cadastro dobra 5-->        
        <form id="form5" action="dados.php" method="POST">
        <input type="text" name="nome" placeholder="nome"><br>
        <input type="text" name="estabelecimento" placeholder="estabelecimento"><br>
        <input type="number" name="telefone" placeholder="telefone"><br>
        <input type="mail" name="email" placeholder="email"><br><br>
        <button type="submit" name="enviar_formulario">Quero Pedzap agora! ></button>
        </form>
    </section>

    <footer>
        <div id="logofooter">
            <img src="/img/logo.png">
        </div>
        <div>
            <p>PEDZAP® – Todos os direitos reservados – 2021</p>
            <img class="logo" src="/img/genia.png">
        </div>
    </footer>
    <!-- suavisando barra de rolagem -->
    <script>
        var $doc = $('html, body');
        $('a').click(function() {
            $doc.animate({
            scrollTop: $( $.attr(this, 'href') ).offset().top
            }, 500);
            return false;
        });
    </script>
    </body>
</html>