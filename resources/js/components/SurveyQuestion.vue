<template>
    <div class="container">
        <div class="row">
            <div class="card">
                <div class="card-header">
                    {{ this.ques }}
                </div>
                <div class="card-body">
                    <div
                        class="card-text"
                        v-for="(option, index) in options"
                        :key="index"
                    >
                        <input
                            type="radio"
                            :value="option.id"
                            v-model="picked"
                        />
                        <label> {{ option.name }}</label>
                    </div>
                </div>
                <div class="card-footer ">
                <div class="d-flex justify-content-end align-items-center">
                    <button @click="submit_answer()" class="btn btn-primary">
                    Submit
                    </button>
                </div>
            </div>
            </div>
             
        </div>
    </div>
</template>

<script>
export default {
    props: {
        question: null,
    },
    data: () => ({
        ques:"",
        type:"",
        options:[],
         picked: []
    }),
    created(){
        this.ques=this.$props.question.question_body;
        this.type=this.$props.question.type;
        this.getOptions();
    },
    mounted() {
        //    this.fill_arr();
    },
    methods: {
        getOptions(){
            let formData = new FormData();
            formData.append('type',this.type);
          
            axios.post(`/survey-question-options`,formData).then((res)=>{
                this.options=res.data.cats;
                this.type="subcat";
           
            })
        },
        submit_answer(){
             let formData = new FormData();
            formData.append('type',this.type);
          
            axios.post(`/survey-question-options`,formData).then((res)=>{
                this.options=res.data.sub_cats;
                this.ques=res.data.question.question_body;
                this.$alert(
                    res.data.message,
                    "",
                    "success"
                    );
            })
        }
    }
    
}
</script>

<style></style>
