<?php
    $coords = get_field('coordonnees', 'options');
?>

<section id="mapRestau" class="padding-top-100 bgBlack">
    <div class="row">
        <div class="main-title">
            <h2 class="title colorGold">
                <span class="bgGold"></span>
                ACC&Egrave;S
                <span class="bgGold"></span>
            </h2>
        </div>
        <div id="map" data-lat="<?php echo $coords['lat']; ?>" data-lng="<?php echo $coords['lng']; ?>"></div>
        <div class="infos-restau">
            <div class="info-restau col-md-6 col-xs-12">
                <h3>Adresse</h3>
                <p class="info address">
                    <span class="road">21 Boulevard Jean Monnet</span><br/>
                    <span class="postal">94350 Villiers-sur-Marne</span>
                </p>
            </div>
            <div class="info-restau col-md-6 col-xs-12">
                <h3>Téléphone</h3>
                <p class="info phone">01 49 41 59 56</p>
            </div>

        </div>
    </div>
</section>