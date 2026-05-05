<?php include 'includes/header.php'; ?>

<style>
    /* ==========================================================================
       1. PANIER LATÉRAL (DRAWER)
       ========================================================================== */
    .cart-drawer {
        position: fixed;
        top: 0;
        right: -400px;
        width: 350px;
        height: 100%;
        background: #ffffff;
        box-shadow: -5px 0 15px rgba(0, 0, 0, 0.1);
        z-index: 2000;
        transition: right 0.3s ease;
        display: flex;
        flex-direction: column;
    }

    .cart-drawer.open {
        right: 0;
    }

    .cart-header {
        padding: 20px;
        background: #0f172a;
        color: white;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .cart-content {
        flex-grow: 1;
        padding: 20px;
        overflow-y: auto;
    }

    .cart-footer {
        padding: 20px;
        border-top: 1px solid #e2e8f0;
        background: #f8fafc;
    }

    .cart-item-row {
        display: flex;
        align-items: center;
        gap: 15px;
        margin-bottom: 12px;
        padding-bottom: 8px;
        border-bottom: 1px dashed #e2e8f0;
        font-size: 0.85rem;
    }

    .cart-thumb {
        width: 40px;
        height: 40px;
        object-fit: contain;
        background: #f8fafc;
        border: 1px solid #e2e8f0;
        border-radius: 2px;
    }

    .cart-item-info {
        flex-grow: 1;
        display: flex;
        justify-content: space-between;
    }

    /* ==========================================================================
       2. STATUS & BADGE
       ========================================================================== */
    .cart-status {
        position: fixed;
        top: 20px;
        right: 20px;
        z-index: 1000;
        cursor: pointer;
    }

    .cart-badge {
        background: #e63946;
        color: white;
        border-radius: 50%;
        width: 30px;
        height: 30px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 0.9rem;
        font-weight: bold;
        box-shadow: 0 4px 12px rgba(230, 57, 70, 0.3);
        transition: transform 0.2s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    }

    .cart-badge.bump {
        transform: scale(1.4);
    }

    /* ==========================================================================
       3. STRUCTURE & OFFRE SPECIALE (CONFORMITÉ LÉGALE)
       ========================================================================== */
    .malette-promo {
        width: 100%;
        height: auto;
        display: block;
        border-radius: 2px;
        border: 1px solid #e2e8f0;
        margin-bottom: 30px;
        image-rendering: -webkit-optimize-contrast;
    }

    .bundle-offer {
        background: #f1f5f9;
        border: 2px solid #0f172a;
        border-radius: 4px;
        padding: 30px;
        margin: 40px 0;
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 20px;
    }

    .bundle-text h3 { margin: 0 0 10px 0; color: #0f172a; }
    .bundle-text p { margin: 0; font-size: 0.9rem; color: #64748b; }
    
    .bundle-price { text-align: right; }
    .retail-info { display: block; color: #94a3b8; font-size: 0.9rem; margin-bottom: 5px; }
    .new-price { display: block; color: #e63946; font-size: 2rem; font-weight: 800; margin-bottom: 10px; }

    .presentation-crayons {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 30px;
        padding: 40px 0;
        align-items: stretch;
    }

    .eventail-wrapper {
        background: #f8fafc;
        border: 1px solid #e2e8f0;
        border-radius: 4px;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 20px;
    }

    .carousel-crayons {
        background: #ffffff;
        border: 1px solid #e2e8f0;
        border-radius: 4px;
        padding: 40px 20px;
        text-align: center;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        overflow: hidden;
    }

    .carousel-container {
        display: flex;
        transition: transform 0.5s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .carousel-slide {
        min-width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .slide-img-container {
        width: 100%;
        height: 300px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 20px;
        overflow: hidden;
    }

    .slide-img-container img {
        max-width: 95%;
        max-height: 100%;
        object-fit: contain;
    }

    .price-display {
        display: block;
        color: #e63946;
        font-weight: 700;
        margin-bottom: 15px;
    }

    .nav-btn {
        background: #0f172a;
        color: white;
        border: none;
        padding: 10px 20px;
        cursor: pointer;
        font-size: 0.7rem;
        font-weight: 600;
        text-transform: uppercase;
        border-radius: 2px;
    }

    @media (max-width: 850px) {
        .presentation-crayons { grid-template-columns: 1fr; }
        .bundle-offer { flex-direction: column; text-align: center; }
        .bundle-price { text-align: center; }
    }
</style>

<!-- BADGE PANIER -->
<div class="cart-status" id="cart-trigger">
    <div class="cart-badge" id="cart-badge">
        <span id="cart-count">0</span>
    </div>
</div>

<!-- TIROIR DU PANIER -->
<div class="cart-drawer" id="cart-drawer">
    <div class="cart-header" style="background: #0f172a; color: #ffffff !important; padding: 20px; display: flex; justify-content: space-between; align-items: center;">
        <h4 style="margin:0; font-size: 0.9rem; text-transform: uppercase; letter-spacing: 1px; font-weight: 600; color: #ffffff !important; display: block !important;">
            Votre commande
        </h4>
        <button id="close-cart" style="background:none; border:none; color:white; cursor:pointer; font-size:1.5rem; line-height: 1;">&times;</button>
    </div>
    <div class="cart-content">
        <div id="cart-list">
            <p style="color: #64748b; font-style: italic; font-size: 0.8rem;">Panier vide.</p>
        </div>
    </div>
    <div class="cart-footer">
        <button class="btn-clear" onclick="clearCart()">Vider le panier</button>
        <div style="display:flex; justify-content:space-between; font-weight:bold; margin-bottom:15px; font-size: 0.9rem;">
            <span>TOTAL ESTIMÉ</span>
            <span id="cart-total">0.00 €</span>
        </div>
        <button class="nav-btn" style="width:100%; background:#e63946;">Démonstration terminée</button>
    </div>
</div>

<section class="hero">
    <div class="hero-inner">
        <h1>Rootstrap Shop</h1>
        <p>L'équipement complet de la mallette Rootstrap, disponible à l'unité ou en kit complet.</p>
    </div>
    <a href="#content" class="hero-chevron">︾</a>
</section>

<main class="content-area base-template-page" id="content">

    <section class="header-block">
        <div class="band-container">
            <div class="section-titles reveal">
                <span class="category-badge">Sélection Expert</span>
                <h2>01 - Outils & Accessoires Rootstrap</h2>
            </div>
        </div>
    </section>

    <section class="landing-band">
        <div class="band-container">
            <h2>La Mallette Rootstrap : L'Atelier Portatif du Concepteur</h2>
            <p>Passer de l'esquisse à la structure durable demande des outils de précision. La mallette Rootstrap allie la noblesse du dessin traditionnel aux nécessités du flux numérique.</p>
            
            <img src="images/rootstrap/malette-bootstrap-ouverte.png" class="malette-promo" alt="Mallette complète Rootstrap">

            <!-- OFFRE BUNDLE MALLETTE COMPLÈTE -->
            <div class="bundle-offer reveal">
                <div class="bundle-text">
                    <h3>Kit Expert : La Mallette Intégrale</h3>
                    <p>L'essentiel réuni : mallette, 12 crayons, 4 stabilos, règle, gomme, taille-crayon et clé USB 64Go.</p>
                </div>
                <div class="bundle-price">
                    <span class="retail-info">Valeur au détail : 141,70 €</span>
                    <span class="new-price">99,00 €</span>
                    <button class="nav-btn btn-add" 
                            data-name="Kit Mallette Complète" 
                            data-price="99.00" 
                            data-img="images/rootstrap/malette-bootstrap-ouverte.png">
                        Ajouter le Kit au panier
                    </button>
                </div>
            </div>

            <!-- CARROUSEL 01 : CRAYONS -->
            <div class="presentation-crayons reveal">
                <div class="eventail-wrapper">
                    <img src="images/rootstrap/eventaille-couleur.png" alt="Éventail Rootstrap">
                </div>
                <div class="carousel-crayons">
                    <div class="carousel-container" id="mainCarousel">
                        <?php
                        $crayons = [
                            'crayon-hb.png', 'crayon-2b.png', 'crayon-b.png', 'crayon-h.png',
                            'crayon-dark.png', 'crayon-danger.png', 'crayon-primary.png',
                            'crayon-success.png', 'crayon-info.png', 'crayon-warning.png',
                            'crayon-light.png', 'crayon-secondary.png'
                        ];
                        foreach ($crayons as $file) :
                            $name = str_replace(['-', '.png'], [' ', ''], $file);
                        ?>
                            <div class="carousel-slide">
                                <div class="slide-img-container">
                                    <img src="images/rootstrap/<?php echo $file; ?>" alt="<?php echo $file; ?>">
                                </div>
                                <h4><?php echo $name; ?></h4>
                                <span class="price-display">3,50 €</span>
                                <button class="nav-btn btn-add"
                                        data-name="<?php echo $name; ?>"
                                        data-price="3.50"
                                        data-img="images/rootstrap/<?php echo $file; ?>"
                                        style="background:#e63946;">
                                    Ajouter au panier
                                </button>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="carousel-nav">
                        <button class="nav-btn" onclick="moveSlide(-1)">❮</button>
                        <button class="nav-btn" onclick="moveSlide(1)">❯</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CARROUSEL 02 : STABYLOS -->
    <section class="landing-band" style="padding-top: 0;">
        <div class="band-container">
            <div class="presentation-crayons reveal">
                <div class="eventail-wrapper">
                    <img src="images/rootstrap/vignette-stabylo.png" alt="Gamme Stabilo Rootstrap">
                </div>
                <div class="carousel-crayons">
                    <div class="carousel-container" id="stabiloCarousel">
                        <?php
                        $stabilos = ['stabilo-vert.png', 'stabilo-cyan.png', 'stabilo-jaune.png', 'stabilo-rose.png'];
                        foreach ($stabilos as $file) :
                            $name = str_replace(['-', '.png'], [' ', ''], $file);
                        ?>
                            <div class="carousel-slide">
                                <div class="slide-img-container">
                                    <img src="images/rootstrap/<?php echo $file; ?>" alt="<?php echo $file; ?>">
                                </div>
                                <h4><?php echo $name; ?></h4>
                                <span class="price-display">2,80 €</span>
                                <button class="nav-btn btn-add"
                                        data-name="<?php echo $name; ?>"
                                        data-price="2.80"
                                        data-img="images/rootstrap/<?php echo $file; ?>"
                                        style="background:#e63946;">
                                    Ajouter au panier
                                </button>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="carousel-nav">
                        <button class="nav-btn" onclick="moveStabilo(-1)">❮</button>
                        <button class="nav-btn" onclick="moveStabilo(1)">❯</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 03 : ACCESSOIRES -->
    <section class="landing-band" style="padding-top: 0;">
        <div class="band-container">
            <div class="presentation-crayons reveal">
                <div class="eventail-wrapper">
                    <img src="images/rootstrap/vignette-accessoires.png" alt="Accessoires Rootstrap">
                </div>
                <div class="carousel-crayons">
                    <div class="carousel-container" id="accessoiresCarousel">
                        <?php
                        $accessoires = [
                            ['file' => 'gomme.png', 'name' => 'Gomme Technique', 'price' => '1.50'],
                            ['file' => 'taille-crayon.png', 'name' => 'Taille-crayon Métal', 'price' => '5.00'],
                            ['file' => 'clef-usb.png', 'name' => 'Clé USB 64Go', 'price' => '25.00'],
                            ['file' => 'regle-seule.png', 'name' => 'Règle de précision', 'price' => '12.00']
                        ];
                        foreach ($accessoires as $item) : ?>
                            <div class="carousel-slide">
                                <div class="slide-img-container">
                                    <img src="images/rootstrap/<?php echo $item['file']; ?>" alt="<?php echo $item['name']; ?>">
                                </div>
                                <h4><?php echo $item['name']; ?></h4>
                                <span class="price-display"><?php echo $item['price']; ?> €</span>
                                <button class="nav-btn btn-add"
                                        data-name="<?php echo $item['name']; ?>"
                                        data-price="<?php echo $item['price']; ?>"
                                        data-img="images/rootstrap/<?php echo $item['file']; ?>"
                                        style="background:#e63946;">
                                    Ajouter au panier
                                </button>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="carousel-nav">
                        <button class="nav-btn" onclick="moveAccessoires(-1)">❮</button>
                        <button class="nav-btn" onclick="moveAccessoires(1)">❯</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<script>
    /* --- NAVIGATION CARROUSELS --- */
    let currentPos = 0;
    const container = document.getElementById('mainCarousel');
    function moveSlide(direction) {
        const slides = document.querySelectorAll('#mainCarousel .carousel-slide').length;
        currentPos = (currentPos + direction + slides) % slides;
        container.style.transform = `translateX(-${currentPos * 100}%)`;
    }

    let stabiloPos = 0;
    const stabContainer = document.getElementById('stabiloCarousel');
    function moveStabilo(direction) {
        const slides = document.querySelectorAll('#stabiloCarousel .carousel-slide').length;
        stabiloPos = (stabiloPos + direction + slides) % slides;
        stabContainer.style.transform = `translateX(-${stabiloPos * 100}%)`;
    }

    let accessPos = 0;
    const accessContainer = document.getElementById('accessoiresCarousel');
    function moveAccessoires(direction) {
        const slides = document.querySelectorAll('#accessoiresCarousel .carousel-slide').length;
        accessPos = (accessPos + direction + slides) % slides;
        accessContainer.style.transform = `translateX(-${accessPos * 100}%)`;
    }

    /* --- LOGIQUE PANIER --- */
    let cartCount = 0;
    let cartTotal = 0;
    let cartItems = [];

    const countDisplay = document.getElementById('cart-count');
    const badge = document.getElementById('cart-badge');
    const drawer = document.getElementById('cart-drawer');
    const list = document.getElementById('cart-list');
    const totalDisplay = document.getElementById('cart-total');

    document.getElementById('cart-trigger').onclick = () => drawer.classList.add('open');
    document.getElementById('close-cart').onclick = () => drawer.classList.remove('open');

    document.querySelectorAll('.btn-add').forEach(button => {
        button.addEventListener('click', (e) => {
            e.stopPropagation();
            const name = button.getAttribute('data-name');
            const price = parseFloat(button.getAttribute('data-price'));
            const img = button.getAttribute('data-img');

            cartCount++;
            cartTotal += price;
            cartItems.push({ name, price, img });

            countDisplay.innerText = cartCount;
            badge.classList.remove('bump');
            void badge.offsetWidth;
            badge.classList.add('bump');

            updateDrawer();

            const originalText = button.innerText;
            button.innerText = "Ajouté !";
            button.style.background = "#0f172a";
            setTimeout(() => {
                button.innerText = originalText;
                button.style.background = "#e63946";
            }, 800);
        });
    });

    function updateDrawer() {
        totalDisplay.innerText = cartTotal.toFixed(2) + " €";
        if (cartItems.length === 0) {
            list.innerHTML = '<p style="color: #64748b; font-style: italic; font-size: 0.8rem;">Panier vide.</p>';
        } else {
            list.innerHTML = cartItems.map(item => `
                <div class="cart-item-row">
                    <img src="${item.img}" class="cart-thumb" alt="">
                    <div class="cart-item-info">
                        <span>${item.name}</span>
                        <span style="font-weight:bold;">${item.price.toFixed(2)} €</span>
                    </div>
                </div>
            `).join('');
        }
    }
</script>

<?php include 'includes/footer.html'; ?>