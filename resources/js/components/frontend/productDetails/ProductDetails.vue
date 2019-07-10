<template>
    <div class="ProductDetails">
        <!-- START PAGE-CONTENT -->
        <section class="page-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="page-menu">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="#">{{ singleproduct.category.cat_name }}</a></li>
                            <li class="active"><a href="#">{{ singleproduct.pro_name }}</a></li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <!-- CATEGORY-MENU-LIST START -->
                            Category Menu
                        <!-- END CATEGORY-MENU-LIST -->
                    </div>
                    <div class="col-md-9 col-sm-12 col-xs-12">
                        <!-- Start Toch-Prond-Area -->
                        <div class="toch-prond-area">
                            <div class="row">
                                <div class="col-md-5 col-sm-5 col-xs-12">
                                    <div class="clear"></div>
                                    <div class="tab-content">
                                        <!-- Product = display-1-1 -->
                                        <div role="tabpanel" class="tab-pane fade in active" id="display-1">
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <div class="toch-photo">
                                                        <a href="#"><img :src="`${singleproduct.pro_image}`" data-imagezoom="true" alt="#" /></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Product = display-1-1 -->
                                    </div>
                                </div>
                                <div class="col-md-7 col-sm-7 col-xs-12">
                                    <h2 class="title-product">{{ singleproduct.pro_name }}</h2>
                                    <div class="about-toch-prond">
                                        <p>
											<span class="rating">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star-o"></i>
											</span>
                                            <a href="#">1 reviews</a>
                                            /
                                            <a href="#">Write a review</a>
                                        </p>
                                        <hr />
                                        <p class="short-description">{{ singleproduct.pro_short_description }}</p>
                                        <hr />
                                        <span class="current-price">{{ singleproduct.pro_new_price }} .Tk</span>
                                        <span class="item-stock">Availability: <span class="text-stock" style="color: green;">In Stock</span></span>
                                    </div>
                                    <div class="product-quantity">
                                        <span>Qty</span>
                                        <input type="number" placeholder="1" />
                                        <button type="submit" class="toch-button toch-add-cart">Add to Cart</button>
                                        <button type="submit" class="toch-button toch-wishlist">wishlist</button>
                                        <button type="submit" class="toch-button toch-compare">Compare</button>
                                        <hr />
                                    </div>
                                </div>
                            </div>
                            <!-- Start Toch-Box -->
                            <div class="toch-box">
                                <div class="row">
                                    <div class="col-xs-12" style="margin-bottom: 50px;">
                                        <!-- Start Toch-Menu -->
                                        <div class="toch-menu">
                                            <ul role="tablist">
                                                <li role="presentation" class=" active"><a href="#description" role="tab" data-toggle="tab">Description</a></li>
                                            </ul>
                                        </div>
                                        <!-- End Toch-Menu -->
                                        <div class="tab-content toch-description-review">
                                            <!-- Start display-description -->
                                            <div role="tabpanel" class="tab-pane fade in active" id="description">
                                                <div class="row">
                                                    <div class="col-xs-12">
                                                        <div class="toch-description">
                                                            <p>{{ singleproduct.pro_long_lescription }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End display-description -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Toch-Box -->
                        </div>
                        <!-- End Toch-Prond-Area -->
                    </div>
                </div>
            </div>
        </section>
        <!-- END PAGE-CONTENT -->
    </div>
</template>

<script>
    export default {
        name: "ProductDetails",
        data () {
            return {}
        },
        mounted(){
            this.singleProduct();
        },
        computed:{
            singleproduct(){
                return this.$store.getters.singleproduct
            }
        },
        methods:{
            singleProduct(){
                this.$store.dispatch('productDetail', this.$route.params.id);
            }
        },
        watch:{
            $route(){
                this.singleProduct();
            }
        }
    }
</script>

<style scoped>

</style>
