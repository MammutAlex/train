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
                                <th v-text="route.name"></th>
                                <td>{{route.points[0].city.name}} {{route.points[0].date}}</td>
                                <td>{{route.points[1].city.name}} {{route.points[1].date}}</td>
                                <td>
                                    <a class="button" @click="setActive(route)"><i class="fas fa-shopping-cart"></i></a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <modal-component v-model="activeRoute" v-if="activeRoute"/>
    </div>
</template>

<script>
    import ModalComponent from './ModalComponent';

    export default {
        props: {
            list: {
                type: Array,
                required: true
            }
        },
        data() {
            return {
                activeRoute: null
            };
        },
        components: {
            ModalComponent,
        },
        methods: {
            setActive(route) {
                this.activeRoute = route;
            }
        }
    }
</script>

<style scoped>

</style>
