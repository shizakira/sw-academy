<section class="info" data-params="<?= htmlspecialchars(json_encode($arParams)) ?>">
    <div v-for="item in about" class="about">
        <div class="about__inner about__inner_right">
            <h2 class="about__title">{{item.title}}</h2>
            <div class="about__desc-wrapper">
                <p class="about__desc">
                    {{item.desc1}}
                </p>
                <p class="about__desc">
                    {{item.desc2}}
                </p>
            </div>
            <button v-if="item.button" class="button button_send button_shadow">{{item.button}}</button>
        </div>
    </div>

    <div v-for="image in images" class="img-wrapper img-wrapper_disable">
        <img :src="image.src" :alt="image.alt" class="info__img">
    </div>
</section>

<script type="module" src="templates/main/components/about/templates/.default/about.js"></script>