$(document).ready(function(){

    var alturaDaTela = $(window).height();
    if (alturaDaTela < 745) {
        $('#quanto-custa .col-texto').css({
            minHeight: "400px"
        })
        $('#quanto-custa .col-texto ul').css({
            height: "108px"
        })
    }

    $('.menu-bar').click(function(){
        $('.menu').stop().slideToggle();
    });
    $('html').keydown(function(e){
        if(e.keyCode == 33) { $('.grids_bootstrap').fadeToggle(); }
    });


    alturaTela = $(window).height();
    funcionalDigital = alturaTela * 2.5;
    quantoCusta = alturaTela * 3.5;
    ficounaDuvida = alturaTela * 4.5;

    //TOPOS
    timetoscroll = "";
    $(window).scroll(function(e){
          clearTimeout(timetoscroll);
          var posY = (document.documentElement.scrollTop) ? document.documentElement.scrollTop : window.pageYOffset;
          if(posY > 0){
            $('#header').addClass('fixo');
          }else{
            $('#header').removeClass('fixo');
          }

          //Funcional digital
          if(posY > funcionalDigital && posY < quantoCusta){
            $('.logo').hide();
            $('#logo-funcional-digital').show();
            $('.menu').removeClass('escuro');

          //Quanto Custa
          }else if(posY > quantoCusta){
            $('.logo').hide();
            $('#logo-quanto-custa').show();
            $('.menu').addClass('escuro');
          }else{
            $('.logo').hide();
            $('#logo').show();
            $('.menu').removeClass('escuro');
          }

    });

    //--- DEFINE a reusable animation function: ---//
    function scrollThere(targetElement) {
      // initiate an animation to a certain page element:
      $('html, body').stop().animate(
        { scrollTop: targetElement.offset().top }, // move window so target element is at top of window
        200, // speed in milliseconds
        'swing' // easing
      ); // end animate
    } // end scrollThere function definition


    //--- START NAV-ITEM CLICK EVENTS ---//
    // when the user clicks a nav item:
    $("#leftSidebar ul li a").click(function (e) {

      e.preventDefault(); // don't jump like a typical html anchor

      // find the index of the "#" character in the href string...
      var startOfName = $(this).attr('href').indexOf("#"),
          // ...then use it as the argument in the slice() method (add 1 so you don't include the # character).
          clickRef = $(this).attr('href').slice(startOfName + 1),
          targetEl = $('a[name=' + clickRef + ']'); // select the element this link is pointing to

      // scroll there smoothly:
      scrollThere(targetEl);

    }); // end click
    //--- END NAV-ITEM CLICK EVENTS ---//


    //--- START SCROLL EVENTS ---//
    // detect a mousewheel event (note: relies on jquery mousewheel plugin):
    if ( $('#bem-vindo').offset()){

    $(window).on('mousewheel', function (e) {
      // get Y-axis value of each div:
      var div1y = $('#bem-vindo').offset().top,
          div2y = $('#inovador').offset().top,
          div3y = $('#plataforma-integrada').offset().top,
          div4y = $('#funcional-digital').offset().top,
          div5y = $('#quanto-custa').offset().top,
          div6y = $('#ficou-na-duvida').offset().top,
          // get window's current scroll position:
          lastScrollTop = $(this).scrollTop(),
          // for getting user's scroll direction:
          scrollDirection,
          // for determining the previous and next divs to scroll to, based on lastScrollTop:
          targetUp,
          targetDown,
          // for determining which of targetUp or targetDown to scroll to, based on scrollDirection:
          targetElement;

      // get scroll direction:
      if ( e.deltaY > 0 ) {
        scrollDirection = 'up';
      } else if ( e.deltaY <= 0 ) {
        scrollDirection = 'down';
      } // end if
      console.log("up or down? " + scrollDirection);

      // prevent default behavior (page scroll):
      e.preventDefault();

      console.log("lastScrollTop: " + lastScrollTop);
      // condition: determine the previous and next divs to scroll to, based on lastScrollTop:p
      if (lastScrollTop === div1y) { //bem-vindo
        targetUp = $('#bem-vindo');
        targetDown = $('#inovador');
      } else if (lastScrollTop === div2y) { //inovador
        targetUp = $('#bem-vindo');
        targetDown = $('#plataforma-integrada');
      } else if (lastScrollTop === div3y) { //plataforma-integrada
        targetUp = $('#inovador');
        targetDown = $('#funcional-digital');
      } else if (lastScrollTop === div4y) { //funcional-digital
        targetUp = $('#plataforma-integrada');
        targetDown = $('#quanto-custa');
      } else if (lastScrollTop === div5y) { //quanto-custa
        targetUp = $('#funcional-digital');
        targetDown = $('#ficou-na-duvida');
      } else if (lastScrollTop === div6y) { //ficou-na-duvida
        targetUp = $('#quanto-custa');
        targetDown = $('#ficou-na-duvida');
      } else if (lastScrollTop < div2y) { //inovador
        targetUp = $('#bem-vindo');
        targetDown = $('#plataforma-integrada');
      } else if (lastScrollTop < div3y) { //plataforma-integrada
        targetUp = $('#inovador');
        targetDown = $('#funcional-digital');
      } else if (lastScrollTop < div4y) { //funcional-digital
        targetUp = $('#plataforma-integrada');
        targetDown = $('#quanto-custa');
      } else if (lastScrollTop < div5y) { //quanto-custa
        targetUp = $('#plataforma-integrada');
        targetDown = $('#ficou-na-duvida');
      } else if (lastScrollTop < div6y) { //ficou-na-duvida
        targetUp = $('#quanto-custa');
        targetDown = $('#ficou-na-duvida');
      } else if (lastScrollTop > div6y) { //ficou-na-duvida
        targetUp = $('#quanto-custa');
        targetDown = $('#ficou-na-duvida');
      } // end else if

      // condition: determine which of targetUp or targetDown to scroll to, based on scrollDirection:
      if (scrollDirection === 'down') {
        targetElement = targetDown;
      } else if (scrollDirection === 'up') {
        targetElement = targetUp;
      } // end else if

      // scroll smoothly to the target element:
      scrollThere(targetElement);

    }); // end on mousewheel event
    //--- END SCROLL EVENTS ---//

}

    //--- START SHOW/HIDE SIDE PANEL EVENTS ---//
    // open the sidePanel when the button is clicked/tapped:
    $("#sidePanelButton").click(function (e) {
      e.preventDefault();
      $("#sidePanel").addClass("open");
      $("#mainStack").addClass("shift");
    }); // end click

    // close the sidePanel when the X is clicked/tapped:
    $("#sidePanelClose").click(function (e) {
      e.preventDefault();
      $("#sidePanel").removeClass("open");
      $("#mainStack").removeClass("shift");
    }); // end click
    //--- END SHOW/HIDE SIDE PANEL EVENTS ---//


    //ROLAGEM
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event){
            event.preventDefault();
            window.history.pushState({url: "" + $(this).attr('href') + ""}, $(this).attr('title') , $(this).attr('href'));
            $('html,body').animate({scrollTop:$(this.hash).offset().top}, 800);
       });
    });

    //FORM
    $('.form').submit(function(e){
        e.preventDefault();
        // alert('teste');
        $('#enviar_contato .btn-padrao2').attr('type','button');
        textoBotao = $(this).find('#enviar_contato .btn-padrao2').text();
        $('#enviar_contato .btn-padrao2').text('enviando...');
        $('#enviar_contato .load').show();
        name = $(this).attr('id');
        $.ajax({
            url: 'php/'+name+'.php',
            data: new FormData(this),
            processData: false,
            contentType: false,
            type: 'POST',
            dataType: "html",
            success:function(retorno){
               $('#retorno').html(retorno);
            }
        });
    });

    //FORM
    $('.form2').submit(function(e){
        e.preventDefault();
        // alert('teste');
        $('.btn-padrao').attr('type','button');
        textoBotao = $(this).find('.btn-padrao').text();
        $('.btn-padrao').text('enviando...');
        $('.load').show();
        name = $(this).attr('id');
        $.ajax({
            url: '../php/'+name+'.php',
            data: new FormData(this),
            processData: false,
            contentType: false,
            type: 'POST',
            dataType: "html",
            success:function(retorno){
               $('#retorno').html(retorno);
            }
        });
    });

     //ADICIONA PRODUTO CARRINHO
    $('.adiciona_carrinho').submit(function(e){
        e.preventDefault();
        $.ajax({
            url: '../php/carrinho_funcoes.php',
            data: $(this).serialize(),
            type: 'POST',
            dataType: "html"
        }).done(function(data){
            $('#myModalAdd').modal()
            $('#myModalAdd .modal-body').html(data);
        });
    });

    //REMOVER PRODUTO CARRINHO
    $('.remove-produto').click(function(){
        idproduto = $(this).attr('id');
        $.ajax({
            url: 'php/carrinho_funcoes.php',
            data:{id:idproduto, acao:"del"},
            type: 'POST',
            dataType: "html"
        }).done(function(data){
            location.reload();
        })
    });

    //ATUALIZAR PRODUTO CARRINHO
    $('.atualiza-produto').submit(function(e){
        e.preventDefault();
        $.ajax({
            url: 'php/carrinho_funcoes.php',
            data: $(this).serialize(),
            type: 'POST',
            dataType: "html"
        }).done(function(data){
            location.reload();
        })
    });

    $('.finaliza-orcamento').click(function(){
        var hcarrinho = $('.carrinho').height();
        var hcarrinho = hcarrinho + 400;
        $('body').animate({scrollTop:hcarrinho}, '500');
        $("#formulario-orcamento").slideDown();
    });
});
// ANIMAÇÃO
// 1 - Selecionar elementos que devem ser animados
// 2 - Definir a classe que é adicionada durante a animação
// 3 - Criar função de animação
// 3.1 - Verificar a distância entre a barra de scroll e o topo do site
// 3.2 - Verificar se a distância do 3.1 + Offset é maior do que a distância entre o elemento e o Topo da Página.
// 3.3 - Se verdadeiro adicionar classe de animação, remover se for falso.
// 4 - Ativar a função de animação toda vez que o usuário utilizar o Scroll
// 5 - Otimizar ativação
// Debounce do Lodash
const debounce = function(func, wait, immediate) {
  let timeout;
  return function(...args) {
    const context = this;
    const later = function () {
      timeout = null;
      if (!immediate) func.apply(context, args);
    };
    const callNow = immediate && !timeout;
    clearTimeout(timeout);
    timeout = setTimeout(later, wait);
    if (callNow) func.apply(context, args);
  };
};

const target = document.querySelectorAll('[data-anime]');
const animationClass = 'animate';

function animeScroll() {
  const windowTop = window.pageYOffset + ((window.innerHeight * 3) / 4);
  target.forEach(function(element) {
    if((windowTop) > element.offsetTop) {
      element.classList.add(animationClass);
    } else {
      element.classList.remove(animationClass);
    }
  })
}

animeScroll();

if(target.length) {
  window.addEventListener('scroll', debounce(function() {
    animeScroll();
  }, 200));
}
