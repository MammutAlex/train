<template>
    <datepicker :value="value" :placeholder="placeholder" @input="setDate"
                input-class="input" :format="customFormatter" :language="ru"/>
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
                type: String,
                default: moment().format('YYYY-MM-DD')
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
                return moment(date).format('YYYY-MM-DD');
            },
            setDate(date) {
                this.$emit('input', this.customFormatter(date));
            }
        }
    }
</script>

<style scoped>

</style>
