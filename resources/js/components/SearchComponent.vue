<template>
    <div class="container">
        <div class="notification">
            <div class="columns">
                <div class="column">
                    <input-city-search placeholder="Откуда" v-model="form.from"/>
                </div>
                <div class="column">
                    <input-city-search placeholder="Куда" v-model="form.to"/>
                </div>
                <div class="column">
                    <div class="columns">
                        <div class="column">
                            <input-date placeholder="Дата" v-model="form.date"/>
                        </div>
                        <div class="column">
                            <a class="button" @click="searchRoute()"><i class="fas fa-search"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import InputCitySearch from '../inputs/CitySearch';
    import InputDate from '../inputs/Date';

    export default {
        components: {
            InputCitySearch,
            InputDate,
        },
        data() {
            return {
                form: {
                    from: null,
                    to: null,
                    date: new Date
                }
            }
        },
        methods: {
            searchRoute() {
                axios.get('api/search/route', {
                    params: this.form
                })
                    .then(response => {
                        this.$emit('routes', response.data.data)
                    })
                    .catch(error => {
                        console.log(error);
                    })
            }
        }

    }
</script>

<style scoped>

</style>
