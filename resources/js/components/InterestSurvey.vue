<template>
    <div class="container">
        <div id="app1" class="align-middle">
            <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Launch demo modal
            </button> -->

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
                </div>
            </div>
            </div>
        </div>
        <br>
        <div class="card d-flex flex-row">
            <div class="card-body" @click="getCategoryId(category)" v-for="(category,index) in categories" :key="index">
                <h5 class="card-title">{{category.name}}</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Button</a>
            </div>
        </div>
        <hr>

            <div class="card d-flex flex-row">
            <div class="card-body" @click="getCategoryId(category)" v-for="(category,index) in categories" :key="index">
                <h5 class="card-title">{{category.name}}</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Button</a>
            </div>
        </div>
    </div>
    
</template>

<script>

export default {
    props: {
        categories: "",
        sub_categories:""
    },
    data: () => ({
        subCategories:[],
        category_id: [],
        fetched_sub_category: [],
        category: "",
        sub_category:[],
        sub_category_id: "",
    }),
    watch: {
        category: function(newCategory, oldCategory) {
            this.processString(newCategory);
        }
    },

    created() {
        this.fetch_sub_category_id();
    },

    methods: {

        getCategoryId(category){
            if(!this.category_id.includes(category.id)){
                this.category_id.push(category.id);
            }
            // console.log(this.sub_category);
            // this.processString(category_id);
            this.getSubcategory(this.category_id);

        },

        fetch_sub_category_id(){
            this.sub_categories.forEach(element => {
                // console.log(element.name);
                this.sub_category.push(element);
            });
        },

        getSubcategory(id){
            console.log('cat id :',id);
            this.sub_category.forEach(element=>{
                if(element.category_id == id){
                    if(!this.fetched_sub_category.includes(element.id)){
                        console.log(element.id);
                        this.fetched_sub_category.push(element.id);
                    }
                }

            });
                console.log(this.fetched_sub_category);

        },

        // getSubcategory(id){
        //     if(this.category_id == ){

        //     }
        // },

        // processString(category) {
        //     console.log(category);
        //     category_id = parseInt(category.split(".", 1)[0]);
        //     axios
        //         .get(`/get-selected-sub-categories/${this.category_id}`)
        //         .then(res => {
        //             this.sub_categories = res.data;
        //         })
        //         .catch(err => {
        //             console.log(err);
        //         });
        // },

        processString(category){
            console.log(category);
        },


        // fetch_sub_category() {
        //     axios.get("/get-sub-category").then(res => {
        //         console.log(res);
        //         this.fetched_sub_category = res.data;
        //     });
        // },

    }
};
</script>