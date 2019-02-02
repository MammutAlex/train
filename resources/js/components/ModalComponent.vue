<template>
    <div class="modal">
        <div class="modal-background"></div>
        <div class="modal-content">
            <div class="box">
                <article class="media">
                    <div class="media-content">
                        <div class="content">
                            <p>
                                Поезд <b>123</b> с маршрутом <b>Питер - Москва</b>
                            </p>
                            <div class="field">
                                <label class="label">Ваше имя</label>
                                <div class="control">
                                    <input class="input" type="text" placeholder="Text input">
                                </div>
                            </div>

                            <div class="field is-grouped">
                                <div class="control">
                                    <button class="button is-link">Купить</button>
                                </div>
                                <div class="control">
                                    <button class="button is-text">Отменить</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </div>
        <button class="modal-close is-large" aria-label="close"></button>
    </div>
</template>

<script>
    export default {
    }
</script>

<style scoped>

</style>
