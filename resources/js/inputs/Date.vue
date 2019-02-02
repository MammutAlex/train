<template>
    <datepicker :value="value" :placeholder="placeholder" @input="$emit('input', $event)" input-class="input"
                :format="customFormatter" :language="ru"/>
</template>

<script>
    import moment from 'moment';
    import Datepicker from 'vuejs-datepicker';
    import {ru} from 'vuejs-datepicker/dist/locale'

    export default {
        props: {
            placeholder: {
                type: String,
                default: 'Дата'
            },
            value: {
                type: Date,
            }
        },
        data() {
            return {
                ru: ru
            }
        },
        components:
            {
                Datepicker
            }
        ,
        methods: {
            customFormatter(date) {
                return moment(date).format("YYYY-MM-DD");
            }
        }
    }
</script>

<style scoped>

</style>
