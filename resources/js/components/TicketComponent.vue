<template>
    <div>
        <search-component/>
        <list-component/>
    </div>
</template>

<script>
    import SearchComponent from './SearchComponent';
    import ListComponent from './ListComponent';

    export default {
        components: {
            SearchComponent,
            ListComponent,
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
