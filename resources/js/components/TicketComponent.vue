<template>
    <div>
        <search-component @routes="setList"/>
        <list-component :list="list"/>
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
        data() {
            return {
                list: [],
            }
        },
        methods: {
            setList(data) {
                this.list = data;
            }
        }
    }
</script>
