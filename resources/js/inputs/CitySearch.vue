<template>
    <multiselect v-model="selectedCountries" :placeholder="placeholder" :options="countries" :loading="isLoading"
                 track-by="name" label="name" :internal-search="false" @search-change="asyncFind"
                 @select="$emit('input', $event.id)"/>
</template>

<script>
    import Multiselect from 'vue-multiselect'

    export default {
        props: {
            placeholder: {
                type: String,
                default: 'Type to search'
            },
            value: {
                type: Number
            }
        },
        components: {
            Multiselect
        },
        data() {
            return {
                selectedCountries: null,
                countries: [],
                isLoading: false
            }
        },
        methods: {
            limitText(count) {
                return `and ${count} other countries`
            },
            asyncFind(query) {
                if (query.length === 0) {
                    return this.countries = [];
                }
                this.isLoading = true;
                axios.get('api/search/city/' + query)
                    .then(response => {
                        this.countries = response.data.data;
                        this.isLoading = false;
                    });
            },
        }
    }
</script>

<style scoped>

</style>
