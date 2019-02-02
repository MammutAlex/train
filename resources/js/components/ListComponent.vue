<template>
    <div>
        <div class="container">
            <div class="notification">
                <div class="columns is-centered is-vcentered is-mobile">
                    <div class="column is-narrow has-text-centered">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Номер поезда</th>
                                <th>Точка прыбытия</th>
                                <th>Точка отправления</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr v-for="route in list">
                                <th>{{route.train.number}} {{route.train.name}}</th>
                                <td>{{route.points[0].city.name}} {{route.points[0].date|formatDate}}</td>
                                <td>
                                    {{route.points[route.points.length-1].city.name}}
                                    {{route.points[route.points.length-1].date|formatDate}}
                                </td>
                                <td><a class="button"><i class="fas fa-shopping-cart"></i></a></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <modal-component/>
    </div>
</template>

<script>
    import moment from 'moment';
    import ModalComponent from './ModalComponent';

    export default {
        props: {
            list: {
                type: Array,
                required: true
            }
        },
        components: {
            ModalComponent,
        },
        filters: {
            formatDate(value) {
                return moment(value).format("YYYY-MM-DD");
            }
        }
    }
</script>

<style scoped>

</style>
