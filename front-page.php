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
                    <img src="https://images.unsplash.com/photo-1598974357801-cbca100e6563?auto=format&fit=crop&q=80&w=1200" alt="Jemný dotek a chiropraktické ošetření koně" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
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
        <h2 class="text-4xl font-bold text-[#2C3E50] mb-12 text-center">Články z praxe</h2>
        
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <?php
                $query = new WP_Query(['post_type' => 'post', 'posts_per_page' => 6]);
                while ($query->have_posts()) : $query->the_post(); ?>
                    
             <div class="swiper-slide h-auto p-2 overflow-visible"> 
                <div class="relative bg-[#FAF9F6] rounded-3xl overflow-hidden border border-[#2C3E50]/5 h-full flex flex-col transition-soft hover:scale-[1.03] hover:shadow-2xl hover:z-50">
                    <div class="aspect-video relative overflow-hidden bg-[#2C3E50]/5">
                        <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail('large', ['class' => 'w-full h-full object-cover transition-transform duration-500 hover:scale-105']); ?>
                        <?php endif; ?>
                    </div>
                    
                    <a href="<?php the_permalink(); ?>" class="flex flex-col justify-between flex-grow">
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
            
            <div class="swiper-button-next !text-[#A3B18A]"></div>
            <div class="swiper-button-prev !text-[#A3B18A]"></div>
        </div>
    </div>
