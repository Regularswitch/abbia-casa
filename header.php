<?php

    $layout = new Layout();

?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/fonts/fonts.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_uri() ); ?>">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        cor1: '#434445',
                        cor2: '#CEAF94',
                        cor3: '#FEF5ED',
                        cor4: '#FCCD7E',
                        cor5: '#F8FFDE',
                        cor6: '#EE705A',
                    },
                    fontSize: {
                        s1: "66px",
                        s2: "55px",
                        s3: "33px",
                        s4: "30px",
                        s5: "20px",
                        s6: "18px",
                        s7: "14px",
                        s8: "12px",
                    },
                    fontFamily: {
                        agrandir: ['agrandir'],
                        romie: ['romie'],
                    }
                }
            }
        }
    </script>
    <?php wp_head(); ?>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js" type="module" defer></script>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css?id=<?php echo uniqid(); ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/woocommerce.css?id=<?php echo uniqid(); ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/gutenberg.css?id=<?php echo uniqid(); ?>">
</head>

<body class="font-agrandir <?php echo getSlug(); ?>">
    
    <?php wp_body_open(); ?>

    <nav id="js-nav-pop" class="fixed top-0 left-[-300px] h-full bg-cor3 p-4 w-[270px] z-10 transition-all">
        <span>
            <img class="w-[40px]" src="<?php echo  $layout->getFile('/assets/images/layout/close.svg') ?>" alt="close" loading="lazy">
        </span>
        <img class="w-[70px] my-4" src="<?php echo  $layout->getFile('/assets/logo/AbbiaCasa-03.svg') ?>" alt="Abbia Casa" loading="lazy">
        <ul>
            <li>
                <a class="font-romie text-[33px]" href="" title="">Casa</a>
            </li>
            <li>
                <a class="font-romie text-[33px]" href="" title="">Acessoríos</a>
            </li>
            <li>
                <a class="font-romie text-[33px]" href="" title="">Sac du jour</a>
            </li>
            <li>
                <a class="font-romie text-[33px]" href="" title="">Beauté</a>
                <ul class="hidden">
                    <li>
                        <a href="" title="">Rosto</a>
                    </li>
                    <li>
                        <a href="" title="">Cabelo</a>
                    </li>
                    <li>
                        <a href="" title="">Corpo</a>
                    </li>
                    <li>
                        <a href="" title="">Creme</a>
                    </li>
                    <li>
                        <a href="" title="">Sabonete</a>
                    </li>
                    <li>
                        <a href="" title="">Perfume</a>
                    </li>
                    <li>
                        <a href="" title="">Banho</a>
                    </li>
                    <li>
                        <a href="" title="">Todos</a>
                    </li>
                </ul>
            </li>
            <li>
                <a class="font-romie text-[33px]" href="" title="">Colabs</a>
            </li>
            <li>
                <a class="font-romie text-[33px]"  href="" title="">Novidades</a>
            </li>
            <li>
                <a class="font-romie text-[33px]" href="" title="">A curadoria</aclass=>
            </li>
            <li>
                <a class=" text-[18px]" href="#" title="">+ Infos </a>
                <ul class="hidden">
                    <li>
                        <a href="" title="">Newsletter</a>
                    </li>
                    <li>
                        <a href="" title="">Contato</a>
                    </li>
                    <li>
                        <a href="" title="">Quem somos</a>
                    </li>
                    <li>
                        <a href="" title="">Politica de privacidade</a>
                    </li>
                    <li>
                        <a href="" title="">Politica de venda</a>
                    </li>
                    <li>
                        <a href="" title="">FAQ</a>
                    </li>
                </ul>
            </li>
        </ul>
        <a href="" target="_blank" rel="noopener noreferrer" title="instagram">
            <img src="<?php echo  $layout->getFile('/assets/images/social/instagram.svg') ?>" alt="instagram" loading="lazy">
        </a>
        <div class="flex justify-between items-center absolute bottom-0 left-0 w-full p-4 bg-color-3">
            <a href="">Log in</a>
            <a href="" title="">
                <img class="w-[27px]" src="<?php echo  $layout->getFile('/assets/images/layout/heart.svg') ?>" alt="favoritos" loading="lazy">
            </a>
            <a href="" title="">
                <img class="w-[27px]" src="<?php echo  $layout->getFile('/assets/images/layout/bag.svg') ?>" alt="carrinho" loading="lazy">
            </a>
        </div>
    </nav>

    <header>
        <div class="container mx-auto">
            <div class="flex flex-row justify-between items-center h-[70px]">
                <a id="js-nav-ico" href="javascript:void(0)" title="menu site" class="flex-none w-[50px] ml-5 lg:ml-0">
                    <img src="<?php echo $layout->getFile('/assets/images/layout/menu.svg') ?>" alt="menu" loading="lazy">
                </a>
                <form action="" class="flex-none w-full ml-5 lg:ml-0 lg:w-[70%]">
                    <label for="">
                        Pesquisar
                        <input name="s" type="search" class="border-b border-cor1" title="O que você procura?">
                    </label>
                </form>
                <a href="" title="Login" class="flex-none w-[50px] hidden lg:block"> 
                    Login 
                </a>
                <a href="" title="Favoritos" class="flex-none w-[50px] hidden lg:block">
                    <img src="<?php echo  $layout->getFile('/assets/images/layout/heart.svg') ?>" alt="favoritos" loading="lazy">
                </a>
                <a href="" title="carrinho" class="flex-none w-[50px] hidden lg:block">
                    <img src="<?php echo  $layout->getFile('/assets/images/layout/bag.svg') ?>" alt="carrinho" loading="lazy">
                </a>
            </div>
        </div>
    </header>
    