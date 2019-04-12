<template>
    <div class="reviews-lst">
        <div v-for="(review, index) in reviews" class="media bg-light p-3 mb-2">
            <img :src="review.author.avatar" class="mr-3 img-fluid rounded-circle"  />
            <div class="media-body">
                <h5 class="mt-0">{{ review.title }} </h5>
                <p>
                    <span v-for="n in review.score"><i class="la la-lg la-star text-warning"></i></span>
                </p>
                {{ review.content }}
              </div>
        </div>
        <p class="text-center mt-3">
            <span v-if="page < last_page" @click="loadMore" class="btn btn-outline-warning">
                <i class="la la-angle-down"></i> Xem thêm
            </span>
        </p>
    </div>
</template>

<script>

    export default {

        props: {

            product:{
                required: true,
                type: Number,
            }
        },
        data: function() {
            return {
                page: 0,
                last_page: 0,
                reviews: []
            }
        },
        created() {
            this.fetchReviews();
        },
        methods: {
            fetchReviews(  ) {
                const t = this;
                const page = t.page + 1;
                axios.get('/ajax/get_reviews',{
                    params: {
                        product_id: t.$props.product,
                        page: page
                    }
                })
                .then(({data}) => {
                    t.reviews.push(...data.data) ;
                    t.page = data.from;
                    t.last_page = data.last_page;
                    console.log(t.reviews);
                })
            },
            loadMore(){
                this.fetchReviews();
            }

        }
    }
</script>