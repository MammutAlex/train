<template>
    <div class="container">
        <div class="notification">
            <div class="columns">
                <div class="column">
                    <input-city-search placeholder="Откуда" v-model="cityFrom"/>
                </div>
                <div class="column">
                    <input-city-search placeholder="Куда" v-model="cityTo"/>

                </div>
                <div class="column">
                    <input-date placeholder="Дата" v-model="dateTime"/>
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
                cityFrom: null,
                cityTo: null,
                dateTime: new Date
            }
        }

    }
</script>

<style scoped>

</style>
