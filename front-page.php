<?php get_header(); ?>

<!-- Mobilní navigace (Overlay) -->
<div id="mobile-menu" class="hidden fixed inset-0 z-40 bg-[#FAF9F6] pt-28 px-6 flex flex-col gap-6 text-center">
    <a href="#uvod" class="mobile-link text-2xl font-heading text-[#2C3E50] hover:text-[#A3B18A]">Úvod</a>
    <a href="#novinky" class="mobile-link text-2xl font-heading text-[#2C3E50] hover:text-[#A3B18A]">Články & Novinky</a>
    <a href="#o-mne-sekce" class="mobile-link text-2xl font-heading text-[#2C3E50] hover:text-[#A3B18A]">O mně & Kvalifikace</a>
    <a href="#sluzby" class="mobile-link text-2xl font-heading text-[#2C3E50] hover:text-[#A3B18A]">Služby</a>
    <a href="#galerie" class="mobile-link text-2xl font-heading text-[#2C3E50] hover:text-[#A3B18A]">Galerie</a>
    <a href="#cenik" class="mobile-link text-2xl font-heading text-[#2C3E50] hover:text-[#A3B18A]">Ceník</a>
    <a href="#kontakt" class="mobile-link text-2xl font-heading text-[#2C3E50] hover:text-[#A3B18A]">Kontakt</a>
