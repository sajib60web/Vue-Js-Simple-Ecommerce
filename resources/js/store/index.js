export default {
    state: {
        products:[],
        product:[],
    },

    getters:{
        // FrontEnd Getters
        getCategory(state) {
            return state.products
        },

        singleproduct(state) {
            return state.product
        },
    },

    actions: {
        // FrontEnd Actions
        allCategory(context){
            axios.get('/category')
            .then((response)=>{
                // console.log(response)
                context.commit('products', response.data.products)
            })
        },

        productDetail(context, payload){
            axios.get('/product-details/'+payload)
            .then((response)=>{
                // console.log(response.data);
                context.commit('productDetail', response.data.product)
            })
        },

    },

    mutations: {
        // FrontEnd Mutations
        products(state, payload){
            return state.products = payload
        },
        productDetail(state, payload){
            return state.product = payload
        },
    },
}
