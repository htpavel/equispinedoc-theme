<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?></title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    
    <?php wp_head(); ?>
</head>

<body <?php body_class('min-h-screen flex flex-col selection:bg-[#A3B18A] selection:text-white'); ?>>

    <header class="sticky top-0 z-50 bg-[#FAF9F6]/95 backdrop-blur-md border-b border-[#2C3E50]/5">
        <div class="max-w-7xl mx-auto px-6 h-24 flex items-center justify-between">
            
            <a href="<?php echo home_url('/'); ?>" class="flex items-center gap-3 group">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo_big.png" alt="EquiSpineDoc Logo" class="h-16 w-auto object-contain transition-transform group-hover:scale-105 duration-300">
                <div class="flex flex-col">
                    <span class="font-heading text-xl font-bold tracking-wide text-[#2C3E50]">EquiSpineDoc</span>
                    <span class="text-xs uppercase tracking-widest text-[#A3B18A] font-medium">Veterinární chiropraxe</span>
                </div>
            </a>

            <button id="mobile-menu-btn" class="lg:hidden text-[#2C3E50]">
                <i class="fa-solid fa-bars text-2xl"></i>
            </button>
        </div>
    </header>