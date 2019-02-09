<template>
    <div class="modal is-active">
        <div class="modal-background"></div>
        <div class="modal-content">
            <div class="box">
                <article class="media">
                    <div class="media-content">
                        <div class="content">
                            <p>
                                Поезд <b v-text="value.name"></b>
                            </p>
                            <div class="field">
                                <label class="label">Ваше имя</label>
                                <div class="control">
                                    <input class="input" type="text" v-model="form.name">
                                </div>
                            </div>

                            <div class="field is-grouped">
                                <div class="control">
                                    <button class="button is-link" @click="sendForm">Купить</button>
                                </div>
                                <div class="control">
                                    <button class="button is-text" @click="closeModal">Отменить</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </div>
        <button class="modal-close is-large" aria-label="close" @click="closeModal"></button>
    </div>
</template>

<script>
    export default {
        props: {
            value: {
                type: Object,
                required: true
            }
        },
        data() {
            return {
                form: {},
            }
        },
        mounted() {
            this.prepareComponent();
        },
        watch: {
            value() {
                this.prepareComponent();
            }
        },
        methods: {
            prepareComponent() {
                this.form = {
                    route_id: this.value.id,
                    start_point_id: this.value.points[0].id,
                    end_point_id: this.value.points[1].id,
                    name: ''
                };
            },
            sendForm() {
                axios.post('api/tickets', this.form)
                    .then(response => {
                        window.open(response.data.data.url, '_blank');
                        this.closeModal();
                    });
            },
            closeModal() {
                this.$emit('input', null);
            },
        }
    }
</script>

<style scoped>

</style>
