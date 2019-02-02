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
                            <tr>
                                <th>123 василек</th>
                                <td>Питер 12.08.19</td>
                                <td>Москва 12.08.19</td>
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
    import ModalComponent from './ModalComponent';

    export default {
        components: {
            ModalComponent,
        },
    }
</script>

<style scoped>

</style>
