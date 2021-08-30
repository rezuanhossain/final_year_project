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

        <div class="card">

        </div>
    </div>
    
</template>

<script>

export default {
    props: {
        categories: "",
        sub_categories: ""
    },
    data: () => ({
        category_id:[],
        selected_sub_categories:[],
    }),
    watch: {
        category: function(newCategory, oldCategory) {
            this.processString(newCategory);
        }
    },

    created() {
        
    },

    methods: {

        getCategoryId(category){
            if(!this.category_id.includes(category.id)){
                this.category_id.push(category.id);
            }
            console.log(this.category_id);
            this.processSubCategory(this.sub_categories);

        },

    }
};
</script>