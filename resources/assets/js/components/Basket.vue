<template>
    <div>
        <table class="table table-hover">
            <tbody>
            <tr v-for="product in getBasket">
                <td>{{product.name}}</td>
                <td>{{product.quantity}}</td>
                <td>{{product.quantity * product.price}}</td>
                <td>
                    <button @click="quantityProduct(product, true)" class="btn btn-success">+</button>
                    <button @click="quantityProduct(product)" class="btn btn-danger">-</button>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    export default {
        computed: {
            getBasket() {
                return this.$store.state.basket;
            }
        },
        created:function () {
            axios('get-basket')
                .then(result => {
                    this.$store.state.basket = result.data;
                })
        },
        methods: {
            quantityProduct(product, up = false) {
                up ? product.quantity++ : product.quantity--;

                axios(`quantity-product/${product.id}/${product.quantity}`)
                    .then(result => {
                        this.$store.state.basket = result.data;
                    })
            }
        }
    }
</script>
