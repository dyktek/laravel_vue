<template>
    <button @click="addToBasket(product.id)" class="btn btn-success">Dodaj do koszyka {{product.price}}</button>
</template>

<script>
    export default {
        props: ['product'],
        methods: {
            addToBasket(id) {
                axios(`add-to-basket/${id}`)
                    .then(result => {
                        this.$store.state.basket = result.data;
                    })
            }
        }
    }
</script>