</section>

    <!-- 3. O MNĚ & KVALIFIKACE (TABY) -->
    <section id="o-mne-sekce" class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center max-w-2xl mx-auto space-y-4 mb-16">
                <span class="text-xs font-semibold uppercase tracking-wider text-[#A3B18A]">Osobní a odborný profil</span>
                <h2 class="text-4xl font-bold text-[#2C3E50]">MVDr. Kateřina Černá</h2>
                <div class="w-16 h-1 bg-[#A3B18A] mx-auto rounded-full"></div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 items-start">
                
                <!-- Levý sloupec: Foto & Rychlé shrnutí -->
                <div class="lg:col-span-4 space-y-8 lg:sticky lg:top-28">
                    <div class="relative rounded-3xl overflow-hidden shadow-xl aspect-[4/5] bg-[#2C3E50]/5">
                        <img src="https://images.unsplash.com/photo-1553284965-83fd3e82fa5a?auto=format&fit=crop&q=80&w=800" alt="MVDr. Kateřina Černá" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#2C3E50]/60 via-transparent to-transparent"></div>
                        <div class="absolute bottom-6 left-6 right-6 text-white text-center">
                            <span class="text-xs uppercase tracking-widest text-[#A3B18A] font-semibold">Veterinární lékařka</span>
                            <h3 class="text-2xl font-bold font-heading text-white mt-1">MVDr. Kateřina Černá</h3>
                        </div>
                    </div>
                    
                    <!-- Rychlá fakta -->
                    <div class="bg-[#FAF9F6] p-6 rounded-2xl border border-[#2C3E50]/5 space-y-4">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full bg-[#A3B18A]/10 text-[#A3B18A] flex items-center justify-center">
                                <i class="fa-solid fa-graduation-cap"></i>
                            </div>
                            <div>
                                <span class="block text-xs uppercase text-[#4A5568]/60 font-medium">Absolventka</span>
                                <span class="text-sm font-semibold text-[#2C3E50]">FVL VFU Brno (2014)</span>
                            </div>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full bg-[#A3B18A]/10 text-[#A3B18A] flex items-center justify-center">
                                <i class="fa-solid fa-award"></i>
                            </div>
                            <div>
                                <span class="block text-xs uppercase text-[#4A5568]/60 font-medium">Certifikace</span>
                                <span class="text-sm font-semibold text-[#2C3E50]">CERP, IAVC, CEKTT</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pravý sloupec: Interaktivní přepínání O mně / Kvalifikace -->
                <div class="lg:col-span-8 space-y-8">
                    <!-- Navigace záložek -->
                    <div class="flex border-b border-[#2C3E50]/10 gap-8">
                        <button id="btn-tab-omne" class="pb-4 text-xl font-bold font-heading border-b-2 border-[#A3B18A] text-[#2C3E50] transition-soft focus:outline-none">
                            O mně
                        </button>
                        <button id="btn-tab-kvalifikace" class="pb-4 text-xl font-bold font-heading border-b-2 border-transparent text-[#4A5568]/50 hover:text-[#2C3E50] transition-soft focus:outline-none">
                            Moje kvalifikace & Certifikace
                        </button>
                    </div>

                    <!-- Obsah záložky: O mně -->
                    <div id="content-tab-omne" class="space-y-6 text-lg text-[#4A5568] leading-relaxed">
                        <h3 class="text-2xl font-bold text-[#2C3E50]">Pár slov o mně</h3>
                        <p>
                            Dobrý den, dovolte mi se představit. Jmenuji se <strong>Kateřina Černá</strong> a jsem veterinární lékařka se zaměřením na medicínu koní, Certified Equine Rehabilitation Practitioner (CERP), IAVC Certifikovaná Chiropraktička pro Koně a Psy a Certified Equine Kinesiology Taping Therapist (CEKTT).
                        </p>
                        <p>
                            Můj život je spjatý s koňmi už od útlého dětství. Začalo to návštěvami turistických jízdáren, hřebčínů, či jakékoli ohrady s koňmi během výletů. Dále to pokračovalo vstupem do jezdeckého oddílu a brzy na to zahájením aktivních účastí parkurových soutěží. A nakonec to vyvrcholilo v roce 2014, kdy jsem promovala na Fakultě veterinárního lékařství VFU Brno a začala se naplno věnovat medicíně zaměřené na koně.
                        </p>
                        <p>
                            Zpočátku jsem pracovala jako terénní veterinární lékař pro koně. Později jsem k tomu přidala práci externího veterinární lékaře na Veterinární klinice Heřmanův Městec, kde jsem získala spoustu důležitých zkušeností se složitými akutními případy. Mimoto jsem se neustále vzdělávala absolvováním bezpočtu odborných seminářů pořádaných Komorou veterinárních lékařů ČR, Českou hipiatrickou společností, EDUvet, Doc. MVDr. B. Bezděkovou Ph.D., Dip. ECEIM.
                        </p>
                        <p>
                            Mou kariéru na několik let zbrzdily mateřské povinnosti, během kterých jsem si stále více uvědomovala, že nejsem zcela spokojená s konceptem péče poskytovaným v minulých letech. Na konci mateřské jsem se proto rozhodla absolvovat IAVC Essentials of Veterinary Chiropractic Course v Německu zakončené získáním mezinárodního certifikátu. Tento kurz mě, kromě nesmírně účinné manuální metody chiropraxe, naučil holistickému přístupu k pacientovi, který jsem do té doby velmi postrádala.
                        </p>
                        <p>
                            Vstup do světa celostního přístupu k pacientovi mě velmi motivoval k dalšímu rozvíjení vzdělání a dovedností v tomto odvětví. Na získání mezinárodního certifikátu z chiropraxe jsem proto navázala v roce 2022 získáním titulu CEKTT (Certified Equine Kinesiology Taping Therapist) a v roce 2025 titulu CERP (Certified Equine Rehabilitation Practitioner).
                        </p>
                        
                        <div class="p-6 rounded-2xl bg-[#FAF9F6] border-l-4 border-[#A3B18A] italic my-6 text-base space-y-4">
                            <p>
                                „Mým cílem při péči o pacienta je kombinovat veškeré léčebné nástroje, které jsem se během let naučila používat, v případě potřeby úzce spolupracovat s odborníky z oblasti ortopedie či interní medicíny, a následně nalézt nejvhodnější terapeutický plán, který povede k co možná nejvýraznějšímu zmírnění či úplnému vyřešení potíží pacienta a spokojenosti majitele.“
                            </p>
                            <p>
                                „Zakládám si na klidném přístupu ke zvířeti, protože dle mého názoru jen klidné a pokud možno důvěřující zvíře je schopné s námi spolupracovat na nejlepším výsledku léčby.“
                            </p>
                        </div>

                        <p class="font-medium text-[#2C3E50]">
                            Jsem perfekcionistka. Proto nikdy od pacienta neodcházím dříve, než se podaří dosáhnout nejlepšího možného výsledku pro konkrétního koně v tu danou chvíli. Můj přístup je unikátní a také časově i fyzicky náročný, což se odráží na ceně mojí práce.
                        </p>
                    </div>

                    <!-- Obsah záložky: Kvalifikace -->
                    <div id="content-tab-kvalifikace" class="hidden space-y-8">
                        <h3 class="text-2xl font-bold text-[#2C3E50]">Odborné vzdělání a získané tituly</h3>
                        
                        <div class="space-y-6">
                            <!-- CERP -->
                            <div class="p-6 rounded-2xl bg-[#FAF9F6] border border-[#2C3E50]/5 hover:shadow-md transition-soft flex gap-4">
                                <div class="text-[#A3B18A] text-3xl pt-1">
                                    <i class="fa-solid fa-graduation-cap"></i>
                                </div>
                                <div class="space-y-2">
                                    <div class="flex items-center gap-3 flex-wrap">
                                        <span class="px-2 py-0.5 rounded text-xs bg-[#A3B18A]/10 text-[#A3B18A] font-semibold">2025</span>
                                        <h4 class="text-lg font-bold text-[#2C3E50]">CERP – Certified Equine Rehabilitation Practitioner</h4>
                                    </div>
                                    <p class="text-sm text-[#4A5568]">
                                        Mezinárodně uznávaná certifikace pro rehabilitaci a fyzikální terapii koní zastřešená University of Tennessee (USA) a mezinárodní akademií.
                                    </p>
                                </div>
                            </div>

                            <!-- CEKTT -->
                            <div class="p-6 rounded-2xl bg-[#FAF9F6] border border-[#2C3E50]/5 hover:shadow-md transition-soft flex gap-4">
                                <div class="text-[#A3B18A] text-3xl pt-1">
                                    <i class="fa-solid fa-certificate"></i>
                                </div>
                                <div class="space-y-2">
                                    <div class="flex items-center gap-3 flex-wrap">
                                        <span class="px-2 py-0.5 rounded text-xs bg-[#A3B18A]/10 text-[#A3B18A] font-semibold">2022</span>
                                        <h4 class="text-lg font-bold text-[#2C3E50]">CEKTT – Certified Equine Kinesiology Taping Therapist</h4>
                                    </div>
                                    <p class="text-sm text-[#4A5568]">
                                        Specializovaný výcvik a certifikace pro aplikaci elastických kineziotapů přizpůsobených specifické anatomii a biomechanice koní.
                                    </p>
                                </div>
                            </div>

                            <!-- IAVC -->
                            <div class="p-6 rounded-2xl bg-[#FAF9F6] border border-[#2C3E50]/5 hover:shadow-md transition-soft flex gap-4">
                                <div class="text-[#A3B18A] text-3xl pt-1">
                                    <i class="fa-solid fa-stethoscope"></i>
                                </div>
                                <div class="space-y-2">
                                    <div class="flex items-center gap-3 flex-wrap">
                                        <span class="px-2 py-0.5 rounded text-xs bg-[#A3B18A]/10 text-[#A3B18A] font-semibold">2021</span>
                                        <h4 class="text-lg font-bold text-[#2C3E50]">IAVC Certifikovaná Chiropraktička pro Koně a Psy</h4>
                                    </div>
                                    <p class="text-sm text-[#4A5568]">
                                        IAVC Essentials of Veterinary Chiropractic Course zakončený úspěšnou mezinárodní zkouškou. Celostní přístup, diagnostika funkčních blokád páteře a šetrná manuální náprava.
                                    </p>
                                </div>
                            </div>

                            <!-- FVL VFU Brno -->
                            <div class="p-6 rounded-2xl bg-[#FAF9F6] border border-[#2C3E50]/5 hover:shadow-md transition-soft flex gap-4">
                                <div class="text-[#A3B18A] text-3xl pt-1">
                                    <i class="fa-solid fa-university"></i>
                                </div>
                                <div class="space-y-2">
                                    <div class="flex items-center gap-3 flex-wrap">
                                        <span class="px-2 py-0.5 rounded text-xs bg-[#A3B18A]/10 text-[#A3B18A] font-semibold">2014</span>
                                        <h4 class="text-lg font-bold text-[#2C3E50]">Veterinární lékařství – FVL VFU Brno</h4>
                                    </div>
                                    <p class="text-sm text-[#4A5568]">
                                        Řádné šestileté doktorské studium na Fakultě veterinárního lékařství se zaměřením na koňskou medicínu.
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 4. SLUŽBY (CHIROPRAXE A DOPLŇKOVÉ METODY) -->
    <section id="sluzby" class="py-24 bg-[#FAF9F6]">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center max-w-2xl mx-auto space-y-4 mb-20">
                <span class="text-xs font-semibold uppercase tracking-wider text-[#A3B18A]">Specializace praxe</span>
                <h2 class="text-4xl font-bold text-[#2C3E50]">Základní služby & metody</h2>
                <div class="w-16 h-1 bg-[#A3B18A] mx-auto rounded-full"></div>
                <p class="text-lg text-[#4A5568]">
                    Má praxe se úzce a plně soustředí pouze na veterinární chiropraxi a navazující doplňkové rehabilitační metody.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-stretch">
                
                <!-- Služba 1: Chiropraxe -->
                <div class="p-8 md:p-10 rounded-3xl bg-white border border-[#2C3E50]/5 hover:shadow-xl transition-soft flex flex-col justify-between">
                    <div class="space-y-6">
                        <div class="w-16 h-16 rounded-2xl bg-[#A3B18A]/10 text-[#A3B18A] flex items-center justify-center text-3xl">
                            <i class="fa-solid fa-hands-holding"></i>
                        </div>
                        <h3 class="text-3xl font-bold text-[#2C3E50]">Veterinární chiropraxe</h3>
                        <p class="text-[#4A5568] leading-relaxed text-base">
                            Chiropraxe je manuální terapie zaměřená na zkoumání a obnovu plné pohyblivosti kloubních spojení, zejména na páteři koně. Cílem je odstranění tzv. funkčních blokád (subluxací), které negativně ovlivňují nervový systém a svalový aparát koně.
                        </p>
                        <ul class="space-y-3 text-sm text-[#4A5568]">
                            <li class="flex items-center gap-2"><i class="fa-solid fa-check text-[#A3B18A]"></i> Odstranění ztuhlosti, asymetrií a bolestivosti</li>
                            <li class="flex items-center gap-2"><i class="fa-solid fa-check text-[#A3B18A]"></i> Zlepšení celkové ohebnosti a koordinace pohybu</li>
                            <li class="flex items-center gap-2"><i class="fa-solid fa-check text-[#A3B18A]"></i> Řešení náhlého zhoršení jezditelnosti</li>
                            <li class="flex items-center gap-2"><i class="fa-solid fa-check text-[#A3B18A]"></i> Šetrná korekce s ohledem na psychiku a klid zvířete</li>
                        </ul>
                    </div>
                </div>

                <!-- Služba 2: Doplňkové metody -->
                <div class="p-8 md:p-10 rounded-3xl bg-white border border-[#2C3E50]/5 hover:shadow-xl transition-soft flex flex-col justify-between">
                    <div class="space-y-6">
                        <div class="w-16 h-16 rounded-2xl bg-[#A3B18A]/10 text-[#A3B18A] flex items-center justify-center text-3xl">
                            <i class="fa-solid fa-kit-medical"></i>
                        </div>
                        <h3 class="text-3xl font-bold text-[#2C3E50]">Doplňkové metody</h3>
                        <p class="text-[#4A5568] leading-relaxed text-base">
                            Chiropraktické ošetření doplňuji o moderní rehabilitační postupy pro prodloužení a upevnění léčebného efektu na pohybovém aparátu.
                        </p>
                        
                        <div class="space-y-4 pt-2">
                            <!-- Kinesiotaping -->
                            <div class="border-t border-[#2C3E50]/5 pt-4">
                                <h4 class="text-lg font-bold text-[#2C3E50] flex items-center gap-2">
                                    <span class="w-2 h-2 rounded-full bg-[#A3B18A]"></span> Kinesiotaping (CEKTT)
                                </h4>
                                <p class="text-sm text-[#4A5568] mt-1">
                                    Aplikace elastických pásek, které jemně nadzvedávají kůži, stimulují lymfatický tok, tlumí bolest, uvolňují přetížené svalové skupiny nebo naopak podporují správnou svalovou aktivitu.
                                </p>
                            </div>

                            <!-- Surefoot -->
                            <div class="border-t border-[#2C3E50]/5 pt-4">
                                <h4 class="text-lg font-bold text-[#2C3E50] flex items-center gap-2">
                                    <span class="w-2 h-2 rounded-full bg-[#A3B18A]"></span> Surefoot podložky
                                </h4>
                                <p class="text-sm text-[#4A5568] mt-1">
                                    Práce na speciálních balančních podložkách Surefoot, které koním poskytují možnost uvědomit si své těžiště, uvolnit chronické napětí v hlubokých svalech, zklidnit nervovou soustavu a výrazně zlepšit propriocepci.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 5. GALERIE -->
    <section id="galerie" class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center max-w-2xl mx-auto space-y-4 mb-20">
                <span class="text-xs font-semibold uppercase tracking-wider text-[#A3B18A]">Momenty z praxe</span>
                <h2 class="text-4xl font-bold text-[#2C3E50]">Galerie naší spolupráce</h2>
                <div class="w-16 h-1 bg-[#A3B18A] mx-auto rounded-full"></div>
                <p class="text-lg text-[#4A5568]">
                    Uvolnění, klid a precizní diagnostika přímo v terénu u mých pacientů.
                </p>
            </div>

            <!-- Mřížka s fotografiami -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Foto 1 -->
                <div class="group relative rounded-2xl overflow-hidden shadow-sm aspect-video bg-[#2C3E50]/5 cursor-pointer" onclick="openLightbox('https://images.unsplash.com/photo-1553284965-83fd3e82fa5a?auto=format&fit=crop&q=80&w=1200', 'Vyšetření páteře v klidném prostředí stáje')">
                    <img src="https://images.unsplash.com/photo-1553284965-83fd3e82fa5a?auto=format&fit=crop&q=80&w=600" alt="Ošetření" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                    <div class="absolute inset-0 bg-[#2C3E50]/20 opacity-0 group-hover:opacity-100 transition-soft flex items-center justify-center">
                        <i class="fa-solid fa-magnifying-glass-plus text-white text-3xl"></i>
                    </div>
                </div>
                <!-- Foto 2 -->
                <div class="group relative rounded-2xl overflow-hidden shadow-sm aspect-video bg-[#2C3E50]/5 cursor-pointer" onclick="openLightbox('https://images.unsplash.com/photo-1598974357801-cbca100e6563?auto=format&fit=crop&q=80&w=1200', 'Důvěra a klidný přístup jako klíč k úspěchu')">
                    <img src="https://images.unsplash.com/photo-1598974357801-cbca100e6563?auto=format&fit=crop&q=80&w=600" alt="Práce na koni" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                    <div class="absolute inset-0 bg-[#2C3E50]/20 opacity-0 group-hover:opacity-100 transition-soft flex items-center justify-center">
                        <i class="fa-solid fa-magnifying-glass-plus text-white text-3xl"></i>
                    </div>
                </div>
                <!-- Foto 3 -->
                <div class="group relative rounded-2xl overflow-hidden shadow-sm aspect-video bg-[#2C3E50]/5 cursor-pointer" onclick="openLightbox('https://images.unsplash.com/photo-1601758228041-f3b2795255f1?auto=format&fit=crop&q=80&w=1200', 'Balanční cvičení a uvolnění hlubokého stabilizačního systému')">
                    <img src="https://images.unsplash.com/photo-1601758228041-f3b2795255f1?auto=format&fit=crop&q=80&w=600" alt="Senzomotorika" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                    <div class="absolute inset-0 bg-[#2C3E50]/20 opacity-0 group-hover:opacity-100 transition-soft flex items-center justify-center">
                        <i class="fa-solid fa-magnifying-glass-plus text-white text-3xl"></i>
                    </div>
                </div>
                <!-- Foto 4 -->
                <div class="group relative rounded-2xl overflow-hidden shadow-sm aspect-video bg-[#2C3E50]/5 cursor-pointer" onclick="openLightbox('https://images.unsplash.com/photo-1534067783941-51c9c23eccfd?auto=format&fit=crop&q=80&w=1200', 'Detaily svalového tonu po chiropraktickém ošetření')">
                    <img src="https://images.unsplash.com/photo-1534067783941-51c9c23eccfd?auto=format&fit=crop&q=80&w=600" alt="Uvolnění svalů" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                    <div class="absolute inset-0 bg-[#2C3E50]/20 opacity-0 group-hover:opacity-100 transition-soft flex items-center justify-center">
                        <i class="fa-solid fa-magnifying-glass-plus text-white text-3xl"></i>
                    </div>
                </div>
                <!-- Foto 5 -->
                <div class="group relative rounded-2xl overflow-hidden shadow-sm aspect-video bg-[#2C3E50]/5 cursor-pointer" onclick="openLightbox('https://images.unsplash.com/photo-1518467166-367ae630dd32?auto=format&fit=crop&q=80&w=1200', 'Biomechanika kopyt a stabilita ve stoji')">
                    <img src="https://images.unsplash.com/photo-1518467166-367ae630dd32?auto=format&fit=crop&q=80&w=600" alt="Postoj koně" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                    <div class="absolute inset-0 bg-[#2C3E50]/20 opacity-0 group-hover:opacity-100 transition-soft flex items-center justify-center">
                        <i class="fa-solid fa-magnifying-glass-plus text-white text-3xl"></i>
                    </div>
                </div>
                <!-- Foto 6 -->
                <div class="group relative rounded-2xl overflow-hidden shadow-sm aspect-video bg-[#2C3E50]/5 cursor-pointer" onclick="openLightbox('https://images.unsplash.com/photo-1551884831-b590d8943df7?auto=format&fit=crop&q=80&w=1200', 'Spokojenost pacienta na závěr terapie')">
                    <img src="https://images.unsplash.com/photo-1551884831-b590d8943df7?auto=format&fit=crop&q=80&w=600" alt="Kontakt s koněm" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                    <div class="absolute inset-0 bg-[#2C3E50]/20 opacity-0 group-hover:opacity-100 transition-soft flex items-center justify-center">
                        <i class="fa-solid fa-magnifying-glass-plus text-white text-3xl"></i>
                    </div>
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