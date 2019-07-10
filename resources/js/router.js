import Home from './components/frontend/home/Home'
import ProductDetails from './components/frontend/productDetails/ProductDetails'


export const routes = [
    {
        path: '/',
        name:'Home',
        component: Home
    },

    {
        path: '/product-details/:id',
        name:'ProductDetails',
        component: ProductDetails
    },

]