</div>

    <!-- 2. HERO SEKCE (PRVNÍ DOJEM) -->
    <section id="uvod" class="relative min-h-[85vh] flex items-center py-16 lg:py-24 bg-[#FAF9F6] overflow-hidden">
        <!-- Jemné dekorační pozadí (organický kruh/blob pro vzdušnost) -->
        <div class="absolute -top-40 -left-40 w-96 h-96 rounded-full bg-[#A3B18A]/5 blur-3xl"></div>
        <div class="absolute -bottom-40 right-10 w-96 h-96 rounded-full bg-[#A3B18A]/5 blur-3xl"></div>

        <div class="max-w-7xl mx-auto px-6 w-full relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">
                
                <!-- Levý sloupec: Text a CTA -->
                <div class="lg:col-span-7 space-y-8">
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-[#A3B18A]/10 text-[#2C3E50] text-sm font-medium">
                        <span class="w-2 h-2 rounded-full bg-[#A3B18A] animate-pulse"></span>
                        Mobilní chiropraxe & doplňkové metody pro koně
                    </div>
                    <h1 class="text-4xl md:text-6xl font-bold text-[#2C3E50] leading-tight">
                        Holistická veterinární péče – <span class="italic text-[#A3B18A] font-normal">navrácení rovnováhy a pohybu</span>
                    </h1>
                    <p class="text-lg md:text-xl text-[#4A5568] leading-relaxed">
                        Jmenuji se <strong>MVDr. Kateřina Černá</strong>. Specializuji se výhradně na veterinární chiropraxi a doplňkové rehabilitační metody. Přijedu za vaším koněm přímo do stáje, abychom v klidném a důvěrném prostředí podpořili jeho zdraví a výkonnost.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 pt-4">
                        <a href="#sluzby" class="inline-flex items-center justify-center px-8 py-4 rounded-full bg-[#A3B18A] text-white font-medium hover:bg-[#8F9F76] shadow-lg shadow-[#A3B18A]/20 transition-soft">
                            Nabízené metody
                        </a>
                        <a href="#kontakt" class="inline-flex items-center justify-center px-8 py-4 rounded-full border-2 border-[#2C3E50]/10 text-[#2C3E50] font-medium hover:bg-[#2C3E50]/5 transition-soft">
                            Objednat ošetření
                        </a>
                    </div>
                </div>
                
                <!-- Pravý sloupec: Výrazný a stylový obrázek s rámečkem -->
                <div class="lg:col-span-5 relative group mt-8 lg:mt-0">
                    <!-- Dekorační rámeček za obrázkem -->
                    <div class="absolute inset-0 border-2 border-[#A3B18A]/30 rounded-3xl translate-x-4 translate-y-4 -z-10 transition-transform duration-500 group-hover:translate-x-2 group-hover:translate-y-2"></div>
                    
                    <div class="relative rounded-3xl overflow-hidden shadow-2xl aspect-[4/5] bg-[#2C3E50]/5">
                        <img src="https://konskydoktor.cz/wp-content/uploads/2021/10/kat_cerna-1.jpg" alt="Profilová fotografie" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                        <!-- Jemný stín pro lepší hloubku -->
                        <div class="absolute inset-0 bg-gradient-to-t from-[#2C3E50]/20 via-transparent to-transparent"></div>
                    </div>
                    
                    <!-- Plovoucí visačka s informací o dojezdu -->
                    <div class="absolute -bottom-6 -left-6 bg-white p-4 rounded-2xl shadow-lg border border-[#2C3E50]/5 hidden sm:flex items-center gap-3">
                        <div class="w-10 h-10 rounded-full bg-[#A3B18A]/10 text-[#A3B18A] flex items-center justify-center">
                            <i class="fa-solid fa-truck-moving text-sm"></i>
                        </div>
                        <div>
                            <span class="block text-xs uppercase text-[#4A5568]/60 font-semibold">Dojíždím</span>
                            <span class="text-xs font-bold text-[#2C3E50]">Po celé České republice</span>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

    <!-- 5.5 ČLÁNKY A AKTUALITY -->
    <section id="novinky" class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-4xl font-bold text-[#2C3E50] mb-12 text-center">Články z praxe & Aktuality</h2>
            
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <?php
                    $query = new WP_Query(['post_type' => 'post', 'posts_per_page' => 6]);
                    while ($query->have_posts()) : $query->the_post(); ?>
                        
                        <div class="swiper-slide h-auto p-2 overflow-visible"> 
                            <div class="relative bg-[#FAF9F6] rounded-3xl overflow-hidden border border-[#2C3E50]/5 h-full flex flex-col transition-soft hover:scale-[1.03] hover:shadow-2xl hover:z-50">
                                
                                <!-- Horní část karty s obrázkem nebo náhodnou ikonou -->
                                <!-- Změněno z aspect-video na h-32 (nebo dle potřeby) -->
                                <div class="h-32 relative overflow-hidden bg-[#2C3E50]/5 flex items-center justify-center">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <?php the_post_thumbnail('large', ['class' => 'w-full h-full object-cover transition-transform duration-500 hover:scale-105']); ?>
                                    <?php else : ?>
                                        <?php 
                                        $icons = ['fa-notes-medical', 'fa-stethoscope', 'fa-paw', 'fa-heart-pulse', 'fa-user-doctor', 'fa-bone', 'fa-horse', 'fa-briefcase-medical', 'fa-hand-holding-medical', 'fa-shield-dog'];
                                        $random_icon = $icons[array_rand($icons)];
                                        ?>
                                        <!-- Zmenšeno z text-5xl na text-4xl -->
                                        <i class="fa-solid <?php echo $random_icon; ?> text-4xl text-[#2C3E50]/10"></i>
                                    <?php endif; ?>
                                </div>
                                
                              <!-- Odkaz na detail článku otevře se v nové kartě -->
                                <a href="<?php the_permalink(); ?>" target="_blank" rel="noopener noreferrer" class="flex flex-col justify-between flex-grow">
                                    <div class="p-6">
                                        <div class="text-xs text-[#A3B18A] font-semibold uppercase tracking-wider mb-2 flex items-center">
                                            <i class="fa-regular fa-calendar mr-1"></i> <?php echo get_the_date('d. F Y'); ?>
                                        </div>

                                        <h3 class="text-xl font-bold text-[#2C3E50] font-heading leading-snug">
                                            <?php the_title(); ?>
                                        </h3>
                                        
                                        <p class="text-sm text-[#4A5568] mt-2 leading-relaxed">
                                            <?php echo wp_trim_words(get_the_excerpt(), 20); ?>
                                        </p>
                                    </div>
                                    
                                    <div class="px-6 pb-6 mt-auto">
                                        <span class="inline-flex items-center gap-2 text-sm font-semibold text-[#A3B18A] hover:text-[#8F9F76] transition-soft">
                                            Číst více <i class="fa-solid fa-arrow-right text-xs"></i>
                                        </span>
                                    </div>
                                </a>
                            </div>
                        </div>

                    <?php endwhile; wp_reset_postdata(); ?>
                </div>
                
                <!-- Swiper navigace -->
                <div class="swiper-button-next !text-[#A3B18A]"></div>
                <div class="swiper-button-prev !text-[#A3B18A]"></div>
            </div>
        </div>
    </section>

    <!-- 3. O MNĚ & KVALIFIKACE (TABY) -->
    <section id="o-mne" class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-12 gap-12">
            
            <!-- Levý sloupec -->
            <div class="md:col-span-4">
                <div class="sticky top-24">
                    <div class="bg-[#2C3E50] rounded-3xl overflow-hidden shadow-xl mb-6">
                        <img src="https://konskydoktor.cz/wp-content/uploads/2021/10/kat_cerna-1.jpg" alt="MVDr. Kateřina Černá" class="w-full h-auto object-cover opacity-90">
                        <div class="p-6 text-white text-center">
                            <p class="text-sm uppercase tracking-widest opacity-80 mb-2">Veterinární lékařka</p>
                            <h2 class="text-2xl font-bold">MVDr. Kateřina Černá</h2>
                        </div>
                    </div>
                    
                    <div class="bg-[#FAF9F6] p-6 rounded-3xl border border-[#2C3E50]/5">
                        <div class="flex items-center gap-4 mb-4">
                            <span class="text-2xl text-[#2C3E50]">🎓</span>
                            <div>
                                <p class="text-xs text-gray-500 uppercase">Absolventka</p>
                                <p class="font-bold text-[#2C3E50]">FVL VFU Brno (2014)</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-4">
                            <span class="text-2xl text-[#2C3E50]">🏅</span>
                            <div>
                                <p class="text-xs text-gray-500 uppercase">Certifikace</p>
                                <p class="font-bold text-[#2C3E50]">CERP, IAVC, CEKTT</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pravý sloupec -->
            <div class="md:col-span-8">
                <h2 class="text-3xl font-bold text-[#2C3E50] mb-8">Moje kvalifikace & Certifikace</h2>
                
                <div class="space-y-4">
                    <div class="bg-[#FAF9F6] p-6 rounded-xl border border-[#2C3E50]/10 flex gap-4 items-start">
                        <span class="text-3xl text-[#2C3E50]">🎓</span>
                        <div>
                            <h3 class="font-bold text-[#2C3E50]">2025 CERP – Certified Equine Rehabilitation Practitioner</h3>
                            <p class="text-sm text-[#4A5568]">Mezinárodně uznávaná certifikace pro rehabilitaci a fyzikální terapii koní zastřešená University of Tennessee (USA) a mezinárodní akademií.</p>
                        </div>
                    </div>

                    <div class="bg-[#FAF9F6] p-6 rounded-xl border border-[#2C3E50]/10 flex gap-4 items-start">
                        <span class="text-3xl text-[#2C3E50]">🌿</span>
                        <div>
                            <h3 class="font-bold text-[#2C3E50]">2022 CEKTT – Certified Equine Kinesiology Taping Therapist</h3>
                            <p class="text-sm text-[#4A5568]">Specializovaný výcvik a certifikace pro aplikaci elastických kineziotapů přizpůsobených specifické anatomii a biomechanice koní.</p>
                        </div>
                    </div>

                    <div class="bg-[#FAF9F6] p-6 rounded-xl border border-[#2C3E50]/10 flex gap-4 items-start">
                        <span class="text-3xl text-[#2C3E50]">🩺</span>
                        <div>
                            <h3 class="font-bold text-[#2C3E50]">2021 IAVC Certifikovaná Chiropraktička pro Koně a Psy</h3>
                            <p class="text-sm text-[#4A5568]">IAVC Essentials of Veterinary Chiropractic Course zakončený úspěšnou mezinárodní zkouškou. Celostní přístup, diagnostika funkčních blokád páteře a šetrná manuální náprava.</p>
                        </div>
                    </div>

                    <div class="bg-[#FAF9F6] p-6 rounded-xl border border-[#2C3E50]/10 flex gap-4 items-start">
                        <span class="text-3xl text-[#2C3E50]">🏛️</span>
                        <div>
                            <h3 class="font-bold text-[#2C3E50]">2014 Veterinární lékařství – FVL VFU Brno</h3>
                            <p class="text-sm text-[#4A5568]">Řádné šestileté doktorské studium na Fakultě veterinárního lékařství se zaměřením na koňskou medicínu.</p>
                        </div>
                    </div>
                </div>

                <!-- Rozbalovací seznam -->
                <div class="mt-8">
                    <details class="group bg-[#FAF9F6] border border-[#2C3E50]/10 rounded-xl overflow-hidden transition-all">
                        <summary class="list-none p-5 cursor-pointer text-[#2C3E50] font-bold flex justify-between items-center hover:bg-[#2C3E50]/5">
                            <span class="flex items-center gap-3">
                                <i class="fa-solid fa-list-ul"></i> Zobrazit kompletní historii vzdělávání a seminářů
                            </span>
                            <span class="group-open:rotate-180 transition-transform">▼</span>
                        </summary>
                        <div class="p-5 border-t border-[#2C3E50]/10 text-sm text-[#4A5568] space-y-3">
                            <p><strong>2026</strong> – STECCO Animal Fascial Manipulation Level 1, Varšava</p>
                            <p><strong>2026</strong> – New Developments in Diagnostic and Therapeutic Techniques of Equine Neck Conditions, VetPD</p>
                            <p><strong>2025</strong> – SURE FOOT Practitioner (Level 1) & Workshop SUREFOOT podložek</p>
                            <p><strong>2025</strong> – Tensegrální Trénink (Tina Hau), Kněžmost</p>
                            <p><strong>2025</strong> – ABnR Equine – Myofascial Triggerpoint and Pain Release, Německo</p>
                            <p><strong>2024</strong> – The Canine 10-Step Myofascial Treatment Approach (IAVC) & Praktická Neurologie u Koní</p>
                            <p><strong>2024</strong> – Myofascial Kinetic Lines in Horses and Dogs (IAVC)</p>
                            <p><strong>2023</strong> – Výroční seminář ČEHIS: Diagnostika kulhání, Seč</p>
                            <p><strong>2023</strong> – STAMMER©KINESTICS: Equine Functional Movement Analyses (IAVC)</p>
                            <p><strong>2023</strong> – Training the Equine Athlete (IAVC) & ABnR – The Art and Science of Spinal Manipulation</p>
                            <p><strong>2022</strong> – Horse, Saddle and Rider Interactions (IAVC), Německo</p>
                        </div>
                    </details>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. SLUŽBY (CHIROPRAXE A DOPLŇKOVÉ METODY) -->
    <section id="sluzby" class="py-24 bg-[#FAF9F6]">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-4xl font-bold text-[#2C3E50] mb-16 text-center">Základní služby & metody</h2>
            
            <div class="grid md:grid-cols-3 gap-8">
                
                <!-- Veterinární chiropraxe -->
                <a href="/co-je-chiropraxe//" class="group block bg-white p-8 rounded-3xl border border-[#2C3E50]/5 transition-all hover:shadow-2xl hover:scale-[1.02]">
                    <div class="text-4xl mb-6">🩺</div>
                    <h3 class="text-xl font-bold text-[#2C3E50] mb-3 group-hover:text-[#A3B18A] transition-colors">Veterinární chiropraxe</h3>
                    <p class="text-sm text-[#4A5568] leading-relaxed mb-6">Celostní přístup, diagnostika funkčních blokád páteře a šetrná manuální náprava pro koně a psy.</p>
                    <span class="inline-flex items-center gap-2 text-sm font-semibold text-[#A3B18A]">
                        Více informací <i class="fa-solid fa-arrow-right text-xs"></i>
                    </span>
                </a>

                <!-- Kinesiotaping -->
                <a href="/kinesiotaping/" class="group block bg-white p-8 rounded-3xl border border-[#2C3E50]/5 transition-all hover:shadow-2xl hover:scale-[1.02]">
                    <div class="text-4xl mb-6">🌿</div>
                    <h3 class="text-xl font-bold text-[#2C3E50] mb-3 group-hover:text-[#A3B18A] transition-colors">Kinesiotaping</h3>
                    <p class="text-sm text-[#4A5568] leading-relaxed mb-6">Specializovaná aplikace elastických kineziotapů pro podporu biomechaniky a úlevu od bolesti u koní.</p>
                    <span class="inline-flex items-center gap-2 text-sm font-semibold text-[#A3B18A]">
                        Více informací <i class="fa-solid fa-arrow-right text-xs"></i>
                    </span>
                </a>

                <!-- SURE FOOT -->
                <a href="/sure-foot/" class="group block bg-white p-8 rounded-3xl border border-[#2C3E50]/5 transition-all hover:shadow-2xl hover:scale-[1.02]">
                    <div class="text-4xl mb-6">🐾</div>
                    <h3 class="text-xl font-bold text-[#2C3E50] mb-3 group-hover:text-[#A3B18A] transition-colors">SURE FOOT Program</h3>
                    <p class="text-sm text-[#4A5568] leading-relaxed mb-6">Vzdělávací program pro lepší stabilitu, propriocepci a psychickou pohodu vašeho koně.</p>
                    <span class="inline-flex items-center gap-2 text-sm font-semibold text-[#A3B18A]">
                        Více informací <i class="fa-solid fa-arrow-right text-xs"></i>
                    </span>
                </a>

            </div>
        </div>
    </section>

    <!-- GALERIE - ROZCESTNÍK -->
        <section id="galerie" class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-4xl font-bold text-[#2C3E50] text-center mb-16">Fotogalerie</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-8">
                
                <!--1 . Kurz veterinární chiropraxe -->
                <div class="bg-[#FAF9F6] rounded-3xl p-6 border border-[#2C3E50]/5 shadow-sm">
                    <?php echo do_shortcode('[foogallery id="869"]'); ?>
                </div>    
            
                <!-- 2. Chiropraktické ošetření koně -->
                <div class="bg-[#FAF9F6] rounded-3xl p-6 border border-[#2C3E50]/5 shadow-sm">
                    <?php echo do_shortcode('[foogallery id="871"]'); ?>
                </div>   

                <!-- 3. Chiropraktické ošetření psa -->
                <div class="bg-[#FAF9F6] rounded-3xl p-6 border border-[#2C3E50]/5 shadow-sm">
                    <?php echo do_shortcode('[foogallery id="872"]'); ?>
                </div>   

                <!-- 4. Chiropraktické ošetření koně (starší) -->
                <div class="bg-[#FAF9F6] rounded-3xl p-6 border border-[#2C3E50]/5 shadow-sm">
                    <?php echo do_shortcode('[foogallery id="873"]'); ?>
                </div>   
                
            </div>
        </div>
    </section>

    <!-- Lightbox Modal -->
    <div id="lightbox" class="hidden fixed inset-0 z-50 bg-[#2C3E50]/90 backdrop-blur-md flex flex-col items-center justify-center p-4">
        <button class="absolute top-6 right-6 text-white text-3xl hover:text-[#A3B18A] transition-soft" onclick="closeLightbox()">&times;</button>
        <img id="lightbox-img" src="" alt="Velký náhled" class="max-w-full max-h-[80vh] rounded-2xl shadow-2xl object-contain">
        <p id="lightbox-caption" class="text-white font-medium mt-4 text-center max-w-xl"></p>
    </div>

    <!-- 6. CENÍK S INTUIVITNÍM ODHADEM CENY -->
    <section id="cenik" class="py-24 bg-[#FAF9F6]">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center max-w-2xl mx-auto space-y-4 mb-20">
                <span class="text-xs font-semibold uppercase tracking-wider text-[#A3B18A]">Transparentní sazby</span>
                <h2 class="text-4xl font-bold text-[#2C3E50]">Ceník služeb & kalkulátor</h2>
                <div class="w-16 h-1 bg-[#A3B18A] mx-auto rounded-full"></div>
                <p class="text-lg text-[#4A5568]">
                    Zakládám si na perfekcionismu a stoprocentním odvedení práce pro každého koně v danou chvíli. Můj unikátní celostní přístup je fyzicky i časově náročný.
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
                
                <!-- Tabulka cen (Levá strana) -->
                <div class="lg:col-span-7 space-y-6">
                    <div class="bg-white p-8 rounded-3xl border border-[#2C3E50]/5 shadow-sm space-y-6">
                        <h3 class="text-2xl font-bold text-[#2C3E50] border-b border-[#2C3E50]/5 pb-4">Základní ošetření a terapie</h3>
                        
                        <div class="space-y-4">
                            <!-- Sazba 1 -->
                            <div class="flex justify-between items-start gap-4 border-b border-[#2C3E50]/5 pb-4">
                                <div class="space-y-1">
                                    <h4 class="font-bold text-[#2C3E50]">Vstupní chiropraktické vyšetření a ošetření</h4>
                                    <p class="text-sm text-[#4A5568]">Zahrnuje anamnézu, neurologické a ortopedické vyšetření, ošetření páteře, končetin a svalů. Cca 90 min.</p>
                                </div>
                                <span class="font-heading text-xl font-bold text-[#A3B18A] whitespace-nowrap">2 900 Kč</span>
                            </div>

                            <!-- Sazba 2 -->
                            <div class="flex justify-between items-start gap-4 border-b border-[#2C3E50]/5 pb-4">
                                <div class="space-y-1">
                                    <h4 class="font-bold text-[#2C3E50]">Kontrolní chiropraktické ošetření</h4>
                                    <p class="text-sm text-[#4A5568]">Do 3 měsíců od vstupního ošetření pro udržení stavu a rozvoj mobility. Cca 60 min.</p>
                                </div>
                                <span class="font-heading text-xl font-bold text-[#A3B18A] whitespace-nowrap">2 100 Kč</span>
                            </div>

                            <!-- Sazba 3 -->
                            <div class="flex justify-between items-start gap-4 border-b border-[#2C3E50]/5 pb-4">
                                <div class="space-y-1">
                                    <h4 class="font-bold text-[#2C3E50]">Doplňková rehabilitační metoda (Kinesiotaping / Surefoot)</h4>
                                    <p class="text-sm text-[#4A5568]">Aplikace jako samostatná doplňková terapie nebo přídavek ke standardnímu ošetření.</p>
                                </div>
                                <span class="font-heading text-xl font-bold text-[#A3B18A] whitespace-nowrap">800 Kč</span>
                            </div>

                            <!-- Sazba 4 -->
                            <div class="flex justify-between items-start gap-4">
                                <div class="space-y-1">
                                    <h4 class="font-bold text-[#2C3E50]">Doprava / Dojezd ze stáje</h4>
                                    <p class="text-sm text-[#4A5568]">Počítáno z mé základny v Hrochově Týnci (případně dle společných plánovaných okruhů).</p>
                                </div>
                                <span class="font-heading text-xl font-bold text-[#A3B18A] whitespace-nowrap">12 Kč/km</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Interaktivní kalkulačka (Pravá strana) -->
                <div class="lg:col-span-5 bg-white p-8 rounded-3xl border border-[#2C3E50]/5 shadow-lg space-y-6">
                    <h3 class="text-2xl font-bold text-[#2C3E50]">Orientační kalkulačka ceny</h3>
                    <p class="text-sm text-[#4A5568]">Spočítejte si přibližnou cenu ošetření včetně dopravy přímo k vám do stáje.</p>
                    
                    <div class="space-y-4">
                        <!-- Výběr služby -->
                        <div>
                            <label class="block text-xs font-semibold uppercase tracking-wider text-[#4A5568]/60 mb-2">Vyberte požadovanou službu</label>
                            <select id="calc-service" class="w-full px-4 py-3 rounded-xl border border-[#2C3E50]/10 bg-transparent text-sm focus:outline-none focus:border-[#A3B18A] transition-soft">
                                <option value="2900">Vstupní ošetření (2 900 Kč)</option>
                                <option value="2100">Kontrolní ošetření (2 100 Kč)</option>
                                <option value="800">Doplňkové metody (800 Kč)</option>
                            </select>
                        </div>

                        <!-- Dojezd -->
                        <div>
                            <label class="block text-xs font-semibold uppercase tracking-wider text-[#4A5568]/60 mb-2">Předpokládaná vzdálenost ze sídla (Hrochův Týnec)</label>
                            <div class="relative">
                                <input type="number" id="calc-distance" value="30" min="0" max="500" class="w-full px-4 py-3 rounded-xl border border-[#2C3E50]/10 bg-transparent text-sm focus:outline-none focus:border-[#A3B18A] transition-soft">
                                <span class="absolute right-4 top-1/2 -translate-y-1/2 text-sm text-[#4A5568]/60">km</span>
                            </div>
                        </div>

                        <!-- Výsledek -->
                        <div class="pt-6 border-t border-[#2C3E50]/5 space-y-2">
                            <span class="block text-xs font-semibold uppercase tracking-wider text-[#4A5568]/60">Předběžná celková kalkulace:</span>
                            <div class="flex items-baseline gap-2">
                                <span id="calc-result" class="text-4xl font-bold text-[#2C3E50] font-heading">3 260</span>
                                <span class="text-lg font-bold text-[#2C3E50]">Kč</span>
                            </div>
                            <span class="block text-xs text-[#4A5568]/60 italic mt-1">*Cena je orientační, při hromadném ošetření více koní ve stejné stáji se doprava dělí rovným dílem.</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

  <!-- 7. KONTAKT -->
    <section id="kontakt" class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center max-w-2xl mx-auto space-y-4 mb-20">
                <span class="text-xs font-semibold uppercase tracking-wider text-[#A3B18A]">Jak se se mnou spojit</span>
                <h2 class="text-4xl font-bold text-[#2C3E50]">Objednání & Dotazy</h2>
                <div class="w-16 h-1 bg-[#A3B18A] mx-auto rounded-full"></div>
                <p class="text-lg text-[#4A5568]">
                    Pokud máte dotaz k ošetření nebo chcete rovnou rezervovat termín pro svého koně, neváhejte mě kontaktovat.
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 items-start">
                
                <!-- Informace a kontaktní údaje (Levá strana) -->
                <div class="lg:col-span-5 space-y-8">
                    <div class="p-8 rounded-3xl bg-[#FAF9F6] border border-[#2C3E50]/5 space-y-6">
                        <h3 class="text-2xl font-bold text-[#2C3E50] mb-4">Kontaktní údaje</h3>
                        
                        <div class="space-y-4 text-base text-[#4A5568]">
                            <!-- Jméno a KVL -->
                            <div class="flex items-start gap-4">
                                <div class="w-10 h-10 rounded-full bg-[#A3B18A]/10 text-[#A3B18A] flex items-center justify-center text-lg mt-1 shrink-0">
                                    <i class="fa-solid fa-user"></i>
                                </div>
                                <div>
                                    <span class="block text-xs uppercase text-[#4A5568]/60 font-medium">Lékařka</span>
                                    <span class="block font-semibold text-[#2C3E50]">MVDr. Kateřina Černá</span>
                                    <span class="text-sm text-[#4A5568]">KVL 6391</span>
                                </div>
                            </div>

                            <!-- Adresa a IČO -->
                            <div class="flex items-start gap-4">
                                <div class="w-10 h-10 rounded-full bg-[#A3B18A]/10 text-[#A3B18A] flex items-center justify-center text-lg mt-1 shrink-0">
                                    <i class="fa-solid fa-location-dot"></i>
                                </div>
                                <div>
                                    <span class="block text-xs uppercase text-[#4A5568]/60 font-medium">Sídlo</span>
                                    <span class="block font-semibold text-[#2C3E50]">Riegrova 434</span>
                                    <span class="block font-semibold text-[#2C3E50]">538 62 Hrochův Týnec</span>
                                    <span class="text-sm text-[#4A5568]">IČO: 03225283</span>
                                </div>
                            </div>

                            <!-- Telefon -->
                            <div class="flex items-start gap-4">
                                <div class="w-10 h-10 rounded-full bg-[#A3B18A]/10 text-[#A3B18A] flex items-center justify-center text-lg mt-1 shrink-0">
                                    <i class="fa-solid fa-phone"></i>
                                </div>
                                <div>
                                    <span class="block text-xs uppercase text-[#4A5568]/60 font-medium">Telefon</span>
                                    <a href="tel:+420721016678" class="font-semibold text-[#2C3E50] hover:text-[#A3B18A] transition-soft">+420 721 016 678</a>
                                </div>
                            </div>

                            <!-- Email -->
                            <div class="flex items-start gap-4">
                                <div class="w-10 h-10 rounded-full bg-[#A3B18A]/10 text-[#A3B18A] flex items-center justify-center text-lg mt-1 shrink-0">
                                    <i class="fa-solid fa-envelope"></i>
                                </div>
                                <div>
                                    <span class="block text-xs uppercase text-[#4A5568]/60 font-medium">E-mail</span>
                                    <a href="mailto:katerina.cerna@konskydoktor.cz" class="font-semibold text-[#2C3E50] hover:text-[#A3B18A] transition-soft">katerina.cerna@konskydoktor.cz</a>
                                </div>
                            </div>
                        </div>

                        <!-- Sociální sítě -->
                        <div class="flex items-center gap-4 mt-8 pt-6 border-t border-[#2C3E50]/5">
                            <span class="text-xs uppercase text-[#4A5568]/60 font-medium">Sledujte mě:</span>
                            <div class="flex gap-3 relative z-10"> 
                                <a href="https://www.facebook.com/vetchirocerna#" target="_blank" class="relative z-20 w-10 h-10 rounded-full bg-[#2C3E50]/5 text-[#2C3E50] flex items-center justify-center hover:bg-[#A3B18A] hover:text-white transition-soft">
                                    <i class="fa-brands fa-facebook-f"></i>
                                </a>
                                <a href="https://www.instagram.com/p/DZb7soPlfgL/" target="_blank" class="relative z-20 w-10 h-10 rounded-full bg-[#2C3E50]/5 text-[#2C3E50] flex items-center justify-center hover:bg-[#A3B18A] hover:text-white transition-soft">
                                    <i class="fa-brands fa-instagram"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Kontaktní formulář (Pravá strana) -->
                        <div class="lg:col-span-7 bg-[#FAF9F6] p-8 rounded-3xl border border-[#2C3E50]/5 shadow-sm">
                    <h3 class="text-2xl font-bold text-[#2C3E50] mb-6">Nezávazná poptávka ošetření</h3>
                    
                    <!-- Formulář -->
                    <div class="contact-form-wrapper">
                        <?php echo do_shortcode('[contact-form-7 id="698740d"]'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>